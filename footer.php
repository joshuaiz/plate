			<footer id="footer" class="footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">

				<div id="inner-footer" class="wrap">

					<?php /* Uncomment this and the 'Footer Links' menu registration in functions.php to use. 
					Or delete it if you're not using it.

					<nav role="navigation">
						wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'platetheme' ),   // nav name
    					'menu_class' => 'nav footer-nav',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'plate_footer_links_fallback'  // fallback function
						)); 
					</nav> 

					*/ ?>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/functions.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- This is the end. My only friend. -->
