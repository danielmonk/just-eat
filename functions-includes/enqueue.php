<?php

////////////////////////////////////////
// ENQUEUE ALTERATIONS
////////////////////////////////////////

add_action( 'wp_footer', 'deregister_scripts' );

function deregister_scripts(){
	wp_deregister_script( 'wp-embed' );
}



add_action( 'init', 'theme_enqueue_scripts' );

function theme_enqueue_scripts() {

	$script_ver = filemtime( get_template_directory() . '/assets/dist/js/scripts.min.js' );

	if(!is_admin()) {
		wp_deregister_script( 'jquery' );

		wp_enqueue_script( 
			'ajax-pagination',  
			get_template_directory_uri() . '/assets/dist/js/scripts.min.js', 
			array(), 
			$script_ver, 
			true 
		);

		global $wp_query;
		wp_localize_script( 'ajax-pagination', 'ajaxpagination', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'query_vars' => json_encode( $wp_query->query )
		));
	}

}


add_action( 'init', 'theme_enqueue_styles' );

function theme_enqueue_styles() {

	$style_ver = filemtime( get_stylesheet_directory() . '/assets/dist/css/style.min.css' );

	if(!is_admin()) {

		wp_enqueue_style(
			'theme-styles',
			get_template_directory_uri() . '/assets/dist/css/style.min.css',
			array(),
			$style_ver
		);

	}

}