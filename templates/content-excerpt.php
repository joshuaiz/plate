<?php if ( has_post_thumbnail() ) { ?>

    <div class="post-thumbnail">

    	<?php the_post_thumbnail( 'plate-thumb-300' ); ?>

    </div>

<?php } ?>

<?php the_excerpt(); ?>