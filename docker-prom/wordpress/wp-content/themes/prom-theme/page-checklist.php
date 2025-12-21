<?php get_header(); ?>
<section class="page-hero">
    <div class="container container--narrow">
        <div class="page-hero__content">
            <h1 class="page-hero__title">
                Чек‑лист: 10 шагов к получению протеза
            </h1>
            <p class="page-hero__text">
                Получение протеза — важный и многоэтапный процесс, от которого зависит качество вашей дальнейшей
                жизни. Он требует не только физической адаптации, но и чёткого понимания последовательности
                действий: от первичного обращения к врачу до полноценного освоения нового устройства.
            </p>
            <div class="hero__buttons">
                <button class="btn btn--outline js-open-prosthesis-popup">Получить консультацию</button>
            </div>
        </div>
    </div>
</section>

<!-- Checklist Section -->
<section class="checklist">
    <div class="container">
        <div class="section__header">
            <div class="section__header-left">
                <h2 class="section__title title--h2">
                    <span class="text-primary">Чек‑лист:</span> 10 шагов к получению протеза, узнайте сколько
                    шагов вам осталось до нового протеза
                </h2>
                <div class="section__more">
                    <p class="section__subtitle">
                        Здесь вы найдёте не просто список действий, а практическое руководство с конкретными
                        рекомендациями: какие документы подготовить, на что обратить внимание при выборе
                        мастерской, как пройти экспертизу и реабилитацию.
                    </p>
                </div>
            </div>

            <a href="#" class="steps__link link-point">
                <?php prom_svg('point.svg', ['aria-label' => 'Arrow Right']); ?>
                <span>чек-лист</span>
            </a>
        </div>

        <div class="checklist__items">
            <div class="checklist__column">
                <label class="checklist__item">
                    <input type="checkbox" class="checklist__checkbox" checked />
                    <span class="checklist__checkmark">
                        <?php prom_svg('check-white.svg', ['aria-label' => 'Check']); ?>
                    </span>
                    <div class="checklist__content">
                        <span class="checklist__title">1. ОБРАТИТЬСЯ К ЛЕЧАЩЕМУ ВРАЧУ</span>
                        <span class="checklist__description">
                            <ul>
                                <li>Получить направление на медико‑социальную экспертизу (МСЭ).</li>
                                <li>Уточнить медицинские показания и противопоказания.</li>
                                <li>Собрать пакет документов для МСЭ (выписки, заключения, снимки).</li>
                            </ul>
                        </span>
                    </div>
                </label>

                <label class="checklist__item">
                    <input type="checkbox" class="checklist__checkbox" />
                    <span class="checklist__checkmark">
                        <?php prom_svg('check-white.svg', ['aria-label' => 'Check']); ?>
                    </span>
                    <div class="checklist__content">
                        <span class="checklist__title">2. ПРОЙТИ МЕДИКО-СОЦИАЛЬНУЮ ЭКСПЕРТИЗУ (МСЭ)</span>
                        <span class="checklist__description">
                            <ul>
                                <li>Подать заявление и документы в бюро МСЭ.</li>
                                <li>Пройти освидетельствование.</li>
                                <li>Получить индивидуальную программу реабилитации (ИПРА) с указанием типа
                                    необходимого протеза.</li>
                            </ul>
                        </span>
                    </div>
                </label>

                <label class="checklist__item">
                    <input type="checkbox" class="checklist__checkbox" />
                    <span class="checklist__checkmark">
                        <?php prom_svg('check-white.svg', ['aria-label' => 'Check']); ?>
                    </span>
                    <div class="checklist__content">
                        <span class="checklist__title">3. ВЫБРАТЬ ПРОТЕЗНУЮ МАСТЕРСКУЮ</span>
                        <span class="checklist__description">
                            <ul>
                                <li>Изучить отзывы и рейтинги организаций.</li>
                                <li>Убедиться в наличии лицензии и сертификатов.</li>
                                <li>Записаться на первичную консультацию.</li>
                            </ul>
                        </span>
                    </div>
                </label>

                <label class="checklist__item">
                    <input type="checkbox" class="checklist__checkbox" />
                    <span class="checklist__checkmark">
                        <?php prom_svg('check-white.svg', ['aria-label' => 'Check']); ?>
                    </span>
                    <div class="checklist__content">
                        <span class="checklist__title">4. ПРОЙТИ ПЕРВИЧНУЮ КОНСУЛЬТАЦИЮ И ДИАГНОСТИКУ</span>
                        <span class="checklist__description">
                            <ul>
                                <li>Обсудить с протезистом цели и образ жизни.</li>
                                <li>Пройти осмотр культи и функциональную диагностику.</li>
                                <li>Получить рекомендации по типу протеза и компонентам.</li>
                            </ul>
                        </span>
                    </div>
                </label>

                <label class="checklist__item">
                    <input type="checkbox" class="checklist__checkbox" />
                    <span class="checklist__checkmark">
                        <?php prom_svg('check-white.svg', ['aria-label' => 'Check']); ?>
                    </span>
                    <div class="checklist__content">
                        <span class="checklist__title">5. ОФОРМИТЬ ДОКУМЕНТЫ ДЛЯ КОМПЕНСАЦИИ/
                            ФИНАНСИРОВАНИЯ</span>
                        <span class="checklist__description">
                            <ul>
                                <li>Подать заявление в ФСС или иной уполномоченный орган.</li>
                                <li>Уточнить сроки и порядок получения компенсации.</li>
                                <li>При необходимости рассмотреть варианты частного финансирования.</li>
                            </ul>
                        </span>
                    </div>
                </label>
            </div>

            <div class="checklist__column">
                <label class="checklist__item">
                    <input type="checkbox" class="checklist__checkbox" />
                    <span class="checklist__checkmark">
                        <?php prom_svg('check-white.svg', ['aria-label' => 'Check']); ?>
                    </span>
                    <div class="checklist__content">
                        <span class="checklist__title">6. СНЯТЬ МЕРКИ И СЛЕПКИ</span>
                        <span class="checklist__description">
                            <ul>
                                <li>Пройти процедуру моделирования приёмной гильзы.</li>
                                <li>Согласовать материалы и параметры конструкции.</li>
                                <li>Утвердить эскиз протеза.</li>
                            </ul>
                        </span>
                    </div>
                </label>

                <label class="checklist__item">
                    <input type="checkbox" class="checklist__checkbox" />
                    <span class="checklist__checkmark">
                        <?php prom_svg('check-white.svg', ['aria-label' => 'Check']); ?>
                    </span>
                    <div class="checklist__content">
                        <span class="checklist__title">7. ИЗГОТОВИТЬ ТЕСТОВЫЙ (ВРЕМЕННЫЙ) ПРОТЕЗ</span>
                        <span class="checklist__description">
                            <ul>
                                <li>Примерка и корректировка посадки.</li>
                                <li>Проверка функциональности и комфорта.</li>
                                <li>Внесение правок в конструкцию при необходимости.</li>
                            </ul>
                        </span>
                    </div>
                </label>

                <label class="checklist__item">
                    <input type="checkbox" class="checklist__checkbox" />
                    <span class="checklist__checkmark">
                        <?php prom_svg('check-white.svg', ['aria-label' => 'Check']); ?>
                    </span>
                    <div class="checklist__content">
                        <span class="checklist__title">8. ИЗГОТОВИТЬ ПОСТОЯННЫЙ ПРОТЕЗ</span>
                        <span class="checklist__description">
                            <ul>
                                <li>Утвердить финальный вариант конструкции.</li>
                                <li>Контролировать процесс изготовления.</li>
                                <li>Провести итоговую примерку.</li>
                            </ul>
                        </span>
                    </div>
                </label>

                <label class="checklist__item">
                    <input type="checkbox" class="checklist__checkbox" />
                    <span class="checklist__checkmark">
                        <?php prom_svg('check-white.svg', ['aria-label' => 'Check']); ?>
                    </span>
                    <div class="checklist__content">
                        <span class="checklist__title">9. ПРОЙТИ ОБУЧЕНИЕ И РЕАБИЛИТАЦИЮ</span>
                        <span class="checklist__description">
                            <ul>
                                <li>Освоить навыки надевания и снятия протеза.</li>
                                <li>Отработать ходьбу и базовые движения под контролем специалиста.</li>
                                <li>Получить рекомендации по уходу за протезом и культей.</li>
                            </ul>
                        </span>
                    </div>
                </label>

                <label class="checklist__item">
                    <input type="checkbox" class="checklist__checkbox" />
                    <span class="checklist__checkmark">
                        <?php prom_svg('check-white.svg', ['aria-label' => 'Check']); ?>
                    </span>
                    <div class="checklist__content">
                        <span class="checklist__title">10. ВСТАТЬ НА СЕРВИСНОЕ ОБСЛУЖИВАНИЕ</span>
                        <span class="checklist__description">
                            <ul>
                                <li>Заключить договор на гарантийное обслуживание.</li>
                                <li>Запланировать регулярные осмотры и настройки.</li>
                                <li>Узнать порядок ремонта или замены компонентов при необходимости.</li>
                            </ul>
                        </span>
                    </div>
                </label>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template/prices-feedback'); ?>

<?php get_template_part('template/consultation'); ?>

<?php get_footer(); ?>