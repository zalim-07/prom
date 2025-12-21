<?php

/**
 * Front page template
 */

get_header('home'); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero__content">
            <h1 class="hero__title">ПРОТЕЗНО-ОРТОПЕДИЧЕСКАЯ<br />МАСТЕРСКАЯ</h1>

            <div class="hero__description">
                <p>
                    Изготовление протезов по электронному сертификату, за наличный и
                    безналичный расчет. По предварительной договоренности возможна
                    доставка инвалидов до нашей мастерской.
                </p>
            </div>

            <div class="hero__buttons">
                <a href="#" class="btn btn--primary">Каталог протезов</a>
                <a
                    href="#"
                    class="btn btn--outline desctop-only js-open-prosthesis-popup">Получить протез</a>
                <a
                    href="#"
                    class="btn btn--outline mobile-only js-open-prosthesis-popup">Получить консультацию</a>
            </div>
        </div>
    </div>
</section>

<!-- Steps Section -->
<section class="steps">
    <div class="container">
        <div class="steps__header">
            <div class="steps__header-left">
                <h2 class="steps__title title--h2">
                    3 ПРОСТЫХ ШАГА К ПОЛУЧЕНИЮ СОВРЕМЕННОГО ПРОТЕЗА
                </h2>
                <div class="steps__more">
                    <p class="steps__subtitle">
                        Комплексное обслуживание от первичной консультации до установки
                        и последующего обслуживания
                    </p>
                    <button class="btn btn--outline-gray">ПОДРОБНЕЕ</button>
                </div>
            </div>

            <a href="#" class="steps__link link-point">
                <?php prom_svg( 'point.svg', [ 'aria-label' => 'Arrow Right' ] ); ?>
                <span>КАК ПОЛУЧИТЬ ПРОТЕЗ</span>
            </a>
        </div>

        <div class="steps__grid">
            <!-- Step 1 -->
            <div class="step-card step-card--blue">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/step-1.svg' ); ?>"
                    alt="Step 1"
                    class="step-card__number" />
                <h3 class="step-card__title">
                    ПЕРВИЧНАЯ <br />КОНСУЛЬТАЦИЯ И <br />ДИАГНОСТИКА
                </h3>
                <ul class="step-card__list">
                    <li>Бесплатная консультация опытного специалиста-ортопеда</li>
                    <li>Подробный осмотр и оценка ваших возможностей</li>
                    <li>
                        Подбор оптимального решения с учетом ваших потребностей и образа
                        жизни
                    </li>
                    <li>Обсуждение всех деталей и особенностей протезирования</li>
                    <li>Составление индивидуального плана лечения и реабилитации</li>
                </ul>
            </div>

            <!-- Step 2 -->
            <div class="step-card">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/step-2.svg' ); ?>"
                    alt="Step 2"
                    class="step-card__number" />
                <h3 class="step-card__title">
                    ОФОРМЛЕНИЕ <br />И ИЗГОТОВЛЕНИЕ <br />ПРОТЕЗА
                </h3>
                <ul class="step-card__list">
                    <li>Заключение договора с подробным описанием всех условий</li>
                    <li>Точные замеры и создание слепков</li>
                    <li>
                        Изготовление индивидуального гильзы с учетом всех анатомических
                        особенностей
                    </li>
                    <li>Промежуточные примерки для идеальной подгонки</li>
                    <li>Финальная сборка и настройка протеза</li>
                </ul>
            </div>

            <!-- Step 3 -->
            <div class="step-card step-card--gray">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/step-3.svg' ); ?>"
                    alt="Step 3"
                    class="step-card__number" />
                <h3 class="step-card__title">
                    ПОЛУЧЕНИЕ <br />И АДАПТАЦИЯ <br />К ИСПОЛЬЗОВАНИЮ
                </h3>
                <ul class="step-card__list">
                    <li>Финальная примерка и тестирование</li>
                    <li>Обучение правильному использованию протеза</li>
                    <li>Настройка всех функций под ваши потребности</li>
                    <li>Передача готового изделия и необходимых документов</li>
                    <li>Постгарантийное обслуживание и поддержка</li>
                </ul>
                <div class="step-card__button">
                    <a href="#" class="btn btn--primary">Каталог протезов</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="products">
    <div class="container">
        <h2 class="products__title title--h2">
            КАКИЕ ПРОТЕЗЫ МЫ ИЗГОТАВЛИВАЕМ
        </h2>

        <div class="products__grid">
            <!-- Upper Limb Prostheses -->
            <div class="product-card">
                <div class="product-card__image">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder.webp' ); ?>"
                        alt="Протезы верхних конечностей" />
                </div>
                <h3 class="product-card__title title--h3">
                    ПРОТЕЗЫ ВЕРХНИХ КОНЕЧНОСТЕЙ
                </h3>
                <p class="product-card__description">
                    Протезы кистей, предплечья, плеча и при вычленении плеча для
                    взрослых и детей
                </p>
                <a href="#" class="btn btn--primary product-card__button">В каталог</a>
            </div>

            <!-- Lower Limb Prostheses -->
            <div class="product-card">
                <div class="product-card__image">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder.webp' ); ?>"
                        alt="Протезы верхних конечностей" />
                </div>
                <h3 class="product-card__title title--h3">
                    ПРОТЕЗЫ НИЖНИХ КОНЕЧНОСТЕЙ
                </h3>
                <p class="product-card__description">
                    Протезы стопы, голени, бедра и при вычленении бедра для взрослых и
                    детей
                </p>
                <a href="#" class="btn btn--primary product-card__button">В каталог</a>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits">
    <div class="container">
        <div class="benefits__content">
            <div class="benefits__left">
                <h2 class="benefits__title title--h2">ГАРАНТИИ И БЕЗОПАСНОСТЬ</h2>
                <div class="benefits__description">
                    <p>
                        Гарантия 5 лет на все виды протезов — берём на себя полную
                        ответственность за качество.
                    </p>
                    <p>
                        Полное соответствие международным стандартам ISO — безопасность
                        и надёжность каждого изделия подтверждена сертификатами.
                    </p>
                </div>
                <button class="btn btn--outline">Получить консультацию</button>
            </div>

            <div class="benefits__right">
                <div class="benefit-item">
                    <div class="benefit-item__icon">
                        <?php prom_svg( 'point-white.svg', [ 'aria-label' => 'Point White' ] ); ?>
                    </div>
                    <div class="benefit-item__text">ИНДИВИДУАЛЬНЫЙ ПОДХОД</div>
                </div>

                <div class="benefit-item">
                    <div class="benefit-item__icon">
                        <?php prom_svg( 'point-white.svg', [ 'aria-label' => 'Point White' ] ); ?>
                    </div>
                    <div class="benefit-item__text">СОВРЕМЕННЫЕ ТЕХНОЛОГИИ</div>
                </div>

                <div class="benefit-item">
                    <div class="benefit-item__icon">
                        <?php prom_svg( 'point-white.svg', [ 'aria-label' => 'Point White' ] ); ?>
                    </div>
                    <div class="benefit-item__text">ВЫСОКОКАЧЕСТВЕННЫЕ МАТЕРИАЛЫ</div>
                </div>

                <div class="benefit-item">
                    <div class="benefit-item__icon">
                        <?php prom_svg( 'point-white.svg', [ 'aria-label' => 'Point White' ] ); ?>
                    </div>
                    <div class="benefit-item__text">ГАРАНТИЯ КАЧЕСТВА ИЗДЕЛИЙ</div>
                </div>

                <div class="benefit-item">
                    <div class="benefit-item__icon">
                        <?php prom_svg( 'point-white.svg', [ 'aria-label' => 'Point White' ] ); ?>
                    </div>
                    <div class="benefit-item__text">ПРОФЕССИОНАЛЬНАЯ ПОДДЕРЖКА</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template/services' ); ?>

