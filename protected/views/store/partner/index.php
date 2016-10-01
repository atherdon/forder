<?php 

$array = array(
                'data'               => Yii::app()->functions->getPackagesById($_GET['package_id']),
                'limit_post'         => Yii::app()->functions->ListlimitedPost(),
                'terms_merchant'     => getOptionA('website_terms_merchant'),
                'terms_merchant_url' => getOptionA('website_terms_merchant_url'),
                'package_list'       => Yii::app()->functions->getPackagesList(),
                'kapcha_enabled'     => getOptionA('captcha_merchant_signup')
            );



?>    


    
<div id="merchant-apply-container">
  <div class="media-cover-container merchant-apply-jumbotron">
    <div class="media-cover merchant-apply-media-cover"></div>
    <div class="media-cover-headings-container container">
      <div class="media-cover-headings merchant-cover-headings">
        <h1 class="media-cover-header merchant-cover-header">
            Let's Work Together
          </h1>
        <h3 class="media-cover-subheader merchant-cover-subheader">
            Partner with DoorDash
          </h3>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="content-section content-section-alternate">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-push-6">
              
              
              
              
              
              
              
            <?php if ( is_array( $data ) && count( $data ) >= 1 ){?>  
              
            <form id="merchant-apply-form" action="#" role="form" method="POST" class="info-card info-card-padding roundify form-horizontal bv-form" 
                  data-bv-message="This value is not valid" 
                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok" 
                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove" 
                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh" 
                  novalidate="novalidate">

            <?php echo CHtml::hiddenField('mobile_country_code', Yii::app()->functions->getAdminCountrySet( true ) ); ?>   

                
            <?php echo CHtml::hiddenField('action','merchantSignUp')?>
            <?php echo CHtml::hiddenField('currentController','store')?>
            <?php echo CHtml::hiddenField('package_id',$data['package_id'])?>
                
<!--              <input type="hidden" name="oid" value="00D1a000000KEiH">
              <input type="hidden" name="retURL" value="https://www.doordash.com/merchant/apply_success/">
              <input type="hidden" name="lead_source" value="Merchant Inbound">-->

              <div class="content-section-headings">
                <h3 class="content-section-header merchant-title">
                    Become a Partner
                </h3>
                <h5 class="content-section-subheader">
                  A member of our Partnerships team will be in touch shortly after you submit this form.
                </h5>
              </div>
                
              <div class="content-section-headings">
                <h3 class="content-section-header merchant-title">
                    <?php echo t("Selected Package")?>
                </h3>
                <h5 class="content-section-subheader">
                    <?php echo $data['title']?>
                </h5>
              </div>  
              
              <div class="content-section-headings">
                <h3 class="content-section-header merchant-title">
                    <?php echo t("Price")?>
                </h3>
                <h5 class="content-section-subheader">
                    <?php if ( $data['promo_price']>=1):?>
                    
                        <span class="strike-price"><?php echo FunctionsV3::prettyPrice($data['price'])?></span>
                        <?php echo FunctionsV3::prettyPrice($data['promo_price'])?> 
                        
                     <?php else :?>
                        
                        <?php echo FunctionsV3::prettyPrice($data['price'])?> 
                        
                     <?php endif;?>
                </h5>
              </div>    
              
              <div class="content-section-headings">
                <h3 class="content-section-header merchant-title">
                    <?php echo t("Membership Limit")?>
                </h3>
                <h5 class="content-section-subheader">
                    <?php if ( $data['expiration_type']=="year"):?>
                    
                        <?php echo $data['expiration']/365?> <?php echo Yii::t("default",ucwords($data['expiration_type']))?>
                    
                     <?php else :?>
                    
                        <?php echo $data['expiration']?> <?php echo Yii::t("default",ucwords($data['expiration_type']))?>
                    
                     <?php endif;?>
                </h5>
              </div> 
                
              <div class="content-section-headings">
                <h3 class="content-section-header merchant-title">
                    <?php echo t("Usage")?>
                </h3>
                <h5 class="content-section-subheader">
                    <?php if ( $data['unlimited_post']==2):?>
                        <?php echo $limit_post[$data['unlimited_post']]?>
                     <?php else :?>
                        <?php echo $limit_post[$data['unlimited_post']] . " (".$data['post_limit']." item )"?>
                     <?php endif;?>
                </h5>
              </div>    
                
             
            <div class="form-group has-feedback">
                <label for="restaurant_name" class="col-xs-4 control-label">
                    <?php echo t("Restaurant name")?>
                </label>
                <div class="col-xs-8">
                  <?php echo CHtml::textField('restaurant_name',
			  isset($data['restaurant_name'])?$data['restaurant_name']:""
			  ,array(
			  'class'=>'grey-fields full-width',
			  'data-validation'=>"required"
			  ))?>  
                  <!--<input type="text" class="form-control" id="company" name="company" placeholder="Restaurant name" required="" data-bv-field="company">-->
                  <i class="form-control-feedback" data-bv-icon-for="company" style="display: none;"></i>
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="restaurant_name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
              </div>   
                
                
            <?php if ( getOptionA('merchant_reg_abn')=="yes"):?>
            <div class="form-group has-feedback">
                <label for="abn" class="col-xs-4 control-label">
                    <?php echo t("ABN")?>
                </label>
                <div class="col-xs-8">
                    <?php echo CHtml::textField('abn',
			  isset($data['restaurant_name'])?$data['abn']:""
			  ,array(
			  'class'=>'grey-fields full-width',
			  'data-validation'=>"required"
			  ))?>
                  <!--<input type="text" class="form-control" id="company" name="company" placeholder="Restaurant name" required="" data-bv-field="company"><i class="form-control-feedback" data-bv-icon-for="company" style="display: none;"></i>-->
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="abn" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
              </div>   
              <?php endif;?>  
                
              <div class="form-group has-feedback">
                <label for="restaurant_phone" class="col-xs-4 control-label">
                    <?php echo t("Restaurant phone")?>
                </label>
                <div class="col-xs-8">
                    <?php echo CHtml::textField('restaurant_phone',
		  isset($data['restaurant_phone'])?$data['restaurant_phone']:""
		  ,array(
		  'class'=>'grey-fields full-width',
		  ))?>
                  <!--<input type="text" class="form-control" id="phone" name="phone" placeholder="(XXX) XXX-XXXX" data-bv-phone="true" data-bv-phone-country="US" required="" data-bv-field="phone">-->
                  <i class="form-control-feedback" data-bv-icon-for="phone" style="display: none;"></i>
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="restaurant_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
                <small class="help-block" data-bv-validator="phone" data-bv-for="restaurant_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid phone number</small>
                </div>
              </div>  

                
            <div class="form-group has-feedback">
                <label for="first_name" class="col-xs-4 control-label"><?php echo t("Contact name")?></label>
                <div class="col-xs-8">
                    <?php echo CHtml::textField('contact_name',
		  isset($data['contact_name'])?$data['contact_name']:""
		  ,array(
		  'class'=>'grey-fields full-width',
		  'data-validation'=>"required"
		  ))?>  
                  <!--<input type="text" class="form-control" id="first_name" name="first_name" placeholder="John Doe" required="" data-bv-field="first_name">-->
                  <i class="form-control-feedback" data-bv-icon-for="first_name" style="display: none;"></i>
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="first_name" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
              </div>
                
               <div class="form-group has-feedback">
                <label for="contact_phone" class="col-xs-4 control-label">
                    <?php echo t("Contact phone")?>
                </label>
                <div class="col-xs-8">
                    <?php echo CHtml::textField('contact_phone',
                                isset($data['contact_phone'])?$data['contact_phone']:""
                                ,array(
                                'class'=>'grey-fields full-width mobile_inputs',
                                'data-validation'=>"required"
                                ));
                    ?>   
                  <!--<input type="text" class="form-control" id="phone" name="phone" placeholder="(XXX) XXX-XXXX" data-bv-phone="true" data-bv-phone-country="US" required="" data-bv-field="phone">-->
                  <i class="form-control-feedback" data-bv-icon-for="contact_phone" style="display: none;"></i>
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="contact_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small>
                <small class="help-block" data-bv-validator="phone" data-bv-for="contact_phone" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid phone number</small>
                </div>
              </div>               
                
            
            <div class="form-group has-feedback">
                <label for="contact_email" class="col-xs-4 control-label">
                    <?php echo t("Contact email")?>
                </label>
                <div class="col-xs-8">
                    <?php echo CHtml::textField('contact_email',
		  isset($data['contact_email'])?$data['contact_email']:""
		  ,array(
		  'class'=>'grey-fields full-width',
		  'data-validation'=>"email"
		  ))?>   
                  <!--<input type="email" class="form-control" id="email" name="email" placeholder="jdoe@gmail.com" required="" data-bv-field="email">-->
                  <i class="form-control-feedback" data-bv-icon-for="contact_email" style="display: none;"></i>
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="emailAddress" data-bv-for="contact_email" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a valid email address</small><small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
              </div>
                
              <div class="form-group has-feedback">
                <!--<label for="company" class="col-xs-4 control-label">-->
                    <!--Store Name-->
                <!--</label>-->
                <div class="col-xs-8">
                  <!--<input type="text" class="form-control" id="company" name="company" placeholder="Restaurant name" required="" data-bv-field="company"><i class="form-control-feedback" data-bv-icon-for="company" style="display: none;"></i>-->
                  <!--<span class="help-block"></span>-->
                <small class="help-block" data-bv-validator="notEmpty" 
                       data-bv-for="company" data-bv-result="NOT_VALIDATED" style="display: none;">
                    <?php echo t("Important: Please enter your correct email. we will sent an activation code to your email")?>
                </small>
                </div>
              </div> 
                
               <div class="form-group has-feedback">
                    <label for="street" class="col-xs-4 control-label">
                        <?php echo t("Street address")?>
                    </label>
                <div class="col-xs-8">
                     <?php echo CHtml::textField('street',
		  isset($data['street'])?$data['street']:""
		  ,array(
		  'class'=>'grey-fields full-width',
		  'data-validation'=>"required"
		  ))?>    
                  <!--<input type="text" class="form-control" id="street" name="street" placeholder="123 Main St" required="" data-bv-field="street"><i class="form-control-feedback" data-bv-icon-for="street" style="display: none;"></i>-->
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="street" data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a value</small></div>
              </div>               
              
            <div class="form-group has-feedback">
                <label for="city" class="col-xs-4 control-label">
                    <?php echo t("City")?>
                </label>
                <div class="col-xs-8">
                    <?php echo CHtml::textField('city',
		  isset($data['city'])?$data['city']:""
		  ,array(
		  'class'=>'grey-fields full-width',
		  'data-validation'=>"required"
		  ))?>   
                  <!--<input type="text" class="form-control" id="city" name="city" placeholder="Palo Alto" required="" data-bv-field="city"><i class="form-control-feedback" data-bv-icon-for="city" style="display: none;"></i>-->
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="city" data-bv-result="NOT_VALIDATED" style="display: none;">
                    Please enter a value
                </small></div>
              </div>  
                
              <div class="form-group has-feedback">
                <label for="post_code" class="col-xs-4 control-label">
                    <?php echo t("Post code/Zip code")?>
                </label>
                <div class="col-xs-8">
                    <?php echo CHtml::textField('post_code',
                            isset($data['post_code'])?$data['post_code']:""
                            ,array(
                            'class'=>'grey-fields full-width',
                            'data-validation'=>"required"
                          ));
                    ?>  
                  <!--<input type="text" class="form-control" id="city" name="city" placeholder="Palo Alto" required="" data-bv-field="city"><i class="form-control-feedback" data-bv-icon-for="city" style="display: none;"></i>-->
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="post_code" data-bv-result="NOT_VALIDATED" style="display: none;">
                    Please enter a value
                </small>
                </div>
              </div>   

              <div class="form-group has-feedback">
                <label for="country_code" class="col-xs-4 control-label">
                    <?php echo t("Country")?>
                </label>
                <div class="col-xs-8">
                    
                     <?php echo CHtml::dropDownList('country_code',
                                getOptionA('merchant_default_country'),
                                (array)Yii::app()->functions->CountryListMerchant(),          
                                array(
                                'class'=>'grey-fields full-width',
                                'data-validation'=>"required"
                            ));
                     ?> 
                    
                  <select id="00N1a000006s8Mz" name="00N1a000006s8Mz" class="form-control" required="" data-bv-field="00N1a000006s8Mz">
                    <option selected="" disabled="" hidden="" value=""></option>
                    
                    <option value="Atlanta">Atlanta</option>
                    
                    <option value="Austin">Austin</option>
                    
                    <option value="Bellevue">Bellevue</option>
                    
                    <option value="Boston">Boston</option>
                    
                    <option value="Brooklyn">Brooklyn</option>
                   
                    <option value="Juneau">Juneau</option>
                    
                    <option value="LA Valley">LA Valley</option>
                    
                    <option value="Los Angeles">Los Angeles</option>
                    
                    
                    <option value="Washington, D.C.">Washington, D.C.</option>
                    
                    <option value="OTHER">OTHER</option>
                  </select>
                    
                    
                    <i class="form-control-feedback" data-bv-icon-for="00N1a000006s8Mz" style="display: none;">
                        
                    </i>
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="00N1a000006s8Mz" data-bv-result="NOT_VALIDATED" style="display: none;">
                    Please enter a value
                </small>
                </div>
              </div>  
              
                
                
            <div class="form-group has-feedback">
                <label for="state" class="col-xs-4 control-label">
                    <?php echo t("State/Region")?>
                </label>
                <div class="col-xs-8">
                    
                     <?php echo CHtml::textField('state',
		  isset($data['state'])?$data['state']:""
		  ,array(
		  'class'=>'grey-fields full-width',
		  'data-validation'=>"required"
		  ))?> 
                    
                  <select id="00N1a000006s8Mz" name="00N1a000006s8Mz" class="form-control" required="" data-bv-field="00N1a000006s8Mz">
                    <option selected="" disabled="" hidden="" value=""></option>
                    
                    <option value="Atlanta">Atlanta</option>
                    
                    <option value="Austin">Austin</option>
                    
                    <option value="Bellevue">Bellevue</option>
                    
                    <option value="Boston">Boston</option>
                    
                    <option value="Brooklyn">Brooklyn</option>
                    
                    <option value="Charlotte">Charlotte</option>
                    
                    <option value="Chicago">Chicago</option>
                    
                    <option value="Columbus">Columbus</option>
                    
                    
                    
                    
                    
                    <option value="Vancouver">Vancouver</option>
                    
                    <option value="Washington, D.C.">Washington, D.C.</option>
                    
                    <option value="OTHER">OTHER</option>
                  </select>
                    
                    
                    <i class="form-control-feedback" data-bv-icon-for="state" style="display: none;">
                        
                    </i>
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="state" data-bv-result="NOT_VALIDATED" style="display: none;">
                    Please enter a value
                </small>
                </div>
              </div>    
               
                
               <div class="form-group has-feedback">
                <label for="cuisine" class="col-xs-4 control-label">
                    <?php echo t("Cuisine")?>
                </label>
                <div class="col-xs-8">
                    <?php 
                        $cuisine_list=Yii::app()->functions->Cuisine(true);
                        $cuisine_1='';
                        if ( Yii::app()->functions->multipleField()==2){
                                foreach ($cuisine_list as $cuisine_id=>$val) {
                                         $cuisine_info=Yii::app()->functions->GetCuisine($cuisine_id);
                                         $cuisine_json['cuisine_name_trans']=!empty($cuisine_info['cuisine_name_trans'])?
                                 json_decode($cuisine_info['cuisine_name_trans'],true):'';
                                 $cuisine_1[$cuisine_id]=qTranslate($val,'cuisine_name',$cuisine_json);
                                }
                                $cuisine_list=$cuisine_1;
                        }
                        echo CHtml::dropDownList('cuisine[]',
                            isset($data['cuisine'])?(array)json_decode($data['cuisine']):"",
                            (array)$cuisine_list,          
                            array(
                            'class'=>'full-width chosen',
                            'multiple'=>true,
                            'data-validation'=>"required"  
                        ));
                    ?>   
                  <input type="text" class="form-control" id="street" name="cuisine" placeholder="123 Main St" required="" data-bv-field="street">
                  <i class="form-control-feedback" data-bv-icon-for="cuisine" style="display: none;"></i>
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="cuisine" data-bv-result="NOT_VALIDATED" style="display: none;">
                    Please enter a value
                </small>
                </div>
              </div>  
            
            <div class="form-group has-feedback">
                <label for="service" class="col-xs-4 control-label">
                    <?php echo t("Services Pick Up or Delivery?")?>
                </label>
                <div class="col-xs-8">
                     <?php echo CHtml::dropDownList('service',
                                isset($data['service'])?$data['service']:"",
                                (array)Yii::app()->functions->Services(),          
                                array(
                                'class'=>'grey-fields full-width',
                                'data-validation'=>"required"
                            ));
                     ?>  
                  <input type="text" class="form-control" id="company" name="company" placeholder="Restaurant name" required="" data-bv-field="company">
                  <i class="form-control-feedback" data-bv-icon-for="company" style="display: none;"></i>
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="service" data-bv-result="NOT_VALIDATED" style="display: none;">
                    Please enter a value
                </small>
                </div>
              </div>
                
            <div class="content-section-headings">
                <h3 class="content-section-header merchant-title">
                    <?php echo t('Login Information')?>
                </h3>
                <h5 class="content-section-subheader">
                    
                </h5>
              </div>    
                
             <div class="form-group has-feedback">
                <label for="username" class="col-xs-4 control-label">
                    <?php echo t("Username")?>
                </label>
                <div class="col-xs-8">
                    <?php echo CHtml::textField('username',
                            ''
                            ,array(
                            'class'=>'grey-fields full-width',
                            'data-validation'=>"required"
                          ));
                    ?>
                  <!--<input type="text" class="form-control" id="company" name="company" placeholder="Restaurant name" required="" data-bv-field="company"><i class="form-control-feedback" data-bv-icon-for="company" style="display: none;"></i>-->
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="username" data-bv-result="NOT_VALIDATED" style="display: none;">
                    Please enter a value
                </small>
                </div>
              </div>   
                
             <div class="form-group has-feedback">
                <label for="password" class="col-xs-4 control-label">
                    <?php echo t("Password")?>
                </label>
                <div class="col-xs-8">
                    <?php echo CHtml::passwordField('password',
                                ''
                                ,array(
                                'class'=>'grey-fields full-width',
                                'data-validation'=>"required"
                                ));
                    ?>
                  <!--<input type="text" class="form-control" id="company" name="company" placeholder="Restaurant name" required="" data-bv-field="company"><i class="form-control-feedback" data-bv-icon-for="company" style="display: none;"></i>-->
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="password" data-bv-result="NOT_VALIDATED" style="display: none;">
                    Please enter a value
                </small>
                </div>
              </div>                   
                

            <div class="form-group has-feedback">
                <label for="cpassword" class="col-xs-4 control-label">
                    <?php echo t("Confirm Password")?>
                </label>
                <div class="col-xs-8">
                    <?php echo CHtml::passwordField('cpassword',
		  ''
		  ,array(
		  'class'=>'grey-fields full-width',
		  'data-validation'=>"required"
		  ))?>    
                  <!--<input type="text" class="form-control" id="company" name="company" placeholder="Restaurant name" required="" data-bv-field="company"><i class="form-control-feedback" data-bv-icon-for="company" style="display: none;"></i>-->
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="cpassword" data-bv-result="NOT_VALIDATED" style="display: none;">
                    Please enter a value
                </small>
                </div>
              </div>   
              
                
              <?php if ($kapcha_enabled==2):?>  
              <div class="form-group has-feedback">
                  
                <div id="kapcha-1"></div>
                
              </div>
              <?php endif;?>  

            <?php if ( $terms_merchant=="yes"):?>
            <?php $terms_link=Yii::app()->functions->prettyLink($terms_merchant_url);?>
            <div class="form-group has-feedback">
                
                <label for="first_name" class="col-xs-4 control-label">
                    <!--Contact Name-->
                    <?php 
                        echo CHtml::checkBox('terms_n_condition',false,array(
                                'value'=>2,
                                'class'=>"",
                                'data-validation'=>"required"
                        ));
                        echo " " . t("I Agree To") . " <a href=\"$terms_link\" target=\"_blank\">".t("The Terms & Conditions") . "</a>";
		  ?>
                </label>
                
                <?php if ( 0 ) { ?>
                <div class="col-xs-8">
                    <?php 
		  echo CHtml::checkBox('terms_n_condition',false,array(
		   'value'=>2,
		   'class'=>"",
		   'data-validation'=>"required"
		  ));
		  echo " ". t("I Agree To")." <a href=\"$terms_link\" target=\"_blank\">".t("The Terms & Conditions")."</a>";
		  ?> 
                  <!--<input type="text" class="form-control" id="first_name" name="first_name" placeholder="John Doe" required="" data-bv-field="first_name">-->
                  <i class="form-control-feedback" data-bv-icon-for="first_name" style="display: none;"></i>
                  <span class="help-block"></span>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="first_name" data-bv-result="NOT_VALIDATED" style="display: none;">
                    Please enter a value
                </small>
                </div>
                <?php } ?>
                
            </div>
            <?php endif;?>
            
                

              
              
            
              
              <div class="form-group">
                <div class="col-xs-offset-3 col-xs-7">
                  <button type="submit" class="btn btn-lg btn-primary btn-block">
                    <?php echo t("Next")?>
                  </button>
                </div>
              </div>
              
                <?php if ( 0 ) { ?>  
                <br>
                <a id="continue-existing-application-button" data-toggle="modal" class="modal-button" data-target="#continue-application-modal">Already started signing up?</a>
                <hr>
                <div class="terms">
                    By clicking the “Become a Dasher” button above, I consent to receive emails, calls, 
                    or SMS messages including by automated telephone dialing system from DoorDash to my
                    email or phone number(s) above for informational and/or marketing purposes. Consent
                    to receive messages is not a condition to make a purchase or sign up. I have read and
                    understand the relevant <a href="https://www.doordash.com/privacy" target="_blank">
                        Privacy Statement.
                    </a> 
                </div>
                <?php } ?>  
              
              
            </form>
            <?php } ?>  
              
              
              
              
              
            <br>
          </div>

          <div class="col-sm-6 col-sm-pull-6 delivery-connect">
            <h3 class="merchant-title">
                Delivery Connects
            </h3>
            <p>
              Redefine direct-to-consumer with delightful delivery. By listing on the DoorDash
              marketplace, you’re instantly integrating efficiency into your business.
            </p>
            <p>Setup is a snap - just give us a few details and you’ll be on your way to increased
              exposure, boosted order volume, not to mention being part of a growing DoorDash family.
            </p>

            <br>

            <div class="media benefit-list-item">
              <div class="pull-left">
                <img class="media-object merchant-benefit-icon" src="<?php echo Widgets::driverImagesPath(); ?>apply-icon-1.png">
              </div>
              <div class="media-body">
                <h5 class="media-heading merchant-title">Expand your reach</h5>
                <p>Double your to-go sales while reaching new demographics.</p>
              </div>
            </div>

            <div class="media benefit-list-item">
              <div class="pull-left">
                <img class="media-object merchant-benefit-icon" src="<?php echo Widgets::driverImagesPath(); ?>apply-icon-2.png">
              </div>
              <div class="media-body">
                <h5 class="media-heading merchant-title">Always professional</h5>
                <p>Our couriers are vetted and trained to be the best.</p>
              </div>
            </div>

            <div class="media benefit-list-item">
              <div class="pull-left">
                <img class="media-object merchant-benefit-icon" src="<?php echo Widgets::driverImagesPath(); ?>apply-icon-3.png">
              </div>
              <div class="media-body">
                <h5 class="media-heading merchant-title">We've got your back</h5>
                <p>Something come up? Talk to a real person. We’re here for you.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      
    <?php if ( 0 ) { ?>  
    <div class="content-section content-section-alternate">
      <div class="container">
        <div class="content-section-headings">
          <h3 class="content-section-header merchant-title">Owners Approve</h3>
        </div>

        <div class="row">
          <div class="col-sm-6 merchant-owner-testimonial-column">
            <div class="merchant-owner-testimonial">
              <p>"We've been so happy with it that we want to add our other restaurants to the site
              as well! I would honestly recommend DoorDash over all of our other delivery/online
              ordering services that we use because of the great results we've seen."</p>
              <p class="text-right">
                <span class="merchant-title">Jessica Cheung</span><br>
                Sushi 88 and Ramen, Pearl Cafe
              </p>
            </div>

            <div class="merchant-owner-testimonial">
              <p>"The clear organization of DoorDash is what made me agree to try it out. And it's
              turned out great—the communication, professionalism, organization; they're all really
              great attributes of DoorDash [...] That's why I actually only use DoorDash."</p>
              <p class="text-right">
                <span class="merchant-title">Lumi Gardner</span><br>
                Fuki Sushi
              </p>
            </div>
          </div>

          <div class="col-sm-6 merchant-owner-testimonial-column">
            <div class="merchant-owner-testimonial">
              <p>"Our to-go sales have doubled and our customers--both regular and new--have had nothing
              but good things to say about the service. They're prompt in picking up the orders and
              their drivers are pleasant and professional."</p>
              <p class="text-right">
                <span class="merchant-title">Joe Antuzzi</span><br>
                Il Postale
              </p>
            </div>

            <div class="merchant-owner-testimonial">
              <p>"Partnering with DoorDash has boosted our business tremendously. The people are
              great--drivers, support reps, you name it.&nbsp; DoorDash has allowed us to build a bridge
              of convenience, efficiency, and accessibility to our customers."</p>
              <p class="text-right">
                <span class="merchant-title">Onna Hui</span><br>
                Project Juice
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

      
      
      
    <div class="content-section content-section-alternate">
      <div class="container">
        <div class="content-section-headings">
          <h3 class="content-section-header merchant-title">Success Stories</h3>
        </div>

        <p class="text-center">
          Read more about our partners and the DoorDash community in our monthly publication.
        </p>
        <p class="text-center">
          <a href="#" class="btn btn-lg btn-primary doordash-stories-button">Read DoorDash Stories</a>
        </p>
      </div>
    </div>
     <?php } ?> 
      
      
      
      
  </div>
</div>

    
    