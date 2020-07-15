<?php 

get_header(); 

print_r($_SESSION);

?>

<div class="content-wrapper">
    <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1 class="page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="layout-sidebar-right">
            <article class="layout-sidebar-right__main-content">
                <?php the_excerpt(); ?>
                <small>Last updated <?php the_date(" j F Y") ?></small>
            </article>
        </div>
    <?php endwhile; else: ?>
        <p>There are no posts to show</p>
    <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>