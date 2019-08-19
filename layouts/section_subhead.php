<?php $slug = get_sub_field( 'slug' ); ?>

<div id="<?php echo $slug; ?>" class="section-subhead-outer">

    <div class="section-subhead-inner">
    
        <h3><?php the_sub_field( 'heading' ); ?></h3>
        <p><?php the_sub_field( 'copy' ); ?></p>
    
    </div>

</div>