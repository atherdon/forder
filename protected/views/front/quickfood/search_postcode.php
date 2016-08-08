<form method="GET" action="<?php echo Yii::app()->createUrl('store/searcharea')?>" 
      class="forms-search" id="forms-search">
    <div id="custom-search-input">
        <div class="input-group ">
             <?php echo CHtml::textField('zipcode','',array(
                        'placeholder' => $placholder_search, //Your Address or postal code
                        'required'    => true,
                        'class'       => " search-query"
               ))?>  

            <span class="input-group-btn">
            <input type="submit" class="btn_search" value="submit">
            </span>
        </div>
    </div>
</form>