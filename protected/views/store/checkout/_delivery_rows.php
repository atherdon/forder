
<?php if ($data['trans_type']=="delivery"):?>




        <?php if (isset($session['kr_delivery_options']['delivery_date'])):?>		       
        <tr>
          <td><?php echo Yii::t("default","Delivery Date")?></td>
          <td>
              
              <strong class="pull-right">
                  <?php 
                    $deliver_date=prettyDate($session['kr_delivery_options']['delivery_date']);
                    echo Yii::app()->functions->translateDate($deliver_date);
                    ?>
              </strong>
          
          </td>
        </tr>
        <?php 	       
        $print[]=array(
          'label'=>Yii::t("default","Delivery Date"),
          'value'=>$deliver_date
        );
        ?>
        <?php endif;?>





        <?php if (isset($session['kr_delivery_options']['delivery_time'])):?>
        <?php if ( !empty($session['kr_delivery_options']['delivery_time'])):?>		       
        <tr>
          <td><?php echo Yii::t("default","Delivery Time")?></td>
          <td>
              <strong class="pull-right">
                  <?php echo Yii::app()->functions->timeFormat($session['kr_delivery_options']['delivery_time'],true)?>
              </strong>
              
          </td>
        </tr>
        <?php 	       
        $print[]=array(
          'label'=>Yii::t("default","Delivery Time"),
          'value'=>Yii::app()->functions->timeFormat($session['kr_delivery_options']['delivery_time'],true)
        );
        ?>
        <?php endif;?>
        <?php endif;?>





        <?php if (isset($session['kr_delivery_options']['delivery_asap'])):?>
        <?php if ( !empty($session['kr_delivery_options']['delivery_asap'])):?>		       
        <tr>
          <td><?php echo Yii::t("default","Deliver ASAP")?></td>
          <td>
              <strong class="pull-right">
                  <?php echo $delivery_asap=$session['kr_delivery_options']['delivery_asap']==1?t("Yes"):'';?>
              </strong>
            
          </td>
        </tr>
            <?php 	       
                 $print[]=array(
                  'label'=>Yii::t("default","Deliver ASAP"),
                  'value'=>$delivery_asap
                 );
                 ?>
        <?php endif;?>
        <?php endif;?>





        <tr>
          <td><?php echo Yii::t("default","Deliver to")?></td>
          <td class="pull-right">
            <?php 		         
            if (!empty($data['client_full_address'])){
                   echo $delivery_address=$data['client_full_address'];
            } else echo $delivery_address=$data['full_address'];		         
            ?>
          </td>
        </tr>
                 <?php 	       
                 $print[]=array(
                   'label'=>Yii::t("default","Deliver to"),
                   'value'=>$delivery_address
                 );
                 ?>





        <tr>
          <td><?php echo Yii::t("default","Delivery Instruction")?></td>
          <td class="pull-right"><?php echo $data['delivery_instruction']?></td>
        </tr>
        <?php 	       
                 $print[]=array(
                   'label'=>Yii::t("default","Delivery Instruction"),
                   'value'=>$data['delivery_instruction']
                 );
                 ?>





        <tr>
          <td><?php echo Yii::t("default","Location Name")?></td>
          <td class="pull-right">
          <?php 
          if (!empty($data['location_name1'])){
                 $data['location_name']=$data['location_name1'];
          }
          echo $data['location_name'];
          ?>
          </td>
        </tr>
        <?php 	       
                 $print[]=array(
                   'label'=>Yii::t("default","Location Name"),
                   'value'=>$data['location_name']
                 );
                 ?>




        <tr>
          <td><?php echo Yii::t("default","Contact Number")?></td>
          <td class="pull-right">
          <?php 
          if ( !empty($data['contact_phone1'])){
                 $data['contact_phone']=$data['contact_phone1'];
          }
          echo $data['contact_phone'];?>
          </td>
        </tr>       
        <?php 	       
                 $print[]=array(
                   'label'=>Yii::t("default","Contact Number"),
                   'value'=>$data['contact_phone']
                 );
                 ?>







                 <?php if ($data['order_change']>=0.1):?>					
        <tr>
          <td><?php echo Yii::t("default","Change")?></td>
          <td class="pull-right">
          <?php echo displayPrice( baseCurrency(), normalPrettyPrice($data['order_change']))?>
          </td>
        </tr>     
        <?php 	       
                 $print[]=array(
                   'label'=>Yii::t("default","Change"),
                   'value'=>normalPrettyPrice($data['order_change'])
                 );
                 ?>
                 <?php endif;?>











    <?php else :?>   





<?php 
                 if (isset($data['contact_phone1'])){
                         if (!empty($data['contact_phone1'])){
                                 $data['contact_phone']=$data['contact_phone1'];
                         }
                 }
            ?>		      
        <tr>
          <td><?php echo Yii::t("default","Contact Number")?></td>
          <td class="pull-right"><?php echo $data['contact_phone']?></td>
        </tr>
        <?php 	       
                 $print[]=array(
                   'label'=>Yii::t("default","Contact Number"),
                   'value'=>$data['contact_phone']
                 );
                 ?>






       <?php if (isset($session['kr_delivery_options']['delivery_date'])):?>		       
        <tr>
          <td><?php echo Yii::t("default","Pickup Date")?></td>
          <td >
              <strong class="pull-right">
                  <?php echo $session['kr_delivery_options']['delivery_date']?>
              </strong>
          
          </td>
        </tr>
        <?php 	       
                 $print[]=array(
                   'label'=>Yii::t("default","Pickup Date"),
                   'value'=>$session['kr_delivery_options']['delivery_date']
                 );
                 ?>
        <?php endif;?>




        <?php if (isset($session['kr_delivery_options']['delivery_time'])):?>
        <?php if ( !empty($session['kr_delivery_options']['delivery_time'])):?>		       
        <tr>
          <td><?php echo Yii::t("default","Pickup Time")?></td>
          <td>
              <strong class="pull-right">
                  <?php echo $session['kr_delivery_options']['delivery_time']?></td>
              </strong>
                  
        </tr>
        <?php 	       
                 $print[]=array(
                  'label'=>Yii::t("default","Pickup Time"),
                  'value'=>$session['kr_delivery_options']['delivery_time']
                 );
                 ?>
        <?php endif;?>
        <?php endif;?>




        <?php if ($data['order_change']>=0.1):?>					
        <tr>
          <td><?php echo Yii::t("default","Change")?></td>
          <td class="pull-right">
            <?php echo displayPrice( baseCurrency(), normalPrettyPrice($data['order_change']))?>
          </td>
        </tr>  
        <?php 	       
                 $print[]=array(
                   'label'=>Yii::t("default","Change"),
                   'value'=>$data['order_change']
                 );
                 ?>
                 <?php endif;?> 











<?php endif;?>