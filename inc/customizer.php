<?php
/**
 * Blogzine Theme Customizer
 *
 * @package Blogzine
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function blogzine_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Load Upgrade to Pro control.
	require_once trailingslashit( get_template_directory() ) . '/inc/upgrade-to-pro/control.php';

	// Register custom section types.
	$wp_customize->register_section_type( 'blogzine_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new blogzine_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Upgrade to Blogzine Plus', 'blogzine' ),
				'pro_text' => esc_html__( 'Buy Now', 'blogzine' ),
				'pro_url'  => 'https://justwpthemes.com/downloads/blogzine-plus-wordpress-theme/',
				'priority' => 1,
			)
		)
	);

	// Sanitization Callback
	require_once trailingslashit( get_template_directory() ) . '/inc/sanitize.php'; 

	$wp_customize->add_panel( 'blogzine_theme_options', array(
			'priority' => 20,
            'capability'     => 'edit_theme_options',
			'title' => __( 'Theme options', 'blogzine' ),
			'description' => __( 'Footer Social Options', 'blogzine' ),
		)
	);	
	// Header Options
	require_once trailingslashit( get_template_directory() ) . '/inc/header-options.php'; 

	// Social Options
	require_once trailingslashit( get_template_directory() ) . '/inc/social-options.php'; 

	// Footer Options
	// require_once trailingslashit( get_template_directory() ) . '/inc/footer-options.php'; 

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'blogzine_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'blogzine_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'blogzine_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function blogzine_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function blogzine_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function blogzine_customize_preview_js() {
	wp_enqueue_script( 'blogzine-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'blogzine_customize_preview_js' );

function blogzine_customizer_control_scripts() {

	wp_enqueue_script( 'blogzine-controls', get_template_directory_uri() . '/inc/upgrade-to-pro/customize-controls.js', array('customize-controls'), '20151215', true );
	wp_enqueue_style( 'blogzine-customizer', get_template_directory_uri() . '/inc/upgrade-to-pro/customize-controls.css' );

}

add_action( 'customize_controls_enqueue_scripts', 'blogzine_customizer_control_scripts', 0 );
