<?php echo CHtml::hiddenField('require_addon_'.$val['subcat_id'],$val['require_addons'],array(
             'class'     => "require_addon require_addon_".$val['subcat_id'],
             'data-id'   => $val['subcat_id'],
             'data-name' => strtoupper($val['subcat_name'])
))?>


<div class="row" id="options_2">
    <div class="col-md-12">
        <h5>
            <?php echo qTranslate($val['subcat_name'],'subcat_name',$val)?>
        </h5>
    </div>


    <?php if (is_array($val['sub_item']) && count($val['sub_item'])>=1){ 
            $x=0;
            foreach ($val['sub_item'] as $val_addon){ 

                $this->renderPartial('/store/menu/complex_item_elements/_sub-element', [
                        'data'        => $data,
                        'item_id'     => 1,
//                        'size_select' => $size_select,
                        'val'         => $val,
                        'val_addon'   => $val_addon,
                ] );  
                $x++; 

            } 
        } 
    ?>


</div>  