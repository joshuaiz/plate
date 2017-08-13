<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php html_schema(); ?> <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name=viewport content="width=device-width, initial-scale=1">

		<?php // https://sympli.io/blog/2017/02/15/heres-everything-you-need-to-know-about-favicons-in-2017/ ?>
		<link rel="apple-touch-icon" href="older-iPhone.png"> <?php // 120px ?>  
		<link rel="apple-touch-icon" sizes="180x180" href="iPhone-6-Plus.png">  
		<link rel="apple-touch-icon" sizes="152x152" href="iPad-Retina.png">  
		<link rel="apple-touch-icon" sizes="167x167" href="iPad-Pro.png">

		<?php // favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // put font scripts like Typekit here ?>
		<?php // end fonts ?>

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<?php // Customizer Header Image section. Uncomment to use. ?>
				<!-- <?php if( get_header_image() != "" ) { 

					if ( is_front_page() ) { ?>

            		<div id="banner">                
            			
            			<img class="header-image" src="<?php header_image(); ?>" alt="Header graphic" />                
            			
            		</div>

            	<?php }

            	} ?> -->

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<?php // You can use text or a logo (or both) in your header. Uncomment the below to use text. ?>
					<div id="site-title" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></div>

					<!-- <div id="logo" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/template_logo.png" /></a></div> -->

					<nav class="header-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php // see all default args here: https://developer.wordpress.org/reference/functions/wp_nav_menu/ ?>
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'templatetheme' ),  // nav name
    					         'menu_class' => 'nav top-nav main-menu cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
						)); ?>

					</nav>

					<?php // if you'd like to use the site description un-comment the below <p></p>. If not, leave as-is or delete it. ?>
					<!-- <p class="site-description"><?php bloginfo('description'); ?></p> -->

				</div>

			</header>
