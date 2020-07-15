<?php

define("COOKIE_KEY", "my_pins");

function lo_handle_pinning() {
    $pins = unserialize(stripslashes($_COOKIE[COOKIE_KEY]));
    
    if(is_array($pins) && in_array($_POST["id"], $pins)){
        if (($key = array_search($_POST["id"], $pins)) !== false) {
            unset($pins[$key]);
        }
    } else {
        $pins[] = $_POST["id"];
    }


    session_start();
    $_SESSION["flash_message"] = "My message here";


    echo setcookie(COOKIE_KEY, serialize($pins), time()+315360000, "/");
    wp_redirect(get_permalink($_POST["id"]));
}
add_action( "admin_post_nopriv_pinning", "lo_handle_pinning" );
add_action( "admin_post_pinning", "lo_handle_pinning" );


function the_pin_button() {
    global $post;
    $pins = unserialize(stripslashes($_COOKIE[COOKIE_KEY]));
    ob_start();
    ?>
    <form class="widget" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
        <h2>Save for later</h2>
        <input type="hidden" name="action" value="pinning"/>    
        <input type="hidden" name="id" value="<?php echo get_the_ID(); ?>"/>
        <?php 
            if(is_array($pins) && in_array($post->ID, $pins)){
                echo "<button class='button'>Remove from pins</button>";
            } else {
                echo "<button class='button'>Add to pins</button>";
            }
        ?>
    </form>
    <?php 
    $output = ob_get_contents();
    ob_end_clean();
    echo $output;
}