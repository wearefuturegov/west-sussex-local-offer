<?php 
/* Template Name: Blank */
?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="content-wrapper">
    <div class="container">
        <?php the_breadcrumbs(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <article class="content-area">
            <?php the_content(); ?>
        </article>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>