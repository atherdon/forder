<?php
$kr_search_adrress = FunctionsV3::getSessionAddress();

$home_search_text=Yii::app()->functions->getOptionAdmin('home_search_text');
if (empty($home_search_text)){
	$home_search_text=Yii::t("default","Find restaurants near you");
}

$home_search_subtext=Yii::app()->functions->getOptionAdmin('home_search_subtext');
if (empty($home_search_subtext)){
	$home_search_subtext=Yii::t("default","Order Delivery Food Online From Local Restaurants");
}

$home_search_mode=Yii::app()->functions->getOptionAdmin('home_search_mode');
$placholder_search=Yii::t("default","Street Address,City,State");
if ( $home_search_mode=="postcode" ){
	$placholder_search=Yii::t("default","Enter your postcode");
}
$placholder_search=Yii::t("default",$placholder_search);
?>



<?php 
        $this->renderPartial('/store/home/_header', array(
//                  'home_search_text'    => $home_search_text,
//                  'kr_search_adrress'   => $kr_search_adrress,
//                  'placholder_search'   => $placholder_search,
//                  'home_search_subtext' => $home_search_subtext
        ));
?>



<?php if ( $theme_hide_how_works <> 2 ):?>


<!-- How it works ================================================== -->
<div class="container margin_60">
        
    <div class="main_title">
       <h2 class="nomargin_top" style="padding-top:0">How it works</h2>
       <p>
           Cum doctus civibus efficiantur in imperdiet deterruisset.
       </p>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="box_home" id="one">
                <span>1</span>
                <h3>Search by address</h3>
                <p>
                    Find all restaurants available in your zone.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_home" id="two">
                <span>2</span>
                <h3>Choose a restaurant</h3>
                <p>
                    We have more than 1000s of menus online.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_home" id="three">
                <span>3</span>
                <h3>Pay by card or cash</h3>
                <p>
                    It's quick, easy and totally secure.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box_home" id="four">
                <span>4</span>
                <h3>Delivery or takeaway</h3>
                <p>
                    You are lazy? Are you backing home?
                </p>
            </div>
        </div>
    </div><!-- End row -->
        
    <div id="delivery_time" class="hidden-xs">
        <strong><span>2</span><span>5</span></strong>
        <h4>The minutes that usually takes to deliver!</h4>
    </div>
</div><!-- End container -->


<?php endif;?>







<!--FEATURED RESTAURANT SECIONS-->
<?php  if ( $disabled_featured_merchant == "" ):?>
<?php  if ( getOptionA('disabled_featured_merchant') != "yes" ):?>
<?php  if ( $res = Yii::app()->functions->getFeatureMerchant2() ):?>


<div class="white_bg">
    <div class="container margin_60">
        
        <div class="main_title">
           <h2 class="nomargin_top">Choose from Most Popular </h2>
               <?php //echo t("Featured Restaurants")?>
            <p>
                Cum doctus civibus efficiantur in imperdiet deterruisset. 
                    <?php //echo t("Featured Restaurants")?>
            </p>
        </div>
        
        <div class="row">
 
            <?php 
            
            
            $pieces = array_chunk( $res, ceil(count( $res ) / 2));
            
            if( isset( $pieces[1] ) ){
                $use_second_row = 1;
            } else {
                $use_second_row = 0;
            }
            
            ?>
            
             <div class="col-md-6">
                        
                <?php
                    foreach ( $pieces[0] as $key => $val){ //dump($val);
                        
                        
                        $address  = $val['street'] . ", " . $val['city'];
                        $address .= ", " . $val['state'] . ", " . $val['post_code'];
        
                        ?>
                            
  
                            <?php $this->renderPartial('/store/home/_item-single-list', [

                                   'merchant_id'     => $val['merchant_id'] ,
                                   'restaurant_name' => $val['restaurant_name'],
                                   'cuisine'         => $val['cuisine'],
                                   'address'         => $address,
                                   'service'         => $val['service'],
                                
                                    'slug'            => $val['restaurant_slug']

                            ]); ?>
                            
                        <?php
                        
                    }
                ?>
            </div>   
            
            <div class="col-md-6">
                <?php 
                
                    if( $use_second_row ){
                
                    foreach ( $pieces[1] as $key => $val){ 

                        $address  = $val['street'] . ", " . $val['city'];
                        $address .= ", " . $val['state'] . ", " . $val['post_code'];
        
                        $ratings  = Yii::app()->functions->getRatings( $val['merchant_id'] );

                        ?>                            
                             
                            <?php $this->renderPartial('/store/home/_item-single-list', [

                                    'merchant_id'     => $val['merchant_id'] ,
                                    'restaurant_name' => $val['restaurant_name'],
                                    'cuisine'         => $val['cuisine'],
                                    'address'         => $address,
                                    'service'         => $val['service'],

                                    'slug'            => $val['restaurant_slug']

                             ]); ?>
                                
                                    <?php if ( 0 ) { ?>
                                <a href="<?php echo Yii::app()->createUrl('/store/menu/merchant/'. trim($val['restaurant_slug']) )?>" class="strip_list">
                               
                                    <div class="desc">
                                        <div class="thumb_strip">
                                            <img src="<?php echo FunctionsV3::getMerchantLogo($val['merchant_id']);?>" alt="">
                                        </div>
                                        
                                        
                                        
                                        <?php echo Widgets::ratingHTML( $ratings, false, true, $val['merchant_id'] ); ?>
                                        
                                        
                                        

                                        <h3>
                                            <?php echo clearString($val['restaurant_name'])?>
                                        </h3>
                                        <div class="type">
                                            <?php echo FunctionsV3::displayCuisine2($val['cuisine']);?>
                                        </div>
                                        <div class="location">
                                            
                                            <?php echo $address; ?>
                                            
                                            <?php echo FunctionsV3::merchantOpenTag2($val['merchant_id'])?> 
                                        </div>
                                        <?php echo FunctionsV3::displayServicesList2($val['service'])?>

                                    </div><!-- End desc-->
                                     </a><!-- End strip_list-->
                                    <?php } ?>

                           
                            
                            
                    <?php

                    } 
                    
                    }
                    
                ?>
            </div>
            

        </div><!-- End row -->   
        
        </div><!-- End container -->
