<?php 
    if ( $val['multi_option']=="custom" || $val['multi_option']=="multiple" ){ 

        $this->renderPartial('/store/menu/complex_item_elements/_multiple_checkbox', [
       
                        'val'           => $val,
                        'val_addon'     => $val_addon,
                        'sub_item_name' => $sub_item_name,
                        'sub_item_id'   => $sub_item_id,
                        'sub_addon_selected_id' => $sub_addon_selected_id
                ] );
       
       
    } else {            	                            
        
         $this->renderPartial('/store/menu/complex_item_elements/_multiple_radio', [
       
                        'val'           => $val,
                        'val_addon'     => $val_addon,
                        'sub_item_name' => $sub_item_name,
                        'sub_item_id'   => $sub_item_id,
                        'sub_addon_selected_id' => $sub_addon_selected_id
                ] );
              
       
    }
    
    $html = "&nbsp;" . qTranslate( $val_addon['sub_item_name'], 'sub_item_name', $val_addon ) . '&nbsp;';
    
    if ( ( $val['multi_option'] != "multiple" )  && !empty( $val_addon['price'] )  ){
                
        $html .=  '<span class="pull-right ml-10">' . FunctionsV3::prettyPrice( $val_addon['price'] ) . '</span>';
        
    } else {
        
        $html .=  '<span class="pull-right ml-10"> - </span>';
    }
    
    echo $html;
    
    
//    var_dump($val_addon);
//    echo "&nbsp;" . qTranslate( $val_addon['sub_item_name'], 'sub_item_name', $val_addon );
          
    if ($val['multi_option']=="multiple"){
        
         $this->renderPartial('/store/menu/complex_item_elements/_multiple_qty', [
       
                        'item_data' => $item_data,             
                        'subcat_id' => $subcat_id,
                        'x'         => $x,
                        'price'     => $val_addon['price'],
             
                ] );
        
    }
?>