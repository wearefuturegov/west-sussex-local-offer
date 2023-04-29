<?php
/**
 * Template part for displaying a campaign on the site
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */

?>

<?php if(get_theme_mod("campaign_text")): ?>
    <section class="campaign <?php echo get_theme_mod("campaign_color"); ?>">
        <div class="container">
            <h2><?php echo get_theme_mod("campaign_text"); ?></h2>
            <p><?php echo get_theme_mod("campaign_lede"); ?></p>
            <a class="button button--white" href="<?php echo get_the_permalink(get_theme_mod("campaign_link")); ?>"><?php echo get_theme_mod("campaign_link_text"); ?></a>
        </div>
    </section>
<?php endif ?>