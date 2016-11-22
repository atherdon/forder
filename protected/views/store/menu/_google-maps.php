<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->


<?php

//var_dump( $merchant_info );
//die();
$merchant_info['restaurant_name'];
$merchant_info['merchant_logo'];
$merchant_info['merchant_address'];
$cuisine      = json_decode( $merchant_info['cuisine'], true ); 
//var_dump( $cuisine[0] );die();

$cuisine_text         = FunctionsV3::displayCuisine2( $merchant_info['cuisine'] );
$restaurant_name_text = clearString( $merchant_info['restaurant_name'] );
$address_text         = $merchant_info['merchant_address'];
//echo $latitude;
//echo $lontitude ;    


//var_dump( $latitude );
//var_dump( $longtitude );
//die();

$array = array(
        'name'       => clearString( $merchant_info['restaurant_name'] ),
        'logo'       => $merchant_info['merchant_logo'],
        'address'    => $address_text,
        'cuisine'    => FunctionsV3::displayCuisine2( $merchant_info['cuisine'] ),
        'lat'        => $latitude,
        'longtitude' => $longtitude,
        
    );

//var_dump( $array );
//die();

?>

<script>
var markersData = {
    'Mexican': [ <?php echo FunctionsV3::displayJSRestaurantData( $array ) ; ?> ]    
};
                
//console.log( markersData );    
</script>    