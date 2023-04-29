<?php

if( is_admin() ) {


  function ws_theme_dependencies() {
    // acf
    if( ! function_exists('get_field') )
      echo '<div class="error"><p>' . __( 'Warning: The theme needs <a href="https://www.advancedcustomfields.com/">advanced custom fields</a> installed to function', 'my-theme' ) . '</p></div>';
    }
    add_action( 'admin_notices', 'ws_theme_dependencies' );
  
  }

  
  