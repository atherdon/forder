<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">
        
        <?php
            $this->renderPartial('/store/checkout/_sidebar',array(
                    's'                 => $s,
                    'merchant_address'  => $merchant_address,
                    'merchant_info'     => $merchant_info,
                    'phone'             => $phone  
            ));                     
        ?>    
        

        <div class="col-md-6">

                <div class="box_style_2" id="order_process">
                    

                    <?php if ( $continue==TRUE) { ?>
                        <?php 
                        $merchant_id=$s['kr_merchant_id'];
                        echo CHtml::hiddenField('merchant_id',$merchant_id);
                        ?>
                    
                        <?php                    
                            $this->renderPartial('/store/checkout/_form', array(
                                'merchant_info'     => $merchant_info,
                                's'         => $s,
                                'website_enabled_map_address' => $website_enabled_map_address,
                                'address_book'      => $address_book
    //                           'restaurant_name' => $merchant_info['restaurant_name'],
    //                           'restaurant_slug' => $merchant_info['restaurant_slug']
                            ));
                        ?>
                    
                    
                    
                    <?php } ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                        
                        
                        
                </div><!-- End box_style_1 -->

        </div><!-- End col-md-6 -->

         <?php                    
                    $this->renderPartial('/store/checkout/_cart-column', array(
//                           'restaurant_name' => $merchant_info['restaurant_name'],
//                           'restaurant_slug' => $merchant_info['restaurant_slug']
                    ));
            ?>
        
       

    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->



<?php if ( 0 ) { ?>

<div class="sections section-grey2 section-payment-option">
   <div class="container">
           
       
       
       
       
       
       
       
       
     <?php if ( $continue==TRUE):?>
     <?php 
     $merchant_id=$s['kr_merchant_id'];
     echo CHtml::hiddenField('merchant_id',$merchant_id);
     ?>
     <div class="col-md-7 border">
          
     <div class="box-grey rounded">
     <form id="frm-delivery" class="frm-delivery" method="POST" onsubmit="return false;">
     
     
         
     <?php if ( $s['kr_delivery_options']['delivery_type']=="pickup"):?> 
     
   
          
     <?php else :?> <!-- DELIVERY-->                          	       	      
          
	
	        	        	               
     <?php endif;?> <!-- ENDIF DELIVERY-->
     
     
     <div class="top25">
     <?php 
	 $this->renderPartial('/front/payment-list',array(
	   'merchant_id'=>$merchant_id,
	   'payment_list'=>FunctionsV3::getMerchantPaymentList($merchant_id)
	 ));
	 ?>
	 </div>
     
     <!--TIPS-->
     <?php if ( Yii::app()->functions->getOption("merchant_enabled_tip",$merchant_id)==2):?>
     <?php 
     $merchant_tip_default=Yii::app()->functions->getOption("merchant_tip_default",$merchant_id);
     if ( !empty($merchant_tip_default)){
    	echo CHtml::hiddenField('default_tip',$merchant_tip_default);
     }        
     $FunctionsK=new FunctionsK();
     $tips=$FunctionsK->tipsList();        
     ?>	   
	   <div class="section-label top25">
	    <a class="section-label-a">
	      <span class="bold">
	        <?php echo t("Tip Amount")?> (<span class="tip_percentage">0%</span>)
	      </span>
	      <b></b>
	    </a>     
	   </div>          
	   
	    <div class="uk-panel uk-panel-box">
	     <ul class="tip-wrapper">
	       <?php foreach ($tips as $tip_key=>$tip_val):?>           
	       <li>
	       <a class="tips" href="javascript:;" data-type="tip" data-tip="<?php echo $tip_key?>">
	       <?php echo $tip_val?>
	       </a>
	
	       </li>
	       <?php endforeach;?>           
	       <li><a class="tips" href="javascript:;" data-type="cash" data-tip="0"><?php echo t("Tip cash")?></a></li>
	       <li><?php echo CHtml::textField('tip_value','',array(
	         'class'=>"numeric_only grey-fields",
	         'style'=>"width:70px;"
	       ));?></li>
	     </ul>
	    </div>
     <?php endif;?>
     <!--END TIPS-->
     
     </form>    
     
     <!--CREDIT CART-->
     <?php 
     $this->renderPartial('/front/credit-card',array(
	   'merchant_id'=>$merchant_id	   
	 ));
	 ?>     
     <!--END CREDIT CART-->
     
     </div> <!--box rounded-->
     
     </div> <!--left content-->
     
     <div class="col-md-5 border sticky-div"><!-- RIGHT CONTENT STARTS HERE-->
     
       <div class="box-grey rounded  relative top-line-green">
       
       <i class="order-icon your-order-icon"></i>
       
	       <div class="order-list-wrap">   
	       
	         <p class="bold center"><?php echo t("Your Order")?></p>
	         <div class="item-order-wrap"></div>
	       
	         <!--VOUCHER STARTS HERE-->
            <?php Widgets::applyVoucher($merchant_id);?>
            <!--VOUCHER STARTS HERE-->
            
            <?php 
            if (FunctionsV3::hasModuleAddon("pointsprogram")){
            	/*POINTS PROGRAM*/
                PointsProgram::redeemForm();
            }
            ?>
	         
	         <?php 
	         $minimum_order=Yii::app()->functions->getOption('merchant_minimum_order',$merchant_id);
	         $maximum_order=getOption($merchant_id,'merchant_maximum_order');	         
	         if ( $s['kr_delivery_options']['delivery_type']=="pickup"){
	          	  $minimum_order=Yii::app()->functions->getOption('merchant_minimum_order_pickup',$merchant_id);
	          	  $maximum_order=getOption($merchant_id,'merchant_maximum_order_pickup');	         
	         }  
	         ?>
	         
	         <?php 
	         if (!empty($minimum_order)){
	         	echo CHtml::hiddenField('minimum_order',unPrettyPrice($minimum_order));
	            echo CHtml::hiddenField('minimum_order_pretty',baseCurrency().prettyFormat($minimum_order));
	            ?>
	            <p class="small center"><?php echo t("Subtotal must exceed")?> 
                 <?php echo baseCurrency().prettyFormat($minimum_order,$merchant_id)?>
                </p>      
	            <?php
	         }
	         if($maximum_order>0){
	         	echo CHtml::hiddenField('maximum_order',unPrettyPrice($maximum_order));
	         	echo CHtml::hiddenField('maximum_order_pretty',baseCurrency().prettyFormat($maximum_order));
	         }
	         ?>
	         
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
           
	          <div class="text-center top25">
	          <a href="javascript:;" class="place_order green-button medium inline block">
	          <?php echo t("Place Order")?>
	          </a>
	          </div>
	         
	       </div> <!-- order-list-wrap-->       
	   </div> <!--box-grey-->    
     
     </div> <!--right content-->
     
     <?php else :?>      
       <div class="box-grey rounded">
      <p class="text-danger">
      <?php echo t("Something went wrong Either your visiting the page directly or your session has expired.")?></p>
      </div>
     <?php endif;?>
   
     
     
     
     
     
     
     
     
   </div>  <!--container-->
</div> <!--section-payment-option-->



<?php } ?>