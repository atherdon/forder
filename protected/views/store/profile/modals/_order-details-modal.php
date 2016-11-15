<!-- Complex item modal -->   
<!--<div class="modal fade" id="complexModalHtmlItem<?php //echo $item_id ?>" tabindex="-1"--> 
<div class="modal fade" id="orderDetails500" tabindex="-1"      
     
     role="dialog" aria-labelledby="orderDetailsModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup modal-details">
            
            
            
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            
            <?php
                $this->renderPartial('/store/profile/modals/_data', [
        //                          'val' => $value  
        //                        'item_id' => $val_item["item_id"] 
                ] ); 
                ?>
        
            
            
            
            
        </div>
    </div>
</div><!-- End Register modal -->