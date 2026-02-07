<?php
/**
 * Plik functions.php
 */

// 1. Ładowanie stylów (To sprawia, że style.css działa)
function plantscape_load_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '2.0' );
}
add_action( 'wp_enqueue_scripts', 'plantscape_load_scripts' );

// 2. Włączamy obsługę WooCommerce i Obrazków Wyróżniających
function moj_sklep_setup() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'moj_sklep_setup' );

// 3. Tryb Katalogu (Ukrywanie przycisku "Dodaj do koszyka")
if ( function_exists( 'is_woocommerce' ) ) {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
}
// 1. Dodajemy pudełko do edytora
function plant_add_custom_author_box() {
    add_meta_box(
        'custom_author_box',
        '👤 Podpis Autora (Opcjonalne)',
        'plant_custom_author_html',
        'post'
    );
}
add_action( 'add_meta_boxes', 'plant_add_custom_author_box' );

// 2. Wygląd pola w adminie
function plant_custom_author_html( $post ) {
    $value = get_post_meta( $post->ID, '_custom_author_name', true );
    ?>
    <label for="plant_author_field">Wpisz nazwę autora (np. Zespół Plant&Scape):</label>
    <input type="text" name="plant_author_field" id="plant_author_field" value="<?php echo esc_attr( $value ); ?>" style="width:100%; margin-top:5px; padding:10px;">
    <p style="color:#666; font-size:12px;">Puste pole = Twoja nazwa użytkownika.</p>
    <?php
}

// 3. Zapisywanie danych
function plant_save_custom_author( $post_id ) {
    if ( array_key_exists( 'plant_author_field', $_POST ) ) {
        update_post_meta(
            $post_id,
            '_custom_author_name',
            sanitize_text_field( $_POST['plant_author_field'] )
        );
    }
}
add_action( 'save_post', 'plant_save_custom_author' );

/* =========================================
   CUSTOM LOGIN PAGE (BRANDING)
   ========================================= */
function plant_custom_login_style() {
?>
    <style type="text/css">
        /* 1. TŁO I FONT */
        body.login {
            background-image: url('https://images.unsplash.com/photo-1520412092553-157725e22137?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Ciemna nakładka na tło */
        body.login::before {
            content: '';
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(16, 24, 32, 0.7); /* Twój ciemny kolor */
            z-index: -1;
        }

        /* 2. LOGO (Podmień URL na swoje logo!) */
        #login h1 a {
            background-image: url('https://cdn-icons-png.flaticon.com/512/2979/2979689.png'); /* Tutaj wklej link do swojego logo */
            background-size: contain;
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        /* 3. FORMULARZ */
        .login form {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
            padding: 40px !important;
            border: none;
        }

        .login label {
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
            font-size: 0.8rem;
        }

        /* Pola input */
        .login form .input, .login input[type=text] {
            border: 2px solid #eee;
            background: #f9f9f9;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 1rem;
            color: #333;
            margin-top: 5px;
        }
        .login form .input:focus {
            border-color: #298fe2; /* Twój niebieski */
            box-shadow: none;
            background: #fff;
        }

        /* 4. PRZYCISK LOGOWANIA */
        .wp-core-ui .button-primary {
            background: #298fe2 !important;
            border-color: #298fe2 !important;
            border-radius: 50px !important;
            text-transform: uppercase;
            font-weight: 700;
            padding: 5px 25px !important;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(41, 143, 226, 0.3);
            width: 100%;
            margin-top: 20px;
        }
        .wp-core-ui .button-primary:hover {
            background: #1c6cb0 !important;
            transform: translateY(-2px);
        }

        /* Linki pod spodem */
        .login #nav a, .login #backtoblog a {
            color: #fff !important;
            opacity: 0.7;
        }
        .login #nav a:hover, .login #backtoblog a:hover {
            opacity: 1;
            color: #298fe2 !important;
        }
    </style>
<?php
}
add_action( 'login_enqueue_scripts', 'plant_custom_login_style' );

