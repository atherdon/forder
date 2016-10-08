<?php

echo CHtml::radioButton( $sub_item_name,
            in_array( $sub_item_id, (array)$sub_addon_selected_id ) ? true : false,
            array(
                'value'            => $val_addon['sub_item_id']."|".$val_addon['price']."|".$val_addon['sub_item_name']."|".$val['two_flavor_position'],
                'data-sub-item-id' => $val_addon['sub_item_id'], 
                'data-price'       => $val_addon['price'],
                'data-item-name'   => $val_addon['sub_item_name'],
                'data-two-flavor'  => $val['two_flavor_position'],
                'class'            => 'icheck sub_item sub_item_name_'.$val['subcat_id']
            ));