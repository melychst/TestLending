<?php
		
function include_scripts()
{
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	
	wp_enqueue_style( 'styles_css', get_stylesheet_directory_uri() . '/css/styles.css' );
	
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/fonts/font-awesome.min.css' );

	//wp_enqueue_script('scripts', get_stylesheet_directory_uri().'/js/scripts.min.js', array('jquery'), '1');
}

add_action('wp_enqueue_scripts', 'include_scripts');

