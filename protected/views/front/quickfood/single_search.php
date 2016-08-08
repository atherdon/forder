<form method="GET" action="<?php echo Yii::app()->createUrl('store/searcharea')?>" 
      class="forms-search" id="forms-search">
    <div id="custom-search-input">
        <div class="input-group ">
                  
            <?php echo CHtml::textField('s', $kr_search_adrress, array(
                        'placeholder' => $placholder_search,
                        'required'    => true,
                        'class'       => " search-query"
            ))?>      

            <span class="input-group-btn">
            <input type="submit" class="btn_search" value="submit">
            </span>
        </div>
    </div>
</form>