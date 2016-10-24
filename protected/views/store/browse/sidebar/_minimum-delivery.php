<div class="filter_type">
    <h6>  Minimum Delivery </h6>
    
    <ul class="nomargin">
        <?php foreach ($minimum_list as $key=>$val):?>
            <li>
                <label>
                    <?php 
		          echo CHtml::radioButton('filter_minimum[]',
		          $filter_minimum == $key ? true : false,
                            array(
                                'value' => $key,
                                'class' => "filter_by_radio filter_minimum icheck"
		          ));
		          ?>
	            <?php echo $val;?>
                </label>
            </li>
        <?php endforeach;?> 
 
 
    
    </ul>
    <?php if (!empty($filter_minimum)):?>                      
        <a href="<?php echo FunctionsV3::clearSearchParams('filter_minimum')?>">[<?php echo t("Clear")?>]</a>
    <?php endif;?>
</div>