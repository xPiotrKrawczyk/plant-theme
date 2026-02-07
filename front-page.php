<?php
/**
 * Template Name: Strona Główna (WOW - Expanded)
 */
get_header();
?>

<main class="site-main">

    <section class="home-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content-wrapper container">
            <span class="hero-subtitle">Nature Design Studio</span>
            <h1 class="hero-title">Przenieś naturę<br>do swojego wnętrza.</h1>
            <p class="hero-text">Projektujemy luksusowe akwaria naturalne i terraria, które zmieniają przestrzeń w żywe dzieło sztuki.</p>

            <div class="hero-buttons">
                <a href="<?php echo home_url('/realizacje'); ?>" class="btn-hero-primary">Zobacz Realizacje</a>
                <a href="<?php echo home_url('/kontakt'); ?>" class="btn-hero-secondary">Umów Konsultację</a>
            </div>
        </div>
        <div class="scroll-down"><span></span></div>
    </section>

    <section class="home-intro">
        <div class="container intro-grid">
            <div class="intro-image-wrapper">
                <img src="http://plantscape-home.local/wp-content/uploads/2026/02/closeup-shot-redhump-eartheater-fish-swimming-water-scaled.jpg" alt="Aquascaping Detail" class="intro-img">
                <div class="floating-box">
                    <strong>10 lat</strong>
                    <span>Doświadczenia</span>
                </div>
            </div>
            <div class="intro-text">
                <h2 class="section-title">Twój prywatny<br>wycinek Amazonii.</h2>
                <p>Nie sprzedajemy po prostu "rybek w szkle". Tworzymy kompletne ekosystemy oparte o japońską sztukę Iwagumi i Ryuboku.</p>
                <ul class="feature-list">
                    <li>✅ Automatyczne systemy sterowania</li>
                    <li>✅ Unikalne aranżacje Hardscape</li>
                    <li>✅ Pełny serwis (Ty tylko podziwiasz)</li>
                </ul>
                <a href="<?php echo home_url('/uslugi'); ?>" class="link-arrow">Poznaj nasze usługi &rarr;</a>
            </div>
        </div>
    </section>

    <section class="home-process" style="padding: 100px 20px; background: #f9f9f9; text-align: center;">
        <div class="container">
            <h2 class="section-title" style="margin-bottom: 60px;">Jak powstaje Twoje akwarium?</h2>

            <div class="process-grid">
                <div class="process-step">
                    <div class="step-icon">01</div>
                    <h3>Konsultacja</h3>
                    <p>Rozmawiamy o Twoim wnętrzu, budżecie i marzeniach. Dobieramy styl zbiornika.</p>
                </div>
                <div class="process-step">
                    <div class="step-icon">02</div>
                    <h3>Projekt</h3>
                    <p>Tworzymy wizualizację i dobieramy sprzęt, rośliny oraz życie.</p>
                </div>
                <div class="process-step">
                    <div class="step-icon">03</div>
                    <h3>Realizacja</h3>
                    <p>Przyjeżdżamy, montujemy, sadzimy. W jeden dzień powstaje gotowy ekosystem.</p>
                </div>
                <div class="process-step">
                    <div class="step-icon">04</div>
                    <h3>Opieka</h3>
                    <p>Uczymy Cię dbać o zbiornik lub przejmujemy pełny serwis techniczny.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-parallax" style="background-image: url('http://plantscape-home.local/wp-content/uploads/2026/02/yellow-red-betta-fish-swimming-scaled.jpg');">
        <div class="parallax-overlay">
            <h3>"Akwarium to nie mebel. To kino, w którym film nigdy się nie kończy."</h3>
        </div>
    </section>

    <section class="home-reviews" style="background: #101820; color: #fff; padding: 100px 20px;">
        <div class="container">
            <h2 class="section-title" style="color: #fff; text-align: center; margin-bottom: 60px;">Co mówią nasi klienci?</h2>

            <div class="reviews-grid">
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p>"Niesamowita wiedza i podejście. Moje akwarium w biurze robi większe wrażenie niż recepcja. Polecam Piotrka!"</p>
                    <strong>Marek, Prezes IT</strong>
                </div>
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p>"Bałam się, że nie poradzę sobie z opieką, ale system jest w pełni automatyczny. Rośliny rosną jak szalone."</p>
                    <strong>Karolina, Architekt</strong>
                </div>
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p>"Serwis na najwyższym poziomie. Zawsze na czas, akwarium zawsze czyste. Pełen profesjonalizm."</p>
                    <strong>Restauracja "Pod Wodą"</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="home-blog-preview">
        <div class="container">
            <div class="section-header-center">
                <h2>Baza Wiedzy</h2>
                <p>Zobacz, jak dbamy o podwodny świat.</p>
            </div>

            <div class="blog-preview-grid">
                <?php
                $recent_posts = new WP_Query( array( 'posts_per_page' => 3 ) );
                if ( $recent_posts->have_posts() ) :
                    while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
                        $bg_img = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                        if ( empty($bg_img) ) { $bg_img = 'http://plantscape-home.local/wp-content/uploads/2026/02/sea-fish-blue-light-underwater-harmony-scaled.jpg'; }
                ?>
                    <a href="<?php the_permalink(); ?>" class="preview-card">
                        <div class="card-img" style="background-image: url('<?php echo $bg_img; ?>');"></div>
                        <div class="card-content">
                            <span class="date"><?php echo get_the_date(); ?></span>
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </section>

    <section class="home-cta" style="background: var(--brand-blue); padding: 80px 20px; text-align: center; color: #fff;">
        <div class="container">
            <h2 style="color: #fff; font-size: 2.5rem; margin-bottom: 20px;">Gotowy na zmianę swojego wnętrza?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 40px; opacity: 0.9;">Umów się na darmową wycenę i projekt wstępny.</p>
            <a href="<?php echo home_url('/kontakt'); ?>" class="btn-hero-secondary" style="border-color: #fff; background: #fff; color: var(--brand-blue);">Skontaktuj się z nami</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
