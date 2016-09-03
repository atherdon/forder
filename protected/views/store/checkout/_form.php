<form id="frm-delivery" class="frm-delivery" method="POST" onsubmit="return false;">
    
    <?php 
         echo CHtml::hiddenField('action','placeOrder');
         echo CHtml::hiddenField('country_code',      $merchant_info['country_code']);
         echo CHtml::hiddenField('currentController', 'store');
         echo CHtml::hiddenField('delivery_type',     $s['kr_delivery_options']['delivery_type']);
         echo CHtml::hiddenField('cart_tip_percentage','');
         echo CHtml::hiddenField('cart_tip_value','');
         echo CHtml::hiddenField('client_order_sms_code');
         echo CHtml::hiddenField('client_order_session');
         
         if (isset($is_guest_checkout)){
            echo CHtml::hiddenField('is_guest_checkout',2);
         }     
        
         if ( $s['kr_delivery_options']['delivery_type']=="pickup") { ?>
    
    
             <?php if (isset($is_guest_checkout)){ //<!--PICKUP GUEST-->
           
                    $this->renderPartial('/store/checkout/_form-guest-checkout', array(

                    )); 
             } ?>  <!--PICKUP GUEST-->
    
    
        <?php } else { 
            
              $this->renderPartial('/store/checkout/_form-filled-fields', array(
                  
                  'website_enabled_map_address' => $website_enabled_map_address,
                  'address_book'      => $address_book

                    )); 
             
             } ?>
    

    
             
        <hr />

        <?php 
            $this->renderPartial('/store/checkout/_payment-list',array(
              'merchant_id'  => $merchant_id,
              'payment_list' => FunctionsV3::getMerchantPaymentList( $merchant_id )
            ));
            ?>
        
        
        
        <?php if ( Yii::app()->functions->getOption("merchant_enabled_tip",$merchant_id)==2) { 

                $this->renderPartial('/store/checkout/_tips',array(
//                              'merchant_id'  => $merchant_id,
//                              'payment_list' => FunctionsV3::getMerchantPaymentList( $merchant_id )
                ));

            } ?>

             
             
             
             
    
</form>