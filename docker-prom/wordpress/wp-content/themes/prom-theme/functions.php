<?php

/**
 * Prom Theme functions
 */

// Увеличиваем лимиты загрузки файлов
@ini_set('upload_max_filesize', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');
@ini_set('max_input_time', '300');
@ini_set('memory_limit', '256M');

// Фильтр для увеличения лимита размера загружаемых файлов в WordPress
add_filter('upload_size_limit', function ($size) {
    return 64 * 1024 * 1024; // 64MB в байтах
});

// Увеличиваем максимальный размер файла для загрузки через админку
add_filter('admin_init', function () {
    @ini_set('upload_max_filesize', '64M');
    @ini_set('post_max_size', '64M');
});

// Подключаем стили и скрипты темы
add_action('wp_enqueue_scripts', function () {
    $theme_uri = get_template_directory_uri();
    $version = '1.0.0';

    // Основной CSS
    wp_enqueue_style('prom-theme-main', $theme_uri . '/assets/css/main.css', [], $version);


    wp_enqueue_style('prom-theme-custom', $theme_uri . '/assets/css/custom.css', [], $version);

    // Основной JS
    wp_enqueue_script('prom-theme-main', $theme_uri . '/assets/js/main.js', [], $version, true);

    // Swiper JS (если используется)
    if (file_exists(get_template_directory() . '/assets/js/swiper.js')) {
        wp_enqueue_script('prom-theme-swiper', $theme_uri . '/assets/js/swiper.js', ['prom-theme-main'], $version, true);
    }
});

// Включаем поддержку <title> из WordPress
add_theme_support('title-tag');

// Включаем поддержку миниатюр записей
add_theme_support('post-thumbnails');

// Регистрируем меню
register_nav_menus([
    'primary' => __('Главное меню', 'prom-theme'),
]);

// Поддержка WooCommerce
add_action('after_setup_theme', function () {
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
});

// Отключаем стандартные стили WooCommerce (если используем свои)
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Изменяем количество товаров на странице
add_filter('loop_shop_per_page', function ($cols) {
    return 12; // Количество товаров на странице
}, 20);

// Изменяем количество колонок в сетке товаров
add_filter('loop_shop_columns', function () {
    return 4; // Количество колонок
}, 999);

// Убираем обёртку WooCommerce
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Отключаем breadcrumb в каталоге
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

// Отключаем result-count и ordering в каталоге
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

// Отключаем вкладки (tabs) на странице товара
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

/**
 * Функция для вставки SVG файлов
 * 
 * @param string $filename Имя файла SVG (например, 'logo.svg')
 * @param array $args Дополнительные аргументы (class, id, aria-label и т.д.)
 * @return string SVG код или пустая строка, если файл не найден
 */
function prom_get_svg($filename, $args = [])
{
    $defaults = [
        'class' => '',
        'id' => '',
        'aria-label' => '',
        'aria-hidden' => 'true',
    ];

    $args = wp_parse_args($args, $defaults);

    $file_path = get_template_directory() . '/assets/icons/' . $filename;

    if (! file_exists($file_path)) {
        return '';
    }

    $svg_content = file_get_contents($file_path);

    if (! $svg_content) {
        return '';
    }

    // Удаляем XML декларацию, если есть
    $svg_content = preg_replace('/<\?xml[^>]*\?>/i', '', $svg_content);

    // Добавляем атрибуты к SVG тегу
    $attributes = [];

    if (! empty($args['class'])) {
        $attributes[] = 'class="' . esc_attr($args['class']) . '"';
    }

    if (! empty($args['id'])) {
        $attributes[] = 'id="' . esc_attr($args['id']) . '"';
    }

    if (! empty($args['aria-label'])) {
        $attributes[] = 'aria-label="' . esc_attr($args['aria-label']) . '"';
        // Удаляем aria-hidden, если есть aria-label
        $svg_content = preg_replace('/aria-hidden="[^"]*"/i', '', $svg_content);
    } else {
        $attributes[] = 'aria-hidden="' . esc_attr($args['aria-hidden']) . '"';
    }

    // Вставляем атрибуты в открывающий тег <svg>
    if (! empty($attributes)) {
        $attributes_string = ' ' . implode(' ', $attributes);
        $svg_content = preg_replace('/<svg\s+/i', '<svg' . $attributes_string . ' ', $svg_content, 1);
    }

    return $svg_content;
}

/**
 * Функция для вывода SVG (echo версия)
 */
function prom_svg($filename, $args = [])
{
    echo prom_get_svg($filename, $args);
}



require_once get_template_directory() . '/inc/product-compare-for-woocommerce.php';