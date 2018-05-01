<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap">

			<main id="main" class="main" role="main">

				<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'platetheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

						<header class="entry-header article-header">

							<?php get_template_part( 'templates/header', 'title'); ?>

          					<?php get_template_part( 'templates/byline'); ?>

						</header>

						<section class="entry-content">
							
							<?php get_template_part( 'templates/content', 'excerpt'); ?>

						</section>

						<footer class="article-footer">

							<?php get_template_part( 'templates/category-tags'); ?>

						</footer> <!-- end article footer -->

					</article>

					<?php get_template_part( 'templates/post-navigation'); ?>

				<?php endwhile; endif; ?>

			</main>

		</div>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
