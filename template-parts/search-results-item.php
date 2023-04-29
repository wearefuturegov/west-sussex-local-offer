<?php
/**
 * Template part for displaying the search result item
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */
?>


<li class="search-results-list__result">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    <small>Last updated <?php the_modified_time(" j F Y") ?></small>
</li>