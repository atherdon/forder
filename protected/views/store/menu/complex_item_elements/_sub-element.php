<?php 
        $subcat_id=$val['subcat_id'];
        $sub_item_id=$val_addon['sub_item_id'];
        $multi_option_val=$val['multi_option'];

        /** fixed select only one addon*/
         if ( $val['multi_option']=="custom" || $val['multi_option']=="multiple"){
                 $sub_item_name="sub_item[$subcat_id][$x]";
         } else {
             $sub_item_name="sub_item[$subcat_id][]"; 

         }

        $sub_addon_selected='';
        $sub_addon_selected_id='';

        $item_data['sub_item']=isset($item_data['sub_item'])?$item_data['sub_item']:'';
        if (array_key_exists($subcat_id,(array)$item_data['sub_item'])){
                $sub_addon_selected=$item_data['sub_item'][$subcat_id];
                if (is_array($sub_addon_selected) && count($sub_addon_selected)>=1){
                foreach ($sub_addon_selected as $val_addon_selected) {
                        $val_addon_selected=Yii::app()->functions->explodeData($val_addon_selected);
                        if (is_array($val_addon_selected)){
                            $sub_addon_selected_id[]=$val_addon_selected[0];
                        }
                }
                }
        }

?>	

    <div class="col-md-12">

        <label>

            <?php
                $this->renderPartial('/store/menu/complex_item_elements/_sub-sub-element', [
                        'data'        => $data,
                        'item_id'     => 1,
                        'size_select' => $size_select
                ] );  
            ?>

        </label>

    </div>