<?php
/*
 Template Name: Custom Page Example
 *
 * This is the base custom page template. 
 * 
 * To use for your theme, change the name of your template from 
 * "Custom Page Example" above. Example: 
 * 
 * Template Name: My Custom Page 
 * 
 * Then save this template as page-mycustompage.php and it will show up 
 * as a template in the Page Templates drop-down on page edit screens in the admin. 
 * 
 * Important: the "Template Name: " is required by WordPress so that your template
 * will show up as a choice in the admin.
 * 
 * Remember to keep the markup and content separate. 
 * 
 * For more info: http://codex.wordpress.org/Page_Templates
 * 
 * Visual interactive WordPress template hierarchy: https://wphierarchy.com
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap">

			<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

				<?php // Edit the loop in /templates/loop. Or roll your own. ?>
				<?php get_template_part( 'templates/loop'); ?>

			</main>

		</div>

	</div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
