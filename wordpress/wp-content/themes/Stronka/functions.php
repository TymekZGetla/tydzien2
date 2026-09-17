<?php

function pizzeria_pauza_styles() {
    wp_enqueue_style(
        'pizzeria-pauza-style',
        get_template_directory_uri() . '/style.css',
        array(),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'pizzeria_pauza_styles');
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

    function mytheme_register_nav_menu() {
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }

    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

if( function_exists('acf_add_options_page') ) 
    {
    acf_add_options_page(array(
        'page_title' => 'Ustawienia motywu',
        'menu_title' => 'Ustawienia motywu',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
    }