<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            
            <form class="popup-form" id="myRegister" method="POST">
                
                <?php echo CHtml::hiddenField('action', 'clientRegistrationModal')?>
                <?php echo CHtml::hiddenField('currentController', 'store')?>
                <?php echo CHtml::hiddenField('single_page', 2)?>   
                
                 <?php 
                        $verification = Yii::app()->functions->getOptionAdmin("website_enabled_mobile_verification");	    
                        if ( $verification == "yes"){
                           echo CHtml::hiddenField('verification', $verification);
                        }
                        if (getOptionA('theme_enabled_email_verification') == 2){
                           echo CHtml::hiddenField('theme_enabled_email_verification', 2);
                        }
                ?>
                
                <div class="login_icon">
                    <i class="icon_lock_alt"></i>
                </div>

                <?php echo CHtml::textField('first_name', '', array(
                           'class'       => 'form-control form-white',
                           'placeholder' => t("First Name"),
                           'required'    => true               
                  ))?>
                    
                <?php echo CHtml::textField('last_name', '', array(
                                'class'       => 'form-control form-white',
                                'placeholder' => t("Last Name"),
                                'required'    => true
                           ))?>
                <?php echo CHtml::textField('contact_phone','', array(
                                'class'       => 'form-control form-white mobile_inputs',
                                'placeholder' => t("Mobile"),
                                'required'    => true
               ))?>
                <?php echo CHtml::textField('email_address','',array(
                                'class'       => 'form-control form-white',
                                'placeholder' => t("Email address"),
                                'required'    => true
               ))?>
                 <?php echo CHtml::passwordField('password','', array(
                                'class'       => 'form-control form-white',
                                'placeholder' => t("Password"),
                                'required'    => true
               ))?>
               <?php echo CHtml::passwordField('cpassword','', array(
                                'class'       => 'form-control form-white',
                                'placeholder' => t("Confirm Password"),
                                'required'    => true
               )); 
                   $FunctionsK = new FunctionsK();
                   $FunctionsK->clientRegistrationCustomFields();
               ?> 
                
                <?php if ($captcha_customer_signup==2):?>         		 
                    <div class="top10">
                        <div id="kapcha-2"></div>
                    </div>
                <?php endif;?> 
                
                   
                <div id="pass-info" class="clearfix"></div>
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <?php 
                            echo CHtml::checkBox('terms_n_condition', false, array(
                             'value'    => 2,
//                             'class'    => "icheck",
                             'required' => true
                           ));?>
                        
                        <label for="terms_n_condition">
                            <span>
                                I Agree to the 
                                <strong>Terms &amp; Conditions</strong>
                            </span>
                        </label>
                    </div>
                </div>
                    
                <button type="submit" class="btn btn-submit">
                    <?php echo t("Create Account")?>
                </button>
            </form>
        </div>
    </div>
</div><!-- End Register modal -->