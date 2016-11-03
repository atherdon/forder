<?php if ( getOptionA( 'disabled_website_ordering' ) != "yes" ){  ?>



<!--Order Sidebar-->    
<div class="col-md-3 <?php echo $disabled_addcart == "yes" ? "hide" : '' ?>" id="sidebar">
    <div class="theiaStickySidebar">
        <div id="cart_box" >
                        
            <h3>
                <?php echo t("Your Order")?> 
                <i class="icon_cart_alt pull-right"></i>
            </h3>

             <?php
                    $this->renderPartial('/store/menu/cart/_items-list', [
                                //        'data'    => $data,
                                //        'item_id' => 1 
//                                                    'menu'             => $menu,
                    ] ); 
            ?>   
            
            
           <!--MAX AND MIN ORDR-->
           <?php if ($minimum_order>0):?>
            <div class="delivery-min">
               <p class="small center">
                   <?php echo Yii::t("default","Subtotal must exceed")?> 
                   <?php echo displayPrice(baseCurrency(),prettyFormat($minimum_order,$merchant_id))?>
               </p>    
            </div>
           <?php endif;?>
           
           <?php if ($merchant_minimum_order_pickup>0):?>
            <div class="pickup-min">
               <p class="small center">
                 <?php echo Yii::t("default","Subtotal must exceed")?> 
                 <?php echo displayPrice(baseCurrency(),prettyFormat($merchant_minimum_order_pickup,$merchant_id))?>
               </p>    
            </div>
           <?php endif;?>
              
           
            <?php
                    $this->renderPartial('/store/menu/cart/_delivery-info', [
                                        'data'        => $data,
                                        'distance'    => $distance,
                                        'merchant_id' => $merchant_id,
                                        'delivery_fee' => $delivery_fee, 
                                //        'item_id' => 1 

                    ] ); 
           ?>   
           
            
            

            
            
            
<!--            <table class="table table_summary">
                <tbody>
                     </tbody>
            </table>-->

            
            
            <hr>
            
            
            <?php //var_dump( $now_time ); die(); ?> 

            <?php $this->renderPartial('/store/menu/cart/_delivery', array( 
                'merchant_id' => $merchant_id,
                'now'         => $now,
                'now_time'    => $now_time
                ) );  ?>
           
            
           
            
            
          
          
           
            <?php
                   $this->renderPartial('/store/menu/cart/_total', [
                               //        'data'    => $data,
                               //        'item_id' => 1 
   
                   ] ); 
           ?>   
            
           
           
      
            <hr>
            
            <?php if ( $checkout['code']==1):?>
            
              <a href="javascript:;" class="btn_full">
                  <?php echo $checkout['button']?>
              </a>
            
            <?php else :?>
              
              <?php if ( $checkout['holiday']==1):?>
            
                 <?php echo CHtml::hiddenField('is_holiday', $checkout['msg'], array('class'=>'is_holiday'));?>
            
                 <p class="text-danger">
                     <?php echo $checkout['msg']?>
                 </p>
                 
              <?php else :?>
                 
                 <p class="text-danger">
                     <?php echo $checkout['msg']?>
                 </p>
                 <p class="small">
                    <?php echo Yii::app()->functions->translateDate(date('F d l')." @ ".timeFormat(date('c'),true));?>
                 </p>
                 
              <?php endif;?>
                 
           <?php endif;?>
           
        </div><!-- End cart_box -->
</div><!-- End theiaStickySidebar -->
</div><!-- End col-md-3 -->
<!--Order Sidebar-->     

<?php } ?>