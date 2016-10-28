<?php if( is_array( $menu ) && count( $menu ) >= 1 ) { ?>
   
    <div class="col-md-6">
        <div class="box_style_2" id="main_menu">
            <h2 class="inner">
                Menu
            </h2>

            
            
            <?php foreach ( $menu as $val ) { ?>

                <?php //$this->renderPartial( '/store/menu/tabs', array()); ?>
            
                
                <div class="blaha-ha" id="category-<?php echo $val['category_id']?>">
            
            
                
            
                <h3 class="nomargin_top cat-<?php echo $val['category_id']?> " 
                    id="category-<?php echo $val['category_id']?>">
                    <?php echo qTranslate( $val['category_name'], 'category_name', $val )?>
                </h3>

                <?php 
                    $x=0;                    
                    if ( !empty( $val['category_description'] ) ): ?>
                    <p class="small">
                        <?php echo qTranslate( $val['category_description'], 'category_description', $val ) ?>
                    </p>
                <?php endif;?>

                <?php echo Widgets::displaySpicyIconNew($val['dish'], "dish-category")?>   

                    
                    
                    
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

                            <?php  
//                                    if( 0 ) {
                                        
                                    $this->renderPartial('/store/menu/_single-row', [
                                                'tc'       => $tc,
                                                'number'   => $number,
                                                'val_item' => $val_item,
                                                'disabled_addcart' => $disabled_addcart,
                                                'atts' => $atts
                                        //        'item_id' => 1 
                                    ] ); 
                            
//                                    } 
                            ?>
                                
                              
                              
                                
                                
                                




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

                     
                     
                     
                     
                     
                     
                </div>     
                     
                     
                     
                     
                     
                     
                     
                     
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

<!-- details popup -->
<?php if( is_array( $menu ) && count( $menu ) >= 1 ) { ?>
    
        
    
<?php } ?>
    