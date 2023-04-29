<?php

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function ws_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
