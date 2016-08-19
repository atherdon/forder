<!-- Login modal -->   
<div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="ForgotPassword" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <form action="#" class="popup-form" id="forms">
                
                <?php echo CHtml::hiddenField('action', 'clientLogin')?>
                <?php echo CHtml::hiddenField('currentController', 'store')?>   
                

                
              <div class="login_icon">
                <i class="icon_lock_alt"></i>
              </div>
                
                <?php echo CHtml::textField('username', '', array(
                                    'class'       => 'form-control form-white',
                                    'placeholder' => t("Username"),
                                    'required'    => true
                              ))?>
                    
                    
                <?php echo CHtml::passwordField('password', '', array(
                                    'class'       => 'form-control form-white',
                                    'placeholder' => t("Password"),
                                    'required'    => true
                             ))?>
                    
                 <?php if ($captcha_customer_login==2):?>
                    <div class="top10">
                        <div id="kapcha-1"></div>
                    </div>
                <?php endif;?>     
                    

                <div class="text-left">
                    <a href="javascript:;">
                        Forgot Password?
                    </a>
                </div>
                <button type="submit" class="btn btn-submit">
                    <?php echo t("Submit")?>
                </button>
            </form>
        </div>
    </div>
</div><!-- End modal -->   



                
                
<?php if ( 0 ) { ?>      
                
                 <?php echo CHtml::hiddenField('mobile_country_code', 
                        Yii::app()->functions->getAdminCountrySet(true)
                    ); ?>
                
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