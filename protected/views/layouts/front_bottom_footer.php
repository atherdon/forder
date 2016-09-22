<!-- Footer ================================================== -->
<footer>
    <div class="container">
        <div class="row row-footer-links">
            
            
            <div class="col-md-4 col-sm-4" id="newsletter" style="margin-right: 50px;">

                <?php if ( getOptionA('disabled_subscription') == ""):?>
                
                    <h3 style="margin-top: 0px;">
                        Newsletter
                    </h3>
                    <p>
                        Join our newsletter to keep be informed about offers and news.
                    </p>
                    
                    <div id="message-newsletter_2">
                    </div>
                    
                    <form method="post" name="frm-subscribe" id="frm-subscribe" onsubmit="return false;">
                        <?php echo CHtml::hiddenField('action','subscribeNewsletter')?>
                        <div class="form-group">
                            <?php echo CHtml::textField('subscriber_email','',array(
                                            'placeholder' => t("E-mail"), // @TODO or Your mail?
                                            'required'    => true,
                                            'class'       => "form-control"
                                      ));
                            ?>
                            
                        </div>
                        <input type="submit" value=" <?php echo t("Subscribe")?>" class="btn_1" id="submit-newsletter_2">
                        
                    </form>
                
                <?php endif;?>

            </div>
            
            
            <div class="col-md-4 col-sm-3">
  
                <?php $this->widget('zii.widgets.CMenu', FunctionsV3::getFooterMenu1() );?> 
                
            </div>
            <div class="col-md-3 col-sm-3">
                                
                 <?php $this->widget('zii.widgets.CMenu', FunctionsV3::getFooterMenu2() );?> 

            </div>
            
            
<!--
            
            
            <div class="col-md-3 col-sm-4">
                
               
            </div>-->
        </div><!-- End row -->
        
        
        
        
        

<!--CUISINE SECTIONS-->
<?php if ( $list = FunctionsV3::getCuisine() ): ?>

<div class="row row-delivery-links">


    <div class="col-md-12">
        <h1>
            Browse delivery restaurants
        </h1>
    </div>
    <div class="col-md-8">
        <h4>
            Browse delivery & takeout by cuisines
        </h4>
        
        <div class="col-md-6">
        <ul>
            <?php $x=1; ?>
            <?php foreach ( array_slice($list, 20, 18) as $val): ?>
            <!--<div class="col-md-6 col-sm-6 indent-5percent nopad">-->
            <li>
                <a href="<?php echo Yii::app()->createUrl('/store/cuisine',array("category"=>$val['cuisine_id']))?>" 
               class="<?php echo ($x%2)?"even":'odd'?>">
                <?php 
                $cuisine_json['cuisine_name_trans']=!empty($val['cuisine_name_trans'])?json_decode($val['cuisine_name_trans'],true):'';	 
                echo qTranslate($val['cuisine_name'],'cuisine_name',$cuisine_json);

                ?>
                </a>
            </li> 
            <!--</div>-->   
            <?php $x++; ?>
            <?php endforeach; ?>
        </ul> 
        </div>
        <div class="col-md-6">
            <ul>
                <?php $x=1; ?>
                <?php foreach ( array_slice($list, 38, 18) as $val): ?>
                <!--<div class="col-md-6 col-sm-6 indent-5percent nopad">-->
                <li>
                  <a href="<?php echo Yii::app()->createUrl('/store/cuisine',array("category"=>$val['cuisine_id']))?>" 
                 class="<?php echo ($x%2)?"even":'odd'?>">
                  <?php 
                  $cuisine_json['cuisine_name_trans']=!empty($val['cuisine_name_trans'])?json_decode($val['cuisine_name_trans'],true):'';	 
                  echo qTranslate($val['cuisine_name'],'cuisine_name',$cuisine_json);

                  ?>
                  </a>
                </li> 
                <!--</div>-->   
                <?php $x++; ?>
                <?php endforeach; ?>
            </ul>       
        </div>
        
    </div>


    <div class="col-md-4">
        <h4>
            Browse by cities
        </h4>
        <ul>
            <?php $x=1;?>
            <?php foreach ( array_slice($list, 56) as $val): ?>

            <li>
                <a href="<?php echo Yii::app()->createUrl('/store/cuisine',array("category"=>$val['cuisine_id']))?>" 
               class="<?php echo ($x%2)?"even":'odd'?>">
                <?php 
                $cuisine_json['cuisine_name_trans']=!empty($val['cuisine_name_trans'])?json_decode($val['cuisine_name_trans'],true):'';	 
                echo qTranslate($val['cuisine_name'],'cuisine_name',$cuisine_json);

                ?>
                </a>
            </li>  

            <?php $x++;?>
            <?php endforeach;?>

            <li class="">
                <a href="<?php echo Yii::app()->createUrl('/store/browse/' )?>" class="clean">
                    Show more
                </a>
            </li>
        </ul>
    </div>

<?php endif;?>

        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                       <?php if ( $social_flag <> 1 ):?>
                    
                    <ul>
                        
                         <?php if (!empty($fb_page)):?>                                              
                            <li>
                                <a target="_blank" href="<?php echo FunctionsV3::prettyUrl($fb_page)?>"><i class="icon-facebook"></i></a>
                            </li>
                        <?php endif;?>
                        
                         <?php if (!empty($twitter_page)):?>
                            <li>
                                <a target="_blank" href="<?php echo FunctionsV3::prettyUrl($twitter_page)?>"><i class="icon-twitter"></i></a>
                            </li>
                        <?php endif;?>

                        <?php if (!empty($google_page)):?>
                        <li>
                            <a target="_blank" href="<?php echo FunctionsV3::prettyUrl($google_page)?>"><i class="icon-google"></i></a>
                        </li>
                        <?php endif;?>
                        
                        <?php if (!empty($intagram_page)):?>                        
                        <li>
                            <a target="_blank" href="<?php echo FunctionsV3::prettyUrl($intagram_page)?>"><i class="icon-instagram"></i></a>
                        </li>
                        <?php endif;?>
                        
                        <li>
                            <a href="#0"><i class="icon-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="icon-vimeo"></i></a>
                        </li>
                         <?php if (!empty($youtube_url)):?>
                        <li>
                            <a target="_blank" href="<?php echo FunctionsV3::prettyUrl($youtube_url)?>"><i class="icon-youtube-play"></i>
                            </a>
                        </li>
                        <?php endif;?>
                        
                    </ul>
                    
                    <?php endif;?>
                    <p>
                        © Quick Food <?php echo date("Y"); ?>
                    </p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    
    
    
    
    </footer>
    <!-- End Footer =============================================== -->
    
<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- MODAL LOGIN -->
<?php 

$this->renderPartial('/layouts/forms/_front_login', [
        'google_login_enabled'   => $google_login_enabled,
        'fb_flag'                => $fb_flag,
        'captcha_customer_login' => $captcha_customer_login,
        //'do-action'              => $_GET['do-action'],
     ] ); ?>

<!-- MODAL REGISTRATION-->
<?php $this->renderPartial('/layouts/forms/_front_sign_up', [
        'captcha_customer_signup' => $captcha_customer_signup,
    ] ); ?>   

<!-- MODAL FORGOT PASSWORD -->
<?php $this->renderPartial('/layouts/forms/_front_forgot_password', [
        'captcha_customer_login' => $captcha_customer_login,
    ] ); ?>   
