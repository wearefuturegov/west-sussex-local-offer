<?php if(get_option("show_announcement")): ?>
    <section class="announcement">
        <div class="container">
            <h2><?php echo get_option("announcement_title"); ?></h2>
            <?php if(get_option("announcement_link")){ ?>
                <a href="<?php echo get_permalink(get_option("announcement_link")) ?>">
                    <?php echo get_option("announcement_link_text"); ?>
                </a>
            <?php } else { ?>
                <?php echo get_option("announcement_link_text"); ?>
            <?php } ?>

        </div>
    </section>
<?php endif; ?>