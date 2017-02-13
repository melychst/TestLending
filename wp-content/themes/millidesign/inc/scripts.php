<?php
		
function include_scripts()
{
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	
	wp_enqueue_style( 'styles_css', get_stylesheet_directory_uri() . '/css/styles.css' );
	
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/fonts/font-awesome.min.css' );

		wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.css' );

	wp_enqueue_script('jQuery', get_stylesheet_directory_uri().'/js/jquery.sidr.min.js', array('jquery'), '1');

	wp_enqueue_script('OwlCarousel', get_stylesheet_directory_uri().'/js/owl-carousel.js', array('jquery'), '1');

	wp_enqueue_script('ScrollReveal', get_stylesheet_directory_uri().'/js/scrollreveal.min.js', array('jquery'), '1');

	wp_enqueue_script('scripts', get_stylesheet_directory_uri().'/js/scripts.js', array('jquery'), '1');
}

add_action('wp_enqueue_scripts', 'include_scripts');

