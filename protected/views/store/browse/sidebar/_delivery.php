<?php if ( $services = Yii::app()->functions->Services() ){ ?>

<div class="filter_type">
    <h6> 
        By Delivery 
    </h6>
    
    <ul class="nomargin">
        
        <?php foreach ($services as $key=> $val):?>
	    <li>
                <label>
        
                    <?php 
                         echo CHtml::radioButton('filter_delivery_type',
                            $filter_delivery_type == $key ? true : false,
                            array(
                                'value' => $key,
                                'class' => "filter_by filter_delivery_type icheck"
                        ));
                    ?>
                    <?php echo $val;?>   
                </label>
            </li>
        <?php endforeach;?> 
        
    </ul>
    <?php if (!empty($filter_delivery_type)):?>                      
           <a href="<?php echo FunctionsV3::clearSearchParams('filter_delivery_type')?>">[<?php echo t("Clear")?>]</a>
    <?php endif;?>
</div>

<?php } ?>