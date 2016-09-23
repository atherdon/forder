 <div class="tab-content">
     
    <div class="tab-pane <?php if( $tab_active == '2' ) { echo '  '; } else { echo ' active '; } ; ?>" id="profile" role="tabpanel">

         <?php $this->renderPartial('/store/profile/form',array(
                    'data' => $info           
          ));?>
        

    </div>
     
    <div class="tab-pane <?php if( $tab_active != '2' ) { echo '  '; } else { echo ' active '; } ; ?>" id="addressbook" role="tabpanel">

         <?php $this->renderPartial('/store/profile/address-book', array(
                    'client_id' => Yii::app()->functions->getClientId(),
                    'data'      => Yii::app()->functions->getAddressBookByID( isset($_GET['id'] ) ? $_GET['id'] : '' ),
                    'tabs'      => $tabs
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
                    'data' => Yii::app()->functions->getCreditCardInfo(isset($_GET['id'])?$_GET['id']:''),
                    'tabs' => $tabs
         	 ));
         } else {
		     $this->renderPartial('/front/manage-credit-card',array(
                        'tabs' => $tabs
		     ));
         }
		 ?>     
       
       <?php } ?>
        
        
  

   </div>
                    
</div>
<!-- @TODO move picture upload to this section -->