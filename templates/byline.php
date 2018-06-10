<?php
/**
 * 
 * Template Part: Byline
 * Description: Code for byline using functions from WP Twenty Seventeen theme.
 * 
 * @example <?php get_template_part( 'templates/byline'); ?>
 * 
 * @author  Joshua Michaels for studio.bio <info@studio.bio>
 * @since   1.0.0
 * @version 1.3
 * @license WTFPL
 * 
 * @see     WordPress Twenty Seventeen theme code.
 * 
 */
?>

<div class="byline-wrap">

    <?php // Get the author name; wrap it in a link.
    if ( get_the_author_meta( 'ID' ) ) {
        $byline = sprintf(
        /* translators: %s: post author */
        __( 'by %s', 'platetheme' ),
        '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a></span>' );

        // Finally, let's write all of this to the page.
        echo '<span class="posted-on">' . plate_time_link() . '</span><span class="byline"> ' . $byline . '</span>';

    } else {

        echo '<span class="posted-on">Posted on:' . plate_time_link() . '</span>';

    } ?>

</div>