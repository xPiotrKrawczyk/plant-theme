<?php get_header(); ?>

<section class="shop-hero" style="background: #101820; padding: 40px 0; text-align: center; color: #fff; margin-bottom: 50px;">
    <div class="container">
        <h1 style="font-size: 2.5rem; margin: 0; color: #fff; text-transform: uppercase; letter-spacing: 2px;">
            Sklep <span style="color: #298fe2;">Plant&Scape</span>
        </h1>
    </div>
</section>

<main class="site-main" style="padding-bottom: 80px;">
    <div class="container" style="max-width: 1300px; margin: 0 auto;">

        <div class="shop-layout">

            <aside class="shop-sidebar">

                <div class="sidebar-widget search-widget">
                    <h3>Szukaj</h3>
                    <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Szukaj produktów..." value="<?php echo get_search_query(); ?>" name="s" />
                        <button type="submit" value="Szukaj">🔍</button>
                        <input type="hidden" name="post_type" value="product" />
                    </form>
                </div>

                <div class="sidebar-widget categories-widget">
                    <h3>Kategorie</h3>
                    <ul class="product-categories">
                        <li class="<?php echo is_shop() && !is_product_category() ? 'current-cat' : ''; ?>">
                            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">Wszystkie produkty</a>
                        </li>

                        <?php
                        // Pobieramy kategorie
                        $categories = get_terms( ['taxonomy' => 'product_cat', 'hide_empty' => true] );
                        $current_cat_id = get_queried_object_id();

                        foreach ( $categories as $cat ) {
                            $is_active = ($current_cat_id == $cat->term_id) ? 'current-cat' : '';
                            echo '<li class="' . $is_active . '">';
                            echo '<a href="' . get_term_link( $cat ) . '">' . $cat->name . ' <span class="count">(' . $cat->count . ')</span></a>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>

            </aside>

            <div class="shop-main-content">

                <div class="shop-toolbar-top">
                    <p class="results-count">
                        <?php woocommerce_result_count(); ?>
                    </p>
                    <div class="sorting-box">
                        <?php woocommerce_catalog_ordering(); ?>
                    </div>
                </div>

                <?php if ( have_posts() ) : ?>

                    <div class="plant-grid">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="plant-card">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="plant-img-wrapper">
                                        <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'woocommerce_thumbnail' );
                                        } else {
                                            echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder">';
                                        }
                                        ?>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <span class="price"><?php woocommerce_template_loop_price(); ?></span>
                                </a>
                                <div class="plant-btn-wrapper">
                                    <?php woocommerce_template_loop_add_to_cart(); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="pagination">
                        <?php woocommerce_pagination(); ?>
                    </div>

                <?php else : ?>
                    <p class="no-products">Nie znaleziono produktów spełniających kryteria.</p>
                <?php endif; ?>

            </div> </div> </div>
</main>

<?php get_footer(); ?>
