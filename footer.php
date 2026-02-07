<footer class="site-footer">
        <div id="kontakt" class="container">
            <h4>Plant&Scape</h4>
            <p>Tworzymy podwodny świat we Wrocławiu.</p>
            <p>&copy; <?php echo date('Y'); ?> Plant&Scape. Wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
    <div id="cookie-banner" class="cookie-banner">
        <div class="cookie-content container">
            <div class="cookie-text">
                <strong>Lubisz ciasteczka? 🍪</strong>
                <p>Używamy plików cookies, aby Twoje rybki pływały w cyfrowym komforcie. Korzystając ze strony, zgadzasz się na naszą <a href="<?php echo home_url('/polityka-prywatnosci'); ?>">Politykę Prywatności</a>.</p>
            </div>
            <div class="cookie-buttons">
                <button id="accept-cookies" class="btn-primary btn-cookie">Akceptuję</button>
            </div>
        </div>
    </div>
    <button id="back-to-top" title="Wróć na górę">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 15l-6-6-6 6"/></svg>
    </button>

    <script>
    // Skrypt obsługi przycisku Back To Top
    document.addEventListener("DOMContentLoaded", function() {
        const backToTopBtn = document.getElementById('back-to-top');

        window.addEventListener('scroll', function() {
            // Jak zjedziesz niżej niż 300px, przycisk się pojawia
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        backToTopBtn.addEventListener('click', function() {
            // Płynne przewijanie na samą górę
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const cookieBanner = document.getElementById('cookie-banner');
        const acceptBtn = document.getElementById('accept-cookies');

        // 1. Sprawdzamy, czy użytkownik już zaakceptował (w pamięci przeglądarki)
        if (!localStorage.getItem('plant_cookie_consent')) {
            // Jeśli NIE ma wpisu, pokazujemy banner po 1 sekundzie (żeby był efekt wjazdu)
            setTimeout(() => {
                cookieBanner.classList.add('show');
            }, 1000);
        }

        // 2. Obsługa kliknięcia "Akceptuję"
        acceptBtn.addEventListener('click', function() {
            // Zapisujemy zgodę w pamięci przeglądarki
            localStorage.setItem('plant_cookie_consent', 'true');

            // Chowamy banner
            cookieBanner.classList.remove('show');
        });
    });
    </script>

    <?php wp_footer(); ?>
    <script>
    // PRELOADER SCRIPT
    window.addEventListener('load', function() {
        // Jak strona załaduje wszystkie obrazki, dodajemy klasę .loaded do body
        document.body.classList.add('loaded');
    });
    </script>
</body>
</html>
</body>
</html>
