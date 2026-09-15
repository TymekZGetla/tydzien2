<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <h1>Marka odzieżowa</h1>
    <div class="menu">
        <button class="menu-button">
            <span class="material-symbols-outlined">menu</span>
        </button>
<?php
        wp_nav_menu
        (  
            array   
            (
'theme_location' => 'primary_menu', 
'menu_class' => 'header-menu', 
'container' => 'nav', 
'container_class'=> 'menu-container',
            ) 
        );  
?>
            <a href="<?php echo home_url(); ?>">Strona główna</a>
            <a href="/o-nas/">O nas</a>
            <a href="/kontakt/">Kontakt</a>
        </div>
    </div>
</header>