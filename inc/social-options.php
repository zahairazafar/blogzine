<?php 

$wp_customize->add_section( 'blogzine_social_links_section', array(
    'capability'            => 'edit_theme_options',
    'priority'              => 10,
    'title'                 => __( 'Social Media Links', 'blogzine' ),
    'description'           => __( 'Input Social Media Links ', 'blogzine' ),
    'panel'				=> 'blogzine_theme_options'
) );


$wp_customize->add_setting( 'blogzine_header_social_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'blogzine_sanitize_checkbox'
) );

$wp_customize->add_control( 'blogzine_header_social_enable', array(
    'label'                 =>  __( 'Enable/Disable Header Social Links', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'blogzine_header_social_enable',
        
) );

$wp_customize->add_setting( 'blogzine_footer_social_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'blogzine_sanitize_checkbox'
) );

$wp_customize->add_control( 'blogzine_footer_social_enable', array(
    'label'                 =>  __( 'Enable/Disable Footer Social Links', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'blogzine_footer_social_enable',   
) );
//Facebook Layout Options

$wp_customize->add_setting( 'blogzine_facebook_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'blogzine_facebook_link_url', array(
    'label'                 =>  __( 'Paste Facebook Link Here', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'url',
    'priority'              => 10,
    'settings'              => 'blogzine_facebook_link_url',
) );

//Twitter Layout Options

$wp_customize->add_setting( 'blogzine_twitter_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'blogzine_twitter_link_url', array(
    'label'                 =>  __( 'Paste Twitter Link Here', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'url',
    'priority'              => 10,
    'settings'              => 'blogzine_twitter_link_url',
) );

//Google Layout Options

$wp_customize->add_setting( 'blogzine_google_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'blogzine_google_link_url', array(
    'label'                 =>  __( 'Paste GoogleLink Here', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'url',
    'priority'              => 10,
    'settings'              => 'blogzine_google_link_url',
) );

//Pinterest Layout Options

$wp_customize->add_setting( 'blogzine_pinterest_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'blogzine_pinterest_link_url', array(
    'label'                 =>  __( 'Paste Pinterest Link Here', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'url',
    'priority'              => 10,
    'settings'              => 'blogzine_pinterest_link_url',
) );

//Instagram Layout Options

$wp_customize->add_setting( 'blogzine_instagram_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'blogzine_instagram_link_url', array(
    'label'                 =>  __( 'Paste Instagram Link Here', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'url',
    'priority'              => 10,
    'settings'              => 'blogzine_instagram_link_url',
) );

//Linkedin Layout Options

$wp_customize->add_setting( 'blogzine_linkedin_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'blogzine_linkedin_link_url', array(
    'label'                 =>  __( 'Paste Linkedin Link Here', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'url',
    'priority'              => 10,
    'settings'              => 'blogzine_linkedin_link_url',
) );

//Youtube Layout Options

$wp_customize->add_setting( 'blogzine_youtube_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'blogzine_youtube_link_url', array(
    'label'                 =>  __( 'Paste Youtube Link Here', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'url',
    'priority'              => 10,
    'settings'              => 'blogzine_youtube_link_url',
) );

//Whatsapp Layout Options

$wp_customize->add_setting( 'blogzine_whatsapp_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'blogzine_whatsapp_link_url', array(
    'label'                 =>  __( 'Paste Whatsapp Link Here', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'url',
    'priority'              => 10,
    'settings'              => 'blogzine_whatsapp_link_url',
) );

//Skype Layout Options

$wp_customize->add_setting( 'blogzine_skype_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'blogzine_skype_link_url', array(
    'label'                 =>  __( 'Paste Skype Link Here', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'url',
    'priority'              => 10,
    'settings'              => 'blogzine_skype_link_url',
) );

//We Chat Layout Options

$wp_customize->add_setting( 'blogzine_wechat_link_url', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'blogzine_wechat_link_url', array(
    'label'                 =>  __( 'Paste We Chat  Link Here', 'blogzine' ),
    'section'               => 'blogzine_social_links_section',
    'type'                  => 'url',
    'priority'              => 10,
    'settings'              => 'blogzine_wechat_link_url',
) );

