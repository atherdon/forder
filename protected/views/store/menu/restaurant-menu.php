<!-- Content ================================================== -->
<div class=" margin_60_35">
    <div class="row">

        <div class="col-md-3">
            <p>
                <a href="<?php echo Yii::app()->createUrl('/store/browse' )?>" 
                   class="btn_side">
                    Back to search
                </a>
            </p>


            <?php 
                $this->renderPartial('/store/menu/menu-category', array(
                        'merchant_id' => $merchant_id,
                        'menu'        => $menu			  
                ));
            ?>



            <div class="box_style_2 hidden-xs" id="help">
                <i class="icon_lifesaver"></i>
                <h4>
                    Need <span>Help?</span>
                </h4>
                <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                <small>
                    Monday to Friday 9.00am - 7.30pm
                </small>
            </div>


        </div><!-- End col-md-3 -->

    
    
    <?php
    
        $admin_activated_menu        = getOptionA( 'admin_activated_menu' );			 
        $admin_menu_allowed_merchant = getOptionA( 'admin_menu_allowed_merchant' );
    
        if ( $admin_menu_allowed_merchant == 2 ){			 	 
           $temp_activated_menu = getOption( $merchant_id, 'merchant_activated_menu' );			 	 
           if( !empty( $temp_activated_menu ) ){
               $admin_activated_menu = $temp_activated_menu;
           }
        }
        
        switch ( $admin_activated_menu ){
            
            case 1:
                    die();
                    $this->renderPartial('/front/menu-merchant-2',array(
                      'merchant_id'=>$merchant_id,
                      'menu'=>$menu,
                      'disabled_addcart'=>$disabled_addcart
                    ));
                    break;

            case 2:
                die();
                    $this->renderPartial('/front/menu-merchant-3',array(
                      'merchant_id'=>$merchant_id,
                      'menu'=>$menu,
                      'disabled_addcart'=>$disabled_addcart
                    ));
                    break;

            default:	
                   $this->renderPartial('/store/menu/menu-merchant-1',array(
					  'merchant_id'      => $merchant_id,
					  'menu'             => $menu,
					  'disabled_addcart' => $disabled_addcart,
					  'tc'               => $tc
					));
        break;
     }	
        

    ?>
    
    <?php
    
        $this->renderPartial('/store/menu/cart-sidebar',array(
					  'merchant_id'      => $merchant_id,
					  'menu'             => $menu,
					  'disabled_addcart' => $disabled_addcart,
					  'tc'               => $tc,
            
                                          'data'             => $data,
                                          'distance'         => $distance,
            'delivery_fee'     => $delivery_fee,
            'checkout'          => $checkout,
            'now'               => $now,
            'now_time'          => $now_time,
            'minimum_order'     => $minimum_order,
            'merchant_minimum_order_pickup' => $merchant_minimum_order_pickup,
            
					));
        
    ?>
        

    <?php //} ?>

</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->