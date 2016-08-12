<?php if( is_array( $menu ) && count( $menu ) >= 1 ) { ?>




<?php //if ( 0 ) { ?>
   
<div class="col-md-6">
    <div class="box_style_2" id="main_menu">
        <h2 class="inner">
            Menu
        </h2>
        
        
        
        
        <?php foreach ( $menu as $val ) { ?>

                <h3 class="nomargin_top cat-<?php echo $val['category_id']?> " id="starters">
                    <!--Starters-->
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
                    
                     <?php foreach ( $val['item'] as $val_item ){ ?>
                    
                        
                    
                     <?php $x++; 
                           } ?>
                    
               <?php } else { ?>     
                    
                    <div class="col-md-6">
                        <p class="text-danger">
                            <?php echo t("This restaurant has not published their menu yet.")?>
                        </p>
                    </div>
                    
                    <!--<p class="small text-danger">-->
                        <?php //echo t("no item found on this category"); ?>
                    <!--</p>-->
                    
               <?php } ?>     

        <?php } ?>

        
        
        
        
        
        
        
<!--        <p>
                Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
        </p>-->
        
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
                <tr>
                    <td>
                        <h5>1. Mexican Enchiladas</h5>
                        <p>
                                Fuisset mentitum deleniti sit ea.
                        </p>
                    </td>
                    <td>
                        <strong>€ 9,40</strong>
                    </td>
                    <td class="options">
                        <a href="#0"><i class="icon_plus_alt2"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>2. Fajitas</h5>
                        <p>
                                Fuisset mentitum deleniti sit ea.
                        </p>
                    </td>
                    <td>
                        <strong>€ 6,80</strong>
                    </td>
                    <td class="options">
                        <a href="#0"><i class="icon_plus_alt2"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>3. Royal Fajitas</h5>
                        <p>
                            Fuisset mentitum deleniti sit ea.
                        </p>
                    </td>
                    <td>
                        <strong>€ 5,70</strong>
                    </td>
                    <td class="options">
                        <a href="#0"><i class="icon_plus_alt2"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>4. Chicken Enchilada Wrap</h5>
                        <p>
                            Fuisset mentitum deleniti sit ea.
                        </p>
                    </td>
                    <td>
                        <strong>€ 5,20</strong>
                    </td>
                    <td class="options">
                        <a href="#0"><i class="icon_plus_alt2"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        
        <?php if ( 0 ) { ?>
        <h3 id="main_courses">Main courses</h3>
        <p>
                Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
        </p>
        <table class="table table-striped cart-list ">
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
            <tr>
                <td>
                    <h5>5. Cheese Quesadilla</h5>
                    <p>
                            Fuisset mentitum deleniti sit ea.
                    </p>
                </td>
                <td>
                    <strong>€ 12,00</strong>
                </td>
                <td class="options">
                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>6. Chorizo & Cheese</h5>
                    <p>
                        Fuisset mentitum deleniti sit ea.
                    </p>
                </td>
                <td>
                    <strong>€ 24,71</strong>
                </td>
                <td class="options">
                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>7. Beef Taco</h5>
                    <p>
                        Fuisset mentitum deleniti sit ea.
                    </p>
                </td>
                <td>
                    <strong>€ 8,70</strong>
                </td>
                <td class="options">
                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>8. Minced Beef Double Layer</h5>
                    <p>
                            Fuisset mentitum deleniti sit ea.
                    </p>
                </td>
                <td>
                    <strong>€ 6,30</strong>
                </td>
                <td class="options">
                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>9. Piri Piri Chicken</h5>
                    <p>
                            Fuisset mentitum deleniti sit ea.
                    </p>
                </td>
                <td>
                    <strong>€ 7,40</strong>
                </td>
                <td class="options">
                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>10. Burrito Al Pastor</h5>
                    <p>
                            Fuisset mentitum deleniti sit ea.
                    </p>
                </td>
                <td>
                    <strong>€ 7,70</strong>
                </td>
                <td class="options">
                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                </td>
            </tr>
        </tbody>
        </table>
            <hr>
            
        <?php } ?>    
            
            
        <?php if ( 0 ) { ?>    
            
            <h3 id="beef">Beef</h3>
            <p>
                    Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
            </p>
            <table class="table table-striped cart-list ">
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
                <tr>
                        <td>
                                <h5>11. Beef Enchilada Wrap</h5>
                                <p>
                                        Fuisset mentitum deleniti sit ea.
                                </p>
                        </td>
                        <td>
                                <strong>€ 11,70</strong>
                        </td>
                        <td class="options">
                                <a href="#0"><i class="icon_plus_alt2"></i></a>
                        </td>
                </tr>
                <tr>
                        <td>
                                <h5>12. Chicken Fillet Taco</h5>
                                <p>
                                        Fuisset mentitum deleniti sit ea.
                                </p>
                        </td>
                        <td>
                                <strong>€ 12,40</strong>
                        </td>
                        <td class="options">
                                <a href="#0"><i class="icon_plus_alt2"></i></a>
                        </td>
                </tr>
                <tr>
                        <td>
                                <h5>13. Tiger Prawn & Chorizo</h5>
                                <p>
                                        Fuisset mentitum deleniti sit ea.
                                </p>
                        </td>
                        <td>
                                <strong>€ 24,71</strong>
                        </td>
                        <td class="options">
                                <a href="#0"><i class="icon_plus_alt2"></i></a>
                        </td>
                </tr>
                <tr>
                        <td>
                                <h5>14. Fillet Steak & Chorizo</h5>
                                <p>
                                        Fuisset mentitum deleniti sit ea.
                                </p>
                        </td>
                        <td>
                                <strong>€ 15,30</strong>
                        </td>
                        <td class="options">
                                <a href="#0"><i class="icon_plus_alt2"></i></a>
                        </td>
                </tr>
                <tr>
                        <td>
                                <h5>15. Burrito's with Rice</h5>
                                <p>
                                        Fuisset mentitum deleniti sit ea.
                                </p>
                        </td>
                        <td>
                                <strong>€ 9,70</strong>
                        </td>
                        <td class="options">
                                <a href="#0"><i class="icon_plus_alt2"></i></a>
                        </td>
                </tr>
                <tr>
                        <td>
                                <h5>16. Mexican Burger</h5>
                                <p>
                                        Fuisset mentitum deleniti sit ea.
                                </p>
                        </td>
                        <td>
                                <strong>€ 8,30</strong>
                        </td>
                        <td class="options">
                                <a href="#0"><i class="icon_plus_alt2"></i></a>
                        </td>
                </tr>
                </tbody>
            </table>
            <hr>
            
            <?php } ?>
            
            <?php if ( 0 ) { ?>
            
            <h3 id="desserts">Desserts</h3>
            <p>
                Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
            </p>
            <table class="table table-striped cart-list ">
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
                    <tr>
                            <td>
                                    <h5>17. Chocolate Fudge Cake</h5>
                                    <p>
                                            Fuisset mentitum deleniti sit ea.
                                    </p>
                            </td>
                            <td>
                                    <strong>€ 24,71</strong>
                            </td>
                            <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                            </td>
                    </tr>
                    <tr>
                            <td>
                                    <h5>18. Cheesecake</h5>
                                    <p>
                                            Fuisset mentitum deleniti sit ea.
                                    </p>
                            </td>
                            <td>
                                    <strong>€ 7,50</strong>
                            </td>
                            <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                            </td>
                    </tr>
                    <tr>
                            <td>
                                    <h5>19. Apple Pie & Custard</h5>
                                    <p>
                                            Fuisset mentitum deleniti sit ea.
                                    </p>
                            </td>
                            <td>
                                    <strong>€ 9,70</strong>
                            </td>
                            <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                            </td>
                    </tr>
                    <tr>
                            <td>
                                    <h5>20. Profiteroles</h5>
                                    <p>
                                            Fuisset mentitum deleniti sit ea.
                                    </p>
                            </td>
                            <td>
                                    <strong>€ 12,00</strong>
                            </td>
                            <td class="options">
                                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                            </td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <?php } ?>
            
            <?php if ( 0 ) { ?>
            <h3 id="drinks">Drinks</h3>
            <p>
                Te ferri iisque aliquando pro, posse nonumes efficiantur in cum. Sensibus reprimique eu pro. Fuisset mentitum deleniti sit ea.
            </p>
            <table class="table table-striped cart-list ">
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
            <tr>
                <td>
                    <h5>21. Coke 0.33L</h5>
                    <p>
                        Fuisset mentitum deleniti sit ea.
                    </p>
                </td>
                <td>
                    <strong>€ 5,70</strong>
                </td>
                <td class="options">
                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>2. Diet Coke 0.33L</h5>
                    <p>
                            Fuisset mentitum deleniti sit ea.
                    </p>
                </td>
                <td>
                    <strong>€ 2,70</strong>
                </td>
                <td class="options">
                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>3. Diet Coke 1L</h5>
                    <p>
                            Fuisset mentitum deleniti sit ea.
                    </p>
                </td>
                <td>
                    <strong>€ 5,70</strong>
                </td>
                <td class="options">
                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>4. Fanta Orange 0.33L</h5>
                    <p>
                            Fuisset mentitum deleniti sit ea.
                    </p>
                </td>
                <td>
                    <strong>€ 2,70</strong>
                </td>
                <td class="options">
                    <a href="#0"><i class="icon_plus_alt2"></i></a>
                </td>
            </tr>
            </tbody>
            </table>
            
            <?php } ?>
            
    </div><!-- End box_style_1 -->
