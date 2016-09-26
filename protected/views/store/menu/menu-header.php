
<!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" 
         data-image-src="<?php echo Widgets::quickImagesPath(); ?>sub_header_2.jpg" 
         data-natural-width="1400" 
         data-natural-height="470">
    <div id="subheader">
	<div id="sub_content">
    	<div id="thumb">
            <img src="<?php echo $merchant_logo;?>" alt="">
        </div>
            
        <?php echo Widgets::ratingHTML( $ratings, true, false, $merchant_id, $slug ); ?>     
            
        <h1>
            <?php echo clearString($restaurant_name)?>
        </h1>
        <div>
            <em>
                <?php echo FunctionsV3::displayCuisine2( $cuisine ); ?>
            </em>
        </div>
        <div>
            <i class="icon_pin"></i>
            <?php echo $merchant_address?>  

            <!--$10, free over $15.-->
            <?php if( $minimum_order ) { 
                echo '- <strong>' . t("Minimum Order") . ": </strong>" . FunctionsV3::prettyPrice( $minimum_order );    

                echo FunctionsV3::getFreeDeliveryTag2( $merchant_id );

            } ?>
        </div>
    </div><!-- End sub_content -->
</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->