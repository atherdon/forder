<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="#" class="popup-form" id="myRegister">
                <div class="login_icon"><i class="icon_lock_alt"></i></div>
                
                    <input type="text" class="form-control form-white" placeholder="Name">
                    <input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password"  id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password"  id="password2">
                    <div id="pass-info" class="clearfix"></div>
                    <div class="checkbox-holder text-left">
                            <div class="checkbox">
                                    <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                                    <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Register</button>
                </form>
        </div>
    </div>
</div><!-- End Register modal -->




              <?php if ( 0 ) { ?>  
                
                
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
        	    		
		  <div class="section-label bottom20">
		    <a class="section-label-a">
		       <i class="ion-compose i-big green-color"></i>
		      <span class="bold" style="background:#fff;">
		      <?php echo t("Sign up")?></span>
		      <b></b>
		    </a>     
		  </div>    
		  
		   <div class="row top10">
		     <div class="col-md-12 ">
		     <?php echo CHtml::textField('first_name','',
                array('class'=>'grey-fields',
                'placeholder'=>t("First Name"),
               'required'=>true               
               ))?>
		     </div>
		  </div> <!--row-->	  
		  
		  <div class="row top10">
		     <div class="col-md-12 ">
		     <?php echo CHtml::textField('last_name','',
                array('class'=>'grey-fields',
                'placeholder'=>t("Last Name"),
               'required'=>true
               ))?>
		     </div>
		  </div> <!--row-->	  
		  
		  <div class="row top10">
		     <div class="col-md-12 ">
		     <?php echo CHtml::textField('contact_phone','',
                array('class'=>'grey-fields mobile_inputs',
                'placeholder'=>t("Mobile"),
               'required'=>true
               ))?>
		     </div>
		  </div> <!--row-->	  
		  
		 <div class="row top10">
		     <div class="col-md-12 ">
		     <?php echo CHtml::textField('email_address','',
                array('class'=>'grey-fields',
                'placeholder'=>t("Email address"),
               'required'=>true
               ))?>
		     </div>
		  </div> <!--row-->	   
		  
		  <div class="row top10">
		     <div class="col-md-12 ">
		     <?php echo CHtml::passwordField('password','',
                array('class'=>'grey-fields',
                'placeholder'=>t("Password"),
               'required'=>true
               ))?>
		     </div>
		  </div> <!--row-->	   
		 
		  <div class="row top10">
		     <div class="col-md-12 ">
		     <?php echo CHtml::passwordField('cpassword','',
                array('class'=>'grey-fields',
                'placeholder'=>t("Confirm Password"),
               'required'=>true
               ))?>
		     </div>
		  </div> <!--row-->	    
		  
		  
		 <?php 
         $FunctionsK=new FunctionsK();
         $FunctionsK->clientRegistrationCustomFields();
         ?> 
		  
		 <?php if ($captcha_customer_signup==2):?>         		 
         <div class="top10">
             <div id="kapcha-2"></div>
         </div>
         <?php endif;?> 
           
         <p class="text-muted">
          <?php echo Yii::t("default","By creating an account, you agree to receive sms from vendor.")?>
         </p>  
         
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
         
         <div class="row top10">
         <div class="col-md-12 ">
          <input type="submit" value="<?php echo t("Create Account")?>" class="orange-button medium block full-width">
          </div>
         </div>
		  
		</form> 
                
                
                
                
               
              <?php } ?>
                
