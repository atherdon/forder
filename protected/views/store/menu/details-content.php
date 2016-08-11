<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->
                
                
<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">

        <div class="col-md-4">
            <p>
                <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
            </p>
               
            <!--OPENING HOURS-->
	    <?php if ($theme_hours_tab==""):?>
	    <li>	       	     
	    <?php
	    $this->renderPartial('/store/menu/merchant-hours',array(
	      'merchant_id'=>$merchant_id
	    )); ?>           
	    </li>
	    <?php endif;?>
            
	    <!--END OPENING HOURS-->
             
            <div class="box_style_2 hidden-xs" id="help">
                <i class="icon_lifesaver"></i>
                <h4>
                    Need <span>Help?</span>
                </h4>
                <a href="tel://<?php echo $phone ?>" class="phone">
                    
                    <?php FunctionsV3::format_telephone( $phone ); ?>
                    <!--+45 423 445 99-->
                </a>
                <small>
                    Monday to Friday 9.00am - 7.30pm
                </small>
            </div>
        </div>

    <div class="col-md-8">
            <div class="box_style_2">
                    <h2 class="inner">Description</h2>

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
                    <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                    Lorem ipsum dolor sit amet </h3>
                    <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                         consectetur adipisicing elit
                    </p>
                    <p class="sp-layer sp-black sp-padding" data-horizontal="40" 
                       data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco
                         laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <div class="sp-slide">
                    <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
                    data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_medium.jpg" 
                    data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_small.jpg" 
                    data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_medium.jpg" 
                    data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_large.jpg" 
                    data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/3_large.jpg">
                    <p class="sp-layer sp-white sp-padding" data-position="centerCenter" 
                       data-vertical="-50" data-show-transition="right" data-show-delay="500">
                         Lorem ipsum dolor sit amet
                    </p>
                    <p class="sp-layer sp-black sp-padding" data-position="centerCenter" 
                       data-vertical="50" data-show-transition="left" data-show-delay="700">
                         consectetur adipisicing elit
                    </p>
                </div>

                <div class="sp-slide">
                    <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
                    data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_medium.jpg" 
                    data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_small.jpg" 
                    data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_medium.jpg" 
                    data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_large.jpg" 
                    data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/4_large.jpg">
                    <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" 
                       data-vertical="0" data-width="100%" data-show-transition="up">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <div class="sp-slide">
                    <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
                    data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_medium.jpg" 
                    data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_small.jpg" 
                    data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_medium.jpg" 
                    data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_large.jpg" 
                    data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/5_large.jpg">
                    <p class="sp-layer sp-white sp-padding" data-vertical="5%" 
                       data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <div class="sp-slide">
                    <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
                    data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_medium.jpg" 
                    data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_small.jpg" 
                    data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_medium.jpg" 
                    data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_large.jpg" 
                    data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/6_large.jpg">
                    <p class="sp-layer sp-white sp-padding" data-horizontal="10" 
                       data-vertical="10" data-width="300">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

                <div class="sp-slide">
                    <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
                    data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_medium.jpg" 
                    data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_small.jpg" 
                    data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_medium.jpg" 
                    data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_large.jpg" 
                    data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/7_large.jpg">
                    <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>

               <div class="sp-slide">
                    <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
                    data-src="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_medium.jpg" 
                    data-small="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_small.jpg" 
                    data-medium="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_medium.jpg" 
                    data-large="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_large.jpg" 
                    data-retina="<?php echo Widgets::quickImagesPath(); ?>slider_single_restaurant/8_large.jpg">
                    <p class="sp-layer sp-black sp-padding" data-horizontal="50" 
                       data-vertical="50" data-show-transition="down" data-show-delay="500">
                         Lorem ipsum dolor sit amet
                    </p>
                    <p class="sp-layer sp-white sp-padding" data-horizontal="50" 
                       data-vertical="100" data-show-transition="up" data-show-delay="500">
                         consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
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
        <h3>About us</h3>
                            <p>
                                    Lorem ipsum dolor sit amet, ius sonet meliore partiendo cu. 
                                    Nobis laudem mediocrem cum et. Debitis nonumes similique te eam, 
                                    blandit eligendi principes sea no. Cu eum quidam expetendis.
                            </p>
                            <p class="add_bottom_30">
                                    Lorem ipsum dolor sit amet, ex has recusabo adipiscing, 
                                    aliquip alienum at vis, eos id qualisque quaerendum. Soleat habemus duo no,
                                    te quo dicam everti, sale ullum movet per ea. Cu cum laudem quaeque, 
                                    agam decore nullam ei vis. Nec ad tota etiam eirmod. Harum debitis detraxit ut vel, eu vel option oporteat.
                            </p>
                            <div id="summary_review">
                                    <div id="general_rating">
                                            11 Reviews
                                            <div class="rating">
                                                    <i class="icon_star voted"></i>
                                                    <i class="icon_star voted"></i>
                                                    <i class="icon_star voted"></i>
                                                    <i class="icon_star voted"></i>
                                                    <i class="icon_star"></i>
                                            </div>
                                    </div>

                                    <div class="row" id="rating_summary">
                                            <div class="col-md-6">
                                                    <ul>
                                                            <li>Food Quality
                                                            <div class="rating">
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star"></i>
                                                                    <i class="icon_star"></i>
                                                            </div>
                                                            </li>
                                                            <li>Price
                                                            <div class="rating">
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star"></i>
                                                            </div>
                                                            </li>
                                                    </ul>
                                            </div>
                                            <div class="col-md-6">
                                                    <ul>
                                                            <li>Punctuality
                                                            <div class="rating">
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star"></i>
                                                                    <i class="icon_star"></i>
                                                                    <i class="icon_star"></i>
                                                            </div>
                                                            </li>
                                                            <li>Courtesy
                                                            <div class="rating">
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star voted"></i>
                                                                    <i class="icon_star"></i>
                                                            </div>
                                                            </li>
                                                    </ul>
                                            </div>
                                    </div><!-- End row -->
                                    <hr class="styled">
                                    <a href="#" class="btn_1 add_bottom_15" data-toggle="modal" data-target="#myReview">Leave a review</a>
                            </div><!-- End summary_review -->

                            <div class="review_strip_single">
                                    <img src="<?php echo Widgets::quickImagesPath(); ?>avatar1.jpg" alt="" class="img-circle">
                                    <small> - 10 March 2015 -</small>
                                    <h4>Jhon Doe</h4>
                                    <p>
                                             "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                             Sed a lorem quis neque interdum consequat ut sed sem. 
                                             Duis quis tempor nunc. Interdum et malesuada fames ac 
                                             ante ipsum primis in faucibus."
                                    </p>
                                    <div class="row">
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                    </div>
                                                     Food Quality
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                    </div>
                                                     Price
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                    </div>
                                                     Punctuality
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                    </div>
                                                     Courtesy
                                            </div>
                                    </div><!-- End row -->
                            </div><!-- End review strip -->

                            <div class="review_strip_single">
                                    <img src="<?php echo Widgets::quickImagesPath(); ?>avatar3.jpg" alt="" class="img-circle">
                                    <small> - 25 March 2015 -</small>
                                    <h4>Markus Schulz</h4>
                                    <p>
                                             "At sed dico invenire facilisis, sed option sapientem 
                                             iudicabit ad, sea idque doming vituperatoribus at. 
                                             Duo ut inani tantas scaevola. Commodo oblique at cum.
                                             Duo id vide delectus. Vel et doctus laoreet minimum, ei feugait pertinacia usu.
                                    </p>
                                    <div class="row">
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                    </div>
                                                     Food Quality
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                    </div>
                                                     Price
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                    </div>
                                                     Punctuality
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                    </div>
                                                     Courtesy
                                            </div>
                                    </div><!-- End row -->
                            </div><!-- End review strip -->

                            <div class="review_strip_single last">
                                    <img src="<?php echo Widgets::quickImagesPath(); ?>avatar2.jpg" alt="" class="img-circle">
                                    <small> - 10 April 2015 -</small>
                                    <h4>Frank Cooper</h4>
                                    <p>
                                             "Ne mea congue facilis eligendi, possit utamur sensibus
                                             id qui, mel tollit euismod alienum eu. 
                                             Ad tollit lucilius praesent per, ex probo utroque 
                                             placerat eos. Tale verear efficiendi et cum, meis 
                                             timeam vix et, et duis debet nostro mel.
                                             Aeterno labitur per no, id nec tantas nemore. An minim molestie per, mei sumo vulputate cu."
                                    </p>
                                    <div class="row">
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                    </div>
                                                     Food Quality
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                    </div>
                                                     Price
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                    </div>
                                                     Punctuality
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="rating">
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star voted"></i>
                                                            <i class="icon_star"></i>
                                                            <i class="icon_star"></i>
                                                    </div>
                                                     Courtesy
                                            </div>
                                    </div><!-- End row -->
                            </div><!-- End review strip -->

                    </div><!-- End box_style_1 -->
            </div>
    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->                               