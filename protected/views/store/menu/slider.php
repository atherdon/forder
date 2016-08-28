 <!--PHOTOS-->
<?php if ($photo_enabled):?>

<?php 



$gallery = Yii::app()->functions->getOption("merchant_gallery",$merchant_id);
$gallery= !empty( $gallery ) ? json_decode( $gallery ) : false ;


//var_dump( $gallery );

//$this->renderPartial('/front/merchant-photos',array(
//  'merchant_id'=>$merchant_id,
//  'gallery'=>$gallery
//)); 





?>        
 
 
 
 <div class="box-grey rounded " style="margin-top:0;">

 <?php if (is_array($gallery) && count($gallery)>=1):?>
   <div id="photos" class="merchant-gallery-wrap">
   <?php foreach ($gallery as $val):?>
    <a href="<?php echo uploadURL()."/".$val?>" title="">
	  <img src="<?php echo uploadURL()."/".$val?>">
    </a>
	<?php endforeach;?>	  
	</div>
 <?php else :?>
  <p class="text-danger"><?php echo t("gallery not available")?></p>
 <?php endif;?>
 
</div> <!--box-grey-->
 
 

<?php endif;?>
<!--END PHOTOS-->            

<div id="Img_carousel" class="slider-pro">
    <div class="sp-slides">

        <div class="sp-slide">
            <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
            data-src   = "<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/1_medium.jpg" 
            data-small = "<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/1_small.jpg" 
            data-medium= "<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/1_medium.jpg" 
            data-large = "<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/1_large.jpg" 
            data-retina= "<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/1_large.jpg">
        </div>
        
        <div class="sp-slide">
            <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
            data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/2_medium.jpg" 
            data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/2_small.jpg" 
            data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/2_medium.jpg" 
            data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/2_large.jpg" 
            data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/2_large.jpg">

<!--            <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                Lorem ipsum dolor sit amet 
            </h3>-->

<!--            <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                 consectetur adipisicing elit
            </p>-->

<!--            <p class="sp-layer sp-black sp-padding" data-horizontal="40" 
               data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco
                 laboris nisi ut aliquip ex ea commodo consequat.
            </p>-->

        </div>

        <div class="sp-slide">
            <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
            data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_medium.jpg" 
            data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_small.jpg" 
            data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_medium.jpg" 
            data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_large.jpg" 
            data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_large.jpg">

<!--            <p class="sp-layer sp-white sp-padding" data-position="centerCenter" 
               data-vertical="-50" data-show-transition="right" data-show-delay="500">
                 Lorem ipsum dolor sit amet
            </p>-->

<!--            <p class="sp-layer sp-black sp-padding" data-position="centerCenter" 
               data-vertical="50" data-show-transition="left" data-show-delay="700">
                 consectetur adipisicing elit
            </p>-->

        </div>

        <div class="sp-slide">
            <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
            data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_medium.jpg" 
            data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_small.jpg" 
            data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_medium.jpg" 
            data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_large.jpg" 
            data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_large.jpg">

<!--            <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" 
               data-vertical="0" data-width="100%" data-show-transition="up">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>-->

        </div>

        <div class="sp-slide">
            <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
            data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_medium.jpg" 
            data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_small.jpg" 
            data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_medium.jpg" 
            data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_large.jpg" 
            data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_large.jpg">

<!--            <p class="sp-layer sp-white sp-padding" data-vertical="5%" 
               data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>-->

        </div>

        <div class="sp-slide">
            <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
            data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_medium.jpg" 
            data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_small.jpg" 
            data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_medium.jpg" 
            data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_large.jpg" 
            data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_large.jpg">

<!--            <p class="sp-layer sp-white sp-padding" data-horizontal="10" 
               data-vertical="10" data-width="300">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>-->

        </div>

        <div class="sp-slide">
            <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
            data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_medium.jpg" 
            data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_small.jpg" 
            data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_medium.jpg" 
            data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_large.jpg" 
            data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_large.jpg">

<!--            <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" 
               data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>-->

        </div>

       <div class="sp-slide">
            <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
            data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_medium.jpg" 
            data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_small.jpg" 
            data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_medium.jpg" 
            data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_large.jpg" 
            data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_large.jpg">

<!--            <p class="sp-layer sp-black sp-padding" data-horizontal="50" 
               data-vertical="50" data-show-transition="down" data-show-delay="500">
                 Lorem ipsum dolor sit amet
            </p>-->

<!--            <p class="sp-layer sp-white sp-padding" data-horizontal="50" 
               data-vertical="100" data-show-transition="up" data-show-delay="500">
                 consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>-->

        </div>

        <div class="sp-slide">
            <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
            data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/9_medium.jpg" 
            data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/9_small.jpg" 
            data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/9_medium.jpg" 
            data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/9_large.jpg" 
            data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/9_large.jpg">
        </div>
    </div>
    
    <div class="sp-thumbnails">
        <img alt="" class="sp-thumbnail" src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/1_medium.jpg">
        <img alt="" class="sp-thumbnail" src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/2_medium.jpg">
        <img alt="" class="sp-thumbnail" src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_medium.jpg">
        <img alt="" class="sp-thumbnail" src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_medium.jpg">
        <img alt="" class="sp-thumbnail" src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_medium.jpg">
        <img alt="" class="sp-thumbnail" src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_medium.jpg">
        <img alt="" class="sp-thumbnail" src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_medium.jpg">
        <img alt="" class="sp-thumbnail" src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_medium.jpg">
        <img alt="" class="sp-thumbnail" src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/9_medium.jpg">
    </div>
    
</div>
            