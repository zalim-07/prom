<?php get_header(); ?>
<div class="page__content">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
    <section class="products">
        <div class="container">
            <div class="products__grid">
                <!-- Upper Limb Prostheses -->
                <div class="product-card">
                    <div class="product-card__image">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/placeholder.webp'); ?>"
                            alt="Протезы верхних конечностей" />
                    </div>
                    <h3 class="product-card__title title--h3">
                        ПРОТЕЗЫ ВЕРХНИХ КОНЕЧНОСТЕЙ
                    </h3>
                    <p class="product-card__description">
                        Протезы кистей, предплечья, плеча и при вычленении плеча для
                        взрослых и детей
                    </p>
                    <a href="<?php echo esc_url(home_url('/catalog')); ?>" class="btn btn--primary product-card__button">В каталог</a>
                </div>

                <!-- Lower Limb Prostheses -->
                <div class="product-card">
                    <div class="product-card__image">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/placeholder.webp'); ?>"
                            alt="Протезы верхних конечностей" />
                    </div>
                    <h3 class="product-card__title title--h3">
                        ПРОТЕЗЫ НИЖНИХ КОНЕЧНОСТЕЙ
                    </h3>
                    <p class="product-card__description">
                        Протезы стопы, голени, бедра и при вычленении бедра для
                        взрослых и детей
                    </p>
                    <a href="<?php echo esc_url(home_url('/catalog')); ?>" class="btn btn--primary product-card__button">В каталог</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_template_part('template/consultation'); ?>
<?php get_footer(); ?>