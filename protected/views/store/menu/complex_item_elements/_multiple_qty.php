<?php

    $qty_selected = 1;
    if (!isset($item_data['addon_qty'])){
        $item_data['addon_qty']='';
    }
    if (array_key_exists($subcat_id,(array)$item_data['addon_qty'])){            	            
        $qty_selected=$item_data['addon_qty'][$subcat_id][$x];
    }  

?>
<span class="pull-right">
<!--<div class="row quantity-wrap-small">

  <div class="col-md-3 col-xs-3 border ">
    <a href="javascript:;" class="green-button inline qty-addon-minus"><i class="ion-minus"></i></a>
  </div>
  <div class="col-md-5 col-xs-5 border">-->

    <?php echo CHtml::textField("addon_qty[$subcat_id][$x]",$qty_selected,array(
        'class'     => "numeric_only left addon_qty",   
        'maxlength' => 5
        ))?>

<!--  </div>
  <div class="col-md-3 col-xs-3 border ">
        <a href="javascript:;" class="green-button inline qty-addon-plus"><i class="ion-plus"></i></a>
  </div>-->
    
    <!--<span class="hide-food-price">-->

    <!--@TODO add recount of price when spinner triggered-->
    
    <span class="pull-right ml-10 price-recount-change-event">    
        <?php echo !empty( $price )? FunctionsV3::prettyPrice( $price ) :"-";?>
    </span> 
</span>    
<!--    </span> 

</div>-->