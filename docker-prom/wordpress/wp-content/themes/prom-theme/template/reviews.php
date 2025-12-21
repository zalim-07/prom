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