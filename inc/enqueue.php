<?php
/**
 * Understrap enqueue scripts
 *
 * @package master12
 */

if ( ! function_exists( 'master12_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function master12_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'master12-styles', get_stylesheet_directory_uri() . '/css/theme.css', array(), $the_theme->get( 'Version' ), false );
		wp_enqueue_style( 'nomedocss', get_template_directory_uri() . '/css/custom.css');
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true);
		wp_enqueue_script( 'master12-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'master12_scripts' ).

add_action( 'wp_enqueue_scripts', 'master12_scripts' );