


 <!-- Footer ================================================== -->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Secure payments with</h3>
                <p>
                    <img src="<?php echo Widgets::quickImagesPath(); ?>cards.png" alt="" class="img-responsive">
                </p>
                <?php FunctionsV3::getFooterAddress();?>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>About</h3>
                <ul>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#login_2">Login</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#register">Register</a></li>
                    <li><a href="#0">Terms and conditions</a></li>
                </ul>
                
                <?php if ($theme_hide_footer_section1!=2):?>
                    <h3><?php echo t("Menu")?></h3>

                    <?php if (is_array($menu) && count($menu)>=1):?>
                    <?php foreach ($menu as $val):?>
                    <li>
                      <a 
                        href="<?php echo FunctionsV3::customPageUrl($val)?>" <?php FunctionsV3::openAsNewTab($val)?> >
                       <?php echo $val['page_name']?></a>
                    </li>
                    <?php endforeach;?>
                    <?php endif;?>

                <?php endif;?>
                    
                    
                <?php if ($theme_hide_footer_section2!=2):?>
                    <h3><?php echo t("Others")?></h3>

                    <?php if (is_array($others_menu) && count($others_menu)>=1):?>
                    <?php foreach ($others_menu as $val):?>
                        <li>
                          <a 
                            href="<?php echo FunctionsV3::customPageUrl($val)?>" <?php FunctionsV3::openAsNewTab($val)?> >
                           <?php echo $val['page_name']?></a>
                        </li>
                    <?php endforeach;?>
                    <?php endif;?>

                <?php endif;?>      
                
                
            </div>
            <div class="col-md-3 col-sm-3" id="newsletter">
                

                
                <?php if ( getOptionA('disabled_subscription') == ""):?>
                
                    <h3>
                        Newsletter
                    </h3>
                    <p>
                        Join our newsletter to keep be informed about offers and news.
                        <?php //echo t("Subscribe to our newsletter") ?>
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
            <div class="col-md-2 col-sm-3">
                <h3>Settings</h3>
                <div class="styled-select">
                    
                      <?php 
        if ($show_language<>1){
        	if ( $theme_lang_pos=="bottom" || $theme_lang_pos==""){
		        echo CHtml::dropDownList('language-options','',
		         (array)FunctionsV3::getLanguage()
		         ,array(
		         'class'=>"language-options selectpicker",
		         'title'=>t("Select language")
		        ));
        	}
        }
        ?>
                    
                    <select class="form-control" name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Russian">Russian</option>
                    </select>
                </div>
                <div class="styled-select">
                    
                    <select class="form-control" name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="RUB">RUB</option>
                    </select>
                    
                </div>
            </div>
        </div><!-- End row -->
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
                        © Quick Food 2015
                    </p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->
    
<div class="layer"></div><!-- Mobile menu overlay mask -->

<!--MODAL LOGIN-->
<?php $this->renderPartial('/layouts/_front_login', [] ); ?>

<!--MODAL REGISTRATION-->
<?php $this->renderPartial('/layouts/_front_sign_up', [] ); ?>   