// Zmiana linku logo (żeby prowadziło do strony głównej, a nie do WordPress.org)
function plant_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'plant_login_logo_url' );

/* =========================================
   1. REJESTRACJA: TYLKO IMIĘ I NAZWISKO
   ========================================= */

// Dodajemy pola do formularza
function plant_add_name_fields() {
    ?>
    <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
        <label for="reg_billing_first_name">Imię <span class="required">*</span></label>
        <input type="text" class="woocommerce-Input input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
    </p>

    <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
        <label for="reg_billing_last_name">Nazwisko <span class="required">*</span></label>
        <input type="text" class="woocommerce-Input input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
    </p>
    <div class="clear"></div>
    <?php
}
add_action( 'woocommerce_register_form_start', 'plant_add_name_fields' );

// Sprawdzamy czy wypełnione
function plant_validate_name_fields( $errors, $username, $email ) {
    if ( empty( $_POST['billing_first_name'] ) ) {
        $errors->add( 'billing_first_name_error', 'Błąd: Proszę podać imię.' );
    }
    if ( empty( $_POST['billing_last_name'] ) ) {
        $errors->add( 'billing_last_name_error', 'Błąd: Proszę podać nazwisko.' );
    }
    return $errors;
}
add_filter( 'woocommerce_process_registration_errors', 'plant_validate_name_fields', 10, 3 );

// Zapisujemy po rejestracji
function plant_save_name_fields( $customer_id ) {
    if ( isset( $_POST['billing_first_name'] ) ) {
        update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
        update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
    }
    if ( isset( $_POST['billing_last_name'] ) ) {
        update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
        update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
    }
}
add_action( 'woocommerce_created_customer', 'plant_save_name_fields' );


/* =========================================
   2. DODATKOWE POLE: NIP (W ADRESIE ROZLICZENIOWYM)
   ========================================= */

// Dodajemy pole NIP do standardowych pól adresu (Checkout + Moje Konto > Adresy)
function plant_add_nip_field( $fields ) {
    $fields['nip'] = array(
        'label'       => 'NIP',
        'placeholder' => 'Wpisz numer NIP (opcjonalnie)',
        'required'    => false, // Nie jest wymagane, bo klient może być prywatny
        'class'       => array( 'form-row-wide' ),
        'priority'    => 35, // Wyświetli się pod nazwą firmy
    );
    return $fields;
}
add_filter( 'woocommerce_default_address_fields', 'plant_add_nip_field' );

// 1. Wyświetlamy checkbox w formularzu rejestracji
function plant_add_privacy_checkbox() {

    // Pobieramy ID strony polityki z ustawień WordPressa
    $privacy_page_id = get_option( 'wp_page_for_privacy_policy' );

    // Jeśli strona jest ustawiona, pobieramy link, jeśli nie - dajemy '#'
    $privacy_link = $privacy_page_id ? get_permalink( $privacy_page_id ) : '#';

    ?>
    <div class="woocommerce-privacy-policy-text">
        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
            <input type="checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" name="plant_privacy_policy" id="plant_privacy_policy" required />
            <span class="woocommerce-terms-and-conditions-checkbox-text">
                Zapoznałem się i akceptuję <a href="<?php echo esc_url( $privacy_link ); ?>" target="_blank" class="woocommerce-privacy-policy-link">Politykę Prywatności</a> <span class="required">*</span>
            </span>
        </label>
    </div>
    <?php
}
add_action( 'woocommerce_register_form', 'plant_add_privacy_checkbox' );


// 2. Sprawdzamy, czy klient zaznaczył checkbox (Walidacja)
function plant_validate_privacy_checkbox( $errors, $username, $email ) {
    if ( ! isset( $_POST['plant_privacy_policy'] ) ) {
        $errors->add( 'privacy_policy_error', __( 'Błąd: Musisz zaakceptować Politykę Prywatności, aby się zarejestrować.', 'woocommerce' ) );
    }
    return $errors;
}
add_filter( 'woocommerce_process_registration_errors', 'plant_validate_privacy_checkbox', 10, 3 );
