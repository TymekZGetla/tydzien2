<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header(); ?>
<h1>Kontakt:</h1>
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
   
<?php get_footer(); ?>