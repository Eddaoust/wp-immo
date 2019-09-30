<?php
// Composer Autoloader
require_once( __DIR__ . '/vendor/autoload.php' );
// Init Timber
$timber = new Timber\Timber();


// Add CSS
function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css');
    wp_enqueue_style('bootstrap');
    wp_register_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('style');
    wp_register_style('color', get_template_directory_uri().'/assets/css/colors.css');
    wp_enqueue_style('color');
    wp_register_style('versions', get_template_directory_uri().'/assets/css/versions.css');
    wp_enqueue_style('versions');
    wp_register_style('responsive', get_template_directory_uri().'/assets/css/responsive.css');
    wp_enqueue_style('responsive');
    wp_register_style('custom', get_template_directory_uri().'/assets/css/custom.css');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
// Add JS
function load_js() {
    wp_deregister_script('jquery-core');
    wp_register_script('modernizer', get_template_directory_uri().'/assets/js/modernizer.js', false, '2.6.2', false);
    wp_enqueue_script('modernizer', get_template_directory_uri().'/assets/js/modernizer.js', false, '2.6.2', false);
    wp_register_script('all', get_template_directory_uri().'/assets/js/all.js');
    wp_enqueue_script('all', get_template_directory_uri().'/assets/js/all.js', false, '1.0', true);
    wp_register_script('custom', get_template_directory_uri().'/assets/js/custom.js');
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', false, '1.0', true);
    wp_register_script('portfolio', get_template_directory_uri().'/assets/js/portfolio.js');
    wp_enqueue_script('portfolio', get_template_directory_uri().'/assets/js/portfolio.js', false, '1.0', true);
    wp_register_script('hoverdir', get_template_directory_uri().'/assets/js/hoverdir.js');
    wp_enqueue_script('hoverdir', get_template_directory_uri().'/assets/js/hoverdir.js', false, '1.0', true);
    wp_register_script('googlemap', 'http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places');
    wp_enqueue_script('googlemap', 'http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places', false, '1.0', true);
    wp_register_script('map', get_template_directory_uri().'/assets/js/map.js');
    wp_enqueue_script('map', get_template_directory_uri().'/assets/js/map.js', false, '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_js');

// Add Menu control on apparence
add_theme_support('menus');
// Add image mise en avant
add_theme_support('post-thumbnails');

// Add menu to the global timber context
add_filter('timber/context', 'add_to_context');

function add_to_context($context) {
    $query = [
        'post_type' => 'attachment',
        'name' => 'logo'
    ];

    $context['homepage_logo'] = new \Timber\PostQuery($query);
    $context['menu'] = new \Timber\Menu('navbar');

    return $context;
}


