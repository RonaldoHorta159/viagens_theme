<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

    <style>
        /* Efectos de tarjetas e imágenes */
        .mega-menu-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Proporción exacta 400x500 (4:5) */
            aspect-ratio: 4 / 5;
            width: 100%;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
        }

        .mega-menu-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15) !important;
        }

        .text-shadow-dark {
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        }

        .custom-hover:hover {
            color: var(--bs-primary) !important;
            padding-left: 5px;
            transition: all 0.3s ease;
        }

        /* Mega Menú a todo el ancho del contenedor */
        @media (min-width: 992px) {

            /* El nav-item cede su posición al contenedor padre */
            .navbar .nav-item.mega-menu {
                position: static;
            }

            /* El menú desplegable ocupa el 100% del contenedor padre */
            .navbar .dropdown-menu.mega-menu-content {
                width: 100%;
                left: 0;
                right: 0;
                border-top: 3px solid var(--bs-primary);
            }

            /* Activación por Hover */
            .navbar .dropdown:hover .dropdown-menu {
                display: block;
                visibility: visible;
                opacity: 1;
                margin-top: 0;
                transition: all 0.3s ease;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header">

        <div class="top-header py-1 bg-white">
            <div class="container d-flex flex-wrap justify-content-between align-items-center">

                <div class="logo-container py-1">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-decoration-none">
                        <?php
                        if (has_custom_logo()) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            echo '<img src="' . esc_url($logo[0]) . '" alt="Viagens Machupicchu" style="max-height: 55px; width: auto;">';
                        } else {
                            echo '<h1 class="m-0 fs-4 fw-bold text-primary">Viagens Machupicchu</h1>';
                        }
                        ?>
                    </a>
                </div>

                <div class="contact-area d-none d-lg-flex flex-column align-items-end justify-content-center">
                    <div class="quick-links mb-1 d-flex gap-3 fw-bold text-dark" style="font-size: 0.8rem;">
                        <a href="#" class="text-decoration-none text-dark"><i class="bi bi-credit-card-fill me-1"></i> Pagos</a>
                        <a href="#" class="text-decoration-none text-dark"><i class="bi bi-journal-text me-1"></i> Blog</a>
                        <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="text-decoration-none text-dark"><i class="bi bi-envelope-fill me-1"></i> Contacto</a>
                    </div>
                    <div class="contact-info d-flex gap-3 text-secondary" style="font-size: 0.85rem;">
                        <span><i class="bi bi-envelope text-primary"></i> info@viagensmachupicchubrasil.com</span>
                        <span><i class="bi bi-whatsapp text-success"></i> +51990725647</span>
                        <span><i class="bi bi-star-fill text-warning"></i> Tripadvisor</span>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg bg-white sticky-top border-bottom border-top py-0 shadow-sm">
            <div class="container position-relative">

                <button class="navbar-toggler my-1 border-0 focus-ring focus-ring-primary" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Menú">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="main-nav">

                    <ul class="navbar-nav gap-lg-4 fw-bold text-uppercase align-items-lg-center">

                        <li class="nav-item">
                            <a class="nav-link py-2" href="<?php echo esc_url(home_url('/')); ?>" style="font-size: 0.9rem;">Inicio</a>
                        </li>

                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.9rem;">Machu Picchu</a>

                            <div class="dropdown-menu mega-menu-content shadow-lg border-0 mt-0 p-lg-3 rounded-0">
                                <div class="row gx-4 align-items-stretch">
                                    <div class="col-lg-3 mb-3 mb-lg-0 border-end">
                                        <h6 class="fw-bold text-primary mb-2 text-uppercase pb-1">Destinos Clásicos</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-2 text-capitalize mb-0" style="font-size: 0.85rem;">
                                            <li><a href="<?php echo esc_url(home_url('/tours/servicio-de-guia-para-machupicchu')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>SERVICIO DE GUÍA PARA MACHUPICCHU</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/machupicchu-y-valle-sagrado')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>MACHUPICCHU Y VALLE SAGRADO</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/machupicchu-full-day')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>MACHUPICCHU FULL DAY</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/tour-guiado-compartido-premium')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>TOUR GUIADO COMPARTIDO PREMIUM</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row g-2">
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/servicio-de-guia-para-machupicchu')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/mp-1.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Servicio de Guía</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/machupicchu-y-valle-sagrado')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/mp-2.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Machupicchu y Valle Sagrado</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/machupicchu-full-day')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/mp-3.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Machupicchu Full Day</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/tour-guiado-compartido-premium')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/mp-4.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Tour Compartido Premium</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.9rem;">Cusco</a>
                            <div class="dropdown-menu mega-menu-content shadow-lg border-0 mt-0 p-lg-3 rounded-0">
                                <div class="row gx-4 align-items-stretch">
                                    <div class="col-lg-3 mb-3 mb-lg-0 border-end">
                                        <h6 class="fw-bold text-primary mb-2 text-uppercase pb-1">Destinos Clásicos</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-2 text-capitalize mb-0" style="font-size: 0.85rem;">
                                            <li><a href="<?php echo esc_url(home_url('/tours/city-tour')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>CITY TOUR</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/tour-valle-sagrado')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>TOUR VALLE SAGRADO</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/circuito-de-las-7-lagunas-de-ausangate')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>CIRCUITO DE LAS 7 LAGUNAS DE AUSANGATE</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/chinchero-maras-moray')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>CHINCHERO – MARAS – MORAY</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/valle-sur')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>VALLE SUR</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row g-2">
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/city-tour')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/cusco-1.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">City Tour</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/tour-valle-sagrado')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/cusco-2.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Tour Valle Sagrado</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/circuito-de-las-7-lagunas-de-ausangate')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/cusco-3.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">7 Lagunas de Ausangate</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/chinchero-maras-moray')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/cusco-4.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Chinchero, Maras y Moray</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.9rem;">Aventura</a>
                            <div class="dropdown-menu mega-menu-content shadow-lg border-0 mt-0 p-lg-3 rounded-0">
                                <div class="row gx-4 align-items-stretch">
                                    <div class="col-lg-3 mb-3 mb-lg-0 border-end">
                                        <h6 class="fw-bold text-primary mb-2 text-uppercase pb-1">Rutas Altas</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-2 text-capitalize mb-0" style="font-size: 0.85rem;">
                                            <li><a href="<?php echo esc_url(home_url('/tours/montana-de-7-colores-vinincunca')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>MONTAÑA DE 7 COLORES</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/laguna-humantay')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>LAGUNA HUMANTAY</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/7-lagunas-de-ausangate')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>7 LAGUNAS DE AUSANGATE</a></li>
                                            <li><a href="<?php echo esc_url(home_url('tours/montana-palccoyo')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>MONTAÑA PALCCOYO</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row g-2">
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/montana-de-7-colores-vinincunca')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/adv-1.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Montaña de 7 Colores</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/laguna-humantay')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/adv-2.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Laguna Humantay</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/7-lagunas-de-ausangate')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/adv-3.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">7 Lagunas de Ausangate</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/montana-palccoyo')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/adv-4.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Montaña Palccoyo</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.9rem;">Místico</a>
                            <div class="dropdown-menu mega-menu-content shadow-lg border-0 mt-0 p-lg-3 rounded-0">
                                <div class="row gx-4 align-items-stretch">
                                    <div class="col-lg-3 mb-3 mb-lg-0 border-end">
                                        <h6 class="fw-bold text-primary mb-2 text-uppercase pb-1">Ceremonias</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-2 text-capitalize mb-0" style="font-size: 0.85rem;">
                                            <li><a href="<?php echo esc_url(home_url('/tours/pago-a-la-tierra')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>Ofrenda A La Pachamama</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/matrimonio-andino')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>Matrimonio Andino</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/?tipo_tour=ceremonias-y-retiros')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>Ceremonias Ancestrales</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/lectura-de-hoja-de-coca')); ?>" class="text-decoration-none text-dark custom-hover"><i class="bi bi-chevron-right text-primary me-1"></i>Lectura De Hoja De Coca</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row g-2">
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/pago-a-la-tierra')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/mis-1.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Ofrenda a la Pachamama</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/matrimonio-andino')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/mis-2.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Matrimonio Andino</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/?tipo_tour=ceremonias-y-retiros')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/mis-3.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Ceremonias Ancestrales</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/lectura-de-hoja-de-coca')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo get_template_directory_uri(); ?>/assets/images/mis-4.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark">Lectura de Hoja de Coca</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-2 text-primary" href="<?php echo esc_url(home_url('/aventura-en-cuatrimotos')); ?>" style="font-size: 0.9rem; font-weight: 800;">
                                <i class="bi bi-star-fill text-warning me-1"></i> Cuatrimotos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2" href="<?php echo esc_url(home_url('/nosotros')); ?>" style="font-size: 0.9rem;">Nosotros</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>