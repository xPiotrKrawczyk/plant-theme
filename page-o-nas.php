<?php
/**
 * Template Name: Strona O Nas (WOW)
 */
get_header();
?>

<main class="site-main">

    <section class="about-hero" style="background: linear-gradient(rgba(16, 24, 32, 0.8), rgba(16, 24, 32, 0.7)), url('https://images.unsplash.com/photo-1606613998513-c536063c9ef8?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center; padding: 100px 20px; text-align: center; color: #fff;">
        <div class="container">
            <span style="color: var(--brand-blue); text-transform: uppercase; letter-spacing: 2px; font-weight: bold; font-size: 0.9rem;">Nasza Historia</span>
            <h1 style="font-size: 3rem; margin: 15px 0 20px; color: #fff;">Więcej niż akwarystyka.<br>Tworzymy żywe dzieła sztuki.</h1>
            <p style="font-size: 1.2rem; max-width: 700px; margin: 0 auto; opacity: 0.9;">
                W Plant&Scape łączymy surową naturę z nowoczesnym designem. Nie sprzedajemy tylko akwariów – projektujemy wycinki podwodnego świata.
            </p>
        </div>
    </section>

    <section class="about-story" style="padding: 80px 20px; background: #fff;">
        <div class="container" style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px;">

            <div style="flex: 1; min-width: 300px;">
                <div style="position: relative;">
                    <img src="https://images.unsplash.com/photo-1519657635301-68bb60c798f7?q=80&w=1165&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Aquascaping" style="width: 100%; border-radius: 12px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                    <div style="position: absolute; bottom: -20px; right: -20px; width: 150px; height: 150px; background: var(--brand-blue); z-index: -1; border-radius: 12px; opacity: 0.2;"></div>
                </div>
            </div>

            <div style="flex: 1; min-width: 300px;">
                <h2 style="font-size: 2.2rem; margin-bottom: 20px; color: var(--text-main);">Od pasji do perfekcji</h2>
                <p style="color: #555; font-size: 1.1rem; margin-bottom: 20px;">
                    Wszystko zaczęło się w małym pokoju we Wrocławiu, od jednego zbiornika typu Iwagumi. Dziś Plant&Scape to zespół pasjonatów, którzy wiedzą, że akwarium to serce domu.
                </p>
                <p style="color: #555; font-size: 1.1rem; margin-bottom: 30px;">
                    Jako absolwenci grafiki i informatyki, podchodzimy do zakładania akwariów inżynieryjnie, ale z duszą artysty. Każdy kamień, każdy korzeń i każda roślina ma swoje miejsce.
                </p>

                <div style="display: flex; align-items: center; gap: 15px;">
                    <div style="width: 50px; height: 50px; background: #ddd; border-radius: 50%; overflow: hidden;">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div>
                        <strong style="display: block; color: var(--text-main);">Piotrek</strong>
                        <span style="font-size: 0.9rem; color: var(--brand-blue);">Founder & Head Scaper</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="about-stats" style="background: var(--brand-blue); color: #fff; padding: 60px 20px;">
        <div class="container" style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 30px; text-align: center;">

            <div class="stat-item">
                <div style="font-size: 3rem; font-weight: 700;">50+</div>
                <div style="text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; opacity: 0.9;">Założonych Zbiorników</div>
            </div>

            <div class="stat-item">
                <div style="font-size: 3rem; font-weight: 700;">3000</div>
                <div style="text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; opacity: 0.9;">Zasadzonych Roślin</div>
            </div>

            <div class="stat-item">
                <div style="font-size: 3rem; font-weight: 700;">100%</div>
                <div style="text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; opacity: 0.9;">Pasji do Natury</div>
            </div>

        </div>
    </section>

    <section class="about-team" style="padding: 80px 20px; background: #f4f7f6; text-align: center;">
        <div class="container">
            <h2 style="margin-bottom: 10px;">Poznaj nasz zespół</h2>
            <p style="max-width: 600px; margin: 0 auto 50px; color: #666;">Ludzie, którzy dbają o Twój podwodny świat.</p>

            <div class="team-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">

                <div class="team-member" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" style="width: 120px; height: 120px; border-radius: 50%; margin-bottom: 20px; object-fit: cover; border: 3px solid var(--brand-blue);">
                    <h3 style="margin-bottom: 5px; font-size: 1.2rem;">Piotrek</h3>
                    <span style="color: var(--brand-blue); font-weight: 600; font-size: 0.9rem;">Founder & Designer</span>
                    <p style="font-size: 0.9rem; color: #666; margin-top: 15px;">Specjalista od hardscape'u. Widzi układ kamieni tam, gdzie inni widzą gruz.</p>
                </div>

                <div class="team-member" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" style="width: 120px; height: 120px; border-radius: 50%; margin-bottom: 20px; object-fit: cover; border: 3px solid var(--brand-blue);">
                    <h3 style="margin-bottom: 5px; font-size: 1.2rem;">Ania</h3>
                    <span style="color: var(--brand-blue); font-weight: 600; font-size: 0.9rem;">Biolog & Opiekun Roślin</span>
                    <p style="font-size: 0.9rem; color: #666; margin-top: 15px;">Dba o to, by każda roślina rosła zdrowo. Żaden glon się przed nią nie ukryje.</p>
                </div>

                <div class="team-member" style="background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                    <img src="https://randomuser.me/api/portraits/men/85.jpg" style="width: 120px; height: 120px; border-radius: 50%; margin-bottom: 20px; object-fit: cover; border: 3px solid var(--brand-blue);">
                    <h3 style="margin-bottom: 5px; font-size: 1.2rem;">Tomek</h3>
                    <span style="color: var(--brand-blue); font-weight: 600; font-size: 0.9rem;">Serwisant Techniczny</span>
                    <p style="font-size: 0.9rem; color: #666; margin-top: 15px;">Mistrz hydrauliki i oświetlenia. Podłącza filtry z zamkniętymi oczami.</p>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
