 <?php if ( !empty( $list ) ) { 
                
            if ( is_array( $list['list'] ) && count( $list['list'] ) >= 1){ 

                
                
                
                
                
                
                
                
                
                
              foreach ($list['list'] as $val){

                  $merchant_id = $val['merchant_id'];
                  $ratings     = Yii::app()->functions->getRatings($merchant_id);   
                  $merchant_delivery_distance = getOption($merchant_id,'merchant_delivery_miles');
                  $distance_type = '';
                  
                  $address  = $val['street'] . ", " . $val['city'];
                  $address .= ", " . $val['state'] . ", " . $val['post_code'];
                  
                  /*fallback*/
                  if ( empty($val['latitude'])){
                            if ($lat_res=Yii::app()->functions->geodecodeAddress($val['merchant_address'])){        
                                    $val['latitude']=$lat_res['lat'];
                                    $val['lontitude']=$lat_res['long'];
                            } 
                  }
                  ?>
                  <div class="strip_list wow fadeIn" data-wow-delay="0.1s">
                      <?php if ( $val['is_sponsored']==2):?>
                        <div class="ribbon_1">
                          Popular
                        </div>
                        <!--<div class="ribbon"><span>Sponsored</span></div>-->
                     <?php endif;?>
                     <?php if ( $offer = FunctionsV3::getOffersByMerchant( $merchant_id ) ):?>
                        <div class="ribbon-offer">
                            <span>
                            <?php echo $offer;?>
                            </span>
                        </div>
                     <?php endif;?>
                    
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                                                                                            
                            <?php $this->renderPartial('/store/browse/_item-single-list', [

                                       'slug'            => $val['restaurant_slug'],
                                       'merchant_id'     => $merchant_id ,
                                       'restaurant_name' => $val['restaurant_name'],
                                       'cuisine'         => $val['cuisine'],
                                       'address'         => $address,
                                       'service'         => $val['service'],
                           ]); ?>

                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="go_to">
                                <div>
                                    <a href="<?php echo Yii::app()->createUrl( 'store/menu/merchant/' . $val['restaurant_slug'] ); ?>" 
                                       class="btn_1">
                                        View Menu
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End row-->
                </div><!-- End strip_list-->
                <?php
              }
            }


?>
                                    
<?php } else { echo '<p class="text-danger">' . t("No restaurant found") . '</p>'; } ?>