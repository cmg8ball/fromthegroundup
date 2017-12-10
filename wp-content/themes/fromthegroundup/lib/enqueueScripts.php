<?php
// getting jquery lib
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'my_jquery_enqueue' );

// getting vendor js
function vendor_js() {
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/bower_components/owl.carousel/dist/owl.carousel.min.js' );
}

// getting custom theme js
function my_js() {
	wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/js/main-dist.js' );
}

add_action( 'wp_enqueue_scripts', 'vendor_js' );
add_action( 'wp_enqueue_scripts', 'my_js' );
