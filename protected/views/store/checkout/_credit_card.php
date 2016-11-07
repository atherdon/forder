<div class="credit_card_wrap reveal-if-active ocr hide">    
    <form id="frm-creditcard" class="frm-creditcard" 
          method="POST" onsubmit="return false;">
        
        
        <h4>
            <?php echo 'Credit Card information'; ?>
        </h4>
        <hr>

        <h4>
            <?php echo 'select credit card below or'; ?> 
            
            <a href="#" class="orange-text" id="cc-add">
                [
                <i class="ion-ios-compose-outline"></i> 
                    <?php echo t("Add new card")?>
                ]
            </a>
        </h4>

        

        <?php
                $this->renderPartial('/store/checkout/offline-credit/saved-credit-card', [
                            //        'data'    => $data,
                            //        'item_id' => 1 
//                                                    'menu'             => $menu,
                ] ); 
        ?>   


        
        <?php
                $this->renderPartial('/store/checkout/offline-credit/new-card', [
                            //        'data'    => $data,
                            //        'item_id' => 1 
//                                                    'menu'             => $menu,
                ] ); 
        ?>   
        

        
    </form>
</div> <!--credit_card_wrap-->