<?php get_header(); ?>
<section class="page-hero">
    <div class="container container--narrow">
        <div class="page-hero__content">
            <h1 class="page-hero__title">
                ПОЛУЧЕНИЕ ПРОТЕЗА ПО ЭЛЕКТРОННОМУ
                СЕРТИФИКАТУ: ПРОСТО И УДОБНО
            </h1>
            <p class="page-hero__text">
                В нашей мастерской вы можете получить современный протез,
                воспользовавшись электронным сертификатом (ЭС) — удобным инструментом
                государственной поддержки людей с инвалидностью.
            </p>
            <button class="btn btn--outline js-open-prosthesis-popup">
                Получить консультацию
            </button>
        </div>
    </div>
</section>

<section class="prices-info">
    <div class="container">
        <div class="prices-info__header">
            <div class="prices-info__text">
                <h2 class="prices-info__title title--h2">
                    ЧТО ТАКОЕ ЭЛЕКТРОННЫЙ СЕРТИФИКАТ?
                </h2>
                <p class="prices-info__subtitle">
                    Электронный сертификат — это цифровая запись в реестре, которая
                    резервирует бюджетные средства на приобретение технических средств
                    реабилитации (ТСР), включая протезы.
                </p>
            </div>
            <a href="#" class="prices-info__label link-point">
                <?php prom_svg( 'point.svg', [ 'aria-label' => 'Arrow Right' ] ); ?>
                <span>КЛЮЧЕВЫЕ ОСОБЕННОСТИ</span>
            </a>
        </div>

        <div class="prices-info__grid">
            <div class="prices-info__card">
                <p>
                    Средства нельзя обналичить —
                    только использовать по целевому
                    назначению
                </p>
            </div>
            <div class="prices-info__card">
                <p>
                    Действует строго на указанные в
                    сертификате ТСР
                </p>
            </div>
            <div class="prices-info__card">
                <p>
                    Срок действия — от 30 до 90 дней с
                    момента активации
                </p>
            </div>
            <div class="prices-info__card">
                <p>
                    Позволяет выбрать аккредитованного
                    поставщика протезов
                </p>
            </div>
        </div>
    </div>
</section>

