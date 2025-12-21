<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || ! $product->is_visible()) {
  return;
}
?>
<article <?php wc_product_class('product-card', $product); ?>>
  <div class="product-card__image">
    <a href="<?php echo esc_url($product->get_permalink()); ?>">
      <?php
      /**
       * Hook: woocommerce_before_shop_loop_item_title
       *
       * @hooked woocommerce_show_product_loop_sale_flash - 10
       * @hooked woocommerce_template_loop_product_thumbnail - 10
       */
      do_action('woocommerce_before_shop_loop_item_title');
      ?>
    </a>
  </div>

  <div class="product-card__content">
    <div class="product-card__header">
      <h3 class="product-card__title">
        <a href="<?php echo esc_url($product->get_permalink()); ?>">
          <?php echo esc_html($product->get_name()); ?>
        </a>
      </h3>
      <div class="product-card__stock">
        <?php
        if ($product->is_in_stock()) {
          prom_svg('check-green.svg', ['aria-label' => 'В наличии']);
          $stock_status = $product->get_stock_status();
          if ($stock_status === 'instock') {
            $stock_quantity = $product->get_stock_quantity();
            if ($stock_quantity > 10) {
              echo '<span>Много</span>';
            } elseif ($stock_quantity > 0) {
              echo '<span>' . esc_html($stock_quantity) . ' шт.</span>';
            } else {
              echo '<span>В наличии</span>';
            }
          }
        } else {
          echo '<span>Нет в наличии</span>';
        }
        ?>
      </div>
    </div>

    <div class="product-card__price">
      <?php
      /**
       * Hook: woocommerce_after_shop_loop_item_title
       *
       * @hooked woocommerce_template_loop_rating - 5
       * @hooked woocommerce_template_loop_price - 10
       */
      do_action('woocommerce_after_shop_loop_item_title');
      ?>
    </div>

    <?php
    // Выводим кастомную кнопку сравнения
    prom_compare_button();
    ?>

    <?php
    /**
     * Hook: woocommerce_after_shop_loop_item
     *
     * @hooked woocommerce_template_loop_product_link_close - 5
     * @hooked woocommerce_template_loop_add_to_cart - 10
     */
    do_action('woocommerce_after_shop_loop_item');

    // Если кнопка добавления в корзину не выводится через хук, выводим её вручную
    if (! has_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart')) {
      wc_get_template('loop/add-to-cart.php');
    }
    ?>
  </div>
</article>