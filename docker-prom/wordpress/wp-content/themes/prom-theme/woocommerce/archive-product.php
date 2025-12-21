<?php

/**
 * The Template for displaying product archives, including the main shop page
 */

defined('ABSPATH') || exit;

get_header();
?>
<div class="catalog-page">
  <div class="container container--catalog">
    <!-- Breadcrumbs -->
    <nav class="breadcrumbs">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="breadcrumbs__link">Главная</a>
      <span class="breadcrumbs__separator">/</span>
      <span class="breadcrumbs__current"><?php woocommerce_page_title(); ?></span>
    </nav>

    <h1 class="page__title"><?php woocommerce_page_title(); ?></h1>

    <?php
    /**
     * Hook: woocommerce_archive_description
     *
     * @hooked woocommerce_taxonomy_archive_description - 10
     * @hooked woocommerce_product_archive_description - 10
     */
    do_action('woocommerce_archive_description');
    ?>

    <!-- Mobile Filter Button -->
    <button class="catalog-mobile-filter-btn">
      <?php prom_svg('filter.svg', ['aria-label' => 'Фильтры']); ?>
      <span>Фильтр</span>
    </button>

    <!-- Catalog Layout -->
    <div class="catalog-layout">
      <!-- Left Sidebar - Filters -->
      <aside class="catalog-filters">
        <!-- Mobile Close Button -->
        <div class="catalog-filters__mobile-header">
          <h2>Фильтры</h2>
          <button class="catalog-filters__close">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M18 6L6 18M6 6L18 18"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </button>
        </div>

        <div class="catalog-filters__content">
          <!-- Category Filter -->
          <div class="filter-group filter-group--category">
            <button class="filter-group__header">
              <span>Каталог</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
            <div class="filter-group__content">
              <ul class="filter-category-list">
                <li>
                  <a href="#" class="filter-category-list__item">Инвалидные коляски</a>
                </li>
                <li>
                  <a href="#" class="filter-category-list__item">Санитарные стулья</a>
                </li>
                <li>
                  <a href="#" class="filter-category-list__item">Ходунки</a>
                </li>
                <li>
                  <a href="#" class="filter-category-list__item">Противопролежневые подушки</a>
                </li>
                <li>
                  <a href="#" class="filter-category-list__item">Противопролежневые матрасы</a>
                </li>
                <li>
                  <a href="#" class="filter-category-list__item">Медицинская мебель</a>
                </li>
                <li>
                  <a href="#" class="filter-category-list__item">Приспособления для ванных комнат</a>
                </li>
                <li>
                  <a href="#" class="filter-category-list__item">Трости</a>
                </li>
                <li>
                  <a href="#" class="filter-category-list__item">Костыли</a>
                </li>
                <li>
                  <a href="#" class="filter-category-list__item">Аккумуляторы и аксессуары</a>
                </li>
                <li>
                  <a href="#" class="filter-category-list__item">ТСР под электронный сертификат</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Price Filter -->
          <div class="filter-group filter-group--price">
            <button class="filter-group__header">
              <span>Розничная цена</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
            <div class="filter-group__content">
              <div class="filter-price">
                <div class="filter-price__inputs">
                  <input
                    type="number"
                    class="filter-price__input"
                    placeholder="0"
                    id="price-from" />
                  <span class="filter-price__separator">-</span>
                  <input
                    type="number"
                    class="filter-price__input"
                    placeholder="0"
                    id="price-to" />
                </div>
                <div class="filter-price__range">
                  <div class="filter-price__range-track">
                    <div class="filter-price__range-fill"></div>
                  </div>
                  <input
                    type="range"
                    class="filter-price__range-input"
                    min="0"
                    max="200000"
                    value="0"
                    id="price-range-min" />
                  <input
                    type="range"
                    class="filter-price__range-input filter-price__range-input--max"
                    min="0"
                    max="200000"
                    value="200000"
                    id="price-range-max" />
                </div>
              </div>
            </div>
          </div>

          <!-- Other Filters -->
          <div class="filter-group filter-group--features">
            <button class="filter-group__header">
              <span>Фильтр</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
            <div class="filter-group__content">
              <ul class="filter-checkbox-list">
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="drive-rim" />
                    <span>С приводом от обода колеса</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="independent-suspension" />
                    <span>С независимой подвеской</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="high-capacity" />
                    <span>Повышенной грузоподъемности</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="reclining-back" />
                    <span>С откидной спинкой</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="wheelchairs" />
                    <span>Каталки</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="lever-drive" />
                    <span>С рычажным приводом</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="one-hand" />
                    <span>Для управления одной рукой</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="lightweight" />
                    <span>Облегченные</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="multifunctional" />
                    <span>Многофункциональные</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="high-back" />
                    <span>С высокой спинкой</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="narrow" />
                    <span>Узкие</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="folding" />
                    <span>Складные</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="children" />
                    <span>Детские</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="home" />
                    <span>Для дома</span>
                  </label>
                </li>
                <li>
                  <label class="filter-checkbox">
                    <input
                      type="checkbox"
                      name="filter-feature"
                      value="electric" />
                    <span>Электрорегулировки</span>
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div class="filter-group">
            <button class="filter-group__header">
              <span>Размер</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>

          <div class="filter-group">
            <button class="filter-group__header">
              <span>Цвет</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>

          <div class="filter-group">
            <button class="filter-group__header">
              <span>Вес, кг (± 5%)</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>

          <div class="filter-group">
            <button class="filter-group__header">
              <span>Общая ширина, см</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>

          <div class="filter-group">
            <button class="filter-group__header">
              <span>Грузоподъемность, кг</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>

          <div class="filter-group">
            <button class="filter-group__header">
              <span>Тип протеза</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>

          <div class="filter-group">
            <button class="filter-group__header">
              <span>Возраст</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>

          <div class="filter-group">
            <button class="filter-group__header">
              <span>Технология</span>
              <svg
                class="filter-group__arrow"
                width="12"
                height="8"
                viewBox="0 0 12 8"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M1 1L6 6L11 1"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>
        </div>
        <!-- Filter Actions -->
        <div class="filter-actions">
          <button class="btn btn--primary">Показать</button>
          <button class="btn btn--outline-gray">Сбросить</button>
        </div>
      </aside>

      <!-- Right Content - Products -->
      <div class="catalog-content">
        <!-- Sort Filters -->
        <div class="catalog-sort">
          <?php
          // Получаем текущие параметры URL
          $current_orderby = isset( $_GET['orderby'] ) ? wc_clean( $_GET['orderby'] ) : 'menu_order';
          $current_paged = isset( $_GET['paged'] ) ? absint( $_GET['paged'] ) : 1;
          
          // Получаем базовый URL
          $base_url = remove_query_arg( array( 'orderby', 'paged' ) );
          
          // Функция для создания URL сортировки
          $get_sort_url = function( $orderby, $paged = 1 ) use ( $base_url ) {
            return add_query_arg( array(
              'orderby' => $orderby,
              'paged' => $paged
            ), $base_url );
          };
          
          // Определяем активную сортировку
          $is_popularity = ( $current_orderby === 'popularity' || ( $current_orderby === 'menu_order' && ! isset( $_GET['orderby'] ) ) );
          $is_series = ( $current_orderby === 'title' );
          $is_price_asc = ( $current_orderby === 'price' );
          $is_price_desc = ( $current_orderby === 'price-desc' );
          ?>
          
          <a href="<?php echo esc_url( $get_sort_url( 'popularity', 1 ) ); ?>" 
             class="catalog-sort__item <?php echo $is_popularity ? 'catalog-sort__item--active' : ''; ?>">
            <span>По популярности</span>
          </a>
          
          <a href="<?php echo esc_url( $get_sort_url( 'title', 1 ) ); ?>" 
             class="catalog-sort__item <?php echo $is_series ? 'catalog-sort__item--active' : ''; ?>">
            <span>По сериям</span>
          </a>
          
          <?php
          // Определяем направление сортировки по цене
          $price_orderby = $is_price_asc ? 'price-desc' : 'price';
          $price_url = $get_sort_url( $price_orderby, 1 );
          ?>
          <a href="<?php echo esc_url( $price_url ); ?>" 
             class="catalog-sort__item catalog-sort__item--price <?php echo ( $is_price_asc || $is_price_desc ) ? 'catalog-sort__item--active' : ''; ?> <?php echo $is_price_asc ? 'ascending' : ''; ?>">
            <span>По цене</span>
            <svg
              class="catalog-sort__arrow"
              width="12"
              height="12"
              viewBox="0 0 12 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M6 2L6 10M6 2L3 5M6 2L9 5"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </a>
        </div>
        <?php
        /**
         * Hook: woocommerce_before_main_content
         *
         * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
         * @hooked woocommerce_breadcrumb - 20
         */
        do_action('woocommerce_before_main_content');

        if (woocommerce_product_loop()) {
          /**
           * Hook: woocommerce_before_shop_loop
           *
           * @hooked woocommerce_output_all_notices - 10
           * @hooked woocommerce_result_count - 20
           * @hooked woocommerce_catalog_ordering - 30
           */
          do_action('woocommerce_before_shop_loop');
        ?>

          <!-- Products Grid -->
          <div class="products-grid">
            <?php
            woocommerce_product_loop_start();

            if (wc_get_loop_prop('is_shortcode')) {
              $columns = absint(wc_get_loop_prop('columns'));
              wc_set_loop_prop('columns', $columns);
            }

            while (have_posts()) {
              the_post();

              /**
               * Hook: woocommerce_shop_loop
               */
              do_action('woocommerce_shop_loop');

              wc_get_template_part('content', 'product');
            }

            woocommerce_product_loop_end();
            ?>
          </div>

        <?php
          /**
           * Hook: woocommerce_after_shop_loop
           *
           * @hooked woocommerce_pagination - 10
           */
          do_action('woocommerce_after_shop_loop');
        } else {
          /**
           * Hook: woocommerce_no_products_found
           *
           * @hooked wc_no_products_found - 10
           */
          do_action('woocommerce_no_products_found');
        }
        ?>
      </div>
    </div>

    <div class="catalog-layout__footer">
      <button class="btn btn--primary catalog-layout__button">
        Показать еще
      </button>
      <div class="pagination">
        <button class="pagination__button active">1</button>
        <button class="pagination__button">2</button>
      </div>
    </div>


    <div class="catalog-layout">
      <div></div>
      <div class="catalog-description">
        <?php

        /**
         * Hook: woocommerce_after_main_content
         */

        // Получаем ACF поле description из категории товаров
        $queried_object = get_queried_object();
        if ($queried_object && isset($queried_object->taxonomy) && $queried_object->taxonomy === 'product_cat') {
          // Это категория товаров
          $term_id = $queried_object->term_id;
          $description = get_field('description', 'product_cat_' . $term_id);
          if ($description) {
            echo '<div class="category-description">' . wp_kses_post($description) . '</div>';
          }
        } elseif (is_shop()) {
          // Это главная страница магазина
          $shop_page_id = wc_get_page_id('shop');
          if ($shop_page_id) {
            $description = get_field('description', $shop_page_id);
            if ($description) {
              echo '<div class="category-description">' . wp_kses_post($description) . '</div>';
            }
          }
        }

        do_action('woocommerce_after_main_content');
        ?>
      </div>
    </div>

  </div>
</div>






<?php get_template_part('template/consultation'); ?>

</div>
<?php
get_footer();
