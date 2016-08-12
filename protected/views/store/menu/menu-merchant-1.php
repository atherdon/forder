<?php if( is_array( $menu ) && count( $menu ) >= 1 ) { ?>
   
    <div class="col-md-6">
        <div class="box_style_2" id="main_menu">
            <h2 class="inner">
                Menu
            </h2>

            <?php foreach ( $menu as $val ) { ?>

                <h3 class="nomargin_top cat-<?php echo $val['category_id']?> " id="starters">
                    <?php echo qTranslate( $val['category_name'], 'category_name', $val )?>
                </h3>

                <?php 
                    $x=0;                    
                    if ( !empty( $val['category_description'] ) ): ?>
                    <p class="small">
                        <?php echo qTranslate( $val['category_description'], 'category_description', $val ) ?>
                    </p>
                <?php endif;?>

                <?php echo Widgets::displaySpicyIconNew($val['dish'],"dish-category")?>   

                <?php if ( is_array( $val['item'] ) && count( $val['item'] ) >= 1 ){ ?>     

                        <table class="table table-striped cart-list">
                            <thead>
                                <tr>
                                    <th>
                                        Item
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Order
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                            $number = 0;
                            foreach ( $val['item'] as $key => $val_item ){ 

                                $atts='';
                                if ( $val_item['single_item']==2){
                                      $atts.='data-price="'.$val_item['single_details']['price'].'"';
                                      $atts.=" ";
                                      $atts.='data-size="'.$val_item['single_details']['size'].'"';
                                }
                            ?>    

                              <tr class="<?php echo $tc == 2 ? "hide" : ''; ?>" >
                                    <td>
                                        <h5>
                                            <?php echo ( $number + 1 ) . '.' ; ?>
                                            <?php echo qTranslate( $val_item['item_name'], 'item_name', $val_item )?>
                                        </h5>

                                        <?php if( isset( $val_item['item_description'] ) ) { ?>

                                            <p>
                                               <?php echo $val_item['item_description']; ?>
                                            </p>

                                        <?php } ?>

                                    </td>
                                    <td>                                                                                                                                                
                                        <strong>
                                            <?php echo FunctionsV3::getItemFirstPrice( $val_item['prices'], $val_item['discount'] ) ?>
                                        </strong>
                                    </td>
                                    <td class="options">

                                        <?php if ( $disabled_addcart == "" ) { ?>

                                             <a href="javascript:;"
                                                rel="<?php echo $val_item['item_id']?>"
                                                data-single="<?php echo $val_item['single_item']?>" 
                                                <?php echo $atts;?>
                                             >

                                                <?php if( $val_item['not_available'] == 2 ) { ?>

                                                    <i class="icon_minus-06"></i>
                                                <?php } else { ?>

                                                    <i class="icon_plus_alt2"></i>                                        
                                                <?php } ?>

                                            </a>

                                        <?php } ?>


                                    </td>
                                </tr>  




                      <?php $x++; 

                            if( $tc != 2 ){ $number++; }

                            } ?>




                            </tbody>
                        </table>
                        <hr>



                <?php } else { ?>     

                     <p class="small text-danger">
                         <?php echo t("no item found on this category"); ?>
                     </p>

                <?php } ?>     

            <?php } ?>


        </div><!-- End box_style_1 -->
    </div><!-- End col-md-6 -->


<?php } else { ?>

    <div class="col-md-6">
        <p class="text-danger">
            <?php echo t("This restaurant has not published their menu yet.")?>
        </p>
    </div>

<?php } ?>