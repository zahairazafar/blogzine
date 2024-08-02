<?php 

$wp_customize->add_section( 'blogzine_header_layout_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 10,
    'title'                 => __( 'Enable Disable Search Options', 'blogzine' ),
    'description'           => __( 'Enable Disable Search Options', 'blogzine' ),
    'panel'				=> 'blogzine_theme_options'
) );

$wp_customize->add_setting( 'blogzine_header_search_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'blogzine_sanitize_checkbox'
) );

$wp_customize->add_control( 'blogzine_header_search_enable', array(
    'label'                 =>  __( 'Enable Disable Search at Header', 'blogzine' ),
    'section'               => 'blogzine_header_layout_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'blogzine_header_search_enable',
        
) );