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
    <?php
    $tours_archive_url = home_url('/tours/');
    $cuatrimoto_montana_url = add_query_arg(
        array(
            'tipo_tour' => 'cuatrimotos',
            's'         => 'Montaña de Colores',
        ),
        $tours_archive_url
    );
    $cuatrimoto_maras_url = add_query_arg(
        array(
            'tipo_tour' => 'cuatrimotos',
            's'         => 'Salineras de Maras y Moray',
        ),
        $tours_archive_url
    );
    $cuatrimoto_lagunas_url = add_query_arg(
        array(
            'tipo_tour' => 'cuatrimotos',
            's'         => 'Laguna Piuray Laguna Huaypo',
        ),
        $tours_archive_url
    );
    ?>
    <style>
        .languages-switcher,
        .languages-switcher li {
            list-style: none;
        }

        .languages-switcher li {
            display: inline-flex;
            align-items: center;
        }

        .languages-switcher a {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            color: #212529;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            opacity: 0.75;
        }

        .languages-switcher a:hover,
        .languages-switcher a:focus {
            opacity: 1;
        }

        .languages-switcher img {
            display: block;
            width: 18px;
            height: auto;
            border-radius: 50%;
        }
    </style>

    <header class="site-header fixed-top bg-white border-bottom shadow-sm transition-all">

        <!-- Main Navbar -->
        <nav class="navbar navbar-expand-lg py-2 transition-all" id="main-nav">
            <!-- Usamos container-fluid px-lg-5 con justify-content-between nativo de navbar -->
            <div class="container-fluid px-lg-5">

                <!-- GRUPO IZQUIERDO: Logo + Menú -->
                <div class="d-flex align-items-center">
                    <!-- Logo Left -->
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                    ?>
                        <a class="navbar-brand me-2 me-lg-4" href="<?php echo esc_url(home_url('/')); ?>">
                            <h1 class="m-0 fs-3 fw-bold text-primary header-logo-text transition-all">Viagens Machupicchu</h1>
                        </a>
                    <?php
                    }
                    ?>

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
                                    <?php
                                    if (function_exists('pll_e')) {
                                        pll_e('Inicio');
                                    } else {
                                        echo 'Inicio';
                                    }
                                    ?>
                                </a>
                            </li>

                            <!-- Machu Picchu Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark py-lg-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                                    <?php
                                    if (function_exists('pll_e')) {
                                        pll_e('Machu Picchu');
                                    } else {
                                        echo 'Machu Picchu';
                                    }
                                    ?>
                                </a>
                                <ul class="dropdown-menu border-0 shadow-sm rounded-0 mt-0">
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/servicio-de-guia-para-machupicchu')); ?>"><?php if (function_exists('pll_e')) { pll_e('Servicio de Guía'); } else { echo 'Servicio de Guía'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/machupicchu-y-valle-sagrado')); ?>"><?php if (function_exists('pll_e')) { pll_e('Machupicchu & Valle Sagrado'); } else { echo 'Machupicchu &amp; Valle Sagrado'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/machupicchu-full-day')); ?>"><?php if (function_exists('pll_e')) { pll_e('Machupicchu Full Day'); } else { echo 'Machupicchu Full Day'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/tour-guiado-compartido-premium')); ?>"><?php if (function_exists('pll_e')) { pll_e('Compartido Premium'); } else { echo 'Compartido Premium'; } ?></a></li>
                                </ul>
                            </li>

                            <!-- Cusco Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark py-lg-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                                    <?php
                                    if (function_exists('pll_e')) {
                                        pll_e('Cusco');
                                    } else {
                                        echo 'Cusco';
                                    }
                                    ?>
                                </a>
                                <ul class="dropdown-menu border-0 shadow-sm rounded-0 mt-0">
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/city-tour')); ?>"><?php if (function_exists('pll_e')) { pll_e('City Tour'); } else { echo 'City Tour'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/tour-valle-sagrado')); ?>"><?php if (function_exists('pll_e')) { pll_e('Valle Sagrado'); } else { echo 'Valle Sagrado'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/chinchero-maras-moray')); ?>"><?php if (function_exists('pll_e')) { pll_e('Maras y Moray'); } else { echo 'Maras y Moray'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/valle-sur')); ?>"><?php if (function_exists('pll_e')) { pll_e('Valle Sur'); } else { echo 'Valle Sur'; } ?></a></li>
                                </ul>
                            </li>

                            <!-- Aventura Dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark py-lg-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                                    <?php
                                    if (function_exists('pll_e')) {
                                        pll_e('Aventura');
                                    } else {
                                        echo 'Aventura';
                                    }
                                    ?>
                                </a>
                                <ul class="dropdown-menu border-0 shadow-sm rounded-0 mt-0">
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/montana-de-7-colores-vinincunca')); ?>"><?php if (function_exists('pll_e')) { pll_e('Montaña de 7 Colores'); } else { echo 'Montaña de 7 Colores'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/laguna-humantay')); ?>"><?php if (function_exists('pll_e')) { pll_e('Laguna Humantay'); } else { echo 'Laguna Humantay'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/7-lagunas-de-ausangate')); ?>"><?php if (function_exists('pll_e')) { pll_e('7 Lagunas de Ausangate'); } else { echo '7 Lagunas de Ausangate'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url(home_url('/tours/montana-palccoyo')); ?>"><?php if (function_exists('pll_e')) { pll_e('Montaña Palccoyo'); } else { echo 'Montaña Palccoyo'; } ?></a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><span class="dropdown-item-text text-uppercase fw-bold text-primary" style="font-size: 0.7rem; letter-spacing: 0.5px;"><?php if (function_exists('pll_e')) { pll_e('Cuatrimotos'); } else { echo 'Cuatrimotos'; } ?></span></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url($cuatrimoto_montana_url); ?>"><?php if (function_exists('pll_e')) { pll_e('Cuatrimotos a Montaña de Colores'); } else { echo 'Cuatrimotos a Montaña de Colores'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url($cuatrimoto_maras_url); ?>"><?php if (function_exists('pll_e')) { pll_e('Cuatrimotos a Salineras de Maras y Moray'); } else { echo 'Cuatrimotos a Salineras de Maras y Moray'; } ?></a></li>
                                    <li><a class="dropdown-item text-uppercase fw-semibold" style="font-size: 0.75rem;" href="<?php echo esc_url($cuatrimoto_lagunas_url); ?>"><?php if (function_exists('pll_e')) { pll_e('Cuatrimotos a Laguna Piuray + Laguna Huaypo'); } else { echo 'Cuatrimotos a Laguna Piuray + Laguna Huaypo'; } ?></a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link py-lg-3 text-dark" href="<?php echo esc_url(home_url('/#paquetes-mas-vendidos')); ?>" style="font-size: 0.8rem; letter-spacing: 0.5px;"><?php if (function_exists('pll_e')) { pll_e('Lo mejor de Perú'); } else { echo 'Lo mejor de Perú'; } ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link py-lg-3 text-dark" href="<?php echo esc_url(home_url('/nosotros')); ?>" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                                    <?php
                                    if (function_exists('pll_e')) {
                                        pll_e('Nosotros');
                                    } else {
                                        echo 'Nosotros';
                                    }
                                    ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- GRUPO DERECHO: Contactos & CTA -->
                <div class="d-none d-lg-flex align-items-center gap-3 gap-lg-4">
                    <!-- Quick Links (Optional, added for functionality) -->
                    <div class="d-flex gap-3 border-end pe-3">
                        <a href="<?php echo esc_url(home_url('/pagos')); ?>" class="text-dark text-decoration-none fw-semibold opacity-75 hover-opacity" style="font-size: 0.7rem;"><?php if (function_exists('pll_e')) { pll_e('PAGOS'); } else { echo 'PAGOS'; } ?></a>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="text-dark text-decoration-none fw-semibold opacity-75 hover-opacity" style="font-size: 0.7rem;"><?php if (function_exists('pll_e')) { pll_e('BLOG'); } else { echo 'BLOG'; } ?></a>
                    </div>

                    <?php
                    if (function_exists('pll_the_languages')) {
                        echo '<ul class="languages-switcher d-flex gap-2 list-unstyled m-0 p-0 align-items-center border-end pe-3" style="font-size: 0.7rem;">';
                        pll_the_languages(array(
                            'show_flags' => 1,
                            'show_names' => 1,
                            'dropdown'   => 0
                        ));
                        echo '</ul>';
                    }
                    ?>

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
