<?php

if (! function_exists('ws_feedback_has_feedback')) :


  function ws_feedback_has_feedback() {

    if(array_key_exists(FEEDBACK_KEY, $_COOKIE) && isset($_COOKIE[FEEDBACK_KEY])) {
      return true;
    }

    return false;
  }


endif;


if (! function_exists('ws_feedback_is_given')) :


  function ws_feedback_is_given($post_id) {

    if(ws_feedback_has_feedback()) {
      $feedback = ws_feedback_get_feedback();
      return in_array($post_id, $feedback);
    }

    return false;

  }


endif;


if (! function_exists('ws_feedback_get_feedback')) :


  function ws_feedback_get_feedback() {

    if(ws_feedback_has_feedback()) {
      return unserialize(stripslashes($_COOKIE[FEEDBACK_KEY]));
    }
    else {
      return [];
    }

  
  }


endif;