</div><!-- End col-md-6 -->


<?php //} ?> 



<?php } ?>
<?php if( is_array( $menu ) && count( $menu ) >= 1 ) : ?>



<?php foreach ($menu as $val):?>
<div class="menu-1 box-grey rounded" style="margin-top:0;">

  <div class="menu-cat cat-<?php echo $val['category_id']?> ">
     <a href="javascript:;">       
       <span class="bold">
           
           
           
           
           
           
           
           
           
           
           
           
          <i class="<?php echo $tc==2?"ion-ios-arrow-thin-down":'ion-ios-arrow-thin-right'?>"></i>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
         <?php echo qTranslate($val['category_name'],'category_name',$val)?>
       </span>
       <b></b>
     </a>
         
      
      
      
      
      
      
      
      
      
      
      
     <?php $x=0?>
     
      
      
      
      
      
      
      
      
     <div class="items-row <?php echo $tc==2?"hide":''?>">
     
         
         
         
         
         
         
         
         
         
     <?php if (!empty($val['category_description'])):?>
     <p class="small">
       <?php echo qTranslate($val['category_description'],'category_description',$val)?>
     </p>
     <?php endif;?>
     
     
     
     
     
     <?php echo Widgets::displaySpicyIconNew($val['dish'],"dish-category")?>
     
     <?php if (is_array($val['item']) && count($val['item'])>=1):?>
     <?php foreach ($val['item'] as $val_item):?>
     
     <?php 
	    $atts='';
	    if ( $val_item['single_item']==2){
	  	  $atts.='data-price="'.$val_item['single_details']['price'].'"';
	  	  $atts.=" ";
	  	  $atts.='data-size="'.$val_item['single_details']['size'].'"';
	    }
	  ?>       
     
     <div class="row <?php echo $x%2?'odd':'even'?>">
        <div class="col-md-7 col-xs-7 border">
          <?php echo qTranslate($val_item['item_name'],'item_name',$val_item)?>
        </div>
        <div class="col-md-3 col-xs-3 food-price-wrap border">
           <?php echo FunctionsV3::getItemFirstPrice($val_item['prices'],$val_item['discount']) ?>
        </div>
        <div class="col-md-1 col-xs-1 relative food-price-wrap border">
          <?php if ( $disabled_addcart==""):?>
          
          <a href="javascript:;" class="dsktop menu-item <?php echo $val_item['not_available']==2?"item_not_available":''?>" 
            rel="<?php echo $val_item['item_id']?>"
            data-single="<?php echo $val_item['single_item']?>" 
            <?php echo $atts;?>
           >
           <i class="ion-ios-plus-outline green-color bold"></i>
          </a>
         
          <a href="javascript:;" class="mbile menu-item <?php echo $val_item['not_available']==2?"item_not_available":''?>" 
            rel="<?php echo $val_item['item_id']?>"
            data-single="<?php echo $val_item['single_item']?>" 
            <?php echo $atts;?>
           >
           <i class="ion-ios-plus-outline green-color bold"></i>
          </a>
          
          <?php endif;?>
        </div>
     </div> <!--row-->
     <?php $x++?>
     <?php endforeach;?>
    <?php else :?> 
      <p class="small text-danger"><?php echo t("no item found on this category")?></p>
     <?php endif;?>
    </div> 
    
  </div> <!--menu-cat-->

</div> <!--menu-1-->
<?php endforeach;?>

<?php else :?>


    <div class="col-md-6">
        <p class="text-danger">
            <?php echo t("This restaurant has not published their menu yet.")?>
        </p>
    </div>


<?php endif;?>