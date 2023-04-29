<?php
/**
 * Template for testing page templates
 *
 *
 * @package ws
 * Template Name: Test template
 */
?>

<?php get_header(); ?>


<?php if(have_posts()) : ?> 
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <div class="content-wrapper">
            <div class="container">
                <?php get_template_part( 'template-parts/breadcrumbs', null ); ?>
                <?php get_template_part( 'template-parts/content', null ); ?>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/feedback', 'box', array('post_id' => get_the_ID() ) ); ?>


<?php get_footer(); ?>



        <h1 class="page-title"><?php the_title(); ?></h1>

        <aside class="guide-contents" role="complementary">
            <h2 class="guide-contents__heading">Contents</h2>
            <?php $children = new WP_Query(array(
                'post_type'      => 'page',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'post_parent'    => $post->ID,
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
            ));
            if ( $children->have_posts() ): ?>
                <ol class='guide-contents__list'>
                    <li class="guide-contents__step">Overview</li>                        
                    <?php while ( $children->have_posts() ) : $children->the_post(); ?>
                        <li class="guide-contents__step"><a href='<?php the_permalink() ?>'><?php the_title() ?></a></li>
                    <?php endwhile; ?>
                </ol>
            <?php endif; 
            wp_reset_postdata(); ?>
        </aside>

        <div class="layout-sidebar-right">
            <div class="layout-sidebar-right__main-content">

                <article class="content-area content-area--guide">
                    <?php the_content(); ?>
                    <p class="page-last-edited">Last updated <?php the_modified_time(" j F Y")  ?></p>
                </article>

                <?php $children = new WP_Query(array(
                    'post_type'      => 'page',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    'post_parent'    => $post->ID,
                    'order'          => 'ASC',
                    'orderby'        => 'menu_order'
                ));
                if ( $children->have_posts() ): ?>
                    <nav class="guide-navigation">    
                        <ul class="guide-navigation__list">            
                            <?php while ( $children->have_posts() ) : $children->the_post(); ?>
                            <li class="guide-navigation__item guide-navigation__item--next">    
                                <a class="guide-navigation__link"  href='<?php the_permalink() ?>'>
                                    <span>Next</span>    
                                    <span><?php the_title() ?></span>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </nav>
                <?php endif; 
                wp_reset_postdata(); ?>
            </div>


            <?php get_sidebar(); ?>


            
            <aside class="layout-sidebar-right__sidebar">

                <?php get_template_part( 'template-parts/related', null, array('post_id' => get_the_ID() ) ); ?>

                <?php get_template_part( 'template-parts/downloads', null, array('post_id' => get_the_ID() ) ); ?>

                <?php get_template_part( 'template-parts/pin', 'button', array('post_id' => get_the_ID(), 'title' => 'Save for later' ) ); ?>

                <?php if ( is_active_sidebar( "page_sidebar" ) ) : ?>
                    <?php dynamic_sidebar( "page_sidebar" ); ?>
                <?php endif; ?>
            </aside>
        </div>
    