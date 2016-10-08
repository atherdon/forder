<form method="GET" 
      id="forms-search" 
      action="<?php echo Yii::app()->createUrl('store/searcharea')?>">
    
     <input type="hidden" name="find_restaurant_by_address" 
            id="find_restaurant_by_address" value="<?php echo $home_search_text?>" >
     
    <div id="custom-search-input">
        <div class="input-group">
            <?php echo CHtml::textField('s', $kr_search_adrress, 
                    array(
    //                    'placeholder' => $placholder_search,
                        'placeholder' => "Your Address or postal code",
                        'required'    => true,
                        'class'       => ' search-query'
                  ));
            ?>   
            <!--<input type="text" class=" search-query" placeholder="Your Address or postal code">-->
            <span class="input-group-btn">
            <input type="submit" class="btn_search" value="submit">
            </span>
        </div>
    </div>
</form>