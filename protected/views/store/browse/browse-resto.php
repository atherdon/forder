<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" 
         data-image-src="<?php echo Widgets::quickImagesPath(); ?>sub_header_short.jpg" 
         data-natural-width="1400" 
         data-natural-height="350">
    <div id="subheader">
	<div id="sub_content">
    	<h1>
            <?php echo t("Browse Restaurant"); ?>
        </h1>
        <div>
            <i class="icon_pin"></i> 
            <?php echo t("choose from your favorite restaurant"); ?>
            135 Newtownards Road, Belfast, BT4 1AB
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
                    Restaurant List
            </li>
        </ul>
    </div>
</div><!-- Position -->


<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->


<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">
        
        <?php $this->renderPartial('/store/browse/_sidebar', []); ?>
        
        <div class="col-md-9">
            
            <?php $this->renderPartial('/store/browse/_tools', []); ?>


            <?php $this->renderPartial('/store/browse/_items-list', [
                        'list' => $list
                  ]); 
            ?>
            

            
            <?php if( intval( $total ) <= 10 ) { ?>
            
            
            <a href="#0" class="load_more_bt wow fadeIn" 
               data-wow-delay="0.2s">
                Load more...
            </a>  
            
            <?php } ?>
            
            
            
        </div><!-- End col-md-9-->

    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->









<?php if ( 0 ) { ?>





<div class="sections section-grey2 section-browse" id="section-browse">
  
 <div class="container">

    <div class="tabs-wrapper">
      <ul id="tabs">
            <li class="<?php echo $tabs==1?"active":''?> noclick"  >
              <a href="<?php echo Yii::app()->createUrl('/store/browse')?>">
              <i class="ion-coffee"></i>
               <span><?php echo t("Restaurant List")?></span>
              </a>
            </li>
            <li class="<?php echo $tabs==2?"active":''?> noclick">
              <a href="<?php echo Yii::app()->createUrl('/store/browse/?tab=2')?>">
              <i class="ion-pizza"></i>
               <span><?php echo t("Newest")?></span>
              </a>
            </li>
            <li class="<?php echo $tabs==3?"active":''?> noclick" >
              <a href="<?php echo Yii::app()->createUrl('/store/browse/?tab=3')?>">
              <i class="ion-fork"></i>
                <span><?php echo t("Featured")?></span>
              </a>
            </li>
            <li class="full-maps nounderline">				  
              <a href="javascript:;" >
              <i class="ion-android-globe"></i>    
               <span><?php echo t("View Restaurant by map")?></span>	    
            </li>
        </a>
      </ul>		    
      
      <ul id="tab">
          <li class="<?php echo $tabs==1?"active":''?>" >            
            <?php
            if ( $tabs==1):
	            if (is_array($list['list']) && count($list['list'])>=1){
		            $this->renderPartial('/front/browse-list',array(
					   'list'=>$list,
					   'tabs'=>$tabs
					));
	            } else echo '<p class="text-danger">'.t("No restaurant found").'</p>';
            endif;
            ?>
          </li>
          <li class="<?php echo $tabs==2?"active":''?>" >
          <?php          
            if ( $tabs==2):
	            if (is_array($list['list']) && count($list['list'])>=1){
		            $this->renderPartial('/front/browse-list',array(
					   'list'=>$list,
					   'tabs'=>$tabs			   
					));
	            } else echo '<p class="text-danger">'.t("No restaurant found").'</p>';
            endif;
            ?>
          </li>
          <li class="<?php echo $tabs==3?"active":''?>" >
          
          <?php          
            if ( $tabs==3):
	            if (is_array($list['list']) && count($list['list'])>=1){
		            $this->renderPartial('/front/browse-list',array(
					   'list'=>$list,
					   'tabs'=>$tabs
					));
	            } else echo '<p class="text-danger">'.t("No restaurant found").'</p>';
            endif;
            ?>
          
          </li>
          
          <li>
            <div class="full-map-wrapper" >
                
               <div id="full-map"></div>
               
               <a href="javascript:;" class="view-full-map green-button">
                   <?php echo t("View in fullscreen")?>
               </a>
            </div> <!--full-map-->
          </li>          
      </ul>     
      
    </div> <!--tabs-wrapper-->
 
 </div><!-- container-->

</div> <!--sections-->

<?php } ?>