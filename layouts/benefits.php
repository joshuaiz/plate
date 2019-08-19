<div class="benefits-outer">

    <div class="benefits-inner">
    
        <?php if ( have_rows( 'benefits' ) ) : ?>
            <ul class="nostyle benefits">
                <?php while ( have_rows( 'benefits' ) ) : the_row(); ?>
                    <li class="benefit">
                        <div class="title-wrap">
                            <div class="icon-wrap">
                                <?php $icon = get_sub_field( 'icon' ); ?>
                                <?php if ( $icon ) { ?>
                                    <div class="icon color-icon">
                                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                                    </div>
                                <?php } ?>
                                <?php $white_icon = get_sub_field( 'white_icon' ); ?>
                                <?php if ( $white_icon ) { ?>
                                    <div class="icon white-icon">
                                        <img src="<?php echo $white_icon['url']; ?>" alt="<?php echo $white_icon['alt']; ?>" />
                                    </div>
                                <?php } ?>

                            </div>
                            <h3><?php the_sub_field( 'heading' ); ?></h3>

                        </div>
                        
                        <div class="benefits-content">
                            
                            <h4><?php the_sub_field( 'subhead' ); ?></h4>
                            <p><?php the_sub_field( 'copy' ); ?></p>
                        </div>
                        
                        <?php $image = get_sub_field( 'image' ); ?>
                        <?php if ( $image ) { ?>
                            <div class="benefit-image">
                                <?php echo wp_get_attachment_image( $image, 'full' ); ?>
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