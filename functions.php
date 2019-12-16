<?php

// VARIABLES

$theme = wp_get_theme();
$ver = $theme->get('Version');

// ACTIONS
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
add_action( 'after_setup_theme', 'image_sizes' );
add_action( 'after_setup_theme', 'woocommerce_support' );
add_action( 'init', 'register_my_menus' );
add_filter('show_admin_bar', '__return_false');

// JAVACSRIPT, CSS
function add_theme_scripts(){
	global $ver;
	wp_enqueue_style('style', get_template_directory_uri()."/style.css", array(), $ver);
	wp_enqueue_script('marquee', get_template_directory_uri()."/assets/jquery.marquee.min.js", array( 'jquery' ), $ver);
	wp_enqueue_script('cookie', get_template_directory_uri()."/assets/cookie.js", array( 'jquery' ), $ver);
	wp_enqueue_script('app', get_template_directory_uri()."/dist/combine.min.js", array( 'jquery' ), $ver);
  	wp_enqueue_style('app-style', get_template_directory_uri()."/dist/combine.min.css", array(), $ver);
}

// RESPONSIVE IMAGES
function image_sizes(){
	add_image_size( '_3200', 3200, 0, 0 );
	add_image_size( '_2560', 2560, 0, 0 );
	add_image_size( '_1920', 1920, 0, 0 );
	add_image_size( '_1280', 1280, 0, 0 );
	add_image_size( '_1024', 1024, 0, 0 );
	add_image_size( '_768', 768, 0, 0 );
	add_image_size( '_512', 512, 0, 0 );
	add_image_size( '_256', 256, 0, 0 );
}

if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page();	
}

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
			'mobile-menu' => __( 'Mobile Menu' )

		)
	);
}


function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
if (class_exists('Woocommerce')){
	add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}

/**
 * Load jQuery datepicker.
 *
 * By using the correct hook you don't need to check `is_admin()` first.
 * If jQuery hasn't already been loaded it will be when we request the
 * datepicker script.
 */
function wpse_enqueue_datepicker() {
    // Load the datepicker script (pre-registered in WordPress).
    wp_enqueue_script( 'jquery-ui-datepicker' );

    // You need styling for the datepicker. For simplicity I've linked to the jQuery UI CSS on a CDN.
    wp_register_style( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css' );
    wp_enqueue_style( 'jquery-ui' );  
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_datepicker' );