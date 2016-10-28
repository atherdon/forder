<?php if( is_array( $menu ) && count( $menu ) >= 1 ) { 
        foreach ( $menu as $val ) { 
            if ( is_array( $val['item'] ) && count( $val['item'] ) >= 1 ){ 
      
                foreach ( $val['item'] as $key => $val_item ){ 

        //              var_dump( $val_item )  ;  
        //              var_dump( $val_item['item_name'] )  ;
        //              var_dump( $val_item['single_item'] )  ;

                  if( $val_item['single_item'] == 1 ){

                    $this->renderPartial('/store/menu/_details_popup', [

                            'item_id' => $val_item["item_id"] 
                         ] ); 



                  } else {
                      
                      $this->renderPartial('/store/menu/_details-popup-short', [

                            'item_id' => $val_item["item_id"] 
                         ] ); 
                      
                  }

                
      ?> 

  <?php } 
  
  }
  ?>

  <?php 
  
//    echo '<pre>'; 
//    var_dump( $val['item'][0]['item_name'] ); 
//    var_dump( $val['item'][0]['single_item'] == 1 ); 
//    var_dump( $val['single_item'] == 1 ); 
    
//$this->renderPartial('/store/menu/_details_popup', [
//        'data'    => $data,
//        'item_id' => 1 
//     ] ); 
  ?>

  <?php } ?>  


<?php } ?>
