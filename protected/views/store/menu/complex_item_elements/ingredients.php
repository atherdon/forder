<!--Ingredients-->  
<?php 
if (!isset($item_data['ingredients'])){
    
    $item_data['ingredients']='';
}  
?>
<?php if ( isset($data['ingredients'])){ ?>  
<?php if ( is_array($data['ingredients']) && count($data['ingredients'])>=1){ ?>


    <div class="row" id="options_2">
        <div class="col-md-12">
            <h5>
                <?php echo t("Ingredients")?>
            </h5>
        </div>
        

            <?php 
                foreach ($data['ingredients'] as $ingredients_id =>  $val){
                    $ingredients_name_trans = '';
                    $_ingredienst = Yii::app()->functions->getIngredients( $ingredients_id );

                    if ($_ingredienst){
                           $ingredients_name_trans['ingredients_name_trans'] = 
                                   !empty($_ingredienst['ingredients_name_trans']) ? json_decode( $_ingredienst['ingredients_name_trans'], true ) : '';
                    }         
            ?>
                <?php $item_data['ingredients_id'] = 
                        isset( $item_data['ingredients_id']) ? $item_data['ingredients_id'] : ''; ?>

            
            <div class="col-md-6">
                <label>
                    <?php echo CHtml::checkbox('ingredients[]',
                      in_array( $val,(array)$item_data['ingredients'] ) ? true : false
                      ,array(
                          'value' => $val,
                          'class' => 'icheck'

                      ))?>&nbsp;             

                      <?php echo qTranslate($val, 'ingredients_name', $ingredients_name_trans);?>

                </label>        
            </div>    
            

            <?php } ?>
        
    </div>


<?php } ?>
<?php } ?>
<!--END Ingredients-->