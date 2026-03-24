<?php

/**
 * Viagens Machupicchu — Theme Functions
 *
 * @package viagens-theme
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// -------------------------------------------------------------------------
// Theme Support
// -------------------------------------------------------------------------
function viagens_theme_setup()
{
    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails.
    add_theme_support('post-thumbnails');

    // Registrar el menú de navegación para el Header
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'viagens-theme'),
    ));
}
add_action('after_setup_theme', 'viagens_theme_setup');

// -------------------------------------------------------------------------
// Enqueue Styles & Scripts
// -------------------------------------------------------------------------
function viagens_enqueue_assets()
{
    $theme_version = wp_get_theme()->get('Version');

    // CSS Principal (Sass compilado)
    wp_enqueue_style(
        'viagens-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        $theme_version
    );

    // JS de Bootstrap (Necesario para el Navbar Mobile y Dropdowns)
    // Asumiendo que npm instaló bootstrap en node_modules y copiaste el JS a assets/js/
    // O si compilas el JS, ajusta la ruta. Por ahora apuntamos a una ruta estándar de assets.
    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
        array(),
        '5.3.0',
        true // Cargar en el footer (Importante para rendimiento)
    );
}
add_action('wp_enqueue_scripts', 'viagens_enqueue_assets');


// -------------------------------------------------------------------------
// Custom Post Types y Taxonomías
// -------------------------------------------------------------------------

function viagens_register_cpts_and_taxonomies()
{

    // 1. Registrar Taxonomía: Destinos
    $labels_destinos = array(
        'name'              => _x('Destinos', 'taxonomy general name', 'viagens-theme'),
        'singular_name'     => _x('Destino', 'taxonomy singular name', 'viagens-theme'),
        'search_items'      => __('Buscar Destinos', 'viagens-theme'),
        'all_items'         => __('Todos los Destinos', 'viagens-theme'),
        'parent_item'       => __('Destino Padre', 'viagens-theme'),
        'parent_item_colon' => __('Destino Padre:', 'viagens-theme'),
        'edit_item'         => __('Editar Destino', 'viagens-theme'),
        'update_item'       => __('Actualizar Destino', 'viagens-theme'),
        'add_new_item'      => __('Añadir Nuevo Destino', 'viagens-theme'),
        'new_item_name'     => __('Nuevo Nombre de Destino', 'viagens-theme'),
        'menu_name'         => __('Destinos', 'viagens-theme'),
    );

    $args_destinos = array(
        'hierarchical'      => true, // True = como categorías (con padres e hijos)
        'labels'            => $labels_destinos,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'destino'),
        'show_in_rest'      => true, // Vital para Gutenberg y llamadas a la API
    );
    register_taxonomy('destino', array('tour'), $args_destinos);


    // 2. Registrar Taxonomía: Tipo de Tour
    $labels_tipo_tour = array(
        'name'              => _x('Tipos de Tour', 'taxonomy general name', 'viagens-theme'),
        'singular_name'     => _x('Tipo de Tour', 'taxonomy singular name', 'viagens-theme'),
        'search_items'      => __('Buscar Tipos', 'viagens-theme'),
        'all_items'         => __('Todos los Tipos', 'viagens-theme'),
        'edit_item'         => __('Editar Tipo', 'viagens-theme'),
        'update_item'       => __('Actualizar Tipo', 'viagens-theme'),
        'add_new_item'      => __('Añadir Nuevo Tipo', 'viagens-theme'),
        'new_item_name'     => __('Nuevo Nombre de Tipo', 'viagens-theme'),
        'menu_name'         => __('Tipos de Tour', 'viagens-theme'),
    );

    $args_tipo_tour = array(
        'hierarchical'      => true,
        'labels'            => $labels_tipo_tour,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'tipo-tour'),
        'show_in_rest'      => true,
    );
    register_taxonomy('tipo_tour', array('tour'), $args_tipo_tour);


    // 3. Registrar Custom Post Type: Tours
    $labels_tours = array(
        'name'                  => _x('Tours', 'Post type general name', 'viagens-theme'),
        'singular_name'         => _x('Tour', 'Post type singular name', 'viagens-theme'),
        'menu_name'             => _x('Tours', 'Admin Menu text', 'viagens-theme'),
        'name_admin_bar'        => _x('Tour', 'Add New on Toolbar', 'viagens-theme'),
        'add_new'               => __('Añadir Nuevo', 'viagens-theme'),
        'add_new_item'          => __('Añadir Nuevo Tour', 'viagens-theme'),
        'new_item'              => __('Nuevo Tour', 'viagens-theme'),
        'edit_item'             => __('Editar Tour', 'viagens-theme'),
        'view_item'             => __('Ver Tour', 'viagens-theme'),
        'all_items'             => __('Todos los Tours', 'viagens-theme'),
        'search_items'          => __('Buscar Tours', 'viagens-theme'),
        'not_found'             => __('No se encontraron tours.', 'viagens-theme'),
        'not_found_in_trash'    => __('No se encontraron tours en la papelera.', 'viagens-theme'),
    );

    $args_tours = array(
        'labels'             => $labels_tours,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'tours'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-location-alt', // Icono de mapa
        'supports'           => array('title', 'thumbnail', 'excerpt'), // El editor principal lo manejaremos con ACF
        'show_in_rest'       => true,
    );
    register_post_type('tour', $args_tours);
}
add_action('init', 'viagens_register_cpts_and_taxonomies', 0);

// Incluir el Meta Box personalizado para el Itinerario de los Tours
require_once get_template_directory() . '/inc/itinerary-meta-box.php';
