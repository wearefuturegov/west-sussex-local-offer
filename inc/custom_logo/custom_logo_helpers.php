<?php


if ( ! function_exists('ws_custom_logo_get_file_url') ) :
  function ws_custom_logo_get_file_url() {
    if(get_theme_mod('custom_logo')) {
      return wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full');
    }
    else {
      return get_template_directory_uri() . "/assets/default-logo.png";
    }
  }
endif;


