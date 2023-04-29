<?php
/**
 * Template part for displaying the search box inline
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */
?>


<form class="search-box" method="get" action="/">
    <div class="search-box__field">
        <label for="s">Search information, advice and guidance</label>
        <input id="s" name="s" placeholder="eg. autism" value="<?php the_search_query(); ?>"/>
    </div>
    <button class="search-box__button">Search</button>
</form>