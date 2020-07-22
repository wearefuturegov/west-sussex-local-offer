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

                <?php the_children(); ?>

                <div class="widget">
                    <h2>Downloads</h2>
                    <?php
                        $downloads = get_field('downloads');
                        if( $downloads ): ?>
                        <ul class="download-list">
                            <?php foreach( $downloads as $download ): ?>
                                <li class="download">
                                    <a href="<?php echo $download->guid ?>"><?php echo $download->post_title ?></a>
                                    <p><?php echo $download->post_content ?></p>
                                    <small><?php echo date_format(date_create($download->post_date), "F Y"); ?></small>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php 
                        wp_reset_postdata();
                        endif; 
                        ?>
                </div>

                <?php the_pin_button(); ?>

                <?php if ( is_active_sidebar( "page_sidebar" ) ) : ?>
                    <?php dynamic_sidebar( "page_sidebar" ); ?>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>