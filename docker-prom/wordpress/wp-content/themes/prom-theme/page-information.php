<?php get_header(); ?>

<section class="services services--info">
    <div class="container">
        <div class="services__header">
            <h1 class="services__title title--h2">Информация о протезировании</h1>
            <a href="#" class="services__link link-point">
                <?php prom_svg( 'point.svg', [ 'aria-label' => 'Arrow Right' ] ); ?>
                <span>УСЛУГИ</span>
            </a>
        </div>

        <div class="services__grid">
            <!-- Service 1 -->
            <div class="service-card service-card--blue">
                <h3 class="service-card__title title--h3">ПЕРВИЧНАЯ КОНСУЛЬТАЦИЯ<br> И ДИАГНОСТИКА</h3>
                <p class="service-card__description">
                    Проводим всестороннюю оценку состояния пациента и определяем оптимальные решения в области
                    протезирования
                </p>
                <button class="btn btn--primary service-card__button">Подробнее</button>
            </div>

            <!-- Service 2 -->
            <div class="service-card service-card--blue">
                <h3 class="service-card__title title--h3">РЕМОНТ И ОБСЛУЖИВАНИЕ ПРОТЕЗОВ</h3>
                <p class="service-card__description">
                    Проводим всестороннюю оценку состояния пациента и определяем оптимальные решения в области
                    протезирования
                </p>
                <button class="btn btn--primary service-card__button">Подробнее</button>
            </div>

            <!-- Service 3 -->
            <div class="service-card service-card--blue">
                <h3 class="service-card__title title--h3">ИНДИВИДУАЛЬНОЕ<br> ИЗГОТОВЛЕНИЕ И ПОДГОНКА</h3>
                <p class="service-card__description">
                    Проводим всестороннюю оценку состояния пациента и определяем оптимальные решения в области
                    протезирования
                </p>
                <button class="btn btn--primary service-card__button">Подробнее</button>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template/consultation'); ?>
<?php get_footer(); ?>