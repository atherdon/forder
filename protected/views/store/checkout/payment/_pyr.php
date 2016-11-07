<?php if ( $key=="pyr"){ ?>


    <?php   
            $provider_list = Yii::app()->functions->getPaymentProviderMerchant( $merchant_id );
            if ( Yii::app()->functions->isMerchantCommission( $merchant_id ) ){	          	
                $provider_list = Yii::app()->functions->getPaymentProviderListActive();         	
            }	         
      ?>


    <?php if ( is_array( $provider_list ) && count( $provider_list ) >= 1 ) { ?>
      
        <?php foreach ($provider_list as $val_provider_list){ ?>


                <div class="row">
                    <div class="payment_select" id="<?php echo $key; ?>" 
                            style="background: url('<?php echo uploadURL() . "/" . $val_provider_list['payment_logo']; ?>') center right no-repeat #f0f0f0;">
                        
                        <label>
                             <?php echo CHtml::radioButton('payment_provider_name',false,array(
                                           'class'=>"icheck checki",
                                           'value'=>$val_provider_list['payment_name']
                             ))?>
                             <?php //echo $val?>
                        </label>

                    </div>
                </div>



        <?php } ?>



    <?php } else { ?>   

          <p class="uk-text-danger">
              <?php echo t("no type of payment")?>
          </p> 

    <?php } ?>  

<?php } ?>