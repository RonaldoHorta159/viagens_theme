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

    $to = 'experience@viagensmachupicchuexperience.com';
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
// -------------------------------------------------------------------------
// Registro de Cadenas para Polylang
// -------------------------------------------------------------------------
add_action( 'init', function() {
    if ( function_exists( 'pll_register_string' ) ) {
        
        // --- CABECERA (Header) ---
        pll_register_string( 'Header: Inicio', 'Inicio', 'Cabecera' );
        pll_register_string( 'Header: Machu Picchu', 'Machu Picchu', 'Cabecera' );
        pll_register_string( 'Header: Servicio de Guia', 'Servicio de Guía', 'Cabecera' );
        pll_register_string( 'Header: Machupicchu & Valle Sagrado', 'Machupicchu & Valle Sagrado', 'Cabecera' );
        pll_register_string( 'Header: Machupicchu Full Day', 'Machupicchu Full Day', 'Cabecera' );
        pll_register_string( 'Header: Compartido Premium', 'Compartido Premium', 'Cabecera' );
        
        pll_register_string( 'Header: Cusco', 'Cusco', 'Cabecera' );
        pll_register_string( 'Header: City Tour', 'City Tour', 'Cabecera' );
        pll_register_string( 'Header: Valle Sagrado', 'Valle Sagrado', 'Cabecera' );
        pll_register_string( 'Header: Maras y Moray', 'Maras y Moray', 'Cabecera' );
        pll_register_string( 'Header: Valle Sur', 'Valle Sur', 'Cabecera' );
        
        pll_register_string( 'Header: Aventura', 'Aventura', 'Cabecera' );
        pll_register_string( 'Header: Montana de 7 Colores', 'Montaña de 7 Colores', 'Cabecera' );
        pll_register_string( 'Header: Laguna Humantay', 'Laguna Humantay', 'Cabecera' );
        pll_register_string( 'Header: 7 Lagunas de Ausangate', '7 Lagunas de Ausangate', 'Cabecera' );
        pll_register_string( 'Header: Montana Palccoyo', 'Montaña Palccoyo', 'Cabecera' );
        
        pll_register_string( 'Header: Cuatrimotos Subtitulo', 'Cuatrimotos', 'Cabecera' );
        pll_register_string( 'Header: Cuatrimotos Montana', 'Cuatrimotos a Montaña de Colores', 'Cabecera' );
        pll_register_string( 'Header: Cuatrimotos Maras', 'Cuatrimotos a Salineras de Maras y Moray', 'Cabecera' );
        pll_register_string( 'Header: Cuatrimotos Lagunas', 'Cuatrimotos a Laguna Piuray + Laguna Huaypo', 'Cabecera' );
        
        pll_register_string( 'Header: Lo mejor de Peru', 'Lo mejor de Perú', 'Cabecera' );
        pll_register_string( 'Header: Nosotros', 'Nosotros', 'Cabecera' );
        
        pll_register_string( 'Header: Pagos', 'PAGOS', 'Cabecera' );
        pll_register_string( 'Header: Blog', 'BLOG', 'Cabecera' );
        
        // --- FORMULARIO DE CONTACTO DIRECTO (Mensajes y textos) ---
        pll_register_string( 'Formulario: Nueva solicitud', 'Has recibido una nueva solicitud de asesoria desde la pagina de inicio.', 'Formularios' );
        pll_register_string( 'Formulario: Nombre', 'Nombre:', 'Formularios' );
        pll_register_string( 'Formulario: Mensaje', 'Mensaje:', 'Formularios' );

       // --- SECCIÓN HERO (Inicio) ---
        pll_register_string( 'Hero: T1 P1', 'El viaje de', 'Inicio - Hero' );
        pll_register_string( 'Hero: T1 P2', 'tus sueños', 'Inicio - Hero' );
        pll_register_string( 'Hero: Texto 1', 'Organizamos juntos el viaje de sus sueños, de acuerdo con su disponibilidad de fechas y preferencias, garantizando su seguridad y comodidad.', 'Inicio - Hero' );
        pll_register_string( 'Hero: Tag 1', 'Machu Picchu', 'Inicio - Hero' );
        
        pll_register_string( 'Hero: T2 P1', 'Personaliza tu', 'Inicio - Hero' );
        pll_register_string( 'Hero: T2 P2', 'Viaje', 'Inicio - Hero' );
        pll_register_string( 'Hero: Texto 2', 'Nuestro equipo comprende profundamente el perfil del turista y domina nuestra cultura, geografía e historia para ofrecerte una experiencia de alto nivel.', 'Inicio - Hero' );
        pll_register_string( 'Hero: Tag 2', 'Tours Tradicionales', 'Inicio - Hero' );
        
        pll_register_string( 'Hero: T3 P1', 'Conexión', 'Inicio - Hero' );
        pll_register_string( 'Hero: T3 P2', 'Mística', 'Inicio - Hero' );
        pll_register_string( 'Hero: Texto 3', 'Descubre rituales espirituales trascendentes y comprende su profunda relación con la cosmovisión andina junto a auténticos chamanes nativos.', 'Inicio - Hero' );
        pll_register_string( 'Hero: Tag 3', 'Explora lo mejor del Perú', 'Inicio - Hero' );
        
        pll_register_string( 'Hero: BD1 P1', 'Atención', 'Inicio - Hero' );
        pll_register_string( 'Hero: BD1 P2', 'Personalizada', 'Inicio - Hero' );
        
        pll_register_string( 'Hero: BD2 P1', 'Asistencia 24 Horas', 'Inicio - Hero' );
        pll_register_string( 'Hero: BD2 P2', 'en todo momento', 'Inicio - Hero' );

        // --- SECCIÓN MEJORES EXPERIENCIAS (Inicio) ---
        pll_register_string( 'Exp: Titulo Principal', 'Nuestras Mejores Experiencias', 'Inicio - Experiencias' );
        pll_register_string( 'Exp: Subtitulo Principal', 'Descubre la magia de los Andes con nuestros tours especializados.', 'Inicio - Experiencias' );
        
        pll_register_string( 'Exp: Card 1 Titulo', 'Culturales y Clásicos', 'Inicio - Experiencias' );
        pll_register_string( 'Exp: Card 1 Texto', 'Descubre la Capital Arqueológica de América y el Valle Sagrado.', 'Inicio - Experiencias' );
        
        pll_register_string( 'Exp: Card 2 Titulo', 'Rituales Místicos', 'Inicio - Experiencias' );
        pll_register_string( 'Exp: Card 2 Texto', 'Conéctate con la Pachamama a través de ceremonias auténticas conducidas por chamanes nativos.', 'Inicio - Experiencias' );
        
        pll_register_string( 'Exp: Card 3 Titulo', 'Aventura en Cuatrimotos', 'Inicio - Experiencias' );
        pll_register_string( 'Exp: Card 3 Texto', 'Siente la adrenalina en rutas exclusivas hacia Maras, Moray o las lagunas de la región.', 'Inicio - Experiencias' );
        
        pll_register_string( 'Exp: Card 4 Titulo', 'Naturaleza y Trekking', 'Inicio - Experiencias' );
        pll_register_string( 'Exp: Card 4 Texto', 'Aventúrate hacia la Montaña de 7 Colores y las espectaculares lagunas turquesas de los Andes.', 'Inicio - Experiencias' );
        
        pll_register_string( 'Exp: CTA Boton', 'Explorar', 'Inicio - Experiencias' );

        // --- SECCIÓN FORMULARIO DE CONTACTO (Inicio) ---
        
        // Lado Izquierdo (Textos visuales)
        pll_register_string( 'Form: Kicker', 'Personaliza tu Viaje', 'Inicio - Formulario' );
        pll_register_string( 'Form: Titulo Visual', 'Viajes diseñados contigo, desde el primer mensaje.', 'Inicio - Formulario' );
        pll_register_string( 'Form: Texto Visual', 'Combinamos atención local, respuesta rápida y acompañamiento real para ayudarte a elegir el itinerario ideal en Cusco y Machu Picchu.', 'Inicio - Formulario' );
        pll_register_string( 'Form: Highlight Num', '+10 años', 'Inicio - Formulario' );
        pll_register_string( 'Form: Highlight Text', 'acompañando experiencias a medida', 'Inicio - Formulario' );
        pll_register_string( 'Form: Punto 1', 'Atención directa por WhatsApp y correo.', 'Inicio - Formulario' );
        pll_register_string( 'Form: Punto 2', 'Recomendaciones según fechas, ritmo y presupuesto.', 'Inicio - Formulario' );
        pll_register_string( 'Form: Punto 3', 'Respuesta desde Cusco con enfoque local.', 'Inicio - Formulario' );

        // Lado Derecho (Cabecera y Alertas)
        pll_register_string( 'Form: Badge', 'Formulario directo', 'Inicio - Formulario' );
        pll_register_string( 'Form: Titulo Form', '¿Listo para vivir la mejor experiencia?', 'Inicio - Formulario' );
        pll_register_string( 'Form: Descripcion Form', 'Dejanos tus datos y nuestros expertos locales en Cusco se pondran en contacto contigo para personalizar tu itinerario.', 'Inicio - Formulario' );
        pll_register_string( 'Form: Alerta Exito', 'Recibimos tu solicitud correctamente. Te contactaremos muy pronto.', 'Inicio - Formulario' );
        pll_register_string( 'Form: Alerta Error', 'No se pudo enviar tu solicitud. Intentalo nuevamente en unos minutos.', 'Inicio - Formulario' );
        pll_register_string( 'Form: Alerta Invalido', 'Revisa los campos obligatorios e intenta nuevamente.', 'Inicio - Formulario' );
        
        // Lado Derecho (Labels y Placeholders de los campos)
        pll_register_string( 'Form: Label Nombre', 'Nombre', 'Inicio - Formulario' );
        pll_register_string( 'Form: Place Nombre', 'Tu nombre completo', 'Inicio - Formulario' );
        pll_register_string( 'Form: Label Email', 'Email', 'Inicio - Formulario' );
        pll_register_string( 'Form: Place Email', 'Tu correo electronico', 'Inicio - Formulario' );
        pll_register_string( 'Form: Label WhatsApp', 'WhatsApp', 'Inicio - Formulario' );
        pll_register_string( 'Form: Place WhatsApp', 'Tu numero de WhatsApp', 'Inicio - Formulario' );
        pll_register_string( 'Form: Label Mensaje', 'Mensaje', 'Inicio - Formulario' );
        pll_register_string( 'Form: Place Mensaje', 'Cuentanos tus preferencias de viaje', 'Inicio - Formulario' );
        
        // Lado Derecho (Botón y nota)
        pll_register_string( 'Form: Nota', 'Te responderemos usando los datos que nos compartas en este formulario.', 'Inicio - Formulario' );
        pll_register_string( 'Form: Boton Enviar', 'Enviar solicitud de asesoria', 'Inicio - Formulario' );
        
        // --- SECCIÓN PAQUETES MÁS VENDIDOS (Inicio) ---
        pll_register_string( 'Paquetes: Titulo', 'Paquetes Más Vendidos', 'Inicio - Paquetes' );
        pll_register_string( 'Paquetes: Subtitulo', 'Itinerarios diseñados para vivir la verdadera esencia andina.', 'Inicio - Paquetes' );
        pll_register_string( 'Paquetes: Boton Todos', 'Ver todos los tours', 'Inicio - Paquetes' );
        
        pll_register_string( 'Paquetes: Label Dias', 'Días', 'Inicio - Paquetes' );
        pll_register_string( 'Paquetes: Label Noches', 'Noches', 'Inicio - Paquetes' );
        pll_register_string( 'Paquetes: Boton Card', 'Explorar Tour', 'Inicio - Paquetes' );
        
        pll_register_string( 'Paquetes: Vacio Titulo', 'Aún no hay paquetes disponibles', 'Inicio - Paquetes' );
        pll_register_string( 'Paquetes: Vacio Texto', 'Ve a tu panel de WordPress y crea tu primer Tour para que aparezca aquí mágicamente.', 'Inicio - Paquetes' );

        // --- SECCIÓN ALIADOS ESTRATÉGICOS (Inicio) ---
        pll_register_string( 'Aliados: Titulo', 'Nuestros Aliados Estratégicos', 'Inicio - Aliados' );

        // --- SECCIÓN TESTIMONIOS (Inicio) ---
        pll_register_string( 'Testimonios: Tag', 'Testimonios', 'Inicio - Testimonios' );
        pll_register_string( 'Testimonios: Titulo', 'Historias reales en un mosaico editorial', 'Inicio - Testimonios' );
        pll_register_string( 'Testimonios: Lead', 'La composición prioriza seis piezas equilibradas: cuatro testimonios beige suave y dos tarjetas de imagen intercaladas, sin una columna de introducción dominante.', 'Inicio - Testimonios' );
        pll_register_string( 'Testimonios: Label Destacada', 'Reseña destacada', 'Inicio - Testimonios' );
        pll_register_string( 'Testimonios: Label Servicio', 'Servicio', 'Inicio - Testimonios' );
        pll_register_string( 'Testimonios: Label Experiencia', 'Experiencia', 'Inicio - Testimonios' );
        pll_register_string( 'Testimonios: Label Logistica', 'Logística', 'Inicio - Testimonios' );
        pll_register_string( 'Testimonios: Imagen 01', 'Imagen 01', 'Inicio - Testimonios' );
        pll_register_string( 'Testimonios: Imagen 02', 'Imagen 02', 'Inicio - Testimonios' );

        // --- SECCIÓN POR QUÉ VIAJAR CON NOSOTROS (Inicio) ---
        pll_register_string( 'Confianza: Titulo Principal', '¿Por qué viajar con nosotros?', 'Inicio - Confianza' );
        pll_register_string( 'Confianza: Titulo 1', 'Asistencia 24 Horas', 'Inicio - Confianza' );
        pll_register_string( 'Confianza: Texto 1', 'Viaje sin preocupaciones con nuestro equipo a su disposición, garantizando su seguridad y comodidad en todo momento.', 'Inicio - Confianza' );
        pll_register_string( 'Confianza: Titulo 2', 'Atención Personalizada', 'Inicio - Confianza' );
        pll_register_string( 'Confianza: Texto 2', 'Organizamos juntos el viaje de sus sueños, de acuerdo con su disponibilidad de fechas y preferencias.', 'Inicio - Confianza' );
        pll_register_string( 'Confianza: Titulo 3', 'Practicidad y Comodidad', 'Inicio - Confianza' );
        pll_register_string( 'Confianza: Texto 3', 'Contamos con oficinas y equipo propio en Machu Picchu y Cusco. Salidas diarias disponibles para todos nuestros itinerarios.', 'Inicio - Confianza' );
        pll_register_string( 'Confianza: Titulo 4', 'Dominio Cultural', 'Inicio - Confianza' );
        pll_register_string( 'Confianza: Texto 4', 'Nuestro equipo comprende profundamente el perfil del turista brasileño e hispanohablante. Ofrecemos una experiencia auténtica y de alto nivel.', 'Inicio - Confianza' );

        // --- PIE DE PÁGINA (Footer) ---
        pll_register_string( 'Footer: Descripcion', 'Operadores 100% locales en los Andes. Especialistas en el público brasilero e hispanohablante. Garantizamos experiencias inolvidables, auténticas y profundamente transformadoras.', 'Pie de Pagina' );
        
        pll_register_string( 'Footer: Titulo Enlaces', 'Enlaces Rápidos', 'Pie de Pagina' );
        pll_register_string( 'Footer: Link Inicio', 'Inicio', 'Pie de Pagina' );
        pll_register_string( 'Footer: Link Nosotros', 'Quiénes Somos', 'Pie de Pagina' );
        pll_register_string( 'Footer: Link Circuitos', 'Circuitos Machu Picchu', 'Pie de Pagina' );
        pll_register_string( 'Footer: Link Politicas', 'Políticas y Reservas', 'Pie de Pagina' );
        pll_register_string( 'Footer: Link Contacto', 'Contacto', 'Pie de Pagina' );
        
        pll_register_string( 'Footer: Titulo Contacto', 'Contáctanos', 'Pie de Pagina' );
        pll_register_string( 'Footer: Direccion P1', 'Calle Inka Simpa-L1', 'Pie de Pagina' );
        pll_register_string( 'Footer: Direccion P2', 'Machupicchu Pueblo, Cusco - Perú', 'Pie de Pagina' );
        
        pll_register_string( 'Footer: Titulo Newsletter', 'Suscríbete', 'Pie de Pagina' );
        pll_register_string( 'Footer: Texto Newsletter', 'Suscríbete a nuestro boletín para recibir actualizaciones rápidas y ofertas exclusivas.', 'Pie de Pagina' );
        pll_register_string( 'Footer: Label Newsletter', 'Tu Correo Electrónico', 'Pie de Pagina' );
        pll_register_string( 'Footer: Boton Newsletter', 'SUSCRIBIRSE', 'Pie de Pagina' );
        
        pll_register_string( 'Footer: Copyright', '© 2026 Viagens Machu Picchu Brasil. Todos los derechos reservados.', 'Pie de Pagina' );
        pll_register_string( 'Footer: Link Privacidad', 'Privacidad', 'Pie de Pagina' );
        pll_register_string( 'Footer: Link Terminos', 'Términos y Condiciones', 'Pie de Pagina' );
    }
});