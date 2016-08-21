<div class="spinner"></div>

<div id="driver-apply-container">
  <div class="media-cover-container driver-apply-jumbotron">
    <div class="media-cover driver-apply-media-cover"></div>
    <div class="media-cover-headings-container container">

      <div class="media-cover-headings">
        <h1 class="media-cover-header driver-apply-header">
          Become a<br>Dasher
        </h1>
        <h3 class="media-cover-subheader">
          Make great money and set your own schedule.
        </h3>
        <p class="media-cover-extra">
          DoorDash is a technology company that connects customers with local businesses.
Customers order meals and other items from their favorite local merchants and Dashers deliver it directly to their doors.
        </p>
      </div>

      <div class="driver-apply-form-wrapper" style="top: 112px; bottom: auto; right: 471.5px;">
        <form role="form" id="driver-apply-form" 
              class="info-card info-card-padding roundify form-horizontal bv-form" 
              data-bv-message="This value is not valid" 
              data-bv-feedbackicons-valid="glyphicon glyphicon-ok" 
              data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" 
              data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" 
              novalidate="novalidate">

          <input type="hidden" name="csrfmiddlewaretoken" value="hodx4e2HX2v3J9K1QHKiPEtmDRPm9419">
          
          
          <div class="form-group has-feedback">
            <div class="col-xs-12">
              <input type="text" class="form-control" id="name" name="name" placeholder="First and Last Name" required="" data-bv-field="name"><i class="form-control-feedback" data-bv-icon-for="name" style="display: none; top: 0px;"></i>
              <span class="help-block"></span>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
          </div>
          <div class="form-group has-feedback">
            <div class="col-xs-12">
              <input type="tel" class="form-control" id="phone_number" name="phone_number" data-bv-phone-message="Please enter a valid phone number" placeholder="Cell Phone Number" data-bv-phone="true" data-bv-phone-country="US" required="" data-bv-field="phone_number"><i class="form-control-feedback" data-bv-icon-for="phone_number" style="display: none; top: 0px;"></i>
              <span class="help-block"></span>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="phone_number" data-bv-result="NOT_VALIDATED" style="display: none;">Invalid phone number</small><small class="help-block" data-bv-validator="phone" data-bv-for="phone_number" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid phone number</small></div>
          </div>
          <div class="form-group has-feedback">
            <div class="col-xs-12">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required="" data-bv-field="email"><i class="form-control-feedback" data-bv-icon-for="email" style="display: none; top: 0px;"></i>
              <span class="help-block"></span>
            <small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
          </div>
          <div class="form-group has-feedback">
            <div class="col-xs-12 select-container">
              <select name="market" id="market" class="form-control placeholder" required="" data-bv-field="market">
                <option disabled="" selected="">City</option>

                <option value="15">Atlanta</option>

                <option value="26">Austin</option>

                <option value="5">Boston</option>

                <option value="21">Charlotte</option>

                <option value="4">Chicago</option>

                <option value="22">Columbus</option>

                <option value="9">Dallas</option>

                <option value="17">Denver</option>

                <option value="10">Houston</option>

                <option value="18">Indianapolis</option>

                <option value="11">Minneapolis</option>

                <option value="24">Nashville</option>

                <option value="8">New York City</option>

                <option value="1">Northern California</option>

                <option value="13">Phoenix</option>

                <option value="23">San Antonio</option>

                <option value="14">Seattle</option>

                <option value="2">Southern California</option>

                <option value="16">Toronto</option>

                <option value="19">Vancouver</option>

                <option value="7">Washington, D.C.</option>

              </select><i class="form-control-feedback" data-bv-icon-for="market" style="display: none; top: 0px;"></i>
              <div class="chevron"></div>
              <span class="help-block"></span>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="market" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
          </div>
          <div style="display: none;" id="submarket-group" class="form-group has-feedback">
            <div class="col-xs-12 select-container">
              <select name="submarket" id="submarket" class="form-control placeholder" required="" data-bv-field="submarket">
                <option disabled="" selected="">Submarket</option>
              </select><i class="form-control-feedback" data-bv-icon-for="submarket" style="display: none; top: 0px;"></i>
              <div class="chevron"></div>
              <span class="help-block"></span>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="submarket" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
          </div>
          <div class="form-group has-feedback">
            <div class="col-xs-12 select-container">
              <select name="vehicle_type" id="vehicle_type" class="form-control placeholder" required="" data-bv-field="vehicle_type">
                <option disabled="" selected="">Vehicle Type</option>
                <option value="">Please select a market</option>
              </select><i class="form-control-feedback" data-bv-icon-for="vehicle_type" style="display: none; top: 0px;"></i>
              <div class="chevron"></div>
              <span class="help-block"></span>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="vehicle_type" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
          </div>
          <div class="form-group has-feedback">
            <div class="col-xs-12">

              <input type="text" class="form-control" id="referred_by" name="referred_by" placeholder="Referrer Phone # (optional)" value="" data-bv-field="referred_by"><i class="form-control-feedback" data-bv-icon-for="referred_by" style="display: none; top: 0px;"></i>

              <span class="help-block"></span>
            </div>
          </div>

          <div class="form-group apply" id="form-apply-button">
            <div class="col-xs-12">
              <button type="submit" class="apply-button btn btn-lg btn-primary btn-block">
                Become a Dasher
              </button>
            </div>
          </div>
          <br>
          <a id="continue-existing-application-button" data-toggle="modal" class="modal-button" data-target="#continue-application-modal">Already started signing up?</a>
          <hr>
          <div class="terms">By clicking the “Become a Dasher” button above, I consent to receive emails, calls, or SMS messages including by automated telephone dialing system from DoorDash to my email or phone number(s) above for informational and/or marketing purposes. Consent to receive messages is not a condition to make a purchase or sign up. I have read and understand the relevant <a href="https://www.doordash.com/privacy" target="_blank">Privacy Statement.</a> </div>
        </form>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="content-section content-section-alternate content-info">

      <div class="doordasher-info mobile">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="media-cover-subheader">
            Make great money and set your own schedule.
            </h3>
            <p class="media-cover-extra">
              DoorDash is an on-demand delivery service.
