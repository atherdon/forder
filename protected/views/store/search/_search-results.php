<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">
        
        <?php $this->renderPartial('/store/browse/_sidebar2', [
            'enabled_search_map'   => $enabled_search_map,
            'restaurant_name'      => $restaurant_name,
            'filter_cuisine'       => $filter_cuisine,
            'filter_delivery_type' => $filter_delivery_type,
            'filter_minimum'         => $filter_minimum,
            
        ]); ?>
        
        
        <div class="col-md-9">
            
            <?php $this->renderPartial('/store/browse/_tools', [
                    'sort_filter'         => $sort_filter,
                    'display_type'        => $display_type
            ]); ?>


            <?php $this->renderPartial('/store/browse/_items-list', [
                        'list' => $list
                  ]); 
            ?>
            

            
            
            <a href="#0" class="load_more_bt wow fadeIn" 
               data-wow-delay="0.2s">
                Load more...
            </a>  
            
            
        </div><!-- End col-md-9-->

    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->