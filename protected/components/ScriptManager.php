<?php
class ScriptManager
{
	public static function RegisterAllJSFile()
	{		
		$baseUrl = Yii::app()->baseUrl; 
        $cs = Yii::app()->getClientScript();
        //$cs->registerScriptFile('//code.jquery.com/jquery-1.10.2.min.js',CClientScript::POS_END);            
        $cs->registerScriptFile($baseUrl . "/assets/vendor/jquery-1.10.2.min.js", CClientScript::POS_END);            
        
        $cs->registerScriptFile("//code.jquery.com/ui/1.10.3/jquery-ui.js"
		,CClientScript::POS_END); 
        
        $js_lang=Yii::app()->functions->jsLanguageAdmin();
        $js_lang_validator=Yii::app()->functions->jsLanguageValidator();
        
        $cs->registerScript(
		  'js_lang',
		  'var js_lang = '.json_encode($js_lang).'
		  ',
		  CClientScript::POS_HEAD
		);
								
		$cs->registerScript(
		  'jsLanguageValidator',
		  'var jsLanguageValidator = '.json_encode($js_lang_validator).'
		  ',
		  CClientScript::POS_HEAD
		);

		$cs->registerScript(
		  'ajax_url',
		  "var ajax_url ='".Yii::app()->request->baseUrl."/admin/ajax' ",
		  CClientScript::POS_HEAD
		);
				
		$cs->registerScript(
		  'front_ajax',
		  "var front_ajax ='".Yii::app()->request->baseUrl."/ajax' ",
		  CClientScript::POS_HEAD
		);
					
		$cs->registerScript(
		  'admin_url',
		  "var admin_url ='".Yii::app()->request->baseUrl."/admin' ",
		  CClientScript::POS_HEAD
		);
		
		$cs->registerScript(
		  'sites_url',
		  "var sites_url ='".Yii::app()->request->baseUrl."' ",
		  CClientScript::POS_HEAD
		);
		
		$cs->registerScript(
		  'home_url',
		  "var home_url ='".Yii::app()->createUrl('/store')."' ",
		  CClientScript::POS_HEAD
		);
		
		$cs->registerScript(
		  'upload_url',
		  "var upload_url ='".Yii::app()->request->baseUrl."/upload' ",
		  CClientScript::POS_HEAD
		);
		
		$cs->registerScript(
		  'captcha_site_key',
		  "var captcha_site_key ='".getOptionA('captcha_site_key')."' ",
		  CClientScript::POS_HEAD
		);
		
		$cs->registerScript(
		  'map_marker',
		  "var map_marker ='".FunctionsV3::getMapMarker()."' ",
		  CClientScript::POS_HEAD
		);		
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/DataTables/jquery.dataTables.min.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/DataTables/fnReloadAjax.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/JQV/form-validator/jquery.form-validator.min.js"
		,CClientScript::POS_END); 
					
		$cs->registerScriptFile($baseUrl."/assets/vendor/jquery.ui.timepicker-0.0.8.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/js/uploader.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/ajaxupload/fileuploader.js"
		,CClientScript::POS_END); 
						
		/*$cs->registerScriptFile($baseUrl."/assets/vendor/bar-rating/jquery.barrating.min.js"
		,CClientScript::POS_END);*/ 
		
		/*$cs->registerScriptFile($baseUrl."/assets/vendor/jquery.nicescroll.min.js"
		,CClientScript::POS_END); */
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/iCheck/icheck.js"
		,CClientScript::POS_END); 
		$cs->registerScriptFile($baseUrl."/assets/vendor/chosen/chosen.jquery.min.js"
		,CClientScript::POS_END); 
		
		/*$cs->registerScriptFile("//google-maps-utility-library-v3.googlecode.com/svn/tags/markerclusterer/1.0/src/markerclusterer.js"
		,CClientScript::POS_END);*/
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/markercluster.js"
		,CClientScript::POS_END); 
							
		$google_key=getOptionA('google_geo_api_key');
		if (!empty($google_key)){
			$cs->registerScriptFile("//maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=".$google_key
			,CClientScript::POS_END); 
		} else {
			$cs->registerScriptFile("//maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"
		    ,CClientScript::POS_END); 
		}
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/jquery.geocomplete.min.js"
		,CClientScript::POS_END); 
						
		if ( Yii::app()->functions->getOptionAdmin('fb_flag')=="" ){
			$cs->registerScriptFile($baseUrl."/assets/js/fblogin.js?ver=1"
		    ,CClientScript::POS_END); 
		}
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/jquery.printelement.js"
		,CClientScript::POS_END); 
                
