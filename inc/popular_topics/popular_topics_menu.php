<?php

if (! function_exists('ws_popular_topics_menu') ) :

function ws_popular_topics_menu() {
	register_nav_menu("trails-menu", __( 'Popular topics', 'ws' ));
}

endif;



if ( ! function_exists( 'ws_popular_topics_menu_walker' ) ) :

  function ws_popular_topics_menu_walker( $item_output, $item, $depth, $args ) {
    if($args->theme_location === 'trails-menu') {
      if (!empty( $item->description ) ) {
          $item_output = str_replace( 
              $item->title . "</a>",
              $item->title . "</a><p>" . $item->description . "</p>",
              $item_output 
          );
      }
    }
    return $item_output;
  }
  
endif;
  