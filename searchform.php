<?php
/*
* This is the basic search form that will get shown when you use get_search_form() anywhere in your theme.
* Updated for accessibility November, 2018.
*
*/
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

    <label>
        <span class="search-label" for="search"><?php echo _x( 'Search for:', 'label', 'platetheme' ) ?></span>
    </label>

    <div class="search-input">

        <input type="search" class="search-field"
                placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'platetheme' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label', 'platetheme' ) ?>" />

        <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'platetheme' ) ?>" />

    </div>
    
</form>