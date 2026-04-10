<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
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
                        <a href="<?php echo esc_url(home_url('/pagos')); ?>" class="text-decoration-none text-dark"><i class="bi bi-credit-card-fill me-1"></i> Pagos</a>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-decoration-none text-dark"><i class="bi bi-journal-text me-1"></i> Blog</a>
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
                            <a class="nav-link dropdown-toggle py-2" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.9rem;">Machu Picchu</a>

                            <div class="dropdown-menu mega-menu-content shadow-lg border-0 mt-0 rounded-0">
                                <div class="row gx-4 align-items-stretch">
                                    <div class="col-lg-3 mb-3 mb-lg-0 pe-lg-4">
                                        <h6 class="fw-bold text-primary mb-3 text-uppercase mega-menu-title">Destinos Clásicos</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                                            <li><a href="<?php echo esc_url(home_url('/tours/servicio-de-guia-para-machupicchu')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Servicio de Guía para Machupicchu</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/machupicchu-y-valle-sagrado')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Machupicchu y Valle Sagrado</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/machupicchu-full-day')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Machupicchu Full Day</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/tour-guiado-compartido-premium')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Tour Guiado Compartido Premium</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-9 ps-lg-4">
                                        <div class="row g-2">
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/servicio-de-guia-para-machupicchu')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mp-1.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Servicio de Guía</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/machupicchu-y-valle-sagrado')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mp-2.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Machupicchu y Valle Sagrado</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/machupicchu-full-day')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mp-3.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Machupicchu Full Day</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/tour-guiado-compartido-premium')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mp-4.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Tour Compartido Premium</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle py-2" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.9rem;">Cusco</a>
                            <div class="dropdown-menu mega-menu-content shadow-lg border-0 mt-0 rounded-0">
                                <div class="row gx-4 align-items-stretch">
                                    <div class="col-lg-3 mb-3 mb-lg-0 pe-lg-4">
                                        <h6 class="fw-bold text-primary mb-3 text-uppercase mega-menu-title">Destinos Clásicos</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                                            <li><a href="<?php echo esc_url(home_url('/tours/city-tour')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>City Tour</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/tour-valle-sagrado')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Tour Valle Sagrado</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/circuito-de-las-7-lagunas-de-ausangate')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>7 Lagunas de Ausangate</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/chinchero-maras-moray')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Chinchero – Maras – Moray</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/valle-sur')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Valle Sur</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-9 ps-lg-4">
                                        <div class="row g-2">
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/city-tour')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cusco-1.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">City Tour</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/tour-valle-sagrado')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cusco-2.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Tour Valle Sagrado</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/circuito-de-las-7-lagunas-de-ausangate')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cusco-3.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">7 Lagunas Ausangate</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/chinchero-maras-moray')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cusco-4.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Chinchero, Maras y Moray</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle py-2" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.9rem;">Aventura</a>
                            <div class="dropdown-menu mega-menu-content shadow-lg border-0 mt-0 rounded-0">
                                <div class="row gx-4 align-items-stretch">
                                    <div class="col-lg-3 mb-3 mb-lg-0 pe-lg-4">
                                        <h6 class="fw-bold text-primary mb-3 text-uppercase mega-menu-title">Rutas Altas</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                                            <li><a href="<?php echo esc_url(home_url('/tours/montana-de-7-colores-vinincunca')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Montaña de 7 Colores</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/laguna-humantay')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Laguna Humantay</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/7-lagunas-de-ausangate')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>7 Lagunas de Ausangate</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/montana-palccoyo')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Montaña Palccoyo</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-9 ps-lg-4">
                                        <div class="row g-2">
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/montana-de-7-colores-vinincunca')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/adv-1.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Montaña de 7 Colores</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/laguna-humantay')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/adv-2.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Laguna Humantay</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/7-lagunas-de-ausangate')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/adv-3.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">7 Lagunas Ausangate</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/montana-palccoyo')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/adv-4.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Montaña Palccoyo</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle py-2" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.9rem;">Místico</a>
                            <div class="dropdown-menu mega-menu-content shadow-lg border-0 mt-0 rounded-0">
                                <div class="row gx-4 align-items-stretch">
                                    <div class="col-lg-3 mb-3 mb-lg-0 pe-lg-4">
                                        <h6 class="fw-bold text-primary mb-3 text-uppercase mega-menu-title">Ceremonias</h6>
                                        <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
                                            <li><a href="<?php echo esc_url(home_url('/tours/pago-a-la-tierra')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Ofrenda a la Pachamama</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/matrimonio-andino')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Matrimonio Andino</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/?tipo_tour=ceremonias-y-retiros')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Ceremonias Ancestrales</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/tours/lectura-de-hoja-de-coca')); ?>" class="text-decoration-none mega-menu-link text-uppercase"><i class="bi bi-chevron-right me-2"></i>Lectura de Hoja de Coca</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-9 ps-lg-4">
                                        <div class="row g-2">
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/pago-a-la-tierra')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mis-1.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Ofrenda a la Pachamama</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/matrimonio-andino')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mis-2.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Matrimonio Andino</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/?tipo_tour=ceremonias-y-retiros')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mis-3.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Ceremonias Ancestrales</span></a>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <a href="<?php echo esc_url(home_url('/tours/lectura-de-hoja-de-coca')); ?>" class="mega-menu-card rounded-0 text-decoration-none d-flex align-items-end p-3" style="background-image: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0) 50%), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mis-4.webp');"><span class="text-white fw-bold fs-6 text-shadow-dark text-uppercase lh-sm">Lectura de Coca</span></a>
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
