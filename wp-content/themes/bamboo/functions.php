<?php
if ( ! function_exists( 'bamboo_support' ) ) :

/**
* Sets up theme defaults and registers support for various WordPress features.
*
* @since My theme name 1.0
*
* @return void
*/
function bamboo_support() {

// Add support for block styles.
add_theme_support( 'wp-block-styles' );

// Enqueue editor styles.
add_editor_style( 'style.css' );

}

endif;

add_action( 'after_setup_theme', 'bamboo_support' );

/*
 * Enqueue styles
 */
if ( ! function_exists( 'bamboo_styles' ) ) :
	function bamboo_styles(){
		wp_enqueue_style('bamboo-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version'));
		wp_enqueue_style('bamboo-style-blocks', get_template_directory_uri() . '/assets/css/block.css', array(), wp_get_theme()->get('version'));
	}
endif;

add_action( 'wp_enqueue_scripts', 'bamboo_styles' );