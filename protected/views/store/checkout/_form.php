<form id="frm-delivery" class="frm-delivery" method="POST" onsubmit="return false;">
    
    <?php 
         echo CHtml::hiddenField('action','placeOrder');
         echo CHtml::hiddenField('country_code',      $merchant_info['country_code']);
         echo CHtml::hiddenField('currentController', 'store');
         
         if( isset( $s['kr_delivery_options']['delivery_type'] ) ){
            echo CHtml::hiddenField('delivery_type',     $s['kr_delivery_options']['delivery_type']);
         }
         
//         echo CHtml::hiddenField('cart_tip_percentage','');
//         echo CHtml::hiddenField('cart_tip_value','');
         echo CHtml::hiddenField('client_order_sms_code');
         echo CHtml::hiddenField('client_order_session');
         
         if (isset($is_guest_checkout)){
            echo CHtml::hiddenField('is_guest_checkout',2);
         }     
         if( isset( $s['kr_delivery_options']['delivery_type'] ) ){
             
            if ( $s['kr_delivery_options']['delivery_type']=="pickup") { 
             
//            @TODO check this partials
                
                $this->renderPartial('/store/checkout/_form-guest-checkout', array(
//
                )); 
            
            
                if ( isset( $is_guest_checkout ) ){ //<!--PICKUP GUEST--> //@TODO check why not working

                    $this->renderPartial('/store/checkout/_form-guest-checkout', array(

                    )); 
                } 
             
         //<!--PICKUP GUEST-->
    
    
            } else { 
            
              $this->renderPartial('/store/checkout/_form-filled-fields', array(
                  
                  'website_enabled_map_address' => $website_enabled_map_address,
                  'address_book'                => $address_book

                    )); 
             
            } 
             
        }     
             
             ?>
    

    
             
        <!--<hr />-->
        <!--<div class="box_style_2">-->
            <?php 
                $this->renderPartial('/store/checkout/_payment-list', array(
                  'merchant_id'  => $merchant_id,
                  'payment_list' => FunctionsV3::getMerchantPaymentList( $merchant_id )
                ));
                ?>



            <?php 
            
            if ( Yii::app()->functions->getOption("merchant_enabled_tip", $merchant_id ) == 2 ) { //@TODO replace later


//                $this->renderPartial('/store/menu/_tips', array(
//                              'merchant_id'  => $merchant_id,
//                              'payment_list' => FunctionsV3::getMerchantPaymentList( $merchant_id )
//                ));
//
                $this->renderPartial('/store/menu/_tips1', array(
                              'merchant_id'  => $merchant_id,
//                              'payment_list' => FunctionsV3::getMerchantPaymentList( $merchant_id )
                ));

            } ?>
           
             
             
             
             
    
</form>