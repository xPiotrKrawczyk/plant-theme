<?php get_header(); ?>

<main class="site-main">

    <section class="blog-hero" style="background: #101820; padding: 60px 20px; text-align: center; color: #fff; border-bottom: 1px solid #333;">
        <div class="container">
            <span style="color: var(--brand-blue); letter-spacing: 2px; font-weight: 700;">BAZA WIEDZY</span>
            <h1 style="font-size: 3rem; margin: 10px 0; color: #fff;">Journal Akwarystyczny</h1>
        </div>
    </section>

    <section class="blog-dark-section">
        <div class="container">

            <div class="blog-filter">
                <a href="#" class="filter-tag active">Wszystkie</a>
                <a href="#" class="filter-tag">Porady</a>
                <a href="#" class="filter-tag">Aranżacje</a>
                <a href="#" class="filter-tag">Sprzęt</a>
            </div>

            <div class="blog-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px;">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    $thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                    if(!$thumb) $thumb = 'https://images.unsplash.com/photo-1520412092553-157725e22137?auto=format&fit=crop&w=800&q=80';
                ?>
                    <article class="post-card">
                        <a href="<?php the_permalink(); ?>" class="post-card-img" style="height: 220px; background: url('<?php echo $thumb; ?>') center/cover; display: block;"></a>
                        <div class="post-card-content" style="padding: 25px;">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="post-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?></p>
                            <a href="<?php the_permalink(); ?>" style="color: var(--brand-blue); font-weight: 700;">CZYTAJ DALEJ →</a>
                        </div>
                    </article>
                <?php endwhile; endif; ?>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
