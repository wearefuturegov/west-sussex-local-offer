<?php 

get_header(); 

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

            <div class="layout-sidebar-right__sidebar">
                <?php the_children(); ?>



                <?php if ( is_active_sidebar( "page_sidebar" ) ) : ?>
                    <aside class="widget-area" role="complementary">
                        <?php dynamic_sidebar( "page_sidebar" ); ?>
                    </aside>
                <?php endif; ?>

                <h2>Save for later</h2>
                <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                    <input type="hidden" name="action" value="pinning"/>    
                    <input type="hidden" name="id" value="<?php echo get_the_ID(); ?>"/>
                    <?php pin_button(); ?>
                </form>

            </div>

        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>