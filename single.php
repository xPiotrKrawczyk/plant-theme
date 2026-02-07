<?php get_header(); ?>

<main class="site-main">

    <?php while ( have_posts() ) : the_post();
        $thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        if ( empty($thumb_url) ) { $thumb_url = 'https://images.unsplash.com/photo-1522069169874-c58ec4b76be5?auto=format&fit=crop&w=1600&q=80'; }

        // POBIERAMY RĘCZNEGO AUTORA
        $custom_author = get_post_meta( get_the_ID(), '_custom_author_name', true );
        $display_author = $custom_author ? $custom_author : get_the_author();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="single-post-hero" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.9)), url('<?php echo $thumb_url; ?>'); position: relative;">

            <?php if ( current_user_can( 'edit_posts' ) ) : ?>
                <a href="<?php echo get_edit_post_link(); ?>" class="hero-edit-btn">⚙️ Edytuj</a>
                <a href="<?php echo get_delete_post_link(); ?>" class="hero-delete-btn" onclick="return confirm('Usunąć?');">🗑️ Usuń</a>
            <?php endif; ?>

            <div class="container hero-container">
                <div class="post-meta-top">
                    <span class="post-cat-badge">
                        <?php $cats = get_the_category(); if($cats) echo $cats[0]->name; ?>
                    </span>
                    <span class="post-date-hero"><?php echo get_the_date(); ?></span>
                </div>

                <h1 class="single-post-title"><?php the_title(); ?></h1>

                <div class="post-author">
                    <span>Autor: <strong style="color: var(--brand-blue);"><?php echo esc_html($display_author); ?></strong></span>
                </div>
            </div>
        </header>

        <div class="single-post-content-wrapper">
            <div class="container" style="max-width: 800px;">
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <div class="post-tags"><?php the_tags( 'Tagi: ', ', ', '' ); ?></div>
            </div>
        </div>

    </article>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
