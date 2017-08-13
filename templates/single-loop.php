<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

		<header class="article-header entry-header">

			<h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

			<?php // Delete or comment out if you don't need this on your page or post. Edit in /templates/byline.php ?>
			<?php get_template_part( 'templates/byline'); ?>
                  
		</header> <?php // end article header ?>

        <section class="entry-content cf" itemprop="articleBody">

        	<?php if ( has_post_format()) { 
        		get_template_part( 'format', get_post_format() ); 
        	}
        	?>
        
        	<?php the_content(); ?>

        </section> <?php // end article section ?>

		<footer class="article-footer">

			<?php get_template_part( 'templates/category-tags'); ?>

		</footer> <?php // end article footer ?>

        <?php comments_template(); ?>

	</article> <?php // end article ?>

<?php endwhile; endif; ?>