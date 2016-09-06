<?php foreach ( $raw['item'] as $key => $value ) { ?>

        

        <?php if( !array_key_exists('sub_item', $value) ) { 
                
                $this->renderPartial('/store/checkout/_item', array(
                        'value' => $value
//                  'website_enabled_map_address' => $website_enabled_map_address,
//                  'address_book'      => $address_book

                    )); 
            
              } else {
                  
                  $this->renderPartial('/store/checkout/_item_complex', array(
                        'value' => $value

                    )); 
                  
              } ?>


<!--qty-->
  



<?php } ?>


<tr>
    <td>
        <strong>
            2x
        </strong> 
        Burrito
    </td>
    <td>
        <strong class="pull-right">
            $14
        </strong>
    </td>
</tr>
<tr>
    <td>
        <strong>
            1x
        </strong> 
        Chicken
    </td>
    <td>
        <strong class="pull-right">
            $20
        </strong>
    </td>
</tr>
<tr>
    <td>
        <strong>
            2x
        </strong> 
        Corona Beer
    </td>
    <td>
        <strong class="pull-right">
            $9
        </strong>
    </td>
</tr>
<tr>
    <td>
        <strong>
            2x
        </strong> 
        Cheese Cake
    </td>
    <td>
        <strong class="pull-right">
            $12
        </strong>
    </td>
</tr>