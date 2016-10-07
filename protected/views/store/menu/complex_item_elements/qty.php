<hr /> 
<!--QUANTITY-->
<?php if ( is_array( $data['prices'] ) && count( $data['prices'] ) >=1 ){ ?>


    <div class="row" id="options_2">
        <div class="col-md-12">
            <label>
                <?php echo t("Quantity")?>
            </label>
        </div>
        
        <div class="col-md-12">
            
            <?php echo CHtml::textField('qty',
                   isset($item_data['qty']) ? $item_data['qty'] : 1,
                    array(
                        'class'     => " spinner ", 
                        'maxlength' => 5     
                   ));
            ?>
            
        </div>
        
        <br />
        <br />
        <br />
        <br />
        
        <div class="col-md-12">
            
            
            
            <!-- @TODO check javascript plugin +- for quantity --> 
            <div class="col-md-1 col-xs-1 border into-row">
                <a href="javascript:;" class="green-button inline qty-minus" >
                    <i class="ion-minus"></i>
                </a>
             </div>
            <div class="col-md-2 col-xs-2 border into-row">
               <?php echo CHtml::textField('qty',
                   isset($item_data['qty'])?$item_data['qty']:1
                   ,array(
                   'class'=>"uk-form-width-mini numeric_only qty", 
                   'maxlength'=>5     
                   ))?>
            </div>
            <div class="col-md-1 col-xs-1 border into-row">
              <a href="javascript:;" class="qty-plus green-button inline">
                  <i class="ion-plus"></i>
              </a>
            </div>
            <div class="col-md-6 col-xs-6 border into-row">
              <a href="javascript:;" class="special-instruction orange-button inline">
                  <?php echo t("Special Instructions")?>
              </a>
            </div>
            		
            
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label><?php echo Yii::t("default","Special Instructions"); ?></label>
                <?php echo CHtml::textArea('notes',
                        isset($item_data['notes'])?$item_data['notes']:""
                        ,array(
                         'class'=>'form-control',
                         'placeholder'=>Yii::t("default","Special Instructions")
                    ));
                ?>

            </div>
        </div>
    </div>


<?php } else { ?>


<!--do nothing-->


<?php } ?>  
<!--QUANTITY-->