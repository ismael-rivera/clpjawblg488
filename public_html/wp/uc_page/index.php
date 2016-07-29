<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Moacy Barros</title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/style.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

<?php 
$uc_dir="uc_page/";
?>

<style type="text/css">
html,body{
	margin: 0px;
	padding: 0px;
	height: 100%;
	width: 100%;	
	}
html{
	background: #CCC url(<?php echo $uc_dir ?>images/bg3.png) repeat;
}
body{}
header{
	height: 20px;
	margin-top: 0px;
}
.grid{
	width: 960px;
	margin-right: auto;
	margin-left: auto;
	}
/*.logo{
	background: url(<?php //echo $uc_dir ?>images/logo.png) no-repeat 20px 20px;
	height: 138px;
	width: 497px;
	display: block;
	margin-right: auto;
	margin-left: auto;
}*/
#header_wrapper{
	height: 20px;
	width: 100%;
	margin-top: 0px;
	}
#content_wrapper{
	
	}
#footer_wrapper{
	
	}				
#const-sign, #maint-sign{
	margin-right: auto;
	margin-left: auto;
	height: 800px;
	width: 960px;
}
#const-sign{	
	background: url(<?php echo $uc_dir ?>images/under_construction.png) no-repeat 50% 50px;
	}
#maint-sign{
	background: url(<?php echo $uc_dir ?>images/under_maintenance.png) no-repeat 50% 50px;
	}	
.forms_wrap_outer001, .forms_wrap_inner001{
	-moz-border-radius: 20px; 
  	-webkit-border-radius: 20px; 
  	border-radius: 20px;
	}	
.forms_wrap_outer001{
	width: 962px;
	height: 804px;
	margin-right: auto;
	margin-left: auto;
	border: 1px solid #BCB7AD;
	background: #F6F6F6;
	margin-bottom: 100px;
	}
.forms_wrap_inner001{
	border: 2px solid #FFF;
	}	
</style>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
</head>
<body>
<div id="header_wrapper">
<header class="grid"></header>
</div>
<div role="main">
<div class="forms_wrap_outer001">
<div class="forms_wrap_inner001">
<?php 
$signs = array('construction' , 'maintenance');
$sign_value = $signs[1];
switch ($sign_value) {
    case $signs[0]:
        echo '<div id="const-sign"></div>';
        break;
    case $signs[1]:
        echo '<div id="maint-sign"></div>';
        break;
} ?>

</div></div>
  </div>
  <footer>

  </footer>
</body>
</body>
</html>
