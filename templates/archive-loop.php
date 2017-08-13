<?php

the_archive_title( '<h1 class="page-title">', '</h1>' );

// Not all themes show these but you can if you want to
the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

		<header class="entry-header article-header">

			<?php get_template_part( 'templates/header', 'title'); ?>
		
			<?php get_template_part( 'templates/byline'); ?>

		</header>

		<section class="entry-content cf">

			<div class="post-thumbnail">

				<?php the_post_thumbnail( 'template-thumb-300' ); ?>

			</div>

			<?php the_excerpt(); ?>

		</section>

		<footer class="article-footer">

			<?php get_template_part( 'templates/category-tags'); ?>

		</footer>

	</article>

<?php get_template_part( 'templates/post-navigation'); ?>

<?php endwhile; endif; ?>