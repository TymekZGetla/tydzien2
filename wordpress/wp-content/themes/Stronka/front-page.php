<?php get_header(); ?>

<main>
    <h1>Witaj w Mojej marce odzieżowej</h1>



    <?php include 'dane.php'; ?>
    <div class="products">
        <?php foreach ($products as $product) 
        { 
            ?>

            <div class="product">
                <h2 class="productname"><?php echo $product['nazwa']; ?></h2>

                <p>Cena: <?php echo $product['cena']; ?> zł</p>

                <div class="sizesbuttons">
                    <?php foreach ($product['rozmiary'] as $rozmiar) 
                    { ?>
                        <button><?php echo $rozmiar; ?></button>
                    <?php } ?>
                </div>
            </div>
        <?php 
        } ?>
    </div>
</main>

<?php get_footer(); ?>