<div id="new-cc-wrapper" class="reveal-if-active newcreditcard hide">
    <div class="form-group">
        <label>
            <?php echo Yii::t("default","New Card")?>
        </label>
        <?php echo CHtml::hiddenField('action', 'addCreditCard')?>
        <?php echo CHtml::hiddenField('currentController', 'store')?>

        <?php echo CHtml::textField('card_name','',array(
                'class'           => 'form-control',
                'placeholder'     => Yii::t("default","Card name"),
                'data-validation' => "required"  
          ))?>

    </div>

    <div class="form-group">
        <label>
            Card number
        </label>
        <?php echo CHtml::textField('credit_card_number', '', array(
                    'class'           => 'numeric_only form-control',
                    'placeholder'     => Yii::t("default", "Credit Card Number"),
                    'data-validation' => "required",
                    'maxlength'       => 16
        ));?>   

    </div>
    <div class="row">
        <div class="col-md-6">
            <label>
                Expiration date
            </label>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">

                        <?php echo CHtml::dropDownList('expiration_month', '', 
                                Yii::app()->functions->ccExpirationMonth()
                                ,array(
                                    'class'           => 'form-control',
                                    'placeholder'     => Yii::t("default", "Exp. month"),
                                    'data-validation' => "required"  
                                ))
                        ?>  

                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <?php echo CHtml::dropDownList('expiration_yr','',
                                        Yii::app()->functions->ccExpirationYear()
                                        ,array(
                                            'class'           => 'form-control',
                                            'placeholder'     => Yii::t("default", "Exp. year") ,
                                            'data-validation' => "required"  
                                        ))
                        ?> 

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label>
                    Security code
                </label>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                              <?php echo CHtml::textField('cvv', '', array(
                                            'class'           => 'form-control',
                                            'placeholder'     => Yii::t("default", "CVV"),
                                            'data-validation' => "required",
                                            'maxlength'       => 4
                                           ))
                                ?>   

                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">

                        <img src="<?php echo Widgets::quickImagesPath(); ?>icon_ccv.gif" width="50" height="29" alt="ccv">
                        <small>
                            Last 3 digits
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End row -->

     <div class="form-group">
        <label>
            <?php echo Yii::t("default","Billing Address") ?>
        </label>
         <?php echo CHtml::textField('billing_address', '', array(
                    'class'           => 'form-control',
                    'placeholder'     => Yii::t("default", "Billing Address"),
                    'data-validation' => "required"  
                ));
         ?> 

    </div>
    <input type="submit" value="<?php echo t("Add Credit Card")?>" class="btn_full">
</div>