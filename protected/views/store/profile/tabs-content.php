 <div class="tab-content">
     
    <div class="tab-pane active" id="profile" role="tabpanel">

         <?php $this->renderPartial('/front/profile',array(
            'data'=>$info           
          ));?>
        
        <?php //$this->renderPartial('/store/menu/details-content', array(
//                            'merchant_id'       => $merchant_id,    
//                            'theme_hours_tab'   => $theme_hours_tab,
//                            'theme_reviews_tab' => $theme_reviews_tab,
//                            'phone'             => $phone,
//                            'ratings'           => $ratings,
//                            'photo_enabled'     => $photo_enabled,
//                            'theme_info_tab'    => $theme_info_tab,
      //  ) ); ?>    

    </div>
     
    <div class="tab-pane" id="addressbook" role="tabpanel">

         <?php $this->renderPartial('/front/address-book',array(
           'client_id'=>Yii::app()->functions->getClientId(),
           'data'=>Yii::app()->functions->getAddressBookByID( isset($_GET['id'])?$_GET['id']:'' ),
           'tabs'=>$tabs
         ));?>
        
        
         <?php //$this->renderPartial('/store/menu/restaurant-menu', array(
//                                    'merchant_id'      => $merchant_id,
//                                    'menu'             => $menu,
//                                    'disabled_addcart' => $disabled_addcart,
//                                    'tc'               => $tc,
//
//                                    'data'             => $data,          
//                                    'distance'         => $distance,
//
//                                    'delivery_fee'     => $delivery_fee,
//                                    'checkout'          => $checkout,
//                                    'now'               => $now,
//                                    'now_time'          => $now_time,
//                                    'minimum_order'     => $minimum_order,
//                                    'merchant_minimum_order_pickup' => $merchant_minimum_order_pickup,
        //) ); ?>  


    </div>
     
    <div class="tab-pane" id="orderhistory" role="tabpanel">
        
        <?php $this->renderPartial('/front/order-history',array(           
           'data'=>Yii::app()->functions->clientHistyOrder( Yii::app()->functions->getClientId() )
         ));?>
        
        

    </div>

    <div class="tab-pane" id="creditcards" role="tabpanel">

       <?php if ( $disabled_cc != "yes") { ?>
       
       <?php 
         if (isset($_GET['do']) && $tabs == 4){
         	 $this->renderPartial('/front/manage-credit-card-add',array(
         	   'data'=>Yii::app()->functions->getCreditCardInfo(isset($_GET['id'])?$_GET['id']:''),
         	   'tabs'=>$tabs
         	 ));
         } else {
		     $this->renderPartial('/front/manage-credit-card',array(
		       'tabs'=>$tabs
		     ));
         }
		 ?>     
       
       <?php } ?>
        
        
  

   </div>

    
    <?php if ( 0 ) { ?> 
    <div class="tab-pane" id="mypoints" role="tabpanel">

       <!--BOOK A TABLE-->
       <?php if ($booking_enabled):?>
       <!--<li>-->
           <?php $this->renderPartial('/store/menu/book-table',array(
//                                            'merchant_id' => $merchant_id
                   ));
           ?>        
       <!--</li>-->
       <?php endif;?>
       <!--END BOOK A TABLE-->

   </div>
    <?php } ?> 
     
     
                    
</div>

<!-- @TODO move picture upload to this section -->