<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!--<meta property="og:image" content="http://tedxyouthhillsborough.com/img/logo_alt.jpg"/>-->
	<meta property="fb:page_id" content="317882900197" />
<<<<<<< HEAD
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
=======
	<!--Images-->
>>>>>>> FETCH_HEAD
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png" />
	<link rel="shortcut icon" href="favicon.ico" />
	<!--Style-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="http://feeds.feedburner.com/tedxyouthhillsborough">
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	
	<!-- Waypoints JS -->
  	<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
	<!--Animate-->
	<script type="text/javascript"
        src="http://code.jquery.com/jquery-latest.js"></script>
	<!-- FLEX Slider -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
	
	<?php wp_head(); ?>
  	<?php roots_head(); ?>
	
	<!-- Hook up the FlexSlider -->
	<script type="text/javascript" charset="utf-8">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				directionNav: false,
				controlNav: false
			});
		});

	</script>
	
</head>

<body <?php body_class(roots_body_class()); ?>>

	<div id="wrap">
	
		<header role="banner" class="mainHeader">
			
			<a href="<?php echo home_url(); ?>" class="logo_lrg">TEDxYouth@Hillsborough</a>
			
			<a href="#mainNav" class="mobileNav_btn">Menu</a>
			<a href="/event-details/" class="bannerNav">
<<<<<<< HEAD

				<h2><div><br>Saturday May 24th 2014<br></div></h2>
				<div style="color:rgb(114,114,114);top:30px"><br>THE NUEVA SCHOOL<br></div>
=======
				<h2><div style="margin-right:-350px"><br>SATURDAY MAY 24TH 2014<br></div>
				<div style="top:30px;color:rgb(114,114,114);"><br>THE NUEVA SCHOOL<br></div></h2>
>>>>>>> c8be3dff7d8b704fbfc5642c9f8e2046bb86c8b4
			</a>
		</header>
		<header role="banner" class="subHeader" style="height:65px">
			<a href="http://tedxyouthhillsborough.com/sponsors" class="button">About</a>
			<a href="http://tedxyouthhillsborough.com/speakers" class="button">Speakers</a>
			<a href="http://tedxyouthhillsborough.com/sponsors" class="button">Sponsors</a>
			<a href="http://tedxyouthhillsborough.com/event-details" class="button">Event Details</a>
		</header>
		
	    <div id="main" role="main">
			
			<div id="content" class="clearfix">