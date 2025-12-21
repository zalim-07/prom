<?php

/**
 * Page template
 */

get_header(); ?>

<div class="page">
    <div class="container">
        <div class="page-content">
            <h1 class="page-title title--h1">
                <?php the_title(); ?>
            </h1>
            <div class="page-description">
                <?php the_content(); ?>
            </div>
        </div>

    </div>

    <?php get_template_part('template/prices-feedback'); ?>
    <?php get_template_part('template/consultation'); ?>
</div>

<?php get_footer(); ?>