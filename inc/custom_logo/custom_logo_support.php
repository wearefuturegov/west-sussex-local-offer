<?php


if ( ! function_exists('ws_custom_logo') ) :
  function ws_custom_logo() {
    $custom_logo_args = array(
      'default-image'      => get_template_directory_uri() . '/assets/default-logo.png',
      'default-text-color' => '000',
      'width'              => 120,
      'height'             => 32,
      'flex-width'         => false, // Now width are fixed to 120 px
      'flex-height'        => true,  // Height is adjustable
    );

    // add support for custom-logo
    add_theme_support( 'custom-logo', $custom_logo_args );
  }
endif;


