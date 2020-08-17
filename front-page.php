<?php get_header(); ?>

<section class="masthead" style="background-image: url('<?php echo wp_get_attachment_url( get_option("hero_image") ) ?>')">
    <div class="container">

        <h1 class="masthead__title"><?php echo get_option("hero_headline"); ?></h1>
        <p class="masthead__lede"><?php echo get_option("hero_lede"); ?></p>

        <form class="masthead__search" method="get">
            <div class="masthead__field">
                <label for="s">Search information, advice and guidance</label>
                <input name="s" type="search" placeholder="eg. autism"/>
            </div>
            <button class="masthead__button">Search</button>
        </form>

    </div>
</section>





<section class="trails">
    <h2 class="visually-hidden">Popular topics</h2>
    <?php 
        wp_nav_menu( array( 
            'container' => false,
            'theme_location' => 'trails-menu',
            'menu_class' => "container trails__list"
        ));
    ?>
</section>

<?php if(get_option("campaign_text")): ?>
    <section class="campaign" style="background-image: url('<?php echo wp_get_attachment_url( get_option("campaign_image") ) ?>')">
        <div class="container">
            <h2><?php echo get_option("campaign_text"); ?></h2>
            <a class="button button--white" href="<?php echo get_the_permalink(get_option("campaign_link")); ?>"><?php echo get_option("campaign_link_text"); ?></a>
        </div>
    </section>
<?php endif ?>

<section class="contact">
    <div class="container contact__inner">
        <div class="contact__panel">
            <h2>Contact us</h2>
            <p>You can email the West Sussex Local Offer team any time, or call us on <strong>0330 222 8555</strong> and ask for "Local Offer".</p>
            
            <p>If we're out of the office, leave a message with your contact phone number and we'll return your call as soon as possible.</p>

            <a class="button" href="mailto:localoffer@westsussex.gov.uk">Email us</a>
        </div>
        <div class="contact__panel">
            <h2>Help us improve this service</h2>
            <p>This is a brand new service, and your feedback will help us improve it.</p>
            <p>We're particularly interested in hearing from teachers and other people who use these resources in their jobs.</p>
            <a class="button" href="#">Give feedback</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>