<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php echo bloginfo('name'); echo wp_title(' - '); ?></title>
	
	<meta name="title" content="<?php echo bloginfo('name'); echo wp_title(' - '); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright Your Name Here 2011. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">
	
	<!--  Mobile Viewport meta tag
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	
	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery-1.7.1.min.js"></script>
	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/_/js/cufon-yui.js"></script>
	
	<!--<script src="<?php bloginfo('template_directory'); ?>/_/js/forza_325.font.js"></script>-->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/Forza_Light_300-Forza_Medium_350-Forza_Light_italic_300-Forza_Medium_italic_350.font.js"></script>
	
	
	<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.nivo.slider.pack.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.validate.min.js"></script>
	
	<!--<script src="<?php bloginfo('template_directory'); ?>/_/js/highlight.js"></script>
	
	<script src="<?php bloginfo('template_directory'); ?>/_/js/highlight.jquery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/languages/ruby.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/languages/python.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/languages/javascript.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/languages/cpp.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/_/js/languages/php.js"></script> -->

	
	<!-- <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> -->

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

		

