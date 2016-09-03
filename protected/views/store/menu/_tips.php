  <!--TIPS-->
     <?php if ( Yii::app()->functions->getOption("merchant_enabled_tip",$merchant_id)==2):?>
     
     
     
     <?php 
     $merchant_tip_default=Yii::app()->functions->getOption("merchant_tip_default",$merchant_id);
     if ( !empty($merchant_tip_default)){
    	echo CHtml::hiddenField('default_tip',$merchant_tip_default);
     }        
     $FunctionsK=new FunctionsK();
     $tips=$FunctionsK->tipsList();        
     ?>	   
	   <div class="section-label top25">
	    <a class="section-label-a">
	      <span class="bold">
	        <?php echo t("Tip Amount")?> (<span class="tip_percentage">0%</span>)
	      </span>
	      <b></b>
	    </a>     
	   </div>          
	   
	    <div class="uk-panel uk-panel-box">
	     <ul class="tip-wrapper">
	       <?php foreach ($tips as $tip_key=>$tip_val):?>           
	       <li>
	       <a class="tips" href="javascript:;" data-type="tip" data-tip="<?php echo $tip_key?>">
	       <?php echo $tip_val?>
	       </a>
	
	       </li>
	       <?php endforeach;?>           
	       <li><a class="tips" href="javascript:;" data-type="cash" data-tip="0"><?php echo t("Tip cash")?></a></li>
	       <li><?php echo CHtml::textField('tip_value','',array(
	         'class'=>"numeric_only grey-fields",
	         'style'=>"width:70px;"
	       ));?></li>
	     </ul>
	    </div>
     <?php endif;?>
     <!--END TIPS-->