<div class="row" id="options_2">
    <div class="col-md-12">
        <h5>
            <?php echo t("Price")?>
        </h5>
    </div>
    
   
    <?php if ( is_array( $data['prices'] ) && count( $data['prices'] ) >=1 ){ ?>  
      <?php foreach ( $data['prices'] as $price ){ ?>
            <?php $price['price']=Yii::app()->functions->unPrettyPrice($price['price'])?>
    
           <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
               
               <label>
                <?php if ( !empty($price['size'])):
                    
                    echo CHtml::radioButton('price',
		         $size_select == $price['size'] ? true : false,
                         array(
		            'value'=>$price['price']."|".$price['size'],
		            'class'=>"price_cls item_price icheck"

		          ));
                      echo qTranslate($price['size'],'size',$price);
                ?>
               
              <?php else :?>
               
                  <?php echo CHtml::radioButton('price',
		            count($price['price'])==1?true:false,
                          array(
		            'value' => $price['price'],
		            'class' => "item_price icheck"
		          ))?>
               
             <?php endif;?>
             
             <?php if (isset($price['price'])):?>  
                <?php if (is_numeric($data['discount'])):?>
                   
                    <span class="line-tru">
                        <?php echo FunctionsV3::prettyPrice($price['price'])?>
                    </span>
                    <span class="text-danger">
                        <?php echo FunctionsV3::prettyPrice($price['price']-$data['discount'])?>
                    </span>
                   
                <?php else :?>
               
                    <?php echo FunctionsV3::prettyPrice($price['price'])?>
               
                 <?php endif;?>
             <?php endif;?>
               
                    
                </label>
               
            </div>
    
        <?php } ?>
    <?php } ?>


</div><!-- Edn options 2 -->