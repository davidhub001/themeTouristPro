<?php
include "config/config.php";
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
    // Ajouter la page principale de menu
    add_menu_page(
        'Options du thème',           // Titre de la page
        'Options du thème',           // Titre du menu
        'manage_options',             // Capacité requise
        'options-du-theme',           // Slug du menu
        'afficher_options_custom',    // Fonction de rappel pour afficher le contenu de la page
        'dashicons-admin-generic',    // Icône du menu
        30                            // Position dans le menu
    );

    // Ajouter un sous-menu à la page principale
    add_submenu_page(
        'options-du-theme',           // Slug du menu parent
        'Section 1',                // Titre de la page du sous-menu
        'Section 1',                // Titre du sous-menu
        'manage_options',             // Capacité requise
        'section1',                // Slug du sous-menu
        'afficher_options_custom'        // Fonction de rappel pour afficher le contenu du sous-menu
    );
    add_submenu_page(
        'options-du-theme',           // Slug du menu parent
        'Section 2',                // Titre de la page du sous-menu
        'Section 2',                // Titre du sous-menu
        'manage_options',             // Capacité requise
        'section2',                // Slug du sous-menu
        'afficher_options_custom'        // Fonction de rappel pour afficher le contenu du sous-menu
    );
    add_submenu_page(
        'options-du-theme',           // Slug du menu parent
        'Section 3',                // Titre de la page du sous-menu
        'Section 3',                // Titre du sous-menu
        'manage_options',             // Capacité requise
        'section3',                // Slug du sous-menu
        'afficher_options_custom'        // Fonction de rappel pour afficher le contenu du sous-menu
    );
    add_submenu_page(
        'options-du-theme',           // Slug du menu parent
        'Section 4',                // Titre de la page du sous-menu
        'Section 4',                // Titre du sous-menu
        'manage_options',             // Capacité requise
        'section4',                // Slug du sous-menu
        'afficher_options_custom'        // Fonction de rappel pour afficher le contenu du sous-menu
    );
    add_submenu_page(
        'options-du-theme',           // Slug du menu parent
        'Section 5',                // Titre de la page du sous-menu
        'Section 5',                // Titre du sous-menu
        'manage_options',             // Capacité requise
        'section5',                // Slug du sous-menu
        'afficher_options_custom'        // Fonction de rappel pour afficher le contenu du sous-menu
    );
    add_submenu_page(
        'options-du-theme',           // Slug du menu parent
        'Section 6',                // Titre de la page du sous-menu
        'Section 6',                // Titre du sous-menu
        'manage_options',             // Capacité requise
        'section6',                // Slug du sous-menu
        'afficher_options_custom'        // Fonction de rappel pour afficher le contenu du sous-menu
    );
    add_submenu_page(
        'options-du-theme',           // Slug du menu parent
        'Section 7',                // Titre de la page du sous-menu
        'Section 7',                // Titre du sous-menu
        'manage_options',             // Capacité requise
        'section7',                // Slug du sous-menu
        'afficher_options_custom'        // Fonction de rappel pour afficher le contenu du sous-menu
    );
    add_submenu_page(
        'options-du-theme',           // Slug du menu parent
        'Section 8',                // Titre de la page du sous-menu
        'Section 8',                // Titre du sous-menu
        'manage_options',             // Capacité requise
        'section8',                // Slug du sous-menu
        'afficher_options_custom'        // Fonction de rappel pour afficher le contenu du sous-menu
    );
    add_submenu_page(
        'options-du-theme',           // Slug du menu parent
        'Section 9',                // Titre de la page du sous-menu
        'Section 9',                // Titre du sous-menu
        'manage_options',             // Capacité requise
        'section9',                // Slug du sous-menu
        'afficher_options_custom'        // Fonction de rappel pour afficher le contenu du sous-menu
    );
    add_submenu_page(
        'options-du-theme',           // Slug du menu parent
        'Section 10',                // Titre de la page du sous-menu
        'Section 10',                // Titre du sous-menu
        'manage_options',             // Capacité requise
        'section10',                // Slug du sous-menu
        'afficher_options_custom'        // Fonction de rappel pour afficher le contenu du sous-menu
    );
}
add_action('admin_menu', 'ajouter_page_options_custom');

function afficher_options_custom() {
    ?>
    <div class="wrap">
            <?php
                switch ($_REQUEST['page']) {
                    case 'options-du-theme':
                        # code...
                        include "config/config-head.php";
                        break;
                    case 'section1':
                        # code...
                        include "config/section1.php";

                        break;
                    case 'section2':
                        # code...
                        include "config/section2.php";
                        break;
                    case 'section3':
                        # code...
                        include "config/section3.php";
                        break;
                    case 'section4':
                        # code...
                        include "config/section4.php";
                        break;
                    case 'section5':
                        # code...
                        include "config/section5.php";
                        break;
                    case 'section6':
                        # code...
                        include "config/section6.php";
                        break;
                    case 'section7':
                        # code...
                        include "config/section7.php";
                        break;
                    case 'section8':
                        # code...
                        include "config/section8.php";
                        break;
                    case 'section9':
                        # code...
                        include "config/section9.php";
                        break;
                    case 'section10':
                        # code...
                        include "config/section10.php";
                        break;
                }
            ?>
    </div>
    <?php
}
