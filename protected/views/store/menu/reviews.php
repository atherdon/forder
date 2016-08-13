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
    <a href="#" 
       class="btn_1 add_bottom_15" 
       data-toggle="modal" 
       data-target="#myReview">
       Leave a review
    </a>
</div><!-- End summary_review -->

<?php

    $client_id  = Yii::app()->functions->getClientId();
    $reviewsArr = Yii::app()->functions->getReviewsList( $merchant_id );

    if( !empty( $reviewsArr ) ){

        foreach ( $reviewsArr as $val ) {
            
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

            
        <?php    
        }


    } else { Yii::t("default","No reviews yet."); }

?>

<!-- Review modal -->   
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="review" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            
            
            <form method="post" name="review" id="review" class="popup-form" onsubmit="return false;"> 
                <?php echo CHtml::hiddenField('action','addReviews')?>
                <?php echo CHtml::hiddenField('currentController','store')?>
                <?php echo CHtml::hiddenField('merchant-id',$merchant_id)?>
                <?php echo CHtml::hiddenField('initial_review_rating','')?>
                
                <div class="login_icon"><i class="icon_comment_alt"></i></div>
                
                <input name="restaurant_name" id="restaurant_name" type="hidden" value="Mexican Taco Mex">	
                
                <div class="row" >
                    <div class="col-md-6">
                        
                        <input name="name_review" id="name_review" type="text" placeholder="Name" class="form-control form-white">			
                    </div>
                    <div class="col-md-6">
                        <input name="email_review" id="email_review" type="email" placeholder="Your email" class="form-control form-white">
                    </div>
                </div><!-- End Row --> 

                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control form-white" name="food_review" id="food_review">
                            <option value=""> Food Quality </option>
                            <option value="Low"> Low </option>
                            <option value="Sufficient"> Sufficient </option>
                            <option value="Good"> Good </option>
                            <option value="Excellent"> Excellent </option>
                            <option value="Superb"> Super </option>
                            <!--<option value="Not rated">I don't know</option>-->
                        </select>                            
                    </div>
<!--                    <div class="col-md-6">
                        <select class="form-control form-white"  name="price_review" id="price_review">
                            <option value="">Price</option>
                            <option value="Low">Low</option>
                            <option value="Sufficient">Sufficient</option>
                            <option value="Good">Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Superb">Super</option>
                            <option value="Not rated">I don't know</option>
                        </select>
                    </div>-->
                </div><!--End Row -->    

<!--                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control form-white"  name="punctuality_review" id="punctuality_review">
                            <option value="">Punctuality</option>
                            <option value="Low">Low</option>
                            <option value="Sufficient">Sufficient</option>
                            <option value="Good">Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Superb">Super</option>
                            <option value="Not rated">I don't know</option>
                        </select>                       
                    </div>
                    <div class="col-md-6">
                        <select class="form-control form-white"  name="courtesy_review" id="courtesy_review">
                            <option value="">Courtesy</option>
                            <option value="Low">Low</option>
                            <option value="Sufficient">Sufficient</option>
                            <option value="Good">Good</option>
                            <option value="Excellent">Excellent</option>
                            <option value="Superb">Super</option>
                            <option value="Not rated">I don't know</option>
                        </select>
                    </div>
                </div>End Row      -->
<!--                <textarea name="review_text" id="review_text" 
                          class="form-control form-white" 
                          style="height:100px" 
                          placeholder="Write your review"></textarea>-->

                <?php echo CHtml::textArea('review_content','',array(
                                'required'    => true,
                                'class'       => "form-control form-white",
                                'style'       => "height:100px",
                                'placeholder' => "Write your review"                    
                ))?>


<!--                <input type="text" 
                       id="verify_review" 
                       class="form-control form-white" 
                       placeholder="Are you human? 3 + 1 =">-->
                
                <input type="submit" value="Submit" 
                       class="btn btn-submit" 
                       id="submit-review">
            </form>
            
            
            <div id="message-review"></div>
        </div>
    </div>
</div><!-- End Review modal -->   