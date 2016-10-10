<!DOCTYPE html>
<html >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo Widgets::quickImagesPath(); ?>favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo Widgets::quickImagesPath(); ?>apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo Widgets::quickImagesPath(); ?>apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo Widgets::quickImagesPath(); ?>apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo Widgets::quickImagesPath(); ?>apple-touch-icon-144x144-precomposed.png">
  
  
  
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo CHtml::encode($this->pageTitle); ?>
    </title>
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">

    <script src="<?php echo Widgets::driverScriptPath(); ?>jquery.min.js">
    </script>


    <script src="<?php echo Widgets::driverScriptPath(); ?>bootstrap.min.js"></script>
  
  
    <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>doordash-common.min.css">
    <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>font-awesome.min.css">
    <link href="<?php echo Widgets::driverStylesPath(); ?>base.css" rel="stylesheet" media="screen">
    <script src="<?php echo Widgets::driverScriptPath(); ?>utils.js"></script>
  
    <link href="<?php echo Widgets::driverStylesPath(); ?>apply.css" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>bootstrapValidator.min.css">
    <script type="text/javascript" src="<?php echo Widgets::driverScriptPath(); ?>bootstrapValidator.min.js"></script>



</head>

<body>
  

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <h1 class="doordash-logo">
        <a href="#">QuickFood</a>
      </h1>
    </div>

    <div class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
      
        <li><a href="#">Login</a></li>
      
      </ul>
    </div>
  </div>
</nav>

  

   
    <!--MAIN CONTENT-->
<?php echo $content;?>
    
    
    

    
<script>
  $("#merchant-apply-form").bootstrapValidator()
</script>






    <?php $this->renderPartial('/store/partner/_footer', [] ); ?>   

  




</body></html>