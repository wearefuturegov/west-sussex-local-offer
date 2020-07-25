<?php 
/* Template Name: Guide Step (children) */
get_header(); 
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="content-wrapper">
    <div class="container">
        <?php the_breadcrumbs($post->post_parent); ?>
        <h1 class="page-title"><?php echo get_the_title($post->post_parent); ?></h1>

        <aside class="guide-contents" role="complementary">
            <h2 class="guide-contents__heading">Contents</h2>
            <?php $current_step = get_the_ID(); ?>
            <?php $children = new WP_Query(array(
                'post_type'      => 'page',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'post_parent'    => $post->post_parent,
                'order'          => 'ASC',
                'orderby'        => 'menu_order'
            ));
            if ( $children->have_posts() ): ?>
                <ol class='guide-contents__list'>
                    <li class="guide-contents__step">
                        <a href="<?php the_permalink($post->post_parent); ?>">
                            Overview
                        </a>
                    </li>                        
                    <?php while ( $children->have_posts() ) : $children->the_post(); ?>
                        <li class="guide-contents__step">
                            <?php if($post->ID === $current_step): ?>
                                <?php the_title() ?>
                            <?php else: ?>
                                <a href='<?php the_permalink() ?>'><?php the_title() ?></a>
                            <?php endif; ?>
                        </li>
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

                <?php
                $pagelist = get_pages(array(
                    'post_type'      => 'page',
                    'post_status'    => 'publish',
                    'posts_per_page' => -1,
                    'parent'         => $post->post_parent,
                    'order'          => 'DESC',
                    'sort_column'    => 'menu_order'
                ));

                $pages = array();
                foreach ($pagelist as $page) {
                    $pages[] += $page->ID;
                }
                $current = array_search(get_the_ID(), $pages);
                $prevID = $pages[$current-1];
                $nextID = $pages[$current+1];
                ?>

                <nav class="guide-navigation">
                    <ul class="guide-navigation__list">  

                        <?php if($prevID): ?>
                        <li class="guide-navigation__item guide-navigation__item--previous">
                            <a class="guide-navigation__link" href="<?php echo get_the_permalink($prevID); ?>">
                                <span>Previous</span>    
                                <span><?php echo get_the_title($prevID); ?></span>
                            </a>
                        </li>
                        <?php else: ?>
                        <li class="guide-navigation__item guide-navigation__item--previous">
                            <a class="guide-navigation__link" href="<?php echo get_the_permalink($post->post_parent); ?>">
                                <span>Previous</span>
                                <span>Overview</span>
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if($nextID): ?>
                        <li class="guide-navigation__item guide-navigation__item--next"> 
                            <a class="guide-navigation__link" href="<?php echo get_the_permalink($nextID); ?>">
                                <span>Next</span>   
                                <span><?php echo get_the_title($nextID); ?></span>
                            </a>
                        </li>
                        <?php endif; ?>

                    </ul>
                </nav>
                
            </div>

            <aside class="layout-sidebar-right__sidebar">

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

<?php get_footer(); ?>