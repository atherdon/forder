<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->


<!-- Content ================================================== -->
<div class=" margin_60_35">
    <div class="row">

        <div class="col-md-4">
            <p>
                <a class         = "btn_map" 
                   data-toggle   = "collapse" 
                   href          = "#collapseMap" 
                   aria-expanded = "false" 
                   aria-controls = "collapseMap">
                    View on map
                </a>
            </p>
               
            <!--OPENING HOURS-->
	    <?php 
                if ( $theme_hours_tab == "" ){
                    
                    $this->renderPartial('/store/menu/merchant-hours',array(
                      'merchant_id' => $merchant_id
                    )); 
                };
            ?>
            
	    <!--END OPENING HOURS-->
             
            <?php
                    $this->renderPartial('/store/menu/_phone-block',array(
                      'phone' => $phone
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