<div class="box-grey rounded section-address-book" style="margin-top:0;">

    <?php $do = isset($_GET['do'])?$_GET['do']:''; ?>
    <?php if ( $do==="add" && $tabs==2 ) { ?>

        <div class="row">
            <div class="col-md-6 col-lg-offset-3">

                <form id="frm-addressbook" class="frm-addressbook" onsubmit="return false;">
                 <?php echo CHtml::hiddenField('action','addAddressBook')?>
                 <?php echo CHtml::hiddenField('currentController','store')?>  

                 <?php if (isset($_GET['id'])):?>
                 <?php echo CHtml::hiddenField('id',$_GET['id'])?>
                 <?php else :?>
                 <?php echo CHtml::hiddenField('redirect',createUrl("/store/profile/tab/2/do/add"))?>
                 <?php endif;?>

                 <div class="form-group">
                     <label><?php echo t("Address")?></label>
                     <?php 
                          echo CHtml::textField('street',
                                 isset($data['street'])?$data['street']:''
                                 ,array(
                                  'class'           => 'form-control',
                                  'data-validation'=>"required"  
                      ))?>

                 </div>   

                 <div class="form-group">
                     <label><?php echo t("City")?></label>
                     <?php echo CHtml::textField('city',
                             isset($data['city'])?$data['city']:''
                             ,array(
                              'class'           => 'form-control',  
                              'data-validation'=>"required"  
                         ))?>	


                 </div>

                 <div class="form-group">
                     <label><?php echo t("State")?></label>
                     <?php echo CHtml::textField('state',
                              isset($data['state'])?$data['state']:''
                              ,array(
                               'class'           => 'form-control',         
                               'data-validation'=>"required"  
                              ))?>

                 </div>
                 <div class="form-group">
                     <label><?php echo t("Zip code")?></label>
                     <?php echo CHtml::textField('zipcode',
                              isset($data['state'])?$data['zipcode']:''
                              ,array(
                               'class'           => 'form-control',          
                               'data-validation'=>"required"  
                              ))?>

                 </div>

                 <?php $merchant_default_country=Yii::app()->functions->getOptionAdmin('merchant_default_country'); ?>
                 <div class="form-group">
                     <label><?php echo t("Location Name")?></label>
                     <?php echo CHtml::textField('location_name',
                                 isset($data['location_name'])?$data['location_name']:''
                                 ,array(
                                  'class'           => 'form-control',           
                              ))?>

                 </div>

                 <div class="form-group">
                     <label><?php echo t("Country")?></label>
                    <?php 
                          echo CHtml::dropDownList('country_code',
                                 isset($data['country_code'])?$data['country_code']:$merchant_default_country
                                 ,(array)Yii::app()->functions->CountryListMerchant(),array(
                                   'class'           => 'form-control',
                                   'data-validation'=>"required"  
                          ));
                          ?>

                 </div>

                 <div class="row" id="options_2">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <label>
                             <?php 
                                 echo CHtml::checkBox('as_default',
                                            $data['as_default'] == 2 ? true : false,                                    
                                            array( 'class' => "icheck", 'value' => 2 ) 
                                      );
                             ?>
                             <?php echo " ".t("Default"); ?>
                         </label>
                     </div>                       
                 </div><!-- Edn options 2 -->   



                 <button type="submit" class="btn_full">
                     <?php echo t("Submit")?>
                 </button>

                 <a class="btn_full_outline" href="<?php echo Yii::app()->createUrl('/store/profile/?tab=2')?>">
                     <i class="icon-right"></i>
                     <?php echo t("Back")?>
                 </a>





             </form>

            </div>
        </div>
    <?php } else { ?>

            <div class="row">
                <div class="col-md-11 col-lg-offset-1">

                    <div class="col-md-2 btn_padding0">
                        <a class="btn_full_outline " href="<?php echo Yii::app()->createUrl('/store/profile/?tab=2&do=add')?>">
                            <i class="icon-plus"></i>
                            <?php echo t("Add New")?>   
                        </a>
                    </div>

                    <br />
                    <br />


                <form id="frm_table_list" method="POST" >

                     <input type="hidden" name="action" id="action" value="addressBook">
                     <?php echo CHtml::hiddenField('currentController','store')?>

                     <input type="hidden" name="tbl" id="tbl" value="address_book">
                     <input type="hidden" name="clear_tbl"  id="clear_tbl" value="clear_tbl">
                     <input type="hidden" name="whereid"  id="whereid" value="id">
                     <input type="hidden" name="slug" id="slug" value="store/addressbook">

                     <table id="table_list" class="table table-striped">
                       <thead>
                         <tr>
                             <th width="40%" >
                                 <?php echo Yii::t("default","Address")?>
                             </th>
                             <th >
                                 <?php echo Yii::t("default","Location Name")?>
                             </th>
                             <th >
                                 <?php echo Yii::t("default","Default")?>
                             </th>   
                         </tr>
                       </thead>
                     </table>  

                     <div class="clear"></div>

                </form>

                </div>
            </div>
    
    <?php } ?>

</div> <!--box-grey-->