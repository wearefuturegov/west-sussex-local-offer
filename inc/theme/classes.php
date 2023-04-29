<?php


if ( ! function_exists( 'ws_body_class' ) ) :

  function ws_body_class($classes = ''){
    $body_classes = trim(implode(" ", array(ws_theme_colour_scheme(), $classes)));
    body_class($body_classes);
  }
  
endif; // ws_setup