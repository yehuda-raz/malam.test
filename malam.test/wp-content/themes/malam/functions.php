<?php
/**
 * malam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package malam
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! defined( 'APT_ROOT_PATH' ) ) {
	define( 'APT_ROOT_PATH', get_template_directory() );
}
if ( ! defined( 'APT_ROOT_URL' ) ) {
	define( 'APT_ROOT_URL', get_template_directory_uri() );
}



if ( ! function_exists('write_log')) {
	function write_log ( $log )  {
		if ( is_array( $log ) || is_object( $log ) ) {
			error_log( print_r( $log, true ) );
		} else {
			error_log( $log );
		}
	}
}


// global $APT_AFC;
$is_afc_active;
if( class_exists('acf') ){
	$is_afc_active = TRUE;
}

if ( ! defined( 'APT_AFC' ) ) {
	define( 'APT_AFC', $is_afc_active );
}



add_image_size( 'malam-logo', 170, 26 );



/**
 * Theme setup
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Theme widgets
 */
//require get_template_directory() . '/inc/theme-widgets.php';


/**
 * Enqueue menus
 */
require get_template_directory() . '/inc/menus.php';


/**
 * Enqueue scripts and styles.
 */

function malam_scripts() {
	wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,600i,700&display=swap' ); 
	wp_enqueue_style( 'malam-style', get_stylesheet_uri() );
	wp_enqueue_script( 'malam-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_register_script('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), false, true);
    wp_enqueue_script('slick');


	
	 wp_register_style( 'slick-css', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css' );
    wp_enqueue_style( 'slick-css');

	 wp_register_style( 'slick-theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css' );
    wp_enqueue_style( 'slick-theme');



	wp_enqueue_style( 'malam-stylesheet', APT_ROOT_URL . '/dist/css/bundle.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'malam-scripts', APT_ROOT_URL . '/dist/js/bundle.js', array('jquery', 'slick'), '1.0.0', true );

	



}
add_action( 'wp_enqueue_scripts', 'malam_scripts' );




/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

