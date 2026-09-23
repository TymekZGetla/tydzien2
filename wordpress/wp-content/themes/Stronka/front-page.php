<?php get_header(); ?>

<main>
    <h1>Witaj w Mojej marce odzieżowej</h1>

    <div class="products">

        <?php
        $query = new WP_Query([
            'post_type' => 'product'
        ]);

        if ($query->have_posts()) :

            while ($query->have_posts()) : $query->the_post();
        ?>

                <div class="product">

                    <a class="product-name" href="<?php the_permalink(); ?>">

                        <?php the_post_thumbnail(); ?>

                        <h2><?php the_title();?></h2>

                    </a>

                </div>

        <?php
            endwhile;

            wp_reset_postdata();

        endif;
        ?>

    </div>

</main>

<?php get_footer(); ?>