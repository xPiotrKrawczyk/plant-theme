<?php
/**
 * Template Name: Standardowa Strona
 * Plik: page.php
 * Opis: Odpowiada za wyświetlanie pojedynczych stron (O nas, Usługi, Kontakt)
 */
get_header();
?>

<main class="site-main">

    <section class="page-header" style="background: #f4f7f6; padding: 60px 20px; text-align: center; border-bottom: 1px solid #e0e0e0;">
        <div class="container">
            <h1 style="margin: 0; font-size: 2.5rem;"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="page-content" style="padding: 60px 20px;">
        <div class="container" style="background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();

                    // Wyświetl obrazek wyróżniający, jeśli jest
                    if ( has_post_thumbnail() ) {
                        echo '<div style="margin-bottom: 30px;">';
                        the_post_thumbnail('large', ['style' => 'width: 100%; height: auto; border-radius: 8px;']);
                        echo '</div>';
                    }

                    // Wyświetl treść z edytora WordPressa
                    the_content();

                endwhile;
            endif;
            ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
