<?php

/**
 * The Template for displaying all single products
 */

defined('ABSPATH') || exit;

get_header();

/**
 * Hook: woocommerce_before_single_product
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
  echo get_the_password_form();
  return;
}

while ( have_posts() ) {
  the_post();
  global $product;
  ?>

<!-- Main Content -->
<div class="product-page">
  <div class="container container--narrow">
    <!-- Breadcrumbs -->
    <nav class="breadcrumbs">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumbs__link">Главная</a>
      <span class="breadcrumbs__separator">-</span>
      <?php
      $shop_page_id = wc_get_page_id( 'shop' );
      if ( $shop_page_id ) {
        $shop_page = get_permalink( $shop_page_id );
        ?>
        <a href="<?php echo esc_url( $shop_page ); ?>" class="breadcrumbs__link">Каталог ТСР</a>
        <span class="breadcrumbs__separator">-</span>
        <?php
      }
      ?>
      <span class="breadcrumbs__current"><?php the_title(); ?></span>
    </nav>

    <h1 class="product-page__title"><?php the_title(); ?></h1>
    <!-- Product Section -->
    <div class="product" id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
      <!-- Product Gallery -->
      <div class="product-gallery">
        <?php
        // Получаем изображения товара
        $attachment_ids = $product->get_gallery_image_ids();
        $main_image_id = $product->get_image_id();
        
        if ( $main_image_id || ! empty( $attachment_ids ) ) {
          $all_images = array();
          if ( $main_image_id ) {
            $all_images[] = $main_image_id;
          }
          if ( ! empty( $attachment_ids ) ) {
            $all_images = array_merge( $all_images, $attachment_ids );
          }
          ?>
          <div class="swiper product-gallery__main">
            <div class="swiper-wrapper">
              <?php foreach ( $all_images as $image_id ) : 
                $image_url = wp_get_attachment_image_url( $image_id, 'full' );
                $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ?: get_the_title();
                ?>
                <div class="swiper-slide">
                  <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" />
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="product-gallery__thumbs-container">
            <div class="swiper product-gallery__thumbs">
              <div class="swiper-wrapper">
                <?php foreach ( $all_images as $image_id ) : 
                  $thumb_url = wp_get_attachment_image_url( $image_id, 'thumbnail' );
                  $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ?: get_the_title();
                  ?>
                  <div class="swiper-slide">
                    <div class="product-gallery__thumbs-item">
                      <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>" />
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="swiper-button-next">
              <?php prom_svg( 'next.svg', [ 'aria-label' => 'Следующий' ] ); ?>
            </div>
            <div class="swiper-button-prev">
              <?php prom_svg( 'previous.svg', [ 'aria-label' => 'Предыдущий' ] ); ?>
            </div>
          </div>
          <?php
        } else {
          // Если нет изображений, показываем placeholder
          ?>
          <div class="swiper product-gallery__main">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?php echo esc_url( wc_placeholder_img_src( 'full' ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" />
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>

      <!-- Product Info -->
      <div class="product-info">
        <div class="product-info__availability">
          <?php
          if ( $product->is_in_stock() ) {
            prom_svg( 'check-blue.svg', [ 'aria-label' => 'В наличии' ] );
            $stock_quantity = $product->get_stock_quantity();
            if ( $stock_quantity ) {
              echo '<span>' . esc_html( $stock_quantity ) . ' шт.</span>';
            } else {
              echo '<span>В наличии</span>';
            }
          } else {
            echo '<span>Нет в наличии</span>';
          }
          ?>
        </div>

        <div class="product-info__price">
          <?php echo $product->get_price_html(); ?>
        </div>

        <?php
        // Выводим вариации товара (если это вариативный товар)
        if ( $product->is_type( 'variable' ) ) {
          ?>
          <div class="product-info__attributes">
            <?php
            // Выводим форму выбора вариаций
            woocommerce_variable_add_to_cart();
            ?>
          </div>
          <?php
        } else {
          // Для простых товаров выводим только атрибут size
          $attributes = $product->get_attributes();
          if ( ! empty( $attributes ) ) {
            // Ищем атрибут size (может быть pa_size или size)
            $size_attribute = null;
            foreach ( $attributes as $attribute_name => $attribute ) {
              $attribute_slug = str_replace( 'pa_', '', $attribute_name );
              if ( strtolower( $attribute_slug ) === 'size' || strtolower( $attribute_name ) === 'size' ) {
                $size_attribute = $attribute;
                $size_attribute_name = $attribute_name;
                break;
              }
            }
            
            if ( $size_attribute ) {
              ?>
              <div class="product-info__attributes">
                <?php
                $name = wc_attribute_label( $size_attribute_name );
                $values = wc_get_product_terms( $product->get_id(), $size_attribute_name, array( 'fields' => 'names' ) );
                if ( ! empty( $values ) ) {
                  ?>
                  <div class="product-attribute">
                    <span class="product-attribute-label"><?php echo esc_html( $name ); ?></span>
                    <div class="product-attribute-value"><?php echo esc_html( implode( ', ', $values ) ); ?></div>
                  </div>
                  <?php
                }
                ?>
              </div>
              <?php
            }
          }
        }
        ?>

        <div class="product-info__actions">
          <?php
          // Форма добавления в корзину
          if ( ! $product->is_type( 'variable' ) ) {
            woocommerce_template_single_add_to_cart();
          }
          ?>
          <button class="btn btn--outline-blue">КУПИТЬ В 1 КЛИК</button>
        </div>

        <div class="product-info__delivery">
          <a href="#">Информация о доставке</a>
        </div>

        <div class="product-info__compare">
          <?php prom_compare_button(); ?>
          <span class="product-info__compare-label">В список сравнения</span>
        </div>

        <?php
        // Выводим атрибуты товара как характеристики
        $attributes = $product->get_attributes();
        if ( ! empty( $attributes ) ) {
          $visible_attributes = array_slice( $attributes, 0, 5, true );
          $hidden_attributes = array_slice( $attributes, 5, null, true );
          ?>
          <div class="product-info__specs">
            <div class="product-info__specs-table">
              <?php
              foreach ( $visible_attributes as $attribute ) {
                $name = wc_attribute_label( $attribute->get_name() );
                $values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) );
                if ( ! empty( $values ) ) {
                  ?>
                  <div class="product-info__specs-row">
                    <div class="product-info__specs-cell product-info__specs-cell--label">
                      <?php echo esc_html( $name ); ?>
                    </div>
                    <div class="separator"></div>
                    <div class="product-info__specs-cell product-info__specs-cell--value">
                      <?php echo esc_html( implode( ', ', $values ) ); ?>
                    </div>
                  </div>
                  <?php
                }
              }
              
              // Скрытые характеристики
              foreach ( $hidden_attributes as $attribute ) {
                $name = wc_attribute_label( $attribute->get_name() );
                $values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) );
                if ( ! empty( $values ) ) {
                  ?>
                  <div class="product-info__specs-row product-info__specs-row-hidden">
                    <div class="product-info__specs-cell product-info__specs-cell--label">
                      <?php echo esc_html( $name ); ?>
                    </div>
                    <div class="separator"></div>
                    <div class="product-info__specs-cell product-info__specs-cell--value">
                      <?php echo esc_html( implode( ', ', $values ) ); ?>
                    </div>
                  </div>
                  <?php
                }
              }
              ?>
            </div>

            <?php if ( ! empty( $hidden_attributes ) ) : ?>
              <div class="product-info__specs-expand">
                <a href="#" class="product-info__specs-expand-link">Все характеристики</a>
              </div>
            <?php endif; ?>
          </div>
          <?php
        }
        ?>

        <div class="product-info__description">
          <?php
          // Выводим краткое описание
          $short_description = $product->get_short_description();
          if ( $short_description ) {
            echo wp_kses_post( $short_description );
          }
          
          // Выводим полное описание
          $description = $product->get_description();
          if ( $description ) {
            echo '<div class="product-description-full">' . wp_kses_post( $description ) . '</div>';
          }
          ?>
        </div>
      </div>
    </div>

    <?php
    // Выводим особенности товара из ACF поля (если используется)
    $features = get_field( 'features' );
    if ( $features && is_array( $features ) && ! empty( $features ) ) {
      ?>
      <!-- Features Section -->
      <section class="product-features">
        <h2 class="product-features__title">ОСНОВНЫЕ ОСОБЕННОСТИ</h2>
        <div class="product-features__list">
          <?php
          foreach ( $features as $feature ) {
            $image = isset( $feature['image'] ) ? $feature['image'] : null;
            $caption = isset( $feature['caption'] ) ? $feature['caption'] : '';
            $image_url = $image ? ( is_array( $image ) ? $image['url'] : $image ) : get_template_directory_uri() . '/assets/images/product.webp';
            ?>
            <div class="product-features__item">
              <div class="product-features__image-wrapper">
                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $caption ); ?>" />
              </div>
              <?php if ( $caption ) : ?>
                <p class="product-features__caption">
                  <?php echo esc_html( $caption ); ?>
                </p>
              <?php endif; ?>
            </div>
            <?php
          }
          ?>
        </div>
      </section>
      <?php
    }
    
    /**
     * Hook: woocommerce_after_single_product_summary
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    do_action( 'woocommerce_after_single_product_summary' );
    ?>
  </div>

</div>

<?php
  /**
   * Hook: woocommerce_after_single_product
   */
  do_action( 'woocommerce_after_single_product' );
}

get_template_part('template/consultation');

get_footer();
