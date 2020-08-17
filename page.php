<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="content-wrapper">
    <div class="container">
        <?php the_breadcrumbs(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="layout-sidebar-right">
            <article class="layout-sidebar-right__main-content">
                <div class="content-area">
                    <?php the_content(); ?>
                    <p class="page-last-edited">Last updated <?php the_modified_time(" j F Y")  ?></p>
                </div>
            </article>

            <aside class="layout-sidebar-right__sidebar">

                <?php the_children(); ?>

                <?php the_related_pages(); ?>
                
                <?php the_downloads(); ?>

                <?php the_pin_button(); ?>

                <?php if ( is_active_sidebar( "page_sidebar" ) ) : ?>
                    <?php dynamic_sidebar( "page_sidebar" ); ?>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php the_feedback_banner(); ?>

<?php get_footer(); ?>