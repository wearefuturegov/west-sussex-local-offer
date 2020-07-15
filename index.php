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
                <small>Last updated <?php the_date(" j F Y")  ?></small>
            </article>

            <aside class="layout-sidebar-right__sidebar">
                <div class="widget">
                    <?php the_children(); ?>
                </div>

                <?php if ( is_active_sidebar( "page_sidebar" ) ) : ?>
                    <?php dynamic_sidebar( "page_sidebar" ); ?>
                <?php endif; ?>

                <form class="widget" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                    <h2>Save for later</h2>    
                    <input type="hidden" name="action" value="pinning"/>    
                    <input type="hidden" name="id" value="<?php echo get_the_ID(); ?>"/>
                    <?php the_pin_button(); ?>
                </form>

            </aside>

        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>