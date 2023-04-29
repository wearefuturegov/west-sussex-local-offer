<?php

if (! function_exists('ws_acf_get_field') ) :

function ws_acf_get_field($field_name) {

  if ( function_exists('get_field') ) : 

    return get_field($field_name);
    
  endif;

}

endif;