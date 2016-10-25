<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">

    <a class="strip_list grid" 
       href="<?php echo Yii::app()->createUrl( 'store/menu/merchant/' . $slug ); ?>">

        <div class="desc">
            <div class="thumb_strip">
                <img src="<?php echo FunctionsV3::getMerchantLogo( $merchant_id ); ?>" alt="">
            </div>
            
            <?php 
                $ratings  = Yii::app()->functions->getRatings( $merchant_id );
                echo Widgets::ratingHTML( $ratings, false, false, $merchant_id, false ); 
            ?>
            
            
<!--            <div class="rating">
                <i class="icon_star voted"></i>
                <i class="icon_star voted"></i>
                <i class="icon_star voted"></i>
                <i class="icon_star voted"></i>
                <i class="icon_star"></i>
            </div>-->


            <h3>
                <?php echo clearString( $restaurant_name )?>
            </h3>
            <div class="type">
                <?php echo FunctionsV3::displayCuisine2( $cuisine );?>
            </div>
            <div class="location">
                <?php echo $address; ?>
                <br>
                
                
                
                
                <span class="opening">
                    Opens at 17:00.
                </span>
                Minimum order: $15
                
                
                
            </div>

            <?php echo FunctionsV3::displayServicesList2( $service ); ?>

<!--            <ul>
                <li>
                    Take away<i class="icon_check_alt2 ok"></i>
                </li>
                <li>
                    Delivery<i class="icon_check_alt2 ok"></i>
                </li>
            </ul>-->

        </div>
    </a><!-- End strip_list-->
</div><!-- End col-md-6-->