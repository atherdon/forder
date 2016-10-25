 <?php if ( !empty( $list ) ) { 
                
            if ( is_array( $list['list'] ) && count( $list['list'] ) >= 1){ 

                
              $jsVariable = '<script type="text/javascript">
                                var
                                    mapObject,
                                    markers = [],
                                    markersData = {' ;
              
//              $jsVariable .= ' }</script>'; 
                
              foreach ($list['list'] as $key => $val){

                  $merchant_id = $val['merchant_id'];
                  $ratings     = Yii::app()->functions->getRatings($merchant_id);   
                  
//                  $merchant_delivery_distance = getOption($merchant_id,'merchant_delivery_miles');
                  $distance_type = 'M';
                  
                  $address  = $val['street'] . ", " . $val['city'];
                  $address .= ", " . $val['state'] . ", " . $val['post_code'];
                  
                  /*fallback*/
                  if ( empty($val['latitude'])){
                        if ($lat_res=Yii::app()->functions->geodecodeAddress($val['merchant_address'])){        
                            $val['latitude']=$lat_res['lat'];
                            $val['lontitude']=$lat_res['long'];
                        } 
                  }
                  
                  $even_or_odd = $key % 2;
                  
                  ?>

                
                    <?php if( !$even_or_odd ) { ?>
                
                        <div class="row">
                
                    <?php } ?>
                
                        <?php $this->renderPartial('/store/browse/_item-single-grid', [

                                           'slug'            => $val['restaurant_slug'],
                                           'merchant_id'     => $merchant_id ,
                                           'restaurant_name' => $val['restaurant_name'],
                                           'cuisine'         => $val['cuisine'],
                                           'address'         => $address,
                                           'service'         => $val['service'],
                               ]); ?>
                            
                    <?php if( $even_or_odd ) { ?>
                
                        </div>
                
                    <?php } 
              }
            }


?>
                                    
<?php } else { echo '<p class="text-danger">' . t("No restaurant found") . '</p>'; } ?>