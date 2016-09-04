<?php FunctionsV3::sectionHeader('Payment Information')?>

<?php if (is_array( $payment_list ) && count( $payment_list ) >= 1 ) { ?>

    <?php foreach ( $payment_list as $key => $val ){ 
        
            $this->renderPartial('/store/checkout/_accordion', array(
                'key' => $key,
                'val' => $val
            ));  
            
            $this->renderPartial('/store/checkout/_cod', array(
                'key' => $key,
            ));  
            
            $this->renderPartial('/store/checkout/_pyr', array(
                'key' => $key,
            ));  
        } 
    ?>
  
<?php } else { ?>

    <h3>
        <?php echo t("No payment option available")?>
    </h3>

<?php } ?>