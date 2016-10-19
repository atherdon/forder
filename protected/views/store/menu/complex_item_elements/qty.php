<!--QUANTITY-->
<?php if ( is_array( $data['prices'] ) && count( $data['prices'] ) >=1 ){ ?>

    <div class="quantity">    
        <h5>
            <?php echo t("Quantity")?>
        </h5>

        <?php echo CHtml::textField('qty',
           isset($item_data['qty']) ? $item_data['qty'] : 1,
            array(
                'class'     => "  touchspin", 
                'maxlength' => 5     
           ));
        ?>
    </div>

<?php } ?>  
<!--QUANTITY-->