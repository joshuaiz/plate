<?php
/*------------------------------------
* Theme: Plate by studio.bio 
* File: Template dev functions file 
* Author: Joshua Michaels
* URI: https://studio.bio/themes/plate
*------------------------------------
*/

/*
******************************
*    GET CURRENT TEMPLATE    *
******************************
*
* Pretty self-explanatory.
*
* To use, add this in your header:
* <?php echo '<!-- ' . get_current_template() . ' -->' ?>; 
*
*
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


/**
* Debug Stuffs
* 
* To see all of the hooks being called in your theme and where,
* I highly recommend checking out the Query Monitor plugin. It's 
* great for tracking down issues in your code or errant plugins:
* https://wordpress.org/plugins/query-monitor/
*/


/*
*****************
*    R-DEBUG    *
*****************
*
* Debugger class for checking out hooks, filters, queries
* post info and more. 
*
* You could install as a plugin as well.
* Grab the raw file here: https://gist.github.com/Rarst/1739714
*
* Uncomment the include for this file in functions.php, then call
* one of the helper functions below in your theme:
* 
* R_Debug::list_live_hooks(); 
*
* Make sure to disable for live sites or you will have a lot of
* essplainin' to do.
*
*/

/**
 * Class with static dump methods
 */
class R_Debug {

    /**
     * List basic performance stats
     *
     * @param bool $visible display or only include in source
     */
    static function list_performance( $visible = false ) {

        if ( defined( 'DOING_AJAX' ) ) {
            return;
        }

        $stat = sprintf(
            '%d queries in %s seconds, using %.2fMB memory',
            get_num_queries(),
            timer_stop( 0, 3 ),
            memory_get_peak_usage() / 1024 / 1024
        );

        echo $visible ? $stat : "<!-- {$stat} -->";
    }

    /**
     * List defined constants
     *
     * @param bool|string $filter limit to matching names or values
     */
    static function list_constants( $filter = false ) {

        $constants = get_defined_constants();

        if ( false !== $filter ) {
            $temp = array();

            foreach ( $constants as $key => $constant ) {
                if ( false !== stripos( $key, $filter ) || false !== stripos( $constant, $filter ) ) {
                    $temp[ $key ] = $constant;
                }
            }

            $constants = $temp;
        }

        ksort( $constants );
        self::dump( $constants );
    }

    /**
     * Concatenate print_r of all input and echo in pre tags.
     */
    static function dump() {

        $output = '';

        foreach ( func_get_args() as $arg ) {
            $output .= print_r( $arg, true );
        }

        echo '<pre>' . $output . '</pre>';
    }

    /**
     * List cron entries with time remaining till next run
     */
    static function list_cron() {

        $cron = _get_cron_array();

        echo '<pre>';

        $offset = get_option( 'gmt_offset' ) * 3600;

        foreach ( $cron as $time => $entry ) {

            $when = '<strong>In ' . human_time_diff( $time ) . '</strong> (' . $time . ' ' . date_i18n( DATE_RSS, $time + $offset ) . ')';
            echo "<br />&gt;&gt;&gt;&gt;&gt;\t{$when}<br />";

            foreach ( array_keys( $entry ) as $function ) {
                echo "\t{$function}<br />";
                self::list_hooks( $function );
            }
        }

        echo '</pre>';
    }

    /**
     * List hooks as currently defined
     *
     * @param bool|string $filter limit to matching names
     */
    static function list_hooks( $filter = false ) {

        global $wp_filter;

        $skip_filter = empty( $filter );
        $hooks       = $wp_filter;
        ksort( $hooks );

        foreach ( $hooks as $tag => $hook ) {
            if ( $skip_filter || false !== strpos( $tag, $filter ) ) {
                self::dump_hook( $tag, $hook );
            }
        }
    }

    /**
     * Output hook info
     *
     * @param string $tag  hook name
     * @param array  $hook hook data
     */
    static function dump_hook( $tag, $hook ) {

        // ksort( $hook ); // PHP 7.X freaks out with this so commented out (JM)

        echo "<pre>&gt;&gt;&gt;&gt;&gt;\t<strong>{$tag}</strong><br />";

        foreach ( $hook as $priority => $functions ) {
            echo $priority;

            foreach ( $functions as $function ) {
                echo "\t";

                $callback = $function['function'];

                if ( is_string( $callback ) ) {
                    echo $callback;
                } elseif ( is_a( $callback, 'Closure' ) ) {
                    $closure = new ReflectionFunction( $callback );
                    echo 'closure from ' . $closure->getFileName() . '::' . $closure->getStartLine();
                } elseif ( is_string( $callback[0] ) ) { // static method call
                    echo $callback[0] . '::' . $callback[1];
                } elseif ( is_object( $callback[0] ) ) {
                    echo get_class( $callback[0] ) . '->' . $callback[1];
                }

                echo ( 1 == $function['accepted_args'] ) ? '<br />' : " ({$function['accepted_args']}) <br />";
            }
        }

        echo '</pre>';
    }

    /**
     * Enable live listing of hooks as they run
     *
     * @param bool|string $hook limit to matching names
     */
    static function list_live_hooks( $hook = false ) {

        if ( false === $hook ) {
            $hook = 'all';
        }

        add_action( $hook, array( __CLASS__, 'list_hook_details' ), - 1 );
    }

    /**
     * Handler for live hooks output
     *
     * @param mixed $input
     *
     * @return mixed
     */
    static function list_hook_details( $input = null ) {

        global $wp_filter;

        $tag = current_filter();

        if ( isset( $wp_filter[ $tag ] ) ) {
            self::dump_hook( $tag, $wp_filter[ $tag ] );
        }

        return $input;
    }

    /**
     * List active plugins
     */
    static function list_plugins() {

        self::dump( get_option( 'active_plugins' ) );
    }

    /**
     * List post's fields, custom fields, and terms
     *
     * @param int $post_id
     */
    static function list_post( $post_id = null ) {

        if ( empty( $post_id ) ) {
            $post_id = get_the_ID();
        }

        self::dump(
            get_post( $post_id ),
            get_post_custom( $post_id ),
            wp_get_post_terms( $post_id, get_post_taxonomies( $post_id ) )
        );
    }

    /**
     * List performed MySQL queries
     */
    static function list_queries() {

        global $wpdb;

        if ( ! defined( 'SAVEQUERIES' ) || ! SAVEQUERIES ) {

            trigger_error( 'SAVEQUERIES needs to be defined', E_USER_NOTICE );

            return;
        }

        echo '<pre>';

        foreach ( $wpdb->queries as $query ) {

            list( $request, $duration, $backtrace ) = $query;
            $duration  = sprintf( '%f', $duration );
            $backtrace = explode( ',', $backtrace );
            $backtrace = trim( array_pop( $backtrace ) );

            if ( 'get_option' == $backtrace ) {

                preg_match_all( '/\option_name.*?=.*?\'(.+?)\'/', $request, $matches );
                $backtrace .= "({$matches[1][0]})";
            }

            echo "<br /><code>{$request}</code><br />{$backtrace} in {$duration}s<br />";
        }

        echo '<br /></pre>';
    }

    /**
     * Run EXPLAIN on provided MySQL query or last query performed.
     *
     * @param string $query
     */
    static function explain_query( $query = '' ) {

        /** @var wpdb $wpdb */
        global $wpdb;

        if ( empty( $query ) ) {
            $query = $wpdb->last_query;
        }

        self::dump(
            $query,
            $wpdb->get_results( 'EXPLAIN EXTENDED ' . $query ),
            $wpdb->get_results( 'SHOW WARNINGS' )
        );
    }
}

?>