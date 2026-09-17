<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">

    <?php
    $logo = get_field('logo', 'option');

    if ($logo) :
    ?>
        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
    <?php endif; ?>

    <?php
    $telefon = get_field('telefon', 'option');

    if ($telefon) :
    ?>
        <a href="tel:<?php echo esc_attr($telefon); ?>">
            <?php echo esc_html($telefon); ?>
        </a>
    <?php endif; ?>
     <?php
    $email = get_field('email', 'option');

    if ($email) :
    ?>
        <a href="email:<?php echo esc_attr($email); ?>">
            <?php echo esc_html($email); ?>
        </a>
    <?php endif; ?>

    <div class="menu">

        <button class="menu-button">
            <span class="material-symbols-outlined">menu</span>
        </button>

        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary_menu',
                'menu_class' => 'header-menu',
                'container' => 'nav',
                'container_class' => 'menu-container',
            )
        );
        ?>

    </div>

</header>