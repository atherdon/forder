<table class="table table_summary " id="cart-items"> 
<!--<table class="table table_summary item-order-wrap">--> 

    <tbody class="cart-to-change-by-js">



        <?php //foreach ($array as $key => $value) { ?>

        
        
        <?php
                $this->renderPartial('/store/menu/cart/_custom-item-addon', [
                            //        'data'    => $data,
                            //        'item_id' => 1 

                ] ); 
            ?>    
        
        <?php
                $this->renderPartial('/store/menu/cart/_custom-item', [
                            //        'data'    => $data,
                            //        'item_id' => 1 

                ] ); 
            ?>    

        <?php
                $this->renderPartial('/store/menu/cart/_single-item', [
                            //        'data'    => $data,
                            //        'item_id' => 1 

                ] ); 
            ?>    
        
        
        <?php //} ?>





        <!--add minimum order data to table too-->
        <tr>
            <td>


                <a href="#" class="clear-cart">
                    [<?php echo t("Clear Order")?>]
                </a>


            </td>
        </tr>







    </tbody>

</table>