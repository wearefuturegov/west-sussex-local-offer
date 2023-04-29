<?php

if ( ! function_exists('ws_hero_get_file_url') ) :
  function ws_hero_get_file_url() {
    if(get_theme_mod('hero_image')) {
      return wp_get_attachment_image_url(get_theme_mod('hero_image'), 'full');
    }
    else {
      return get_template_directory_uri() . "/assets/default-hero-image.png";
    }
  }
endif;


