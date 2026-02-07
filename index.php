<?php get_header(); ?>

<main class="site-main blog-dark-mode">

    <section class="blog-hero" style="text-align: center; padding: 60px 20px; border-bottom: 1px solid rgba(255,255,255,0.1);">
        <div class="container">
            <span style="color: var(--brand-blue); font-weight: 700; letter-spacing: 2px;">BAZA WIEDZY</span>
            <h1 style="font-size: 3rem; margin: 10px 0 20px; color: #fff;">Journal Akwarystyczny</h1>
        </div>
    </section>

    <div class="container" style="margin-top: 40px;">
        <div class="blog-filter-bar">
            <a href="#" class="filter-btn active">Wszystkie</a>
            <a href="#" class="filter-btn">Porady</a>
            <a href="#" class="filter-btn">Aranżacje</a>
            <a href="#" class="filter-btn">Sprzęt</a>
            <a href="#" class="filter-btn">Ryby i Rośliny</a>
        </div>
    </div>

    <div class="container">
        <div class="blog-grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post();
                    $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                    if ( empty($thumb_url) ) { $thumb_url = 'https://images.unsplash.com/photo-1520412092553-157725e22137?auto=format&fit=crop&w=800&q=80'; }
                ?>

                    <article class="post-card-dark">
                        <?php if ( current_user_can( 'edit_posts' ) ) : ?>
                            <div class="admin-card-actions">
                                <a href="<?php echo get_edit_post_link(); ?>" class="action-icon edit">✎</a>
                                <a href="<?php echo get_delete_post_link(); ?>" class="action-icon delete" onclick="return confirm('Usunąć?');">✕</a>
                            </div>
                        <?php endif; ?>

                        <a href="<?php the_permalink(); ?>" class="post-card-img" style="background-image: url('<?php echo $thumb_url; ?>');">
                            <span class="post-date"><?php echo get_the_date('d M'); ?></span>
                        </a>
                        <div class="post-card-content">
                            <div class="post-cats">
                                <?php
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) { echo esc_html( $categories[0]->name ); }
                                ?>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="post-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more-link">Czytaj dalej &rarr;</a>
                        </div>
                    </article>

                <?php endwhile; ?>
            <?php else : ?>
                <p style="color: #fff;">Brak wpisów.</p>
            <?php endif; ?>
        </div>

        <div class="pagination pagination-dark" style="text-align: center; margin-top: 60px;">
            <?php the_posts_pagination( array('mid_size' => 2, 'prev_text' => '&larr;', 'next_text' => '&rarr;') ); ?>
        </div>
    </div>

    <?php if ( current_user_can( 'edit_posts' ) ) : ?>
        <a href="<?php echo admin_url( 'post-new.php' ); ?>" class="admin-fab-btn" title="Dodaj wpis">
            <span>+</span>
        </a>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
