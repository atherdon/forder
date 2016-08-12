<div id="summary_review">
    <div id="general_rating">
        <?php echo $ratings['votes'] . " " . t("Reviews"); ?>        
        
         <?php echo Widgets::ratingHTML( $ratings ); ?>

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
    <a href="#" class="btn_1 add_bottom_15" 
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
                
                <?php //if() { ?>
                <?php //} 
                    //var_dump( $val );
                ?>
                
                <img src="<?php echo FunctionsV3::getAvatar($val['client_id']); ?>" alt="" class="img-circle">
                <small>
                    <!--- 10 March 2015 --->
                    - <?php echo $pretyy_date; ?> -
                    
                </small>
                <h4>
                    <?php echo $val['client_name']; ?>
                    <!--Jhon Doe-->
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




<?php  if ( 0 ) { ?>
<div class="text-right">
<a href="javascript:;" class="write-review-new green-button inline bottom10 upper">
<?php echo t("write a review")?>
</a>
</div>

<div class="review-input-wrap bottom10 row">
<form class="forms" id="forms" onsubmit="return false;">
<?php echo CHtml::hiddenField('action','addReviews')?>
<?php echo CHtml::hiddenField('currentController','store')?>
<?php echo CHtml::hiddenField('merchant-id',$merchant_id)?>
<?php echo CHtml::hiddenField('initial_review_rating','')?>
    
   <div class="col-md-12 border">
     <div>
     <div class="raty-stars" data-score="5"></div>   
     </div>
     <div>
     <?php echo CHtml::textArea('review_content','',array(
        'required'=>true,
        'class'=>"grey-inputs"
     ))?>
     </div>
     <div class="top10">
        <button class="orange-button inline" type="submit"><?php echo t("PUBLISH REVIEW")?></button>
     </div>
   </div> <!--col-->	        
</form>
</div> <!--review-input-wrap-->

<div class="box-grey rounded merchant-review-wrap" style="margin-top:0;"></div>
<?php } ?>










<?php if ( 0 ) { ?>
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

<?php } ?>