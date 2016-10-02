<?php

$pretyy_date = PrettyDateTime::parse( new DateTime( $val['date_created'] ) );
$pretyy_date = Yii::app()->functions->translateDate( $pretyy_date );

?>
<div class="review_strip_single">

    <img src="<?php echo FunctionsV3::getAvatar($val['client_id']); ?>" alt="" class="img-circle">
    <small>
        - <?php echo $pretyy_date; ?> -                    
    </small>
    <h4>
        <?php echo $val['client_name']; ?>
    </h4>
    <p>
        "<?php echo nl2br($val['review'])?>"
    </p>
    <div class="row">
        <div class="col-md-3">

            <?php echo Widgets::ratingHTML( [ 'ratings' => $val['rating'], 'votes' => false ] ); ?>
             <!--Food Quality-->
        </div>


<!--                    <div class="col-md-3">
            <div class="rating">
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
            </div>
             Price
        </div>-->
<!--                    <div class="col-md-3">
            <div class="rating">
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star"></i>
            </div>
             Punctuality
        </div>-->
<!--                    <div class="col-md-3">
            <div class="rating">
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star"></i>
            </div>
             Courtesy
        </div>-->

    </div><!-- End row -->
</div><!-- End review strip -->
