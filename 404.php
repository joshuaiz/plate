<?php get_header(); ?>
	
	<div id="content">

		<div id="inner-content" class="wrap cf">

			<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<article id="post-not-found" class="hentry cf">

					<header class="article-header">

						<?php get_template_part( 'templates/header', 'title'); ?>

					</header>

					<section class="entry-content">

						<div class="404-txt">

							<h3><?php _e( 'I\'m sorry Dave, I\'m afraid I can\'t do that.', 'platetheme' ); ?></h3>
							<p>We couldn't find what you are looking for, please try searching.</p>

						</div>

					</section>

					<section class="search">

							<div class="search-form-outer"><?php get_search_form(); ?></div>

					</section>

					<footer class="article-footer">

					</footer>

				</article>

			</main>

		</div>

	</div>

<?php get_footer(); ?>
