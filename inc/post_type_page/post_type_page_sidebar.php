<?php



if ( ! function_exists( 'ws_post_type_page_sidebar' ) ) :
	/**
	 * Register widgetized area and update sidebar with default widgets.
	 */
	function ws_post_type_page_sidebar() {
		register_sidebar( array(
			'name'          => __( 'Page sidebar', 'ws'),
			'id'            => 'page_sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		));
	}

endif;
