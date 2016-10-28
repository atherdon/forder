<tr class="custom-item">

    <td colspan="2">
        <div class="row">
            <div class="col-md-8">
                
                <div class="row row-cart-item-main ">
                    <div class="col-md-12">
                        <?php
                               $this->renderPartial('/store/menu/cart/_delete-link', [
                                           //        'data'    => $data,
                                           //        'item_id' => 1 
   //                                                    'menu'             => $menu,
                               ] ); 
                           ?>

                            <?php
                               $this->renderPartial('/store/menu/cart/_edit-link', [
                                           //        'data'    => $data,
                                           //        'item_id' => 1 
   //                                                    'menu'             => $menu,
                               ] ); 
                           ?> 
                       <strong>
                       2x
                       </strong> 
                       Burrito
                    </div>
                </div>
                
                
                <div class="row row-cart-item-addon">
                    <div class="col-md-12 col-md-offset-1">
                        $ 5.00 <br />
                        medium well <br />
                        medium well <br />
                        9999999999999 <br />
                        
                        <!-- instructions part -->
                        <span>
                            za-za-za-za <br />
                        </span>                         
                        <!-- end instructions part -->
                        
                        <!-- ingredients -->
                        <span>
                            ingredients
                        </span> <br />

                        sault <br />
                        sault <br />
                        <!-- end ingredients -->
                        
                        
                    </div>
                    
                </div>
                
                   
            
                
            
            </div>
            <div class="col-md-4 pull-right" > 
                <!--style="text-align: right;"-->
                
                <strong class="pull-right">
                    $14
                </strong>                
                
            </div>
        </div>
        
        <?php //foreach ($array as $key => $value) { ?>
                            
        <?php //} ?>
        
        <div class="row row-addon">
            <div class="col-md-8">
                Desserts & Sides <br/>
                
                <span class="qty-and-price">
                    3x0.10
                </span>
                &nbsp;Apple Pie
                
            </div>
            <div class="col-md-4 pull-right">
                <br />
                <strong class="pull-right">
                    $ 0.30
                </strong>
            </div>
        </div>
        
        
        <div class="row row-addon">
            <div class="col-md-8">
                Drinks <br/>
                
                <span class="qty-and-price">
                    3x0.20
                </span>
                &nbsp;Frozen Coca Cola
                
            </div>
            <div class="col-md-4 pull-right">
                <br />
                <strong class="pull-right">
                    $ 0.30
                </strong>
            </div>
        </div>        
        

    </td>

</tr>
