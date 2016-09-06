<?php 
if ( !empty( $discount ) ){ ?>
            
    <strong class="pull-right normal-price">
        <?php echo $normal_price; ?>
    </strong> 
    <strong class="pull-right sale-price">
        <?php echo $discounted_price; ?>
    </strong>           			          	  
                
<?php } else { ?>
        
    <strong class="pull-right normal-price">
        <?php echo $normal_price; ?>
    </strong>

<?php } ?>      