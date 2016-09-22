 <div class="tab-content">
     
    <div class="tab-pane active" id="profile" role="tabpanel">

         <?php $this->renderPartial('/store/profile/form',array(
            'data' => $info           
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

         <?php $this->renderPartial('/front/address-book', array(
           'client_id'=>Yii::app()->functions->getClientId(),
           'data'=>Yii::app()->functions->getAddressBookByID( isset($_GET['id'])?$_GET['id']:'' ),
           'tabs'=>$tabs
         ));?>
        
        


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
                    
</div>
<!-- @TODO move picture upload to this section -->