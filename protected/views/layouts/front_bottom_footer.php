<!-- Footer ================================================== -->
<footer>
    <div class="container">
        <div class="row row-footer-links">
            
            
            <div class="col-md-4 col-sm-4" id="newsletter" style="margin-right: 50px;">

                <?php if ( getOptionA('disabled_subscription') == ""):?>
                
                    <h3 style="margin-top: 0px;">
                        Newsletter
                    </h3>
                    <p>
                        Join our newsletter to keep be informed about offers and news.
                    </p>
                    
                    <div id="message-newsletter_2">
                    </div>
                    
                    <form method="post" name="frm-subscribe" id="frm-subscribe" onsubmit="return false;">
                        <?php echo CHtml::hiddenField('action','subscribeNewsletter')?>
                        <div class="form-group">
                            <?php echo CHtml::textField('subscriber_email','',array(
                                            'placeholder' => t("E-mail"), // @TODO or Your mail?
                                            'required'    => true,
                                            'class'       => "form-control"
                                      ));
                            ?>
                            
                        </div>
                        <input type="submit" value=" <?php echo t("Subscribe")?>" class="btn_1" id="submit-newsletter_2">
                        
                    </form>
                
                <?php endif;?>

            </div>
            
            
            <div class="col-md-4 col-sm-3 responsive-center">
  
                <?php $this->widget('zii.widgets.CMenu', FunctionsV3::getFooterMenu1() );?> 
                
            </div>
            <div class="col-md-3 col-sm-3 responsive-center">
                                
                 <?php $this->widget('zii.widgets.CMenu', FunctionsV3::getFooterMenu2() );?> 

            </div>
            
            
<!--
            
            
            <div class="col-md-3 col-sm-4">
                
               
            </div>-->
        </div><!-- End row -->
        
        
        <?php
            $this->renderPartial('/store/home/_browse-delivery-list', [
        
//                        'data' => $data,

            ] ); 
        ?>   
        
        <?php
            $this->renderPartial('/store/home/_footer-links', [
                    'social_flag' => $social_flag,
//                        'social_flag' => $social_flag,

            ] ); 
        ?>   
        
        

        
        
    </div><!-- End container -->
    
    
    
    
    </footer>
    <!-- End Footer =============================================== -->
    
<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- MODAL LOGIN -->
<?php 

$this->renderPartial('/layouts/forms/_front_login', [
        'google_login_enabled'   => $google_login_enabled,
        'fb_flag'                => $fb_flag,
        'captcha_customer_login' => $captcha_customer_login,
        //'do-action'              => $_GET['do-action'],
     ] ); ?>

<!-- MODAL REGISTRATION-->
<?php $this->renderPartial('/layouts/forms/_front_sign_up', [
        'captcha_customer_signup' => $captcha_customer_signup,
    ] ); ?>   

<!-- MODAL FORGOT PASSWORD -->
<?php $this->renderPartial('/layouts/forms/_front_forgot_password', [
        'captcha_customer_login' => $captcha_customer_login,
    ] ); ?>   
