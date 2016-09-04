<div class="payment_select" id="<?php echo $key; ?>">
    <label>
        <?php echo CHtml::radioButton('payment_opt', false,
                    array( 
                        'class'=>"icheck payment_option",
                        'value'=>$key 
                    )
                )
        ?> 
         <?php echo $val?>
    </label>

    <?php if ( $key == 'cod') { //Cash on Delivery?> 
        <i class="icon_wallet"></i>
    <?php } ?>

    <?php if ( $key == 'ccr') { ?>
        <i class="icon_wallet"></i>
    <?php } ?>

    <?php if ( $key == 'stp') { ?>
        <i class="icon_creditcard"></i>
    <?php } ?>


    <?php if ( $key == 'mcd') { ?>
        <i class="icon_creditcard"></i>
    <?php } ?>


    <?php if ( $key == 'pyl') { ?>
        <i class="icon_creditcard"></i>
    <?php } ?>


    <?php if ( $key == 'sow') { ?>
        <i class="icon_creditcard"></i>
    <?php } ?>


    <?php if ( $key == 'ocr') { // offline Credit Card Payment?>
        <i class="icon_creditcard"></i>
    <?php } ?>


    <?php if ( $key == 'paypal') { // Paypal ?>
        <!-- removed icon because for paypal we use custom image --> 
    <?php } ?>

</div>