//		$cs->registerScriptFile($baseUrl."/assets/vendor/fancybox/source/jquery.fancybox.js?ver=1"
//		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/jquery.appear.js"
		,CClientScript::POS_END); 
		
		/*$cs->registerScriptFile($baseUrl."/assets/vendor/flexslider/jquery.flexslider-min.js"
		,CClientScript::POS_END); */
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/magnific-popup/jquery.magnific-popup.js"
		,CClientScript::POS_END); 
		
		/*$cs->registerScriptFile($baseUrl."/assets/vendor/bxslider/jquery.bxslider.min.js"
		,CClientScript::POS_END); */
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/imagesloaded.pkgd.js"
		,CClientScript::POS_END); 
		$cs->registerScriptFile($baseUrl."/assets/vendor/intel/build/js/intlTelInput.js?ver=2.1.5"
		,CClientScript::POS_END); 
		
		/*$cs->registerScriptFile("//www.google.com/recaptcha/api.js?onload=KMRSCaptchaCallback&render=explicit"
		,CClientScript::POS_END,array(
		  'async'=>"async"
		)); */
				
		/*$cs->registerScriptFile("//www.google.com/recaptcha/api.js"
		,CClientScript::POS_END,array(
		  'async'=>'async',
		  'defer'=>'defer'
		)); */
						
		/*$cs->registerScriptFile("//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
		,CClientScript::POS_END); */
		$cs->registerScriptFile($baseUrl."/assets/vendor/bootstrap/js/bootstrap.min.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/parallax.js/parallax.min.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/raty/jquery.raty.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile("//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/js/bootstrap-select.min.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/waypoints/jquery.waypoints.min.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/waypoints/shortcuts/infinite.min.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/gmaps.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/noty-2.3.7/js/noty/packaged/jquery.noty.packaged.min.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/nprogress/nprogress.js"
		,CClientScript::POS_END); 
						
		$cs->registerScriptFile($baseUrl."/assets/vendor/theia-sticky-sidebar.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/readmore.min.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/justified-gallery/js/jquery.justifiedGallery.min.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/EasyAutocomplete/jquery.easy-autocomplete.min.js"
		,CClientScript::POS_END); 
		
		/*$cs->registerScriptFile($baseUrl."/assets/vendor/pickadate.js/lib/picker.js"
		,CClientScript::POS_END); 
		$cs->registerScriptFile($baseUrl."/assets/vendor/pickadate.js/lib/picker.time.js"
		,CClientScript::POS_END); */
		
		if (Yii::app()->functions->getOptionAdmin('theme_time_pick')==2){
			$cs->registerScriptFile($baseUrl."/assets/vendor/timepicker.co/jquery.timepicker.js"
			,CClientScript::POS_END);
		}
		
		$cs->registerScriptFile($baseUrl."/assets/vendor/jquery-cookie.js"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/js/store.js?ver=3"
		,CClientScript::POS_END); 
		
		$cs->registerScriptFile($baseUrl."/assets/js/store-v3.js?ver=3"
		,CClientScript::POS_END); 
	}
	
	public static function registerAllCSSFiles()
	{
		$baseUrl = Yii::app()->baseUrl; 
		$cs = Yii::app()->getClientScript();
		$cs->registerCssFile($baseUrl.'/assets/css/store.css?ver=1.0');		
		$cs->registerCssFile('//ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/base/jquery-ui.css');
		
		$cs->registerCssFile("//fonts.googleapis.com/css?family=Open+Sans|Podkova|Rosario|Abel|PT+Sans|Source+Sans+Pro:400,600,300|Roboto|Montserrat:400,700|Lato:400,300,100italic,100,300italic,400italic,700,700italic,900,900italic|Raleway:300,400,600,800");					
				
		//$cs->registerCssFile("//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
		$cs->registerCssFile($baseUrl."/assets/vendor/font-awesome/css/font-awesome.min.css");
				
		
		$cs->registerCssFile($baseUrl."/assets/vendor/colorpick/css/colpick.css");
		$cs->registerCssFile($baseUrl."/assets/vendor/iCheck/skins/all.css");
		$cs->registerCssFile($baseUrl."/assets/vendor/chosen/chosen.css");
		$cs->registerCssFile($baseUrl."/assets/vendor/fancybox/source/jquery.fancybox.css?ver=1");
		$cs->registerCssFile($baseUrl."/assets/vendor/animate.min.css");
		//$cs->registerCssFile($baseUrl."/assets/vendor/flexslider/flexslider.css");
		$cs->registerCssFile($baseUrl."/assets/vendor/magnific-popup/magnific-popup.css");
		//$cs->registerCssFile($baseUrl."/assets/vendor/bxslider/jquery.bxslider.css");
		$cs->registerCssFile($baseUrl."/assets/vendor/intel/build/css/intlTelInput.css");
		$cs->registerCssFile($baseUrl."/assets/vendor/rupee/rupyaINR.css");			
		
		//$cs->registerCssFile('//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');	
		$cs->registerCssFile($baseUrl."/assets/vendor/bootstrap/css/bootstrap.min.css");		
				
		$cs->registerCssFile($baseUrl."/assets/vendor/raty/jquery.raty.css");	
		
		//$cs->registerCssFile("//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css");
		$cs->registerCssFile($baseUrl."/assets/vendor/ionicons-2.0.1/css/ionicons.min.css");	
		
		$cs->registerCssFile("//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/css/bootstrap-select.min.css");	
		
		$cs->registerCssFile($baseUrl."/assets/vendor/nprogress/nprogress.css");
		
		$cs->registerCssFile($baseUrl."/assets/vendor/justified-gallery/css/justifiedGallery.min.css");
		
		$cs->registerCssFile($baseUrl."/assets/vendor/EasyAutocomplete/easy-autocomplete.min.css");		
		
		/*$cs->registerCssFile($baseUrl."/assets/vendor/pickadate.js/lib/themes/default.css");
		$cs->registerCssFile($baseUrl."/assets/vendor/pickadate.js/lib/themes/default.time.css");*/	
		
		if (Yii::app()->functions->getOptionAdmin('theme_time_pick')==2){
		  $cs->registerCssFile($baseUrl."/assets/vendor/timepicker.co/jquery.timepicker.min.css");
		}
		
		$cs->registerCssFile($baseUrl.'/assets/css/store-v2.css?ver=1.0');
		$cs->registerCssFile($baseUrl.'/assets/css/responsive.css?ver=1.0');
	}	
	
	public static function registerGlobalVariables()
	{				
		echo CHtml::hiddenField('fb_app_id', Yii::app()->functions->getOptionAdmin('fb_app_id'));
		echo CHtml::hiddenField('admin_country_set', Yii::app()->functions->getOptionAdmin('admin_country_set'));
                
                
                
//                @TODO disabled due to google maps issue
//                if( 0 ) { 
		echo CHtml::hiddenField('google_auto_address',     Yii::app()->functions->getOptionAdmin('google_auto_address'));
		echo CHtml::hiddenField('google_default_country',  getOptionA('google_default_country'));
		echo CHtml::hiddenField('disabled_share_location', getOptionA('disabled_share_location'));
//                }
                
                
                
                
		
		echo CHtml::hiddenField('theme_time_pick',Yii::app()->functions->getOptionAdmin('theme_time_pick'));
		
		$website_date_picker_format=getOptionA('website_date_picker_format');
		if (!empty($website_date_picker_format)){
                        echo CHtml::hiddenField('website_date_picker_format',$website_date_picker_format);
                }
                $website_time_picker_format=yii::app()->functions->getOptionAdmin('website_time_picker_format');
                if ( !empty($website_time_picker_format)){
                        echo CHtml::hiddenField('website_time_picker_format',$website_time_picker_format);
                }
                echo CHtml::hiddenField('disabled_cart_sticky',getOptionA('disabled_cart_sticky'));
                        echo "\n";
                        
	}

        
