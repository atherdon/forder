<div class="box_style_2">
    <h4 class="nomargin_top">
        Opening time <i class="icon_clock_alt pull-right"></i>
    </h4>

    <ul class="opening_list">
        
        <?php if ( $res=FunctionsV3::getMerchantOpeningHours($merchant_id)):?>
            <?php foreach ($res as $val):?>
        
                <li>
                    <?php echo t( ucfirst( $val['day'] ) )?>

                    <?php if( !empty( $val['hours'] ) ) { ?>
                    <span> <?php echo $val['hours'] ?> </span>
                    <?php } else { ?> 
                    <span class="label label-danger">Closed</span>
                    <?php  } ?>
                    
                </li>

            <?php endforeach;?>
        <?php else :?>

            <span class="label label-danger label-font-14">
                <?php echo t("Not available.")?>
            </span>

        <?php endif;?>

    </ul>
</div>