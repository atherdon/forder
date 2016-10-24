<?php 
    $search_address = isset($_GET['s'])?$_GET['s']:'';
    if ( isset($_GET['st'] )){
        $search_address = $_GET['st'];
    }
    
    echo CHtml::hiddenField('clien_lat',  $data['client']['lat']);
    echo CHtml::hiddenField('clien_long', $data['client']['long']);

?>

 <?php $this->renderPartial('/store/search/_header', [
            'total'          => $data['total'] ,
            'search_address' => $search_address
 ]); ?>

 <?php $this->renderPartial('/store/search/_breadcrumbs', []); 

// var_dump( $data ); 
    
$this->renderPartial('/store/search/_search-results', [
        'list'                 => $data,
        'enabled_search_map'   => $enabled_search_map,
        'restaurant_name'      => $restaurant_name,
        'filter_cuisine'       => $filter_cuisine,
        'filter_delivery_type' => $filter_delivery_type,
        'filter_minimum'       => $filter_minimum,
//        'minimum_list'         => $minimum_list,
//        'list' => $list

]); 


