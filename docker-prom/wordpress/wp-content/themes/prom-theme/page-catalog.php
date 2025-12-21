<?php get_header(); ?>
<div class="catalog-page">
  <div class="container container--catalog">
    <!-- Breadcrumbs -->
    <nav class="breadcrumbs">
      <a href="../home/index.html" class="breadcrumbs__link">Главная</a>
      <span class="breadcrumbs__separator">/</span>
      <span class="breadcrumbs__current">Каталог ТСР</span>
    </nav>

    <h1 class="page__title">Каталог тср</h1>

    <!-- Mobile Filter Button -->
    <button class="catalog-mobile-filter-btn">
      <img src="../../assets/icons/filter.svg" alt="Фильтры" />
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
          <button class="catalog-sort__item catalog-sort__item--active">
            <span>По популярности</span>
          </button>
          <button class="catalog-sort__item">
            <span>По сериям</span>
          </button>
          <button class="catalog-sort__item catalog-sort__item--price">
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
          </button>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
          <!-- Product Card 1 -->
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>

          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
          <article class="product-card">
            <div class="product-card__image">
              <img src="../../assets/images/product.webp" alt="XR105" />
            </div>
            <div class="product-card__content">
              <div class="product-card__header">
                <h3 class="product-card__title">XR105</h3>
                <div class="product-card__stock">
                  <img
                    src="../../assets/icons/check-green.svg"
                    alt="В наличии" />
                  <span>Много</span>
                </div>
              </div>

              <div class="product-card__price">
                <span>49 900 руб.</span>
              </div>

              <button class="product-card__compare" aria-label="Сравнить">
                <img src="../../assets/icons/compare-gray.svg" alt="" />
              </button>
              <button
                class="product-card__cart"
                aria-label="Добавить в корзину">
                <img src="../../assets/icons/cart-white.svg" alt="" />
              </button>
            </div>
          </article>
        </div>
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
        <p>
          Ходунки – эффективное средство реабилитации, обеспечивающее
          инвалидам и людям, перенесшим тяжелые операции или заболевания
          опорно-двигательного аппарата, возможность самостоятельного
          передвижения. В каталоге интернет магазина компании «Ортоника»
          представлен большой выбор ходунков для взрослых, а наши
          специалисты окажут профессиональную информационную поддержку на
          этапе выбора и оформления заказа.
        </p>

        <p>Какие ходунки для инвалидов выбрать?</p>

        <p>
          Выбор средства реабилитации должен быть основан на индивидуальных
          особенностях организма больного, вес, возраст, серьезность
          травматизации или болезни и так далее.
        </p>

        <p>Выделяют основные типы ходунков для взрослых:</p>

        <ul>
          <li>
            Стационарные – простые и удобные приспособления, оснащенные
            четырьмя ножками сам резиновыми наконечниками в нижней части.
            Среди преимуществ таких моделей – обеспечение максимальной
            устойчивости, ремонтопригодность конструкции, доступная цена.
            Способ передвижения – больной сдвигает ходунки перед собой,
            после чего опираясь на верхнюю часть, делает шаг вперёд.
          </li>
          <li>
            Шагающие – это ходунки, которые сдвигаются вперед с каждым шагам
            больного. Такая модель не подходит для начальной стадии
            реабилитации, когда важна максимальная устойчивость, могут иметь
            место головокружения или слабость в верхних конечностях. Но она
            востребована среди тех, кто нуждается в специальных
            приспособлениях на поздних этапах выздоровления.
          </li>
          <li>
            Универсальные – это ходунки, сочетающие в себе особенности
            моделей стационарного и шагающего типа.
          </li>
          <li>
            Модели, оснащенные колесиками. Колесики устанавливаются на
            передних двух ножках ходунков. Передвижения с такой конструкцией
            является более простым, но он ходунки с колесиками не подходит
            для людей с нарушенной координации.
          </li>
          <li>
            Роллаторы – усовершенствованные ходунки, которые оснащаются не
            только колесами на каждой опоре, но также ручным тормозом и
            сидением для отдыха во время «стоянки». Цена таких моделей
            наиболее высокая, а выбор должен основываться на перспективах
            продолжительности предстоящей реабилитации.
          </li>
        </ul>

        <p>Что нужно учитывать?</p>

        <p>
          Определившись с моделью, обращайте внимание на важные моменты –
          рифлёные поручни не позволят рукам проскальзывать, возможность
          трансформации – упростит транспортировку изделия. Ходунки
          обеспечат инвалиду мобильность и независимость, а больному
          человеку обеспечат скорейшее выздоровление благодаря разумным
          физическим нагрузкам. Главное – правильно выбрать модель! Звоните
          консультантам нашей компании, и мы подберем вариант для конкретной
          ситуации. Доставка любых товаров из каталога осуществляется в
          пределах столицы и регионов России.
        </p>
      </div>
    </div>
  </div>

  <?php get_template_part( 'template/consultation' ); ?>

</div>
<?php get_footer(); ?>