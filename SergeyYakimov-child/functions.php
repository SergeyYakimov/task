<?php

add_action('test_done', 'last_text_output');
add_action( 'wp_footer', 'remove_scripts', 11 );
add_action( 'wp_footer', 'scripts' );
add_action( 'wp_ajax_click', 'alert_function' );
add_action('wp_ajax_new_click', 'new_function');

function remove_scripts() {
    wp_dequeue_script( 'theme-js' );
}

function scripts() {
	wp_enqueue_script('ajax-js', get_stylesheet_directory_uri() . '/js/ajax.js');
	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js');
}

function new_function() {

	$message = get_post_meta(26, 'welcome_message');

	echo $message[0];

	die;
} 
 
function alert_function() {

	echo 'WellYes World';

	die;
}

function last_text_output() {
	echo 'Test Was Done!';
}
