<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap">

			<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

				<?php // Edit the loop in /templates/single-loop. Or roll your own. ?>
				<?php get_template_part( 'templates/single', 'loop'); ?>

			</main>

			<?php // related posts function; uncomment below to use ?>
			<?php // plate_related_posts(); ?>

		</div>

	</div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
