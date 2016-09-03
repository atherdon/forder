 <div class="col-md-3" id="sidebar">
    <div class="theiaStickySidebar">
        <div id="cart_box">
            <h3>
                <?php echo t("Your Order")?> <i class="icon_cart_alt pull-right"></i>
            </h3>
            
            
            
            
            
            <table class="table table_summary">
            <tbody>
            <tr>
                <td>
                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> Enchiladas
                </td>
                <td>
                        <strong class="pull-right">$11</strong>
                </td>
            </tr>
            <tr>
                <td>
                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Burrito
                </td>
                <td>
                        <strong class="pull-right">$14</strong>
                </td>
            </tr>
            <tr>
                <td>
                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> Chicken
                </td>
                <td>
                        <strong class="pull-right">$20</strong>
                </td>
            </tr>
            <tr>
                <td>
                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Corona Beer
                </td>
                <td>
                        <strong class="pull-right">$9</strong>
                </td>
            </tr>
            <tr>
                <td>
                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Cheese Cake
                </td>
                <td>
                        <strong class="pull-right">$12</strong>
                </td>
            </tr>
        </tbody>
    </table>
            
            
            
            
            <!--VOUCHER STARTS HERE-->
            <?php Widgets::applyVoucher($merchant_id);?>
            <!--VOUCHER STARTS HERE-->
            
            
            <?php 
                if (FunctionsV3::hasModuleAddon("pointsprogram")){
                    /*POINTS PROGRAM*/
                    PointsProgram::redeemForm();
                }
            ?>
            
            
            
    <hr>
    
    
    
    
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
    
                    <div class="row" id="options_2">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">                            
                            <?php echo t("Subtotal must exceed")?>                            
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                             <?php echo baseCurrency().prettyFormat($minimum_order,$merchant_id)?>
                        </div>
                    </div>
    
	                  
                <?php  } ?>
    
                <?php if($maximum_order>0){
                       echo CHtml::hiddenField('maximum_order',unPrettyPrice($maximum_order));
                       echo CHtml::hiddenField('maximum_order_pretty',baseCurrency().prettyFormat($maximum_order));
                }
                ?>
                
    
<!--    
    <div class="row" id="options_2">
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
            <label>
                <input type="radio" value="" checked name="option_2" class="icheck">Delivery
            </label>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
            <label>
                <input type="radio" value="" name="option_2" class="icheck">Take Away
            </label>
        </div>
    </div> Edn options 2 -->
    
    
    
    
    
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
            
            
            
            <?php 
             $this->renderPartial('/store/checkout/_captcha_and_sms',array(
                              'merchant_id'  => $merchant_id,

                            )); ?>
            
            
            
            <a class="btn_full place_order" href="javascript:;">
                <?php echo t("Place Order")?>
            </a>
            <a class="btn_full_outline" href="<?php echo Yii::app()->createUrl('/store/menu/merchant/' . $slug )?>">
                <i class="icon-right"></i> Add other items
            </a>
        </div><!-- End cart_box -->
    </div><!-- End theiaStickySidebar -->
</div><!-- End col-md-3 -->     