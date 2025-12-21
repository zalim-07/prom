<?php get_header(); ?>
<section class="contacts">
    <div class="container">
        <div class="section__header section__header--contacts">
            <h1 class="section__title title--h2">как с нами связаться</h1>
            <a href="#" class="section__link link-point">
                <?php prom_svg( 'point.svg', [ 'aria-label' => 'Arrow Right' ] ); ?>
                <span>контакты</span>
            </a>
        </div>

        <div class="contacts__grid">
            <!-- Form Card -->
            <div class="contact-card">
                <p class="contact-card__text">
                    Оставьте заявку, и мы проконсультируем вас по всем вопросам
                    относительно протезирования
                </p>
                <div class="contact-card__form">
                    <form>
                        <div class="form-group">
                            <span class="form-group__icon">
                                <?php prom_svg( 'phone.svg', [ 'aria-label' => 'Phone' ] ); ?>
                            </span>
                            <input
                                type="tel"
                                class="form-input"
                                placeholder="Номер телефона" />
                        </div>
                        <label class="form-checkbox">
                            <input type="checkbox" checked />
                            <span>Соглашаюсь с условиями передачи данных</span>
                        </label>
                        <button
                            type="submit"
                            class="btn btn--primary contact-card__submit">
                            Отправить
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info Card -->
            <div class="contact-card">
                <h3 class="contact-card__title">СВЯЗАТЬСЯ С НАМИ</h3>
                <div class="contact-card__info">
                    <p class="contact-card__address">
                        <strong>Адрес:</strong> г. Тула, улица Каракозова, 71/2
                    </p>
                    <p class="contact-card__hours">
                        <strong>Время работы:</strong> ПН-ПТ: 10:00 - 17:00
                    </p>
                    <div class="contact-card__phone">
                        <div class="contact-card__phone-icon">
                            <?php prom_svg( 'phone-contacts.svg', [ 'aria-label' => 'Phone' ] ); ?>
                        </div>
                        <a href="tel:+79534431220" class="contact-card__phone-number">+7 (953) 443-12-20</a>
                    </div>
                </div>
            </div>

            <!-- Social Networks Card -->
            <div class="contact-card">
                <h3 class="contact-card__title">СОЦИАЛЬНЫЕ СЕТИ</h3>
                <div class="footer__socials">
                    <a href="#" class="footer__social footer__social--whatsapp">
                        <?php prom_svg( 'wa.svg', [ 'aria-label' => 'WhatsApp' ] ); ?>
                    </a>
                    <a href="#" class="footer__social footer__social--telegram">
                        <?php prom_svg( 'tg.svg', [ 'aria-label' => 'Telegram' ] ); ?>
                    </a>
                    <a href="#" class="footer__social footer__social--vk">
                        <?php prom_svg( 'vk.svg', [ 'aria-label' => 'VK' ] ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <div class="container">
        <div class="map__content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.webp" alt="Map" />
        </div>
    </div>
</section>

<?php get_template_part( 'template/prices-feedback' ); ?>

<?php get_template_part( 'template/consultation' ); ?>


<?php get_footer(); ?>