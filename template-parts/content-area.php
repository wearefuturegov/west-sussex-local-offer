<?php
/**
 * Template part for page content
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */


$classes = $args['classes'] ?? '';
?>

<div class="content-area <?php echo $classes; ?>">
    <?php the_content(); ?>
    <p class="page-last-edited">Last updated <?php the_modified_time(" j F Y")  ?></p>
</div>
