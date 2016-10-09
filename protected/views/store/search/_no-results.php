<?php

echo CHtml::hiddenField('current_page_url',isset($current_page_url)?$current_page_url:'');

?>

<div class="container margin_60_35">
    <div class="row">
        <div class="col-md-8 col-lg-offset-1">
            
            <h3>
                <?php echo Yii::t("default","Oops. We're having trouble finding that address.")?>
            </h3>
            <p>
                <?php echo Yii::t("default","Please enter your address in one of the following formats and try again. Please do NOT enter your apartment or floor number here.")?>
            </p>
            <p class="bold">
                - <?php echo Yii::t("default","Street address, city, state")?>
            </p>
            <p class="bold">
                - <?php echo Yii::t("default","Street address, city")?>
            </p>
            <p class="bold">
                - <?php echo Yii::t("default","Street address, zip code")?>
            </p>
    
        </div>
    </div>
</div>