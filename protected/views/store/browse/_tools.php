<?php echo CHtml::hiddenField('sort_filter',  $sort_filter)?>
<?php echo CHtml::hiddenField('display_type', $display_type)?>     

<div id="tools">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="styled-select">
                
                <?php 
                
	           $filter_list = 
                        array(
                            'restaurant_name' => t("Name"),
                            'ratings'         => t("Rating"),
                            'minimum_order'   => t("Minimum"),
                            'distance'        => t("Distance")
                        );
                   
	           if ( isset( $_GET['st'] ) ){ unset($filter_list['distance']); }
                   
	           echo CHtml::dropDownList('sort-results', $sort_filter, $filter_list,
                           array(
                            'class' => "sort-results selectpicker",
                            'title' => t("Sort By")
	           ));
                   
                ?>
                
                
                
                
            </div>
        </div>
        <div class="col-md-9 col-sm-6 hidden-xs">
            
            
            <?php 
            
                switch ($display_type) {
                    case 'gridview':
                            ?>
            
                        <a href="<?php echo FunctionsV3::clearSearchParams('','display_type=gridview')?>" 
                           class="display-type bt_filters" 
                           data-type="gridview">                
                           <i class="icon-list"></i>
                        </a>      
            
                        <?php

                         break;

                     default:
                         ?>
            
                         <a href="<?php echo FunctionsV3::clearSearchParams('','display_type=listview')?>" 
                            class="display-type bt_filters" 
                                   data-type="listview">
                            <i class="icon-th"></i>
                        </a>
            
            
                        <?php

                         break;
                 }
                       
            ?>
                        
        </div>
    </div>
</div><!--End tools -->