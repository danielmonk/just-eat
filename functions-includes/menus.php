<?php

//Registers Menus
add_action( 'init', 'register_my_menus' );

function register_my_menus() {
register_nav_menus(
array() );
}

//Show  admin bar for admin
show_admin_bar( true );

// Disable Admin bar for all users except Admin
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}


////////////////////////////////////////
// MENU CUSTOMISATIONS 
////////////////////////////////////////

/**
 * Append manual items to menus
 */

add_filter( 'wp_nav_menu_items', 'add_manual_menu_items', 10, 2 );

function add_manual_menu_items( $items, $args ) {

	$search_link = '/?s=';

    if ($args->theme_location == 'header') {
		$items .= '
			<li class="menu-item-search">
				<a href="'.$search_link.'" class="search-icon">Search</a>
			</li>';
    }
    return $items;
}




add_filter( 'nav_menu_css_class', 'add_parent_url_menu_class', 10, 2 );

function add_parent_url_menu_class( $classes = array(), $item = false ) {
	// Get current URL
	$current_url = current_url();

	// Get homepage URL
	$homepage_url = trailingslashit( get_bloginfo( 'url' ) );

	// Exclude 404 and homepage
	if( is_404() or $item->url == $homepage_url ) return $classes;

	if ( strstr( $current_url, $item->url) ) {
		// Add the 'parent_url' class
		$classes[] = 'current-menu-item';
	}

	return $classes;
}

?>
