<?php 

$this->renderPartial('/store/404/header', array(
        'h1'       => t("404"),
        'sub_text' => t("Sorry but we cannot find what you are looking for")
));
?>


<div class="container margin_60_35">
    <div class="row" id="contacts">
    	<div class="col-md-6 col-sm-6">
            <div class="box_style_2">

                <p class="add_bottom_30" style="font-size: 16px;">
                   <?php echo t("Page doesn't exist or some other error occured. ")?>
                    <br />
                   <?php echo t("Go to our")?> 
                    <a href="<?php echo Yii::app()->createUrl('/store')?>">
                        <i class="icon_house_alt"></i><?php echo t("home")?>
                    </a> 
                    <?php echo t("or go back to")?>
                    <a href="javascript:window.history.back();" class="">
                         <i class="arrow_left"></i>
                        <?php echo t("previous page")?>
                    </a>
                <p>
          
            </div>
    	</div>
        
        <div class="col-md-6 text-right hidden-sm hidden-xs">
            <img src="<?php echo assetsURL()."/images/404.png"?>" alt="" class="img-responsive" />
        </div>


    </div><!-- End row -->
</div>                                          