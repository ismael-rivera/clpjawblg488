<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
		<meta name="author" content="">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
		<!-- Bootstrap Core CSS -->

	    <link href="assets/css/bootstrap.css" rel="stylesheet">
	    <link href="assets/css/main.css" rel="stylesheet">
	   
	    <!-- Custom CSS -->
		<?php wp_head(); ?> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!--     
	    <script src="assets/js/compile/compiled.libs.js"></script>
	    <script src="assets/js/compile/compiled.js"></script>
	 -->
    <script>
        function imgError(image) {
            image.onerror = "";
            image.src = "assets/img/noimage2.jpg";
            return true;
        }
    </script>
    <style>
            /*body {background-color:#39424D;}*/
            /*.grid-item { border: 1px solid #000; padding: 20px; width: auto; float: left; clear: both;}*/
            .item-title-link{ clear:both; display:block;}
            #dylay { margin: 0; padding: 0; list-style: none; }
            #dylay li { float: left; margin: 2px; border-radius: 5px; padding: 2px 5px; font-size: 10px; }
            .myredbox { width:80px; height:80px; background-color: red;}
    </style>

	</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">