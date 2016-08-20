<?php 
/*add global variables to footer*/
ScriptManager::registerGlobalVariables();
?>


<?php //var_dump( Yii::app()->controller->action->id ); die(); ?>
<?php if ( 0 ) { ?>
<?php //if ( Yii::app()->controller->action->id == 'home' ) { ?>
<script src="<?php echo Widgets::quickScriptPath(); ?>jquery.cookiebar.js"></script>
<script>
    $(document).ready(function(){
        'use strict';
         $.cookieBar({
                fixed: true
        });
    });
</script>

<?php } ?>

<?php 
if ( Yii::app()->controller->action->id == 'menu' ) { ?>

    <script type="text/javascript">
	$( document ).ready(function( $ ) {
            
		$( '#Img_carousel' ).sliderPro({
			width: 960,
			height: 500,
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: false,
			smallSize: 500,
			startSlide: 0,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: false
		});
	});
</script>
    
<?php }
?>

<script src="//www.google.com/recaptcha/api.js?onload=onloadMyCallback&render=explicit" async defer ></script>



</body>
</html>