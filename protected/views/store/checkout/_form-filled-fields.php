
<h2 class="inner"> 
    <?php echo Yii::t( "default", "Address" )?> 
</h2>

 <?php if ( isset( $is_guest_checkout ) ){ ?>	     

        <div class="form-group">
            <label>First name</label>
            <?php echo CHtml::textField('first_name','',array(
                    'class'=>'form-control',
                    'placeholder'=>Yii::t("default","First Name"),
                    'data-validation'=>"required"
              ))?>
        </div>


        <div class="form-group">
            <label>Last name</label>
            <?php echo CHtml::textField('last_name','',array(
                    'class'=>'form-control',
                    'placeholder'=>Yii::t("default","Last Name"),
                    'data-validation'=>"required"
              ))?>
        </div>
              

<?php } ?> <!--$is_guest_checkout-->
             
             
             
<?php if ( $website_enabled_map_address==2 ):?>

   <div class="form-group">
       <?php Widgets::AddressByMap()?>
   </div>

<?php endif;?>

<?php //var_dump( $address_book ); die();  ?>

 <?php if ( $address_book ) { ?>


    <div class="row">
        <div class="col-md-10 col-sm-10">
            <div class="form-group">
                <label>Address book</label>
                <?php 
               $address_list=Yii::app()->functions->addressBook(Yii::app()->functions->getClientId());
               echo CHtml::dropDownList('address_book_id',$address_book['id'],
               (array)$address_list,array(
                  'class'=>"form-control"
               ));
        ?>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">

            <a href="javascript:;" class="edit_address_book block top10">
                <i class="ion-compose"></i> <?php echo t("Edit")?>
            </a>

        </div>
    </div>

<?php } ?>



    <div class="form-group">
        <label>
            <?php echo Yii::t("default","Street") ?>
        </label>
        <?php echo CHtml::textField('street', isset($client_info['street'])?$client_info['street']:'' ,array(
	               'class'=>'form-control',
	               'placeholder'=>Yii::t("default","Street"),
	               'data-validation'=>"required"
	              ))?>
    </div>

    <div class="form-group">
        <label><?php echo Yii::t("default","City") ?></label>
        <?php echo CHtml::textField('city',
	             isset($client_info['city'])?$client_info['city']:''
	             ,array(
	               'class'=>'form-control',
	               'placeholder'=>Yii::t("default","City"),
	               'data-validation'=>"required"
	              ))?>

    </div>

    <div class="form-group">
        <label><?php echo Yii::t("default","State") ?></label>
         <?php echo CHtml::textField('state',
                 isset($client_info['state'])?$client_info['state']:''
                 ,array(
                 'class'=>'form-control',
	               'placeholder'=>Yii::t("default","State"),
	               'data-validation'=>"required"
	              ))?>

    </div>

    <div class="form-group">
        <label><?php echo Yii::t("default","Zip code") ?></label>
        <?php echo CHtml::textField('zipcode',
                  isset($client_info['zipcode'])?$client_info['zipcode']:''
                  ,array(
	               'class'=>'form-control',
	               'placeholder'=>Yii::t("default","Zip code")
	              ))?>
    </div>

    <div class="form-group">
        <label>
            <?php echo Yii::t("default","Apartment suite, unit number, or company name") ?>
        </label>
        <?php echo CHtml::textField('location_name',
                 isset($client_info['location_name'])?$client_info['location_name']:''
                 ,array(
	               'class'=>'form-control',
	               'placeholder'=>Yii::t("default","Apartment suite, unit number, or company name")	               
	              ))?>
    </div>

    <div class="form-group">
        <label>
            <?php echo Yii::t("default","Mobile Number") ?>
        </label>
        <?php echo CHtml::textField('contact_phone',
                 isset($client_info['contact_phone'])?$client_info['contact_phone']:''
                 ,array(
	               'class'=>'form-control mobile_inputs ',
	               'placeholder'=>Yii::t("default","Mobile Number"),
	               'data-validation'=>"required"  
	              ))?>


    </div>

    <div class="form-group">
        <label>
            <?php echo Yii::t("default","Delivery instructions") ?>
        </label>
        <?php echo CHtml::textField('delivery_instruction','',array(
                      'class'=>'form-control',
                      'placeholder'=>Yii::t("default","Delivery instructions")   
                     ))?>
    </div>

    <div class="form-group">
        <label>
            <?php //echo Yii::t("default","Save to my address book") ?>
            <?php
            echo CHtml::checkBox('saved_address',false,array('class'=>"icheck",'value'=>2));
            echo " ".t("Save to my address book");
            ?>        
        </label>
         
    </div>


    <?php if (isset($is_guest_checkout)):?>

        <div class="form-group">
            <label><?php echo Yii::t("default","Email address") ?></label>
             <?php echo CHtml::textField('email_address','',array(
                           'class'=>'form-control',
                           'placeholder'=>Yii::t("default","Email address"),              
                          ))?>

            <!--<input type="email" id="email_booking_2" name="email_order" class="form-control" placeholder="Your email">-->
        </div>

    <?php endif;?> 
            
    <?php if (isset($is_guest_checkout)):?>


        <?php FunctionsV3::sectionHeader('Optional')?>

        <div class="form-group">
            <label><?php echo Yii::t("default","Password") ?></label>
             <?php echo CHtml::passwordField('password','',array(
                           'class'=>'form-control',
                           'placeholder'=>Yii::t("default","Password"),               
                          ))?>


        </div>

    <?php endif;?>

           


<?php //endif; ?>