 <h2 class="inner"> 
    <?php echo Yii::t( "default", "Address" )?> 
</h2>
 <?php if (isset($is_guest_checkout)){ ?>	     

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

 <?php if ( $address_book):?>

    <div class="form-group">
        <label>Address book</label>
        <?php 
               $address_list=Yii::app()->functions->addressBook(Yii::app()->functions->getClientId());
               echo CHtml::dropDownList('address_book_id',$address_book['id'],
               (array)$address_list,array(
                  'class'=>"form-control"
               ));
        ?>
        <!--<input type="text" class="form-control" id="firstname_order" name="firstname_order" placeholder="First name">-->
    </div>
    <div class="form-group">
        <label>Last name</label>
        <input type="text" class="form-control" id="lastname_order" name="lastname_order" placeholder="Last name">
    </div>
    <div class="form-group">
        <label>Telephone/mobile</label>
        <input type="text" id="tel_order" name="tel_order" class="form-control" placeholder="Telephone/mobile">
    </div>
<div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="form-group">
                <label>City</label>
                <input type="text" id="city_order" name="city_order" class="form-control" placeholder="Your city">
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="form-group">
                <label>Postal code</label>
                <input type="text" id="pcode_oder" name="pcode_oder" class="form-control" placeholder=" Your postal code">
            </div>
        </div>
    </div>


    

            <div class="address_book_wrap">
            <div class="row top10">
                <div class="col-md-10">
               
               <a href="javascript:;" class="edit_address_book block top10">
                 <i class="ion-compose"></i> <?php echo t("Edit")?>
               </a>
               </div> 
              </div>   
            </div> <!--address_book_wrap-->
            
<?php endif;?>