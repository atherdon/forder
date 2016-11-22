<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->

<?php

//var_dump( $merchant_info );
//die();
$merchant_info['restaurant_name'];
$merchant_info['merchant_logo'];
$merchant_info['merchant_address'];
$cuisine = json_decode( $merchant_info['cuisine'], true ); 
var_dump( $cuisine[0] );die();

$cuisine_text = FunctionsV3::displayCuisine2( $merchant_info['cuisine'] );
$restaurant_name_text = clearString( $merchant_info['restaurant_name'] );
$address_text = $merchant_info['merchant_address'];
//echo $latitude;
//echo $lontitude ;    


$array = array(
    'name'      => clearString( $merchant_info['restaurant_name'] ),
    'logo'      => $merchant_info['merchant_logo'],
    'address'   => $address_text,
    'cuisine'   => FunctionsV3::displayCuisine2( $merchant_info['cuisine'] ),
    'lat'       => $latitude,
    'longtitude' => $longtitude,
        
    );

?>

<?php //echo clearString( $merchant_info['restaurant_name'] );?>
<?php //echo FunctionsV3::displayCuisine2( $merchant_info['cuisine'] ); ?>
<?php //echo $merchant_info['merchant_address']; ?>  



<script>
//var longLink    = base_url + '/assets/images/quickfood/thumb_restaurant_map.png';
var markersData = {
    'Mexican': [ <?php echo FunctionsV3::displayJSRestaurantData( $array ) ; ?> ]    
};
                
console.log( markersData );    
</script>    


<!--
/*PROGRESS ORDER BAR*/
    $this->renderPartial('/front/order-progress-bar',array(
       'step'=>3,
       'show_bar'=>true
    ));
-->



<!-- Content ================================================== -->
<div class=" margin_60_35">
    <div class="row">

        <div class="col-md-4">
            <p>
                
                <?php if ( true ) { // @TODO later add variable and disable this button when we don't have maps ?>
                
                    <a class         = "btn_map" 
                       data-toggle   = "collapse" 
                       href          = "#collapseMap" 
                       aria-expanded = "false" 
                       aria-controls = "collapseMap">
                        View on map
                    </a>
                
                <?php } ?>
                
                
                
            </p>
               
            <!--OPENING HOURS-->
	    <?php 
                if ( $theme_hours_tab == "" ){
                    
                    $this->renderPartial('/store/menu/merchant-hours', array(
                      'merchant_id' => $merchant_id
                    )); 
                };
            ?>
            
	    <!--END OPENING HOURS-->
             
            <?php
                    $this->renderPartial('/store/menu/_phone-block', array(
                      'phone' => $phone,

                    ));                     
            ?>           
            

            
            
            
        </div>

        <div class="col-md-8">
            <div class="box_style_2">
                <h2 class="inner">
                    Description
                </h2>



                <?php $this->renderPartial('/store/menu/slider', array(

                                'merchant_id'       => $merchant_id,    

                                'photo_enabled'     => $photo_enabled,


                ) ); ?>   



                <!--INFORMATION-->
                <?php if ($theme_info_tab==""):?>

                     <h3>
                        About us
                    </h3>

                    <p class="add_bottom_30">
                      <?php echo getOption( $merchant_id,'merchant_information' )?>
                    </p>


                <?php endif;?>
                <!--END INFORMATION-->



                <?php if ( $theme_reviews_tab == "" ){

                        echo $this->renderPartial( '/store/menu/reviews', [

                                'ratings'         => $ratings,
                                'merchant_id'     => $merchant_id,
                        ] );
                     } ?>


            </div><!-- End box_style_1 -->
        </div>
</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->                               