<?php 
/**
 * Template for homepage
 *
 *
 * @package ws
 * Template Name: Homepage
 */
?>


<?php get_header(); ?>


<?php get_template_part('template-parts/hero', null); ?>


<?php get_template_part('template-parts/popular-topics', null); ?>


<?php get_template_part('template-parts/campaign', null); ?>


<?php get_template_part('template-parts/latest-blog-posts', null); ?>


<?php get_template_part('template-parts/homepage', 'blocks'); ?>



<?php get_footer(); ?>
