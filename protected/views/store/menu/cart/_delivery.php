<div class="row" id="options_2">

<?php

$merchant_close_msg_holiday = Yii::app()->functions->getOption("merchant_close_msg_holiday", $merchant_id);
$is_holiday = false;

//var_dump( $merchant_close_msg_holiday  ); die();
//var_dump( FormatDateTime($now, false) ); die();

if ( $m_holiday=Yii::app()->functions->getMerchantHoliday( $merchant_id ) ){      	         	  
    
//    var_dump(  ); die();
     if (in_array( $now, (array)$m_holiday )){
            $is_holiday=true;
     }
}

$open_hours    = FunctionsV3::getMerchantOpeningHours( $merchant_id, true ); 
$closed_days   = array();
$open_schedule = array();
$today_key     = intval( date('w') );
$now_time      = '';

//$buffer        = $open_hours[0];
//$open_hours[0] = $open_hours[6];
//$open_hours[6] = $buffer;



//echo '<pre>';  var_dump( $open_hours ); die();



foreach ( $open_hours as $key => $value) {
    
    if( !$value['hours'] ){
//        var_dump( $value );
//        var_dump( $key );
        $closed_days[] = $key;
    }
    
     if( !$value['time'] ){ // empty time, so merchant is closed
        $open_schedule[$key] = array(
            'disabledWeekday' => $key
        );
        continue;
     }
     
     if( $value['only_open_time'] ){
         
        $open_schedule[$key] = array(
            'minTime' => $value['open_starts']
        );
        continue;
        
     } else {
         
      
     }
     
//    $open_schedule[$key][''] = array(
//        'min-time' => $key
//    );
     



    $open_schedule[$key] = array(
        'disableTimeRanges' => $key
    );

    if( !empty( $value['pm_starts'] ) && !empty( $value['pm_ends'] ) ){

        $open_schedule[$key] = array(
            'maxTime' => $value['pm_ends'],
            
            'minTime' => $value['open_starts'],
            
            'disableTimeRanges' => array( $value['open_ends'], $value['pm_starts'] )
        );

    } else {

        $open_schedule[$key] = array(
            'maxTime' => $value['open_ends'],
            'minTime' => $value['open_starts']
            
        );

    }

    

     
     
//    $open_schedule[$key] = $value['time'];
//    $open_schedule[$key] = $value['only_open_time'];
    
    
//    if ( !empty( $value['open_starts'] ) && !empty( $value['open_ends'] ) && !empty( $value['pm_starts'] ) && !empty( $value['pm_ends'] ) ){
//        
//    }					
    
    
    
    
} 
//echo '<pre>'; 
$other_array = array();
foreach ( $open_schedule as $key => $value ){
    
//    var_dump($value);
    if(array_key_exists( 'disabledWeekday', $value) ){
        $other_array[] = strval( $key );
    }
//    if (array_key_exists($value, ) ){
//      
//    }
}

//echo '<pre>'; 
//var_dump( $open_schedule[$today_key] ) ;
//var_dump( $open_schedule );
//var_dump( $other_array );

//die();


//1) добавить к элементу тайма current данные.
//тоесть сделать так чтобы если у нас четверг - то выводил бы время для четверга
//тоесть нам нужно current time min, time max, disabled time disable-time-ranges
//
//для общих настроек мы добавим поле отвечающие за data-disable-weekdays
//также нужно добавить обработку клика и при изменении даты - лезть в json массив из которого сразу брать данные для времени


$res = Yii::app()->functions->getMerchant( $merchant_id );
if ( $res ){
    
    
        $this->renderPartial('/store/menu/cart/_delivery_type', array(
                'res'   => $res,

        ));                     
    
        
} else { ?>
    
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
        <label>
                <?php echo CHtml::radioButton( 'delivery_type[delivery]', true, [ 'class' => 'icheck' ] ); 
                      echo Yii::t("default", "Delivery"); ?>
        </label>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
        <label>
                <?php echo CHtml::radioButton( 'delivery_type[pickup]', false, [ 'class' => 'icheck' ] ); 
                      echo Yii::t("default", "Pickup"); ?>
        </label>
    </div>     
    
<?php } ?>
</div><!-- Edn options 2 -->

<div class="row" id="options_2">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
         <?php // echo CHtml::hiddenField('delivery_date', $now); ?>
         <?php echo CHtml::textField('delivery_date',
//                    FormatDateTime($now, false),
                    $now,
                    array(
                        'class'        => "j_date ",
                        'data-id'      => 'delivery_date',
                        'data-disableweekdays' => implode(', ', $other_array ),
                        'data-disableholidays' => json_encode( $m_holiday )
                        )
                 )?>
    </div>
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 delivery_asap_wrap">
       <!--<div class="delivery_asap_wrap">--> 


        <?php echo CHtml::textField('delivery_time', $now_time,
         array( 
             'class' => 'active', //'disable'
//             'class'       => "timepick ",    
             'placeholder' => Yii::t("default", "Delivery Time"),
             'data-now'    => $now_time,

             'data-weekschedule'       => json_encode( $open_schedule ),
             'data-currentweekday'     => json_encode( $open_schedule[$today_key] ),
             'data-weekday'            => $today_key
//             'data-disable-time-ranges' => '',
             
             


             )); ?>	       
                       	         	        
           <!--</div>-->
     </div><!-- delivery_asap_wrap-->
     
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-10">
         <label class="delivery-asap">
             <?php echo CHtml::checkBox('delivery_asap', false, array( 'class' => "icheck " ) ) ?>
            <!--<span class="text-muted">-->
                <?php echo Yii::t("default", "Delivery ASAP?") ?>
            <!--</span>-->	          
         </label>
         <span class="delivery-asap">
            
         </span>
     </div>
    
    
</div>