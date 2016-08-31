<div id="position">
    <div class="container">
        <ul>
            <li>
                <a href="<?php echo Yii::app()->getHomeUrl(); ?>">
                    Home
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createUrl('/store/browse' )?>">
                    Restaurant List
                </a>
            </li>
            <li>
                <a href="<?php echo Yii::app()->createUrl( 'store/menu/merchant/' . $restaurant_slug )?>">
                    <?php echo clearString( $restaurant_name ); ?>
                </a>
            </li>
            <li>
                Checkout
            </li>
        </ul>
    </div>
</div><!-- Position -->