<div class="row" id="options_2">

<?php

$merchant_close_msg_holiday = Yii::app()->functions->getOption("merchant_close_msg_holiday", $merchant_id);
$is_holiday = false;

//var_dump( $merchant_close_msg_holiday  ); die();
//var_dump( FormatDateTime($now, false) ); die();

if ( $m_holiday=Yii::app()->functions->getMerchantHoliday( $merchant_id ) ){      	         	  
    
//    var_dump(  ); die();
     if (in_array($now,(array)$m_holiday)){
            $is_holiday=true;
     }
}

$open_hours    = FunctionsV3::getMerchantOpeningHours( $merchant_id, true ); 
$closed_days   = array();
$open_schedule = array();

//$buffer        = $open_hours[0];
//$open_hours[0] = $open_hours[6];
//$open_hours[6] = $buffer;



echo '<pre>';  var_dump( $open_hours ); die();



foreach ( $open_hours as $key => $value) {
    if( !$value['hours'] ){
//        var_dump( $value );
//        var_dump( $key );
        $closed_days[] = $key;
    }
    
     if( !$value['time'] ){ // empty time, so merchant is closed
        $open_schedule[$key] = array(
            'disabled-weekday' => $key
        );
        continue;
     }
     
     if( $value['only_open_time'] ){
        $open_schedule[$key] = array(
            'min-time' => $key
        );
        continue;
     }
     



    $open_schedule[$key] = array(
        'disable-time-ranges' => $key
    );

    if( !empty( $value['pm_starts'] ) && !empty( $value['pm_ends'] ) ){

        $open_schedule[$key] = array(
            'max-time' => $value['pm_ends']
        );

    } else {

        $open_schedule[$key] = array(
            'max-time' => $value['open_ends']
        );

    }

    

     
     
//    $open_schedule[$key] = $value['time'];
//    $open_schedule[$key] = $value['only_open_time'];
    
    
//    if ( !empty( $value['open_starts'] ) && !empty( $value['open_ends'] ) && !empty( $value['pm_starts'] ) && !empty( $value['pm_ends'] ) ){
//        
//    }					
    
    
    
    
} 
//die();


//1) добавить к элементу тайма current данные.
//тоесть сделать так чтобы если у нас четверг - то выводил бы время для четверга
//тоесть нам нужно current time min, time max, disabled time disable-time-ranges
//
//для общих настроек мы добавим поле отвечающие за data-disable-weekdays
//также нужно добавить обработку клика и при изменении даты - лезть в json массив из которого сразу брать данные для времени


$res = Yii::app()->functions->getMerchant( $merchant_id );
if ( $res ){
    
    switch ( $res['service'] ) {
        
            case 2:
                ?>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <label>
                        <?php echo CHtml::radioButton( 'delivery_type[delivery]', true, [ 'class' => 'icheck' ] ); 
                              echo Yii::t("default", "Delivery"); ?>
                    </label>
                </div>

            <?php

                break;
            
            case 3:
                ?>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <label>
                            <?php echo CHtml::radioButton( 'delivery_type[pickup]', false, [ 'class' => 'icheck' ] ); 
                                  echo Yii::t("default", "Pickup"); ?>
                        </label>
                    </div>

                <?php


                    break;
            default:

            ?>
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
        <?php

          break;
    }
        
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
                        'data-disable-weekdays' => '',
                        'data-disable-holidays' => json_encode( $m_holiday )
                        )
                 )?>
    </div>
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 delivery_asap_wrap">
       <!--<div class="delivery_asap_wrap">--> 


        <?php echo CHtml::textField('delivery_time', $now_time,
         array( 
//             'class'       => "timepick ",    
             'placeholder' => Yii::t("default", "Delivery Time"),
             'data-now'    => $now_time,

             'data-week-schedule'       => false,
             'data-current-weekday'     => '',
             'data-disable-time-ranges' => '',


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