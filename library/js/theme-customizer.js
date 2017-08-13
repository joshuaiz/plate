/*------------------------------------
 * Theme: Plate by studio.bio 
 * File: Theme customizer js file
 * Author: Joshua Michaels
 * URI: https://studio.bio/themes/plate
 *------------------------------------
 *
 * Customize all of the things. This js file adds a helper function
 * to do that.
 *
 * Lots more info here:
 * https://maddisondesigns.com/2017/05/the-wordpress-customizer-a-developers-guide-part-1/
 *
 *
*/


(function( $ ) {

	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

    wp.customize( 'header_textcolor', function( value ) {
        value.bind( function( to ) {
            if ( 'blank' === to ) {
                $( '.site-title' ).css( {
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                } );
            } else {
                $( '.site-title' ).css( {
                    'clip': 'auto',
                    'position': 'static'
                } );

                $( '.site-title' ).css( {
                    'color': to
                } );
            }
        } );
    });

})( jQuery );

	