//      @TODO  ADDED three methods, for changes in javascript. Move it to another file later.
        
        
        public static function RegisterAllJSFileQuickFood()
	{		
            $baseUrl = Yii::app()->baseUrl; 
            $cs = Yii::app()->getClientScript();
            //$cs->registerScriptFile('//code.jquery.com/jquery-1.10.2.min.js',CClientScript::POS_END);            
            $cs->registerScriptFile($baseUrl . "/assets/js/quickfood/jquery-1.11.2.min.js", CClientScript::POS_END);            

            
            
            // @TODO from old code, need to decide what to do with it
            // OLD CODE STARTS
//            $cs->registerScriptFile("//code.jquery.com/ui/1.10.3/jquery-ui.js"
//                    ,CClientScript::POS_END); 
            
            

            $js_lang           = Yii::app()->functions->jsLanguageAdmin();
            $js_lang_validator = Yii::app()->functions->jsLanguageValidator();

            $cs->registerScript(
                      'js_lang',
                      'var js_lang = '.json_encode($js_lang).'
                      ',
                      CClientScript::POS_HEAD
                    );
								
            $cs->registerScript(
              'jsLanguageValidator',
              'var jsLanguageValidator = '.json_encode($js_lang_validator).'
              ',
              CClientScript::POS_HEAD
            );

            $cs->registerScript(
              'ajax_url',
              "var ajax_url ='".Yii::app()->request->baseUrl."/admin/ajax' ",
              CClientScript::POS_HEAD
            );
				
            $cs->registerScript(
              'front_ajax',
              "var front_ajax ='".Yii::app()->request->baseUrl."/ajax' ",
              CClientScript::POS_HEAD
            );
					
            $cs->registerScript(
              'admin_url',
              "var admin_url ='".Yii::app()->request->baseUrl."/admin' ",
              CClientScript::POS_HEAD
            );
		
            $cs->registerScript(
              'sites_url',
              "var sites_url ='".Yii::app()->request->baseUrl."' ",
              CClientScript::POS_HEAD
            );
		
            $cs->registerScript(
              'home_url',
              "var home_url ='".Yii::app()->createUrl('/store')."' ",
              CClientScript::POS_HEAD
            );
		
            $cs->registerScript(
              'upload_url',
              "var upload_url ='".Yii::app()->request->baseUrl."/upload' ",
              CClientScript::POS_HEAD
            );
		
            $cs->registerScript(
              'captcha_site_key',
              "var captcha_site_key ='".getOptionA('captcha_site_key')."' ",
              CClientScript::POS_HEAD
            );
		
            $cs->registerScript(
              'map_marker',
              "var map_marker ='".FunctionsV3::getMapMarker()."' ",
              CClientScript::POS_HEAD
            );		
            
            $cs->registerScript(
              'base_url_js',
              "var base_url ='" . $baseUrl . "' ",
              CClientScript::POS_HEAD
            );
		
//            $cs->registerScriptFile($baseUrl."/assets/vendor/DataTables/jquery.dataTables.min.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/DataTables/fnReloadAjax.js"
//            ,CClientScript::POS_END); 
//





//            validation  
            $cs->registerScriptFile($baseUrl . "/assets/vendor/JQV/form-validator/jquery.form-validator.min.js",
                    CClientScript::POS_END
                ); 


            
//            $cs->registerScriptFile($baseUrl."/assets/vendor/jquery.ui.timepicker-0.0.8.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/js/uploader.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/ajaxupload/fileuploader.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/iCheck/icheck.js"
//            ,CClientScript::POS_END); 
//            
//            $cs->registerScriptFile($baseUrl."/assets/vendor/chosen/chosen.jquery.min.js"
//            ,CClientScript::POS_END); 

            /*$cs->registerScriptFile("//google-maps-utility-library-v3.googlecode.com/svn/tags/markerclusterer/1.0/src/markerclusterer.js"
            ,CClientScript::POS_END);*/

//            $cs->registerScriptFile($baseUrl."/assets/vendor/markercluster.js"
//            ,CClientScript::POS_END); 
//
//            $google_key=getOptionA('google_geo_api_key');
//            if (!empty($google_key)){
//                    $cs->registerScriptFile("//maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=".$google_key
//                    ,CClientScript::POS_END); 
//            } else {
//                    $cs->registerScriptFile("//maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"
//                ,CClientScript::POS_END); 
//            }
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/jquery.geocomplete.min.js"
//            ,CClientScript::POS_END); 
//
//            if ( Yii::app()->functions->getOptionAdmin('fb_flag')=="" ){
//                    $cs->registerScriptFile($baseUrl."/assets/js/fblogin.js?ver=1"
//                ,CClientScript::POS_END); 
//            }
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/jquery.printelement.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/jquery.appear.js"
//            ,CClientScript::POS_END); 
//            
//            $cs->registerScriptFile($baseUrl."/assets/vendor/magnific-popup/jquery.magnific-popup.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/imagesloaded.pkgd.js"
//            ,CClientScript::POS_END); 
//            
//            $cs->registerScriptFile($baseUrl."/assets/vendor/intel/build/js/intlTelInput.js?ver=2.1.5"
//            ,CClientScript::POS_END); 
//		
//            $cs->registerScriptFile($baseUrl."/assets/vendor/bootstrap/js/bootstrap.min.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/parallax.js/parallax.min.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/raty/jquery.raty.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile("//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/js/bootstrap-select.min.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/waypoints/jquery.waypoints.min.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/waypoints/shortcuts/infinite.min.js"
//            ,CClientScript::POS_END); 
//
//            
//            $cs->registerScriptFile($baseUrl."/assets/vendor/gmaps.js"
//            ,CClientScript::POS_END); 
//
//            
//            $cs->registerScriptFile($baseUrl."/assets/vendor/noty-2.3.7/js/noty/packaged/jquery.noty.packaged.min.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/nprogress/nprogress.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/theia-sticky-sidebar.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/readmore.min.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/justified-gallery/js/jquery.justifiedGallery.min.js"
//            ,CClientScript::POS_END); 
//
//            $cs->registerScriptFile($baseUrl."/assets/vendor/EasyAutocomplete/jquery.easy-autocomplete.min.js"
//            ,CClientScript::POS_END); 
//
//            if ( Yii::app()->functions->getOptionAdmin('theme_time_pick') == 2 ){
//                    $cs->registerScriptFile($baseUrl."/assets/vendor/timepicker.co/jquery.timepicker.js"
//                    ,CClientScript::POS_END);
//            }

//            $cs->registerScriptFile($baseUrl."/assets/vendor/jquery-cookie.js"
//            ,CClientScript::POS_END); 

//            enable it
//            $cs->registerScriptFile($baseUrl."/assets/js/store.js?ver=3"
//            ,CClientScript::POS_END); 

//            $cs->registerScriptFile($baseUrl."/assets/js/store-v3.js?ver=3"
//            ,CClientScript::POS_END);
            //OLD CODE ENDS
            
            
            
            
            
            // COMMON SCRIPTS -->
            $cs->registerScriptFile(
                    Widgets::quickScriptPath() . 'bootstrap.min.js',
                    CClientScript::POS_END
                    ); 
            
            $cs->registerScriptFile(
                    Widgets::quickScriptPath() . 'common_scripts_min.js',
                    CClientScript::POS_END
                    ); 
            
            $cs->registerScriptFile(
                    Widgets::quickScriptPath() . 'functions.js',
                    CClientScript::POS_END
                    ); 
            
            $cs->registerScriptFile(
                    Widgets::quickScriptPath() . 'validate.js',
                    CClientScript::POS_END
                    ); 
            
            //restaurant menu details page
//            @TODO enable and fix an issue
//            $cs->registerScriptFile(
//                    Widgets::quickScriptPath() . 'infobox.js',
//                    CClientScript::POS_END
//                    ); 
            
            $cs->registerScriptFile(
                    Widgets::quickScriptPath() . 'jquery.sliderPro.min.js',
                    CClientScript::POS_END
                    );      
            
            
            // merchant registration + modal registration
            $cs->registerScriptFile( $baseUrl . "/assets/vendor/intel/build/js/intlTelInput.js?ver=2.1.5",
                    CClientScript::POS_END
                    );
            
            $cs->registerScript(
                      'registration-phone-plugin-init',
                      '  
                        $( document ).ready(function( $ ) {
            
                            if ( $(".mobile_inputs").length ){
                                if ( $("#mobile_country_code").length ){
                                
                                    $(".mobile_inputs").intlTelInput({      
                                        autoPlaceholder: false,
                                        defaultCountry: $("#mobile_country_code").val(),    
                                        autoHideDialCode:true,    
                                        nationalMode:false,
                                        autoFormat:false,
                                        utilsScript: sites_url+"/assets/vendor/intel/lib/libphonenumber/build/utils.js"
                                     });
                                     
                                } else {
                                
                                    $(".mobile_inputs").intlTelInput({      
                                        autoPlaceholder: false,		        
                                        autoHideDialCode:true,    
                                        nationalMode:false,
                                        autoFormat:false,
                                        utilsScript: sites_url+"/assets/vendor/intel/lib/libphonenumber/build/utils.js"
                                     });
                                     
                                }
                            }

                        });

                      ',
                      CClientScript::POS_END
                      );
            
            $cs->registerScriptFile( $baseUrl . "/assets/vendor/chosen/chosen.jquery.min.js", 
                               CClientScript::POS_END
                        );            
            
            $cs->registerScript(
                      'chosen-init',
                      '  
                        $( document ).ready(function( $ ) {
            
                            if( $(".chosen").is(":visible") ) {     
                                //$(".chosen").chosen(); 
                                $(".chosen").chosen({
                                   allow_single_deselect:true,
                                   no_results_text: js_lang.trans_33,
                                   placeholder_text_single: js_lang.trans_32, 
                                   placeholder_text_multiple: js_lang.trans_32
                                });     
                             } 
                             
                        });

                      ' ,
                      CClientScript::POS_END
                      );
            
            $cs->registerScriptFile( $baseUrl . "/assets/vendor/iCheck/icheck.js",
                    CClientScript::POS_END
            ); 
            
            $cs->registerScriptFile( Widgets::quickScriptPath() . "jquery-asSpinner/jquery-asSpinner.min.js", 
                   CClientScript::POS_END
            );    
            $cs->registerScript(
                    'spinner-init',
                    " 
                      $( document ).ready(function( $ ) {

                           $( '.spinner' ).asSpinner({
                                
                           });
                      });

                    ",
                    CClientScript::POS_END
                );
            
            $cs->registerScript(
                    'address-form-init',
                    " 
                      $( document ).ready(function( $ ) {
                            
                           if( $('body').hasClass('menu') ){
                           
                                
                                
                                $('#complexModalHtml').modal({
                                    //backdrop: 'static',
                                    //keyboard: false,
                                    show    : true
                                    //show    : false
                                    
                                });
                                
                           }
                      });

                    ",
                    CClientScript::POS_END
                );
            
            
            // Restaurant Details page
            $cs->registerScript(
                      'image-slider-init',
                      " 
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

                      ",
                      CClientScript::POS_END
                      );
            
            
            // SPECIFIC SCRIPTS -->
            $cs->registerScriptFile(
                    Widgets::quickScriptPath() . 'jquery.cookiebar.js',
                    CClientScript::POS_END
                    );   
            $link = Yii::app()->createUrl('/store/page/privacy-amp-terms');
//            var_dump( $link ); die();
            $cs->registerScript(
                      'cookie-bar-init',
                      " 
                        $(document).ready(function(){
                            'use strict';
                            
                            if( $('body').hasClass('home') ){

                                $.cookieBar({
                                       fixed: true,
                                       message: 'We use cookies to improve your experience on our website. By browsing this website, you agree to our use of cookies.',
                                       policyURL: '" . $link . "'
                               });
                            
                            }
                        });
                      ",
                      CClientScript::POS_END
                      );
              
            
           $cs->registerScriptFile(
                    Widgets::quickScriptPath() . 'video_header.js',
                    CClientScript::POS_END
                    ); 
            
           
           $cs->registerScript(
                      'video-header-init',
                      " 
                        $(document).ready(function() {
                                'use strict';
                                
                             if( $('body').hasClass('home') ) {
                             
                                HeaderVideo.init({
                                 container: $('.header-video'),
                                 header: $('.header-video--media'),
                                 videoTrigger: $('#video-trigger'),
                                 autoPlayVideo: true
                               });   

                             }   

                             

                        });
                      ",
                      CClientScript::POS_END
                      );
           
           
//        $cs->registerScript(
//                'validator-form',
//                " 
//
//                ",
//                CClientScript::POS_END
//            );
        
        $cs->registerScriptFile($baseUrl . "/assets/js/quickfood/form-validation-init.js", 
                   CClientScript::POS_END); 
        
        
        $cs->registerScriptFile($baseUrl . "/assets/js/quickfood/test.js", 
                   CClientScript::POS_END); 
           
        
        
        
        
        // @TODO uncomment later.
        
        $google_key = getOptionA('google_geo_api_key');
        if ( !empty( $google_key ) ){
//            die();
//            $cs->registerScriptFile("//maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=" . $google_key,
//                CClientScript::POS_END
//            ); 
            $cs->registerScriptFile("//maps.googleapis.com/maps/api/js?key=" . $google_key,
                CClientScript::POS_END
            ); 
            
        } else {
            
            $cs->registerScriptFile("//maps.googleapis.com/maps/api/js?v=3.exp&libraries=places",
                CClientScript::POS_END
            ); 
            
        }
        
        
        
        
           
//           $cs->registerScriptFile($baseUrl."/assets/vendor/jquery.geocomplete.min.js", 
//                   CClientScript::POS_END
//            );
            
                                    
//----------------------------------        
        $cs->registerScriptFile($baseUrl . "/assets/vendor/jquery.geocomplete.min_1.js", 
                CClientScript::POS_END
         );
           
            $cs->registerScript(
                'address-form-geo',
                '  
                $(document).ready(function() {
                    "use strict";

                    if ( $("#google_auto_address").val() == "yes" ){	
                    
                    } else {
                        
                        
                        if ( $("#google_default_country").val()=="yes" ){			
                            console.log("init");
                            
                            $("#s").geocomplete({
                                country: $("#admin_country_set").val()			
                            });			   
                            
                        } else {			
                                $("#s").geocomplete();	
                        }
                        

                    }
                    
                    console.log("2");
                    
                    $("#addressForm").modal({
                                    backdrop: "static",
                                    keyboard: false,
                                    show    : false
                                    //show    : true
                                }).on("shown.bs.modal", function(){
                                
                                    var google_auto_address = $("#google_auto_address").val();	
                            
                                
                                    if ( google_auto_address == "yes") {

                                        
                                    } else {
                                        console.log("init2");
                                        $("#client_address").geocomplete();
                                       //$("#client_address").geocomplete({
                                       //     country: $("#admin_country_set").val()
                                       // });	

                                    }

                                });;
                                //$("#addressForm").modal("show");
                


                });
                ',
                CClientScript::POS_END
            );
            
//-----------------------------------------           
//           Datepicker & timepicker
            
            $cs->registerScriptFile( 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js', 
                    CClientScript::POS_END
            );
//            $cs->registerScriptFile( Widgets::quickScriptPath() . "bootstrap-datepicker.min.js", 
//                    CClientScript::POS_END
//            );
            
            $cs->registerScriptFile( Widgets::quickScriptPath() . "jquery.timepicker.min.js", 
                    CClientScript::POS_END
            );
            
            $cs->registerScriptFile( Widgets::quickScriptPath() . "form-date-time-pickers-init.js", 
                    CClientScript::POS_END
            );
//-------------------------------------------            
            
            
//            Details popup Touchspin
            $cs->registerScriptFile( Widgets::quickScriptPath() . "jquery.bootstrap-touchspin.js", 
                    CClientScript::POS_END
            );
            
            $cs->registerScript(
                      'touchspin-init',
                      " 
                        $(document).ready(function() {
                                'use strict';
                            
//                            console.log( markersData );    


                            

                            $('#complexModalHtmlItem1').on('shown.bs.modal', function (event) {
                            
                                var link         = $(event.relatedTarget) // Button that triggered the modal
                                var information1 = button.data('qty') // Extract info from data-* attributes
                                var information2 = button.data('priceChoosen') // Extract info from data-* attributes
                                var information3 = button.data('preference') // Extract info from data-* attributes
                                var information4 = button.data('ingredients') // Extract info from data-* attributes
                                var information5 = button.data('addon') // Extract info from data-* attributes
                                
                                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                                var modal = $(this)
                                modal.find('.modal-title').text('New message to ' + recipient)
                                modal.find('.modal-body #qty').val(recipient)
                                modal.find('.modal-body #price').prop('value', 500)
                                modal.find('.modal-body #price').prop('checked', true) //test radio buttons & checkboxes
                                modal.find('.modal-body #cooking_ref').prop('checked', true) //test radio buttons & checkboxes
                                modal.find('.modal-body #ingredients').prop('checked', true) //test radio buttons & checkboxes
                                modal.find('.modal-body #sub_item_1_0').prop('checked', true) //test radio buttons & checkboxes
                                modal.find('.modal-body #addon_qty_2_0').prop('checked', true) //test radio buttons & checkboxes
                                

                                //$('.modal-body #qty').focus()
                                
                            })









                             //if( $('body').hasClass('home') ) {
                             
                               $('.touchspin').TouchSpin({
                                verticalbuttons: true
                               });
                               
                               $('.addon_qty').TouchSpin({
//                                verticalbuttons: true
                               }).on('change', function(){
                                    console.log( $(this).val() );
//                                    var price_selector = $(this).parent().find('.price-recount-change-event');
                                    //data().price
                                    console.log( price );
                                    //hasClass('');
                               });

                             //}   

                             

                        });
                      ",
                      CClientScript::POS_END
                      );

           $cs->registerScriptFile($baseUrl."/assets/js/quickfood/search.js",
                   CClientScript::POS_END
           );
           
           $cs->registerScriptFile( 'https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js', 
               CClientScript::POS_END
           );
           
           
           
           $cs->registerScriptFile($baseUrl."/assets/js/quickfood/menu.js",
                   CClientScript::POS_END
           );
            
           $cs->registerScriptFile($baseUrl."/assets/js/quickfood/checkout.js",
                   CClientScript::POS_END
           );
//           
           
        //---------------------------//  
        // add gmaps to single restaurant page
        //   @TODO do something with multimaps initialization later
        //---------------------------//
           $cs->registerScriptFile($baseUrl."/assets/js/quickfood/infobox.js",
                   CClientScript::POS_END
           );
           $cs->registerScriptFile( Widgets::quickScriptPath() . "map_single.js",
                   CClientScript::POS_END
           );
//           
//            $cs->registerScriptFile($baseUrl."/assets/js/quickfood/infobox.js",
//                   CClientScript::POS_END
//           );
//           
            
            
	}
	
	public static function registerAllCSSFilesQuickFood()
	{
            $baseUrl = Yii::app()->baseUrl; 
            $cs = Yii::app()->getClientScript();
            
//            ARTHUR Comment this lines
//            $cs->registerCssFile($baseUrl.'/assets/css/store.css?ver=1.0');		
//            $cs->registerCssFile('//ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/themes/base/jquery-ui.css');

            
            
            
            
            
//            $cs->registerCssFile("//fonts.googleapis.com/css?family=Open+Sans|Podkova|Rosario|Abel|PT+Sans|Source+Sans+Pro:400,600,300|Roboto|Montserrat:400,700|Lato:400,300,100italic,100,300italic,400italic,700,700italic,900,900italic|Raleway:300,400,600,800");					
//
//            //$cs->registerCssFile("//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
//            $cs->registerCssFile($baseUrl."/assets/vendor/font-awesome/css/font-awesome.min.css");
//
//
//            $cs->registerCssFile($baseUrl."/assets/vendor/colorpick/css/colpick.css");
            
//            $cs->registerCssFile($baseUrl."/assets/vendor/iCheck/skins/all.css");
//            
            
            
            $cs->registerCssFile( $baseUrl . "/assets/vendor/chosen/chosen.css" );
            
            
//            $cs->registerCssFile($baseUrl."/assets/vendor/fancybox/source/jquery.fancybox.css?ver=1");
//            $cs->registerCssFile($baseUrl."/assets/vendor/animate.min.css");
//            
//            //$cs->registerCssFile($baseUrl."/assets/vendor/flexslider/flexslider.css");
//            $cs->registerCssFile($baseUrl."/assets/vendor/magnific-popup/magnific-popup.css");
//
//            //$cs->registerCssFile($baseUrl."/assets/vendor/bxslider/jquery.bxslider.css");
            
            $cs->registerCssFile( $baseUrl . "/assets/vendor/intel/build/css/intlTelInput.css" );
            
//            $cs->registerCssFile($baseUrl."/assets/vendor/rupee/rupyaINR.css");			
//            
//
//            //$cs->registerCssFile('//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');	
//            $cs->registerCssFile($baseUrl."/assets/vendor/bootstrap/css/bootstrap.min.css");		
//
//            $cs->registerCssFile($baseUrl."/assets/vendor/raty/jquery.raty.css");	
//
//            //$cs->registerCssFile("//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css");
//            $cs->registerCssFile($baseUrl."/assets/vendor/ionicons-2.0.1/css/ionicons.min.css");	
//
//            $cs->registerCssFile("//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.4/css/bootstrap-select.min.css");	
//
//            $cs->registerCssFile($baseUrl."/assets/vendor/nprogress/nprogress.css");
//
//            $cs->registerCssFile($baseUrl."/assets/vendor/justified-gallery/css/justifiedGallery.min.css");
//
//            $cs->registerCssFile($baseUrl."/assets/vendor/EasyAutocomplete/easy-autocomplete.min.css");		
//
//            /*$cs->registerCssFile($baseUrl."/assets/vendor/pickadate.js/lib/themes/default.css");
//            $cs->registerCssFile($baseUrl."/assets/vendor/pickadate.js/lib/themes/default.time.css");*/	
//
//            if (Yii::app()->functions->getOptionAdmin('theme_time_pick')==2){
//              $cs->registerCssFile($baseUrl."/assets/vendor/timepicker.co/jquery.timepicker.min.css");
//            }
//
//            $cs->registerCssFile($baseUrl.'/assets/css/store-v2.css?ver=1.0');
//            $cs->registerCssFile($baseUrl.'/assets/css/responsive.css?ver=1.0');
            
            
            
            
    if ( 0 ) {
    $cs->registerCssFile("//fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,300,300italic", CClientScript::POS_HEAD);					
//    BASE CSS
    $cs->registerCssFile( Widgets::quickStylesPath() . 'base.css', CClientScript::POS_HEAD);
    
//    SPECIFIC CSS 
    $cs->registerCssFile( Widgets::quickStylesPath() . 'base.css', CClientScript::POS_HEAD);
    $cs->registerCssFile( Widgets::quickStylesPath() . 'jquery.cookiebar.css', CClientScript::POS_HEAD);
    $cs->registerCssFile( Widgets::quickStylesPath() . 'slider-pro.min.css', CClientScript::POS_HEAD);
    
//    Modernizr
     $cs->registerScriptFile(
                    Widgets::quickScriptPath() . 'modernizr.js',
                    CClientScript::POS_HEAD
                    );

     $cs->registerScriptFile('/js/html5shiv.min.js', CClientScript::POS_HEAD, array('media' => 'lt IE 9'));
     $cs->registerScriptFile('js/respond.min.js',    CClientScript::POS_HEAD, array('media' => 'lt IE 9'));
    
        }
            
            
	}	
	
	public static function registerGlobalVariablesQuickFood()
	{				
            echo CHtml::hiddenField('fb_app_id',Yii::app()->functions->getOptionAdmin('fb_app_id'));
            echo CHtml::hiddenField('admin_country_set',Yii::app()->functions->getOptionAdmin('admin_country_set'));
            echo CHtml::hiddenField('google_auto_address',Yii::app()->functions->getOptionAdmin('google_auto_address'));
            echo CHtml::hiddenField('google_default_country',getOptionA('google_default_country'));
            echo CHtml::hiddenField('disabled_share_location',getOptionA('disabled_share_location'));

            echo CHtml::hiddenField('theme_time_pick',Yii::app()->functions->getOptionAdmin('theme_time_pick'));

            $website_date_picker_format=getOptionA('website_date_picker_format');
            if (!empty($website_date_picker_format)){
            echo CHtml::hiddenField('website_date_picker_format',$website_date_picker_format);
        }
        $website_time_picker_format=yii::app()->functions->getOptionAdmin('website_time_picker_format');
        if ( !empty($website_time_picker_format)){
	        echo CHtml::hiddenField('website_time_picker_format',$website_time_picker_format);
        }
        echo CHtml::hiddenField('disabled_cart_sticky',getOptionA('disabled_cart_sticky'));
		echo "\n";
	}
        
} /*END CLASS*/