Customers order meals and other items from their favorite local merchants and we deliver it directly to their doors.
            </p>
          </div>
        </div>
      </div>

      <div class="container callouts desktop">
        <div class="row">
          <div class="col-sm-7" id="callout-money">
            <div class="callout-image"></div>
            <div class="callout">
              <h4>Great Money</h4>
              <p>Make great money and keep 100% of the tips</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-7" id="callout-flexibility">
            <div class="callout-image"></div>
            <div class="callout">
              <h4>Flexibility</h4>
              <p>Work in the morning, at night, or any time in between</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-7" id="callout-convenience">
            <div class="callout-image"></div>
            <div class="callout">
              <h4>Convenience</h4>
              <p>Be your own boss. Start today in any of 250+ cities</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container callouts mobile">
        <div class="row">
          <div class="centered-container">
            <div class="callouts-container">
              <div id="callout-money" class="callout-row col-sm-4">
                <div class="callout-image"></div>
                <div class="callout">
                  <h4>Great Money</h4>
                  <p>Make great money and keep 100% of the tips</p>
                </div>
              </div>

              <div id="callout-flexibility" class="callout-row col-sm-4">
                <div class="callout-image"></div>
                <div class="callout">
                  <h4>Flexibility</h4>
                  <p>Work in the morning, at night, or any time in between</p>
                </div>
              </div>

              <div id="callout-convenience" class="callout-row col-sm-4">
                <div class="callout-image"></div>
                <div class="callout">
                  <h4>Convenience</h4>
                  <p>Start today in any of 250+ cities, and be your own boss</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container faq-container desktop">
        <div class="row">
          <div class="col-sm-7">
            <div class="faq-box">
              <h2 class="section-header">Frequently Asked Questions</h2>
              <div class="faq header-body-holder">
                <p class="header">What does being a Dasher entail?</p>
                <p class="body">Deliver food and other items from local merchants to customers.</p>
              </div>
              <div class="faq header-body-holder">
                <p class="header">What's required to be a Dasher?</p>
                <p class="body">You must be 18 years old and have an iPhone or Android smartphone. You can use any car to deliver, as long as you have 1 year of driving experience, a valid driver’s license, insurance, and a clean driving record. <a id="dashing-requirements-button" class="modal-button" data-toggle="modal" data-target="#dashing-requirements-modal">Full list of requirements.</a>
                </p>
              </div>
              <div class="faq header-body-holder">
                <p class="header">Is insurance provided?</p>
                <p class="body">Yes, we provide commercial auto insurance that covers up to $1,000,000 in bodily injury and/or property damage to third parties arising out of accidents while making a DoorDash delivery in the United States.</p>
              </div>
              <div class="faq header-body-holder">
                <p class="header">Are other vehicle types allowed?</p>
                <p class="body">Yes, you can use motorcycles, scooters, bikes, or even walk in some markets. See the list of vehicle types when signing up.</p>
              </div>
              <div class="faq header-body-holder">
                <p class="header">Where is DoorDash available?</p>
                <p class="body">
                  We currently operate in Atlanta, Boston, Charlotte, Chicago, Columbus, Dallas / Ft. Worth, Denver, Houston, Indianapolis, Los Angeles, Minneapolis, Manhattan, Brooklyn, Orange County, Phoenix, San Diego, San Francisco, San Jose / Silicon Valley, SF East Bay, Seattle, Toronto, Vancouver, Washington, D.C, San Antonio, and Nashville.
                </p>
              </div>




              <div class="extended-faq-link">
                <a target="_blank" href="#">
                    Click here for the full FAQ
                </a>
              </div>





            </div>
          </div>
        </div>
      </div>

      <div class="container faq-container mobile">
        <div class="row">
          <div class="col-sm-12">
            <div class="faq-box">
              <h2 class="section-header">Frequently Asked Questions</h2>
              <div class="faq header-body-holder">
                <p class="header">What does this job entail?</p>
                <p class="body">Deliver food and other items from local merchants to customers.</p>
              </div>
              <div class="faq header-body-holder">
                <p class="header">What's required for this job?</p>
                <p class="body">You must be 18 years old and have an iPhone or Android smartphone.</p>
              </div>
              <div class="faq header-body-holder">
                <p class="header">What's required for this job?</p>
                <p class="body">You must be 18 years old and have an iPhone or Android smartphone.You can use any car to deliver, as long as you have 2 years of driving experience, valid driver’s license, insurance, and a clean driving record. <a id="dashing-requirements-button" class="modal-button" data-toggle="modal" data-target="#dashing-requirements-modal">Full list of requirements.</a>
                </p>
              </div>
              <div class="faq header-body-holder">
                <p class="header">Is insurance provided?</p>
                <p class="body">Yes, we provide commercial auto insurance that covers up to $1,000,000 in bodily injury and/or property damage to third parties arising out of accidents while making a DoorDash delivery in the United States.</p>
              </div>
              <div class="faq header-body-holder">
                <p class="header">Where do we deliver?</p>
                <p class="body">
                  We currently operate in Atlanta, Boston, Charlotte, Chicago, Columbus, Dallas / Ft. Worth, Denver, Houston, Indianapolis, Los Angeles, Minneapolis, Manhattan, Brooklyn, Orange County, Phoenix, San Diego, San Francisco, San Jose / Silicon Valley, SF East Bay, Seattle, Toronto, Vancouver, Washington, D.C, San Antonio, and Nashville.
                </p>
              </div>




              <div class="extended-faq-link">
                <a target="_blank" href="#">
                    Click here for the full FAQ
                </a>
              </div>




            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="content-section content-section-alternate steps-container">
      <div class="container steps-intermediate-container">
        <h2 class="section-header">
            Getting Started is Easy
        </h2>
        <div class="steps header-body-holder">
          <p class="header">1. Sign Up Online</p>
          <p class="body">Submit a sign-up form with your vehicle and personal information</p>
        </div>
        <div class="steps header-body-holder">
          <p class="header">2. Attend Orientation</p>
          <p class="body">We’ll talk about DoorDash and answer any questions you have</p>
        </div>
        <div class="steps header-body-holder last-step">
          <p class="header">3. Start Dashing</p>
          <p class="body">Right after orientation, hit the road and start making deliveries</p>
        </div>
        <button class="apply-button btn btn-lg btn-primary btn-block" id="startApplication">
          Become a Dasher</button>
      </div>
    </div>

  </div>
</div>
