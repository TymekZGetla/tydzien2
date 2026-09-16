<?php get_header(); ?>

<main>

    <h1>Blog</h1>

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article>

                <h2><?php the_title(); ?></h2>

                <?php the_post_thumbnail(); ?>

                <p>Autor: <?php the_author(); ?></p>
                <p>Data: <?php the_date(); ?></p>
                <p>Kategoria: <?php the_category(', '); ?></p>

                <?php the_excerpt(); ?>

                <?php the_content(); ?>

            </article>

        <?php endwhile; ?>

    <?php else : ?>

        <p>Brak wpisów.</p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>