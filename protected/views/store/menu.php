<?php
/*POINTS PROGRAM*/ //die();
if (FunctionsV3::hasModuleAddon("pointsprogram")){
	unset($_SESSION['pts_redeem_amt']);
	unset($_SESSION['pts_redeem_points']);
}

$merchant_photo_bg = getOption($merchant_id,'merchant_photo_bg');
if ( !file_exists(FunctionsV3::uploadPath()."/$merchant_photo_bg")){
	$merchant_photo_bg='';
} 

/*RENDER MENU HEADER FILE*/
$ratings = Yii::app()->functions->getRatings($merchant_id);   

//echo '<pre>';
//var_dump( $data['contact_phone'] );
//die();

$merchant_info = array(   
  'merchant_id'      => $merchant_id ,
  'minimum_order'    => $data['minimum_order'],
  'ratings'          => $ratings,
  'merchant_address' => $data['merchant_address'],
  'cuisine'          => $data['cuisine'],
  'restaurant_name'  => $data['restaurant_name'],
  'background'       => $merchant_photo_bg,
  'merchant_website' => $merchant_website,
  'merchant_logo'    => FunctionsV3::getMerchantLogo($merchant_id),
        
  
);

//var_dump( $booking_enabled ); die();

//$this->renderPartial('/front/menu-header', $merchant_info);
$this->renderPartial( '/front/quickfood/menu-header', $merchant_info );




/*ADD MERCHANT INFO AS JSON */
$cs = Yii::app()->getClientScript();
$cs->registerScript(
  'merchant_information',
  "var merchant_information =".json_encode($merchant_info)."",
  CClientScript::POS_HEAD
);		


        
//$this->renderPartial( '/store/menu/tabs', 
//        array( 
//            'booking_enabled'   => $booking_enabled,
//            'merchant_id'       => $merchant_id,    
//            'theme_hours_tab'   => $theme_hours_tab,
//            'phone'             => $data['contact_phone'],
//        ) );  
        
        
 if( 0 ) { 

    /*PROGRESS ORDER BAR*/
    $this->renderPartial('/front/order-progress-bar',array(
       'step'=>3,
       'show_bar'=>true
    ));

 } 


//
$now      = date('Y-m-d');
$now_time = '';

$checkout = FunctionsV3::isMerchantcanCheckout( $merchant_id ); 
$menu     = Yii::app()->functions->getMerchantMenu( $merchant_id ); 



//var_dump( $disabled_addcart ); die();





echo CHtml::hiddenField('is_merchant_open',isset($checkout['code'])?$checkout['code']:'' );

/*hidden TEXT*/
echo CHtml::hiddenField('restaurant_slug',$data['restaurant_slug']);
echo CHtml::hiddenField('merchant_id',$merchant_id);
echo CHtml::hiddenField('is_client_login',Yii::app()->functions->isClientLogin());

echo CHtml::hiddenField('website_disbaled_auto_cart',
Yii::app()->functions->getOptionAdmin('website_disbaled_auto_cart'));

$hide_foodprice=Yii::app()->functions->getOptionAdmin('website_hide_foodprice');
echo CHtml::hiddenField('hide_foodprice',$hide_foodprice);

echo CHtml::hiddenField('accept_booking_sameday',getOption($merchant_id
,'accept_booking_sameday'));

echo CHtml::hiddenField('customer_ask_address',getOptionA('customer_ask_address'));

echo CHtml::hiddenField('merchant_required_delivery_time',
  Yii::app()->functions->getOption("merchant_required_delivery_time",$merchant_id));   
  
/** add minimum order for pickup status*/
$merchant_minimum_order_pickup=Yii::app()->functions->getOption('merchant_minimum_order_pickup',$merchant_id);
if (!empty($merchant_minimum_order_pickup)){
	  echo CHtml::hiddenField('merchant_minimum_order_pickup',$merchant_minimum_order_pickup);
	  
	  echo CHtml::hiddenField('merchant_minimum_order_pickup_pretty',
         displayPrice(baseCurrency(),prettyFormat($merchant_minimum_order_pickup)));
}
 
