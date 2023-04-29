<?php
/**
 * Template part for displaying the pin button
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */

$isSaved = false;
if (array_key_exists('post_id', $args) && isset($args['post_id'])) {
 $isSaved = ws_pins_is_pinned($args['post_id']);
}

?>



<form class="widget" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
    <?php if (isset($args['title'])) : ?> 
    <h2><?php echo $args['title']; ?></h2>
    <?php endif; ?>
    <input type="hidden" name="action" value="pinning"/>    
    <input type="hidden" name="id" value="<?php echo get_the_ID(); ?>"/>
    <?php 
        if($isSaved) {
            echo "<button class='button'>Remove from pins</button>";
        } else {
            echo "<button class='button'>Add to pins</button>";
        }
    ?>
</form>