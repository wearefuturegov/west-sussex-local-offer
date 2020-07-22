<?php 

get_header(); 

print_r($_SESSION);

?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="content-wrapper">
    <div class="container">
        <?php the_breadcrumbs(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="layout-sidebar-right">
            <article class="layout-sidebar-right__main-content">
                <?php the_content(); ?>
                <p class="page-last-edited">Last updated <?php the_date(" j F Y")  ?></p>
            </article>

            <aside class="layout-sidebar-right__sidebar">
                <div class="widget">
                    <?php the_children(); ?>
                </div>

                <?php if ( is_active_sidebar( "page_sidebar" ) ) : ?>
                    <?php dynamic_sidebar( "page_sidebar" ); ?>
                <?php endif; ?>

                <?php the_pin_button(); ?>

            </aside>

        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>