<?php
/**
 * Template part for homepage blocks
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ws
 */

?>



<section class="contact">
    <div class="container contact__inner">
        <div class="contact__panel">
            <?php get_template_part('template-parts/block', 'left'); ?>
        </div>

        <div class="contact__panel">
            <?php get_template_part('template-parts/block', 'right'); ?>
        </div>
    </div>
</section>