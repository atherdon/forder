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
            <span>Menu mobile</span>
        </a>
        <div class="main-menu">
            
            
            
            <div id="header_menu">
                <img src="<?php echo Widgets::quickImagesPath(); ?>logo.png" width="190" height="23" alt="" data-retina="true">
            </div>
            <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
            
            <?php $this->widget('zii.widgets.CMenu', FunctionsV3::getMenu() );?> 
            
<!--            <ul>
                <li class="submenu">
                <a href="javascript:void(0);" class="show-submenu">
                    Home<i class="icon-down-open-mini"></i>
                </a>
                <ul>
                    <li><a href="index.html">Home Video background</a></li>
                    <li><a href="index_2.html">Home Static image</a></li>
                    <li><a href="index_3.html">Home Text rotator</a></li>
                    <li><a href="index_8.html">Home Layer slider</a></li>
                    <li><a href="index_4.html">Home Cookie bar</a></li>
                    <li><a href="index_5.html">Home Popup</a></li>
                    <li><a href="index_6.html">Home Mobile synthetic</a></li>
                    <li><a href="index_7.html">Top Menu version 2</a></li>
                </ul>
                </li>
                <li><a href="list_page.html">Restaurants</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="faq.html">Faq</a></li>
                <li class="submenu">
                <a href="javascript:void(0);" class="show-submenu">Pages<i class="icon-down-open-mini"></i></a>
                <ul>
                    <li><a href="detail_page.html">Restaurant Menu</a></li>
                    <li><a href="cart.html">Order step 1</a></li>
                    <li><a href="cart_2.html">Order step 2</a></li>
                    <li><a href="cart_3.html">Order step 3</a></li>
                    <li><a href="detail_page_2.html">Restaurant detail page</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="grid_list.html">Grid list</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="coming_soon/index.html">Coming soon page</a></li>
                    <li><a href="shortcodes.html">Shortcodes</a></li>
                    <li><a href="icon_pack_1.html">Icon pack 1</a></li>
                    <li><a href="icon_pack_2.html">Icon pack 2</a></li>
                </ul>
                </li>
                <li><a href="#0" data-toggle="modal" data-target="#login_2">Login</a></li>
                
            </ul>-->
            
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