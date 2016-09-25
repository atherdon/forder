<?php 

$this->renderPartial('/store/signup/header', array(
        'h1'       => t("Login & Signup"),
        'sub_text' => t("sign up to start ordering")
));


echo CHtml::hiddenField('mobile_country_code',Yii::app()->functions->getAdminCountrySet(true));
?>



<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row">
        <div class="col-md-5">
            
            <div class="box_style_2" id="order_process">
               <h2 class="inner">
                   <?php echo t("Log in to your account")?>
               </h2>
               
                <form id="forms" class="forms" method="POST">
                                            
                    <?php echo CHtml::hiddenField('action','clientLogin')?>
                    <?php echo CHtml::hiddenField('currentController','store')?>        
         
                    <?php if ($google_login_enabled==2 || $fb_flag==2 ) :?>
                        <?php if ( $fb_flag==2):?>
                            <a href="javascript:fbcheckLogin();" class="fb-button orange-button medium rounded">
                             <i class="ion-social-facebook"></i><?php echo t("login with Facebook")?>
                            </a> 
                            <?php endif;?>

                            <?php if ($google_login_enabled==2):?>
                            <div class="top10"></div>
                            <a href="<?php echo Yii::app()->createUrl('/store/googleLogin')?>" 
                            class="google-button orange-button medium rounded">
                              <i class="ion-social-googleplus-outline"></i><?php echo t("Sign in with Google")?>
                            </a> 
                            <?php endif;?>

                        <div class="login-or">
                          <span><?php echo t("Or")?></span>
                        </div>
                            
                    <?php endif;?>
                    
                     <div class="form-group">
                       <label><?php echo t("Email") ?></label>
                       <?php echo CHtml::textField('username','', array(
                                    'class'       => 'form-control',
                                    'placeholder' => t("Email"),
                                    'required'    => true
                               ))?>
                       
                    </div>        
		   <div class="form-group">
                       <label>
                           <?php echo t("Password") ?>
                       </label>
                       <?php echo CHtml::passwordField('password','',
                                array('class'=>'form-control',
                                'placeholder'=>t("Password"),
                               'required'=>true
                               ))?>
                       
                    </div>
                            
		<?php if ($captcha_customer_login==2):?>
                            <div class="form-group">
                                <div id="kapcha-1"></div>
                            </div>
           
                <?php endif;?> 
		          
                <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#forgot">
                    <?php echo t("Forgot Password");?>
                </a>
                            
               <div class="form-group pb-28">
                    <button type="submit" 
                            class="btn_full_outline login-button-signup pull-right mb-45 ">
                        Submit
                    </button> 
               </div>

               
		</form>  	
                


               </div><!-- End box_style_1 -->			
                
                
        </div><!-- End col-md-5 -->
            
        <div class="col-md-7">

            <div class="box_style_2" id="order_process">
                <h2 class="inner">
                    <?php echo t("Sign up")?>
                </h2>
                    
                <div class="box-grey rounded top-line-green">      
	    
                    <form id="form-signup" class="form-signup uk-panel uk-panel-box uk-form" method="POST">
                        <?php echo CHtml::hiddenField('action','clientRegistrationModal')?>
                        <?php echo CHtml::hiddenField('currentController','store')?>
                        <?php echo CHtml::hiddenField('single_page',2)?>    
                        <?php 
                            $verification=Yii::app()->functions->getOptionAdmin("website_enabled_mobile_verification");	    
                            if ( $verification=="yes"){
                               echo CHtml::hiddenField('verification',$verification);
                            }
                            if (getOptionA('theme_enabled_email_verification')==2){
                               echo CHtml::hiddenField('theme_enabled_email_verification',2);
                            }
                        ?>

                          <div class="form-group">
                            <label>First name</label>
                            <?php echo CHtml::textField('first_name','',
                               array('class'=>'form-control',
                               'placeholder'=>t("First Name"),
                              'required'=>true               
                              ))?>

                        </div>        

                            <div class="form-group">
                                <label>Last name</label>
                                <?php echo CHtml::textField('last_name','',
                                    array('class'=>'form-control',
                                    'placeholder'=>t("Last Name"),
                                    'required'=>true
                                ))?>

                            </div>  
                        
                            <div class="form-group">
                                <label>Contact phone</label>
                                <?php echo CHtml::textField('contact_phone','',
                                        array('class'=>'form-control mobile_inputs',
                                        'placeholder'=>t("Mobile"),
                                       'required'=>true
                               ))?>
                                
                            </div>

                            <div class="form-group">
                                 <label>Email address</label>
                                 <?php echo CHtml::textField('email_address','',
                                    array('class'=>'form-control',
                                    'placeholder'=>t("Email address"),
                                   'required'=>true
                                   ))?>

                             </div>
                        
                            <div class="form-group">
                                <label>Password</label>
                                 <?php echo CHtml::passwordField('password','',
                                        array('class'=>'form-control',
                                        'placeholder'=>t("Password"),
                                        'required'=>true
                                   ))?>
                            </div>
                               
                            <div class="form-group">
                                <label>Confirm Password</label>
                                 <?php echo CHtml::passwordField('cpassword','',
                                        array('class'=>'form-control',
                                        'placeholder'=>t("Confirm Password"),
                                       'required'=>true
                                ))?>
                            </div>
                                 

                               

                            <?php 
                                $FunctionsK=new FunctionsK();
                                $FunctionsK->clientRegistrationCustomFields();
                            ?> 

                            <?php if ($captcha_customer_signup==2):?>  
                                <div class="form-group">
                                    <div id="kapcha-2"></div>
                                </div>                                                        
                            <?php endif;?> 
                        
                            <div class="form-group">
                                <label><?php echo Yii::t("default","By creating an account, you agree to receive sms from vendor.")?></label>                                 
                            </div>
                        
                            

                            <?php if ($terms_customer=="yes"): ?> 
                             <div class="row">
                               <div class="col-md-1">
                               <?php 
                                        echo CHtml::checkBox('terms_n_condition',false,array(
                                         'value'=>2,
                                         'class'=>"icheck",
                                         'required'=>true
                                       ));?>
                               </div>
                               <div class="col-md-11 text-left">
                               <?php 
                               echo " ". t("I Agree To")." <a href=\"$terms_customer_url\" target=\"_blank\">".t("The Terms & Conditions")."</a>";
                                ?>
                               </div>
                             </div>
                             <?php endif;;?>
                        
                             <div class="form-group pb-28">
                                <button type="submit" class="btn_full_outline login-button-signup pull-right mb-45 ">
                                    <?php echo t("Create Account")?>
                                </button> 
                           </div>

                       

                    </form> 
		</div> <!--box-grey-->  
	  
                    


            </div><!-- End box_style_1 -->

        </div><!-- End col-md-6 -->
            
			
            
    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->