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

    <?php if ($val['multi_option']=="multiple"){ // because of additional addons ?>
        <div class="col-md-12">
    <?php } else { ?>
        <div class="col-md-6">    
    <?php } ?>

    <!--<div class="col-md-6">-->
        
        <label>

            <?php
                $this->renderPartial('/store/menu/complex_item_elements/_sub-sub-element', [

                        'val'                   => $val,
                        'sub_item_name'         => $sub_item_name,
                        'sub_item_id'           => $sub_item_id,
                        'sub_addon_selected_id' => $sub_addon_selected_id,
                        'val_addon'             => $val_addon,
                        'x'                     => $x,
                        'subcat_id'             => $subcat_id,
                        'item_data'             => $item_data
                ] );  
            ?>

        </label>
       
<?php if ( 0 ) { ?>
        <?php
                $this->renderPartial('/store/menu/complex_item_elements/_sub-sub-element', [

                        'val'                   => $val,
                        'sub_item_name'         => $sub_item_name,
                        'sub_item_id'           => $sub_item_id,
                        'sub_addon_selected_id' => $sub_addon_selected_id,
                        'val_addon'             => $val_addon,
                        'x'                     => $x,
                        'subcat_id'             => $subcat_id,
                        'item_data'             => $item_data
                ] );  
            ?>
     <?php } ?>
    </div>