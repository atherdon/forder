<div class="desc">
    <div class="thumb_strip">
        <img src   =" <?php echo FunctionsV3::getFoodDefaultImage($data['photo']);?> " 
             alt   =" <?php echo $data['item_name']?> " 
             title =" <?php echo $data['item_name']?> " 
             class =" logo-small ">
    </div>

    <h3>
        <?php echo qTranslate($data['item_name'], 'item_name', $data)?>
    </h3>

    <div class="location">
        <?php echo qTranslate($data['item_description'], 'item_description', $data)?>
    </div>
    
    <?php
        $this->renderPartial('/store/menu/complex_item_elements/qty', [
                    'data' => $data,

        ] ); 
    ?>   
    

</div><!-- End desc-->
<br />
<br />