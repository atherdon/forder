<?php 
    $search_address=isset($_GET['s'])?$_GET['s']:'';
    if (isset($_GET['st'])){
            $search_address=$_GET['st'];
    }


?>

 <?php $this->renderPartial('/store/search/_header', [
            'total'          => 0,
            'search_address' => $search_address
 ]); ?>

 <?php $this->renderPartial('/store/search/_breadcrumbs', [
//            'total'          => $total,
//            'search_address' => $search_address
 ]); ?>


<?php 

    
    $this->renderPartial('/store/search/_no-results', [
//            'list' => $list

    ]);



