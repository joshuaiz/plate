<?php
/*------------------------------------
 * Theme: Template by studio.bio 
 * File: Template dev functions file 
 * Author: Joshua Michaels
 * URI: https://studio.bio/template
 *------------------------------------
 */


add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
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