<?php FunctionsV3::sectionHeader('Payment Information')?>

<?php if (is_array($payment_list) && count($payment_list)>=1) { ?>

    <?php foreach ($payment_list as $key => $val){ 
        
            $this->renderPartial('/store/checkout/_accordion', array());  
            $this->renderPartial('/store/checkout/_cod', array());  
            $this->renderPartial('/store/checkout/_pyr', array());  
        } 
    ?>
  
<?php } else { ?>

    <h3>
        <?php echo t("No payment option available")?>
    </h3>

<?php } ?>
\