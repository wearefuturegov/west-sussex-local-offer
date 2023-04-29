<?php
/**
 * Template part for displaying the hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ws
 */

?>


<section class="masthead" style="background-image: url('<?php echo ws_hero_get_file_url() ?>')">
    <div class="container">

        <h1 class="masthead__title"><?php echo get_theme_mod("hero_headline", get_bloginfo('name')); ?></h1>
        <p class="masthead__lede"><?php echo get_theme_mod("hero_lede", get_bloginfo('description')); ?></p>

        <form class="masthead__search" method="get">
            <div class="masthead__field">
                <label for="s">Search information, advice and guidance</label>
                <input name="s" type="search" placeholder="eg. autism"/>
            </div>
            <button class="masthead__button">Search</button>
        </form>

    </div>
</section>