<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php html_schema(); ?> <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>

        <?php /**
         * updated with non-blocking order
         * see here: https://csswizardry.com/2018/11/css-and-network-performance/
         * 
         * In short, place any js here that doesn't need to act on css before any css to
         * speed up page loads.
         */
        ?>

        <?php // drop Google Analytics here ?>
        <?php // end analytics ?>

        <?php // See everything you need to know about the <head> here: https://github.com/joshbuchea/HEAD ?>
        <meta charset='<?php bloginfo( 'charset' ); ?>'>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php // favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/favicon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/favicon.ico">
        <![endif]-->

        <!-- Apple Touch Icon -->
        <link rel="apple-touch-icon" href="<?php echo get_theme_file_uri(); ?>/library/images/apple-touch-icon.png">

        <!-- Safari Pinned Tab Icon -->
        <link rel="mask-icon" href="<?php echo get_theme_file_uri(); ?>/library/images/icon.svg" color="#0088cc">

        <?php // updated pingback. Thanks @HardeepAsrani https://github.com/HardeepAsrani ?>
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>

        <?php // put font scripts like Typekit/Adobe Fonts here ?>
        <?php // end fonts ?>

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

    </head>

	<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

        <?php // remove grid classes below if you aren't using CSS Grid (but you should) ?>
		<div id="container" class="grid grid-aside">

			<header class="header" id="header" role="banner" itemscope itemtype="https://schema.org/WPHeader">

                <div id="inner-header" class="wrap">

                    <?php // updated with proper markup and wrapping div for organization ?>
                    <div id="bloginfo" itemscope itemtype="https://schema.org/Organization">

                        <?php 
                        /*
                        * You can use text or a logo (or both) in your header. If you use both, 
                        * try placing them in a single link element for better accessibility.
                        */
                        ?>
                        <?php if (has_custom_logo()) { ?>

                            <div id="logo" itemprop="logo">
                                <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>"><?php the_custom_logo(); ?></a>
                            </div>

                            <div id="site-title" class="site-title" itemprop="name">
                                <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </div>
                            
                        <?php } else { ?>

                            <div id="logo" itemprop="logo">
                                <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
                                    <img src="<?php echo get_theme_file_uri(); ?>/library/images/logo.svg" itemprop="logo" alt="site logo" />
                                </a>
                            </div>

                            <div id="site-title" class="site-title" itemprop="name">
                                <a href="<?php echo home_url(); ?>" rel="nofollow" itemprop="url" title="<?php bloginfo('name'); ?>">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </div>

                        <?php } ?>
                        
                    </div>

                    <nav class="header-nav primary-menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="<?php _e( 'Primary Menu ', 'platetheme' ); ?>">

                        <?php // added primary menu marker for accessibility ?>
                        <h2 class="screen-reader-text"><?php _e( 'Primary Menu', 'platetheme' ); ?></h2>

                        <?php // see all default args here: https://developer.wordpress.org/reference/functions/wp_nav_menu/ ?>

                        <?php wp_nav_menu( array(

                            'container' => false,                          // remove nav container
                            'container_class' => 'menu',                   // class of container (should you choose to use it)
                            'menu' => __( 'The Main Menu', 'platetheme' ), // nav name
                            'menu_class' => 'nav top-nav main-menu',       // adding custom nav class
                            'theme_location' => 'main-nav',                // where it's located in the theme

                            )
                        ); ?>

                    </nav>

                </div>

            </header>
