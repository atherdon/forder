<?php 
    $search_address=isset($_GET['s'])?$_GET['s']:'';
    if (isset($_GET['st'])){
            $search_address=$_GET['st'];
    }
    
    echo CHtml::hiddenField('clien_lat',$data['client']['lat']);
    echo CHtml::hiddenField('clien_long',$data['client']['long']);

?>

 <?php $this->renderPartial('/store/search/_header', [
            'total'          => empty( $flag ) ? $total : 0 ,
            'search_address' => $search_address
 ]); ?>

 <?php $this->renderPartial('/store/search/_breadcrumbs', [
//            'total'          => $total,
//            'search_address' => $search_address
 ]); 

    
$this->renderPartial('/store/search/_search-results', [
        'list' => $list

]); 


