<?php

    $row          = '';
    $item_data    = '';
    $price_select = '';
    $size_select  = '';
    
//   @TODO take back later 
//    if (array_key_exists("row", (array)$this->data)){
//        
//        $row       = $this->data['row'];	
//        $item_data = $_SESSION['kr_item'][$row];
//        //dump($item_data);
//        $price = Yii::app()->functions->explodeData($item_data['price']);
//        if ( is_array($price) && count($price)>=1){
//                $price_select=isset($price[0])?$price[0]:'';
//                $size_select=isset($price[1])?$price[1]:'';
//        }
//        $row++;
//    }
//    
    $row = 957;
    

    $data = Yii::app()->functions->getItemById( $item_id );
    //dump($data);
    $disabled_website_ordering = Yii::app()->functions->getOptionAdmin('disabled_website_ordering');
    $hide_foodprice            = Yii::app()->functions->getOptionAdmin('website_hide_foodprice');
    echo CHtml::hiddenField( 'hide_foodprice', $hide_foodprice );
    
//    echo '<pre>';
//    var_dump( $data );
    
    if ( is_array( $data ) && count( $data  )>= 1){

        $data = $data[0];

        //dump($data);
    }
    
?>
<!--

<a href="#complexModalHtml" data-toggle="modal" id="1" 
   data-id="1" 
   data-target="#complex-modal">Add +</a>

    $('#complex-modal').on('show.bs.modal', function(e) {

        var $modal = $(this),
            esseyId = e.relatedTarget.id,
            item = {
                'id' : $(this).data().id
            };

        console.log(item);    
            

        $.ajax({
            cache: false,
            type: 'POST',
            url: 'backend.php',
            data: 'EID=' + essayId,
            success: function(data) {
                $modal.find('.edit-content').html(data);
            }
        });
    })

-->


   


<!-- Complex item modal -->   
<div class="modal fade" id="complexModalHtml" tabindex="-1" 
     role="dialog" aria-labelledby="complexModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            
            <form class="popup-form" id="complexModal" 
                  method="POST" onsubmit="return false;">
                
                 <?php
                 echo CHtml::hiddenField('action', 'addToCart');
                 echo CHtml::hiddenField('item_id', $item_id );
                 echo CHtml::hiddenField('row', isset( $row ) ? $row : "");
                 echo CHtml::hiddenField('merchant_id', 
                         isset($data['merchant_id']) ? $data['merchant_id'] : ''
                     );

                 echo CHtml::hiddenField('discount', 
                         isset($data['discount']) ? $data['discount'] : "" 
                     );
                 echo CHtml::hiddenField('currentController', 'store');
                
                //dump($data);
                /** two flavores */
                if ($data['two_flavors']==2){
                            $data['prices'][0]=array(
                              'price'=>0,
                              'size'=>''
                            );	
                            echo CHtml::hiddenField('two_flavors',$data['two_flavors']);
                }
                    //dump($data);
                ?>
                
                
                
                <div class="row">
                    <div class="col-md-12">
                        <!--<div class="box_style_2 hidden-xs info">-->
                            
                            <div class="thumb_strip">
                                <!--<a href="detail_page.html">-->
                                    <!--<img src="img/thumb_restaurant.jpg" alt="">-->
                                    <img src   =" <?php echo FunctionsV3::getFoodDefaultImage($data['photo']);?> " 
                                         alt   =" <?php echo $data['item_name']?> " 
                                         title =" <?php echo $data['item_name']?> " 
                                         class =" logo-small ">
                                <!--</a>-->
                            </div>
                            
                           <h4>
                                <?php echo qTranslate($data['item_name'],'item_name',$data)?> 
                                
                                <p>
                                    <?php echo qTranslate($data['item_description'],'item_description',$data)?>
                                </p>
                            </h4>
                            
            <?php
                $this->renderPartial('/store/menu/complex_item_elements/photo-gallery', [
                        //        'data'    => $data,
                        'item_id' => 1 
                ] ); ?>
                        
            <?php
                $this->renderPartial('/store/menu/complex_item_elements/price', [
                        //        'data'    => $data,
                        'item_id' => 1 
                ] ); ?>            
             <hr /> 
             <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" id="firstname_order" name="firstname_order" placeholder="First name">
            </div>           
                        
                        
<!--                            <h4 class="nomargin_top">
                                Delivery time 
                                <i class="icon_clock_alt pull-right"></i>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
                            </p>
                            <hr>-->
                            
                            
                            
                            
<!--                            <h4>
                                Secure payment 
                                <i class="icon_creditcard pull-right"></i>
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
                            </p>-->
                        <!--</div>-->
                    </div>
                </div>
                
                <br />
                <br />
                <br />
                <br />
                <br />
                
                
                
                
                
                
<!--                <div class="login_icon">
                    <i class="icon_lock_alt"></i>
                </div>-->

                <?php echo CHtml::textField('first_name', '', array(
                           'class'       => 'form-control form-white',
                           'placeholder' => t("First Name"),
                           'required'    => true               
                  ))?>
                    
                <?php echo CHtml::textField('last_name', '', array(
                                'class'       => 'form-control form-white',
                                'placeholder' => t("Last Name"),
                                'required'    => true
                           ))?>
                <?php echo CHtml::textField('contact_phone','', array(
                                'class'       => 'form-control form-white mobile_inputs',
                                'placeholder' => t("Mobile"),
                                'required'    => true
               ))?>
                <?php echo CHtml::textField('email_address','',array(
                                'class'       => 'form-control form-white',
                                'placeholder' => t("Email address"),
                                'required'    => true
               ))?>
                 <?php echo CHtml::passwordField('password','', array(
                                'class'       => 'form-control form-white',
                                'placeholder' => t("Password"),
                                'required'    => true
               ))?>
               <?php echo CHtml::passwordField('cpassword','', array(
                                'class'       => 'form-control form-white',
                                'placeholder' => t("Confirm Password"),
                                'required'    => true
               )); 
                   $FunctionsK=new FunctionsK();
                   $FunctionsK->clientRegistrationCustomFields();
               ?> 
                
               
                
                   
                <div id="pass-info" class="clearfix"></div>
                <div class="checkbox-holder text-left">
                    <div class="checkbox">
                        <?php 
                            echo CHtml::checkBox('terms_n_condition', false, array(
                             'value'    => 2,
                             'class'    => "icheck",
                             'required' => true
                           ));?>
                        
                        <label for="terms_n_condition">
                            <span>
                                I Agree to the 
                                <strong>Terms &amp; Conditions</strong>
                            </span>
                        </label>
                    </div>
                </div>
                    
                <button type="submit" class="btn btn-submit">
                    <?php echo t("Create Account")?>
                </button>
            </form>
        </div>
    </div>
</div><!-- End Register modal -->