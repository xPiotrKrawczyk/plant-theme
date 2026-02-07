<?php
get_header();
?>

<main class="site-main error-404" style="height: 80vh; display: flex; align-items: center; justify-content: center; text-align: center; background: #101820; color: #fff; padding: 20px;">

    <div class="container">
        <h1 style="font-size: 8rem; margin: 0; color: var(--brand-blue); line-height: 1; text-shadow: 0 10px 30px rgba(41, 143, 226, 0.3);">404</h1>

        <h2 style="font-size: 2rem; margin: 20px 0;">Ups! Wypłynąłeś na nieznane wody.</h2>

        <p style="font-size: 1.2rem; opacity: 0.8; max-width: 600px; margin: 0 auto 40px;">
            Strona, której szukasz, została wciągnięta przez filtr albo nigdy nie istniała.
            Wracaj na bezpieczny ląd.
        </p>

        <a href="<?php echo home_url(); ?>" class="btn-primary" style="padding: 15px 40px;">Wróć na Stronę Główną</a>
    </div>

    </main>

<?php get_footer(); ?>
