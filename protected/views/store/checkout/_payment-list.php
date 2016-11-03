<?php //FunctionsV3::sectionHeader('Payment Information')?>
<h2 class="inner">
    <?php echo 'Payment Information'; ?>
</h2>

<?php if (is_array( $payment_list ) && count( $payment_list ) >= 1 ) { ?>

    <?php foreach ( $payment_list as $key => $val ){ 
        
            $this->renderPartial('/store/checkout/payment/_accordion', array(
                'key' => $key,
                'val' => $val
            ));  
            
            $this->renderPartial('/store/checkout/payment/_cod', array(
                'key' => $key,
            ));  
            
            $this->renderPartial('/store/checkout/payment/_pyr', array(
                'key' => $key,
            ));  
        } 
    ?>
  
<?php } else { ?>

    <h3>
        <?php echo t("No payment option available")?>
    </h3>

<?php } ?>