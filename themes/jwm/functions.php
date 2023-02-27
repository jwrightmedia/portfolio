<?php
/**
 * jwm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jwm
 */

if ( ! function_exists( 'jwm_setup' ) ) :
	function jwm_setup() {
		load_theme_textdomain( 'jwm', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'jwm_setup' );


/**
 * @global int $content_width
 */
function jwm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jwm_content_width', 640 );
}
add_action( 'after_setup_theme', 'jwm_content_width', 0 );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
