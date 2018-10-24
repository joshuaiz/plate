<?php
/**
 * This file is loaded if no other template files are found.
 * 
 * Know your WordPress template hierarchy:
 * https://wphierarchy.com
 * 
 */

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap">

			<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

				<?php // Edit the loop in /templates/index-loop. Or roll your own. ?>
				<?php get_template_part( 'templates/index','loop'); ?>

			</main>

		</div>

	</div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
