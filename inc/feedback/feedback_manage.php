<?php

if (! function_exists('ws_feedback_handle_feedback')) :

function ws_feedback_handle_feedback() {

    if(isset($_POST['action']) && $_POST['action'] === 'feedback') {

        $post_id = isset($_POST["id"]) ? $_POST["id"] : false;
        if ($post_id) {
            if(array_key_exists("yes", $_POST)){
                $current_value = get_post_meta($post, "feedback_yes", true);
                update_post_meta($post_id, "feedback_yes", $current_value+1);
            }
            if(array_key_exists("no", $_POST)){
                $current_value = get_post_meta($post_id, "feedback_no", true);
                update_post_meta($post_id, "feedback_no", $current_value+1);
            }


            $feedback = ws_feedback_get_feedback();
            $feedback[] = $post_id;
            setcookie(FEEDBACK_KEY, serialize($feedback), time()+86400, "/");


            if($_SERVER['HTTP_REFERER']){
                wp_safe_redirect( add_query_arg( array( 'feedback' => 'submitted' ), $_SERVER['HTTP_REFERER'] ) );
            } else {
                wp_redirect(get_permalink($_POST["id"]));
            }
        }

    }
}


endif;