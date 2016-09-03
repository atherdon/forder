<?php if ( getOptionA('captcha_order')==2 || getOptionA('captcha_customer_signup')==2):?>             
    <div class="top10 capcha-wrapper">
    <?php //GoogleCaptcha::displayCaptcha()?>
    <div id="kapcha-1"></div>
    </div>
<?php endif;?>          



<!--SMS Order verification-->
 <?php if ( getOptionA('mechant_sms_enabled')==""):?>
 <?php if ( getOption($merchant_id,'order_verification')==2):?>
 <?php $sms_balance=Yii::app()->functions->getMerchantSMSCredit($merchant_id);?>
 <?php if ( $sms_balance>=1):?>
 <?php $sms_order_session=Yii::app()->functions->generateCode(50);?>
 <p class="top20 center">
 <?php echo t("This merchant has required SMS verification")?><br/>
 <?php echo t("before you can place your order")?>.<br/>
 <?php echo t("Click")?> <a href="javascript:;" class="send-order-sms-code" data-session="<?php echo $sms_order_session;?>">
    <?php echo t("here")?></a>
 <?php echo t("receive your order sms code")?>
 </p>
 <div class="top10 text-center">
 <?php 
 echo CHtml::textField('order_sms_code','',array(	            
   'placeholder'=>t("SMS Code"),
   'maxlength'=>8,
   'class'=>'grey-fields text-center'
 ));
 ?>
 </div>
 <?php endif;?>
 <?php endif;?>
 <?php endif;?>
 <!--END SMS Order verification-->