<a href="<?php echo Yii::app()->createUrl('/store/menu/merchant/'. trim( $slug ) )?>" 
   class="strip_list">
    
    <div class="desc">
        <div class="thumb_strip">
            <img src="<?php echo FunctionsV3::getMerchantLogo( $merchant_id );?>" alt="">
        </div>

        <?php $ratings = Yii::app()->functions->getRatings( $merchant_id );
              echo Widgets::ratingHTML( $ratings, false, true, $merchant_id ); 
        ?>

        <h3>
            <?php echo clearString( $restaurant_name )?>
        </h3>
        <div class="type">
            <?php echo FunctionsV3::displayCuisine2( $cuisine );?>
        </div>
        <div class="location">
            <?php echo $address; ?>
        </div>
        <?php echo FunctionsV3::displayServicesList2( $service )?>

    </div><!-- End desc-->
</a>