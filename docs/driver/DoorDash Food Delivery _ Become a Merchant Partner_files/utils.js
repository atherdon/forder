/**
 * Returns string with special characters and spaces removed
 * @param  {String} string String to be stripped
 * @return {String}        Stripped string
 */
function stripSpecialCharsAndSpaces(string) {
  return string.replace(/[^A-Za-z0-9]/g, "");
}

function findPos(obj) {
  var curtop = 0;
  if (obj.offsetParent) {
    do {
      curtop += obj.offsetTop;
    } while (obj = obj.offsetParent);
    return [curtop];
  }
}

// Path e.g. /consumer/me/order_cart/232/ (note the slashes)
function getApiUrlForPath(path, version) {
  // Uncomment below if we ever want to support api.doordash.com
  // (for this to happen, we need to deal with CORS and move off CSRF)
  // var l = document.location;
  // return l.protocol + "//api." + l.host.replace(/^www\./,'') + "/" + version + path;

  if (version == "v1") return "/api" + path;

  return "/api/" + version + path;
}

var URL_PARAMS = (function(a) {
  if (a == "") return {};
  var b = {};
  for (var i = 0; i < a.length; ++i) {
    var p = a[i].split('=');
    if (p.length != 2) continue;
    b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
  }
  return b;
})(window.location.search.substr(1).split('&'));


/* Animation */

function doBounce(element, times, distance, speed) {
  for (i = 0; i < times; i++) {
    element.animate({
        marginTop: '-=' + distance
      }, speed)
      .animate({
        marginTop: '+=' + distance
      }, speed);
  }
}

/* Extend Date object */

Date.prototype.getMonthName = function() {
  var monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
  ];
  return monthNames[this.getMonth()];
}

Date.prototype.getShortMonthName = function() {
  return (this.getMonthName()).substring(0, 3);
}

Date.prototype.getDayName = function() {
  var d = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday',
    'Saturday'
  ];
  return d[this.getDay()];
}

Date.prototype.getShortDayName = function() {
  return (this.getDayName()).substring(0, 3);
}

Date.prototype.toLocaleTimeStringNoSeconds = function() {
  var hours = this.getHours() % 12,
    mins = this.getMinutes(),
    ampm = this.getHours() >= 12 ? 'PM' : 'AM';
  hours = ((hours === 0) ? 12 : hours);
  var fixed_mins = String(mins).length < 2 ? "0" + mins : mins;

  return hours + ':' + fixed_mins + ' ' + ampm;
}

Date.prototype.getPrintableAMPMTime = function() {
  var hours = this.getHours();
  var minutes = this.getMinutes();
  var ampm = hours >= 12 ? 'pm' : 'am';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0' + minutes : minutes;
  var strTime = hours + ':' + minutes + ' ' + ampm;
  return strTime;
}

/* Price Formats */

function cents_to_dollar_string(cents) {
  if (typeof(cents) === 'number') {
    var number = (cents / 100.0).toFixed(2);
    return "$" + number;
  } else {
    return cents
  }
}

function dollar_string_to_cents(dollar) {
  return Math.round(parseFloat(dollar.substr(1)) * 100);
}

/* Distance Formats */
function meters_to_miles_string(distance) {
  if (distance) {
    var convertedValue =  (distance * 0.00062137).toFixed(2);
    return convertedValue + ' mi';
  }
}

/* Objects */

Object.size = function(obj) {
  var size = 0,
    key;
  for (key in obj) {
    if (obj.hasOwnProperty(key)) size++;
  }
  return size;
};

$.fn.serializeObject = function() {
  var o = {};
  var a = this.serializeArray();
  $.each(a, function() {
    if (o[this.name] !== undefined) {
      if (!o[this.name].push) {
        o[this.name] = [o[this.name]];
      }
      o[this.name].push(this.value || '');
    } else {
      o[this.name] = this.value || '';
    }
  });
  return o;
};

/* Arrays */

