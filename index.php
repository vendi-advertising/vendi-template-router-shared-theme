<?php

if(!\defined('ABSPATH')){
    \header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    die('Direct file access not allowed');
}

if(!\class_exists('Vendi\Shared\template_router')){
    \header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    die('This theme requires a controlling plugin with \Vendi\Shared\template_router installed.');
}

$user = \wp_get_current_user();
if( 0 == $user->ID ){
    \auth_redirect();
}

\wp_safe_redirect( \Vendi\Shared\template_router::get_instance()->create_url() );
