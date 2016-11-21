<?php


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