<?php
/**
 * Главный шаблон темы Prom Theme
 */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><?php the_title(); ?></h2>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>

    <?php endwhile;
else : ?>

    <article class="no-posts">
        <h2>Ничего не найдено !</h2>
        <p>Добавьте записи или страницы в админ‑панели WordPress, чтобы увидеть контент.</p>
    </article>

<?php endif;

get_footer();
