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
	    <?php if ($theme_hours_tab==""):?>
                <!--<li>-->	       	     
                    <?php
                    $this->renderPartial('/store/menu/merchant-hours',array(
                      'merchant_id'=>$merchant_id
                    )); ?>           
                <!--</li>-->
	    <?php endif;?>
            
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

            <?php //if ( 0 ) { ?>    
            
            
            
            
             <?php //if ( 0 ) { ?>
            
	   
	    
            
            
            
            
            
            
            
	    <!--INFORMATION-->
	    <?php if ($theme_info_tab==""):?>
            
	    <!--<li>-->
	        <div class="box-grey rounded " style="margin-top:0;">
	          <?php echo getOption($merchant_id,'merchant_information')?>
	        </div>
	    <!--</li>-->
            
	    <?php endif;?>
	    <!--END INFORMATION-->
	    
            <?php //} ?>
            
            <?php $this->renderPartial('/store/menu/slider', array(
                
                            'merchant_id'       => $merchant_id,    
//                            'theme_hours_tab'   => $theme_hours_tab,
//                            'theme_reviews_tab' => $theme_reviews_tab,
//                            'phone'             => $phone,
//                            'ratings'           => $ratings,
                            'photo_enabled'     => $photo_enabled,
//                            'theme_info_tab'    => $theme_info_tab,
                
            ) ); ?>   
            
            

            
            
            
            
            
            
            
            
            
            
            <?php //if ( 0 ) { ?>
            
            
            <h3>
                About us
            </h3>
            <p>
                Lorem ipsum dolor sit amet, ius sonet meliore partiendo cu. 
                Nobis laudem mediocrem cum et. Debitis nonumes similique te eam, 
                blandit eligendi principes sea no. Cu eum quidam expetendis.
            </p>
            <p class="add_bottom_30">
                Lorem ipsum dolor sit amet, ex has recusabo adipiscing, 
                aliquip alienum at vis, eos id qualisque quaerendum. Soleat habemus duo no,
                te quo dicam everti, sale ullum movet per ea. Cu cum laudem quaeque, 
                agam decore nullam ei vis. Nec ad tota etiam eirmod. Harum debitis detraxit ut vel, eu vel option oporteat.
            </p>

            <?php //} ?>
            
            
            <?php if ( $theme_reviews_tab == "" ){
                
                    echo $this->renderPartial( '/store/menu/reviews', [

                            'ratings'         => $ratings,
                            'merchant_id'     => $merchant_id,
                    ] );
                 } ?>
            
            <?php //} ?>
        

        </div><!-- End box_style_1 -->
    </div>
</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->                               


<?php //} ?>