<?php

/**
 * Page template
 */

get_header(); ?>

<div class="page">
    <section class="page-hero page-hero--about">
        <div class="container container--narrow">
            <div class="page-hero__content">
                <h1 class="page-hero__title">О компании</h1>
                <p class="page-hero__text">
                    В мастерской «ПРОМ» каждый протез — уникальное решение под ваши
                    потребности. Мы учитываем образ жизни, активность и личные
                    пожелания, чтобы вернуть вам уверенность в каждом движении.
                </p>
                <div class="hero__buttons">
                    <a class="btn btn--primary" href="<?php echo esc_url(home_url('/catalog')); ?>">Каталог протезов</a>
                    <button class="btn btn--outline js-open-prosthesis-popup">Получить консультацию</button>
                </div>
            </div>
        </div>
    </section>

    <section class="about-intro">
        <div class="container">
            <div class="section__header section__header--about">
                <h2 class="section__title title--h2 about-intro__title">
                    «ПРОМ» ПОМОГАЕТ ЛЮДЯМ ВОЗВРАЩАТЬСЯ К ПОЛНОЦЕННОЙ ЖИЗНИ. МЫ СОЗДАЁМ
                    ПРОТЕЗЫ, КОТОРЫЕ ДАРЯТ СВОБОДУ, УВЕРЕННОСТЬ И НОВЫЕ ВОЗМОЖНОСТИ
                </h2>
                <a href="#" class="section__link link-point">
                    <?php prom_svg('point.svg', ['aria-label' => 'Arrow Right']); ?>
                    <span>О НАС</span>
                </a>
            </div>
            <div class="about-intro__wrapper">
                <div class="about-intro__content">
                    <div class="about-intro__text">
                        <p>
                            Мастерская «ПРОМ» была основана в 2015 году группой
                            инженеров‑протезистов, объединённых общей идеей: сделать
                            современное протезирование доступным для каждого.
                        </p>
                        <p>
                            К 2018 году, благодаря наработанному опыту и положительным
                            отзывам, мастерская расширила производственные мощности и
                            внедрила цифровые технологии: 3D‑сканирование культи,
                            компьютерное моделирование приёмных гильз, прототипирование на
                            3D‑принтере. Это позволило повысить точность подгонки и
                            сократить сроки изготовления. Выход на новый уровень
                        </p>
                        <p>
                            В 2020 году «ПРОМ» получила аккредитацию на работу по
                            государственным контрактам, начав сотрудничать с Социальным
                            фондом и региональными центрами реабилитации. Параллельно
                            развивалось направление спортивных и специализированных
                            протезов — для пловцов, бегунов, музыкантов.
                        </p>
                        <p>
                            Сегодня мастерская располагает современным производством,
                            штатом сертифицированных протезистов и реабилитологов, а также
                            сервисным центром для гарантийного и постгарантийного
                            обслуживания. За 10 лет работы «ПРОМ» помогла более чем 1 500
                            пациентам вернуться к активной жизни.
                        </p>
                        <p>
                            Мы верим, что технологии должны служить человеку. Наша цель —
                            не просто протезы, а свобода движений, уверенность и новые
                            возможности для каждого клиента.
                        </p>
                    </div>
                </div>

                <div class="about-intro__image">
                    <img src="../../assets/images/about.webp" alt="Мастерская ПРОМ" />
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title title--h2">Наша команда</h2>
                <a href="#" class="section__link link-point">
                    <?php prom_svg('point.svg', ['aria-label' => 'Arrow Right']); ?>
                    <span>Cотрудники</span>
                </a>
            </div>

            <div class="team__grid">
                <div class="team__item">
                    <div class="review-placeholder">
                        <p>Сотрудник</p>
                    </div>
                </div>
                <div class="team__item">
                    <div class="review-placeholder">
                        <p>Сотрудник</p>
                    </div>
                </div>
                <div class="team__item">
                    <div class="review-placeholder">
                        <p>Сотрудник</p>
                    </div>
                </div>
                <div class="team__item">
                    <div class="review-placeholder">
                        <p>Сотрудник</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Examples Section -->
    <section class="examples">
        <div class="container">
            <div class="examples__header">
                <h2 class="examples__title title--h2">ПРИМЕРЫ НАШИХ ПРОТЕЗОВ</h2>
                <a href="#" class="examples__link link-point">
                    <?php prom_svg('point.svg', ['aria-label' => 'Arrow Right']); ?>
                    <span>ПОРТФОЛИО</span>
                </a>
            </div>

            <div class="swiper examples__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide examples__item">
                        <img
                            src="../../assets/images/examples/img.webp"
                            alt="Протез 1" />
                    </div>
                    <div class="swiper-slide examples__item">
                        <img
                            src="../../assets/images/examples/img-1.webp"
                            alt="Протез 2" />
                    </div>
                    <div class="swiper-slide examples__item">
                        <img
                            src="../../assets/images/examples/img-2.webp"
                            alt="Протез 3" />
                    </div>
                    <div class="swiper-slide examples__item">
                        <img
                            src="../../assets/images/examples/img-3.webp"
                            alt="Протез 4" />
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination examples__pagination"></div>
            </div>
        </div>
    </section>


    <?php get_template_part('template/reviews'); ?>
    <?php get_template_part('template/services'); ?>
    <?php get_template_part('template/consultation'); ?>
</div>

<?php get_footer(); ?>