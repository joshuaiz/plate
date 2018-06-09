<?php // get post count so we can use everywhere.
$count = $GLOBALS['wp_query']->post_count;
?>

<article id="post-not-found" class="hentry post-not-found">
    <header class="article-header">
        <h2 class="404-title"><?php echo _n( 'Sorry, no post found.' , 'Sorry, no posts found.' , $count, 'platetheme' ); ?></h2>
    </header>
    <section class="entry-content">
        <p><?php _e( 'Your query didn\'t return anything. Try checking things.', 'platetheme' ); ?></p>
    </section>
    <footer class="article-footer">
        <!-- <?php _e( 'This is the error message in the templates/404.php template.', 'platetheme' ); ?> -->
    </footer>
</article>