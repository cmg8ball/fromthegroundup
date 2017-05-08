<?php

function my_styles() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'my_styles' );