<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link">
                <i class="icon_close_alt2"></i>
            </a>
            
            
            
            
            <form class="popup-form" id="forms">
                
                <?php echo CHtml::hiddenField('mobile_country_code', 
                        Yii::app()->functions->getAdminCountrySet(true)
                    ); ?>   
                
                <?php echo CHtml::hiddenField('action', 'clientLogin')?>
                <?php echo CHtml::hiddenField('currentController', 'store')?>   
                
                <?php if ($google_login_enabled==2 || $fb_flag==2 ) : ?>
                
                    <?php if ( $fb_flag == 2) : ?>
                
                        <a href="javascript:fbcheckLogin();" class="fb-button orange-button medium rounded">
                            <i class="ion-social-facebook"></i>
                                <?php echo t("login with Facebook")?>
                        </a> 
                
                    <?php endif; ?>

                    <?php if ($google_login_enabled==2):?>
                
                        <div class="top10"></div>
                        <a href="<?php echo Yii::app()->createUrl('/store/googleLogin')?>" 
                           class="google-button orange-button medium rounded">
                           <i class="ion-social-googleplus-outline"></i>
                           <?php echo t("Sign in with Google")?>
                        </a> 
                        
                    <?php endif;?>

                    <div class="login-or">
                      <span>
                          <?php echo t("Or")?>
                      </span>
                    </div>
                        
               <?php endif;?>
                  
                
              <div class="login_icon">
                <i class="icon_lock_alt"></i>
              </div>
                
                <?php echo CHtml::textField('username', '', array(
                                    'class'       => 'form-control form-white',
                                    'placeholder' => t("Username"),
                                    'required'    => true
                              ))?>
                    
                    
                <?php echo CHtml::passwordField('password', '', array(
                                    'class'       => 'form-control form-white',
                                    'placeholder' => t("Password"),
                                    'required'    => true
                             ))?>
                    
                 <?php if ($captcha_customer_login==2):?>
                    <div class="top10">
                        <div id="kapcha-1"></div>
                    </div>
                <?php endif;?>     
                    

                <div class="text-left">                                  
                    <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#forgot">
                        Forgot Password?
                    </a>
                </div>
                        
                <button type="submit" class="btn btn-submit">
                    <?php echo t("Submit")?>
                </button>
            </form>
        </div>
    </div>
</div><!-- End modal -->   