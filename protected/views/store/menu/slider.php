 <!--PHOTOS-->
<?php if ( 0 ):?>
<?php //if ($photo_enabled):?>

<?php 



$gallery = Yii::app()->functions->getOption( "merchant_gallery", $merchant_id );
$gallery= !empty( $gallery ) ? json_decode( $gallery ) : false ;


//var_dump( $gallery );

//$this->renderPartial('/front/merchant-photos',array(
//  'merchant_id'=>$merchant_id,
//  'gallery'=>$gallery
//)); 





?>        
 
 
 
 <div class="box-grey rounded " style="margin-top:0;">

 <?php if (is_array($gallery) && count($gallery)>=1):?>
     
     
     <div id="Img_carousel" class="slider-pro">
        <div class="sp-slides">
   <!--<div id="photos" class="merchant-gallery-wrap">-->
   <?php foreach ($gallery as $val):?>
       
       
       
       
       
        <div class="sp-slide">
            <img alt="" class="sp-image" src="<?php echo Widgets::quickStylesPath(); ?>images/blank.gif" 
            data-src   = "<?php echo uploadURL()."/".$val?>" 
            data-small = "<?php echo uploadURL()."/".$val?>"
            data-medium= "<?php echo uploadURL()."/".$val?>"
            data-large = "<?php echo uploadURL()."/".$val?>"
            data-retina= "<?php echo uploadURL()."/".$val?>"
            >
        </div>
       
       
       
	<?php endforeach;?>	
       </div>
    
    <div class="sp-thumbnails">
        <?php foreach ($gallery as $val):?>
        
            <img alt="" class="sp-thumbnail" src="<?php echo uploadURL()."/".$val?>">
        
        <?php endforeach;?>
        
        
    </div>
    
</div>
       
       
       
       
	<!--</div>-->
     
     
     
 <?php else :?>
     
  <p class="text-danger"><?php echo t("gallery not available")?></p>
  
 <?php endif;?>
 
</div> <!--box-grey-->
 
 

<?php endif;?>
<!--END PHOTOS-->            
