<div class="row">
    <div class="col-md-8 col-lg-offset-3">
        
        <form class="krms-forms" id="frm-cc"  onsubmit="return false;">

            <?php 
            
            echo CHtml::hiddenField('action','updateClientCC'); 
            if ( isset( $data['cc_id'] ) ){
                echo CHtml::hiddenField( 'cc_id', $data['cc_id'] );
            }
            ?>

            <div class="row">
            <div class="col-md-6 col-sm-6">
            <div class="form-group">
                <label>
                    <?php echo t("Card name")?>
                </label>
                <?php 
                      echo CHtml::textField('card_name',
                                isset($data['card_name']) ? $data['card_name'] : '',
                                array(
                                    'class'           => 'form-control',
                                    'data-validation' => "required",
                                    'placeholder'     => "First and last name"
                            ));
                      ?>  
            </div>
            </div>
            </div>   
            
            <div class="row">
            <div class="col-md-6 col-sm-6">    
            <div class="form-group">
                <label>
                    <?php echo t("Credit Card Number")?>
                </label>
                 <?php 
                    echo CHtml::textField('credit_card_number',
                        isset($data['credit_card_number'])?$data['credit_card_number']:''
                        ,
                        array(
                        'class'=>'form-control numeric_only',
                        'data-validation'=>"required",
                        'maxlength'=>16
                    ));
                    ?>
            </div>
            </div>
            </div>  
            
            <div class="row">
                <div class="col-md-6">
                    <label>
                        Expiration date
                    </label>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <?php echo CHtml::dropDownList('expiration_month',
                                            isset($data['expiration_month'])?$data['expiration_month']:''
                                           , 
                                            Yii::app()->functions->ccExpirationMonth()
                                            ,array(
                                             'class'          => 'form-control',
                                             'placeholder'    => Yii::t("default","Exp. month"),
                                             'data-validation' => "required"  
                                        ));
                                ?>
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <?php echo CHtml::dropDownList('expiration_yr',
                                            isset($data['expiration_yr'])?$data['expiration_yr']:''
                                            ,Yii::app()->functions->ccExpirationYear()
                                            ,array(
                                                'class'           => 'form-control',
                                                'placeholder'     => Yii::t("default","Exp. year") ,
                                                'data-validation' => "required"  
                                        ));
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
           </div>   
                
                
          <div class="row">      
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label><?php echo t("CVV")?></label>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <?php 
                                        echo CHtml::textField('cvv',
                                            isset($data['cvv'])?$data['cvv']:''
                                            ,
                                            array(
                                            'class'           => 'form-control',
                                            'data-validation' => "required"
                                        ));
                                    ?>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <img src="<?php echo Widgets::quickImagesPath(); ?>icon_ccv.gif" width="50" height="29" alt="ccv">
                                <small>
                                    Last 3 digits
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
           </div>     
           <div class="row">
            <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>
                            <?php echo t("Billing Address")?>
                        </label>
                        <?php 
                            echo CHtml::textField('billing_address',
                                    isset($data['billing_address'])?$data['billing_address']:'',
                                    array(
                                      'class'           => 'form-control',
                                      'data-validation' => "required"
                                    )
                                );
                        ?>    
                    </div>
                     
                     
                     <button type="submit" class="btn_full">
                        <?php echo t("Submit")?>
                    </button>

                    <a class="btn_full_outline" href="<?php echo Yii::app()->createUrl('/store/profile/?tab=4')?>">
                        <i class="icon-right"></i>
                        <?php echo t("Back")?>
                    </a>
            
                    
                </div>
                
            </div><!--End row -->

        </form>
        
    </div>
</div>    