<?php

if (! function_exists('ws_pins_has_pins')) :


  function ws_pins_has_pins() {

    if(array_key_exists(COOKIE_KEY, $_COOKIE) && isset($_COOKIE[COOKIE_KEY])) {
      return true;
    }

    return false;
  }


endif;


if (! function_exists('ws_pins_is_pinned')) :


  function ws_pins_is_pinned($post_id) {

    if(ws_pins_has_pins()) {
      $pins = ws_pins_get_pins();
      return in_array($post_id, $pins);
    }

    return false;

  }


endif;


if (! function_exists('ws_pins_get_pins')) :


  function ws_pins_get_pins() {

    if(ws_pins_has_pins()) {
      return unserialize(stripslashes($_COOKIE[COOKIE_KEY]));
    }
    else {
      return [];
    }

  
  }


endif;