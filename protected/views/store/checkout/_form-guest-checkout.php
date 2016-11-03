<div class="form-group">
    <label>
        First name
    </label>
    <?php echo CHtml::textField('first_name','',array(
            'class'           => 'form-control',
            'placeholder'     => Yii::t("default","First Name"),
            'data-validation' => "required"
    ))?>
    
</div>

<div class="form-group">
    <label>
        Last name
    </label>
    <?php echo CHtml::textField('last_name','',array(
            'class'           => 'form-control',
            'placeholder'     => Yii::t("default","Last Name"),
            'data-validation' => "required"
   ))?> 
    
</div>

<div class="form-group">
    <label>Street</label>
    <?php echo CHtml::textField('street',isIsset($client_info['street']),array(
            'class'=>'form-control',
            'placeholder'=>Yii::t("default","Street"),
            'data-validation'=>"required"
   ))?> 
    
</div>

<div class="form-group">
    <label>City</label>
    <?php echo CHtml::textField('city',isIsset($client_info['city']),array(
            'class'=>'form-control',
            'placeholder'=>Yii::t("default","City"),
            'data-validation'=>"required"
   ))?> 
    
</div>

<div class="form-group">
    <label>State</label>
    <?php echo CHtml::textField('state',isIsset($client_info['state']),array(
            'class'=>'grey-fields full-width',
            'placeholder'=>Yii::t("default","State"),
            'data-validation'=>"required"
   ))?> 
   
</div>

<div class="form-group">
    <label>Zip code</label>
    <?php echo CHtml::textField('zipcode',isIsset($client_info['zipcode']),array(
            'class'=>'form-control',
            'placeholder'=>Yii::t("default","Zip code")
   ))?>    
    
</div>

<div class="form-group">
    <label>Apartment suite, unit number, or company name</label>
    <?php echo CHtml::textField('location_name',isIsset($client_info['location_name']),array(
            'class'=>'form-control',
            'placeholder'=>Yii::t("default","Apartment suite, unit number, or company name"),   
  ))?>
    
</div>

<div class="form-group">
    <label>Mobile Number</label>
   <?php echo CHtml::textField('contact_phone',isIsset($client_info['contact_phone']),array(
            'class'=>'form-control mobile_inputs',
            'placeholder'=>Yii::t("default","Mobile Number"),
            'data-validation'=>"required"  
  ))?> 
    
</div>

<div class="form-group">
    <label>Delivery instructions</label>
   <?php echo CHtml::textField('delivery_instruction','',array(
        'class'=>'form-control',
        'placeholder'=>Yii::t("default","Delivery instructions")   
))?> 
   
</div>

<div class="form-group">
    <label>Email address</label>
    <?php echo CHtml::textField('email_address','',array(
       'class'=>'form-control',
       'placeholder'=>Yii::t("default","Email address"),   
      ))?> 
    
</div>

<h2 class="inner">
    <?php echo t( 'Create Account' )?>
</h2>

<div class="form-group">
    <label>Your full address</label>
    <?php echo CHtml::passwordField('password','',array(
      'class'=>'form-control',
      'placeholder'=>Yii::t("default","Password"),   
     ))?>
    
</div>   