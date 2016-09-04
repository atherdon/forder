
<div class="credit_card_wrap">    
<form id="frm-creditcard" class="frm-creditcard" method="POST" onsubmit="return false;">

    <?php FunctionsV3::sectionHeader('Credit Card information')?>
    
     <a href="javascript:;" class="cc-add orange-text">
     [ <i class="ion-ios-compose-outline"></i> <?php echo t("Add new card")?>]
     </a>

    
    
    <?php FunctionsV3::sectionHeader('select credit card below')?> 
    <!--<ul class="uk-list uk-list-striped uk-list-cc">    

    </ul>-->
    
    
    <table class="table table-striped">
    <tbody class="uk-list-cc"> 
    </tbody>
    </table>

    
    
    <div class="form-group">
        <label>
            <?php echo Yii::t("default","New Card")?>
        </label>
        <?php echo CHtml::hiddenField('action', 'addCreditCard')?>
        <?php echo CHtml::hiddenField('currentController', 'store')?>
        
        <?php echo CHtml::textField('card_name','',array(
                'class'           => 'form-control',
                'placeholder'     => Yii::t("default","Card name"),
                'data-validation' => "required"  
          ))?>
        <!--<input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">-->
    </div>
    
    <div class="form-group">
        <label>
            Card number
        </label>
        <?php echo CHtml::textField('credit_card_number', '', array(
                    'class'           => 'numeric_only form-control',
                    'placeholder'     => Yii::t("default","Credit Card Number"),
                    'data-validation' => "required",
                    'maxlength'       => 16
        ))?>   
        
        
        <!--<input type="text" id="card_number" name="card_number" class="form-control" placeholder="Card number">-->
    </div>
    <div class="row">
        <div class="col-md-6">
            <label>
                Expiration date
            </label>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        
                        <?php echo CHtml::dropDownList('expiration_month', '', 
                                Yii::app()->functions->ccExpirationMonth()
                                ,array(
                                    'class'           => 'form-control',
                                    'placeholder'     => Yii::t("default","Exp. month"),
                                    'data-validation' => "required"  
                                ))
                        ?>  
                        
                        <!--<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="mm">-->
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <?php echo CHtml::dropDownList('expiration_yr','',
                                        Yii::app()->functions->ccExpirationYear()
                                        ,array(
                                            'class'           => 'form-control',
                                            'placeholder'     => Yii::t("default","Exp. year") ,
                                            'data-validation' => "required"  
                                        ))
                        ?> 
                        <!--<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="yyyy">-->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label>
                    Security code
                </label>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                              <?php echo CHtml::textField('cvv','',array(
                                            'class'           => 'form-control',
                                            'placeholder'     => Yii::t("default", "CVV"),
                                            'data-validation' => "required",
                                            'maxlength'       => 4
                                           ))
                                ?>   
                            
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        
                        <img src="<?php echo Widgets::quickImagesPath(); ?>icon_ccv.gif" width="50" height="29" alt="ccv">
                        <small>
                            Last 3 digits
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End row -->
                                        
     <div class="form-group">
        <label>
            <?php echo Yii::t("default","Billing Address") ?>
        </label>
         <?php echo CHtml::textField('billing_address','',array(
                    'class'           => 'form-control',
                    'placeholder'     => Yii::t("default","Billing Address"),
                    'data-validation' => "required"  
                ));
         ?> 
        <!--<input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">-->
    </div>
    <input type="submit" value="<?php echo t("Add Credit Card")?>" class="btn_full">
    
                                        
    
    <?php if ( 0 ) { ?>
    
    <div class="cc-add-wrap">
      <p class="bold"><?php echo Yii::t("default","New Card")?></p>
      <?php echo CHtml::hiddenField('action','addCreditCard')?>
      <?php echo CHtml::hiddenField('currentController','store')?>

      <div class="row top10">
        <div class="col-md-10">
          <?php echo CHtml::textField('card_name','',array(
           'class'=>'grey-fields full-width',
           'placeholder'=>Yii::t("default","Card name"),
           'data-validation'=>"required"  
          ))?>
         </div> 
      </div>

      
      
      
     <div class="row top10">
        <div class="col-md-10">
            <?php echo CHtml::textField('credit_card_number','',array(
               'class'=>'numeric_only grey-fields full-width',
               'placeholder'=>Yii::t("default","Credit Card Number"),
               'data-validation'=>"required",
               'maxlength'=>16
              ))?>     
         </div> 
     </div>
     <div class="row top10">
        <div class="col-md-10">
        <?php echo CHtml::dropDownList('expiration_month','',
          Yii::app()->functions->ccExpirationMonth()
          ,array(
           'class'=>'grey-fields full-width',
           'placeholder'=>Yii::t("default","Exp. month"),
           'data-validation'=>"required"  
          ))?>     
         </div> 
     </div> 
      
      
    <div class="row top10">
    <div class="col-md-10">
     <?php echo CHtml::dropDownList('expiration_yr','',
      Yii::app()->functions->ccExpirationYear()
      ,array(
       'class'=>'grey-fields full-width',
       'placeholder'=>Yii::t("default","Exp. year") ,
       'data-validation'=>"required"  
      ))?>     
    </div> 
    </div>

      
    <div class="row top10">
    <div class="col-md-10">
    <?php echo CHtml::textField('cvv','',array(
       'class'=>'grey-fields full-width',
       'placeholder'=>Yii::t("default","CVV"),
       'data-validation'=>"required",
       'maxlength'=>4
      ))?>     
    </div> 
    </div>   
      
      
      
      
      
      
      
      
      
      
      

    <div class="row top10">
    <div class="col-md-10">
    
     </div> 
    </div>

    <div class="top25">
    <input type="submit" value="<?php echo t("Add Credit Card")?>" class="green-button medium inline block">
    </div>

    </div> <!--cc-add-wrap-->
    <?php  } ?>
    
    
</form>
</div> <!--credit_card_wrap-->