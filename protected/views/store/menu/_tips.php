<!--TIPS-->
<?php 
$merchant_tip_default=Yii::app()->functions->getOption("merchant_tip_default", $merchant_id);

    if ( !empty($merchant_tip_default)){
       echo CHtml::hiddenField('default_tip',$merchant_tip_default);
    }        
    $FunctionsK = new FunctionsK();
    $tips       = $FunctionsK->tipsList();        
?>	   
    
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label>
                    <?php echo t("Tip Amount")?> 
                    (<span class="tip_percentage">0%</span>)
                </label>

            </div>
        </div>
        
        <?php foreach ( $tips as $tip_key => $tip_val ) { ?>           
        
            <div class="col-md-2 col-sm-6">
                <div class="form-group">
                                        
                    <a class="btn_full tips" href="javascript:;" data-type="tip" data-tip="<?php echo $tip_key?>" >
                        <?php echo $tip_val?>
                    </a>

                </div>
            </div>
          
        <?php } ?>  
        

        <div class="col-md-3 col-sm-6">
                        
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        
                        <a class="btn_full tips" href="javascript:;" data-type="cash" 
                           data-tip="0"
                           style='padding-left: 5px; padding-right: 5px;width: 80px;'>
                            <?php echo t("Tip cash")?>
                        </a>

                    </div>
                </div>
                <div class="col-md-6 col-sm-6"
                     style='padding-left: 30px;'>
                    <div class="form-group">
                        
                         <?php echo CHtml::textField('tip_value','',array(
                                'class'=>"numeric_only form-control",
                                'style'=>"width:70px;",
                                ''  
                              ));
                         ?>

                    </div>
                </div>
            </div>
            
            
            
        </div>
        
    </div>

<!--END TIPS-->