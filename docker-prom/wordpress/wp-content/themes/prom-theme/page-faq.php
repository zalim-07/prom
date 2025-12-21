<?php get_header(); ?>

<div class="container">
    <div class="page-content">
        <h1 class="page-title title--h1">
            Ответы на частые вопросы
        </h1>
        <div class="page-description">
            <p>
                Собрали для вас ответы на самые популярные вопросы о протезировании. Если у Вас
                останутся вопросы, вы можете оставить заявку или связаться с нами по телефону.
            </p>
        </div>


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
                        <p>Протезирование можно начинать после полного заживления культи, обычно через
                            2-3 месяца после ампутации. Точные сроки определяет врач-протезист на
                            консультации.</p>
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
                        <p>При правильно подобранном и настроенном протезе дискомфорт минимален. Первое
                            время может потребоваться период адаптации, но при соблюдении рекомендаций
                            специалистов боль не возникает.</p>
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
                        <p>Да, современные протезы позволяют заниматься различными видами спорта.
                            Существуют специальные спортивные протезы для бега, плавания, велоспорта и
                            других активностей.</p>
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
                        <p>Стоимость протеза зависит от типа, функциональности и используемых
                            материалов. Базовые модели начинаются от 150 000 рублей, высокотехнологичные
                            протезы могут стоить от 500 000 рублей и выше. Часть стоимости
                            компенсируется по программе реабилитации.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_template_part( 'template/prices-feedback' ); ?>

<?php get_template_part( 'template/consultation' ); ?>

<?php get_footer(); ?>