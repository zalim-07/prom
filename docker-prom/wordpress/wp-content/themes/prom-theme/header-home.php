<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- Header -->
    <header class="header">
      <div class="container">
        <div class="header__content">
          <div class="header__logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo-link">
              <?php prom_svg( 'logo.svg', [ 'aria-label' => get_bloginfo( 'name' ) ] ); ?>
            </a>
          </div>

          <nav class="header__nav">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
              wp_nav_menu( [
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'header__nav',
                'fallback_cb'    => false,
              ] );
            } else {
              // Fallback меню, если меню не настроено
              ?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">ГЛАВНАЯ</a>
              <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>">КАТАЛОГ</a>
              <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">О НАС</a>
              <a href="<?php echo esc_url( home_url( '/services' ) ); ?>">УСЛУГИ</a>
              <a href="<?php echo esc_url( home_url( '/prices' ) ); ?>">ЦЕНЫ</a>
              <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQ</a>
              <a href="<?php echo esc_url( home_url( '/contacts' ) ); ?>">КОНТАКТЫ</a>
              <?php
            }
            ?>
          </nav>

          <div class="header__contacts">
            <a href="tel:+79534431220" class="header__phone"
              >+7 (953) 443-12-20</a
            >
            <div class="header__socials">
              <a href="#" class="header__social header__social--whatsapp">
                <?php prom_svg( 'wa.svg', [ 'aria-label' => 'WhatsApp' ] ); ?>
              </a>
              <a href="#" class="header__social header__social--telegram">
                <?php prom_svg( 'tg.svg', [ 'aria-label' => 'Telegram' ] ); ?>
              </a>
            </div>
          </div>

          <button class="burger-menu">
            <?php prom_svg( 'menu.svg', [ 'aria-label' => 'Меню' ] ); ?>
          </button>
        </div>
      </div>
    </header>

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
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M18 6L6 18M6 6L18 18"
              stroke="white"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
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
          <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">О НАС</a>
          <a href="<?php echo esc_url( home_url( '/services' ) ); ?>">УСЛУГИ</a>
          <a href="<?php echo esc_url( home_url( '/prices' ) ); ?>">ЦЕНЫ</a>
          <a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQ</a>
          <a href="<?php echo esc_url( home_url( '/contacts' ) ); ?>">КОНТАКТЫ</a>
          <?php
        }
        ?>
      </nav>

      <div class="mobile-menu__contacts">
        <a href="tel:+79534431220" class="mobile-menu__phone"
          >+7 (953) 443-12-20</a
        >
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