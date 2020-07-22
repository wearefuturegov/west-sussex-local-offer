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
        $children = get_children(array(
            'post_parent' => $post->ID,
            'post_type'   => 'page',
            'post_status' => 'publish'
        ));
        if($children){
            echo "<ul class='child-tiles'>";
            foreach ($children as $child):
                echo "<li class='child-tile'>";
                echo "<a href='" . get_the_permalink($child) . "'>" . get_the_title($child) . "</a>";
                if(get_the_excerpt($child)){ echo "<p>" . get_the_excerpt($child) . "</p>"; };
                echo "</li>";
            endforeach;
            echo "</ul>";
        }
        ?>

        <div class="layout-sidebar-right">
            <article class="layout-sidebar-right__main-content">
                <?php the_content(); ?>
            </article>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>