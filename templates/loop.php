<?php
/**
 * 
 * Template Part: The Loop
 * Description: Loop code for Pages and Posts.
 * 
 * @example <?php get_template_part( 'templates/loop'); ?>
 * 
 * @author  Joshua Michaels for studio.bio <info@studio.bio>
 * @since   1.0.0
 * @version 1.3
 * @license WTFPL
 * 
 * @see     https://konstantin.blog/2013/get_template_part/
 *          http://buildwpyourself.com/get-template-part/
 * 
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

		<header class="article-header">

            <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

			<?php // Delete or comment out if you don't need this on your page or post. Edit in /templates/byline.php ?>
			<?php get_template_part( 'templates/byline'); ?>

		</header> <?php // end article header ?>

		<section class="entry-content" itemprop="articleBody">
			
			<?php the_content(); ?>
		
		</section> <?php // end article section ?>

		<footer class="article-footer">

		</footer>

        <?php if( post_type_supports( get_post_type(), 'comments' ) ) {

            if( comments_open() ) {

                comments_template();
                
            }

        } ?>

	</article>

<?php endwhile; ?>

    <?php plate_page_navi( $wp_query ); ?>

<?php else : ?>

    <?php get_template_part( 'templates/404'); ?>

<?php endif; ?>