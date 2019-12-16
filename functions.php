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

// Register main datepicker jQuery plugin script
add_action( 'wp_enqueue_scripts', 'enabling_date_picker' );
function enabling_date_picker() {
    // Only on front-end and checkout page
    if( is_admin() || ! is_checkout() ) return;

    // Load the datepicker jQuery-ui plugin script
    wp_enqueue_script( 'jquery-ui-datepicker' );
    wp_enqueue_style('jquery-ui', "http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css", '', '', false);
}

// Add custom checkout datepicker field
add_action( 'woocommerce_before_order_notes', 'datepicker_custom_field' );
function datepicker_custom_field($checkout) {
    $datepicker_slug = 'my_datepicker';

    echo '<div id="datepicker-wrapper">';

    woocommerce_form_field($datepicker_slug, array(
        'type' => 'text',
        'class'=> array( 'form-row-first my-datepicker'),
        'label' => __('My Custom Date-picker'),
        'required' => true, // Or false
    ), '' );

    echo '<br clear="all"></div>';


    // Jquery: Enable the Datepicker
    ?>
    <script language="javascript">
    jQuery( function($){
        var a = '#<?php echo $datepicker_slug ?>';
        $(a).datepicker({
            dateFormat: 'yy-mm-dd', // ISO formatting date
        });
    });
    </script>
    <?php
}


