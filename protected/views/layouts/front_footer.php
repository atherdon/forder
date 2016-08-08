<?php 
/*add global variables to footer*/
ScriptManager::registerGlobalVariables();
?>




<!-- COMMON SCRIPTS -->
<script src="<?php echo Widgets::quickScriptPath(); ?>jquery-1.11.2.min.js"></script>
<script src="<?php echo Widgets::quickScriptPath(); ?>common_scripts_min.js"></script>
<script src="<?php echo Widgets::quickScriptPath(); ?>functions.js"></script>
<script src="<?php echo Widgets::quickScriptPath(); ?>validate.js"></script>


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


<script src="//www.google.com/recaptcha/api.js?onload=onloadMyCallback&render=explicit" async defer ></script>
</body>
</html>