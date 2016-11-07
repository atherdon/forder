<?php
$this->renderPartial('/store/checkout/_subheader', array(
   'h1'       => t("Payment Option"),
   'sub_text' => t("choose your payment")
));


$merchant_info = Yii::app()->functions->getMerchant($_SESSION['kr_merchant_id']);
?>

<?php

$this->renderPartial('/store/checkout/breadcrumbs', array(
   'restaurant_name' => $merchant_info['restaurant_name'],
   'restaurant_slug' => $merchant_info['restaurant_slug']
));
?>

<div class="container margin_60_35">
    <div class="row box_style_2">
        <div class="col-md-4">
            <a data-target="#login_2" data-toggle="modal" href="/food/store/#" class="btn_full">Login</a>
            <!--<a href="#" class="btn_full">Login</a>-->
        </div>
        <div class="col-md-4">
            <a data-target="#register" data-toggle="modal" href="/food/store/#" class="btn_full">Register</a>
            <!--<a href="#" class="btn_full">Registration</a>-->
        </div>
        <div class="col-md-4">
            <a href="<?php echo Yii::app()->createUrl( 'store/guestcheckout' )?>" class="btn_full">
                    Guest Checkout
            </a>
            
        </div>
    </div>
</div>    