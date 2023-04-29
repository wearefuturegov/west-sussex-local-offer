<?php


if ( ! function_exists( 'ws_styles_scripts' ) ) :

  /**
   * Enqueue scripts and styles.
   */
  function ws_styles_scripts() {

    wp_enqueue_style("styles", get_stylesheet_directory_uri()."/dist/css/index.css");
    wp_enqueue_style("fonts", "https://fonts.googleapis.com/css?family=Lato:400,500,600,700");
    
    wp_enqueue_script("app", get_stylesheet_directory_uri()."/dist/js/index.js");

  }

endif; // ws_setup

