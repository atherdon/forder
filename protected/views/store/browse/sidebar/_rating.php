<div class="filter_type">
    <h6>
        Rating
    </h6>
    <ul>
        
        <?php //var_dump($filter_rating);
            if ( 0 ) {
                
        ?> 
        <li>
            <label>
                
                <?php if(in_array('5', $filter_rating) && is_array( $filter_rating ) && isset( $filter_rating ) ) { ?>
                    <input type="checkbox" class="icheck" name="filter_rating[5]" checked="">
                <?php } else { ?>
                    <input type="checkbox" class="icheck" name="filter_rating[5]">
                <?php }  ?>

                <span class="rating">
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                </span>
            </label>
        </li>
        <li>
            <label>
                <?php if(in_array('4', $filter_rating) && is_array( $filter_rating ) ) { ?>
                <input type="checkbox" class="icheck" name="filter_rating[]" value="4" checked="">
                <?php } else { ?>
                <input type="checkbox" class="icheck" name="filter_rating[]" value="4">
                <?php }  ?>
                <span class="rating">
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star"></i>
                </span>
            </label>
        </li>
        <li>
            <label>
                <?php if(in_array('3', $filter_rating) && is_array( $filter_rating ) ) { ?>
                <input type="checkbox" class="icheck" name="filter_rating[]" value="3" checked="">
                <?php } else { ?>
                <input type="checkbox" class="icheck" name="filter_rating[]" value="3">
                <?php }  ?>
                <span class="rating">
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                </span>
            </label>
        </li>
        <li>
            <label>
                <?php if(in_array('2', $filter_rating) && is_array( $filter_rating ) ) { ?>
                <input type="checkbox" class="icheck" name="filter_rating[]" value="2" checked="">
                <?php } else { ?>
                <input type="checkbox" class="icheck" name="filter_rating[]" value="2">
                <?php }  ?>
                <span class="rating">
                    <i class="icon_star voted"></i>
                    <i class="icon_star voted"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                </span>
            </label>
        </li>
        <li>
            <label>
                <?php if(in_array('1', $filter_rating) && is_array( $filter_rating ) ) { ?>
                <input type="checkbox" class="icheck" name="filter_rating[]" value="1" checked="">
                <?php } else { ?>
                <input type="checkbox" class="icheck" name="filter_rating[]" value="1">
                <?php }  ?>
                <span class="rating">
                    <i class="icon_star voted"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                    <i class="icon_star"></i>
                </span>
            </label>
        </li>
        
        <?php } ?>
        
    </ul>
</div>