$merchant_maximum_order_pickup=Yii::app()->functions->getOption('merchant_maximum_order_pickup',$merchant_id);
if (!empty($merchant_maximum_order_pickup)){
	  echo CHtml::hiddenField('merchant_maximum_order_pickup',$merchant_maximum_order_pickup);
	  
	  echo CHtml::hiddenField('merchant_maximum_order_pickup_pretty',
         displayPrice(baseCurrency(),prettyFormat($merchant_maximum_order_pickup)));
}  

/*add minimum and max for delivery*/
$minimum_order=Yii::app()->functions->getOption('merchant_minimum_order',$merchant_id);
if (!empty($minimum_order)){
	echo CHtml::hiddenField('minimum_order',unPrettyPrice($minimum_order));
	echo CHtml::hiddenField('minimum_order_pretty',
	 displayPrice(baseCurrency(),prettyFormat($minimum_order))
	);
}


$merchant_maximum_order=Yii::app()->functions->getOption("merchant_maximum_order",$merchant_id);
 if (is_numeric($merchant_maximum_order)){
 	echo CHtml::hiddenField('merchant_maximum_order',unPrettyPrice($merchant_maximum_order));
    echo CHtml::hiddenField('merchant_maximum_order_pretty',baseCurrency().prettyFormat($merchant_maximum_order));
 }

$is_ok_delivered=1;
if (is_numeric($merchant_delivery_distance)){
	if ( $distance>$merchant_delivery_distance){
		$is_ok_delivered=2;
		/*check if distance type is feet and meters*/
		if($distance_type=="ft" || $distance_type=="mm" || $distance_type=="mt"){
			$is_ok_delivered=1;
		}
	}
} 

echo CHtml::hiddenField('is_ok_delivered',$is_ok_delivered);
echo CHtml::hiddenField('merchant_delivery_miles',$merchant_delivery_distance);
echo CHtml::hiddenField('unit_distance',$distance_type);
echo CHtml::hiddenField('from_address', FunctionsV3::getSessionAddress() );

echo CHtml::hiddenField('merchant_close_store',getOption($merchant_id,'merchant_close_store'));

/*$close_msg=getOption($merchant_id,'merchant_close_msg');
if(empty($close_msg)){
	$close_msg=t("This restaurant is closed now. Please check the opening times.");
}*/
echo CHtml::hiddenField('merchant_close_msg',
isset($checkout['msg'])?$checkout['msg']:t("Sorry merchant is closed."));

echo CHtml::hiddenField('disabled_website_ordering',getOptionA('disabled_website_ordering'));
echo CHtml::hiddenField('web_session_id',session_id());

echo CHtml::hiddenField('merchant_map_latitude',$data['latitude']);
echo CHtml::hiddenField('merchant_map_longtitude',$data['lontitude']);
echo CHtml::hiddenField('restaurant_name',$data['restaurant_name']);





/*add meta tag for image*/
Yii::app()->clientScript->registerMetaTag(
Yii::app()->getBaseUrl(true).FunctionsV3::getMerchantLogo($merchant_id)
,'og:image');
?>




 <!--Tabs partial must be initialized here-->



<?php 

// @TODO check cases with $disabled_addcart variable not empty.
$this->renderPartial( '/store/menu/tabs', array(
    'merchant_id'      => $merchant_id,
    'menu'             => $menu,
    'disabled_addcart' => $disabled_addcart,
    'tc'               => $tc,
//    ''                 => 
    'theme_hours_tab'   => $theme_hours_tab,
    'theme_reviews_tab' => $theme_reviews_tab,
    'phone'             => $data['contact_phone'],
    'ratings'           => $ratings,
    
    
    'data'              => $data,
    'distance'          => $distance,
    'delivery_fee'      => $delivery_fee,
    'checkout'          => $checkout,
    'now'               => date('Y-m-d'),
    'now_time'          => '',
    'minimum_order'     => $minimum_order,
    'merchant_minimum_order_pickup' => $merchant_minimum_order_pickup,
    
    'booking_enabled'   => $booking_enabled,
    'photo_enabled'     => $photo_enabled,
    'theme_info_tab'    => $theme_info_tab,
) ); 
 ?>
