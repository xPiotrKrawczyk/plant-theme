<?php
/**
 * Template Name: Strona Usługi (WOW)
 */
get_header();
?>

<main class="site-main">

    <section class="services-hero" style="background: linear-gradient(rgba(16, 24, 32, 0.8), rgba(16, 24, 32, 0.7)), url('http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_8.jpg'); background-size: cover; background-position: center; padding: 120px 20px; text-align: center; color: #fff; background-attachment: fixed;">
        <div class="container">
            <span style="color: var(--brand-blue); text-transform: uppercase; letter-spacing: 2px; font-weight: bold;">Oferta Plant&Scape</span>
            <h1 style="font-size: 3.5rem; margin: 15px 0 20px;">Tworzymy podwodne światy.<br>Ty tylko je podziwiasz.</h1>
        </div>
    </section>

    <section class="services-details" style="padding: 100px 20px; background: #fff;">
        <div class="container">

            <div class="service-row">
                <div class="service-img">
                    <img src="http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_4.jpg" alt="Zakładanie Akwarium">
                </div>
                <div class="service-txt">
                    <span class="service-number">01</span>
                    <h2>Kompleksowe Zakładanie</h2>
                    <p>Od pustego szkła do gotowego ekosystemu w jeden dzień. Projektujemy aranżację (Hardscape), dobieramy podłoże, sadzimy rośliny i zalewamy zbiornik.</p>
                    <ul class="check-list">
                        <li>Indywidualny projekt aranżacji</li>
                        <li>Dobór sprzętu (filtracja, oświetlenie CO2)</li>
                        <li>Selekcja roślin z najlepszych hodowli</li>
                        <li>Start biologiczny zbiornika</li>
                    </ul>
                </div>
            </div>

            <div class="service-row reverse">
                <div class="service-txt">
                    <span class="service-number">02</span>
                    <h2>Serwis i Opieka</h2>
                    <p>Akwarium to żywy organizm, który wymaga wiedzy. Nie masz czasu na przycinki i podmiany wody? Zrobimy to za Ciebie. Oferujemy wizyty cykliczne.</p>
                    <ul class="check-list">
                        <li>Regularne podmiany wody i czyszczenie szyb</li>
                        <li>Przycinanie i formowanie roślin</li>
                        <li>Nawożenie i kontrola parametrów wody</li>
                        <li>Czyszczenie filtrów i rurek</li>
                    </ul>
                </div>
                <div class="service-img">
                    <img src="http://plantscape-home.local/wp-content/uploads/2026/02/background_7jpeg.jpeg" alt="Serwis Akwarium">
                </div>
            </div>

            <div class="service-row">
                <div class="service-img">
                    <img src="http://plantscape-home.local/wp-content/uploads/2026/02/realziacja_3.jpg" alt="Konsultacje">
                </div>
                <div class="service-txt">
                    <span class="service-number">03</span>
                    <h2>Restart i Metamorfoza</h2>
                    <p>Twoje akwarium zarosło glonami? A może aranżacja już Ci się znudziła? Przeprowadzimy generalny remont Twojego zbiornika.</p>
                    <ul class="check-list">
                        <li>Walka z plagami glonów</li>
                        <li>Zmiana aranżacji bez wymiany sprzętu</li>
                        <li>Leczenie ryb i kwarantanna</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="pricing-section" style="background: #f4f7f6; padding: 100px 20px;">
        <div class="container text-center">
            <h2 style="text-align: center; margin-bottom: 60px; font-size: 2.5rem;">Przykładowe Pakiety</h2>

            <div class="pricing-grid">

                <div class="pricing-card">
                    <h3>Konsultacja</h3>
                    <div class="price">200 zł<span>/wizyta</span></div>
                    <p class="desc">Dla tych, którzy potrzebują porady eksperta.</p>
                    <ul class="features">
                        <li>Dojazd do klienta (Wrocław)</li>
                        <li>Badanie parametrów wody</li>
                        <li>Diagnoza problemów</li>
                        <li>Plan nawożenia</li>
                    </ul>
                    <a href="<?php echo home_url('/kontakt'); ?>" class="btn-secondary">Zamów</a>
                </div>

                <div class="pricing-card popular">
                    <div class="badge">Najczęściej Wybierany</div>
                    <h3>Serwis Standard</h3>
                    <div class="price">450 zł<span>/mies.</span></div>
                    <p class="desc">Pełna opieka nad zbiornikiem do 200L.</p>
                    <ul class="features">
                        <li>2 wizyty w miesiącu</li>
                        <li>Podmiana wody i odmulanie</li>
                        <li>Przycinanie roślin</li>
                        <li>Nawozy w cenie</li>
                    </ul>
                    <a href="<?php echo home_url('/kontakt'); ?>" class="btn-primary">Wybierz</a>
                </div>

                <div class="pricing-card">
                    <h3>Akwarium "Pod Klucz"</h3>
                    <div class="price">Wycena</div>
                    <p class="desc">Kompleksowe założenie akwarium od zera.</p>
                    <ul class="features">
                        <li>Projekt aranżacji 3D</li>
                        <li>Zakup i montaż sprzętu</li>
                        <li>Aranżacja wnętrza (Hardscape)</li>
                        <li>Gwarancja na rośliny</li>
                    </ul>
                    <a href="<?php echo home_url('/kontakt'); ?>" class="btn-secondary">Zapytaj</a>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
