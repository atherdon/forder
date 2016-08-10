<?php
$this->renderPartial('/front/banner-contact',array(
   'h1'=>t("Contact Us"),
   'sub_text'=>$address." ".$country,
   'contact_phone'=>$contact_phone,
   'contact_email'=>$contact_email
));

$fields=yii::app()->functions->getOptionAdmin('contact_field');
if (!empty($fields)){
	$fields=json_decode($fields);
}
?>



<div id="position">
    <div class="container">
        <ul>
            <li>
                <a href="#0">
                    Home
                </a>
            </li>
            <li>
                <a href="#0">
                    Category
                </a>
            </li>
            <li>
                Contact us
            </li>
        </ul>
    </div>
</div><!-- Position -->


<!-- Content ================================================== -->
<div class="container margin_60_35">
    <div class="row" id="contacts">
    	<div class="col-md-6 col-sm-6">
            
            <div class="box_style_2">
            	<h2 class="inner">Customer service</h2>
                <p class="add_bottom_30">Adipisci conclusionemque ea duo, quo id fuisset prodesset, vis ea agam quas. <strong>Lorem iisque periculis</strong> id vis, no eum utinam interesset. Quis voluptaria id per, an nibh atqui vix. Mei falli simul nusquam te.</p>
                <p><a href="tel://004542344599" class="phone"><i class="icon-phone-circled"></i>  +45 423 445 70</a></p>
                <p class="nopadding"><a href="mailto:customercare@quickfood.com"><i class="icon-mail-3"></i> customercare@quickfood.com</a></p>
            </div>
                        
             <div class="box_style_2">
            	<h2 class="inner">Restaurant Support</h2>
                <p class="add_bottom_30">Quo ex rebum petentium, cum alia illud molestiae in, pro ea paulo gubergren. Ne case constituto pro, ex vis delenit complectitur, per ad <strong>everti timeam</strong> conclusionemque. Quis voluptaria id per, an nibh atqui vix.</p>
                <p><a href="tel://004542344599" class="phone"><i class="icon-phone-circled"></i>  +45 423 445 99</a></p>
                <p class="nopadding"><a href="mailto:customercare@quickfood.com"><i class="icon-mail-3"></i> support@quickfood.com</a></p>
            </div>
            
    	</div>
            
        <div class="col-md-6 col-sm-6">
        	<div class="box_style_2">
            	<h2 class="inner">
                    <?php echo t("Contact") . " $website_title"; ?>
                </h2>
                <p class="add_bottom_30">
                    <?php echo t("We are always happy to hear from our clients and visitors, you may contact us anytime")?>
                </p>
                <p>
                    <?php //echo $contact_content?>
                </p>
                
                 <form class="uk-form uk-form-horizontal forms" id="forms" onsubmit="return false;">  
                     
                    <?php echo CHtml::hiddenField('action','contacUsSubmit')?>
                    <?php echo CHtml::hiddenField('currentController','store')?>
                    <?php if (is_array($fields) && count($fields)>=1):?>
                    <?php foreach ($fields as $val):?>
                    <?php  
                                 $placeholder='';
                                 $validate_default="required";
                                 switch ($val) {
                                       case "name":
                                               $placeholder="Name";
                                               break;
                                       case "email":  
                                           $placeholder="Email address";
                                           $validate_default="email";
                                               break;
                                       case "phone":  
                                           $placeholder="Phone";
                                               break;
                                       case "country":  
                                           $placeholder="Country";
                                               break;
                                       case "message":  
                                           $placeholder="Message";
                                               break;	  	
                                       default:
                                               break;
                                 }
                                ?>			 			 			
                                <?php if ( $val=="message"):?>
                    <div class="row top10">
                    <div class="col-md-12">
                      <?php echo CHtml::textArea($val,'',array(
                       'placeholder'=>t($placeholder),
                       'class'=>'grey-fields full-width'
                      ))?>
                    </div>
                    </div>
                    <?php else :?>
                    <div class="row top10">
                    <div class="col-md-12">
                      <?php echo CHtml::textField($val,'',array(
                       'placeholder'=>t($placeholder),
                       'class'=>'grey-fields full-width',
                       'data-validation'=>$validate_default
                      ))?>
                    </div>
                    </div>
                    <?php endif;?>

                    <?php endforeach;?>

                    <div class="row top10">
                    <div class="col-md-12 text-center">
                       <input type="submit" value="<?php echo t("Submit")?>" class="orange-button medium inline rounded">
                    </div>
                    </div>
                    <?php endif;?>
                     
             </form>
               
                
            </div>
    	</div>
        
            
    </div><!-- End row -->
</div><!-- End container -->
<!-- End Content =============================================== -->
