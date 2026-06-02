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

    // Enable support for Custom Logo.
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

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

    // CSS Principal
    wp_enqueue_style('viagens-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), $theme_version);

    // Bootstrap Icons (CDN)
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css', array(), '1.13.1');

    // JS de Bootstrap
    $bootstrap_local_path = get_template_directory() . '/assets/js/bootstrap.bundle.min.js';
    if (file_exists($bootstrap_local_path)) {
        $bootstrap_src = get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js';
    } else {
        $bootstrap_src = 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js';
    }
    wp_enqueue_script('bootstrap-js', $bootstrap_src, array(), '5.3.8', true);

    // --- LIGHTGALLERY CSS ---
    wp_enqueue_style('lightgallery-core', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css', array(), '2.7.2');
    wp_enqueue_style('lightgallery-thumbnails', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lg-thumbnail.min.css', array(), '2.7.2');

    // --- LIGHTGALLERY JS ---
    wp_enqueue_script('lightgallery-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js', array(), '2.7.2', true);
    wp_enqueue_script('lightgallery-thumb-js', 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.min.js', array('lightgallery-js'), '2.7.2', true);
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
        'hierarchical'      => true,
        'labels'            => $labels_destinos,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'destino'),
        'show_in_rest'      => true,
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
        'menu_icon'          => 'dashicons-location-alt',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => false,
    );
    register_post_type('tour', $args_tours);
}
add_action('init', 'viagens_register_cpts_and_taxonomies', 0);

// Incluir el Meta Box
require_once get_template_directory() . '/inc/itinerary-meta-box.php';

// -------------------------------------------------------------------------
// Modificar salida del Custom Logo
// -------------------------------------------------------------------------
function viagens_custom_logo_output($html, $logo_id)
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    if ($image) {
        $html = sprintf(
            '<a href="%1$s" class="navbar-brand me-2 me-lg-4" rel="home">
                <img src="%2$s" class="header-logo transition-all" alt="%3$s">
            </a>',
            esc_url(home_url('/')),
            esc_url($image[0]),
            esc_attr(get_bloginfo('name'))
        );
    }
    return $html;
}
add_filter('get_custom_logo', 'viagens_custom_logo_output', 10, 2);

// -------------------------------------------------------------------------
// Formulario de contacto directo
// -------------------------------------------------------------------------
function viagens_handle_contact_direct_form()
{
    $redirect_to = home_url('/#formulario-contacto-directo');

    if (isset($_POST['redirect_to'])) {
        $redirect_to = esc_url_raw(wp_unslash($_POST['redirect_to']));
    }

    if (
        ! isset($_POST['viagens_contact_direct_nonce']) ||
        ! wp_verify_nonce(wp_unslash($_POST['viagens_contact_direct_nonce']), 'viagens_contact_direct_form_action')
    ) {
        wp_safe_redirect(add_query_arg('contact_status', 'invalid', $redirect_to));
        exit;
    }

    $nombre = isset($_POST['nombre']) ? sanitize_text_field(wp_unslash($_POST['nombre'])) : '';
    $email = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $whatsapp = isset($_POST['whatsapp']) ? sanitize_text_field(wp_unslash($_POST['whatsapp'])) : '';
    $mensaje = isset($_POST['mensaje']) ? sanitize_textarea_field(wp_unslash($_POST['mensaje'])) : '';

    if (empty($nombre) || empty($email) || empty($whatsapp) || empty($mensaje) || ! is_email($email)) {
        wp_safe_redirect(add_query_arg('contact_status', 'invalid', $redirect_to));
        exit;
    }

    $to = get_option('admin_email');
    $subject = sprintf('Nueva solicitud de asesoria - %s', get_bloginfo('name'));

    $body_lines = array(
        'Has recibido una nueva solicitud de asesoria desde la pagina de inicio.',
        '',
        'Nombre: ' . $nombre,
        'Email: ' . $email,
        'WhatsApp: ' . $whatsapp,
        '',
        'Mensaje:',
        $mensaje,
    );

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $nombre . ' <' . $email . '>',
    );

    $sent = wp_mail($to, $subject, implode("\n", $body_lines), $headers);

    wp_safe_redirect(add_query_arg('contact_status', $sent ? 'success' : 'error', $redirect_to));
    exit;
}
add_action('admin_post_nopriv_viagens_contact_direct_form', 'viagens_handle_contact_direct_form');
add_action('admin_post_viagens_contact_direct_form', 'viagens_handle_contact_direct_form');
