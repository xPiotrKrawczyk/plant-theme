<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="site-preloader" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: #fff; z-index: 99999; display: flex; align-items: center; justify-content: center; transition: opacity 0.5s ease;">
    <h2 style="color: var(--brand-blue);">Ładowanie...</h2>
</div>

<script>
window.addEventListener('load', function() {
    const preloader = document.getElementById('site-preloader');
    preloader.style.opacity = '0';
    setTimeout(() => { preloader.style.display = 'none'; }, 500);
});
</script>
    <div id="site-preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <header class="site-header">
        <div class="header-flex-container">

            <div class="header-left">
                <a href="<?php echo home_url(); ?>" class="brand-logo-img">
                    <img src="http://plantscape-home.local/wp-content/uploads/2026/02/Logo.png" alt="Plant&Scape Logo" class="custom-logo">
                </a>
            </div>

            <div class="header-center">
                <nav class="main-nav">
                    <a href="<?php echo home_url(); ?>">Start</a>
                    <a href="<?php echo home_url('/o-nas'); ?>">O Nas</a>
                    <a href="<?php echo home_url('/uslugi'); ?>">Usługi</a>
                    <a href="<?php echo home_url('/realizacje'); ?>">Realizacje</a>
                    <a href="<?php echo home_url('/kontakt'); ?>">Kontakt</a>
                </nav>
            </div>

            <div class="header-right">

                <?php
                $blog_id = get_option( 'page_for_posts' );
                $blog_link = $blog_id ? get_permalink( $blog_id ) : home_url('/blog');
                ?>
                <a href="<?php echo $blog_link; ?>" class="nav-link-blog">Blog</a>

                <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                    <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="btn-shop-nav">
                        Sklep
                    </a>
                <?php endif; ?>

                <div class="icons-wrapper">

                    <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                        <?php $cart_count = WC()->cart->get_cart_contents_count(); ?>
                        <a href="<?php echo wc_get_cart_url(); ?>" class="icon-btn cart-btn-wrapper" title="Twój Koszyk">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            <span class="cart-count-badge"><?php echo $cart_count; ?></span>
                        </a>
                    <?php endif; ?>

                    <?php
                    if ( class_exists( 'WooCommerce' ) ) {
                        $my_account = get_permalink( get_option('woocommerce_myaccount_page_id') );
                        echo '<a href="' . esc_url($my_account) . '" class="icon-btn" title="Moje Konto">';
                        echo '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>';
                        echo '</a>';
                    }
                    ?>
                </div>

            </div>
        </div>
    </header>

    <?php if ( current_user_can( 'edit_posts' ) && ( is_home() || is_singular( 'post' ) ) ) : ?>
        <div style="background: #fff; border-bottom: 1px solid #ddd; padding: 10px; text-align: center; font-size: 13px;">
            <span style="margin-right: 15px; font-weight: 600;">Panel Redaktora:</span>
            <a href="<?php echo admin_url( 'post-new.php' ); ?>" style="background: var(--brand-blue); color: #fff; padding: 4px 12px; border-radius: 4px; text-decoration: none;">+ Dodaj Artykuł</a>
            <?php if ( is_singular( 'post' ) ) : ?>
                <a href="<?php echo get_edit_post_link(); ?>" style="color: var(--brand-blue); border: 1px solid var(--brand-blue); padding: 4px 12px; border-radius: 4px; text-decoration: none; margin-left: 10px;">Edytuj</a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
