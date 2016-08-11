<!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo Widgets::quickImagesPath(); ?>sub_header_2.jpg" data-natural-width="1400" data-natural-height="470">
    <div id="subheader">
	<div id="sub_content">
    	<div id="thumb">
            <img src="<?php echo $merchant_logo;?>" alt=""></div>
                     <div class="rating">
                         <i class="icon_star voted"></i>
                         <i class="icon_star voted"></i>
                         <i class="icon_star voted"></i>
                         <i class="icon_star voted"></i>
                         <i class="icon_star"></i>
                         ( <small>
                             <a href="#0">98 reviews</a>
                         </small> )
                     </div>
                    <h1>
                        <?php echo clearString($restaurant_name)?>
                    </h1>
                    <div>
                        <em>
                            Mexican / American
                        </em>
                    </div>
                    <div>
                        <i class="icon_pin"></i>
                        135 Newtownards Road, Belfast, BT4 1AB - 
                        <strong>Delivery charge:</strong>
                        $10, free over $15.
                    </div>
    </div><!-- End sub_content -->
</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<div id="position">
    <div class="container">
        <ul>
            <li>
                <a href="<?php echo Yii::app()->getHomeUrl(); ?>">
                    Home
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createUrl('/store/browse' )?>">
                    Restaurant List</a>
            </li>
            <li>
                <?php echo clearString($restaurant_name) ?>
            </li>
        </ul>
    </div>
</div><!-- Position -->

    


<?php if ( 0 ) { ?>
<div class="mobile-banner-wrap relative">
 <div class="layer"></div>
 <img class="mobile-banner" src="<?php echo empty($background)?assetsURL()."/images/b-2-mobile.jpg":uploadURL()."/$background"; ?>">
</div>

<div id="parallax-wrap" class="parallax-search parallax-menu" 
data-parallax="scroll" data-position="top" data-bleed="10" 
data-image-src="<?php echo empty($background)?assetsURL()."/images/b-2.jpg":uploadURL()."/$background"; ?>">

<div class="search-wraps center menu-header">

      <img class="logo-medium bottom15" src="<?php echo $merchant_logo;?>">
      
	  <div class="mytable">
	     <div class="mycol">
	        <div class="rating-stars" data-score="<?php echo $ratings['ratings']?>"></div>   
	     </div>
	     <div class="mycol">
	        <p class="small">
	        <a href="javascript:;"class="goto-reviews-tab">
	        <?php echo $ratings['votes']." ".t("Reviews")?>
	        </a>
	        </p>
	     </div>	        
	     <div class="mycol">
	        <?php echo FunctionsV3::merchantOpenTag($merchant_id)?>             
	     </div>
	     <div class="mycol">
	        <p class="small"><?php echo t("Minimum Order").": ".FunctionsV3::prettyPrice($minimum_order)?></p>
	     </div>
	   </div> <!--mytable-->

	<h1><?php echo clearString($restaurant_name)?></h1>
	<p><i class="fa fa-map-marker"></i> <?php echo $merchant_address?></p>
	<p class="small"><?php echo FunctionsV3::displayCuisine($cuisine);?></p>
	<p><?php echo FunctionsV3::getFreeDeliveryTag($merchant_id)?></p>
	
	<?php if ( getOption($merchant_id,'merchant_show_time')=="yes"):?>
	<p class="small">
	<?php echo t("Merchant Current Date/Time").": ".
	Yii::app()->functions->translateDate(date('F d l')."@".timeFormat(date('c'),true));?>
	</p>
	<?php endif;?>
	
	<?php if (!empty($merchant_website)):?>
	<p class="small">
	<?php echo t("Website").": "?>
	<a target="_blank" href="<?php echo FunctionsV3::fixedLink($merchant_website)?>">
	  <?php echo $merchant_website;?>
	</a>
	</p>
	<?php endif;?>
			
</div> <!--search-wraps-->

</div> <!--parallax-container-->

<?php } ?>