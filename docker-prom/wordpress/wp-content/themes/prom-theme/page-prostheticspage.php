<?php get_header(); ?>
<section class="page-hero">
    <div class="container container--narrow">
        <div class="page-hero__content">
            <h1 class="page-hero__title">
                Протезы нижних конечностей: шаг к полноценной жизни
            </h1>
            <p class="page-hero__text">
                Потеря нижней конечности — серьёзное испытание, но современные
                протезы позволяют вернуться к активному образу жизни. Мы помогаем
                обрести уверенность в каждом шаге и восстановить мобильность с
                помощью высокотехнологичных решений.
            </p>
            <div class="hero__buttons">
                <a class="btn btn--primary" href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">Каталог протезов</a>
                <button class="btn btn--outline js-open-prosthesis-popup">Получить консультацию</button>
            </div>
        </div>
    </div>
</section>

<section class="advantages">
    <div class="container">
        <div class="section__header">
            <div class="advantages__intro">
                <h2 class="section__title title--h2">
                    ЗАЧЕМ НУЖЕН ПРОТЕЗ НИЖНЕЙ КОНЕЧНОСТИ?
                </h2>
                <p class="section__subtitle">
                    Протезирование решает сразу несколько ключевых задач:
                </p>
            </div>
            <a href="#" class="section__link link-point">
                <?php prom_svg( 'point.svg', [ 'aria-label' => 'Arrow Right' ] ); ?>
                <span>ПРОТЕЗЫ НИЖНИХ КОНЕЧНОСТЕЙ</span>
            </a>
        </div>

        <div class="advantages__grid">
            <div class="advantages__card">
                <div class="advantages__number">01</div>
                <p class="advantages__text">
                    ВОССТАНАВЛИВАЕТ СПОСОБНОСТЬ К ПЕРЕДВИЖЕНИЮ
                </p>
            </div>
            <div class="advantages__card">
                <div class="advantages__number">02</div>
                <p class="advantages__text">
                    СНИЖАЕТ НАГРУЗКУ НА ЗДОРОВУЮ НОГУ И ПОЗВОНОЧНИК
                </p>
            </div>
            <div class="advantages__card">
                <div class="advantages__number">03</div>
                <p class="advantages__text">ПРЕДОТВРАЩАЕТ ВТОРИЧНЫЕ ОСЛОЖНЕНИЯ</p>
            </div>
            <div class="advantages__card">
                <div class="advantages__number">04</div>
                <p class="advantages__text">
                    ЗАНИМАЙТЕСЬ ЛЮБИМЫМ СПОРТОМ И ХОББИ
                </p>
            </div>
            <div class="advantages__card">
                <div class="advantages__number">05</div>
                <p class="advantages__text">
                    ПОВЫШАЕТ КАЧЕСТВО ЖИЗНИ И СОЦ. АДАПТАЦИЮ
                </p>
            </div>
        </div>
    </div>
</section>

<section class="protesics">
    <div class="container">
        <h2 class="protesics__title title--h2">
            ВИДЫ ПРОТЕЗОВ НИЖНИХ КОНЕЧНОСТЕЙ
        </h2>

        <div class="protesics__grid">
            <!-- Column 1: By Amputation Level -->
            <div class="protesics__column">
                <h3 class="protesics__column-title">ПО УРОВНЮ АМПУТАЦИИ</h3>

                <div class="protesics__cards">
                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="Протезы стопы" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">ПРОТЕЗЫ СТОПЫ</h4>
                            <p class="protesics__card-text">
                                восстанавливают опорную функцию и естественный перекат при
                                ходьбе
                            </p>
                        </div>
                    </div>

                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="Протезы голени" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">ПРОТЕЗЫ ГОЛЕНИ</h4>
                            <p class="protesics__card-text">
                                после ампутации ниже колена – сочетают лёгкость и
                                функциональность
                            </p>
                        </div>
                    </div>

                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="Протезы бедра" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">ПРОТЕЗЫ БЕДРА</h4>
                            <p class="protesics__card-text">
                                после ампутации выше колена – обеспечивают стабильность
                                при ходьбе
                            </p>
                        </div>
                    </div>

                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="Протезы при вычленении" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">
                                ПРОТЕЗЫ ПРИ ВЫЧЛЕНЕНИИ
                            </h4>
                            <p class="protesics__card-text">
                                полная потеря конечности – максимально компенсируют
                                утраченные функции
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 2: By Functionality -->
            <div class="protesics__column">
                <h3 class="protesics__column-title">ПО ФУНКЦИОНАЛЬНОСТИ</h3>

                <div class="protesics__cards">
                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="Косметические протезы" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">КОСМЕТИЧЕСКИЕ</h4>
                            <p class="protesics__card-text">
                                имитируют внешний вид ноги, подходят для эпизодического
                                использования
                            </p>
                        </div>
                    </div>

                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="Функциональные базовые" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">
                                ФУНКЦИОНАЛЬНЫЕ БАЗОВЫЕ
                            </h4>
                            <p class="protesics__card-text">
                                обеспечивают устойчивую ходьбу по ровной поверхности
                            </p>
                        </div>
                    </div>

                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="Активные протезы" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">АКТИВНЫЕ</h4>
                            <p class="protesics__card-text">
                                позволяют бегать, подниматься по лестнице, заниматься
                                спортом
                            </p>
                        </div>
                    </div>

                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="Интеллектуальные" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">ИНТЕЛЛЕКТУАЛЬНЫЕ</h4>
                            <p class="protesics__card-text">
                                с микропроцессорным управлением – адаптируются к темпу
                                ходьбы и рельефу местности
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 3: By Attachment Method -->
            <div class="protesics__column">
                <h3 class="protesics__column-title">ПО СПОСОБУ КРЕПЛЕНИЯ</h3>

                <div class="protesics__cards">
                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="Вакуумные протезы" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">ВАКУУМНЫЕ</h4>
                            <p class="protesics__card-text">
                                максимальная фиксация и контроль над протезом
                            </p>
                        </div>
                    </div>

                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="С силиконовым лайнером" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">
                                С СИЛИКОНОВЫМ ЛАЙНЕРОМ
                            </h4>
                            <p class="protesics__card-text">
                                комфортная посадка и снижение трения
                            </p>
                        </div>
                    </div>

                    <div class="protesics__card">
                        <div class="protesics__card-image">
                            <img
                                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/example_protesics.webp' ); ?>"
                                alt="Ременные" />
                        </div>
                        <div class="protesics__card-body">
                            <h4 class="protesics__card-title">РЕМЕННЫЕ</h4>
                            <p class="protesics__card-text">
                                простая и надёжная система крепления
                            </p>
                        </div>
                    </div>
                </div>
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
                        Комплексное обслуживание от первичной консультации до
                        установки и последующего обслуживания
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
                        Подбор оптимального решения с учетом ваших потребностей и
                        образа жизни
                    </li>
                    <li>Обсуждение всех деталей и особенностей протезирования</li>
                    <li>
                        Составление индивидуального плана лечения и реабилитации
                    </li>
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
                        Изготовление индивидуального гильзы с учетом всех
                        анатомических особенностей
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

