<?php

if ( ! function_exists('ws_which_template_is_loaded') ) :
function ws_which_template_is_loaded() {
	if ( is_super_admin() ) {
		global $template;
		print_r( $template );
	}
}
endif;
// add_action( 'wp_head', 'ws_which_template_is_loaded' );



// define( 'SAVEQUERIES', true );
if ( ! function_exists('ws_show_query_info') ) :
	function ws_show_query_info() {
		if ( current_user_can( 'administrator' ) ) {
			global $wpdb;
			echo '<pre>';
			print_r( $wpdb->queries );
			echo '</pre>';
		}
	}
endif;
// add_action( 'wp_head', 'ws_show_query_info' );