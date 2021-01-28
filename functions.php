<?php

add_action( 'init', 'speakers' );
function speakers() {
    $labels = array(
        'name'               => _x( 'Speakers', 'post type general name' ),
        'singular_name'      => _x( 'Speakers', 'post type singular name' ),
        'menu_name'          => _x( 'Speakers', 'admin menu' ),
        'name_admin_bar'     => _x( 'Speakers', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Speakers' ),
        'add_new_item'       => __( 'Add New Speakers' ),
        'new_item'           => __( 'New Speakers' ),
        'edit_item'          => __( 'Edit Speakers' ),
        'view_item'          => __( 'View Speakers' ),
        'all_items'          => __( 'All Speakers' ),
        'search_items'       => __( 'Search Speakers' ),
        'parent_item_colon'  => __( 'Parent Speakers:' ),
        'not_found'          => __( 'No Speakers found.' ),
        'not_found_in_trash' => __( 'No Speakers found in Trash.' )
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'           => array( 'slug' => 'agenda', 'with_front' => false  ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_icon'          => 'dashicons-list-view',
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_taxonomy( 'speakers', array( 'speakers' ), $args );
    register_post_type( 'speakers', $args );
}

//hide links from login page
add_action( 'login_head', 'hide_login_nav' );

function hide_login_nav()
{
    ?><style>#nav{display:none}</style><?php
}

//Redirect users to homepage after reset password submission
function wpse_lost_password_redirect() {
    wp_redirect( home_url() ); 
    exit;
}
add_action('after_password_reset', 'wpse_lost_password_redirect');


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

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


//Sets all POSTS to be Ordered ALPHABETICALLY
function foo_modify_query_order( $query ) {
    if ( $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'foo_modify_query_order' );


// get taxonomies terms links
function custom_taxonomies_terms_links() {
    global $post, $post_id;
    // get post by post id
    $post = &get_post($post->ID);
    // get post type by post
    $post_type = $post->post_type;
    // get post type taxonomies
    $taxonomies = get_object_taxonomies($post_type);
    foreach ($taxonomies as $taxonomy) {
        // get the terms related to post
        $terms = get_the_terms( $post->ID, $taxonomy );
        if ( !empty( $terms ) ) {
            $out = array();
            foreach ( $terms as $term )
                $out[] = '<a href="' .get_term_link($term->slug, $taxonomy) .'">'.$term->name.'</a>';
            $return = join( ', ', $out );
        }
    }
    return $return;
}

// Make empty Search return 'no results' on search page
function SearchFilter($query) {
    // If 's' request variable is set but empty
    if (isset($_GET['s']) && empty($_GET['s']) && $query->is_main_query()){
        $query->is_search = true;
        $query->is_home = false;
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');


// Make empty Search return 'no results' on search page
function my_products_pages() {
  return array('pattern_items', 'yarn_items');
}
add_filter('cart66_add_popup_screens', 'my_products_pages');

function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}
 
add_action( 'loop_start', 'jptweak_remove_share' );

add_action( 'admin_head', 'my_website_admin_head' );
function my_website_admin_head() {
wp_dequeue_script( 'custom-post-type-onomies-admin-options-validate' );
}


function wp_42573_fix_template_caching( WP_Screen $current_screen ) {

    // Only flush the file cache with each request to post list table, edit post screen, or theme editor.
    if ( ! in_array( $current_screen->base, array( 'post', 'edit', 'theme-editor' ), true ) ) {
        return;
    }

    $theme = wp_get_theme();
    if ( ! $theme ) {
        return;
    }

    $cache_hash = md5( $theme->get_theme_root() . '/' . $theme->get_stylesheet() );
    $label = sanitize_key( 'files_' . $cache_hash . '-' . $theme->get( 'Version' ) );
    $transient_key = substr( $label, 0, 29 ) . md5( $label );
    delete_transient( $transient_key );
}
add_action( 'current_screen', 'wp_42573_fix_template_caching' );


?>