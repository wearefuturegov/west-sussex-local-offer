<?php 
/* Template Name: Pinboard */

get_header(); ?>

<div class="content-wrapper">
    <div class="container">
        <h1 class="page-title">Your pinboard</h1>

        <?php the_pinboard(); ?>

    </div>
</div>

<?php get_footer(); ?>