// Array Remove - By John Resig (MIT Licensed)
Array.prototype.remove = function(from, to) {
  var rest = this.slice((to || from) + 1 || this.length);
  this.length = from < 0 ? this.length + from : from;
  return this.push.apply(this, rest);
};

Array.prototype.sum = function(attribute) {
  // attribute is an optional property used to find the value to be summed
  // [1, 2, 3].sum() // => 6
  // [{value: 5}, {'value': 6}].sum('value') // => 11
  // [{total: function() { return 10; }}, {total: function() { return 6; }}].sum('total') // => 16

  var res = 0;
  for (var i = 0; i < this.length; i++) {
    switch (typeof this[i][attribute]) {
      case "number":
        res += this[i][attribute];
        break;
      case "function":
        res += this[i][attribute]();
        break;
      case "undefined":
        res += this[i];
        break;
    }
  }

  return res;
}

/* Accounts */

$(function() {
  var logOutLink = $("#logout-link");
  if (logOutLink && logOutLink.length != 0) {
    logOutLink.click(function() {
      localStorage.clear();
      $("#logout-link-form").submit();
    });
  }
});

/* HTTP Error Handling */

function handleAPIErrorResponse(response, errorMessage) {
  alert(getMessageForAPIErrorResponse(response, errorMessage));
}

function getMessageForAPIErrorResponse(response, errorMessage) {
  var status = response.status;
  var errorMessage = errorMessage || "An error has occurred";
  if (status == 400) {
    var responseJSON = response.responseJSON;
    if (responseJSON !== undefined) {
      var errorMessage = "Error:";
      for (var key in responseJSON) {
        if (responseJSON.hasOwnProperty(key)) {
          errorMessage += " " + responseJSON[key] + ".";
        }
      }
      return errorMessage;

    } else {
      return errorMessage;
    }
  } else if (status == 0) {
    return "An error has occurred. Please check your internet connection";
  } else if (status == 404) {
    return "An unexpected error occurred and has been reported to the team. Please try again."
  } else {
    return errorMessage;
  }
}

/* utilily for country name to ISO code conversion */

