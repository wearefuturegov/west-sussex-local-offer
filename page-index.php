<?php 
/* Template Name: Index/Tiled */
get_header(); 
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="content-wrapper">
    <div class="container">
        <?php the_breadcrumbs(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>

        <?php 
        $children = new WP_Query(array(
            'post_type'      => 'page',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'post_parent'    => $post->ID,
            'order'          => 'ASC',
            'orderby'        => 'menu_order'
        ));
        if ( $children->have_posts() ):
            echo "<ul class='child-tiles'>";
            while ( $children->have_posts() ) : $children->the_post();
                echo "<li class='child-tile'>";
                echo "<a href='" . get_the_permalink() . "'>" . get_the_title() . "</a>";
                the_excerpt();
                echo "</li>";
            endwhile;
            echo "</ul>";
        endif; wp_reset_postdata();
        ?>

        <div class="layout-sidebar-right">
            <div class="layout-sidebar-right__main-content">
                <article class="content-area">
                    <?php the_content(); ?>
                </article>
            </div>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>