<?php get_header(); ?>

<main>
    <h1>Witaj w Mojej marce odziezowej</h1>
    <?php include 'dane.php'; ?>
    <?php foreach ($products as $product) 
    {
    echo "<h2>{$product['nazwa']}</h2>";
    echo "<p>Cena: {$product['cena']} zł</p>";
    foreach ($product['rozmiary'] as $rozmiar) 
    {
        echo "<button class=\"sizesbuttons\">$rozmiar </button>";
    }
    }
    ?>
</main>

<?php get_footer(); ?>