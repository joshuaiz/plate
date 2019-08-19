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