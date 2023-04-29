<?php

if (! function_exists('ws_pins_query')) :

  function ws_pins_query() {
      if(ws_pins_has_pins()) {
        $pins = ws_pins_get_pins();
        $pins_query = array(
          'post_type'           => "page",
          'posts_per_page'      => 50,
          'post_status'         => 'published',
          'ignore_sticky_posts' => TRUE,
          'no_found_rows'       => TRUE,
          'order'               => 'DESC',
          'orderby'             => 'modified',
          'post__in'            => $pins,
        );
        $pins_page_query = new WP_Query( $pins_query );
      
        return $pins_page_query;
      }
      else {
        return false;
      }
  }

endif;