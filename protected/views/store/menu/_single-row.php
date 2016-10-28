<tr class="<?php echo $tc == 2 ? "hide" : ''; ?>" >
    <td>
        
        <h5>
            <?php echo ( $number + 1 ) . '.' ; ?>
            <?php echo qTranslate( $val_item['item_name'], 'item_name', $val_item )?>
        </h5>

        <?php if( isset( $val_item['item_description'] ) ) { ?>

            <p>
               <?php echo $val_item['item_description']; ?>
            </p>

        <?php } ?>

    </td>
    <td>                                                                                                                                                
        <strong>
            <?php echo FunctionsV3::getItemFirstPrice( $val_item['prices'], $val_item['discount'] ) ?>
        </strong>
    </td>
    <td class="options">

        
        
        <?php if( $val_item['single_item'] == 1 ) { ?>
        
            <a data-target="#complexModalHtmlItem<?php echo $val_item['item_id']?>" 
               data-toggle="modal" 
               href="#"
               class="menu-item"
               >
                
                <?php if( $val_item['not_available'] == 2 ) { ?>

                    <i class="icon_minus-06"></i>
                <?php } else { ?>

                    <i class="icon_plus_alt2"></i>                                        
                <?php } ?>
                    
            </a>
 
        
        <?php } else { ?>
        
                <?php if ( $disabled_addcart == "" ) { ?>

                    <a href="javascript:;"
                       rel="<?php echo $val_item['item_id']?>"
                       data-single="<?php echo $val_item['single_item']?>"
                       class="menu-item"

                       <?php if( $val_item['single_item'] == 1 ) { ?>
                           data-target="#complexModalHtmlItem<?php echo $val_item['item_id']?>" 
                           data-toggle="modal"
                       <?php } ?>

                       <?php echo $atts;?>
                    >

                       <?php if( $val_item['not_available'] == 2 ) { ?>

                           <i class="icon_minus-06"></i>
                       <?php } else { ?>

                           <i class="icon_plus_alt2"></i>                                        
                       <?php } ?>

                   </a>

                <?php } ?>
            
        
        <?php } ?>


    </td>
</tr>  