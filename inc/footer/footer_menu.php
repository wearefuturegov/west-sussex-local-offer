<?php

if ( ! function_exists( 'ws_footer_menu' ) ) :
  function ws_footer_menu() {

      register_nav_menu("footer-menu",  __( 'Footer area', 'ws' ));

  }

endif; // ws_setup



if ( ! function_exists( 'ws_footer_menu_limit' ) ) :

/**
 * Limit number of nav menu items on footer menu
 */
function ws_footer_menu_limit($items, $args) {
  if ( $args->theme_location === 'footer-menu' ) {
    $toplinks = 0;
    foreach ( $items as $k => $v ) {
        if ( $v->menu_item_parent == 0 ) {
            $toplinks++;
        }
        if ( $toplinks > 10 ) {
            unset($items[$k]);
        }
    }
  }
  return $items;
}

endif; // ws_setup
