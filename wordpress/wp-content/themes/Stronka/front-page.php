<?php get_header(); ?>

<main>

<?php if (have_rows('slajdy', 'option')) : ?>
  <?php while (have_rows('slajdy', 'option')) : the_row(); ?>
  <?php $zdjecie = get_sub_field('zdjecie'); ?>
 <?php if ($zdjecie) : ?>
 <img src="<?php echo $zdjecie['url']; ?>">
 <?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-pagination"></div>
</div>

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


</main>

<?php get_footer(); ?>