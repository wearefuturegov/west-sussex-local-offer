<?php
/**
 * Template part for displaying the page guide nav
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */
?>





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