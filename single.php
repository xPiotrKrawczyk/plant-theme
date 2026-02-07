<?php
/**
 * Plik: single.php
 * Opis: Szablon pojedynczego wpisu blogowego.
 * Styl: Immersive Header (Zdjęcie w tle na górze).
 */

get_header();
?>

<main class="site-main">

    <?php while ( have_posts() ) : the_post();
        // Pobieramy zdjęcie w pełnej rozdzielczości na tło nagłówka
        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        // Fallback image (gdyby nie było zdjęcia)
        if ( empty($thumb_url) ) {
            $thumb_url = 'https://images.unsplash.com/photo-1522069169874-c58ec4b76be5?auto=format&fit=crop&w=1600&q=80';
        }
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="single-post-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.8)), url('<?php echo $thumb_url; ?>'); position: relative;">

            <?php if ( current_user_can( 'edit_posts' ) ) : ?>

                <a href="<?php echo get_edit_post_link(); ?>" class="hero-edit-btn">
                    ⚙️ Edytuj
                </a>

                <a href="<?php echo get_delete_post_link(); ?>" class="hero-delete-btn" onclick="return confirm('⚠️ Czy na pewno chcesz usunąć ten wpis?');">
                    🗑️ Usuń
                </a>

            <?php endif; ?>

            <div class="container hero-container">
                <div class="post-meta-top">
                    <span class="post-cat-badge">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) { echo esc_html( $categories[0]->name ); }
                        ?>
                    </span>
                    <span class="post-date-hero"><?php echo get_the_date(); ?></span>
                </div>

                <h1 class="single-post-title"><?php the_title(); ?></h1>

                <div class="post-author">
                    <span>Autor: <strong><?php the_author(); ?></strong></span>
                </div>
            </div>
        </header>

        <div class="single-post-content-wrapper">
            <div class="container" style="max-width: 800px;">

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <div class="post-tags">
                    <?php the_tags( 'Tagi: ', ', ', '' ); ?>
                </div>

                <div class="post-navigation">
                    <div class="nav-prev"><?php previous_post_link( '%link', '&larr; Poprzedni' ); ?></div>
                    <div class="nav-next"><?php next_post_link( '%link', 'Następny &rarr;' ); ?></div>
                </div>

            </div>
        </div>

    </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