<!-- FAQ Section -->
<section class="faq">
    <div class="container">
        <div class="faq__content">
            <div class="faq__left">
                <h2 class="faq__title title--h2">ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>
                <div class="accordion">
                    <div class="accordion__item">
                        <button class="accordion__header">
                            <span class="accordion__question">Когда можно начинать протезирование?</span>
                            <span class="accordion__icon">
                                <?php prom_svg( 'plus.svg', [ 'aria-label' => 'Arrow Down' ] ); ?>
                            </span>
                        </button>
                        <div class="accordion__content">
                            <div class="accordion__body">
                                <p>
                                    Протезирование можно начинать после полного заживления
                                    культи, обычно через 2-3 месяца после ампутации. Точные
                                    сроки определяет врач-протезист на консультации.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__header">
                            <span class="accordion__question">Больно ли ходить с протезом?</span>
                            <span class="accordion__icon">
                                <?php prom_svg( 'plus.svg', [ 'aria-label' => 'Arrow Down' ] ); ?>
                            </span>
                        </button>
                        <div class="accordion__content">
                            <div class="accordion__body">
                                <p>
                                    При правильно подобранном и настроенном протезе
                                    дискомфорт минимален. Первое время может потребоваться
                                    период адаптации, но при соблюдении рекомендаций
                                    специалистов боль не возникает.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__header">
                            <span class="accordion__question">Можно ли заниматься спортом?</span>
                            <span class="accordion__icon">
                                <?php prom_svg( 'plus.svg', [ 'aria-label' => 'Arrow Down' ] ); ?>
                            </span>
                        </button>
                        <div class="accordion__content">
                            <div class="accordion__body">
                                <p>
                                    Да, современные протезы позволяют заниматься различными
                                    видами спорта. Существуют специальные спортивные протезы
                                    для бега, плавания, велоспорта и других активностей.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__header">
                            <span class="accordion__question">Сколько стоит протез?</span>
                            <span class="accordion__icon">
                                <?php prom_svg( 'plus.svg', [ 'aria-label' => 'Arrow Down' ] ); ?>
                            </span>
                        </button>
                        <div class="accordion__content">
                            <div class="accordion__body">
                                <p>
                                    Стоимость протеза зависит от типа, функциональности и
                                    используемых материалов. Базовые модели начинаются от
                                    150 000 рублей, высокотехнологичные протезы могут стоить
                                    от 500 000 рублей и выше. Часть стоимости компенсируется
                                    по программе реабилитации.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq__right">
                <div class="faq__image">
                        <img
                            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq_image.webp' ); ?>"
                            alt="Протезирование" />
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template/consultation' ); ?>

<!-- Examples Section -->
<section class="examples">
    <div class="container">
        <div class="examples__header">
            <h2 class="examples__title title--h2">ПРИМЕРЫ НАШИХ ПРОТЕЗОВ</h2>
            <a href="#" class="examples__link link-point">
                <img src="../../assets/icons/point.svg" alt="Arrow Right" />
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

<!-- Reviews Section -->
<section class="reviews">
    <div class="container">
        <div class="reviews__header">
            <h2 class="reviews__title title--h2">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h2>
            <a href="#" class="reviews__link link-point">
                <img src="../../assets/icons/point.svg" alt="Arrow Right" />
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
<?php get_footer(); ?>