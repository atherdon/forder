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