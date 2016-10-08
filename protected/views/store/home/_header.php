<!-- SubHeader =============================================== -->
<section class="header-video">
<div id="hero_video">
    <div id="sub_content">
        <h1>
            Order Takeaway or Delivery Food
        </h1>
        <p>
            Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
        </p>
        
        
        <?php $this->renderPartial('/store/home/search-form', array(
                      'home_search_text'    => $home_search_text,
                      'kr_search_adrress'   => $kr_search_adrress,
                      'placholder_search'   => $placholder_search,
                      'home_search_subtext' => $home_search_subtext,
                      'theme_search_merchant_name'     => getOptionA('theme_search_merchant_name'),
                      'theme_search_street_name'       => getOptionA('theme_search_street_name'),
                      'theme_search_cuisine'           => getOptionA('theme_search_cuisine'),
                      'theme_search_foodname'          => getOptionA('theme_search_foodname'),
                      'theme_search_merchant_address'  => getOptionA('theme_search_merchant_address'),

              ));        
        ?>

    </div><!-- End sub_content -->
</div>
    
<img src="<?php echo Widgets::quickImagesPath(); ?>video_fix.png" alt="" 
     class="header-video--media" 
     data-video-src="<?php echo Widgets::quickVideoPath(); ?>intro" 
     data-teaser-source="<?php echo Widgets::quickVideoPath(); ?>intro" 
     data-provider="Vimeo" 
     data-video-width="1920" data-video-height="960" />

<div id="count" class="hidden-xs">
    <ul>
        <li>
            <span class="number">
                2650
            </span> 
            Restaurant
        </li>
        <li>
            <span class="number">
                5350
            </span> 
            People Served
        </li>
        <li>
            <span class="number">
                12350
            </span> 
            Registered Users
        </li>
    </ul>
</div>
</section><!-- End Header video -->
<!-- End SubHeader ============================================ -->




<?php if ( 0 ) { ?>

<!-- SubHeader =============================================== -->
<section class="parallax-window" id="home" data-parallax="scroll" 
         data-image-src="<?php echo Widgets::quickImagesPath(); ?>sub_header_home.jpg" data-natural-width="1400" data-natural-height="550">
<div id="subheader">
    <div id="sub_content">
        
        <h1><?php //echo $home_search_text;?></h1>
        <p> <?php //echo $home_search_subtext;?></p>
        
        <h1>Order Takeaway or Delivery Food</h1>
        <p>
            Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
        </p>
        
        
        
        
<?php  if ( $home_search_mode == "address" || $home_search_mode == "") { 
    
            if ( $enabled_advance_search=="yes"){

                    $this->renderPartial('/front/quickfood/advanced_search', array(
                        
                      'home_search_text'    => $home_search_text,
                      'kr_search_adrress'   => $kr_search_adrress,
                      'placholder_search'   => $placholder_search,
                      'home_search_subtext' => $home_search_subtext,
                      'theme_search_merchant_name'     => getOptionA('theme_search_merchant_name'),
                      'theme_search_street_name'       => getOptionA('theme_search_street_name'),
                      'theme_search_cuisine'           => getOptionA('theme_search_cuisine'),
                      'theme_search_foodname'          => getOptionA('theme_search_foodname'),
                      'theme_search_merchant_address'  => getOptionA('theme_search_merchant_address'),
                    ));

            } else { 

                $this->renderPartial('/front/quickfood/single_search', array(
                  'home_search_text'    => $home_search_text,
                  'kr_search_adrress'   => $kr_search_adrress,
                  'placholder_search'   => $placholder_search,
                  'home_search_subtext' => $home_search_subtext
                ));

            }
        
        } else {
            
            $this->renderPartial('/front/quickfood/search_postcode',array(
                  'home_search_text'    => $home_search_text,
                  'placholder_search'   => $placholder_search,
                  'home_search_subtext' => t("Enter your post code")
            ));
            
        }
        
        
        
?>
        
        
        
        
        
        
        
        
    </div><!-- End sub_content -->
</div><!-- End subheader -->





<div id="count" class="hidden-xs">
    <ul>
        <li>
            <span class="number">2650</span> Restaurant
        </li>
        <li>
            <span class="number">5350</span> People Served
        </li>
        <li>
            <span class="number">12350</span> Registered Users
        </li>
    </ul>
</div>
</section><!-- End section -->
<!-- End SubHeader ============================================ -->



<?php } ?>
