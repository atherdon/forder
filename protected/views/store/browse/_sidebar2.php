<div class="col-md-3">
    
    <p>
        
        <?php if ( $enabled_search_map=="yes"):?>
<!--        <a href="javascript:;" class="search-view-map green-button block center upper rounded">
        
        </a>
-->
            <?php $this->renderPartial('/store/search/_map-button', []); ?>

        <?php endif;?>
        
        
    </p>
    
    <div id="filters_col">
        
        <a data-toggle="collapse" href="#collapseFilters" 
           aria-expanded="false" aria-controls="collapseFilters" 
           id="filters_col_bt">
            Filters <i class="icon-plus-1 pull-right"></i>
        </a>
        
        <div class="collapse" id="collapseFilters">
            
            <div class="filter_type">
                
                <?php $this->renderPartial('/store/browse/sidebar/_sidebar-restaurant-name', [
                            'restaurant_name' => $restaurant_name
                ]); ?>
                
            </div>    
            
            <div class="filter_type">    
                
<!--                <h6>
                    Distance
                </h6>
                <input type="text" id="range" value="" name="range">-->
                
                
                <?php $this->renderPartial('/store/browse/sidebar/_type', [
                            'filter_cuisine' => $filter_cuisine
                ]); ?>
                
                
            </div>
            
            <?php $this->renderPartial('/store/browse/sidebar/_distance-fee', [

                ]); ?>
            
            <?php $this->renderPartial('/store/browse/sidebar/_delivery', [
                            'filter_delivery_type' => $filter_delivery_type
                ]); ?>
            
            <?php $this->renderPartial('/store/browse/sidebar/_minimum-delivery', [

                        'filter_minimum'         => $filter_minimum,
                ]); ?>            
            

            
        </div><!--End collapse -->
    </div><!--End filters col-->
</div><!--End col-md -->

