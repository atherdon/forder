<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  
  
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

  <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>bootstrap.min.css">

  <script src="<?php echo Widgets::driverScriptPath(); ?>jquery.min.js"></script>
  
  <script src="<?php echo Widgets::driverScriptPath(); ?>underscore-min.js"></script>
  <script src="<?php echo Widgets::driverScriptPath(); ?>bootstrap.min.js"></script>
  


  
  <script src="<?php echo Widgets::driverScriptPath(); ?>utils.js"></script>

  <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>bootstrapValidator.min.css">
  <script type="text/javascript" src="<?php echo Widgets::driverScriptPath(); ?>bootstrapValidator.min.js"></script>

  <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>doordash-common.min.css">
  <link rel="stylesheet" href="<?php echo Widgets::driverStylesPath(); ?>font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Widgets::driverStylesPath(); ?>base.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Widgets::driverStylesPath(); ?>apply-driver.css">

</head>

<body id="driver-apply-body">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <h1 class="doordash-logo">
        <a href="#">doordash</a>
      </h1>
    </div>

    <div class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
      
        <li>
            <a href="#">Login</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>

    
   
    <!--MAIN CONTENT-->
<?php echo $content;?>

    

    

  


  

  <footer>
  <div class="container">
    <div class="footer-nav footer-link-grey footer">
      <a href="#">About</a> •
      <a href="#">Blog</a> •

      <a href="#">Jobs</a> •
      <a href="#">Terms</a> •
      <a href="#">Privacy</a> •
      <a href="#">Delivery Locations</a> •
      <a href="#">Help &amp; Support</a> •
      <a href="#">Become a Merchant</a> •
      <a href="#">Become a Dasher</a>
    </div>

    <div class="footer-social">
      <a href="#" target="_blank">
        <span class="fa-stack social-icon">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <a href="#" target="_blank">
        <span class="fa-stack social-icon">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
        </span>
      </a>
      <a href="#" target="_blank">
        <span class="fa-stack social-icon">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
        </span>
      </a>
    </div>

    <div class="footer-copyright">© 2016 DoorDash</div>
  </div>
</footer>

  
  
  

</body>
</html>
