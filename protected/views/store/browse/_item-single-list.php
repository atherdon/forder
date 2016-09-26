<div class="desc">
    <div class="thumb_strip">
        <a href="<?php echo Yii::app()->createUrl( 'store/menu/merchant/' . $slug )?>">
            <img src="<?php echo FunctionsV3::getMerchantLogo( $merchant_id );?>" alt="">
        </a>
    </div>

    <?php 
    $ratings  = Yii::app()->functions->getRatings( $merchant_id );
    echo Widgets::ratingHTML( $ratings, true, true, $merchant_id, $slug  ); 
    ?>

    <h3>
        <?php echo clearString( $restaurant_name )?>
    </h3>
    <div class="type">
        <?php echo FunctionsV3::displayCuisine2( $cuisine );?>
    </div>
    <div class="location">
        <?php echo $address; ?>
        <?php // echo FunctionsV3::merchantOpenTag2( $merchant_id )?>


    </div>
    <?php echo FunctionsV3::displayServicesList2( $service )?>
</div>