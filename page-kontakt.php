<?php
/**
 * Template Name: Strona Kontakt (Premium Socials)
 */
get_header();
?>

<main class="site-main">

    <section class="contact-hero-modern" style="background: url('http://plantscape-home.local/wp-content/uploads/2026/02/background_2-scaled.jpg') center/cover; padding: 100px 20px; text-align: center; color: #fff; position: relative;">
        <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.6);"></div>
        <div class="container" style="position: relative; z-index: 2;">
            <h1 style="font-size: 3rem; margin: 0; color: #fff;">Kontakt</h1>
            <p>Jesteśmy do Twojej dyspozycji.</p>
        </div>
    </section>

    <div class="container contact-split-grid" style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 60px; margin: 80px auto;">

        <div class="contact-left">
            <h2 style="margin-bottom: 20px;">Plant&Scape</h2>
            <p style="color: #666; margin-bottom: 40px;">Odwiedź nasze studio we Wrocławiu lub skontaktuj się bezpośrednio z odpowiednim działem.</p>

            <div class="contact-block location">
                <div class="icon-box">📍</div>
                <div>
                    <strong>Lokalizacja Studio</strong>
                    <span>ul. Akwariowa 12/4, 50-001 Wrocław</span>
                </div>
            </div>

            <hr style="border: 0; border-top: 1px solid #eee; margin: 30px 0;">

            <div class="contact-persons-grid">

                <div class="person-card">
                    <strong>Piotr (Projekty & Aranżacje)</strong>
                    <a href="tel:+48600100200" class="contact-link">📞 +48 600 100 200</a>
                    <a href="mailto:piotr@plantandscape.pl" class="contact-link">✉️ piotr@plantandscape.pl</a>
                </div>

                <div class="person-card">
                    <strong>Anna (Sklep & Zamówienia)</strong>
                    <a href="tel:+48711234567" class="contact-link">📞 +48 71 123 45 67</a>
                    <a href="mailto:sklep@plantandscape.pl" class="contact-link">✉️ sklep@plantandscape.pl</a>
                </div>

            </div>

            <div class="socials-section" style="margin-top: 50px;">
                <h4 style="margin-bottom: 20px;">Obserwuj nas:</h4>
                <div class="social-links-premium">

                    <a href="https://facebook.com" target="_blank" class="social-btn fb" title="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>

                    <a href="https://instagram.com" target="_blank" class="social-btn ig" title="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>

                    <a href="https://tiktok.com" target="_blank" class="social-btn tt" title="TikTok">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
                    </a>

                    <a href="https://youtube.com" target="_blank" class="social-btn yt" title="YouTube">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.33 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                    </a>

                </div>
            </div>

        </div>

        <div class="contact-right">
            <h3 style="margin-bottom: 40px;">Napisz do nas</h3>
            <form action="#" class="ghost-form">

                <div class="form-row" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="form-group">
                        <label>Imię</label>
                        <input type="text" placeholder="Jan">
                    </div>
                    <div class="form-group">
                        <label>Nazwisko</label>
                        <input type="text" placeholder="Kowalski">
                    </div>
                </div>

                <div class="form-group">
                    <label>Adres Email</label>
                    <input type="email" placeholder="jan@przyklad.pl">
                </div>

                <div class="form-group">
                    <label>Temat wiadomości</label>
                    <select>
                        <option>Wycena aranżacji</option>
                        <option>Pytanie o produkt</option>
                        <option>Serwis akwarium</option>
                        <option>Współpraca</option>
                        <option>Inne</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Treść</label>
                    <textarea rows="4" placeholder="Opisz, w czym możemy pomóc..."></textarea>
                </div>

                <div class="form-checkbox" style="margin-bottom: 20px; display: flex; align-items: start; gap: 10px; font-size: 0.8rem; color: #666;">
                    <input type="checkbox" id="rodo" required style="width: auto; margin-top: 5px;">
                    <label for="rodo" style="margin: 0; text-transform: none; letter-spacing: 0; color: #666;">
                        Wyrażam zgodę na przetwarzanie moich danych osobowych w celu odpowiedzi na zgłoszenie.
                    </label>
                </div>

                <button type="submit" class="btn-primary" style="width: 100%; border:none; cursor: pointer;">Wyślij Wiadomość</button>
            </form>
        </div>

    </div>

    <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Wroc%C5%82aw%20Rynek&t=&z=14&ie=UTF8&iwloc=&output=embed" style="filter: grayscale(100%) invert(90%); display: block;"></iframe>

</main>

<?php get_footer(); ?>
