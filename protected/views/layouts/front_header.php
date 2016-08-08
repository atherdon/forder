<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
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
    
    <!-- GOOGLE WEB FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <!-- BASE CSS -->
    <link href="<?php echo Widgets::quickStylesPath(); ?>base.css" rel="stylesheet">
    
    <!-- Modernizr -->
    <script src="<?php echo Widgets::quickStylesPath(); ?>modernizr.js"></script> 

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <?php 
    /*add the analytic codes */
    Widgets::analyticsCode();
    ?>
</head>

<body>