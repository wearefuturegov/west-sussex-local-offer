<?php
/**
 * Template part for displaying beta banner
 *
 * @link https://developer.wordpress.org/reference/functions/get_template_part/
 *
 * @package ws
 */

?>


<?php

if (get_theme_mod('beta_banner_show')) : 

?>

<section class="beta-banner">
    <div class="container">
        <strong>Beta</strong> 
        <?php if (get_theme_mod('beta_banner_feedback')) : ?>
            <p>This is a brand new service — your <a href="<?php echo get_theme_mod("beta_banner_feedback"); ?>">feedback</a> helps us improve it.</p>
        <?php else:  ?>
            <p>This is a brand new service — your feedback helps us improve it.</p>
        <?php endif; ?>
    </div>    
</section>
        
<?php 

endif;
