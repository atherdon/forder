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
                <?php echo clearString($restaurant_name) ?>
            </li>
        </ul>
    </div>
</div><!-- Position -->