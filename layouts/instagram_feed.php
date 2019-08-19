<div class="instagram-feed-outer">

    <div class="instagram-feed-inner">
    
        <h2><?php the_sub_field( 'heading' ); ?></h2>

        <div class="stroke-small"></div>

        <?php $feed = get_sub_field('shortcode'); ?>

        <div class="instagram-feed">

            <?php echo do_shortcode($feed); ?>

        </div>
        
    </div>

</div>