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

    <header class="site-header fixed-top bg-white border-bottom shadow-sm transition-all">

        <!-- Main Navbar -->
        <nav class="navbar navbar-expand-lg py-2 transition-all" id="main-nav">
            <!-- Usamos container-fluid px-lg-5 con justify-content-between nativo de navbar -->
            <div class="container-fluid px-lg-5">

                <!-- GRUPO IZQUIERDO: Logo + Menú -->
                <div class="d-flex align-items-center">
                    <!-- Logo Left -->
                    <a class="navbar-brand me-2 me-lg-4" href="<?php echo esc_url(home_url('/')); ?>">
                        <?php
                        if (has_custom_logo()) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            // Ensure we actually got an image back
                            if ($logo) {
                                echo '<img src="' . esc_url($logo[0]) . '" alt="Viagens Machupicchu" class="header-logo transition-all" style="max-height: 50px; width: auto;">';
                            } else {
                                // Fallback if ID exists but image doesn't load
                                echo '<h1 class="m-0 fs-3 fw-bold text-primary header-logo-text transition-all" style="font-family: \'Yanone Kaffeesatz\', sans-serif; letter-spacing: 1px;">Viagens Machupicchu</h1>';
                            }
                        } else {
                            echo '<h1 class="m-0 fs-3 fw-bold text-primary header-logo-text transition-all" style="font-family: \'Yanone Kaffeesatz\', sans-serif; letter-spacing: 1px;">Viagens Machupicchu</h1>';
                        }
                        ?>
                    </a>

                    <!-- Toggler Mobile -->
                    <button class="navbar-toggler border-0 focus-ring focus-ring-light p-0 d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Menú">
                        <i class="bi bi-list text-dark fs-1 transition-all" id="navbar-toggler-icon"></i>
                    </button>

                    <!-- Desktop Menu -->
                    <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                        <!-- Navigation Menu -->
                        <ul class="navbar-nav me-auto gap-lg-3 fw-semibold text-uppercase align-items-lg-center">
                            <li class="nav-item">
                                <a class="nav-link text-dark py-lg-3" href="<?php echo esc_url(home_url('/')); ?>" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                                    Inicio
                                </a>
                            </li>

                            <!-- Machu Picchu Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark py-lg-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                                    Machu Picchu
                                </a>
                                <ul class="dropdown-menu border-0 shadow-sm rounded-0 mt-0">
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/servicio-de-guia-para-machupicchu')); ?>">Servicio de Guía</a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/machupicchu-y-valle-sagrado')); ?>">Machupicchu &amp; Valle Sagrado</a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/machupicchu-full-day')); ?>">Machupicchu Full Day</a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/tour-guiado-compartido-premium')); ?>">Compartido Premium</a></li>
                                </ul>
                            </li>

                            <!-- Cusco Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark py-lg-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                                    Cusco
                                </a>
                                <ul class="dropdown-menu border-0 shadow-sm rounded-0 mt-0">
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/city-tour')); ?>">City Tour</a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/tour-valle-sagrado')); ?>">Valle Sagrado</a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/chinchero-maras-moray')); ?>">Maras y Moray</a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/valle-sur')); ?>">Valle Sur</a></li>
                                </ul>
                            </li>

                            <!-- Aventura Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark py-lg-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                                    Aventura
                                </a>
                                <ul class="dropdown-menu border-0 shadow-sm rounded-0 mt-0">
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/montana-de-7-colores-vinincunca')); ?>">Montaña de 7 Colores</a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/laguna-humantay')); ?>">Laguna Humantay</a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/7-lagunas-de-ausangate')); ?>">7 Lagunas de Ausangate</a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/montana-palccoyo')); ?>">Montaña Palccoyo</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link py-lg-3 text-dark" href="<?php echo esc_url(home_url('/aventura-en-cuatrimotos')); ?>" style="font-size: 0.8rem; letter-spacing: 0.5px;">Cuatrimotos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-lg-3 text-dark" href="<?php echo esc_url(home_url('/nosotros')); ?>" style="font-size: 0.8rem; letter-spacing: 0.5px;">Nosotros</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- GRUPO DERECHO: Contactos & CTA -->
                <div class="d-none d-lg-flex align-items-center gap-3 gap-lg-4">
                    <!-- Quick Links (Optional, added for functionality) -->
                    <div class="d-flex gap-3 border-end pe-3">
                        <a href="<?php echo esc_url(home_url('/pagos')); ?>" class="text-dark text-decoration-none fw-semibold opacity-75 hover-opacity" style="font-size: 0.7rem;">PAGOS</a>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-dark text-decoration-none fw-semibold opacity-75 hover-opacity" style="font-size: 0.7rem;">BLOG</a>
                    </div>

                    <!-- Email -->
                    <a href="mailto:info@viagensmachupicchubrasil.com" class="text-dark text-decoration-none d-flex align-items-center gap-2 opacity-75 hover-opacity" style="font-size: 0.75rem;">
                        <i class="bi bi-envelope fs-6 text-primary"></i>
                    </a>

                    <!-- Social -->
                    <div class="social-links d-flex gap-3">
                        <a href="#" class="text-dark text-decoration-none opacity-75 hover-opacity"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-dark text-decoration-none opacity-75 hover-opacity"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-dark text-decoration-none opacity-75 hover-opacity"><i class="bi bi-youtube"></i></a>
                    </div>

                    <!-- CTA -->
                    <a href="https://wa.me/51990725647" target="_blank" class="btn btn-primary rounded-0 px-3 py-2 fw-bold text-uppercase d-inline-flex align-items-center justify-content-center gap-2 transition-all shadow-sm text-nowrap" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                        <i class="bi bi-whatsapp"></i> +51 990 725 647
                    </a>
                </div>

            </div>
        </nav>

    </header>