<section class="prices-steps">
    <div class="container">
        <div class="prices-steps__inner">
            <div class="prices-step">
                <h2 class="prices-steps__title">
                    КАК ПОЛУЧИТЬ ПРОТЕЗ
                    ПО СЕРТИФИКАТУ:
                    ПОШАГОВЫЙ АЛГОРИТМ
                </h2>
                <p class="prices-steps__subtitle">
                    Свяжитесь с нами если у Вас возникли вопросы
                </p>
                <button class="btn btn--outline js-open-prosthesis-popup">
                    Получить консультацию
                </button>
            </div>
            <article class="prices-step">
                <div class="prices-step__number">01</div>
                <h3 class="prices-step__heading">ПОЛУЧИТЕ ИПРА</h3>
                <p class="prices-step__text">
                    Пройдите медико-социальную экспертизу (МСЭ)
                    и получите Индивидуальную программу
                    реабилитации или абилитации с указанием
                    необходимого протеза.
                </p>
            </article>

            <article class="prices-step">
                <div class="prices-step__number">02</div>
                <h3 class="prices-step__heading">ОФОРМИТЕ ЭЛЕКТРОННЫЙ<br>СЕРТИФИКАТ</h3>
                <p class="prices-step__text">
                    Подайте заявление в:<br>
                    &mdash; Социальный фонд России (СФР);<br>
                    &mdash; МФЦ;<br>
                    &mdash; через портал &laquo;Госуслуги&raquo;
                    (самый быстрый способ).
                </p>
            </article>


            <article class="prices-step">
                <div class="prices-step__number">03</div>
                <h3 class="prices-step__heading">ДОЖДИТЕСЬ АКТИВАЦИИ</h3>
                <p class="prices-step__text">
                    Срок рассмотрения — до 10 рабочих дней.
                    После одобрения сертификат активируется
                    в течение 2 месяцев.
                </p>
            </article>
            <article class="prices-step">
                <div class="prices-step__number">04</div>
                <h3 class="prices-step__heading">ОБРАТИТЕСЬ В НАШУ<br>МАСТЕРСКУЮ</h3>
                <p class="prices-step__text">
                    Мы &mdash; аккредитованный поставщик,
                    работающий с электронными сертификатами.
                    Заключим договор и приступим к изготовлению
                    протеза.
                </p>
            </article>

            <article class="prices-step">
                <div class="prices-step__number">05</div>
                <h3 class="prices-step__heading">ПОЛУЧИТЕ ПРОТЕЗ</h3>
                <p class="prices-step__text">
                    После изготовления проведём обучение
                    по использованию и выдадим все
                    необходимые документы.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="prices-cost">
    <div class="container">
        <div class="steps__header">
            <div class="steps__header-left">
                <h2 class="steps__title title--h2">
                    ИЗ ЧЕГО ФОРМИРУЕТСЯ СТОИМОСТЬ ПРОТЕЗА?
                </h2>
                <div class="steps__more">
                    <p class="steps__subtitle">
                        Цена протеза складывается из нескольких ключевых компонентов:
                    </p>
                </div>
            </div>

            <div class="prices-cost__label">
                <span class="prices-cost__dot"></span>
                <span class="prices-cost__text">СТОИМОСТЬ</span>
            </div>
        </div>

        <div class="steps__grid">
            <!-- 1 -->
            <div class="step-card step-card--blue">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/step-1.svg' ); ?>" alt="1" class="step-card__number">
                <h3 class="step-card__title">ТИП ПРОТЕЗА</h3>
                <ul class="step-card__list">
                    <li>косметический (эстетическая функция);</li>
                    <li>механический (тяговый);</li>
                    <li>биоэлектрический (бионический);</li>
                    <li>спортивный (специализированный).</li>
                </ul>
            </div>

            <!-- 2 -->
            <div class="step-card">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/step-2.svg' ); ?>" alt="2" class="step-card__number">
                <h3 class="step-card__title">КОМПЛЕКТУЮЩИЕ И МАТЕРИАЛЫ</h3>
                <ul class="step-card__list">
                    <li>приёмная гильза (индивидуальное изготовление);</li>
                    <li>коленный/голеностопный модуль (для протезов нижних конечностей);</li>
                    <li>кисть/стопа (функциональные элементы);</li>
                    <li>крепёжные системы и амортизаторы.</li>
                </ul>
            </div>

            <!-- 3 -->
            <div class="step-card step-card--gray">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/step-3.svg' ); ?>" alt="3" class="step-card__number">
                <h3 class="step-card__title">ТЕХНОЛОГИИ ИЗГОТОВЛЕНИЯ</h3>
                <ul class="step-card__list">
                    <li>3D-сканирование культи;</li>
                    <li>компьютерное моделирование;</li>
                    <li>прототипирование на 3D‑принтере;</li>
                    <li>ручная доработка и подгонка.</li>
                </ul>
            </div>

            <!-- 4 -->
            <div class="step-card">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/step-4.svg' ); ?>" alt="4" class="step-card__number">
                <h3 class="step-card__title">ИНДИВИДУАЛЬНЫЕ ОСОБЕННОСТИ</h3>
                <ul class="step-card__list">
                    <li>уровень ампутации;</li>
                    <li>анатомические параметры пациента;</li>
                    <li>требуемый уровень активности (бытовой, профессиональный, спортивный).</li>
                </ul>
            </div>

            <!-- 5 -->
            <div class="step-card step-card--blue">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/step-5.svg' ); ?>" alt="5" class="step-card__number">
                <h3 class="step-card__title">ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ</h3>
                <ul class="step-card__list">
                    <li>первичная консультация и диагностика;</li>
                    <li>примерка и подгонка;</li>
                    <li>обучение пользованию протезом;</li>
                    <li>гарантийное обслуживание.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template/prices-feedback' ); ?>

<?php get_template_part( 'template/consultation' ); ?>

<?php get_footer(); ?>