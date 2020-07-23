<?php

function feedback_metabox_content(){
    global $post;
    $yes = get_post_meta($post->ID, "feedback_yes", true) || 0;
    $no = get_post_meta($post->ID, "feedback_no", true) || 0;
    $total = $yes + $no;
    echo "<p><strong>Yes:</strong> " . $yes . " (" . ($yes/$total*100)  . "%)</p>";
    echo "<p><strong>No:</strong> " . $no . " (" . ($no/$total*100) . "%)</p>";
}

add_action("add_meta_boxes", function(){
    add_meta_box("feedback", "Was this page useful?", "feedback_metabox_content", "page", "side");
});


function lo_handle_feedback() {

    $post = $_POST["id"];
    if(array_key_exists("yes", $_POST)){
        $current_value = get_post_meta($post, "feedback_yes", true);
        update_post_meta($post, "feedback_yes", $current_value+1);
    }
    if(array_key_exists("no", $_POST)){
        $current_value = get_post_meta($post, "feedback_no", true);
        update_post_meta($post, "feedback_no", $current_value+1);
    }

    $pins = unserialize(stripslashes($_COOKIE["feedback_given"]));
    $pins[] = $post;
    setcookie("feedback_given", serialize($pins), time()+86400, "/");

    if($_SERVER['HTTP_REFERER']){
        wp_redirect($_SERVER['HTTP_REFERER']);
    } else {
        wp_redirect(get_permalink($_POST["id"]));
    }
}
add_action( "admin_post_nopriv_feedback", "lo_handle_feedback" );
add_action( "admin_post_feedback", "lo_handle_feedback" );


function the_feedback_banner(){
    global $post;
    ob_start();
    ?>
    <section class="feedback-banner">
        <div class="container">
            <?php $ids = unserialize(stripslashes($_COOKIE["feedback_given"]));
            if(in_array(get_the_id(), $ids)): ?>
                <p>Thank you for your feedback.</p>
            <?php else: ?>
                <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                    <input type="hidden" name="action" value="feedback"/>
                    <input type="hidden" name="id" value="<?php echo get_the_id(); ?>"/>

                    <p>Did you find this page useful?</p>
                    <button name="yes">Yes</button>
                    <button name="no">No</button>
                </form>
            <?php endif; ?>
        </div>
    </section>
    <?php
    $output = ob_get_contents();
    ob_end_clean();
    echo $output;
}