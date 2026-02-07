<?php get_header(); ?>

<main class="site-main blog-dark-mode">

    <section class="blog-hero" style="background: #101820; padding: 60px 20px; text-align: center; color: #fff; border-bottom: 1px solid #333;">
        <div class="container">
            <span style="color: var(--brand-blue); letter-spacing: 2px; font-weight: 700;">BAZA WIEDZY</span>
            <h1 style="font-size: 3rem; margin: 10px 0; color: #fff;">Journal Akwarystyczny</h1>
        </div>
    </section>

    <section class="blog-dark-section">
        <div class="container">

            <div class="blog-filter">
                <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="filter-tag <?php if(!is_category()) echo 'active'; ?>">
                    Wszystkie
                </a>

                <?php
                // Pobieramy wszystkie kategorie, które mają jakieś wpisy
                $categories = get_categories( array(
                    'orderby' => 'name',
                    'order'   => 'ASC'
                ) );

                foreach( $categories as $category ) {
                    // Sprawdzamy czy ta kategoria jest aktualnie kliknięta (żeby dać klasę active)
                    $active_class = ( is_category( $category->term_id ) ) ? 'active' : '';

                    echo '<a href="' . get_category_link( $category->term_id ) . '" class="filter-tag ' . $active_class . '">' . $category->name . '</a>';
                }
                ?>
            </div>

            <div class="blog-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px;">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                    // 1. ZDJĘCIE
                    $thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                    if(!$thumb) $thumb = 'https://images.unsplash.com/photo-1520412092553-157725e22137?auto=format&fit=crop&w=800&q=80';

                    // 2. AUTOR (LOGIKA: RĘCZNY CZY SYSTEMOWY?)
                    $custom_author = get_post_meta( get_the_ID(), '_custom_author_name', true );
                    $display_author = $custom_author ? $custom_author : get_the_author();
                ?>

                    <article class="post-card-dark">


                        <a href="<?php the_permalink(); ?>" class="post-card-img" style="height: 220px; background: url('<?php echo $thumb; ?>') center/cover; display: block;"></a>

                        <div class="post-card-content">
                            <div style="font-size: 0.8rem; color: #666; margin-bottom: 10px; display: flex; justify-content: space-between;">
                                <span style="color: var(--brand-blue); font-weight: 700; text-transform: uppercase;">
                                    <?php
                                    $cats = get_the_category();
                                    if($cats) echo $cats[0]->name;
                                    ?>
                                </span>
                                <span><?php echo get_the_date('d.m.Y'); ?></span>
                            </div>

                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                            <div style="font-size: 0.85rem; color: #888; margin-bottom: 15px; font-style: italic;">
                                ✍️ <?php echo esc_html($display_author); ?>
                            </div>

                            <p class="post-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" style="color: var(--brand-blue); font-weight: 700;">CZYTAJ DALEJ →</a>
                        </div>
                    </article>

                <?php endwhile; else: ?>
                    <p style="color:#fff; text-align:center; grid-column: 1/-1;">Brak wpisów w tej kategorii.</p>
                <?php endif; ?>
            </div>

            <div class="pagination pagination-dark" style="text-align: center; margin-top: 60px;">
                <?php the_posts_pagination( array('mid_size' => 2, 'prev_text' => '←', 'next_text' => '→') ); ?>
            </div>

        </div>
    </section>

    <?php if ( current_user_can( 'edit_posts' ) ) : ?>
        <a href="<?php echo admin_url( 'post-new.php' ); ?>" class="admin-fab-btn" title="Dodaj wpis"><span>+</span></a>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
