<hr />
<!--FOOD ADDON-->
<div class="sub-item-rows">
<?php if (isset($data['addon_item'])):?>
    <?php if (is_array($data['addon_item']) && count($data['addon_item'])>=1):?>
      <?php foreach ($data['addon_item'] as $val): //dump($val);?>


          <?php
                $this->renderPartial('/store/menu/complex_item_elements/single-addon', [
                        'data'        => $data,
                        'item_id'     => 1,
    //                    'size_select' => $size_select,
                        'val'         => $val,
                ] ); ?> 



       <?php endforeach;?>
    <?php endif;?>
<?php endif;?>
</div><!-- .sub-item-rows-->
<!--FOOD ADDON-->