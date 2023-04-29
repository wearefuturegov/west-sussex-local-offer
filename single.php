<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package west-sussex-local-offer
 */

get_header();
?>



<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="content-wrapper">
    <div class="container">

        <p class="post-meta"><?php the_date(" j F Y")  ?></p>
        <h1 class="page-title"><?php the_title(); ?></h1>

        <div class="layout-sidebar-right">
            <article class="layout-sidebar-right__main-content">
                <div class="content-area content-area--post">
                    <?php the_content(); ?>
                </div>

                <nav class="guide-navigation">
                    <ul class="guide-navigation__list">  
                        <?php if(get_previous_post()): ?>
                            <li class="guide-navigation__item guide-navigation__item--previous">
                                <a class="guide-navigation__link" href="<?php echo get_the_permalink(get_previous_post()); ?>">
                                    <span>Previous post</span>    
                                    <span><?php echo get_previous_post()->post_title; ?></span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(get_next_post()): ?>
                            <li class="guide-navigation__item guide-navigation__item--next"> 
                                <a class="guide-navigation__link" href="<?php echo get_the_permalink(get_next_post()); ?>">
                                    <span>Next post</span>   
                                    <span><?php echo get_next_post()->post_title; ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>

            </article>


            <?php get_sidebar(); ?>

            
        </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php
get_footer();
