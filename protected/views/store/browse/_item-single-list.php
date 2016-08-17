<div class="thumb_strip">
    <a href="<?php echo Yii::app()->createUrl( 'store/menu/merchant/' . $slug )?>">
        <img src="<?php echo FunctionsV3::getMerchantLogo( $merchant_id );?>" alt="">
    </a>
</div>

<?php 
$ratings  = Yii::app()->functions->getRatings( $merchant_id );
echo Widgets::ratingHTML( $ratings, true  ); 
?>

<h3>
    <?php echo clearString( $restaurant_name )?>
</h3>
<div class="type">
    <?php echo FunctionsV3::displayCuisine2( $cuisine );?>
</div>
<div class="location">
    <?php echo $address; ?>
    <?php echo FunctionsV3::merchantOpenTag2( $merchant_id )?>
    
    <!--Minimum order: $15-->
</div>
<?php echo FunctionsV3::displayServicesList2( $service )?>

<!--<ul>
    <li>
        Take away<i class="icon_check_alt2 ok"></i>
    </li>
    <li>
        Delivery<i class="icon_check_alt2 no"></i>
    </li>
</ul>-->