<!-- SubHeader =============================================== -->
<!--          data-image-src="<?php //echo Widgets::quickImagesPath(); ?>sub_header_short.jpg"   -->
<section class="parallax-window" id="short" data-parallax="scroll" 
         data-image-src="<?php echo assetsURL()."/images/banner-2.jpg"?>" 
         data-natural-width="1400" 
         data-natural-height="350">
    <div id="subheader">
	<div id="sub_content">
    	<h1>
            <?php echo $total . " " . t("results"); ?>
        </h1>
        <div>
            <i class="icon_pin"></i> 
            <?php echo $search_address; ?>
        </div>
    </div><!-- End sub_content -->
</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->