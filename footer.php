    <footer class="site-footer">
        <div class="container">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/council-logo.svg" alt="West Sussex County Council"/>
            <p>© West Sussex County Council <?php echo date("Y"); ?></p>
            <p>A product from FutureGov</p>

            <nav class="site-footer__menu">
                <?php 
                    wp_nav_menu( array( 
                        'container' => false,
                        'theme_location' => 'footer-menu'
                    ));
                ?>
            </nav>

        </div>
    </footer>

    </body>
    <?php wp_footer(); ?>
</html>