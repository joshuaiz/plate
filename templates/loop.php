<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

		<header class="article-header">

			<?php get_template_part( 'templates/header', 'title'); ?>

			<?php // Delete or comment out if you don't need this on your page or post. Edit in /templates/byline.php ?>
			<?php get_template_part( 'templates/byline'); ?>

		</header> <?php // end article header ?>

		<section class="entry-content cf" itemprop="articleBody">
			
			<?php the_content(); ?>
		
		</section> <?php // end article section ?>

		<footer class="article-footer cf">

		</footer>

		<?php comments_template(); ?>

	</article>

<?php endwhile; endif; ?>