var CountryIsoConverter = (function() {
  var countryISO = {
    'AF': 'Afghanistan',
    'AX': 'Aland Islands',
    'AL': 'Albania',
    'DZ': 'Algeria',
    'AS': 'American Samoa',
    'AD': 'Andorra',
    'AO': 'Angola',
    'AI': 'Anguilla',
    'AQ': 'Antarctica',
    'AG': 'Antigua And Barbuda',
    'AR': 'Argentina',
    'AM': 'Armenia',
    'AW': 'Aruba',
    'AU': 'Australia',
    'AT': 'Austria',
    'AZ': 'Azerbaijan',
    'BS': 'Bahamas',
    'BH': 'Bahrain',
    'BD': 'Bangladesh',
    'BB': 'Barbados',
    'BY': 'Belarus',
    'BE': 'Belgium',
    'BZ': 'Belize',
    'BJ': 'Benin',
    'BM': 'Bermuda',
    'BT': 'Bhutan',
    'BO': 'Bolivia',
    'BA': 'Bosnia And Herzegovina',
    'BW': 'Botswana',
    'BV': 'Bouvet Island',
    'BR': 'Brazil',
    'IO': 'British Indian Ocean Territory',
    'BN': 'Brunei Darussalam',
    'BG': 'Bulgaria',
    'BF': 'Burkina Faso',
    'BI': 'Burundi',
    'KH': 'Cambodia',
    'CM': 'Cameroon',
    'CA': 'Canada',
    'CV': 'Cape Verde',
    'KY': 'Cayman Islands',
    'CF': 'Central African Republic',
    'TD': 'Chad',
    'CL': 'Chile',
    'CN': 'China',
    'CX': 'Christmas Island',
    'CC': 'Cocos (Keeling) Islands',
    'CO': 'Colombia',
    'KM': 'Comoros',
    'CG': 'Congo',
    'CD': 'Congo, Democratic Republic',
    'CK': 'Cook Islands',
    'CR': 'Costa Rica',
    'CI': 'Cote D\'Ivoire',
    'HR': 'Croatia',
    'CU': 'Cuba',
    'CY': 'Cyprus',
    'CZ': 'Czech Republic',
    'DK': 'Denmark',
    'DJ': 'Djibouti',
    'DM': 'Dominica',
    'DO': 'Dominican Republic',
    'EC': 'Ecuador',
    'EG': 'Egypt',
    'SV': 'El Salvador',
    'GQ': 'Equatorial Guinea',
    'ER': 'Eritrea',
    'EE': 'Estonia',
    'ET': 'Ethiopia',
    'FK': 'Falkland Islands (Malvinas)',
    'FO': 'Faroe Islands',
    'FJ': 'Fiji',
    'FI': 'Finland',
    'FR': 'France',
    'GF': 'French Guiana',
    'PF': 'French Polynesia',
    'TF': 'French Southern Territories',
    'GA': 'Gabon',
    'GM': 'Gambia',
    'GE': 'Georgia',
    'DE': 'Germany',
    'GH': 'Ghana',
    'GI': 'Gibraltar',
    'GR': 'Greece',
    'GL': 'Greenland',
    'GD': 'Grenada',
    'GP': 'Guadeloupe',
    'GU': 'Guam',
    'GT': 'Guatemala',
    'GG': 'Guernsey',
    'GN': 'Guinea',
    'GW': 'Guinea-Bissau',
    'GY': 'Guyana',
    'HT': 'Haiti',
    'HM': 'Heard Island & Mcdonald Islands',
    'VA': 'Holy See (Vatican City State)',
    'HN': 'Honduras',
    'HK': 'Hong Kong',
    'HU': 'Hungary',
    'IS': 'Iceland',
    'IN': 'India',
    'ID': 'Indonesia',
    'IR': 'Iran, Islamic Republic Of',
    'IQ': 'Iraq',
    'IE': 'Ireland',
    'IM': 'Isle Of Man',
    'IL': 'Israel',
    'IT': 'Italy',
    'JM': 'Jamaica',
    'JP': 'Japan',
    'JE': 'Jersey',
    'JO': 'Jordan',
    'KZ': 'Kazakhstan',
    'KE': 'Kenya',
    'KI': 'Kiribati',
    'KR': 'Korea',
    'KW': 'Kuwait',
    'KG': 'Kyrgyzstan',
    'LA': 'Lao People\'s Democratic Republic',
    'LV': 'Latvia',
    'LB': 'Lebanon',
    'LS': 'Lesotho',
    'LR': 'Liberia',
    'LY': 'Libyan Arab Jamahiriya',
    'LI': 'Liechtenstein',
    'LT': 'Lithuania',
    'LU': 'Luxembourg',
    'MO': 'Macao',
    'MK': 'Macedonia',
    'MG': 'Madagascar',
    'MW': 'Malawi',
    'MY': 'Malaysia',
    'MV': 'Maldives',
    'ML': 'Mali',
    'MT': 'Malta',
    'MH': 'Marshall Islands',
    'MQ': 'Martinique',
    'MR': 'Mauritania',
    'MU': 'Mauritius',
    'YT': 'Mayotte',
    'MX': 'Mexico',
    'FM': 'Micronesia, Federated States Of',
    'MD': 'Moldova',
    'MC': 'Monaco',
    'MN': 'Mongolia',
    'ME': 'Montenegro',
    'MS': 'Montserrat',
    'MA': 'Morocco',
    'MZ': 'Mozambique',
    'MM': 'Myanmar',
    'NA': 'Namibia',
    'NR': 'Nauru',
    'NP': 'Nepal',
    'NL': 'Netherlands',
    'AN': 'Netherlands Antilles',
    'NC': 'New Caledonia',
    'NZ': 'New Zealand',
    'NI': 'Nicaragua',
    'NE': 'Niger',
    'NG': 'Nigeria',
    'NU': 'Niue',
    'NF': 'Norfolk Island',
    'MP': 'Northern Mariana Islands',
    'NO': 'Norway',
    'OM': 'Oman',
    'PK': 'Pakistan',
    'PW': 'Palau',
    'PS': 'Palestinian Territory, Occupied',
    'PA': 'Panama',
    'PG': 'Papua New Guinea',
    'PY': 'Paraguay',
    'PE': 'Peru',
    'PH': 'Philippines',
    'PN': 'Pitcairn',
    'PL': 'Poland',
    'PT': 'Portugal',
    'PR': 'Puerto Rico',
    'QA': 'Qatar',
    'RE': 'Reunion',
    'RO': 'Romania',
    'RU': 'Russian Federation',
    'RW': 'Rwanda',
    'BL': 'Saint Barthelemy',
    'SH': 'Saint Helena',
    'KN': 'Saint Kitts And Nevis',
    'LC': 'Saint Lucia',
    'MF': 'Saint Martin',
    'PM': 'Saint Pierre And Miquelon',
    'VC': 'Saint Vincent And Grenadines',
    'WS': 'Samoa',
    'SM': 'San Marino',
    'ST': 'Sao Tome And Principe',
    'SA': 'Saudi Arabia',
    'SN': 'Senegal',
    'RS': 'Serbia',
    'SC': 'Seychelles',
    'SL': 'Sierra Leone',
    'SG': 'Singapore',
    'SK': 'Slovakia',
    'SI': 'Slovenia',
    'SB': 'Solomon Islands',
    'SO': 'Somalia',
    'ZA': 'South Africa',
    'GS': 'South Georgia And Sandwich Isl.',
    'ES': 'Spain',
    'LK': 'Sri Lanka',
    'SD': 'Sudan',
    'SR': 'Suriname',
    'SJ': 'Svalbard And Jan Mayen',
    'SZ': 'Swaziland',
    'SE': 'Sweden',
    'CH': 'Switzerland',
    'SY': 'Syrian Arab Republic',
    'TW': 'Taiwan',
    'TJ': 'Tajikistan',
    'TZ': 'Tanzania',
    'TH': 'Thailand',
    'TL': 'Timor-Leste',
    'TG': 'Togo',
    'TK': 'Tokelau',
    'TO': 'Tonga',
    'TT': 'Trinidad And Tobago',
    'TN': 'Tunisia',
    'TR': 'Turkey',
    'TM': 'Turkmenistan',
    'TC': 'Turks And Caicos Islands',
    'TV': 'Tuvalu',
    'UG': 'Uganda',
    'UA': 'Ukraine',
    'AE': 'United Arab Emirates',
    'GB': 'United Kingdom',
    'US': 'United States',
    'UM': 'United States Outlying Islands',
    'UY': 'Uruguay',
    'UZ': 'Uzbekistan',
    'VU': 'Vanuatu',
    'VE': 'Venezuela',
    'VN': 'Viet Nam',
    'VG': 'Virgin Islands, British',
    'VI': 'Virgin Islands, U.S.',
    'WF': 'Wallis And Futuna',
    'EH': 'Western Sahara',
    'YE': 'Yemen',
    'ZM': 'Zambia',
    'ZW': 'Zimbabwe'
  };

  function getCountryName(countryCode) {
    if (countryISO.hasOwnProperty(countryCode)) {
      return countryISO[countryCode];
    } else {
      return countryCode;
    }
  }

  function getCountryCode(countryName) {
    for (var prop in countryISO) {
      if (countryISO.hasOwnProperty(prop)) {
        if (countryISO[prop] === countryName)
          return prop;
      }
    }
  }

  var countryIsoConverter = {};
  countryIsoConverter.getCountryCode = getCountryCode;
  countryIsoConverter.getCountryName = getCountryName;

  return countryIsoConverter;
}());

// Cookies //
function setCookie(ckey, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = ckey + "=" + cvalue + "; " + expires;
}

function getCookie(ckey) {
    var name = ckey + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function deleteCookie(ckey) {
    document.cookie = ckey + '=;expires=Thu, 01-Jan-70 00:00:01 GMT;';
}
