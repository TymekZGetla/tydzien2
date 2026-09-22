<?php get_header(); ?>

<main>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <div>
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>

    <?php else : ?>

        <h1>Brak treści</h1>

    <?php endif; ?>

</main>

<?php get_footer(); ?>