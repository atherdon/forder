<?php if ( getOptionA( 'disabled_website_ordering' ) != "yes" ){  ?>



<!--Order Sidebar-->    
<div class="col-md-3 <?php echo $disabled_addcart == "yes" ? "hide" : '' ?>" id="sidebar">
    <div class="theiaStickySidebar">
        <div id="cart_box" >
                        
            <h3>
                <?php echo t("Your Order")?> <i class="icon_cart_alt pull-right"></i>
            </h3>
            
            
            
            <!--<div class="item-order-wrap"></div>-->
            
            
            
            <table class="table table_summary item-order-wrap">
            <?php if( 0 ) { ?>    
                <tbody>
                    <tr>
                        <td>
                            <a href="#0" class="remove_item">
                                <i class="icon_minus_alt"></i>
                            </a> <strong>1x</strong> Enchiladas
                        </td>
                        <td>
                            <strong class="pull-right">$11</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#0" class="remove_item">
                                <i class="icon_minus_alt"></i></a>
                            <strong>2x</strong> Burrito
                        </td>
                        <td>
                            <strong class="pull-right">$14</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#0" class="remove_item">
                                <i class="icon_minus_alt"></i>
                            </a> <strong>1x</strong> Chicken
                        </td>
                        <td>
                            <strong class="pull-right">$20</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#0" class="remove_item">
                                <i class="icon_minus_alt"></i>
                            </a> <strong>2x</strong> Corona Beer
                        </td>
                        <td>
                            <strong class="pull-right">$9</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#0" class="remove_item">
                                <i class="icon_minus_alt"></i>
                            </a> <strong>2x</strong> Cheese Cake
                        </td>
                        <td>
                            <strong class="pull-right">$12</strong>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>    
            </table>
            
            
            
            
            <!--DELIVERY INFO-->
            <table class="table">
                <tbody>
                    
                    <?php if ( $data['service'] == 3 ){ ?>
                      <tr>
                          <td>
                              <h5><?php echo t("Distance Information")?></h5>
                          </td>
                     </tr>     
                  <?php } else { ?> 

                      <tr>
                           <td>
                                <h5><?php echo t("Delivery Information")?></h5>
                           </td>
                      </tr>     

                 <?php } ?>
                    
                    
                <?php if ($distance){ ?>
                    <tr>
                        <td>
                            <?php echo t("Distance") ?> : 
                            <span class="pull-right">
                                <?php echo number_format($distance,1) . ' ' . $distance_type ?>
                            </span>
                        </td>
                   </tr>     
                <?php } else { ?> 

                    <tr>
                         <td>
                             <?php echo t("Distance") ?> : 
                             <span class="pull-right">
                                 <?php echo t("not available") ?>
                             </span>
                         </td>
                    </tr>     

               <?php } ?>
                        
  
                <tr>
                    <td>
                         <?php echo t("Delivery Est")?> : 
                         <span class="pull-right">
                             <?php echo FunctionsV3::getDeliveryEstimation($merchant_id)?>
                         </span>
                    </td>
                </tr>
                     
	        
	        <?php  if (!empty($merchant_delivery_distance)){ ?>
                    
                    <tr>
                        <td>
                            <?php echo t("Delivery Distance Covered"); ?> : 
                            <span class="pull-right">
                                <?php echo $merchant_delivery_distance . ' '. $distance_type_orig; ?>
                            </span>
                        </td>
                    </tr>

                <?php } else  {  ?>
                    
                     <tr>
                        <td>
                            <?php echo t("Delivery Distance Covered"); ?> : 
                            <span class="pull-right">
                                <?php echo t("not available"); ?>
                            </span>
                        </td>
                    </tr>

                <?php } ?>
   	        
                <?php if ( $delivery_fee ){ ?>
                    
                    <tr>
                        <td>
                            <?php echo t("Delivery Fee"); ?> : 
                            <span class="pull-right">
                                <?php echo FunctionsV3::prettyPrice( $delivery_fee ); ?>
                            </span>
                        </td>
                    </tr>
                    
                    
	        
                <?php } else  {  ?>
                    
                     <tr>
                        <td>
                            <?php echo t("Delivery Fee"); ?> : 
                            <span class="pull-right">
                                <?php echo t("Free Delivery"); ?>
                            </span>
                        </td>
                    </tr>
                    
                 
                
                <?php } ?>    
                    
                    <tr>
                        <td>
                            <a href="javascript:;" class="top10 green-color change-address block text-center">
                                [<?php echo t("Change Your Address here")?>]
                            </a>   
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--END DELIVERY INFO-->
            <hr>
            
<!--            <table class="table table_summary">
                <tbody>
                     </tbody>
            </table>-->

            
            
            <hr>
            

            <?php $this->renderPartial('/store/menu/_delivery', array( 
                'merchant_id' => $merchant_id,
                'now'         => $now,
                'now_time'    => $now_time
                ) );  ?>
           
            
           
            
            
          
          
           
        
            
           
           
           
           <hr>
            <table class="table table_summary">
                <tbody>
                    
                    <tr>
                        <td>
                            Subtotal <span class="pull-right">$56</span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Subtotal <span class="pull-right">$56</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Delivery fee <span class="pull-right">$10</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="total">
                            TOTAL <span class="pull-right">$66</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <hr>
            
            <?php if ( $checkout['code']==1):?>
              <a href="javascript:;" class="btn_full">
                  <?php echo $checkout['button']?>
              </a>
            <?php else :?>
              
              <?php if ( $checkout['holiday']==1):?>
                 <?php echo CHtml::hiddenField('is_holiday',$checkout['msg'],array('class'=>'is_holiday'));?>
                 <p class="text-danger"><?php echo $checkout['msg']?></p>
              <?php else :?>
                 <p class="text-danger"><?php echo $checkout['msg']?></p>
                 <p class="small">
                 <?php echo Yii::app()->functions->translateDate(date('F d l')." @ ".timeFormat(date('c'),true));?></p>
              <?php endif;?>
                 
           <?php endif;?>
           
        </div><!-- End cart_box -->
</div><!-- End theiaStickySidebar -->
</div><!-- End col-md-3 -->
<!--Order Sidebar-->     

<?php } ?>



<?php if ( 0 ){ ?>
     <?php //if ( getOptionA( 'disabled_website_ordering' ) != "yes" ){ ?>
     <div id="menu-right-content" class="col-md-4 border menu-right-content <?php echo $disabled_addcart=="yes"?"hide":''?>" >
     
     <div class="theiaStickySidebar">
      <div class="box-grey rounded  relative">
      
        <div class="star-float"></div>
      
        
        
        
        
        
        
        
        <!--DELIVERY INFO-->
        <div class="inner center">
         <button type="button" class="close modal-close-btn" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button> 
                   
            <?php if ($data['service']==3):?>
            <p class="bold"><?php echo t("Distance Information")?></p>
            <?php else :?>
	        <p class="bold"><?php echo t("Delivery Information")?></p>
	        <?php endif;?>
	        
	        <p>
	        <?php 
	        if ($distance){
	        	echo t("Distance").": ".number_format($distance,1)." $distance_type";
	        } else echo  t("Distance").": ".t("not available");
	        ?>
	        </p>
	        
	        <p class="delivery-fee-wrap">
	        <?php echo t("Delivery Est")?>: <?php echo FunctionsV3::getDeliveryEstimation($merchant_id)?></p>
	        
	        <p class="delivery-fee-wrap">
	        <?php 
	        if (!empty($merchant_delivery_distance)){
	        	echo t("Delivery Distance Covered").": ".$merchant_delivery_distance." $distance_type_orig";
	        } else echo  t("Delivery Distance Covered").": ".t("not available");
	        ?>
	        </p>
	        
	        <p class="delivery-fee-wrap">
	        <?php 
	        if ($delivery_fee){
	             echo t("Delivery Fee").": ".FunctionsV3::prettyPrice($delivery_fee);
	        } else echo  t("Delivery Fee").": ".t("Free Delivery");
	        ?>
	        </p>
	        
	        <a href="javascript:;" class="top10 green-color change-address block text-center">
	        [<?php echo t("Change Your Address here")?>]
	        </a>
	        
        </div>
        <!--END DELIVERY INFO-->
        
        
        
        
        
        
        
        
        
        
        
        <!--CART-->
        <div class="inner line-top relative">
        
           <i class="order-icon your-order-icon"></i>
           
           <p class="bold center"><?php echo t("Your Order")?></p>
           
           <div class="item-order-wrap"></div>
           
           <!--VOUCHER STARTS HERE-->
           <?php //Widgets::applyVoucher($merchant_id);?>
           <!--VOUCHER STARTS HERE-->
           
           <!--MAX AND MIN ORDR-->
           <?php if ($minimum_order>0):?>
           <div class="delivery-min">
              <p class="small center"><?php echo Yii::t("default","Subtotal must exceed")?> 
              <?php echo displayPrice(baseCurrency(),prettyFormat($minimum_order,$merchant_id))?>
           </div>
           <?php endif;?>
           
           <?php if ($merchant_minimum_order_pickup>0):?>
           <div class="pickup-min">
              <p class="small center"><?php echo Yii::t("default","Subtotal must exceed")?> 
              <?php echo displayPrice(baseCurrency(),prettyFormat($merchant_minimum_order_pickup,$merchant_id))?>
           </div>
           <?php endif;?>
              
	        <a href="javascript:;" class="clear-cart">[<?php echo t("Clear Order")?>]</a>
           
        </div> <!--inner-->
        <!--END CART-->
        
        
        
        
        
        
        
        
        
        
        
        
        <!--DELIVERY OPTIONS-->
        <div class="inner line-top relative delivery-option center">
           <i class="order-icon delivery-option-icon"></i>
           <p class="bold"><?php echo t("Delivery Options")?></p>
           
           <?php echo CHtml::dropDownList('delivery_type',$now,
           (array)Yii::app()->functions->DeliveryOptions($merchant_id),array(
             'class'=>'grey-fields'
           ))?>
           
           <?php echo CHtml::hiddenField('delivery_date',$now)?>
           <?php echo CHtml::textField('delivery_date1',
            FormatDateTime($now,false),array('class'=>"j_date grey-fields",'data-id'=>'delivery_date'))?>
           
           <div class="delivery_asap_wrap"> 
	         <?php echo CHtml::textField('delivery_time',$now_time,
	          array('class'=>"timepick grey-fields",'placeholder'=>Yii::t("default","Delivery Time")))?>	       
	          <span class="delivery-asap">
	          <?php echo CHtml::checkBox('delivery_asap',false,array('class'=>"icheck"))?>
	          <span class="text-muted"><?php echo Yii::t("default","Delivery ASAP?")?></span>	          
	         </span>       	         	        
           </div><!-- delivery_asap_wrap-->
           
           
           
           
           
           
           
           
           
           <?php if ( $checkout['code']==1):?>
              <a href="javascript:;" class="orange-button medium checkout"><?php echo $checkout['button']?></a>
           <?php else :?>
              <?php if ( $checkout['holiday']==1):?>
                 <?php echo CHtml::hiddenField('is_holiday',$checkout['msg'],array('class'=>'is_holiday'));?>
                 <p class="text-danger"><?php echo $checkout['msg']?></p>
              <?php else :?>
                 <p class="text-danger"><?php echo $checkout['msg']?></p>
                 <p class="small">
                 <?php echo Yii::app()->functions->translateDate(date('F d l')."@".timeFormat(date('c'),true));?></p>
              <?php endif;?>
           <?php endif;?>
                                                                
        </div> <!--inner-->
        <!--END DELIVERY OPTIONS-->
        
        
        
        
        
        
        
        
        
        
        
        
      </div> <!-- box-grey-->
      </div> <!--end theiaStickySidebar-->
     
      
      
      
      
      
      
      
      
      
      
      
      
      
     </div> <!--menu-right-content--> 
     <?php } ?>


