<div class="container margin_60_35">
    <div class="row">
        <div class="col-md-12">
                        
            <div class="tabs-wrapper-styles ">
                
                <!--  Tabs -->   
                <ul class="nav nav-tabs nav-justified nav-tabs-line" role="tablist">
                    <li class="active" role="presentation">
                        <a href="#profile" data-toggle="tab">
                            Profile
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#addressbook" data-toggle="tab">
                            Address Book
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#orderhistory" data-toggle="tab">
                            Order History
                        </a>
                    </li>
                     <li role="presentation">
                        <a href="#creditcards" data-toggle="tab">
                            Credit Cards
                        </a>
                    </li>
                     <li role="presentation">
                        <a href="#mypoints" data-toggle="tab">
                            My Points
                        </a>
                    </li>
                </ul>

                <?php $this->renderPartial('/store/menu/tabs-content', array(
//                            'merchant_id'       => $merchant_id,    
//                            'theme_hours_tab'   => $theme_hours_tab,
//                            'theme_reviews_tab' => $theme_reviews_tab,
//                            'phone'             => $phone,
//                            'ratings'           => $ratings,
//                            'photo_enabled'     => $photo_enabled,
//                            'theme_info_tab'    => $theme_info_tab,
                        ) ); ?> 
                
                
                <div class="tab-content">
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        
                        <?php $this->renderPartial('/store/menu/details-content', array(
//                            'merchant_id'       => $merchant_id,    
//                            'theme_hours_tab'   => $theme_hours_tab,
//                            'theme_reviews_tab' => $theme_reviews_tab,
//                            'phone'             => $phone,
//                            'ratings'           => $ratings,
//                            'photo_enabled'     => $photo_enabled,
//                            'theme_info_tab'    => $theme_info_tab,
                        ) ); ?>    
                        
                    </div>
                    <div class="tab-pane" id="addressbook" role="tabpanel">
                        
                         <?php $this->renderPartial('/store/menu/restaurant-menu', array(
//                                    'merchant_id'      => $merchant_id,
//                                    'menu'             => $menu,
//                                    'disabled_addcart' => $disabled_addcart,
//                                    'tc'               => $tc,
//
//                                    'data'             => $data,          
//                                    'distance'         => $distance,
//
//                                    'delivery_fee'     => $delivery_fee,
//                                    'checkout'          => $checkout,
//                                    'now'               => $now,
//                                    'now_time'          => $now_time,
//                                    'minimum_order'     => $minimum_order,
//                                    'merchant_minimum_order_pickup' => $merchant_minimum_order_pickup,
                        ) ); ?>  
                  
                         
                    </div>
                    <div class="tab-pane" id="orderhistory" role="tabpanel">

                        <!--BOOK A TABLE-->
                        <?php if ($booking_enabled):?>
                        <!--<li>-->
                            <?php $this->renderPartial('/store/menu/book-table',array(
//                                            'merchant_id' => $merchant_id
                                    ));
                            ?>        
                        <!--</li>-->
                        <?php endif;?>
                        <!--END BOOK A TABLE-->
                        
                    </div>

                     <div class="tab-pane" id="creditcards" role="tabpanel">

                        <!--BOOK A TABLE-->
                        <?php if ($booking_enabled):?>
                        <!--<li>-->
                            <?php $this->renderPartial('/store/menu/book-table',array(
//                                            'merchant_id' => $merchant_id
                                    ));
                            ?>        
                        <!--</li>-->
                        <?php endif;?>
                        <!--END BOOK A TABLE-->
                        
                    </div>

                    
                     <div class="tab-pane" id="mypoints" role="tabpanel">

                        <!--BOOK A TABLE-->
                        <?php if ($booking_enabled):?>
                        <!--<li>-->
                            <?php $this->renderPartial('/store/menu/book-table',array(
//                                            'merchant_id' => $merchant_id
                                    ));
                            ?>        
                        <!--</li>-->
                        <?php endif;?>
                        <!--END BOOK A TABLE-->
                        
                    </div>

                    
                </div>
        </div>

        </div><!-- End col-md-12-->
    </div><!-- End row-->         
</div><!-- End container-->        