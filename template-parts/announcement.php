<?php
/**
 * Template part for displaying an announcement on the site
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */

?>

<?php if(get_theme_mod("announcement_show")): ?>
    <section class="announcement">
        <div class="container">
            <h2><?php echo get_theme_mod("announcement_title"); ?></h2>
            <?php if(get_theme_mod("announcement_link")){ ?>
                <a href="<?php echo get_permalink(get_theme_mod("announcement_link")) ?>">
                    <?php echo get_theme_mod("announcement_link_text"); ?>
                </a>
            <?php } else { ?>
                <?php echo get_theme_mod("announcement_link_text"); ?>
            <?php } ?>

        </div>
    </section>
<?php endif; ?>