    <h3><?php echo Yii::t("default","Pickup information")?></h3>
    <p class="uk-text-bold"><?php echo $merchant_address;?></p>
                   
    <?php if (!isset($is_guest_checkout)):?> 
    <?php if ( getOptionA('mechant_sms_enabled')==""):?>
    <?php if ( getOption($merchant_id,'order_verification')==2):?>
    <?php $sms_balance=Yii::app()->functions->getMerchantSMSCredit($merchant_id);?>
    <?php if ( $sms_balance>=1):?>

      <div class="row top10">
          <div class="col-md-10">
        <?php echo CHtml::textField('contact_phone',isIsset($client_info['contact_phone']),array(
         'class'=>'mobile_inputs grey-fields',
         'placeholder'=>Yii::t("default","Mobile Number"),
         'data-validation'=>"required"  
        ))?>
       </div>             
      </div>  

            <?php endif;?>
    <?php endif;?>
    <?php endif;?>
    <?php endif;?>