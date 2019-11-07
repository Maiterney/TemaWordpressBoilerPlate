<?php
/**
 * Master12 Theme Customizer
 *
 * @package master12
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'master12_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function master12_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'master12_customize_register' );

if ( ! function_exists( 'master12_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function master12_theme_customize_register( $wp_customize ) {

		// Theme layout settings.
		$wp_customize->add_section( 'master12_theme_layout_options', array(
			'title'       => __( 'Theme Layout Settings', 'master12' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Container width and sidebar defaults', 'master12' ),
			'priority'    => 160,
		) );

		 //select sanitization function
        function master12_theme_slug_sanitize_select( $input, $setting ){
         
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
 
            //get the list of possible select options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                             
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
             
        }

		$wp_customize->add_setting( 'master12_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'master12_theme_slug_sanitize_select',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'master12_container_type', array(
					'label'       => __( 'Container Width', 'master12' ),
					'description' => __( "Choose between Bootstrap's container and container-fluid", 'master12' ),
					'section'     => 'master12_theme_layout_options',
					'settings'    => 'master12_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'master12' ),
						'container-fluid' => __( 'Full width container', 'master12' ),
					),
					'priority'    => '10',
				)
			) );

		$wp_customize->add_setting( 'master12_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'master12_sidebar_position', array(
					'label'       => __( 'Sidebar Positioning', 'master12' ),
					'description' => __( "Set sidebar's default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.",
					'master12' ),
					'section'     => 'master12_theme_layout_options',
					'settings'    => 'master12_sidebar_position',
					'type'        => 'select',
					'sanitize_callback' => 'master12_theme_slug_sanitize_select',
					'choices'     => array(
						'right' => __( 'Right sidebar', 'master12' ),
						'left'  => __( 'Left sidebar', 'master12' ),
						'both'  => __( 'Left & Right sidebars', 'master12' ),
						'none'  => __( 'No sidebar', 'master12' ),
					),
					'priority'    => '20',
				)
			) );
	}
} // endif function_exists( 'master12_theme_customize_register' ).
add_action( 'customize_register', 'master12_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'master12_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function master12_customize_preview_js() {
		wp_enqueue_script( 'master12_customizer', get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ), '20130508', true );
	}
}
add_action( 'customize_preview_init', 'master12_customize_preview_js' );

