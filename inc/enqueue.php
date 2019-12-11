<?php
/**
 * Understrap enqueue scripts
 *
 * @package AgenciaOpen
 */

if ( ! function_exists( 'AgenciaOpen_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function AgenciaOpen_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'AgenciaOpen-styles', get_stylesheet_directory_uri() . '/build/css/min/theme.min.css', array(), $the_theme->get( 'Version' ), false );
		wp_enqueue_style( 'AgenciaOpen-styles', get_stylesheet_directory_uri() . '/build/css/min/custom.min.css', array(), $the_theme->get( 'Version' ), false );
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'AgenciaOpen-scripts', get_template_directory_uri() . '/build/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'AgenciaOpen_scripts' ).

add_action( 'wp_enqueue_scripts', 'AgenciaOpen_scripts' );