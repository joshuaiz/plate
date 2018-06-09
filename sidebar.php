<?php 
/*
* This is the base sidebar template. If you add an additional sidebar called 'sidebar2' 
* and want to make changes to your sidebar, copy this template to a file called 
* 'sidebar-sidebar2.php'.
*
*/
?>

<aside id="sidebar1" class="sidebar" role="complementary">

    <div class="inner-sidebar wrap">

    	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

            <?php dynamic_sidebar( 'sidebar1' ); ?>
            
        <?php else : ?>

            <!-- <?php _e( 'Add some widgets and they will appear here.', 'platetheme' );  ?> -->

    	<?php endif; ?>

    </div>

</aside>
