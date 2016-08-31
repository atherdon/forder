<?php
$this->renderPartial('/store/checkout/_subheader', array(
   'h1'       => t("Payment Option"),
   'sub_text' => t("choose your payment")
));?>

<?php 

//@TODO add this data to subheader at top
//$this->renderPartial('/front/order-progress-bar',array(
//   'step'     => 4,
//   'show_bar' => true
//));


$s=$_SESSION;
$continue=false;

$merchant_address='';		
if ($merchant_info=Yii::app()->functions->getMerchant($s['kr_merchant_id'])){	
	$merchant_address=$merchant_info['street']." ".$merchant_info['city']." ".$merchant_info['state'];
	$merchant_address.=" "	. $merchant_info['post_code'];
}

$client_info='';

if (isset($is_guest_checkout)){
	$continue=true;	
} else {	
	$client_info = Yii::app()->functions->getClientInfo(Yii::app()->functions->getClientId());
	if (isset($s['kr_search_address'])){	
		$temp=explode(",",$s['kr_search_address']);		
		if (is_array($temp) && count($temp)>=2){
			$street=isset($temp[0])?$temp[0]:'';
			$city=isset($temp[1])?$temp[1]:'';
			$state=isset($temp[2])?$temp[2]:'';
		}
		if ( isset($client_info['street'])){
			if ( empty($client_info['street']) ){
				$client_info['street']=$street;
			}
		}
		if ( isset($client_info['city'])){
			if ( empty($client_info['city']) ){
				$client_info['city']=$city;
			}
		}
		if ( isset($client_info['state'])){
			if ( empty($client_info['state']) ){
				$client_info['state']=$state;
			}
		}
	}	
	
	if (isset($s['kr_merchant_id']) && Yii::app()->functions->isClientLogin() && is_array($merchant_info) ){
		$continue=true;
	}
}
echo CHtml::hiddenField('mobile_country_code',Yii::app()->functions->getAdminCountrySet(true));

echo CHtml::hiddenField('admin_currency_set',getCurrencyCode());

echo CHtml::hiddenField('admin_currency_position',
Yii::app()->functions->getOptionAdmin("admin_currency_position"));
?>



<?php

$this->renderPartial('/store/checkout/breadcrumbs', array(
   'restaurant_name' => $merchant_info['restaurant_name'],
   'restaurant_slug' => $merchant_info['restaurant_slug']
));?>


<?php
//echo '<pre>';
//var_dump( $merchant_info );die();
$this->renderPartial('/store/checkout/content', array(
   'phone'     => $merchant_info['contact_phone'],
    'continue' => $continue,
    's'        => $s,
//   '' => ,
//   'restaurant_slug' => $merchant_info['restaurant_slug']
)); ?>
