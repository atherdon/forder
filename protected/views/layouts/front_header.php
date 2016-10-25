<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php //@TODO: discuss SEO keywords ?>
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo Widgets::quickImagesPath(); ?>favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo Widgets::quickImagesPath(); ?>apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo Widgets::quickImagesPath(); ?>apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo Widgets::quickImagesPath(); ?>apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo Widgets::quickImagesPath(); ?>apple-touch-icon-144x144-precomposed.png">
    
    
    
    <?php //if ( 0 ) { ?>
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="<?php echo Widgets::quickStylesPath(); ?>base.css" rel="stylesheet">
    
    <link href="<?php echo Widgets::quickStylesPath(); ?>skins/square/grey.css" rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
    <link href="<?php echo Widgets::quickStylesPath(); ?>jquery.cookiebar.css" rel="stylesheet">
    <link href="<?php echo Widgets::quickStylesPath(); ?>slider-pro.min.css" rel="stylesheet">
    
    <link href="<?php echo Widgets::quickStylesPath(); ?>bootstrap-datepicker3.css" rel="stylesheet">
    <link href="<?php echo Widgets::quickStylesPath(); ?>jquery-timepicker.min.css" rel="stylesheet">
    
    <link href="<?php echo Widgets::quickStylesPath(); ?>jquery.bootstrap-touchspin.css" rel="stylesheet">
    
    <!--<link href="<?php echo Widgets::quickScriptPath(); ?>jquery-asSpinner/css/asSpinner.min.css" rel="stylesheet">-->
    
    
    
    
    <!-- Modernizr -->
    <script src="<?php echo Widgets::quickScriptPath(); ?>modernizr.js"></script> 
    <?php //} ?>
    
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
    var
        mapObject,
        markers = [],
        markersData = {
                'American': [
                {
                        name: 'Angus Steak House',
                        location_latitude: 48.873792, 
                        location_longitude: 2.295028,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'Angus Steak House',
                        type_point: 'American/Mexican',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                }
                ],
                'Chinese': [
                {
                        name: 'Golden Bowl',
                        location_latitude: 48.865633, 
                        location_longitude: 2.321236,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'Golden Bowl',
                        type_point: 'Chinese',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                },
                {
                        name: 'Oriental Chinese',
                        location_latitude: 48.854183,
                        location_longitude: 2.354808,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'Oriental Chinese',
                        type_point: 'American/Mexican',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                }
                ],
                'Fish': [
                {
                        name: 'Stevonia',
                        location_latitude: 48.863893, 
                        location_longitude: 2.342348,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'Stevonia',
                        type_point: 'Fish and chips',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                },
                {
                        name: 'SeaFood ',
                        location_latitude: 48.860642,
                        location_longitude: 2.352245,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'SeaFood',
                        type_point: 'Fish and chips',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                }
                ],
                'Mexican': [
                {
                        name: 'Tijuana Kitchen',
                        location_latitude: 48.858370, 
                        location_longitude: 2.294481,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'Tijuana Kitche',
                        type_point: 'Mexican',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                },
                {
                        name: 'Mexican Food',
                        location_latitude: 48.837273,
                        location_longitude: 2.335387,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'Mexican Food',
                        type_point: 'Mexican',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                }
                ],
                'Pizza': [
                {
                        name: 'O Sole mio',
                        location_latitude: 48.860819, 
                        location_longitude: 2.354507,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'O Sole mio',
                        type_point: 'Pizza/Italian',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                },
                {
                        name: 'Naples Pizza',
                        location_latitude: 48.853798,
                        location_longitude: 2.333328,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'Naples Pizza',
                        type_point: 'Pizza/Italian',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                }
                ],
                'Sushi': [
                {
                        name: 'Dragon Palace',
                        location_latitude: 48.862880, 
                        location_longitude: 2.287205,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'Dragon Palace',
                        type_point: 'Sushi/Chinese',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                },
                {
                        name: 'New Hong Kong',
                        location_latitude: 48.865784,
                        location_longitude: 2.307314,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'New Hong Kong',
                        type_point: 'Sushi/Chinese',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                }
                ],
                'Hamburger': [
                {
                        name: 'Route 66',
                        location_latitude: 48.852729, 
                        location_longitude: 2.350564,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'Route 66',
                        type_point: 'Hamburger/Hotdog',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                },
                {
                        name: 'Burger King',
                        location_latitude: 48.870587, 
                        location_longitude: 2.318943,
                        map_image_url: 'img/thumb_restaurant_map.png',
                        name_point: 'Burger King',
                        type_point: 'Hamburger/Hotdog',
                        description_point: '135 Newtownards Road, Belfast, BT4<br><strong>Opening time</strong>: 09am-10pm.',
                        url_point: 'detail_page.html'
                }
                ]

        };
    </script>
    
    <?php 
    /*add the analytic codes */
    Widgets::analyticsCode();
    ?>
</head>

<body  class=" <?php if ( !empty( Yii::app()->controller->action->id )) { echo Yii::app()->controller->action->id; } ?> ">
<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

 <?php //if (  Yii::app()->controller->action->id != 'error') { ?>

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave" id="status">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div> 
    <!--End Preload-->
    
 <?php //} 
// var_dump( $this->layout ); die();?>