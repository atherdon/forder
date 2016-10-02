<div id="summary_review">
    <div id="general_rating">
        <?php echo $ratings['votes'] . " " . t("Reviews"); ?>        
    </div>
    <div class="row" id="rating_summary">
        <div class="col-md-6">
            <?php echo Widgets::ratingHTML( $ratings ); ?>
        </div>
    </div>
    
    
<!--    <div class="row" id="rating_summary">
        <div class="col-md-6">
            <ul>
                <li>
                    Food Quality
                    
                <div class="rating">
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                </div>
                </li>
                <li>
                    Price
                    
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
                <li>
                    Punctuality
                    
                <div class="rating">
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                </div>
                </li>
                <li>
                    Courtesy
                    
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
    </div> End row -->



    
    <hr class="styled">
    <?php if ( Yii::app()->functions->isClientLogin()){ ?>
    
        <a href="#" 
           class="btn_1 add_bottom_15" 
           data-toggle="modal" 
           data-target="#myReview">
           Leave a review
        </a>
    
    <?php } else { ?>
        <p>
            Only registered users can write a review
        </p>
    <?php } ?>
    
    
    
</div><!-- End summary_review -->

<?php

    $client_id  = Yii::app()->functions->getClientId();
    $reviewsArr = Yii::app()->functions->getReviewsList( $merchant_id );

    if( !empty( $reviewsArr ) ){

        foreach ( $reviewsArr as $val ) {
            
            $this->renderPartial( '/store/menu/reviews/single-review', [
                'val' => $val

            ] );

        }


    } else { Yii::t("default","No reviews yet."); }

     $this->renderPartial( '/store/menu/reviews/modal-form', [
                'merchant_id' => $merchant_id,
                
            ] );
?>     