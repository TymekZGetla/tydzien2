<?php get_header(); ?>

<main>

    <?php if (have_posts()): ?>

        <?php while (have_posts()):
            the_post(); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_post_thumbnail(); ?>

            <div>
                <?php the_content(); ?>
            </div>

            <?php
            $rozmiary = get_field('rozmiary');

            if ($rozmiary):
                ?>

                <div class="sizesbuttons">

                    <?php if (!empty($rozmiary['rozmiary_ubran'])): ?>

                        <?php foreach ($rozmiary['rozmiary_ubran'] as $rozmiar): ?>

                            <button>
                                <?php echo esc_html($rozmiar); ?>
                            </button>

                        <?php endforeach; ?>

                    <?php endif; ?>


                    <?php if (!empty($rozmiary['rozmiary_butow'])): ?>

                        <?php foreach ($rozmiary['rozmiary_butow'] as $rozmiar): ?>

                            <button>
                                <?php echo esc_html($rozmiar); ?>
                            </button>

                        <?php endforeach; ?>

                    <?php endif; ?>

                </div>

            <?php endif; ?>

        <?php endwhile; ?>

    <?php else: ?>

        <h1>Produkt jeszcze nie ma wpisu</h1>

    <?php endif; ?>

</main>

<?php get_footer(); ?>