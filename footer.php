    <footer class="site-footer">
        <div class="container">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/council-logo.svg" alt="West Sussex County Council"/>
            <p>&copy; West Sussex County Council <?php echo date("Y"); ?></p>
            <p>A product from TPXimpact</p>

            <nav class="site-footer__menu">
                <?php 
                    wp_nav_menu( array( 
                        'container' => false,
                        'theme_location' => 'footer-menu',
                        'depth' => 1,
                        'fallback_cb' => false
                    ));
                ?>
            </nav>

        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>
</html>