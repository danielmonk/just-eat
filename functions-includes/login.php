<?php

//hide links from login page
add_action( 'login_head', 'hide_login_nav' );

function hide_login_nav()
{
    ?><style>#nav{display:none}</style><?php
}

//Redirect users to homepage after reset password submission
function wpse_lost_password_redirect() {
    wp_redirect( home_url() ); 
    exit;
}
add_action('after_password_reset', 'wpse_lost_password_redirect');

?>
