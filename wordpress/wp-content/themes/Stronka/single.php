<?php get_header(); ?>

<main>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_post_thumbnail(); ?>

            <div>
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>
    <?php else: ?>
        <h1>"Produkt jescze nie ma wpisu"</h1>
    <?php endif; ?>

</main>

<?php get_footer(); ?>