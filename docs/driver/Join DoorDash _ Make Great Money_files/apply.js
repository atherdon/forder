var FIXED_POSITION_CUTOFF = 680
var formTopValue = 112;

function adjustFormContainer() {
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  if (windowHeight < FIXED_POSITION_CUTOFF && windowWidth >= 680) {
    $(".driver-apply-form-wrapper").css("right", "0px");
    $(".driver-apply-form-wrapper").addClass("small-height");
  } else {
    $(".driver-apply-form-wrapper").removeClass("small-height");
    if (windowWidth >= 860) {
      rightFormMargin = (windowWidth - 960)/2;
      if (rightFormMargin < 32) rightFormMargin = 32;
      $(".driver-apply-form-wrapper").css("right", rightFormMargin);
    }
  }
}

function setMediaCoverBackground() {
  var windowWidth = $(window).width();
  if (windowWidth < FIXED_POSITION_CUTOFF) {
    $(".media-cover").addClass("media-cover-darker");
  } else {
    $(".media-cover").removeClass("media-cover-darker");
  }
}

function continueApplication() {
  $("#modal-error").addClass("hidden")
  window.analytics.track('DA_return_to_application_button_clicked')
  email = document.getElementById("existing_email");
  phone = document.getElementById("existing_phone");
  var apiData = { email: email.value, phone: phone.value }
    $.ajax({
      url: '/api/v2/driver_applicant/',
      method: 'GET',
      data: apiData,
      contentType: 'application/json',
      dataType: "json",
    }).done(function (data) {
      window.analytics.track('DA_return_to_application_success')
      window.location.href = '/dasher/application/' + data['unique_link'];
    }).fail(function (jqXHR) {
      $("#modal-error").removeClass("hidden")
      console.log("There is no application with that email address.")
      window.analytics.track('DA_return_to_application_error')
    })
}

