<?php 


$wp_customize->add_setting( 'blogzine_footer_social_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'blogzine_sanitize_checkbox'
) );

$wp_customize->add_control( 'blogzine_footer_social_enable', array(
    'label'                 =>  __( 'Enable/Disable Footer Social Links', 'blogzine' ),
    'section'               => 'blogzine_footer_layout_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'blogzine_footer_social_enable',
        
) );