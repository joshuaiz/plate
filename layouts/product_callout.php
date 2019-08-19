<div class="product-callout-outer">

    <div class="product-callout-inner">
    
        <h3><?php the_sub_field( 'heading' ); ?></h3>
        <p><?php the_sub_field( 'content' ); ?></p>
        <?php $image = get_sub_field( 'image' ); ?>
        <?php if ( $image ) { ?>
            <div class="product-callout-image">
                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
            </div>
        <?php } ?>
    
    </div>

</div>