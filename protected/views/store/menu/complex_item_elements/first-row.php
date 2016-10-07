<div class="desc">
    <div class="thumb_strip">
        <img src   =" <?php echo FunctionsV3::getFoodDefaultImage($data['photo']);?> " 
                 alt   =" <?php echo $data['item_name']?> " 
                 title =" <?php echo $data['item_name']?> " 
                 class =" logo-small ">
    </div>

    <h3>
        <?php echo qTranslate($data['item_name'],'item_name',$data)?>
    </h3>

    <div class="location">
        <?php echo qTranslate($data['item_description'],'item_description',$data)?>
    </div>
    
    <div class="quantity">
    
        <?php
            $this->renderPartial('/store/menu/complex_item_elements/food-addon', [
                            'data'        => $data,

            ] ); 
        ?>   
        
        <h5>
            <?php echo t("Quantity")?>
        </h5>

        <?php echo CHtml::textField('qty',
           isset($item_data['qty']) ? $item_data['qty'] : 1,
            array(
                'class'     => " spinner ", 
                'maxlength' => 5     
           ));
        ?>
        
        
		
    </div>

</div><!-- End desc-->
<br />
<br />