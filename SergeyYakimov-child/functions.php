<?php

function remove_scripts()
{
    wp_dequeue_script( 'theme-js' );
}
add_action( 'wp_footer', 'remove_scripts', 11 );

add_action( 'wp_footer', 'scripts' );

function scripts() {
	wp_enqueue_script('ajax-js', get_stylesheet_directory_uri() . '/js/ajax.js');
}

add_action( 'wp_ajax_click', 'alert_function' ); 
 
function alert_function() {
 
	echo 'WellYes World';
 
	die;
}
