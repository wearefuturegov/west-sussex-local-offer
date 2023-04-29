<?php


if (! function_exists('ws_pins_handle_pinning')) :

  function ws_pins_handle_pinning() {

    if(isset($_POST['action']) && $_POST['action'] === 'pinning') {
        $post_id = isset($_POST["id"]) ? $_POST["id"] : false;
        if ($post_id) {
            $pins = ws_pins_get_pins();
            $pin_exists = ws_pins_is_pinned($post_id);

            if($pin_exists){
                if (($key = array_search($post_id, $pins)) !== false) {
                    unset($pins[$key]);
                }
            } else {
                $pins[] = $post_id;
            }
            session_start();
            
            setcookie(COOKIE_KEY, serialize($pins), time()+315360000, "/");


            if($_SERVER['HTTP_REFERER']){
                wp_redirect($_SERVER['HTTP_REFERER']);
            } else {
                wp_redirect(get_permalink($post_id));
            }
        }
    }
      
  }

endif;

