<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
  return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.

if ( $product->is_in_stock() ) : ?>

  <?php
  /**
   * Hook: woocommerce_before_add_to_cart_form
   */
  do_action( 'woocommerce_before_add_to_cart_form' );
  ?>

  <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
    <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

    <?php
    do_action( 'woocommerce_before_add_to_cart_quantity' );

    woocommerce_quantity_input(
      array(
        'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
        'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
        'input_value' => isset( $_POST['quantity'] ) ? wc_clean( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
      )
    );

    do_action( 'woocommerce_after_add_to_cart_quantity' );
    ?>

    <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="product-card__cart" aria-label="Добавить в корзину">
      <?php prom_svg( 'cart-white.svg', [ 'aria-hidden' => 'true' ] ); ?>
    </button>

    <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
  </form>

  <?php
  /**
   * Hook: woocommerce_after_add_to_cart_form
   */
  do_action( 'woocommerce_after_add_to_cart_form' );
  ?>

<?php endif; ?>
