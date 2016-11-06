<!--TIPS-->
<?php 
$merchant_tip_default=Yii::app()->functions->getOption("merchant_tip_default", $merchant_id);

    if ( !empty($merchant_tip_default)){
       echo CHtml::hiddenField('default_tip',$merchant_tip_default);
    }        
    $FunctionsK = new FunctionsK();
    $tips       = $FunctionsK->tipsList();        
?>	   
    
    <div class="row row-tips">
        <div class="col-md-12 col-sm-12">
          
            <h4>
                <?php echo t("Tip Amount")?> 
<!--                (
                <span class="tip_percentage">
                    0%
                </span>
                )-->
            </h4>

            <?php if ( 0 ){ ?>
            <label>
                <?php echo t("Tip Amount")?> 
                (<span class="tip_percentage">0%</span>)
            </label>
            <?php } ?>

        </div>
      
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
            <label>
                <input type="radio" value="0.1" name="cart_tip_percentage"  class="icheck tips-el">
                10%
            </label>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
            <label>
                <input type="radio" value="0.15" name="cart_tip_percentage"  class="icheck tips-el">
                15%
            </label>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
            <label>
                <input type="radio" value="0.20" name="cart_tip_percentage"  class="icheck tips-el">
                20%
            </label>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
            <label>
                <input type="radio" value="0.25" name="cart_tip_percentage"  class="icheck tips-el">
                25%
            </label>
        </div>
    
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <label>
                <input type="radio" value="cash" name="cart_tip_percentage" 
                       class="icheck tips-el">
                <?php echo t("Tip cash")?>
                
                <?php echo CHtml::textField('cart_tip_value', '', array(
                            'class' => "numeric_only form-control hide",
                            'style' => "margin-top:15px; margin-bottom:15px;",
                            ''  
                          ));
            ?>
            </label>




        </div>

        
    </div>

<!--END TIPS-->