<!-- Review modal -->   
<div class="modal fade" id="myReview" tabindex="-1" 
     role="dialog" aria-labelledby="review" aria-hidden="true">
    
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            
            <a href="#" class="close-link">
                <i class="icon_close_alt2"></i>
            </a>
            
            
            
            <form method="post" name="review" id="review" class="popup-form" onsubmit="return false;"> 
                
                <?php echo CHtml::hiddenField( 'action', 'addReviews' );?>
                <?php echo CHtml::hiddenField( 'currentController', 'store' );?>
                <?php echo CHtml::hiddenField( 'merchant-id', $merchant_id );?>
                <?php //echo CHtml::hiddenField('initial_review_rating', ''); ?>
                
                <div class="login_icon">
                    <i class="icon_comment_alt"></i>
                </div>
                
<!--                <input name="restaurant_name" id="restaurant_name" type="hidden" 
                       value="Mexican Taco Mex">	-->
                
<!--                <div class="row" >
                    <div class="col-md-6">
                        
                        <input name="name_review" id="name_review" type="text" 
                               placeholder="Name" class="form-control form-white">			
                    </div>
                    <div class="col-md-6">
                        <input name="email_review" id="email_review" type="email" 
                               placeholder="Your email" class="form-control form-white">
                    </div>
                </div> -->
                <!--End Row-->  

                <div class="row">
                    <div class="col-md-6">
                        
                        
<!--                        <select class="form-control form-white" 
                                name="food_review" id="initial_review_rating">
                            <option value="">
                                Food Quality 
                            </option>
                            <option value="1">
                                Low 
                            </option>
                            <option value="2">
                                Sufficient 
                            </option>
                            <option value="3">
                                Good 
                            </option>
                            <option value="4">
                                Excellent 
                            </option>
                            <option value="5">
                                Super 
                            </option>
                            <option value="Not rated">I don't know</option>
                        </select>   -->
                        
                        
                        <?php echo CHtml::dropDownList('initial_review_rating',
                                    'Food Quality',
                                    array( 
                                        '0' => 'Food Quality ',
                                        '1' => 'Low',
                                        '2' => 'Sufficient',
                                        '3' => 'Good',
                                        '4' => 'Excellent',
                                        '5' => 'Super',
                                        ),
                                    array(
                                        'class'    => "form-control form-white",
                                        'multiple' => false
                                    )
                                );
                        ?>
                        
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
            
            
            
            <!--<div id="message-review"></div>-->
        </div>
    </div>
</div><!-- End Review modal -->   