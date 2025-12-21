<?php 
/**
 * Кастомная кнопка сравнения товаров
 */
function prom_compare_button() {
    if ( ! class_exists( 'BeRocket_Compare_Products' ) ) {
        return;
    }
    
    global $product;
    if ( empty( $product ) ) {
        return;
    }
    
    $compare_instance = BeRocket_Compare_Products::getInstance();
    $product_id = br_wc_get_product_id( $product );
    $product_id = intval( $product_id );
    
    // Получаем настройки плагина
    $options_global = $compare_instance->get_option();
    $options = $options_global['general_settings'];
    $text = $options_global['text_settings'];
    $page_compare = intval( $options['compare_page'] );
    $page_compare = apply_filters( 'wpml_object_id', $page_compare, 'page', true );
    
    // Проверяем, добавлен ли товар в сравнение (статический метод)
    $is_added = BeRocket_Compare_Products::is_set_cookie( $product_id );
    
    // Формируем классы
    $button_class = 'product-card__compare br_compare_button br_product_' . $product_id;
    if ( $is_added ) {
        $button_class .= ' br_compare_added';
    }
    if ( ! empty( $options['fast_compare'] ) ) {
        $button_class .= ' berocket_product_smart_compare';
    }
    
    // Ссылка на страницу сравнения
    $href_link = '#no_compare_page';
    if ( get_post( $page_compare ) ) {
        $href_link = get_page_link( $page_compare );
    }
    
    // Текст кнопки
    $button_text = $is_added 
        ? ( empty( $text['added_compare'] ) ? __( 'Added', 'products-compare-for-woocommerce' ) : $text['added_compare'] )
        : ( empty( $text['add_compare'] ) ? __( 'Compare Product', 'products-compare-for-woocommerce' ) : $text['add_compare'] );
    
    // Иконка в зависимости от состояния
    $icon = $is_added ? 'compare.svg' : 'compare-gray.svg';
    ?>
    <a href="<?php echo esc_url( $href_link ); ?>" 
       class="<?php echo esc_attr( $button_class ); ?>" 
       data-id="<?php echo esc_attr( $product_id ); ?>"
       aria-label="<?php echo esc_attr( $button_text ); ?>"
       rel="nofollow">
        <?php prom_svg( $icon, [ 'aria-hidden' => 'true' ] ); ?>
        <span class="br_compare_button_text screen-reader-text" 
              data-added="<?php echo esc_attr( empty( $text['added_compare'] ) ? __( 'Added', 'products-compare-for-woocommerce' ) : $text['added_compare'] ); ?>" 
              data-not_added="<?php echo esc_attr( empty( $text['add_compare'] ) ? __( 'Compare Product', 'products-compare-for-woocommerce' ) : $text['add_compare'] ); ?>">
            <?php echo esc_html( $button_text ); ?>
        </span>
    </a>
    <?php
}

// Удаляем стандартные хуки плагина для кнопки сравнения
add_action( 'init', function() {
    if ( class_exists( 'BeRocket_Compare_Products' ) ) {
        $compare_instance = BeRocket_Compare_Products::getInstance();
        
        // Удаляем все стандартные хуки кнопки сравнения
        remove_action( 'woocommerce_before_shop_loop_item', array( $compare_instance, 'get_compare_button' ), 5 );
        remove_action( 'woocommerce_before_shop_loop_item_title', array( $compare_instance, 'get_compare_button' ), 20 );
        remove_action( 'woocommerce_before_shop_loop_item_title', array( $compare_instance, 'get_compare_button' ), 38 );
        remove_action( 'woocommerce_shop_loop_item_title', array( $compare_instance, 'get_compare_button' ), 38 );
        remove_action( 'woocommerce_after_shop_loop_item_title', array( $compare_instance, 'get_compare_button' ), 38 );
        remove_action( 'woocommerce_after_shop_loop_item', array( $compare_instance, 'get_compare_button' ), 38 );
        remove_action( 'woocommerce_before_single_product_summary', array( $compare_instance, 'get_compare_button' ), 5 );
        remove_action( 'woocommerce_before_single_product_summary', array( $compare_instance, 'get_compare_button' ), 38 );
        remove_action( 'woocommerce_single_product_summary', array( $compare_instance, 'get_compare_button' ), 8 );
        remove_action( 'woocommerce_single_product_summary', array( $compare_instance, 'get_compare_button' ), 15 );
        remove_action( 'woocommerce_single_product_summary', array( $compare_instance, 'get_compare_button' ), 38 );
    }
}, 999 );

// Добавляем кастомную кнопку сравнения только на странице товара
// В каталоге кнопка выводится напрямую в шаблоне content-product.php
add_action( 'woocommerce_single_product_summary', 'prom_compare_button', 35 );
