<div class="box-grey rounded" style="margin-top:0;">
    
    <div class="row">
    <div class="col-md-6 col-lg-offset-3">

        <form class="profile-forms forms" id="forms" onsubmit="return false;">

        <?php echo CHtml::hiddenField('action','updateClientProfile')?>
        <?php echo CHtml::hiddenField('currentController','store')?>


            <div class="form-group">
                <label><?php echo t("First Name")?></label>
                <?php 
                      echo CHtml::textField('first_name',$data['first_name'],
                      array(
                        'class'           => 'form-control',
                        'data-validation' => "required"
                      ));
                ?>   

            </div>

            <div class="form-group">
                <label><?php echo t("Last Name")?></label>
                <?php 
                    echo CHtml::textField('last_name',$data['last_name'],
                    array(
                     'class'           => 'form-control',
                    'data-validation'=>"required"
                    ));
                    ?>

            </div>


            <div class="form-group">
                <label><?php echo t("Email address")?></label>
                 <?php 
                      echo CHtml::textField('email',$data['email_address'],
                      array(
                         'class'           => 'form-control',
                        'data-validation'=>"required",
                        'disabled'=>true
                      ));
                      ?> 

            </div>    

            <div class="form-group">
                <label><?php echo t("Contact phone")?></label>
                 <?php 
              echo CHtml::textField('contact_phone',$data['contact_phone'],
              array(
                'class'=>'form-control mobile_inputs',

                'data-validation'=>"required"
              ));
              ?>	  

            </div>    





            <?php 
            $one=Yii::app()->functions->getOptionAdmin('client_custom_field_name1');
            $two=Yii::app()->functions->getOptionAdmin('client_custom_field_name2');
            ?>

            <?php if (!empty($one) || !empty($two)):?>




              <?php if (!empty($one)):?>

                <div class="form-group">
                    <label><?php echo t($one)?></label>
                    <?php 
                        echo CHtml::textField('custom_field1',$data['custom_field1'],
                        array(
                          'class'           => 'form-control',
                          'data-validation'=>"required"
                        ));
                    ?>

                </div>  



              <?php endif;?>

              <?php if (!empty($two)):?>

                <div class="form-group">
                    <label><?php echo t($two)?></label>
                    <?php 
                        echo CHtml::textField('custom_field2',$data['custom_field2'],
                        array(
                         'class'           => 'form-control',
                          'data-validation'=>"required"
                        ));
                    ?>

                </div>    


              <?php endif;?>


            <?php endif;?>



            <div class="form-group">
                <label><?php echo t("Password")?></label>
                  <?php 
              echo CHtml::passwordField('password','',
              array(
                'class'           => 'form-control',
              ));
              ?>

            </div>    

            <div class="form-group">
                <label><?php echo t("Confirm Password")?></label>
                    <?php 
              echo CHtml::passwordField('cpassword','',
              array(
                'class'           => 'form-control',
              ));
              ?>

            </div>    

            <input class="btn_full" type="submit" value="<?php echo t("Save")?>">



        </form>


    </div>
    </div>
    
</div> <!-- box -->