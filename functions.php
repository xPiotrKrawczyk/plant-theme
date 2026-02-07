<?php
/**
 * Plik functions.php
 */

// 1. Ładowanie stylów (To sprawia, że style.css działa)
function plantscape_load_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '2.0' );
}
add_action( 'wp_enqueue_scripts', 'plantscape_load_scripts' );

// 2. Włączamy obsługę WooCommerce i Obrazków Wyróżniających
function moj_sklep_setup() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'moj_sklep_setup' );

// 3. Tryb Katalogu (Ukrywanie przycisku "Dodaj do koszyka")
if ( function_exists( 'is_woocommerce' ) ) {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
}
