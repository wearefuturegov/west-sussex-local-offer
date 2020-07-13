<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="content-wrapper">
    <div class="container">
        <?php the_breadcrumbs(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="layout-sidebar-right">
            <article class="layout-sidebar-right__main-content">
                <?php the_content(); ?>
                <small>Last updated <?php the_date(" j F Y")  ?></small>
            </article>

            <div class="layout-sidebar-right__sidebar">
                <?php the_kids(); ?>
            </div>

        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>