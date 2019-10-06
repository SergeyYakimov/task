<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_enqueue_scripts', 'my_jquery_scripts' );
add_action( 'wp_footer', 'scripts_theme' );
add_action( 'before_footer', 'text_output' );
add_action( 'after_setup_theme', 'menu' );
add_action( 'widgets_init', 'register_my_widgets' );

function register_my_widgets() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => "sidebar",
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n"
	) );
}

function menu() {
	register_nav_menu( 'top', 'меню в шапке сайта' );
	register_nav_menu( 'bottom', 'меню в подвале сайта' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails', array( 'post' ) );
	add_image_size( 'post_thumb', 1300, 500, true );
	add_filter( 'navigation_markup_template', 'my_navigation_template', 10, 2 );

	function my_navigation_template( $template, $class ) {
		return '
		<nav class="navigation %1$s" role="navigation">
			<div class="nav-links">%3$s</div>
		</nav>    
		';
	}

	the_posts_pagination( array(
		'end_size' => 2,
	) );
}

function style_theme() {
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/theme/css/theme.css' );
	wp_enqueue_style( 'default', get_template_directory_uri() . '/css/default.css' );
	wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/layout.css' );
	wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/css/media-queries.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function scripts_theme() {
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/theme/js/theme.js' );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js' );
	wp_enqueue_script( 'migrate', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js' );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js' );
	wp_enqueue_script( 'doubletaptogo', get_template_directory_uri() . '/js/doubletaptogo.js' );
	wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js' );
}

function my_jquery_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
}

function text_output() {
	echo 'Произвольный текст';
}