</div><!-- End white_bg -->
<?php endif;?>
<?php endif;?>
<?php endif;?>
<!--END FEATURED RESTAURANT SECIONS-->




<div class="high_light">
    <div class="container">
        <h3>Choose from over 2,000 Restaurants</h3>
        <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
        <a href="<?php echo Yii::app()->createUrl('/store/browse/' )?>">View all Restaurants</a>
    </div><!-- End container -->
</div><!-- End hight_light -->
            


<section class="parallax-window" data-parallax="scroll" 
         data-image-src="<?php echo Widgets::quickImagesPath(); ?>bg_office.jpg" 
         data-natural-width="1200" data-natural-height="600">
    <div class="parallax-content">
        <div class="sub_content">
            <i class="icon_mug"></i>
            <h3>We also deliver to your office</h3>
            <p>
                Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
            </p>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->





<?php if ($theme_show_app==2):?>
<!--MOBILE APP SECTION-->
<div id="mobile-app-sections" class="container">
<div class="container-medium">
  <div class="row">
     <div class="col-xs-5 into-row border app-image-wrap">
       <img class="app-phone" src="<?php echo assetsURL()."/images/getapp-2.jpg"?>">
     </div> <!--col-->
     <div class="col-xs-7 into-row border">
       <h2><?php echo getOptionA('website_title')." ".t("in your mobile")?>! </h2>
       <h3 class="green-text"><?php echo t("Get our app, it's the fastest way to order food on the go")?>.</h3>
       
       <div class="row border" id="getapp-wrap">
         <div class="col-xs-4 border">
           <a href="<?php echo $theme_app_ios?>" target="_blank">
           <img class="get-app" src="<?php echo assetsURL()."/images/get-app-store.png"?>">
           </a>
         </div>
         <div class="col-xs-4 border">
           <a href="<?php echo $theme_app_android?>" target="_blank">
             <img class="get-app" src="<?php echo assetsURL()."/images/get-google-play.png"?>">
           </a>
         </div>
       </div> <!--row-->
       
     </div> <!--col-->
  </div> <!--row-->
  </div> <!--container-medium-->
  
  <div class="mytable border" id="getapp-wrap2">
     <div class="mycol border">
           <a href="<?php echo $theme_app_ios?>" target="_blank">
           <img class="get-app" src="<?php echo assetsURL()."/images/get-app-store.png"?>">
           </a>
     </div> <!--col-->
     <div class="mycol border">
          <a href="<?php echo $theme_app_android?>" target="_blank">
             <img class="get-app" src="<?php echo assetsURL()."/images/get-google-play.png"?>">
           </a>
     </div> <!--col-->
  </div> <!--mytable-->
  
  
</div> <!--container-->
<!--END MOBILE APP SECTION-->
<?php endif;?>