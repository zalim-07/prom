<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Header Catalog -->
    <header class="header-catalog">
      <div class="container">
        <!-- Top Row -->
        <div class="header-catalog__top">
          <div class="header-catalog__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <?php prom_svg( 'logo-dark.svg', [ 'aria-label' => get_bloginfo( 'name' ) ] ); ?>
            </a>
          </div>

          <div class="header-catalog__search">
            <input
              type="text"
              placeholder="Поиск по сайту"
              class="header-catalog__search-input" />
            <button class="header-catalog__search-btn">
              <?php prom_svg( 'search.svg', [ 'aria-label' => 'Поиск' ] ); ?>
            </button>
          </div>

          <div class="header-catalog__contacts">
            <a href="tel:+79534431220" class="header-catalog__phone">+7 (953) 443-12-20</a>
            <div class="header-catalog__socials">
              <a href="#" class="header-catalog__social">
                <?php prom_svg( 'wa.svg', [ 'aria-label' => 'WhatsApp' ] ); ?>
              </a>
              <a href="#" class="header-catalog__social">
                <?php prom_svg( 'tg.svg', [ 'aria-label' => 'Telegram' ] ); ?>
              </a>
            </div>
          </div>
        </div>

        <!-- Bottom Row -->
        <div class="header-catalog__bottom">
          <div class="header-catalog__bottom-left">
            <button class="header-catalog__catalog-btn">
              <span>Каталог</span>
              <?php prom_svg( 'menu-blue.svg', [ 'class' => 'header-catalog__catalog-btn-icon-desktop', 'aria-hidden' => 'true' ] ); ?>
            </button>
            <button class="header-catalog__search-btn">
              <?php prom_svg( 'search.svg', [ 'class' => 'header-catalog__catalog-btn-icon-mobile', 'aria-hidden' => 'true' ] ); ?>
            </button>
            <button class="header-catalog__mobile-menu">
              <span>МЕНЮ</span>
              <?php prom_svg( 'menu-blue.svg', [ 'aria-label' => 'Меню' ] ); ?>
            </button>
          </div>

          <nav class="header-catalog__nav">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
              wp_nav_menu( [
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'header-catalog__nav',
                'fallback_cb'    => false,
              ] );
            } else {
              // Fallback меню, если меню не настроено
              ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
              <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">О нас</a>
              <a href="<?php echo esc_url( home_url( '/prosthetics' ) ); ?>">Протезы</a>
              <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>">Каталог ТСР</a>
              <a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Услуги</a>
              <a href="<?php echo esc_url( home_url( '/payment' ) ); ?>">Оплата</a>
              <a href="<?php echo esc_url( home_url( '/info' ) ); ?>">Информация</a>
              <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQ</a>
              <a href="<?php echo esc_url( home_url( '/contacts' ) ); ?>">Контакты</a>
              <?php
            }
            ?>
          </nav>

          <div class="header-catalog__actions">
            <a href="/compare/" class="header-catalog__action">
              <?php prom_svg( 'compare.svg', [ 'aria-label' => 'Сравнить' ] ); ?>
            </a>
            <a
              href="<?php echo class_exists( 'WooCommerce' ) ? esc_url( wc_get_cart_url() ) : '#'; ?>"
              class="header-catalog__action header-catalog__action--cart">
              <?php prom_svg( 'cart.svg', [ 'aria-label' => 'Корзина' ] ); ?>
              <?php if ( class_exists( 'WooCommerce' ) && WC()->cart && WC()->cart->get_cart_contents_count() > 0 ) : ?>
                <span class="cart-count"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
              <?php endif; ?>
            </a>
          </div>
        </div>
      </div>
    </header>

    <!-- Catalog Mega Menu -->
    <div class="catalog-menu">
      <div class="container container--catalog">
        <div class="catalog-menu__inner">
          <aside class="catalog-menu__sidebar">
            <ul class="catalog-menu__categories">
              <li>
                <button
                  class="catalog-menu__category catalog-menu__category--active"
                  type="button"
                  data-category="wheelchairs">
                  Инвалидные коляски
                </button>
              </li>
              <li>
                <button
                  class="catalog-menu__category"
                  type="button"
                  data-category="sanitary">
                  Санитарные стулья
                </button>
              </li>
              <li>
                <button
                  class="catalog-menu__category"
                  type="button"
                  data-category="walkers">
                  Ходунки
                </button>
              </li>
              <li>
                <button
                  class="catalog-menu__category"
                  type="button"
                  data-category="pillows">
                  Противопролежневые подушки
                </button>
              </li>
              <li>
                <button
                  class="catalog-menu__category"
                  type="button"
                  data-category="mattresses">
                  Противопролежневые матрасы
                </button>
              </li>
              <li>
                <button
                  class="catalog-menu__category"
                  type="button"
                  data-category="furniture">
                  Медицинская мебель
                </button>
              </li>
              <li>
                <button
                  class="catalog-menu__category"
                  type="button"
                  data-category="bathroom">
                  Приспособления для ванных комнат
                </button>
              </li>
              <li>
                <button
                  class="catalog-menu__category"
                  type="button"
                  data-category="canes">
                  Трости
                </button>
              </li>
              <li>
                <button
                  class="catalog-menu__category"
                  type="button"
                  data-category="crutches">
                  Костыли
                </button>
              </li>
              <li>
                <button
                  class="catalog-menu__category"
                  type="button"
                  data-category="accessories">
                  Аккумуляторы и аксессуары
                </button>
              </li>
              <li>
                <button
                  class="catalog-menu__category"
                  type="button"
                  data-category="certificates">
                  ТСР под электронный сертификат
                </button>
              </li>
            </ul>
          </aside>

          <div class="catalog-menu__content">
            <!-- Panel: Инвалидные коляски -->
            <div
              class="catalog-menu-panel catalog-menu-panel--active"
              data-category="wheelchairs">
              <div class="catalog-menu__items">
                <article class="catalog-menu-card">
                  <div class="catalog-menu-card__image">
                    <img
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/placeholder.webp' ); ?>"
                      alt="Электрические коляски" />
                  </div>
                  <h3 class="catalog-menu-card__title">
                    Электрические коляски
                  </h3>
                </article>

                <article class="catalog-menu-card">
                  <div class="catalog-menu-card__image">
                    <img
                      src="../../assets/images/placeholder.webp"
                      alt="Активные коляски" />
                  </div>
                  <h3 class="catalog-menu-card__title">Активные коляски</h3>
                </article>

                <article class="catalog-menu-card">
                  <div class="catalog-menu-card__image">
                    <img
                      src="../../assets/images/placeholder.webp"
                      alt="Механические коляски" />
                  </div>
                  <h3 class="catalog-menu-card__title">Механические коляски</h3>
                </article>

                <article class="catalog-menu-card">
                  <div class="catalog-menu-card__image">
                    <img
                      src="../../assets/images/placeholder.webp"
                      alt="Коляски для детей с ДЦП" />
                  </div>
                  <h3 class="catalog-menu-card__title">
                    Коляски для детей с ДЦП
                  </h3>
                </article>
              </div>

              <div class="catalog-menu__footer">
                <button
                  class="btn btn--outline-gray catalog-menu__button"
                  type="button">
                  Перейти в раздел
                </button>
              </div>
            </div>

            <!-- Panel: Санитарные стулья -->
            <div class="catalog-menu-panel" data-category="sanitary">
              <div class="catalog-menu__items">
                <article class="catalog-menu-card">
                  <div class="catalog-menu-card__image">
                    <img
                      src="../../assets/images/placeholder.webp"
                      alt="Санитарные стулья" />
                  </div>
                  <h3 class="catalog-menu-card__title">Санитарные стулья</h3>
                </article>

                <article class="catalog-menu-card">
                  <div class="catalog-menu-card__image">
                    <img
                      src="../../assets/images/placeholder.webp"
                      alt="Комоды" />
                  </div>
                  <h3 class="catalog-menu-card__title">Комоды</h3>
                </article>

                <article class="catalog-menu-card">
                  <div class="catalog-menu-card__image">
                    <img
                      src="../../assets/images/placeholder.webp"
                      alt="Стулья для душа" />
                  </div>
                  <h3 class="catalog-menu-card__title">Стулья для душа</h3>
                </article>
              </div>

              <div class="catalog-menu__footer">
                <button
                  class="btn btn--outline-gray catalog-menu__button"
                  type="button">
                  Перейти в раздел
                </button>
              </div>
            </div>

            <!-- Panel: Ходунки -->
            <div class="catalog-menu-panel" data-category="walkers">
              <div class="catalog-menu__items">
                <article class="catalog-menu-card">
                  <div class="catalog-menu-card__image">
                    <img
                      src="../../assets/images/placeholder.webp"
                      alt="Классические ходунки" />
                  </div>
                  <h3 class="catalog-menu-card__title">Классические ходунки</h3>
                </article>

                <article class="catalog-menu-card">
                  <div class="catalog-menu-card__image">
                    <img
                      src="../../assets/images/placeholder.webp"
                      alt="Ходунки с колёсами" />
                  </div>
                  <h3 class="catalog-menu-card__title">Ходунки с колёсами</h3>
                </article>

                <article class="catalog-menu-card">
                  <div class="catalog-menu-card__image">
                    <img
                      src="../../assets/images/placeholder.webp"
                      alt="Роллаторы" />
                  </div>
                  <h3 class="catalog-menu-card__title">Роллаторы</h3>
                </article>
              </div>

              <div class="catalog-menu__footer">
                <button
                  class="btn btn--outline-gray catalog-menu__button"
                  type="button">
                  Перейти в раздел
                </button>
              </div>
            </div>

            <!-- Panels for остальные категорий можно заполнить позже -->
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Search Panel -->
    <div class="mobile-search-panel">
      <div class="container">
        <div class="mobile-search-panel__content">
          <input
            type="text"
            placeholder="Поиск по сайту"
            class="mobile-search-panel__input" />
          <button class="mobile-search-panel__btn">
            <?php prom_svg( 'search.svg', [ 'aria-label' => 'Поиск' ] ); ?>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay"></div>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
      <div class="mobile-menu__header">
        <div class="mobile-menu__logo">
          <?php prom_svg( 'logo.svg', [ 'aria-label' => get_bloginfo( 'name' ) ] ); ?>
        </div>
        <button class="mobile-menu__close">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M18 6L6 18M6 6L18 18"
              stroke="white"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round" />
          </svg>
        </button>
      </div>

      <nav class="mobile-menu__nav">
        <?php
        if ( has_nav_menu( 'primary' ) ) {
          wp_nav_menu( [
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'mobile-menu__nav',
            'fallback_cb'    => false,
          ] );
        } else {
          // Fallback меню
          ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">ГЛАВНАЯ</a>
          <a href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">КАТАЛОГ</a>
          <a href="<?php echo esc_url( home_url( '/catalog' ) ); ?>">КАТАЛОГ ТСР</a>
          <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">О НАС</a>
          <a href="<?php echo esc_url( home_url( '/services' ) ); ?>">УСЛУГИ</a>
          <a href="<?php echo esc_url( home_url( '/prices' ) ); ?>">ЦЕНЫ</a>
          <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQ</a>
          <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">БЛОГ</a>
          <a href="<?php echo esc_url( home_url( '/contacts' ) ); ?>">КОНТАКТЫ</a>
          <?php
        }
        ?>
      </nav>

      <div class="mobile-menu__contacts">
        <a href="tel:+79534431220" class="mobile-menu__phone">+7 (953) 443-12-20</a>
        <p class="mobile-menu__address">г. Тула, улица Каракозова, 71/2</p>
        <div class="mobile-menu__socials">
          <a href="#" class="mobile-menu__social">
            <?php prom_svg( 'wa.svg', [ 'aria-label' => 'WhatsApp' ] ); ?>
          </a>
          <a href="#" class="mobile-menu__social">
            <?php prom_svg( 'tg.svg', [ 'aria-label' => 'Telegram' ] ); ?>
          </a>
          <a href="#" class="mobile-menu__social">
            <?php prom_svg( 'vk.svg', [ 'aria-label' => 'VKontakte' ] ); ?>
          </a>
        </div>
      </div>
    </div>
    <main>