<?php


if ( ! function_exists( 'ws_post_type_page_excerpts' ) ) :
  function ws_post_type_page_excerpts() {

    // allow post excerpts
    add_post_type_support( 'page', 'excerpt' );


  }

endif; // ws_setup