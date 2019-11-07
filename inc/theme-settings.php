<?php
/**
 * Check and setup theme's default settings
 *
 * @package master12
 *
 */

if ( ! function_exists( 'master12_setup_theme_default_settings' ) ) :
	function master12_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$master12_posts_index_style = get_theme_mod( 'master12_posts_index_style' );
		if ( '' == $master12_posts_index_style ) {
			set_theme_mod( 'master12_posts_index_style', 'default' );
		}

		// Sidebar position.
		$master12_sidebar_position = get_theme_mod( 'master12_sidebar_position' );
		if ( '' == $master12_sidebar_position ) {
			set_theme_mod( 'master12_sidebar_position', 'right' );
		}

		// Container width.
		$master12_container_type = get_theme_mod( 'master12_container_type' );
		if ( '' == $master12_container_type ) {
			set_theme_mod( 'master12_container_type', 'container' );
		}
	}
endif;
