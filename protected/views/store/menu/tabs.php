<?php if ( 0 ) { ?>  

<?php  $this->renderPartial('/store/menu/details-content', array(
                    'merchant_id'       => $merchant_id,    
                    'theme_hours_tab'   => $theme_hours_tab,
                    'theme_reviews_tab' => $theme_reviews_tab,
                    'phone'             => $phone,
                    'ratings'           => $ratings,
      
                ) ); 
  ?>     


<?php  } ?>



<?php //if ( 0 ) { ?>

<div class="container margin_60_35">
    <div class="row">
        <div class="col-md-12">
            
            
            <div class="tabs-wrapper-styles ">
                <!--  Tabs -->   
                <ul class="nav nav-tabs nav-justified nav-tabs-line" role="tablist">
                    <li class="active" role="presentation">
                        <a href="#details" data-toggle="tab">
                            Details
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#menu" data-toggle="tab">
                            Menu
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#booking" data-toggle="tab">
                            Booking
                        </a>
                    </li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="details" role="tabpanel">
                        
                            <?php $this->renderPartial('/store/menu/details-content', array(
                                'merchant_id'       => $merchant_id,    
                                'theme_hours_tab'   => $theme_hours_tab,
                                'theme_reviews_tab' => $theme_reviews_tab,
                                'phone'             => $phone,
                                'ratings'           => $ratings,
                                'photo_enabled'     => $photo_enabled,
                                'theme_info_tab'    => $theme_info_tab,
                            ) ); ?>    
                        
                    </div>
                    <div class="tab-pane" id="menu" role="tabpanel">
                        
                         menu
                        <?php if ( 0 ) { ?>
                         <?php $this->renderPartial('/store/menu/restaurant-menu', array(
                                    'merchant_id'      => $merchant_id,
                                    'menu'             => $menu,
                                    'disabled_addcart' => $disabled_addcart,
                                    'tc'               => $tc,

                                    'data'             => $data,          
                                    'distance'         => $distance,

                                    'delivery_fee'     => $delivery_fee,
                                    'checkout'          => $checkout,
                                    'now'               => $now,
                                    'now_time'          => $now_time,
                                    'minimum_order'     => $minimum_order,
                                    'merchant_minimum_order_pickup' => $merchant_minimum_order_pickup,
                        ) ); ?>  
                        <?php } ?>
                         
                    </div>
                    <div class="tab-pane" id="booking" role="tabpanel">
                        
                         book a table
                    <?php if ( 0 ) { ?>
                    <!--BOOK A TABLE-->
                        <?php if ($booking_enabled):?>
                        <li>
                            <?php $this->renderPartial('/front/merchant-book-table',array(
                                            'merchant_id' => $merchant_id
                                    ));
                            ?>        
                        </li>
                        <?php endif;?>
                    <!--END BOOK A TABLE-->

                    <?php } ?>
                        
                    </div>

                </div>
        </div>
            
            


        </div><!-- End col-md-12-->
    </div><!-- End row-->         
</div><!-- End container-->         





<?php //} ?>