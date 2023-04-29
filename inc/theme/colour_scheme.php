<?php



if ( ! function_exists( 'ws_theme_colour_scheme' ) ) :

function ws_theme_colour_scheme(){
  global $post;
  if(ws_acf_get_field("colour_scheme")){
      return "colour-scheme-" . ws_acf_get_field("colour_scheme");
  }
  return null;
}

endif; // ws_setup




