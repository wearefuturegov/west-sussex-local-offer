<?php


if (! function_exists('ws_feedback_add_meta')) :


function ws_feedback_metabox_content($post){
  $yes = get_post_meta($post->ID, "feedback_yes", true) || 0;
  $no = get_post_meta($post->ID, "feedback_no", true) || 0;
  $total = $yes + $no;
  if($total) {
  echo "<p><strong>Yes:</strong> " . $yes;
  echo "<p><strong>No:</strong> " . $no;
  } else {
    echo "No feedback submitted for this page yet";
  }
}

endif;



if (! function_exists('ws_feedback_add_meta')) :

  function ws_feedback_add_meta() {
    add_meta_box("feedback", "Was this page useful?", "ws_feedback_metabox_content", "page", "side");
  }

endif;