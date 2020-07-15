<?php 
/* Template Name: Home */
get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="masthead">
    <div class="container">
        <h1 class="masthead__title"><?php the_title(); ?></h1>
        <div class="masthead__lede">
            <?php the_content(); ?>
        </div>
    
        <form class="search-box" method="get" action="https://local-offer.org/search">
            <div class="search-box__field">
                <label for="location_filter">Search services, events or information</label>
                <input name="query" placeholder="eg. autism"/>
            </div>
            <div class="search-box__field">
                <label for="location_filter">Near</label>
                <input name="location_filter" placeholder="eg. PO19 1RQ"/>
            </div>
            <button class="search-box__button">Search</button>
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


    <!-- <ul class="container trails__list">
        <li class="trails__trail">
            <h3><a href="#">Education, Health and Care Plans</a></h3>
            <p>Description of the link</p>
        </li>
        <li class="trails__trail">
            <h3><a href="#">Childcare and pre-school</a></h3>
            <p>Description of the link</p>
        </li>
        <li class="trails__trail">
            <h3><a href="#">Pathways to Adulthood</a></h3>
            <p>Description of the link</p>
        </li>
        <li class="trails__trail">
            <h3><a href="#">Just received/waiting for diagnosis</a></h3>
            <p>Description of the link</p>
        </li>
    </ul> -->


</section>

<section class="campaign" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ?>')">
    <div class="container">
        <h2>New events are added all the time from support groups, workshops, drop-ins, learning, teaching and sharing of insights and experiences.</h2>
        <a class="button button--white" href="https://local-offer.org/search_events">View events</a>
    </div>
</section>

<section class="contact">
    <div class="container contact__inner">
        <div class="contact__panel">
            <h2>Contact us</h2>
            <p>Call the West Sussex local Offer team on 0330 222 8555 and ask for "Local Offer". If we are out of the office please leave a message with your contact phone number and we will return your call as soon as possible.</p>
            <p>We are always seeking to improve our Local Offer so please send the team any feedback you have by e-mailing localoffer@westsussex.gov.uk</p>
            <p>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
            </p>
        </div>
        <div class="contact__panel">
            <h2>Promote your services and events</h2>
            <p>If you provide services or run events for the SEND Community, please sign up to promote them on this website.</p>
            <a class="button" href="#">Sign up</a>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>