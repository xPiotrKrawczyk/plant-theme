<?php
/**
 * Template Name: Strona Realizacje (WOW)
 */
get_header();
?>

<main class="site-main">

    <section class="portfolio-hero" style="background: linear-gradient(rgba(16, 24, 32, 0.8), rgba(16, 24, 32, 0.7)), url('http://plantscape-home.local/wp-content/uploads/2026/02/360_1_small_800px_400px.jpg'); background-size: cover; background-position: center; padding: 120px 20px; text-align: center; color: #fff; background-attachment: fixed;">
        <div class="container">
            <span style="color: var(--brand-blue); text-transform: uppercase; letter-spacing: 2px; font-weight: bold;">Portfolio Plant&Scape</span>
            <h1 style="font-size: 3.5rem; margin: 15px 0 20px; color: #fff; text-shadow: 0 4px 15px rgba(0,0,0,0.6);">Nasze Dzieła.<br>Twoja Inspiracja.</h1>
        </div>
    </section>

    <section class="case-study" style="background: #fff; padding: 100px 20px;">
        <div class="container">
            <div class="section-header-center">
                <span style="color: var(--brand-blue); font-weight: 700; text-transform: uppercase;">Wyróżniona Realizacja</span>
                <h2 style="font-size: 2.5rem; margin-top: 10px;">Projekt: "Misty Mountain"</h2>
            </div>

            <div class="case-study-grid">
                <div class="case-img">
                    <img src="http://plantscape-home.local/wp-content/uploads/2026/02/akwarium-nowoczesne-nemo-1-scaled-1.jpg" alt="Featured Aquarium">
                </div>

                <div class="case-info">
                    <h3>Dane Techniczne</h3>
                    <p style="color: #666; margin-bottom: 30px;">Zbiornik założony w prywatnej rezydencji we Wrocławiu. Celem było stworzenie minimalistycznego krajobrazu górskiego (Iwagumi) wymagającego minimalnej obsługi.</p>

                    <ul class="specs-list">
                        <li><strong>Akwarium:</strong> OptiWhite 120x50x50cm (300L)</li>
                        <li><strong>Styl:</strong> Iwagumi (Skały Seiryu Stone)</li>
                        <li><strong>Oświetlenie:</strong> 2x LED RGB 90W</li>
                        <li><strong>Filtracja:</strong> Oase BioMaster Thermo 600</li>
                        <li><strong>Rośliny:</strong> Micranthemum Monte Carlo, Eleocharis</li>
                        <li><strong>Czas realizacji:</strong> 8 godzin</li>
                    </ul>

                    <a href="<?php echo home_url('/kontakt'); ?>" class="btn-primary" style="margin-top: 20px;">Chcę taki zbiornik</a>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-gallery" style="background: #f4f7f6; padding: 100px 20px;">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px;">Pozostałe Realizacje</h2>

            <div class="gallery-grid">

                <div class="gallery-item">
                    <div class="gallery-img" style="background-image: url('http://plantscape-home.local/wp-content/uploads/2026/02/arar5.jpg');"></div>
                    <div class="gallery-overlay">
                        <h3>Biuro IT Wrocław</h3>
                        <span>Styl: Ryuboku (Korzenie)</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-img" style="background-image: url('http://plantscape-home.local/wp-content/uploads/2026/02/arar4.jpg');"></div>
                    <div class="gallery-overlay">
                        <h3>Apartament SkyTower</h3>
                        <span>Styl: Nature Aquarium</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-img" style="background-image: url('http://plantscape-home.local/wp-content/uploads/2026/02/image_6487327-1-scaled-1.jpg');"></div>
                    <div class="gallery-overlay">
                        <h3>Gabinet Stomatologiczny</h3>
                        <span>Styl: Dutch (Holenderski)</span>
                    </div>
                </div>

                <div class="gallery-item">
                    <div class="gallery-img" style="background-image: url('http://plantscape-home.local/wp-content/uploads/2026/02/IwagumiZ.jpg');"></div>
                    <div class="gallery-overlay">
                        <h3>Hol Hotelowy</h3>
                        <span>Styl: Hardscape Only</span>
                    </div>
                </div>

                 <div class="gallery-item">
                    <div class="gallery-img" style="background-image: url('http://plantscape-home.local/wp-content/uploads/2026/02/goldfish-swimming-glass-fishbowl-underwater-generative-ai-scaled.jpg');"></div>
                    <div class="gallery-overlay">
                        <h3>Salon SPA</h3>
                        <span>Styl: Wabi-Kusa</span>
                    </div>
                </div>

                 <div class="gallery-item">
                    <div class="gallery-img" style="background-image: url('http://plantscape-home.local/wp-content/uploads/2026/02/Ryuboku3-1.jpg');"></div>
                    <div class="gallery-overlay">
                        <h3>Dom Jednorodzinny</h3>
                        <span>Styl: Iwagumi</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="portfolio-cta" style="background: #101820; color: #fff; padding: 80px 20px; text-align: center;">
        <div class="container">
            <h2 style="color: #fff; margin-bottom: 20px;">Podoba Ci się ten styl?</h2>
            <p style="opacity: 0.8; margin-bottom: 40px;">Umów się na niezobowiązującą rozmowę. Stworzymy coś podobnego u Ciebie.</p>
            <a href="<?php echo home_url('/kontakt'); ?>" class="btn-primary">Zapytaj o wycenę</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
