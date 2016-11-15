<?php

    $this->renderPartial('/store/profile/header', array(

    ));

    echo CHtml::hiddenField('mobile_country_code', Yii::app()->functions->getAdminCountrySet( true ) );
  
    $this->renderPartial( '/store/profile/tabs', array(
        'info' => $info,
        'tabs' => $tabs,
        'disabled_cc' => $disabled_cc
    ) );

?>