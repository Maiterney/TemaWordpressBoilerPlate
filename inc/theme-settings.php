<?php
/**
 * Check and setup theme's default settings
 *
 * @package AgenciaOpen
 *
 */

if ( ! function_exists( 'AgenciaOpen_setup_theme_default_settings' ) ) :
	function AgenciaOpen_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$AgenciaOpen_posts_index_style = get_theme_mod( 'AgenciaOpen_posts_index_style' );
		if ( '' == $AgenciaOpen_posts_index_style ) {
			set_theme_mod( 'AgenciaOpen_posts_index_style', 'default' );
		}

		// Sidebar position.
		$AgenciaOpen_sidebar_position = get_theme_mod( 'AgenciaOpen_sidebar_position' );
		if ( '' == $AgenciaOpen_sidebar_position ) {
			set_theme_mod( 'AgenciaOpen_sidebar_position', 'right' );
		}

		// Container width.
		$AgenciaOpen_container_type = get_theme_mod( 'AgenciaOpen_container_type' );
		if ( '' == $AgenciaOpen_container_type ) {
			set_theme_mod( 'AgenciaOpen_container_type', 'container' );
		}
	}
endif;


if ( ! function_exists( 'add_file_min' ) ) :
	function add_file_min(  ){
		global $post;
		if (is_home() || is_front_page()) {
			$file_name = 'home';
		} elseif ( is_page() ){
			// Automatizar por nome do modelo de página
			$pathfile = $post->page_template;
			if ( $pathfile == 'default') {
				$file_name = 'default';
			} else {
				$file_name = substr($pathfile,6,-4);
			}
		} elseif ( is_tax() ) {
			$file_name = get_queried_object()->taxonomy;
		} elseif ( is_category() ) {
			$file_name = 'category';
		} elseif ( is_search() ) {
			$file_name = 'search';
		} elseif ( is_singular() ) {
			$file_name = get_post_type();
		} elseif ( is_attachment() ) {
			$file_name = 'attachment';
		} elseif ( is_archive() ) {
			$file_name = 'archive';
		} elseif ( is_tag() ) {
			$file_name = 'tag';
		} elseif ( is_author() ) {
			$file_name = 'author';
		} elseif ( is_404() ) {
			$file_name = '404';
		} else {
			$file_name = 'all';
		}
		return $file_name;
	}
endif;


if( ! function_exists('acf_add_options_page') ) :
	acf_add_options_page(array(
		'page_title' 	=> 'Opções do tema',
		'menu_title'	=> 'Opções do tema',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'position'      => 1,
		'icon_url'      => 'dashicons-admin-appearance',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Seções do tema',
		'menu_title'	=> 'Seções do tema',
		'parent_slug'	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'position'      => 1,
		'icon_url'      => 'dashicons-admin-appearance',
		'redirect'		=> false
	));
	
endif;
