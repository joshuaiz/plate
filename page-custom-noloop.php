<?php
/*
 Template Name: Custom Page With No Loop
 *
 * This is the base custom page template with no loop(!). Why no loop?
 * If you're using ACF fields and replacing the main content box and
 * using this template, you won't need a loop. 
 *
 * To use for your theme, change the name of your template from 
 * "Custom Page Example" above. Example: 
 * 
 * Template Name: My Custom Page 
 * 
 * Then save this template as page-mycustompage.php and it will show up 
 * as a template in the Page Templates drop-down on page edit screens in the admin. 
 * 
 * Important: the "Template Name: " is required by WordPress so that your template
 * will show up as a choice in the admin.
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

            <main id="main" class="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="https://schema.org/Blog">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

                    <header class="article-header">

                        <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

                    </header> <?php // end article header ?>

                    <section class="entry-content" itemprop="articleBody">

                        <?php // place your main content ACF calls here. ?>

                    </section> <?php // end article section ?>

                    <footer class="article-footer">

                    </footer>

                </article>

            </main>

        </div>

    </div>

    <?php // remove the sidebar if you don't need it ?>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>
