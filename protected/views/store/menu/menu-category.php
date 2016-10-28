<?php if( is_array( $menu ) && count( $menu ) >= 1) : ?>

    <div class="box_style_1">
        <ul id="cat_nav">
            
        <?php foreach ( $menu as $val ){ ?>

             <li>
                <a href="#category-<?php echo $val['category_id']?>" class="active"
                   data-id="cat-<?php echo $val['category_id']?>">
                    <?php echo qTranslate($val['category_name'], 'category_name', $val)?>
                    <span>(<?php echo is_array($val['item']) ? count($val['item']) : '0'; ?>)</span>
                </a>
            </li>   


            <?php if ( 0 ) { ?>    
                    <a href="javascript:;" class="category-child relative goto-category" 
                        data-id="cat-<?php echo $val['category_id']?>" >
                      <?php echo qTranslate($val['category_name'], 'category_name', $val )?>
                      <span>(<?php echo is_array($val['item']) ? count($val['item']) : '0'; ?>)</span>
                      <i class="ion-ios-arrow-right"></i>
                     </a>
            <?php } ?>

        <?php } ?>            
            
        </ul>
    </div><!-- End box_style_1 -->

<?php endif;?>