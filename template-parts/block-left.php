<?php
/**
 * Template part for homepage feedback block
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ws
 */

?>


<?php
if (get_theme_mod('homepage_blocks_left_title')) :
?>

  <h2><?php echo esc_html(get_theme_mod('homepage_blocks_left_title')); ?></h2>
  <p><?php echo esc_html(get_theme_mod('homepage_blocks_left_content')); ?></p>


  <?php
  if (get_theme_mod('homepage_blocks_left_cta')) :
  ?>
  <a class="button" href="<?php echo esc_url(get_theme_mod('homepage_blocks_left_cta')); ?>"><?php echo esc_html(get_theme_mod('homepage_blocks_left_cta_text')); ?></a>
  <?php
  endif;
  ?>


<?php
endif;
?>