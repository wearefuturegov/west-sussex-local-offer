<?php 
/* Template Name: Virtual */
?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="content-wrapper">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>

        

    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>