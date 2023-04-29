<?php
/**
 * Template part for pagination
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */

global $paged;
$max_page = $wp_query->max_num_pages;

?>



<?php if(1 < $max_page): ?>
    <nav class="guide-navigation">
        <ul class="guide-navigation__list">  
            <?php if($paged > 1): ?>
            <li class="guide-navigation__item guide-navigation__item--previous">
                <a class="guide-navigation__link" href="<?php echo previous_posts(); ?>">
                    <span>Previous</span>    
                    <span>Page <?php echo $paged - 1 ?> of <?php echo $max_page ?></span>
                </a>
            </li>
            <?php endif; ?>

            <?php if(($paged + 1) < $max_page): ?>
            <li class="guide-navigation__item guide-navigation__item--next"> 
                <a class="guide-navigation__link" href="<?php echo next_posts(); ?>">
                    <span>Next</span>   
                    <span>Page <?php echo $paged + 1 ?> of <?php echo $max_page ?></span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>