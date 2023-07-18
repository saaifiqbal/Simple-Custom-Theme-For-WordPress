<?php

function market_theme_customizar_register ($wp_customize){

    // ============= Header Area =============

    // Section 
    $wp_customize->add_section('market_theme_header_area', array(
        'title' => __('Header Area', 'fort'),
        'description' => 'If You Update Your Header Here'
    ));
    // Setting 
    $wp_customize->add_setting('market_theme_email_address', array(
        'default' => 'demo@tast.com',
    ));
    $wp_customize->add_setting('market_theme_phone_number', array(
        'default' => '+01 1234567890',
    ));
    $wp_customize->add_setting('market_theme_address', array(
        'default' => 'Dhaka, Bangladesh',
    ));
    $wp_customize->add_setting('market_theme_button', array(
        'default' => 'Get A Quote',
    ));
    $wp_customize->add_setting('market_theme_button_link', array(
        'default' => '',
    ));
    // Control 
    $wp_customize->add_control('market_theme_email_address', array(
        'label' => 'Email Address',
        'type' => 'email',
        'section' => 'market_theme_header_area',
    ));
    $wp_customize->add_control('market_theme_phone_number', array(
        'label' => 'Phone Number',
        'type' => 'text',
        'section' => 'market_theme_header_area',
    ));
    $wp_customize->add_control('market_theme_address', array(
        'label' => 'Address',
        'type' => 'text',
        'section' => 'market_theme_header_area',
    ));
    $wp_customize->add_control('market_theme_button_link', array(
        'type' => 'dropdown-pages',
        'section' => 'market_theme_header_area',
        'label' => 'Button Page Link',
    ));
    $wp_customize->add_control('market_theme_button', array(
        'label' => 'Button',
        'type' => 'text',
        'section' => 'market_theme_header_area',
    ));

    // ============= Footer Area  =============

    // Section 
    $wp_customize->add_section('market_theme_footer_area', array(
        'title' => __('Footer Area', 'fort'),
        'description' => 'You Can Update Footer Here'
    ));
    
    //Setting
    $wp_customize->add_setting('market_theme_footer_copyright', array(
        'default' => '© Copyright 2023 | Fort International Limited',
    ));
    // Control 
    $wp_customize->add_control('market_theme_footer_copyright', array(
        'label' => 'Copyright',
        'description' => 'If You are interested, you can change the copyright text here.',
        'section' => 'market_theme_footer_area',
    ));
    
    //Setting
    $wp_customize->add_setting('market_theme_footer_menu', array(
        'default' => '',
        // 'sanitize_callback' => 'sanitize_text_field',
    ));
    // Control 
    $wp_customize->add_control('market_theme_footer_menu', array(
        // 'label' => 'Footer Menu',
        // 'description' => 'If You are interested, you can change the footer menu here.',
        'section' => 'market_theme_footer_area',
        'type' => 'dropdown-pages', 
        'label' => __('Select Menu', 'fort'),
        'description' => __('Select a menu to display.', 'fort'),
        'settings' => 'market_theme_footer_menu',
    ));
    
    // ============= Color Customize Area  =============

    // Section 
    $wp_customize->add_section('market_theme_customize_color_area', array(
        'title' => __('Customize Color Area', 'fort'),
        'description' => 'You Can Change Color Of Bacground If You Want '
    ));
    
    //Setting
    $wp_customize->add_setting('market_theme_customize_background_color', array(
        'default' => '#ffffff',
    ));
    $wp_customize->add_setting('market_theme_customize_primary_color', array(
        'default' => '#323757',
    ));
    $wp_customize->add_setting('market_theme_customize_second_color', array(
        'default' => '#E8576F',
    ));

    // Control 
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'market_theme_customize_background_color', array(
        'label' => 'Background Color',
        'settings' => 'market_theme_customize_background_color',
        'section' => 'market_theme_customize_color_area',
    )));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'market_theme_customize_primary_color', array(
        'label' => 'Primary Color',
        'settings' => 'market_theme_customize_primary_color',
        'section' => 'market_theme_customize_color_area',
    )));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize,'market_theme_customize_second_color', array(
        'label' => 'Second Color',
        'settings' => 'market_theme_customize_second_color',
        'section' => 'market_theme_customize_color_area',
    )));
    
}
add_action('customize_register', 'market_theme_customizar_register');

function market_theme_customize_style() {
    ?>
    <style>
        body{
            background: <?php echo get_theme_mod('market_theme_customize_background_color'); ?>
        }
        :root{
            --primary: <?php echo get_theme_mod('market_theme_customize_primary_color'); ?>;
            --secondary: <?php echo get_theme_mod('market_theme_customize_second_color'); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'market_theme_customize_style' );