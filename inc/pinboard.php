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

    if(is_array($pins) && in_array($post->ID, $pins)){
        echo "<button class='button'>Remove from pins</button>";
    } else {
        echo "<button class='button'>Add to pins</button>";
    }
}

function the_pinboard(){
    $pins = unserialize(stripslashes($_COOKIE[COOKIE_KEY]));
    if($pins){

        $query = new WP_Query(array(
            "post_type" => "page",
            "post__in" => $pins
        ) );

        echo "<ul>";
 
        while ( $query->have_posts() ) {
            $query->the_post();
            echo '<li>';
            echo "<h2><a href='" . get_permalink() . "'>" . get_the_title() . "</a></h2>";
            echo "<p>" . get_the_excerpt() . "</p>";
            echo the_pin_button();
            echo '</li>';
        }

        echo "</ul>";
         
        wp_reset_postdata();

    } else {
        echo "There's nothing on your pinboard yet";
    }
}