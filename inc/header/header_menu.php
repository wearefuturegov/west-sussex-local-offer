<?php

if ( ! function_exists( 'ws_header_menu' ) ) :
  function ws_header_menu() {

      register_nav_menu(
          "header-menu",  __( 'Header area', 'ws' )
      );

  }

endif; // ws_setup



if ( ! function_exists( 'ws_header_menu_limit' ) ) :

  /**
   * Limit number of nav menu items on footer menu
   */
  function ws_header_menu_limit($items, $args) {
    if ( $args->theme_location === 'header-menu' ) {
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
  
