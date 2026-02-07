<?php
/**
 * Template Name: Strona Realizacje (Premium Fix)
 */
get_header();
?>

<main class="site-main">

    <section class="page-header" style="background: url('https://images.unsplash.com/photo-1544943910-4c1dc3fe949b?auto=format&fit=crop&w=1600&q=80') center/cover; height: 350px; display: flex; align-items: center; justify-content: center; position: relative;">
        <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5);"></div>
        <div class="container" style="position: relative; z-index: 2; text-align: center; color: #fff;">
            <h1 style="font-size: 3rem; margin: 0; color: #fff;">Portfolio</h1>
            <p style="opacity: 0.9; margin-top: 10px;">Wybrane projekty z ostatnich 10 lat.</p>
        </div>
    </section>

    <div class="container">

        <div class="featured-project-section">
            <div class="featured-img-col" style="background-image: url('https://images.unsplash.com/photo-1522069169874-c58ec4b76be5?auto=format&fit=crop&w=1200&q=80');">
                <div class="project-badge">⭐ Projekt Miesiąca</div>
            </div>

            <div class="featured-txt-col">
                <span style="color: var(--brand-blue); text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin-bottom: 10px; display: block;">Case Study</span>
                <h2>Misty Mountain<br>Aquascape</h2>
                <p>Aranżacja w stylu Iwagumi stworzona dla wrocławskiego biura architektonicznego. Głównym założeniem był minimalizm i uspokajający wpływ natury.</p>

                <div class="tech-specs">
                    <div class="spec-item"><span>Litraż</span><strong>350L OptiWhite</strong></div>
                    <div class="spec-item"><span>Styl</span><strong>Iwagumi</strong></div>
                    <div class="spec-item"><span>Hardscape</span><strong>Seiryu Stone</strong></div>
                    <div class="spec-item"><span>Czas</span><strong>14 Dni</strong></div>
                </div>
            </div>
        </div>

        <h3 style="margin-bottom: 30px;">Pozostałe Realizacje</h3>
        <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 80px;">
            <div class="gallery-item" style="height: 250px; background: url('https://images.unsplash.com/photo-1520412092553-157725e22137?auto=format&fit=crop&w=800&q=80') center/cover; border-radius: 8px;"></div>
            <div class="gallery-item" style="height: 250px; background: url('https://images.unsplash.com/photo-1550989460-0adf9ea622e2?auto=format&fit=crop&w=800&q=80') center/cover; border-radius: 8px;"></div>
            <div class="gallery-item" style="height: 250px; background: url('https://images.unsplash.com/photo-1518349619113-03114f06ac3a?auto=format&fit=crop&w=800&q=80') center/cover; border-radius: 8px;"></div>
            <div class="gallery-item" style="height: 250px; background: url('https://images.unsplash.com/photo-1535591273668-578e31182c4f?auto=format&fit=crop&w=800&q=80') center/cover; border-radius: 8px;"></div>
            <div class="gallery-item" style="height: 250px; background: url('https://images.unsplash.com/photo-1544943910-4c1dc3fe949b?auto=format&fit=crop&w=800&q=80') center/cover; border-radius: 8px;"></div>
            <div class="gallery-item" style="height: 250px; background: url('https://images.unsplash.com/photo-1522069169874-c58ec4b76be5?auto=format&fit=crop&w=800&q=80') center/cover; border-radius: 8px;"></div>
        </div>

    </div>

</main>

<?php get_footer(); ?>
