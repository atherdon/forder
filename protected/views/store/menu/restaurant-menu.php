<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">

    <div class="col-md-3">
        <p>
            <a href="list_page.html" class="btn_side">
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
            <h4>Need <span>Help?</span></h4>
            <a href="tel://004542344599" class="phone">+45 423 445 99</a>
            <small>Monday to Friday 9.00am - 7.30pm</small>
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
    
    
    
    
    <div class="col-md-3" id="sidebar">
        <div class="theiaStickySidebar">
            <div id="cart_box" >
                <h3>Your order <i class="icon_cart_alt pull-right"></i></h3>
                <table class="table table_summary">
                    <tbody>
                    <tr>
                            <td>
                                    <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> Enchiladas
                            </td>
                            <td>
                                    <strong class="pull-right">$11</strong>
                            </td>
                    </tr>
                    <tr>
                            <td>
                                    <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Burrito
                            </td>
                            <td>
                                    <strong class="pull-right">$14</strong>
                            </td>
                    </tr>
                    <tr>
                            <td>
                                    <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> Chicken
                            </td>
                            <td>
                                    <strong class="pull-right">$20</strong>
                            </td>
                    </tr>
                    <tr>
                            <td>
                                    <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Corona Beer
                            </td>
                            <td>
                                    <strong class="pull-right">$9</strong>
                            </td>
                    </tr>
                    <tr>
                            <td>
                                    <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> Cheese Cake
                            </td>
                            <td>
                                    <strong class="pull-right">$12</strong>
                            </td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <div class="row" id="options_2">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                            <label><input type="radio" value="" checked name="option_2" class="icheck">Delivery</label>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                            <label><input type="radio" value="" name="option_2" class="icheck">Take Away</label>
                    </div>
                </div><!-- Edn options 2 -->

                <hr>
                <table class="table table_summary">
                <tbody>
                <tr>
                        <td>
                                 Subtotal <span class="pull-right">$56</span>
                        </td>
                </tr>
                <tr>
                        <td>
                                 Delivery fee <span class="pull-right">$10</span>
                        </td>
                </tr>
                <tr>
                        <td class="total">
                                 TOTAL <span class="pull-right">$66</span>
                        </td>
                </tr>
                </tbody>
                </table>
                <hr>
                <a class="btn_full" href="cart.html">
                    Order now
                </a>
            </div><!-- End cart_box -->
    </div><!-- End theiaStickySidebar -->
    </div><!-- End col-md-3 -->

</div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->