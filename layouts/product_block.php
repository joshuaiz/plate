<div class="product-block-outer">

    <?php $side = get_sub_field('image_side'); ?>

    <div class="product-block-inner <?php echo $side['value']; ?>">
    
        <?php $image = get_sub_field( 'image' ); ?>
        <?php if ( $image ) { ?>
            <div class="product-block-image">
                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
            </div>
        <?php } ?>
        <div class="product-block-content">
            <?php $brand_logo = get_sub_field( 'brand_logo' ); ?>
            <?php if ( $brand_logo ) { ?>
                <div class="brand-logo">
                    <img src="<?php echo $brand_logo['url']; ?>" alt="<?php echo $brand_logo['alt']; ?>" />
                </div>
            <?php } ?>
            <h3><?php the_sub_field( 'heading' ); ?></h3>
            <p><?php the_sub_field( 'content' ); ?></p>
        </div>
    
    </div>

</div>