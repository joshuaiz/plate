<?php $slug = get_sub_field( 'slug' ); ?>

<div id="<?php echo $slug; ?>" class="section-header-outer">

    <div class="section-header-inner">
    
        <h2 class="section-title"><?php the_sub_field( 'heading' ); ?></h2>
        <div class="stroke-small"></div>
        <h3 class="section-subhead"><?php the_sub_field( 'subhead' ); ?></h3>
        <p><?php the_sub_field( 'content' ); ?></p>
    
    </div>

</div>