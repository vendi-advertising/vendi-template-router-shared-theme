<?php
$user = wp_get_current_user();
if( 0 == $user->ID )
{
    auth_redirect();
}

wp_safe_redirect( \Vendi\Shared\template_router::get_instance()->create_url() );