$(document).ready(function () {

  adjustFormContainer();
  setMediaCoverBackground();

  $("#driver-apply-form").bootstrapValidator({
    fields: {
      referred_by: {},
      phone_number: {
        message: 'Invalid phone number'
      }
    }
  }).on('success.form.bv', function (e) {
    e.preventDefault();

    var applyForm = $(e.target);
    var applyData = applyForm.serializeObject();

    $("body").addClass('page-loading');
    $("#driver-apply-container").hide();

    // reset form
    $('.has-error').removeClass('has-error');
    $('.help-block').text('');

    $.extend(applyData, {
      referral_domain: document.referrer,
      referred_by: URL_PARAMS['referred_by'] || applyData.referred_by,
      source: URL_PARAMS['source'] || URL_PARAMS['utm_source'] || '',
    });

    if (window.REFERRER_ID) {
      applyData.referred_by_id = window.REFERRER_ID;
    }

    $.ajax({
      url: '/api/v2/driver_applicant/',
      method: 'POST',
      contentType: 'application/json',
      data: JSON.stringify(applyData)
    }).done(function (data) {
      delete localStorage.token;
      try {
        $.ajax({
          url: DEBUG ? "https://ingest.doorcrawl.com/js_events" : "https://ingest.doordash.com/js_events",
          method: "POST",
          contentType: 'application/json',
          data: JSON.stringify({
            Eventname: 'submit_dasher_app_event_amp',
            properties: {phone: applyData.phone_number},
            User_id: data.id
          })
        }).fail(function(){
          console.log('ingest error', 'submit_dasher_app_event_amp')
        })

        window.analytics.identify(data.unique_link);
        window.analytics.track('submit_dasher_app_event', {'phone': applyData.phone_number, 'test_data':'foobar'}, function() {
          window.location.href = '/dasher/application/' + data.unique_link + '/' + window.location.search;
        });

        // Just in case segment callback fails... (e.g. they have
        // ghostery on with segment blocked) Redirect after 10 seconds
        setTimeout(function() {
          window.location.href = '/dasher/application/' + data.unique_link + '/' + window.location.search;
        }, 5000);
      } catch(err) {
        window.location.href = '/dasher/application/' + data.unique_link + '/' + window.location.search;
      }
    }).fail(function (jqXHR) {
      $("#driver-apply-container").show();
      $("body").removeClass('page-loading');
      $("#driver-apply-form").find('[type="submit"]').attr('disabled', false);

      _.each(jqXHR.responseJSON, function (value, key) {
        $("#driver-apply-form").bootstrapValidator('updateStatus', key, 'INVALID');
        $("[name='" + key + "']")
          .parents('.form-group')
          .find('.help-block').first().text(value);
      });
    }).always(function () {
      $("body").removeClass('page-loading');
    })
  });

  // $("#vehicle_type").prop("selectedIndex", -1);
  // $("#market").prop("selectedIndex", -1);
  // $("#submarket").prop("selectedIndex", -1);

  function resetVehicleSection() {
    $("#vehicle_type").prop("selectedIndex", 0);
    $("#vehicle_type").addClass("placeholder");
  }

  $("#market").change(function () {
    var m_to_sm_map = markets_to_submarkets
    var selectedMarket = this.value
    if (m_to_sm_map[selectedMarket].submarkets.length>1) {
      $("#submarket-group").show();
      $(".driver-apply-form-wrapper").css("top", "96px");
      formTopValue = 96;
      $(".container.callouts.mobile").css("padding-top", "72px");
      submarkets = m_to_sm_map[selectedMarket].submarkets;
      dropDown = document.querySelector('#submarket');
      dropDown.innerHTML = '<option disabled selected>Subregion</option>';
      for (var key in submarkets) {
        var submarket = submarkets[key];
        if ('name' in submarket && 'id' in submarket) {
          dropDown.innerHTML += '<option value="' + submarket['id'] + '">' + submarket['name'] + '</option>';
        }
      }
    } else {
      $("#submarket-group").hide();
      $(".driver-apply-form-wrapper").css("top", "112px");
      formTopValue = 112;
      populateVehicleTypesForSubmarket(m_to_sm_map[selectedMarket].name);
    }

    fixFormToScrollBottom();
    resetVehicleSection();
  });


  function populateVehicleTypesForSubmarket(sm) {
    sm_to_vtypes_map = submarkets_to_vtypes
    if (sm_to_vtypes_map[sm]) {
      var types = sm_to_vtypes_map[sm].vtypes;
      if (typeof(types)=="string"||typeof(types)=="unicode") {
        types = JSON.parse(types);
      }
      vehicle_types = types;
    } else {
      vehicle_types = Object.keys(vtypes)
    }
    dropDown = document.querySelector('#vehicle_type')
    dropDown.innerHTML = '<option disabled selected>Vehicle Type</option>';
    vehicle_types.forEach(function(value) {
      if (vtypes[value]) {
        dropDown.innerHTML += '<option value="' + value + '">' + vtypes[value] + '</option>';
      } else if (value==6) {
        // Rent a Scooter
        dropDown.innerHTML += '<option value="2">Rent a Scooter</option>';
      }
    });
  }

  $("#submarket").change(function () {
    var submarketName = $(this).find(":selected").text()
    populateVehicleTypesForSubmarket(submarketName);
  });

  $("#vehicle_type").change(function() {
    if (this.value) {
      $("#vehicle_type").removeClass('placeholder');
    }
  });

  $('#startApplication').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 600);
  });

});

$( window ).resize(function() {
  adjustFormContainer();
  setMediaCoverBackground();
});

function fixFormToScrollBottom(limit) {
  var formElement = $(".driver-apply-form-wrapper");
  var currentPosition = formElement.height() + formTopValue + $(window).scrollTop();
  var totalPageHeight = (document.height !== undefined) ? document.height : document.body.offsetHeight;
  var newBottom = limit - (totalPageHeight - ($(window).scrollTop() + $(window).height()));
  if (totalPageHeight - limit <= currentPosition ) {
    $(".driver-apply-form-wrapper").css("top", "auto");
    $(".driver-apply-form-wrapper").css("bottom", newBottom + "px");
    $(".driver-apply-form-wrapper").css("z-index", "auto");

  } else {
    $(".driver-apply-form-wrapper").css("top", formTopValue + "px");
    $(".driver-apply-form-wrapper").css("bottom", "auto");

  }
}

$(window).scroll(function() {
  fixFormToScrollBottom(132);
  var scrollTop = $(window).scrollTop;
  var backgroundPositionVertical = 50 - (scrollTop/50);
  $(".driver-apply-media-cover").css("background-position", "25% " + backgroundPositionVertical + "%");

});
