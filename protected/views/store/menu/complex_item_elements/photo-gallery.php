<!--FOOD ITEM GALLERY-->
<?php if (getOption($data['merchant_id'],'disabled_food_gallery')!=2):?>  
<?php $gallery_photo=!empty($data['gallery_photo'])?json_decode($data['gallery_photo']):false; ?>
   <?php if (is_array($gallery_photo) && count($gallery_photo)>=1):?>

    <div class="section-label">
      <a class="section-label-a">
        <span class="bold">
        <?php echo t("Gallery")?></span>
        <b></b>
      </a>     
      <div class="food-gallery-wrap row ">
        <?php foreach ($gallery_photo as $gal_val):?>
        <div class="col-md-3 ">
          <a href="<?php echo websiteUrl()."/upload/$gal_val"?>">
            <div class="food-pic" style="background:url('<?php echo websiteUrl()."/upload/$gal_val"?>')"></div>
            <img style="display:none;" src="<?php echo websiteUrl()."/upload/$gal_val"?>" alt="" title="">
          </a>
        </div> <!--col-->         
        <?php endforeach;?>
      </div> <!--food-gallery-wrap-->   
    </div> <!--section-label-->
    
   <?php endif;?>
<?php endif;?>
<!--FOOD ITEM GALLERY-->