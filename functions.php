<?php
function montheme_enqueue_styles() {
    // Google Fonts
    wp_enqueue_style('google-fonts-poppins', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
    wp_enqueue_style('google-fonts-alex-brush', 'https://fonts.googleapis.com/css?family=Alex+Brush');

    // Stylesheets
    wp_enqueue_style('open-iconic-bootstrap', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-default', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
    wp_enqueue_style('ionicons', get_template_directory_uri() . '/css/ionicons.min.css');
    wp_enqueue_style('bootstrap-datepicker', get_template_directory_uri() . '/css/bootstrap-datepicker.css');
    wp_enqueue_style('jquery-timepicker', get_template_directory_uri() . '/css/jquery.timepicker.css');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/css/flaticon.css');
    wp_enqueue_style('icomoon', get_template_directory_uri() . '/css/icomoon.css');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'montheme_enqueue_styles');

function montheme_enqueue_scripts() {
    // Scripts JavaScript
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array(), null, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), null, true);
    wp_enqueue_script('stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array(), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), null, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', array(), null, true);
    wp_enqueue_script('animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.js', array(), null, true);
    wp_enqueue_script('timepicker', get_template_directory_uri() . '/js/jquery.timepicker.min.js', array(), null, true);
    wp_enqueue_script('scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array(), null, true);
    wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false', array(), null, true); // Remplacez YOUR_API_KEY par votre clé API Google Maps
    wp_enqueue_script('google-map', get_template_directory_uri() . '/js/google-map.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'montheme_enqueue_scripts');

function montheme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'montheme'), // Identifiant et libellé de l'emplacement du menu
    ));
}

add_action('after_setup_theme', 'montheme_register_menus');


// Étape 1 : Création de la page d'options personnalisée
function ajouter_page_options_custom() {
    add_menu_page(
        'Options du thème',
        'Options du thème',
        'manage_options',
        'options-du-theme',
        'afficher_options_custom',
        'dashicons-admin-generic',
        30
    );
}
add_action('admin_menu', 'ajouter_page_options_custom');

function afficher_options_custom() {
    ?>
    <div class="wrap">
        <h1>Options du thème</h1>
        <form method="post" action="options.php">
            <?php settings_fields('header_options_group'); ?>
            <?php do_settings_sections('options-du-theme'); ?>
            <?php submit_button('Enregistrer'); ?>
        </form>
    </div>
    <?php
}

// Étape 2 : Ajout des sections et des champs
function ajouter_sections_et_champs() {
    add_settings_section('header_options_section', 'Options de l\'en-tête', 'afficher_section_en_tete', 'options-du-theme');
    add_settings_field('text_header_content', 'Texte section 1 head', 'afficher_champ_contenu', 'options-du-theme', 'header_options_section');
    add_settings_field('text_header_content_desc', 'Texte section 1 desc', 'afficher_champ_contenu_desc', 'options-du-theme', 'header_options_section');
    add_settings_field('text_header_content_desc2', 'Texte section 1 desc 2', 'afficher_champ_contenu_desc2', 'options-du-theme', 'header_options_section');
    add_settings_field('header_background', 'URL de l\'image de fond', 'afficher_champ_background', 'options-du-theme', 'header_options_section');
}
add_action('admin_init', 'ajouter_sections_et_champs');

// Fonction pour afficher la section de l'en-tête
function afficher_section_en_tete() {
    echo '<p>Personnalisez l\'en-tête de votre thème</p>';
}

// Fonction pour afficher le champ pour le background
function afficher_champ_background() {
    $background = get_option('header_background');
    ?>
    <input type="text" id="header_background" name="header_background" value="<?php echo esc_attr($background); ?>" />
    <?php
}

// Fonction pour afficher le champ pour le contenu
function afficher_champ_contenu() {
    $content = get_option('text_header_content');
    ?>
    <textarea id="text_header_content" name="text_header_content" rows="5"><?php echo esc_textarea($content); ?></textarea>
    <?php
}
// Fonction pour afficher le champ pour le contenu
function afficher_champ_contenu_desc() {
    $content = get_option('text_header_content_desc');
    ?>
    <textarea id="text_header_content_desc" name="text_header_content_desc" rows="5"><?php echo esc_textarea($content); ?></textarea>
    <?php
}
// Fonction pour afficher le champ pour le contenu
function afficher_champ_contenu_desc2() {
    $content = get_option('text_header_content_desc2');
    ?>
    <textarea id="text_header_content_desc2" name="text_header_content_desc2" rows="5"><?php echo esc_textarea($content); ?></textarea>
    <?php
}
// Étape 3 : Enregistrement des options
function enregistrer_options_custom() {
    register_setting('header_options_group', 'header_background', 'esc_url_raw');
    register_setting('header_options_group', 'text_header_content', 'wp_kses_post');
    register_setting('header_options_group', 'text_header_content_desc', 'wp_kses_post');
    register_setting('header_options_group', 'text_header_content_desc2', 'wp_kses_post');
}
add_action('admin_init', 'enregistrer_options_custom');
