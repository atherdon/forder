<div class="row" id="options_2">

<?php
$res = Yii::app()->functions->getMerchant( $merchant_id );
if ( $res ){
    
    switch ( $res['service'] ) {
            case 2:
                ?>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <label>
                        <?php echo CHtml::radioButton( 'delivery_type[delivery]', true, [ 'class' => 'icheck' ] ); 
                              echo Yii::t("default","Delivery"); ?>
                    </label>
                </div>

            <?php

                    break;
            case 3:
                ?>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                        <label>
                            <?php echo CHtml::radioButton( 'delivery_type[pickup]', true, [ 'class' => 'icheck' ] ); 
                                  echo Yii::t("default","Pickup"); ?>
                        </label>
                    </div>

                <?php


                    break;
            default:

            ?>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <label>
                         <?php echo CHtml::radioButton( 'delivery_type[delivery]', true, [ 'class' => 'icheck' ] ); 
                               echo Yii::t("default","Delivery"); ?>
                    </label>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                    <label>
                         <?php echo CHtml::radioButton( 'delivery_type[pickup]', true, [ 'class' => 'icheck' ] ); 
                               echo Yii::t("default","Pickup"); ?>
                    </label>
                </div> 
        <?php

          break;
    }
        
} else { ?>
    
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
        <label>
                <?php echo CHtml::radioButton( 'delivery_type[delivery]', true, [ 'class' => 'icheck' ] ); 
                      echo Yii::t("default","Delivery"); ?>
        </label>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
        <label>
                <?php echo CHtml::radioButton( 'delivery_type[pickup]', true, [ 'class' => 'icheck' ] ); 
                      echo Yii::t("default","Pickup"); ?>
        </label>
    </div>     
    
<?php } ?>
</div><!-- Edn options 2 -->

<div class="row" id="options_2">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <?php echo CHtml::hiddenField('delivery_date', $now)?>
         <?php echo CHtml::textField('delivery_date1',
            FormatDateTime($now,false),array('class'=>"j_date ",'data-id'=>'delivery_date'))?>
    </div>
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 delivery_asap_wrap">
       <!--<div class="delivery_asap_wrap">--> 


        <?php echo CHtml::textField('delivery_time', $now_time,
         array( 
             'class'       => "timepick ", //"timepick grey-fields",   https://eonasdan.github.io/bootstrap-datetimepicker/
             'placeholder' => Yii::t("default", "Delivery Time")
             )); ?>	       
                       	         	        
           <!--</div>-->
     </div><!-- delivery_asap_wrap-->
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <label class="delivery-asap">
             <?php echo CHtml::checkBox('delivery_asap', false, array( 'class' => "icheck" ) ) ?>
            <!--<span class="text-muted">-->
                <?php echo Yii::t("default", "Delivery ASAP?") ?>
            <!--</span>-->	          
         </label>
         <span class="delivery-asap">
            
         </span>
     </div>
    
    
</div>