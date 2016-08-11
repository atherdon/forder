<?php if( is_array( $menu ) && count( $menu ) >= 1) : ?>

    <div class="box_style_1">
        <ul id="cat_nav">
            
            <?php foreach ( $menu as $val ){ ?>
            
                 <li>
                    <a href="javascript:;" class="active"
                       data-id="cat-<?php echo $val['category_id']?>">
                        <?php echo qTranslate($val['category_name'],'category_name',$val)?>
                        <span>(<?php echo is_array($val['item'])?count($val['item']):'0';?>)</span>
                    </a>
                </li>   
            
                
                <?php if ( 0 ) { ?>    
                        <a href="javascript:;" class="category-child relative goto-category" 
                            data-id="cat-<?php echo $val['category_id']?>" >
                          <?php echo qTranslate($val['category_name'],'category_name',$val)?>
                          <span>(<?php echo is_array($val['item'])?count($val['item']):'0';?>)</span>
                          <i class="ion-ios-arrow-right"></i>
                         </a>
                <?php } ?>
            
                
            <?php } ?>
            
            
<!--            <li>
                <a href="#starters" class="active">
                    Starters <span>(141)</span>
                </a>
            </li>
            <li>
                <a href="#main_courses">
                    Main Courses <span>(20)</span>
                </a>
            </li>
            <li>
                <a href="#beef">
                    Beef <span>(12)</span>
                </a>
            </li>
            <li>
                <a href="#desserts">
                    Desserts <span>(11)</span>
                </a>
            </li>
            <li>
                <a href="#drinks">
                    Drinks <span>(20)</span>
                </a>
            </li>-->
            
        </ul>
    </div><!-- End box_style_1 -->

<?php if ( 0 ) { ?>

<div class="category">
<?php foreach ($menu as $val):?>
 <a href="javascript:;" class="category-child relative goto-category" 
    data-id="cat-<?php echo $val['category_id']?>" >
  <?php echo qTranslate($val['category_name'],'category_name',$val)?>
  <span>(<?php echo is_array($val['item'])?count($val['item']):'0';?>)</span>
  <i class="ion-ios-arrow-right"></i>
 </a>
<?php endforeach;?>
</div>
    
<?php } ?>    

<?php endif;?>