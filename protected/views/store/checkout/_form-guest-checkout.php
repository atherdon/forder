<h2 class="inner"> 
    <?php echo Yii::t( "default", "Personal Details" )?> 
</h2>

<div class="form-group">
    <label>
        First name
    </label>
    <?php echo CHtml::textField('first_name', '', array(
            'class'           => 'form-control',
            'placeholder'     => Yii::t("default", "First Name"),
            'data-validation' => "required"
    ))?>
    
</div>

<div class="form-group">
    <label>
        Last name
    </label>
    <?php echo CHtml::textField('last_name', '', array(
            'class'           => 'form-control',
            'placeholder'     => Yii::t("default", "Last Name"),
            'data-validation' => "required"
   ))?> 
    
</div>

<div class="form-group">
    <label>
        Street
    </label>
    <?php 
        if ( !empty( $client_info ) ) {
        $value1 = ( array_key_exists( 'street', $client_info ) ) ? $client_info['street'] : '' ;
        echo CHtml::textField('street', $value1, array(
            'class'           => 'form-control',
            'placeholder'     => Yii::t("default", "Street"),
            'data-validation' => "required"
   ));
        }?> 
    
</div>

<div class="form-group">
    <label>City</label>
    <?php 
        if ( !empty( $client_info ) ) {
        $value2 = ( array_key_exists( 'city', $client_info ) ) ? $client_info['city'] : '' ;
        echo CHtml::textField('city', $value, array(
            'class'           => 'form-control',
            'placeholder'     => Yii::t("default", "City"),
            'data-validation' => "required"
   ));
        }?> 
    
</div>

<div class="form-group">
    <label>State</label>
    <?php 
        if ( !empty( $client_info ) ) {
        $value3 = ( array_key_exists( 'state', $client_info ) ) ? $client_info['state'] : '' ;
        echo CHtml::textField('state', $value3, array(
            'class'           => 'grey-fields full-width',
            'placeholder'     => Yii::t("default", "State"),
            'data-validation' => "required"
   ));
        }?> 
   
</div>

<div class="form-group">
    <label>Zip code</label>
    <?php 
        if ( !empty( $client_info ) ) {
        $value4 = ( array_key_exists( 'zipcode', $client_info ) ) ? $client_info['zipcode'] : '' ;
        echo CHtml::textField('zipcode', $value4, array(
            'class'       => 'form-control',
            'placeholder' => Yii::t("default", "Zip code")
   ));
        }?>    
    
</div>

<div class="form-group">
    <label>
        Apartment suite, unit number, or company name
    </label>
    <?php 
        if ( !empty( $client_info ) ) {
        $value5 = ( array_key_exists( 'location_name', $client_info ) ) ? $client_info['location_name'] : '' ;
        echo CHtml::textField('location_name', $value5, array(
            'class'       => 'form-control',
            'placeholder' => Yii::t("default", "Apartment suite, unit number, or company name"),   
  ));
        }?>
    
</div>
<?php //die(); ?>
<div class="form-group form-phone-element">
    <label>
        Mobile Number
    </label>
   <?php  //$client_info['contact_phone'] = '050 9200 65 12';
        if ( !empty( $client_info ) ) {
        $value6 = ( array_key_exists( 'contact_phone', $client_info ) ) ? $client_info['contact_phone'] : '' ;
        echo CHtml::textField('contact_phone', $value6, array(
            'class'           => 'form-control mobile_inputs',
            'placeholder'     => Yii::t("default", "Mobile Number"),
            'data-validation' => "required"  
        ));
        } 
//        die();
        ?> 
    
</div>

<div class="form-group">
    <label>
        Delivery instructions
    </label>
   <?php 
        echo CHtml::textField('delivery_instruction', '', array(
            'class'       => 'form-control',
            'placeholder' => Yii::t("default", "Delivery instructions")   
))?> 
   
</div>

<div class="form-group">
    <label>
        Email address
    </label>
    <?php 
        echo CHtml::textField('email_address', '', array(
            'class'       => 'form-control',
            'placeholder' => Yii::t("default", "Email address"),   
      ))?> 
    
</div>

<div class="form-group">
    <label>
        Password ( Optional )
    </label>
    <?php 
        echo CHtml::passwordField('password', '', array(
            'class'       => 'form-control',
            'placeholder' => Yii::t("default", "Password"),   
     ))?>
    
</div>   

<br /> <br />