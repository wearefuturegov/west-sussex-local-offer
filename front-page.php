<?php get_header(); ?>

<section class="masthead">
    <div class="container">
        <h1 class="masthead__title"><?php echo get_bloginfo("name"); ?></h1>
        <div class="masthead__lede">This area of The Local Offer has been developed to provide schools and education settings with easier access to resources and information to support whole school development and daily practice.</div>

        <form class="search-box" method="get">
            <div class="search-box__field">
                <label for="location_filter">Search information, advice and guidance</label>
                <input name="s" placeholder="eg. autism"/>
            </div>
            <button class="search-box__button">Search</button>
        </form>
    
        <!-- <form class="search-box" method="get">
            <div class="search-box__field">
                <label for="location_filter">Search services, events or information</label>
                <input name="query" placeholder="eg. autism"/>
            </div>
            <div class="search-box__field">
                <label for="location_filter">Near</label>
                <input name="location_filter" placeholder="eg. PO19 1RQ"/>
            </div>
            <button class="search-box__button">Search</button>
        </form> -->

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
            <p>Call the West Sussex local Offer team on 0330 222 8555 and ask for "Local Offer". If we are out of the office please leave a message with your contact phone number and we will return your call as soon as possible.</p>
            <p>We are always seeking to improve our Local Offer so please send the team any feedback you have by e-mailing localoffer@westsussex.gov.uk</p>
            <a class="button" href="mailto:localoffer@westsussex.gov.uk">Email us</a>
        </div>
        <!-- <div class="contact__panel">
            <h2>Promote your services and events</h2>
            <p>If you provide services or run events for the SEND Community, please sign up to promote them on this website.</p>
            <a class="button" href="#">Sign up</a>
        </div> -->
    </div>
</section>

<?php get_footer(); ?>