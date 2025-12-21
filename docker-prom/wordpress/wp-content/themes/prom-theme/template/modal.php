<!-- Popup: Получить протез -->
<div class="popup popup-consultation">
    <div class="popup__overlay"></div>
    <div class="popup__dialog">
        <button class="popup__close" type="button" aria-label="Закрыть">
            <span class="popup__close-icon">✕</span>
        </button>
        <div class="popup__content">
            <h3 class="consultation__form-title">
                Свяжитесь с нами для консультации
            </h3>
            <div class="consultation__form-content">
                <form>
                    <div class="form-group">
                        <span class="form-group__icon">
                            <?php prom_svg('phone.svg', ['aria-label' => 'Телефон']); ?>
                        </span>
                        <input
                            type="tel"
                            class="form-input"
                            placeholder="Номер телефона" />
                    </div>

                    <div class="form-group">
                        <span class="form-group__icon">
                            <?php prom_svg('email.svg', ['aria-label' => 'Email']); ?>
                        </span>
                        <input type="email" class="form-input" placeholder="E-mail" />
                    </div>

                    <button
                        type="submit"
                        class="btn btn--primary consultation__submit">
                        Получить консультацию
                    </button>
                    <label class="form-checkbox">
                        <input type="checkbox" checked />
                        <span>Соглашаюсь с условиями передачи данных</span>
                    </label>
                </form>
            </div>
        </div>
    </div>
</div>