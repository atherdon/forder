<div class="box_style_2 hidden-xs" id="help">
    <i class="icon_lifesaver"></i>
    <h4>
        Need <span>Help?</span>
    </h4>
    <a href="tel://<?php echo $phone ?>" class="phone">   <!-- @TODO check phone values -->                                   
        <?php echo FunctionsV3::format_phone( $phone ); ?> 
    </a>
    <small>
        
        if days have same time - we put it on one row.
        
        Monday to Friday 
        9.00am - 7.30pm 
        <!-- @TODO fix time -->
    </small>
</div>