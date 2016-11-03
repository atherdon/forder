<div class="col-md-3">

    <?php if ( isset( $s['kr_delivery_options']['delivery_type'] ) ) { ?>
    
        <?php if ( $s['kr_delivery_options']['delivery_type'] == "pickup") { ?>

            <div class="box_style_2 hidden-xs info">
                <h4 class="nomargin_top">
                    <?php echo Yii::t("default","Pickup information")?> 
                    <i class="icon_clock_alt pull-right"></i>
                </h4>
                <p>
                    <?php echo $merchant_address;?>
                </p>                
            </div><!-- End box_style_1 -->

        <?php } else { ?>

            <div class="box_style_2 hidden-xs info">
                <h4 class="nomargin_top">
                    <?php echo Yii::t("default","Delivery information")?> 
                    <i class="icon_clock_alt pull-right"></i>
                </h4>
                
                <p>
                    <?php echo clearString( ucwords( $merchant_info['restaurant_name'] ) ); ?> 
                    <?php echo Yii::t("default","Restaurant"); ?> 
                    <?php echo "<span class='bold'>" . Yii::t("default", ucwords( $s['kr_delivery_options']['delivery_type'] ) ) . "</span> ";
                    
                    if ($s['kr_delivery_options']['delivery_asap'] == 1){
                            $s['kr_delivery_options']['delivery_date'] . " " . Yii::t("default","ASAP");
                    } else {

                      echo '<span class="bold">' . date("M d Y",strtotime($s['kr_delivery_options']['delivery_date'])) .
                            " " . t("at") . " " . $s['kr_delivery_options']['delivery_time'] . "</span> " ;
    //                          . t("to");
                    }
                    
                    ?>
                </p>                
            </div><!-- End box_style_1 -->

        <?php } ?>

    <?php } ?>    
        
    <?php
        $this->renderPartial('/store/menu/_phone-block', array(
            'phone' => $phone
        ));                     
    ?>        

</div><!-- End col-md-3 -->