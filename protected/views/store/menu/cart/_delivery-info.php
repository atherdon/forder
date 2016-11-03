<!--DELIVERY INFO-->
<table class="table">
    <tbody>

        <?php if ( $data['service'] == 3 ){ ?>
          <tr>
              <td>
                  <h5>
                      <?php echo t("Distance Information")?>
                  </h5>
              </td>
         </tr>     
      <?php } else { ?> 

          <tr>
               <td>
                    <h5>
                        <?php echo t("Delivery Information")?>
                    </h5>
               </td>
          </tr>     

     <?php } ?>


    <?php if ($distance){ ?>
        <tr>
            <td>
                <?php echo t("Distance") ?> : 
                <span class="pull-right">
                    <?php echo number_format($distance,1) . ' ' . $distance_type ?>
                </span>
            </td>
       </tr>     
    <?php } else { ?> 

        <tr>
             <td>
                 <?php echo t("Distance") ?> : 
                 <span class="pull-right">
                     <?php echo t("not available") ?>
                 </span>
             </td>
        </tr>     

   <?php } ?>


    <tr>
        <td>
             <?php echo t("Delivery Est")?> : 
             <span class="pull-right">
                 <?php echo FunctionsV3::getDeliveryEstimation($merchant_id)?>
             </span>
        </td>
    </tr>


    <?php  if (!empty($merchant_delivery_distance)){ ?>

        <tr>
            <td>
                <?php echo t("Delivery Distance Covered"); ?> : 
                <span class="pull-right">
                    <?php echo $merchant_delivery_distance . ' '. $distance_type_orig; ?>
                </span>
            </td>
        </tr>

    <?php } else  {  ?>

         <tr>
            <td>
                <?php echo t("Delivery Distance Covered"); ?> : 
                <span class="pull-right">
                    <?php echo t("not available"); ?>
                </span>
            </td>
        </tr>

    <?php } ?>

    <?php if ( $delivery_fee ){ ?>

        <tr>
            <td>
                <?php echo t("Delivery Fee"); ?> : 
                <span class="pull-right">
                    <?php echo FunctionsV3::prettyPrice( $delivery_fee ); ?>
                </span>
            </td>
        </tr>



    <?php } else  {  ?>

         <tr>
            <td>
                <?php echo t("Delivery Fee"); ?> : 
                <span class="pull-right">
                    <?php echo t("Free Delivery"); ?>
                </span>
            </td>
        </tr>



    <?php } ?>    

        <tr>
            <td>
                <a href="#" 
                    class="text-center" 
                    data-target="#addressForm" 
                    data-toggle="modal">
                     [<?php echo t("Change Your Address here")?>]
                 </a>   
            </td>
        </tr>
    </tbody>
</table>
<!--END DELIVERY INFO-->
<hr>