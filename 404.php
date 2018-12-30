<?php get_header(); ?>
	
	<div id="content">

		<div id="inner-content" class="wrap">

			<main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

				<article id="post-not-found" class="hentry">

					<header class="article-header">

						<?php get_template_part( 'templates/header', 'title'); ?>

					</header>

					<section class="entry-content">

						<div class="404-txt">

							<h3><?php _e( 'I\'m sorry Dave, I\'m afraid I can\'t do that.', 'platetheme' ); ?></h3>
							<p><?php _e( 'We couldn\'t find what you are looking for, please try searching.', 'platetheme' ); ?></p>

						</div>

					</section>

					<section class="search-outer">

						<div class="search-form-outer">
                            
                            <?php get_search_form(); ?>
                            
                        </div>

					</section>

					<footer class="article-footer">

					</footer>

				</article>

			</main>

		</div>

	</div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
