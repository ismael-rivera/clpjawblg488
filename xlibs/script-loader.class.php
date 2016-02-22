<?php
/*
Scriptloader Header Class v0.1.3
---------------------------------
*/

class ScriptLoader{
	
	static function init() {
        add_action('init', array(__CLASS__, 'load_styles'));
		add_action('wp_footer', array(__CLASS__, 'load_scripts'));
	}
	   
	static $dljs = array(
	      'jquery-1.10.2.min.js',
		  'jquery-ui-1.10.4.custom.min.js',
		  'jquery.easing.1.3.min.js',
		  //'jquery.bxslider.js',
		  'dasky.eval.js', 
		  'modernizr-latest.js',
		  'waypoints.min.js', 
		  'waypoints-sticky.min.js',
		  'jquery.smooth-scroll.min.js',
		  //'jquery.cycle2.js',
		  'jquery.transit.min.js',
		  'jquery.tipsy.js',
		  'bootstrap.js',
		  'jquery.scrollUp.min.js',
		  'jquery.jcarousel.min.js',
		  'jquery.ui.touch-punch.js',
		  'jquery.prettyPhoto.js',
		  'timeline.js', 
	    );
	
	/*For external file place full uri of script under $xjs array*/
	static $xjs = array(
	      'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false',
		  'http://platform.twitter.com/widgets.js',
		  'http://connect.facebook.net/en_US/all.js#xfbml=1',
	);	
		
    static $djs = array(
	       'loader_anim.js',
		   'jcarousel_ajax.js',
		   'navigation.js',
		   //'gmap.js',
		   'tweets.js', 
		   'site.js',
		   'scrollUp.js',
		   //'livereload.js'	
	    );
		
	static $cljs = array(
		   'libs.js'
		);
	static $cjs = array(
		   'js.js'
		);
		
	static $mdjs = array(
	       'jquery.mobile-1.3.2.min.js',
		   'index.js'
		);
	
	static $mcljs = array(
	       'mlibs.js'
		);
	
	static $mcjs = array(
		   'mjs.js'
		);			
	
		
		  
	public static function get_JS_arrays_output($type){	 
	
	
	if($type !== self::$xjs){			
				$int=0;     
				foreach ($type as $file){
				$int++;
					
					if ($type == self::$dljs) {
						$tag = 'dljs-0'.$int;
						$url = AssetManager::getmbAsset( 1, 'js', '/libs');
					} elseif($type == self::$djs) {
						$tag = 'djs-0'.$int;
						$url = AssetManager::getmbAsset( 1, 'js');			
					} elseif($type == self::$cljs) {
						$tag = 'cljs-0'.$int;
						$url = AssetManager::getmbAsset( 2, 'js', '/libs');	
					} elseif($type == self::$cjs) {
						$tag = 'cjs-0'.$int;
						$url = AssetManager::getmbAsset( 2, 'js');	
					} elseif($type == self::$mdjs) {
						$tag = 'mdjs-0'.$int;
						$url = AssetManager::getmbAsset( 1, 'js', '/libs/mobile');	
					} elseif($type == self::$mcljs) {
						$tag = 'mcljs-0'.$int;
						$url = AssetManager::getmbAsset( 1, 'js', '/libs/');
					} elseif($type == self::$mcjs) {
						$tag= 'mcjs-0'.$int;
						$url = AssetManager::getmbAsset( 1, 'js', '/libs/');	
					} 
					
					$output[$tag]=$file;
				}
		 	    
			if(isset($output)){		  
			    foreach ($output as $key => $val){
					wp_register_script($key, $url . '/' . $val);
					wp_enqueue_script( $key );
					}
			}
	}
					
	if($type == self::$xjs) {
					$xint=0;
					foreach($type as $xfile){
						$xint++;
						$xtag = 'xjs-0'.$xint;
						$url = AssetManager::getmbAsset( NULL, NULL, NULL, $xfile);	
					}
					
				$xscript[$xtag] = $xfile;
				foreach ($xscript as $xkey => $xval){
					wp_register_script($xkey ,$xval, NULL, NULL, true);
					wp_enqueue_script( $xkey );
					}
				}
   }
	
	
	
   public static function load_styles(){
    $detect = new Mobile_Detect;	   
	if(! is_admin()){
		   
	   if (CSS_COMPILE === true){
			wp_register_style( 'global', get_stylesheet_directory_uri().'/deploy.css', '', '', 'screen' );
			wp_enqueue_style( 'global' );
			} else {			
			wp_register_style( 'global_dev', get_stylesheet_directory_uri().'/develop.css', '', '', 'screen' );
			wp_enqueue_style( 'global_dev' );
			if ($detect->isMobile() || $detect->isTablet()){
			wp_register_style( 'mobile_dev', get_stylesheet_directory_uri().'/develop_mobi.css', '', '', 'screen' );
			wp_enqueue_style( 'mobile_dev' );	
				}
			}
			
	}
	if(is_admin()){
		wp_register_style( 'theme_options', get_stylesheet_directory_uri().'/assets/css/theme_options.css', '', '', 'screen' );
		   wp_enqueue_style( 'theme_options' );
		}
  }

   public static function load_scripts(){
	   if(! is_admin()){
			wp_deregister_script('jquery');
			wp_deregister_script('jquery-ui-core');
	   
	   if (JS_COMPILE === true){
		    self::get_JS_arrays_output(self::$xjs);
		    self::get_JS_arrays_output(self::$cljs);
		    self::get_JS_arrays_output(self::$cjs);
	   }else{
		    self::get_JS_arrays_output(self::$xjs);
		    self::get_JS_arrays_output(self::$dljs);		   
			self::get_JS_arrays_output(self::$djs);
		   }
	   }
   }
   
}
/*End class*/