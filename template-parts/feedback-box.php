<?php
/**
 * Template part for displaying the pin button
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */

$feedback_given = false;
if (array_key_exists('post_id', $args) && isset($args['post_id'])) {
    $post_id = $args['post_id'];
    $feedback_given = ws_feedback_is_given($args['post_id']);
}

?>


<?php if(isset($_REQUEST['feedback'])): ?>
    <section class="feedback-banner">
        <div class="container">
            <p>Thank you for your feedback.</p> 
        </div>
    </section>
<?php elseif (!$feedback_given): ?>
    <section class="feedback-banner">
        <div class="container">
                <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                    <input type="hidden" name="action" value="feedback"/>
                    <input type="hidden" name="id" value="<?php echo $post_id; ?>"/>

                    <p>Did you find this page useful?</p>
                    <button name="yes">Yes</button>
                    <button name="no">No</button>
                </form>
        </div>
    </section>
<?php endif; ?>