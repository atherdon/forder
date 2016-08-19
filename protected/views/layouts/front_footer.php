<?php 
/*add global variables to footer*/
ScriptManager::registerGlobalVariables();
?>




<!-- COMMON SCRIPTS -->
<script src="<?php echo Widgets::quickScriptPath(); ?>jquery-1.11.2.min.js"></script>
<script src="<?php echo Widgets::quickScriptPath(); ?>common_scripts_min.js"></script>
<script src="<?php echo Widgets::quickScriptPath(); ?>functions.js"></script>
<script src="<?php echo Widgets::quickScriptPath(); ?>validate.js"></script>



<!--For details page-->
<script src="js/infobox.js"></script>
<script src="js/jquery.sliderPro.min.js"></script>



<!-- SPECIFIC SCRIPTS -->
<script src="<?php echo Widgets::quickScriptPath(); ?>jquery.cookiebar.js"></script>
<script>
    $(document).ready(function(){
        'use strict';
         $.cookieBar({
                fixed: true
        });
    });
</script>


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