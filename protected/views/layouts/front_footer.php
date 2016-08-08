<?php 
/*add global variables to footer*/
ScriptManager::registerGlobalVariables();
?>

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