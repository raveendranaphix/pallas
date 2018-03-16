<?php
/**
 * Pallas Theme Customizer
 *
 * @package Pallas
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pallas_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'pallas_customize_partial_blogname',
		) );

		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'pallas_customize_partial_blogdescription',
		) );


		// Social links
		$wp_customize->add_section( 'pallas_social_links_section', array(
			'title'        => __( 'Social links', 'pallas' ),
			'deiscription' => '',
		) );


		// Add setting
		foreach ( pallas_social_links() as $social_link ) {
			$wp_customize->add_setting( 'pallas_social_link_setting_' . $social_link['name'],
				array(
					'default'    => '',
					'type'       => 'theme_mod',
					'capability' => 'edit_theme_options',
					'transport'  => 'postMessage',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					$social_link['name'],
					array(
						'label'       => $social_link['label'],
						'description' => __( 'Place the social media URL here.', 'pallas' ),
						'section'     => 'pallas_social_links_section',
						'settings'    => 'pallas_social_link_setting_' . $social_link['name'],
						'type'        => 'text',
					)
				)
			);
		}
	}
}
add_action( 'customize_register', 'pallas_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function pallas_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function pallas_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pallas_customize_preview_js() {
	wp_enqueue_script( 'pallas-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'pallas_customize_preview_js' );
