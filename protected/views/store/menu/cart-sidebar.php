<?php if ( getOptionA( 'disabled_website_ordering' ) != "yes" ){  ?>



<!--Order Sidebar-->    
<div class="col-md-3 <?php echo $disabled_addcart == "yes" ? "hide" : '' ?>" id="sidebar">
    <div class="theiaStickySidebar">
        <div id="cart_box" >
                        
            <h3>
                <?php echo t("Your Order")?> <i class="icon_cart_alt pull-right"></i>
            </h3>

            
            
            <table class="table table_summary"> 
            <!--<table class="table table_summary item-order-wrap">--> 
            <?php //if( 0 ) { ?>    
                <tbody class="cart-to-change-by-js">
                    <tr>
                        <td>
                            <a href="#0" class="remove_item">
                                <i class="icon_minus_alt"></i>
                            </a> 
                            
                            <a href="#0" class="edit_item">
                                <i class="icon_pencil"></i>
                            </a> 
                            
                            
                            <strong>1x</strong>
                            Enchiladas
                        </td>
                        <td>
                            <strong class="pull-right">
                                $11
                            </strong>
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
                    
                    
                    
                    
                    
                    
                    <!--add minimum order data to table too-->
                    <tr>
                        <td>
                            <a href="javascript:;" class="clear-cart">
                                [<?php echo t("Clear Order")?>]
                            </a>
                        </td>
                    </tr>
                    
                    
                    
                    
                    
                    
                    
                </tbody>
            <?php //} ?>    
            </table>
            
            
            
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
              
           
           
           
            
            
            <!--DELIVERY INFO-->
            <table class="table">
                <tbody>
                    
                    <?php if ( $data['service'] == 3 ){ ?>
                      <tr>
                          <td>
                              <h5>
                                  <?php echo t("Distance Information")?>
                              </h5>
                          </td>
                     </tr>     
                  <?php } else { ?> 

                      <tr>
                           <td>
                                <h5>
                                    <?php echo t("Delivery Information")?>
                                </h5>
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
                            <a href="#" 
                                class="text-center" 
                                data-target="#addressForm" 
                                data-toggle="modal">
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
                            Subtotal 
                            <span class="pull-right">
                                $56
                            </span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            Subtotal 
                            <span class="pull-right">
                                $56
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Delivery fee 
                            <span class="pull-right">
                                $10
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="total">
                            TOTAL 
                            <span class="pull-right">
                                $66
                            </span>
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