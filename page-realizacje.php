<?php
/**
 * Template Name: Strona Realizacje (Premium Fix)
 */
get_header();
?>

<main class="site-main">

    <section class="page-header" style="background: url('http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_3.jpg') center/cover; height: 350px; display: flex; align-items: center; justify-content: center; position: relative;">
        <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5);"></div>
        <div class="container" style="position: relative; z-index: 2; text-align: center; color: #fff;">
            <h1 style="font-size: 3rem; margin: 0; color: #fff;">Portfolio</h1>
            <p style="opacity: 0.9; margin-top: 10px;">Wybrane projekty z ostatnich 10 lat.</p>
        </div>
    </section>

    <div class="container">

        <div class="featured-project-section">
            <div class="featured-img-col" style="background-image: url('http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_7.jpg');">
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
            <div class="gallery-item" style="height: 250px; background: url('http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_3.jpg') center/cover; border-radius: 8px;"></div>
            <div class="gallery-item" style="height: 250px; background: url('http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_5.jpg') center/cover; border-radius: 8px;"></div>
            <div class="gallery-item" style="height: 250px; background: url('http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_8.jpg') center/cover; border-radius: 8px;"></div>
            <div class="gallery-item" style="height: 250px; background: url('http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_1.jpg') center/cover; border-radius: 8px;"></div>
            <div class="gallery-item" style="height: 250px; background: url('http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_6.jpg') center/cover; border-radius: 8px;"></div>
            <div class="gallery-item" style="height: 250px; background: url('http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_2.jpg') center/cover; border-radius: 8px;"></div>
        </div>

    </div>

</main>

<?php get_footer(); ?>
