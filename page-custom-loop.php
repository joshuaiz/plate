<?php
/*
 Template Name: Custom Page With Full Loop
 *
 * This is the base custom page template with the full loop (instead of it split
 * out into template parts).
 *
 * Change the "Template Name" at the top and save as page-newname.php and it will
 * show up as a template in the Page Templates drop-down on page edit screens in
 * the admin.
 *
 * Then change it as you need for each page or groups of pages.
 *
 * Convenience, look it up.
 *
 * Remember to keep the markup and content separate.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
 *
 * Visual interactive WordPress template hierarchy: https://wphierarchy.com
*/
?>

<?php get_header(); ?>

    <div id="content">

        <div id="inner-content" class="wrap">

            <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                        <header class="article-header">

                            <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

                            <div class="byline-wrap">

                                <?php // Get the author name; wrap it in a link.
                                if ( get_the_author_meta( 'ID' ) ) { $byline = sprintf( __( 'by %s', 'platetheme' ), '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a></span>' );

                                echo '<span class="posted-on">' . plate_time_link() . '</span><span class="byline"> ' . $byline . '</span>';

                                } else { echo '<span class="posted-on">Posted on:' . plate_time_link() . '</span>'; }

                                ?>
                                
                            </div>

                        </header> <?php // end article header ?>

                        <section class="entry-content" itemprop="articleBody">

                            <?php the_content(); ?>

                        </section> <?php // end article section ?>

                        <footer class="article-footer">

                        </footer>

                        <?php comments_template(); ?>

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
