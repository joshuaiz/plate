<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap">

			<main id="main" class="main" role="main">

				<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'platetheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('post-search-result'); ?> role="article">

						<header class="entry-header article-header">

                            <h3 class="search-title entry-title">

                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

                            </h3>
                            
          					<?php get_template_part( 'templates/byline'); ?>

						</header>

						<section class="entry-content">
							
							<?php get_template_part( 'templates/content', 'excerpt'); ?>

						</section>

						<footer class="article-footer">

							<?php get_template_part( 'templates/category-tags'); ?>

						</footer> <!-- end article footer -->

					</article>

				<?php endwhile; ?>

                    <?php plate_page_navi( $wp_query ); ?>

                <?php else : ?>

                    <?php get_template_part( 'templates/404'); ?>

                <?php endif; ?>

			</main>

		</div>

	</div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
