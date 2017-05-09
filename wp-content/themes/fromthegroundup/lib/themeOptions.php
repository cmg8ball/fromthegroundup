<?php

function custom_login_logo() {

echo "<style type='text/css'> .login h1 a { background-size: 250px 90px; width: 250px; height: 90px; background-image: url('" . get_bloginfo('template_directory') . "/assets/img/login-logo.jpg') !important;</style>";

}

add_action('login_head', 'custom_login_logo');

?>