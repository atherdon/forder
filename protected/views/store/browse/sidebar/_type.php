<!--FILTER CUISINE-->
<?php if (!empty($filter_cuisine)):?>   

    <a href="<?php echo FunctionsV3::clearSearchParams('filter_cuisine')?>">
        [<?php echo t("Clear")?>]
    </a>
    <!--@TODO check clear things links-->
<?php endif;?>

<?php if ( $cuisine = Yii::app()->functions->Cuisine( false ) ){ ?>
            
    <h6>
        Type
    </h6>    
    
    <ul>
    <?php foreach ( $cuisine as $val ){ ?>
        
            <li>
                <label>
                <?php
                    $cuisine_json['cuisine_name_trans'] =! empty( $val['cuisine_name_trans'] ) 
                            ? json_decode( $val['cuisine_name_trans'], true )
                            : '';

                    echo CHtml::checkBox('filter_cuisine[]',
                            in_array($val['cuisine_id'], (array)$filter_cuisine) ? true : false,
                            array(
                                'value' => $val['cuisine_id'],
                                'class' => "filter_by icheck filter_cuisine"
                              ));
            
                    echo qTranslate($val['cuisine_name'],'cuisine_name',$cuisine_json); 
        
                ?>    
                    <!--@TODO check how filtration items works-->
                    
                    <!--<input type="checkbox" checked class="icheck">-->
                    <!--All--> 
                    <!--<small>(49)</small>-->
                    
                </label>
            </li>

        <?php } ?> 
    </ul>


<?php } ?>
<!--END FILTER CUISINE-->