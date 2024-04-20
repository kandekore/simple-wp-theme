<?php
function my_simple_theme_setup() {
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'my-simple-theme'),
    ));
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'my_simple_theme_setup');

function my_simple_theme_customizer_setting($wp_customize) {
    $wp_customize->add_setting('footer_text', array(
        'default' => 'Copyright © Your Website',
    ));

    $wp_customize->add_section('footer_settings_section', array(
        'title' => 'Footer'
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'footer_text',
        array(
            'label' => 'Footer Text',
            'section' => 'footer_settings_section',
            'settings' => 'footer_text',
            'type' => 'text'
        )
    ));
}

add_action('customize_register', 'my_simple_theme_customizer_setting');
