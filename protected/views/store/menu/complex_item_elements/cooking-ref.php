<hr />

<!--COOKING REF-->
<?php if (isset($data['cooking_ref'])){ ?>
    <?php if (is_array($data['cooking_ref']) && count($data['cooking_ref'])>=1){ ?>

    <div class="row" id="options_2">
        <div class="col-md-12">
            <label>
                <?php echo t("Cooking Preference")?>
            </label>
        </div>
        
        
        <?php foreach ($data['cooking_ref'] as $cooking_ref_id=>$val):?>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                <label>
                    
                    <?php $item_data['cooking_ref']=isset($item_data['cooking_ref'])?$item_data['cooking_ref']:''; ?>
                    <?php echo CHtml::radioButton('cooking_ref',
                          $item_data['cooking_ref']==$val?true:false
                          ,array(
                            'value' => $val,
                            'class' => 'icheck'  

                          ))?>&nbsp;  

                    <?php 
                        $cooking_ref_trans=Yii::app()->functions->getCookingTranslation($val,$data['merchant_id']);
                        echo qTranslate($val,'cooking_name',$cooking_ref_trans);
                    ?>

                </label>     
            </div> <!--col-->
        <?php endforeach;?>
        

    </div>    

   


    <?php } ?>
<?php } ?>
<!--COOKING REF-->  