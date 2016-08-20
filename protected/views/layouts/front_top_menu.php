<!-- Header ================================================== -->
<header>
<div class="container-fluid">
    <div class="row">
        <div class="col--md-4 col-sm-4 col-xs-4">
            
            <?php if ( $theme_hide_logo <> 2 ) : ?>
            
                <a href="<?php echo Yii::app()->createUrl('/store')?>" id="logo">
                    <img src="<?php echo Widgets::quickImagesPath(); ?>logo.png" <?php //echo FunctionsV3::getDesktopLogo();?>
                         width="190" height="23" alt="" data-retina="true" class="hidden-xs">
                    <img src="<?php echo Widgets::quickImagesPath(); ?>logo_mobile.png" <?php //echo FunctionsV3::getMobileLogo();?>
                         width="59" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
                </a>        
            
            <?php endif;?>
            
<!--            <a href="index.html" id="logo">
            <img src="img/logo.png" width="190" height="23" alt="" data-retina="true" class="hidden-xs">
            <img src="img/logo_mobile.png" width="59" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm">
            </a>-->
            
        </div>
        <nav class="col--md-8 col-sm-8 col-xs-8">
        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);">
            <span>
                Menu mobile
            </span>
        </a>
        <div class="main-menu">
            
            <div id="header_menu">
                <img src="<?php echo Widgets::quickImagesPath(); ?>logo.png" 
                     width="190" 
                     height="23" alt="" data-retina="true">
            </div>

            <a href="#" class="open_close" id="close_in">
                <i class="icon_close"></i>
            </a>

            <?php $this->widget('zii.widgets.CMenu', FunctionsV3::getMenu() );?> 


        </div><!-- End main-menu -->
        </nav>
    </div><!-- End row -->
</div><!-- End container -->
</header>
    <!-- End Header =============================================== -->
    
<?php if ( 0 ) { ?>

<div class="top-menu-wrapper <?php echo "top-".$action;?>">

<div class="container border" >
  <div class="col-md-3 col-xs-3 border col-a">
    <?php if ( $theme_hide_logo<>2):?>
    <a href="<?php echo Yii::app()->createUrl('/store')?>">
     <img src="<?php echo FunctionsV3::getDesktopLogo();?>" class="logo logo-desktop">
     <img src="<?php echo FunctionsV3::getMobileLogo();?>" class="logo logo-mobile">
    </a>
    <?php endif;?>
  </div>
  
    
    
  <div class="col-xs-1 menu-nav-mobile border relative">
     <a href="#"><i class="ion-android-menu"></i></a>
  </div> <!--menu-nav-mobile-->
  
  <?php if ( Yii::app()->controller->action->id =="menu"):?>
  <div class="col-xs-1 cart-mobile-handle border relative">
     <a href="javascript:;"><i class="ion-ios-cart"></i></a>
  </div> <!--cart-mobile-handle-->
  <?php endif;?>
  
  
  
  
  <div class="col-md-9 border col-b">
    <?php $this->widget('zii.widgets.CMenu', FunctionsV3::getMenu() );?> 
    <div class="clear"></div>
  </div>
  
  
  
</div> <!--container-->

</div> <!--END top-menu-->

<div class="menu-top-menu">
    <?php $this->widget('zii.widgets.CMenu', FunctionsV3::getMenu('mobile-menu') );?> 
    <div class="clear"></div>
</div> <!--menu-top-menu-->

<?php } ?>