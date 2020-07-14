<?php 
/* Template Name: Menu */
?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="content-wrapper">
    <div class="container">
        <h1 class="page-title">Browse</h1>

        <?php the_tree_menu(); ?>

    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>