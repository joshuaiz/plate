<?php
/*------------------------------------
 * Theme: Plate by studio.bio 
 * File: Template dev functions file 
 * Author: Joshua Michaels
 * URI: https://studio.bio/themes/plate
 *------------------------------------
 */

/* This is kind of meta to have functions that
 * tell you what template you are using in a 
 * theme based on Template and in a file called
 * plate.php, but I digress.
*/

add_filter( 'plate_include', 'var_plate_include', 1000 );
function var_plate_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}

// To use, add this in your header (wrapped in php tags):
// echo '<!-- ' . get_current_template() . ' -->'; 

?>