<!-- Login modal -->   
<div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="ForgotPassword" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            
            <form action="#" class="popup-form" id="ForgotPassword" method="POST" onsubmit="return false;">
                
                <?php echo CHtml::hiddenField('mobile_country_code', 
                      Yii::app()->functions->getAdminCountrySet(true)
                  ); ?>
                
                <?php echo CHtml::hiddenField('action','forgotPassword')?>
		<?php echo CHtml::hiddenField('do-action', isset( $_GET['do-action'] ) ? $_GET['do-action']:'' )?>

                
                <div class="login_icon">
                  <i class="icon_lock_alt"></i>
                </div>
                
                <h3 style="color:white;"><?php echo t("Forgot Password")?></h3>
                
                <?php echo CHtml::textField('username-email', '', array(
                                'class'       => 'form-control form-white',
                                'placeholder' => t("Email address"),
                                'required'    => true
	               ))?>
                                    
                 <?php if ($captcha_customer_login==2):?>
                    <div class="top10">
                        <div id="kapcha-1"></div>
                    </div>
                <?php endif;?>     
                
                <button type="submit" class="btn btn-submit">
                    <?php echo t("Retrieve Password")?>
                </button>
                
            </form>
        </div>
    </div>
</div><!-- End modal -->   