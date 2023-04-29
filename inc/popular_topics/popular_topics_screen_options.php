<?php


if (! function_exists('ws_popular_topics_menu_enable_description')) :

function ws_popular_topics_menu_enable_description( $columns )
{
    $desc_key = 'managenav-menuscolumnshidden';
    $hidden   = get_user_option( $desc_key );
    $user_id  = wp_get_current_user()->ID;

    if ( ! $hidden )
    {
        update_user_option(
            $user_id,
            $desc_key,
            array ( 0 => 'link-target', 1 => 'css-classes', 2 => 'xfn' )
        );
    }
    elseif ( FALSE !== ( $key = array_search( 'description', $hidden ) ) )
    {
        unset( $hidden[ $key ] );
        update_user_option( $user_id, $desc_key, $hidden );
    }

    return $columns;
}

endif;