<?php get_template_part( 'template/consultation' ); ?>

<!-- Examples Section -->
<section class="examples">
    <div class="container">
        <div class="examples__header">
            <h2 class="examples__title title--h2">ПРИМЕРЫ НАШИХ ПРОТЕЗОВ</h2>
            <a href="#" class="examples__link link-point">
                <?php prom_svg( 'point.svg', [ 'aria-label' => 'Arrow Right' ] ); ?>
                <span>ПОРТФОЛИО</span>
            </a>
        </div>

        <div class="swiper examples__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide examples__item">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/examples/img.webp' ); ?>" alt="Протез 1" />
                </div>
                <div class="swiper-slide examples__item">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/examples/img-1.webp' ); ?>"
                        alt="Протез 2" />
                </div>
                <div class="swiper-slide examples__item">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/examples/img-2.webp' ); ?>"
                        alt="Протез 3" />
                </div>
                <div class="swiper-slide examples__item">
                    <img
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/examples/img-3.webp' ); ?>"
                        alt="Протез 4" />
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination examples__pagination"></div>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="reviews">
    <div class="container">
        <div class="reviews__header">
            <h2 class="reviews__title title--h2">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h2>
            <a href="#" class="reviews__link link-point">
                <?php prom_svg( 'point.svg', [ 'aria-label' => 'Arrow Right' ] ); ?>
                <span>ОТЗЫВЫ</span>
            </a>
        </div>

        <div class="swiper reviews__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="reviews__item">
                        <!-- Плейсхолдер для видео отзыва 1 -->
                        <div class="review-placeholder">
                            <p>Отзыв клиента 1</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="reviews__item">
                        <!-- Плейсхолдер для видео отзыва 2 -->
                        <div class="review-placeholder">
                            <p>Отзыв клиента 2</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination reviews__pagination"></div>
        </div>
    </div>
</section>

<?php get_footer('home');
