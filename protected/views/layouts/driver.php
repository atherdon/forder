<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <script type="text/javascript" src="<?php echo Widgets::driverScriptPath(); ?>generic2-1647.js"></script>
  
  </script>
  
  </script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
      <?php echo CHtml::encode($this->pageTitle); ?>
  </title>
  <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">

  <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>bootstrap.min.css">

  <script src="<?php echo Widgets::driverScriptPath(); ?>jquery.min.js"></script>
  <script src="<?php echo Widgets::driverScriptPath(); ?>fastclick.min.js"></script>
  <script src="<?php echo Widgets::driverScriptPath(); ?>underscore-min.js"></script>
  <script src="<?php echo Widgets::driverScriptPath(); ?>bootstrap.min.js"></script>
  <script src="<?php echo Widgets::driverScriptPath(); ?>5326580297.js"></script>


  <script src="<?php echo Widgets::driverScriptPath(); ?>csrf.js"></script>
  <script src="<?php echo Widgets::driverScriptPath(); ?>utils.js"></script>

  <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>bootstrapValidator.min.css">
  <script type="text/javascript" src="<?php echo Widgets::driverScriptPath(); ?>bootstrapValidator.min.js"></script>

  <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>doordash-common.min.css">
  <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Widgets::driverStylesPath(); ?>base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Widgets::driverStylesPath(); ?>apply-driver.css">

</head>

<body id="driver-apply-body">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <h1 class="doordash-logo">
        <a href="https://www.doordash.com/">doordash</a>
      </h1>
    </div>

    <div class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
      
        <li>
            <a href="https://www.doordash.com/consumer/login/">Login</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>

    
    <?php if ( 0 ) { ?>
    <!--MAIN CONTENT-->
<?php echo $content;?>
    <?php } ?>
    
  <?php if ( 0 ) { ?>  
  <div id="driver-apply-success-container" style="display:none">
    <div class="container">
      <div class="content-section-headings">
        <h2 class="content-section-header center-text">
            Thanks for Applying!</h2>
        <div class="center-text text-muted" style="font-size: 18px;">
          <p>
              Please check your email for a confirmation.
          </p>
          <p>
              A DoorDash Dash Team Builder will call you for a 5 min. interview within 1-2 days.
          </p>
        </div>
      </div>
    </div>
  </div>
   <?php } ?> 
    

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
          <form role="form" id="driver-apply-form" class="info-card info-card-padding roundify form-horizontal bv-form" data-bv-message="This value is not valid" data-bv-feedbackicons-valid="glyphicon glyphicon-ok" data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" novalidate="novalidate">

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
                  <a target="_blank" href="http://doordash.squarespace.com/">
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
                  <a target="_blank" href="http://doordash.squarespace.com/">
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

  <!-- Continue Application Modal -->
  <div id="continue-application-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Continue your DoorDash Application</h4>
        </div>
        <div class="modal-body">
          <p>We're excited to receive your application!<br> Enter the email address and phone number that you used to apply below.</p>
          <input type="email" class="form-control" id="existing_email" name="existingEmail" placeholder="Email Address" required="">
          <br>
          <input type="text" class="form-control" id="existing_phone" name="existingPhone" placeholder="Phone Number" required="">
          <p class="hidden" id="modal-error">We cannot find an application with that email address and phone number combination.</p>
        </div>
        <div class="modal-footer">
          <button type="button" onclick="continueApplication()" id="#continueApplicationSubmit" class="btn btn-default">Continue to Application</button>
        </div>
      </div>

    </div>
  </div>

  
 <?php if ( 0 ) { ?> 
  
 <!-- Dasher Requirements Modal -->
  <div id="dashing-requirements-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Requirements to Dash</h4>
        </div>
        <div class="modal-body">

          <div class="modal-section">
            <h2>Drivers must have clean driving records</h2>
              <p>Drivers must be 18 or older with at least 1 year of driving experience</p>
              <p>Drivers cannot have any major violations in the last 7 years, including: DUI, Reckless Driving, Homicide or Assault, Driving with a suspended license, Failure to stop or report and driving with a license that is suspended or expired</p>
              <p>Drivers with less than 2 years of driving experience cannot have any incidents* in the last 3 years</p>
              <p>Drivers under 21 with more than 2 years of driving experience cannot have more than 1 incident* in the last 3 years</p>
              <p>Drivers 21 and older with more than 2 years of driving experience cannot have more than 2 incidents* in the last 3 years</p>

              <p class="italic">*An incident is an accident or a moving violation other than a major violation. An accident and violation occurring at the same time will be considered one incident.</p>
          </div>

          <div class="modal-section">
            <h2>Applicants must pass a background check</h2>
              <p>No violent crimes</p>
              <p>No sexual offenses</p>
              <p>No theft</p>
              <p>No property damage</p>
              <p>No felonies</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  
 
 <?php } ?>
 
 <?php if ( 0 ) { ?>
 
  <script type="text/javascript" src="<?php echo Widgets::driverScriptPath(); ?>apply.js"></script>
  
 <?php } ?>

  
  <?php if ( 0 ) { ?>
  <footer>
  <div class="container">
    <div class="footer-nav footer-link-grey footer">
      <a href="https://www.doordash.com/about/">About</a> •
      <a href="http://blog.doordash.com/">Blog</a> •

      <a href="https://www.doordash.com/jobs/">Jobs</a> •
      <a href="https://www.doordash.com/terms/">Terms</a> •
      <a href="https://www.doordash.com/privacy/">Privacy</a> •
      <a href="https://www.doordash.com/food-delivery/">Delivery Locations</a> •
      <a href="https://www.doordash.com/support/">Help &amp; Support</a> •
      <a href="https://www.doordash.com/merchant/apply/">Become a Merchant</a> •
      <a href="https://www.doordash.com/driver/apply/">Become a Dasher</a>
    </div>

    <div class="footer-social">
      <a href="http://twitter.com/doordash" target="_blank">
        <span class="fa-stack social-icon">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <a href="http://facebook.com/doordash" target="_blank">
        <span class="fa-stack social-icon">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <a href="http://instagram.com/doordash" target="_blank">
        <span class="fa-stack social-icon">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </div>

    <div class="footer-copyright">© 2016 DoorDash</div>
  </div>
</footer>
<?php } ?>
  
  
  

</body>
</html>
