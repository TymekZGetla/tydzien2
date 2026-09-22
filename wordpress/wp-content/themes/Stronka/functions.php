<?php
function marka_styles() 
{
    wp_enqueue_style(
        'style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css')
    );
}
function marka_scripts() 
{
    wp_enqueue_script(
        'theme-script',
        get_template_directory_uri() . '/script.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'marka_scripts');
add_action('wp_enqueue_scripts', 'marka_styles');

if ( ! function_exists( 'mytheme_register_nav_menu' ) ) 
    {

    function mytheme_register_nav_menu() 
    {
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

function marka_setup() 
{
    add_theme_support('post-thumbnails');
    add_theme_support('html5');
    add_theme_support('title-tag');
    add_image_size('custom-image', 800, 600, true);
}
add_action('after_setup_theme', 'marka_setup');