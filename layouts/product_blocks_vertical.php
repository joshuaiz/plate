<div class="product-blocks-vertical-outer">

    <div class="product-blocks-vertical-inner">
    
        <?php if ( have_rows( 'product_blocks' ) ) : ?>
            <ul class="nostyle product-blocks-vertical">
                <?php while ( have_rows( 'product_blocks' ) ) : the_row(); ?>
                    <li class="product-block-vertical">
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) { ?>
                            <div class="product-block-image">
                                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                            </div>
                        <?php } ?>
                        <div class="product-block-content">
                            <h3><?php the_sub_field( 'heading' ); ?></h3>
                            <p><?php the_sub_field( 'content' ); ?></p>
                            <div class="icon-group-outer">

                                <div class="icon-group-inner">

                                    <?php if ( have_rows( 'icons', 8 ) ) : ?>
                                        <ul class="nostyle icon-group">
                                            <?php while ( have_rows( 'icons', 8 ) ) : the_row(); ?>
                                                <li class="icon">
                                                    <?php $white_icon = get_sub_field( 'white_icon' ); ?>
                                                    <?php if ( $white_icon ) { ?>
                                                        <div class="white-icon">
                                                            <img src="<?php echo $white_icon['url']; ?>" alt="<?php echo $white_icon['alt']; ?>" />
                                                        </div>
                                                    <?php } ?>

                                                    <?php $green_icon = get_sub_field( 'green_icon' ); ?>
                                                    <?php if ( $green_icon ) { ?>
                                                        <div class="green-icon">
                                                            <img src="<?php echo $green_icon['url']; ?>" alt="<?php echo $green_icon['alt']; ?>" />
                                                        </div>
                                                    <?php } ?>
                                                </li>

                                            <?php endwhile; ?>
                                        </ul>

                                    <?php else : ?>
                                        <?php // no rows found ?>
                                    <?php endif; ?>

                                </div>

                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    
    </div>

</div>