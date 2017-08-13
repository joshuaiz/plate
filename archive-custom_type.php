<?php
/*
 * Custom Post Type Archive Template
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type call is "register_post_type( 'staff' )",
 * then your template name should be archive-staff.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php get_template_part( 'templates/header', 'title'); ?>

						<?php // Edit the loop in /templates/archive-loop. Or roll your own. ?>
						<?php get_template_part( 'templates/archive', 'loop'); ?>

					</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
