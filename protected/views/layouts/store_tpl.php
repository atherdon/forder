<!--HEADER-->
<?php $this->renderPartial('/layouts/front_header'); ?>






<!--LANGUAGE SELECTION TOP-->
<?php if (getOptionA('theme_lang_pos')=="top"):?>
<?php $this->renderPartial('/front/language-selection');?>
<?php endif;?>
<!--LANGUAGE SELECTION TOP-->




<!--TOP MENU-->
<?php $this->renderPartial('/layouts/front_top_menu', array(
  'action' => Yii::app()->controller->action->id,
  'theme_hide_logo' => getOptionA('theme_hide_logo')
));?>




<!--MAIN CONTENT-->
<?php echo $content;?>


<?php

$fb = 1;
$fb_app_id = getOptionA('fb_app_id');
$fb_flag   = getOptionA('fb_flag'); 

if ( $fb_flag == "" && $fb_app_id <> "") {
        $fb = 2;
}

?>


<!--BOOTOM FOOTER-->
<?php $this->renderPartial('/layouts/front_bottom_footer', array(
    
  'fb_page'      => getOptionA('admin_fb_page'),
  'twitter_page' => getOptionA('admin_twitter_page'),
  'google_page'  => getOptionA('admin_google_page'),
  'menu'         => Yii::app()->functions->customPagePosition("bottom"),
  'others_menu'  => Yii::app()->functions->customPagePosition("bottom2"),
  'social_flag'  => getOptionA('social_flag'),
  'show_language'  => getOptionA('show_language'),
  'theme_lang_pos' => getOptionA('theme_lang_pos'),
  'intagram_page'  => getOptionA('admin_intagram_page'),
  'youtube_url'    => getOptionA('admin_youtube_url'),
  'theme_hide_footer_section1' => getOptionA('theme_hide_footer_section1'),
  'theme_hide_footer_section2' => getOptionA('theme_hide_footer_section2'),
    
  //customization  
  'google_login_enabled'    => getOptionA('google_login_enabled'),
  'captcha_customer_login'  => getOptionA('captcha_customer_login'),
  'captcha_customer_signup' => getOptionA('captcha_customer_signup'),
  'fb_flag'                 => $fb,
    
));?>

<!--FOOTER-->
<?php $this->renderPartial('/layouts/front_footer');?>