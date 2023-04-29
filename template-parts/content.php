<?php
/**
 * Template part for page content
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */


$full_width = $args['full_width'] ?? false;
$hide_sidebar = $args['hide_sidebar'] ?? false;


// echo '<pre>';
// print_r($args);
// echo 'full_width: ';
// var_dump($full_width);
// echo 'hide_sidebar: ';
// var_dump($hide_sidebar);
// echo '</pre>';

?>



<?php if ($full_width) : ?>
  
  <h1 class="page-title"><?php the_title(); ?></h1>
  <?php get_template_part( 'template-parts/page-content', null ); ?>

<?php else: ?>

  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="layout-sidebar-right">
      <?php get_template_part( 'template-parts/page-content', null ); ?>
      <?php ($hide_sidebar) ? null : get_sidebar(); ?>
  </div>
  
<?php endif; ?>
