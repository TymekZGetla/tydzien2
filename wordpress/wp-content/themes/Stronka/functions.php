<?php

function pizzeria_pauza_styles() {
    wp_enqueue_style(
        'pizzeria-pauza-style',
        get_stylesheet_uri()
    );
}

add_action('wp_enqueue_scripts', 'pizzeria_pauza_styles');