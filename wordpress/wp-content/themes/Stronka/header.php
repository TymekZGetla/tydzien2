<?php get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">

    <?php
    $logo = get_field('logo', 'option');

    if ($logo) :
    ?>

        <a href="<?php echo esc_url(home_url()); ?>">
            <img 
                src="<?php echo esc_url($logo['url']); ?>"
                alt="<?php echo esc_attr($logo['alt']); ?>"
            >
        </a>

    <?php endif; ?>

    <div class="header-icons">

        <span class="material-symbols-outlined darkmode">
            dark_mode
        </span>

        <a href="<?php echo esc_url(home_url()); ?>/koszyk">
            <span class="material-symbols-outlined cart">
                shopping_cart
            </span>
        </a>

        <div class="menu">

            <button class="menu-button" onclick="toggleMenu()">
                <span class="material-symbols-outlined">
                    menu
                </span>
            </button>

            <div class="menu-dropdown" id="menuDropdown">

                <?php
                wp_nav_menu(
                    array
                    (
                        'theme_location' => 'primary_menu',
                        'menu_class' => 'header-menu',
                        'container' => false,
                    )
                );
                ?>

            </div>
        </div>
    </div>
</header>