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

    echo setcookie(COOKIE_KEY, serialize($pins), time()+315360000, "/");
    wp_redirect(get_permalink($_POST["id"]));
}
add_action( "admin_post_nopriv_pinning", "lo_handle_pinning" );
add_action( "admin_post_pinning", "lo_handle_pinning" );

function pin_button() {
    global $post;
    $pins = unserialize(stripslashes($_COOKIE[COOKIE_KEY]));

    if(is_array($pins) && in_array($post->ID, $pins)){
        echo "<button>Remove from pins</button>";
    } else {
        echo "<button>Add to pins</button>";
    }
}

function the_pinboard(){
    $pins = unserialize(stripslashes($_COOKIE[COOKIE_KEY]));
    if($pins){
        wp_list_pages(array(
            "include" => $pins,
            "title_li" => null
        ));
    } else {
        echo "There's nothing on your pinboard yet";
    }
}