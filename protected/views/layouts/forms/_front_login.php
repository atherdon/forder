<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="#" class="popup-form" id="forms">
                
                <?php echo CHtml::hiddenField('action','clientLogin')?>
                <?php echo CHtml::hiddenField('currentController','store')?>   
                
                 <?php if ($google_login_enabled==2 || $fb_flag==2 ) : ?>
                
                    <?php if ( $fb_flag==2):?>
                
                        <a href="javascript:fbcheckLogin();" class="fb-button orange-button medium rounded">
                            <i class="ion-social-facebook"></i>
                                <?php echo t("login with Facebook")?>
                        </a> 
                
                        <?php endif;?>

                        <?php if ($google_login_enabled==2):?>
                
                        <div class="top10"></div>
                            <a href="<?php echo Yii::app()->createUrl('/store/googleLogin')?>" 
                               class="google-button orange-button medium rounded">
                              <i class="ion-social-googleplus-outline"></i>
                              <?php echo t("Sign in with Google")?>
                            </a> 
                        
                        <?php endif;?>

                <div class="login-or">
                  <span>
                      <?php echo t("Or")?>
                  </span>
                </div>
                <?php endif;?>
                  
                
                <?php //if ( 0 ) { ?>
                <div class="login_icon">
                    <i class="icon_lock_alt"></i>
                </div>
                
                <?php echo CHtml::textField('username', '',
                               array('class'=>'grey-fields',
                               'placeholder'=>t("Email"),
                              'required'=>true
                              ))?>

                
                <input type="text" class="form-control form-white" placeholder="Username">
                    
                    
                    
                <?php echo CHtml::passwordField('password','',
                              array('class'=>'grey-fields',
                              'placeholder'=>t("Password"),
                             'required'=>true
                             ))?>
                
                <input type="text" class="form-control form-white" placeholder="Password">
                    
                    
                 <?php if ($captcha_customer_login==2):?>
                    <div class="top10">
                        <div id="kapcha-1"></div>
                    </div>
                <?php endif;?>     
                    
                    
          <?php// } ?>          
                    
                <div class="text-left">
                    <a href="javascript:;">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-submit">
                    Submit<?php //echo t("Login")?>
                </button>
            </form>
        </div>
    </div>
</div><!-- End modal -->   



<?php if ( 0 ) { ?>

<?php 
//$this->renderPartial('/front/banner-receipt',array(
//   'h1'=>t("Login & Signup"),
//   'sub_text'=>t("sign up to start ordering")
//));

echo CHtml::hiddenField('mobile_country_code',Yii::app()->functions->getAdminCountrySet(true));
?>

               
               
               
		  <form id="forms" class="forms" method="POST">
         <?php echo CHtml::hiddenField('action','clientLogin')?>
         <?php echo CHtml::hiddenField('currentController','store')?>        
         
          <?php if ($google_login_enabled==2 || $fb_flag==2 ) : ?>
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
             
		  <div class="row top10">
		     <div class="col-md-12 ">
		     <?php echo CHtml::textField('username','',
                array('class'=>'grey-fields',
                'placeholder'=>t("Email"),
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
		  		  
		  <?php if ($captcha_customer_login==2):?>
           <div class="top10">
             <div id="kapcha-1"></div>
           </div>
          <?php endif;?> 
		  
		  <div class="row top15">		   		   
		   <div class="col-md-6">
		     <a href="javascript:;" class="forgot-pass-link2 block orange-text text-center">
		     <?php echo t("Forgot Password");?> <i class="ion-help"></i>
		     </a>      
		   </div>
		   <div class="col-md-6">
		     <input type="submit" value="<?php echo t("Login")?>" class="green-button medium full-width">
		   </div>
		  </div>
		  		  
		</form>  		  		
		  
		</div> <!--box-grey-->  
                
                
<?php  } ?>                
	
                
                
                
                
                
                
<?php if ( 0 ) { ?>      
                
                
                
		<form id="frm-modal-forgotpass" class="frm-modal-forgotpass" method="POST" onsubmit="return false;" >
		<?php echo CHtml::hiddenField('action','forgotPassword')?>
		<?php echo CHtml::hiddenField('do-action', isset($_GET['do-action'])?$_GET['do-action']:'' )?>     
		<div class="section-forgotpass">
		    <div class="box-grey rounded">      
			  <div class="section-label bottom20">
			    <a class="section-label-a">
			       <i class="ion-unlocked i-big"></i>
			      <span class="bold" style="background:#fff;">
			      <?php echo t("Forgot Password")?></span>
			      <b></b>
			    </a>     
			  </div>    
			  
			   <div class="row top15">
		        <div class="col-md-12 ">
			     <?php echo CHtml::textField('username-email','',
	                array('class'=>'grey-fields',
	                'placeholder'=>t("Email address"),
	               'required'=>true
	               ))?>
			     </div>
			  </div> <!--row-->	
			  
			   <div class="row top10">		   		   
			   <div class="col-md-6 ">
			     <a href="javascript:;" class="back-link block orange-text text-center">
			     <?php echo t("Close");?>
			     </a>      
			   </div>
			   <div class="col-md-6 ">
			     <input type="submit" value="<?php echo t("Retrieve Password")?>" class="green-button medium full-width">
			   </div>
			  </div>  
		  
		  </div> <!--box-grey-->
		</div> <!--section-forgotpass-->
		</form>
<?php  } ?> 	