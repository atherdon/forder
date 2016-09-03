<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">
        
        <?php
            $this->renderPartial('/store/checkout/_sidebar',array(
                    's'                 => $s,
                    'merchant_address'  => $merchant_address,
                    'merchant_info'     => $merchant_info,
                    'phone'             => $phone  
            ));                     
        ?>    
        

        <div class="col-md-6">

            <div class="box_style_2" id="order_process">


                <?php if ( $continue==TRUE) { ?>
                    <?php 
                    $merchant_id=$s['kr_merchant_id'];
                    echo CHtml::hiddenField('merchant_id',$merchant_id);
                    ?>

                    <?php                    
                        $this->renderPartial('/store/checkout/_form', array(
                            'merchant_info'     => $merchant_info,
                            's'         => $s,
                            'website_enabled_map_address' => $website_enabled_map_address,
                            'address_book'      => $address_book,
                                'merchant_id'  => $merchant_id,
//                           'restaurant_name' => $merchant_info['restaurant_name'],
//                           'restaurant_slug' => $merchant_info['restaurant_slug']
                        ));
                    ?>


                    <!--CREDIT CART-->
                        <?php 
                        $this->renderPartial('/store/checkout/_credit_card',array(
                              'merchant_id'=>$merchant_id	   
                            ));
                            ?>     
                        <!--END CREDIT CART-->




                <?php } else {  ?>

                      <p class="text-danger">
                        <?php echo t("Something went wrong Either your visiting the page directly or your session has expired.")?>
                      </p>   

                <?php } ?>        













            </div><!-- End box_style_1 -->

        </div><!-- End col-md-6 -->

         <?php                    
                    $this->renderPartial('/store/checkout/_cart-column', array(
                        'merchant_id'    => $merchant_id,
                         's'             => $s,
                         'slug' => $merchant_info['restaurant_slug']
                    ));
            ?>
        
       

    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->
