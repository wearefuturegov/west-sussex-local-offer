<?php

if( !function_exists('ws_excerpts_custom_length')) :
function ws_excerpts_custom_length( $length ) {
    return 20;
}
endif;

if( !function_exists('ws_excerpts_more')) :
function ws_excerpts_more($more) {
    return '...';
}
endif;