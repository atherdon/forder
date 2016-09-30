<?php 
    if ( $val['multi_option']=="custom" || $val['multi_option']=="multiple"){ 

       echo CHtml::checkBox( $sub_item_name,
        in_array($sub_item_id,(array)$sub_addon_selected_id)?true:false
        ,array(
          'value'       => $val_addon['sub_item_id']."|".$val_addon['price']."|".$val_addon['sub_item_name']."|".$val['two_flavor_position'],
          'data-id'     => $val['subcat_id'],
          'data-option' => $val['multi_option_val'],
          'rel'         => $val['multi_option'],
          'class'       => 'icheck sub_item_name sub_item_name_'.$val['subcat_id']
        ));
       
    } else {            	                            
        
       echo CHtml::radioButton( $sub_item_name,
            in_array( $sub_item_id,(array)$sub_addon_selected_id ) ? true : false
            ,array(
              'value' => $val_addon['sub_item_id']."|".$val_addon['price']."|".$val_addon['sub_item_name']."|".$val['two_flavor_position'],	             
              'class' => 'icheck sub_item sub_item_name_'.$val['subcat_id']	             
            ));
       
    }
    
    
    echo "&nbsp;".qTranslate($val_addon['sub_item_name'],'sub_item_name',$val_addon);
          
    if ($val['multi_option']=="multiple"){
        
        $qty_selected=1;
        if (!isset($item_data['addon_qty'])){
               $item_data['addon_qty']='';
        }
        if (array_key_exists($subcat_id,(array)$item_data['addon_qty'])){            	            
            $qty_selected=$item_data['addon_qty'][$subcat_id][$x];
        }            
                ?>



        <div class="row quantity-wrap-small">
            
          <div class="col-md-3 col-xs-3 border ">
            <a href="javascript:;" class="green-button inline qty-addon-minus"><i class="ion-minus"></i></a>
          </div>
          <div class="col-md-5 col-xs-5 border">
            <?php echo CHtml::textField("addon_qty[$subcat_id][$x]",$qty_selected,array(
                'class'     => "numeric_only left addon_qty",   
                'maxlength' => 5
                ))?>
          </div>
          <div class="col-md-3 col-xs-3 border ">
                <a href="javascript:;" class="green-button inline qty-addon-plus"><i class="ion-plus"></i></a>
          </div>
            
            <span class="hide-food-price">
                <?php echo !empty($val_addon['price'])? FunctionsV3::prettyPrice($val_addon['price']) :"-";?>
            </span> 
            
        </div>


<?php } ?>