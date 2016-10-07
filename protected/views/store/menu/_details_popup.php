<?php

    $row          = '';
    $item_data    = '';
    $price_select = '';
    $size_select  = '';
    
//   @TODO take back later 
//    if (array_key_exists("row", (array)$this->data)){
//        
//        $row       = $this->data['row'];	
//        $item_data = $_SESSION['kr_item'][$row];
//        //dump($item_data);
//        $price = Yii::app()->functions->explodeData($item_data['price']);
//        if ( is_array($price) && count($price)>=1){
//                $price_select=isset($price[0])?$price[0]:'';
//                $size_select=isset($price[1])?$price[1]:'';
//        }
//        $row++;
//    }
//    
    $row = 957;
    

    $data = Yii::app()->functions->getItemById( $item_id );
    //dump($data);
    $disabled_website_ordering = Yii::app()->functions->getOptionAdmin('disabled_website_ordering');
    $hide_foodprice            = Yii::app()->functions->getOptionAdmin('website_hide_foodprice');
    echo CHtml::hiddenField( 'hide_foodprice', $hide_foodprice );
    
//    echo '<pre>';
//    var_dump( $data );
    
    if ( is_array( $data ) && count( $data  )>= 1){

        $data = $data[0];

        //dump($data);
    }
    
?>

<!-- Complex item modal -->   
<div class="modal fade" id="complexModalHtml" tabindex="-1" 
     role="dialog" aria-labelledby="complexModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup modal-details">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            
            <form class="popup-form" 
                  id="complexModal" 
                  method="POST" onsubmit="return false;">
                
                 <?php
                 echo CHtml::hiddenField('action', 'addToCart');
                 echo CHtml::hiddenField('item_id', $item_id );
                 echo CHtml::hiddenField('row', isset( $row ) ? $row : "");
                 echo CHtml::hiddenField('merchant_id', 
                         isset($data['merchant_id']) ? $data['merchant_id'] : ''
                     );

                 echo CHtml::hiddenField('discount', 
                         isset($data['discount']) ? $data['discount'] : "" 
                     );
                 echo CHtml::hiddenField('currentController', 'store');
                
                //dump($data);
                /** two flavores */
                if ($data['two_flavors']==2){
                    
                    $data['prices'][0]=array(
                      'price'=>0,
                      'size'=>''
                    );	
                    
                    echo CHtml::hiddenField('two_flavors', $data['two_flavors']);
                }
                    //dump($data);
                ?>
                
                
                
                <div class="row">
                    <div class="col-md-12">
                        
                        <?php
                              $this->renderPartial('/store/menu/complex_item_elements/first-row', [
                                      'data'    => $data,
                        
                              ] ); ?>
                                                   
                        <?php if ( 0 ) { ?>
                        
                            <?php
                                $this->renderPartial('/store/menu/complex_item_elements/photo-gallery', [
                                        'data'    => $data,
//                                        'item_id' => 1 
                                ] ); ?>
                                
                        <?php } ?>
                        
                            <?php
                                $this->renderPartial('/store/menu/complex_item_elements/price', [
                                        'data'        => $data,
//                                        'item_id'     => 1,
                                        'size_select' => $size_select
                                ] ); ?>            
                      
                        
                            <?php
                                $this->renderPartial('/store/menu/complex_item_elements/instructions', [
                                        'data'        => $data,
//                                        'item_id'     => 1,
//                                        'size_select' => $size_select
                                ] ); ?>      
                        
                             <?php
                                $this->renderPartial('/store/menu/complex_item_elements/cooking-ref', [
                                        'data'        => $data,
//                                        'item_id'     => 1,
//                                        'size_select' => $size_select
                                ] ); ?>  
                        
                             <?php
                                $this->renderPartial('/store/menu/complex_item_elements/ingredients', [
                                        'data'        => $data,
//                                        'item_id'     => 1,
//                                        'size_select' => $size_select
                                ] ); ?>  
                        
                             <?php
                                $this->renderPartial('/store/menu/complex_item_elements/food-addon', [
                                        'data'        => $data,
//                                        'item_id'     => 1,
//                                        'size_select' => $size_select
                                ] ); ?>      
                                

                    </div>
                </div>
                
                <br />
                <br />
              
                
                <?php if ($disabled_website_ordering==""):?>
                
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="btn_full_outline" data-dismiss="modal" >
                                <?php echo t("Close")?>
                            </a>
                        </div>
                        <div class="col-md-6">
                            
                             <input type="submit" class="btn btn_1" 
                                    value="<?php echo empty( $row ) ? Yii::t("default","add to cart") : Yii::t("default","update cart"); ?>" />
                                
                            <!--</input>-->
                        </div>
                    </div>    

                <?php endif;?>
                
                
                
                
                
                
                
                
               
                
                
                
            </form>
        </div>
    </div>
</div><!-- End Register modal -->