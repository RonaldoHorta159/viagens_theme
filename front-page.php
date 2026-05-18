<?php

/**
 * Plantilla de la página de inicio (Front Page)
 *
 * @package viagens-theme
 */

get_header(); ?>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">

<main id="primary" class="site-main">

    <section class="hero-grid container-fluid p-0 position-relative">
        <div class="hero-progress-bar" aria-hidden="true">
            <span class="hero-progress-fill"></span>
        </div>
        <div class="row g-0" style="height: 100vh; min-height: 600px;">
            <!-- Left Side: Carousel -->
            <div class="col-12 col-lg-8 p-0 position-relative" style="height: 100%;">
                <div id="heroCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-pause="false" data-bs-interval="5000">
                    <!-- Indicators -->
                    <div class="carousel-indicators justify-content-start" style="margin-left: 5%; margin-bottom: 2rem;">
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    
                    <div class="carousel-inner h-100">
                        <!-- Item 1 -->
                        <div class="carousel-item active h-100">
                            <div class="w-100 h-100" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mp-1.webp'); background-size: cover; background-position: center;">
                                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 60%, rgba(0,0,0,0) 100%);"></div>
                                <div class="container h-100 d-flex align-items-center position-relative" style="z-index: 2;">
                                    <div class="row w-100">
                                        <div class="col-md-10 col-lg-9 ps-md-5">
                                            <h1 class="display-3 fw-bold text-white mb-3 text-uppercase text-shadow-dark hero-animated-element hero-title" style="line-height: 1.1;">
                                                El viaje de<br>tus sueños
                                            </h1>
                                            <p class="text-white fs-5 mb-4 hero-animated-element hero-text" style="max-width: 500px;">
                                                Organizamos juntos el viaje de sus sueños, de acuerdo con su disponibilidad de fechas y preferencias, garantizando su seguridad y comodidad.
                                            </p>
                                            <div class="price-info text-white mt-4 hero-animated-element hero-price">
                                                <div class="mb-1">
                                                    <span class="fs-2 text-warning" style="font-family: 'Caveat', cursive; font-weight: bold;">Machu Picchu</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="carousel-item h-100">
                            <div class="w-100 h-100" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mp-2.webp'); background-size: cover; background-position: center;">
                                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 60%, rgba(0,0,0,0) 100%);"></div>
                                <div class="container h-100 d-flex align-items-center position-relative" style="z-index: 2;">
                                    <div class="row w-100">
                                        <div class="col-md-10 col-lg-9 ps-md-5">
                                            <h1 class="display-3 fw-bold text-white mb-3 text-uppercase text-shadow-dark hero-animated-element hero-title" style="line-height: 1.1;">
                                                Auténtica cultura<br>Andina
                                            </h1>
                                            <p class="text-white fs-5 mb-4 hero-animated-element hero-text" style="max-width: 500px;">
                                                Nuestro equipo comprende profundamente el perfil del turista y domina nuestra cultura, geografía e historia para ofrecerte una experiencia de alto nivel.
                                            </p>
                                            <div class="price-info text-white mt-4 hero-animated-element hero-price">
                                                <div class="mb-1">
                                                    <span class="fs-2 text-warning" style="font-family: 'Caveat', cursive; font-weight: bold;">Tours Tradicionales</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="carousel-item h-100">
                            <div class="w-100 h-100" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/mp-3.webp'); background-size: cover; background-position: center;">
                                <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 60%, rgba(0,0,0,0) 100%);"></div>
                                <div class="container h-100 d-flex align-items-center position-relative" style="z-index: 2;">
                                    <div class="row w-100">
                                        <div class="col-md-10 col-lg-9 ps-md-5">
                                            <h1 class="display-3 fw-bold text-white mb-3 text-uppercase text-shadow-dark hero-animated-element hero-title" style="line-height: 1.1;">
                                                Conexión<br>Mística
                                            </h1>
                                            <p class="text-white fs-5 mb-4 hero-animated-element hero-text" style="max-width: 500px;">
                                                Descubre rituales espirituales trascendentes y comprende su profunda relación con la cosmovisión andina junto a auténticos chamanes nativos.
                                            </p>
                                            <div class="price-info text-white mt-4 hero-animated-element hero-price">
                                                <div class="mb-1">
                                                    <span class="fs-2 text-warning" style="font-family: 'Caveat', cursive; font-weight: bold;">Experiencias Místicas</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: 2 Static Images -->
            <div class="col-lg-4 d-none d-lg-flex flex-column p-0" style="height: 100%;">
                <!-- Top Image -->
                <div class="flex-grow-1 position-relative border-start border-bottom border-white border-2 overflow-hidden">
                    <div class="w-100 h-100 transition-transform" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-img.webp'); background-size: cover; background-position: center; transition: transform 0.6s ease;"></div>
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 50%);"></div>
                    <div class="position-absolute bottom-0 start-0 p-4 w-100 z-3" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-white fw-bold text-uppercase fs-4 mb-0 text-shadow-dark" style="line-height: 1.2;">
                            Atención<br>Personalizada
                        </h3>
                    </div>
                </div>
                
                <!-- Bottom Image -->
                <div class="flex-grow-1 position-relative border-start border-white border-2 overflow-hidden">
                    <div class="w-100 h-100 transition-transform" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-img-2.webp'); background-size: cover; background-position: center; transition: transform 0.6s ease;"></div>
                    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 50%);"></div>
                    <div class="position-absolute bottom-0 start-0 p-4 w-100 z-3" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="text-white fw-bold text-uppercase fs-4 mb-0 text-shadow-dark" style="line-height: 1.2;">
                            Asistencia 24 Horas<br>en todo momento
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .text-shadow-dark {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero-progress-bar {
            position: absolute;
            top: clamp(72px, 7vw, 92px);
            left: 0;
            width: 100%;
            height: 3px;
            background: rgba(255, 255, 255, 0.18);
            z-index: 20;
            overflow: hidden;
            pointer-events: none;
        }

        .hero-progress-fill {
            display: block;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.72);
            transform-origin: left center;
            animation: heroProgress 5s linear infinite;
        }
        
        /* Animaciones para el Carrusel */
        @keyframes heroProgress {
            0% {
                transform: scaleX(0);
            }
            100% {
                transform: scaleX(1);
            }
        }

        @keyframes slideInFromRight {
            0% {
                opacity: 0;
                transform: translateX(100px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInFromRightText {
            0% {
                opacity: 0;
                transform: translateX(100px);
            }
            100% {
                opacity: 0.95;
                transform: translateX(0);
            }
        }

        /* Ocultar elementos cuando el slide no está activo */
        .carousel-item:not(.active) .hero-animated-element {
            opacity: 0;
            transform: translateX(100px); /* Mantenerlos a la derecha mientras están ocultos */
        }

        .carousel-item.active .hero-title {
            animation: slideInFromRight 1.2s cubic-bezier(0.25, 0.8, 0.25, 1) forwards;
            animation-delay: 0.3s;
            opacity: 0; /* Asegurar que inicien invisibles */
        }

        .carousel-item.active .hero-text {
            animation: slideInFromRightText 1.2s cubic-bezier(0.25, 0.8, 0.25, 1) forwards;
            animation-delay: 0.7s;
            opacity: 0;
        }

        .carousel-item.active .hero-price {
            animation: slideInFromRight 1.2s cubic-bezier(0.25, 0.8, 0.25, 1) forwards;
            animation-delay: 1.1s;
            opacity: 0;
        }
    </style>

    <style>
        .mejores-experiencias-section {
            position: relative;
            overflow: hidden;
            background: #ffffff;
        }

        .mejores-experiencias-section::before,
        .mejores-experiencias-section::after {
            display: none;
        }

        .mejores-experiencias-section::before {
            top: 70px;
            left: -80px;
            width: 220px;
            height: 220px;
            background: rgba(220, 169, 72, 0.18);
        }

        .mejores-experiencias-section::after {
            right: -90px;
            bottom: 40px;
            width: 240px;
            height: 240px;
            background: rgba(25, 118, 210, 0.12);
        }

        .experience-intro {
            max-width: 760px;
            margin: 0 auto 4rem;
        }

        .experience-heading {
            color: #143a52;
            letter-spacing: -0.03em;
        }

        .experience-subheading {
            max-width: 620px;
            margin: 0 auto;
            color: #5e6d79;
        }

        .experience-grid {
            position: relative;
            z-index: 1;
            --bs-gutter-x: 2.25rem;
            --bs-gutter-y: 2.5rem;
        }

        .experience-grid > [class*="col-"] {
            display: flex;
        }

        .experience-card-wrap {
            width: 100%;
            perspective: 1200px;
        }

        .experience-card {
            --card-radius: 28px;
            --card-inner-radius: 22px;
            --card-rotate: -4deg;
            --card-offset: 0px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-height: 460px;
            width: 100%;
            padding: 1.25rem;
            border-radius: var(--card-radius);
            text-decoration: none;
            isolation: isolate;
            transform: translateY(var(--card-offset)) rotate(var(--card-rotate));
            transform-origin: center bottom;
            box-shadow: 0 22px 55px rgba(8, 30, 44, 0.16);
            transition: transform 0.45s ease, box-shadow 0.45s ease;
            clip-path: inset(0 round var(--card-radius));
        }

        .experience-card::before {
            content: "";
            position: absolute;
            inset: 10px;
            border-radius: var(--card-inner-radius);
            border: 1px solid rgba(255, 255, 255, 0.28);
            z-index: 3;
            pointer-events: none;
        }

        .experience-card::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.08) 0%, transparent 26%);
            z-index: 2;
            pointer-events: none;
        }

        .experience-card-media {
            position: absolute;
            inset: 0;
            overflow: hidden;
            border-radius: inherit;
            z-index: 0;
            backface-visibility: hidden;
            transform: translateZ(0);
            clip-path: inset(0 round var(--card-radius));
        }

        .experience-card-bg {
            position: absolute;
            inset: 0;
            border-radius: inherit;
            background-size: cover;
            background-position: center;
            transition: transform 0.7s ease;
            z-index: 0;
            backface-visibility: hidden;
            transform: translateZ(0);
            will-change: transform;
        }

        .experience-card-overlay {
            position: absolute;
            inset: 0;
            border-radius: inherit;
            background:
                linear-gradient(180deg, rgba(5, 20, 30, 0.14) 0%, rgba(5, 20, 30, 0.08) 28%, rgba(5, 20, 30, 0.88) 100%),
                linear-gradient(135deg, rgba(10, 39, 56, 0.15) 0%, rgba(10, 39, 56, 0.6) 100%);
            transition: background 0.4s ease;
            z-index: 1;
            backface-visibility: hidden;
            transform: translateZ(0);
        }

        .experience-card-content {
            position: relative;
            z-index: 4;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            height: 100%;
        }

        .experience-card-chip {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 52px;
            height: 52px;
            margin-bottom: auto;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.14);
            border: 1px solid rgba(255, 255, 255, 0.26);
            backdrop-filter: blur(10px);
            color: #fff;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.08em;
        }

        .experience-card-copy {
            margin-top: 2rem;
        }

        .experience-card h3 {
            font-size: clamp(1.5rem, 1.1rem + 1vw, 2rem);
            line-height: 1.05;
            letter-spacing: -0.03em;
        }

        .experience-card p {
            max-width: 24ch;
            color: rgba(255, 255, 255, 0.88);
        }

        .experience-card-cta {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            margin-top: 1.5rem;
            color: #fff;
            font-size: 0.92rem;
            font-weight: 600;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .experience-card-cta::after {
            content: "↗";
            font-size: 1rem;
            line-height: 1;
        }

        .experience-card--one {
            --card-rotate: -5deg;
            --card-offset: 22px;
        }

        .experience-card--two {
            --card-rotate: 4deg;
            --card-offset: 0px;
        }

        .experience-card--three {
            --card-rotate: -3.5deg;
            --card-offset: 34px;
        }

        .experience-card--four {
            --card-rotate: 5deg;
            --card-offset: 12px;
        }

        .experience-card:hover,
        .experience-card:focus-visible {
            transform: translateY(calc(var(--card-offset) - 14px)) rotate(calc(var(--card-rotate) * 0.35));
            box-shadow: 0 30px 70px rgba(8, 30, 44, 0.24);
        }

        .experience-card:hover .experience-card-bg,
        .experience-card:focus-visible .experience-card-bg {
            transform: scale(1.09);
        }

        .experience-card:hover .experience-card-overlay,
        .experience-card:focus-visible .experience-card-overlay {
            background:
                linear-gradient(180deg, rgba(5, 20, 30, 0.08) 0%, rgba(5, 20, 30, 0.14) 24%, rgba(5, 20, 30, 0.94) 100%),
                linear-gradient(135deg, rgba(10, 39, 56, 0.08) 0%, rgba(10, 39, 56, 0.72) 100%);
        }

        .experience-card:focus-visible {
            outline: 3px solid rgba(244, 198, 111, 0.9);
            outline-offset: 6px;
        }

        .experience-card::after {
            border-radius: inherit;
        }

        @media (min-width: 1200px) {
            .experience-grid {
                --bs-gutter-x: 3rem;
            }
        }

        @media (max-width: 991.98px) {
            .experience-intro {
                margin-bottom: 3rem;
            }

            .experience-card {
                min-height: 420px;
                transform: rotate(var(--card-rotate));
            }

            .experience-card--one,
            .experience-card--two,
            .experience-card--three,
            .experience-card--four {
                --card-offset: 0px;
            }
        }

        @media (max-width: 767.98px) {
            .experience-card {
                min-height: 360px;
                --card-radius: 24px;
                --card-inner-radius: 18px;
                transform: none;
            }

            .experience-card:hover,
            .experience-card:focus-visible {
                transform: translateY(-8px);
            }

            .experience-card::before {
                inset: 8px;
                border-radius: var(--card-inner-radius);
            }
        }
    </style>

    <section id="mejores-experiencias" class="mejores-experiencias-section py-5" style="scroll-margin-top: 100px;">
        <div class="container py-lg-5">
            <div class="experience-intro text-center" data-aos="fade-up">
                <h2 class="experience-heading display-4 fw-bold mb-3">Nuestras Mejores Experiencias</h2>
                <p class="experience-subheading lead mb-0">Descubre la magia de los Andes con nuestros tours especializados.</p>
            </div>

            <div class="row g-4 g-xl-5 experience-grid justify-content-center">
                <div class="col-sm-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="experience-card-wrap">
                        <a href="<?php echo esc_url(home_url('/tours/?tipo_tour=cultural-y-arqueologico')); ?>" class="experience-card experience-card--one">
                            <div class="experience-card-media" aria-hidden="true">
                                <div class="experience-card-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cat-cultural.webp');"></div>
                                <div class="experience-card-overlay"></div>
                            </div>
                            <div class="experience-card-content p-4 p-xl-4">
                                <span class="experience-card-chip">01</span>
                                <div class="experience-card-copy">
                                    <h3 class="text-white fw-bold mb-3">Culturales y Clásicos</h3>
                                    <p class="mb-0 fs-6">Descubre la Capital Arqueológica de América y el Valle Sagrado.</p>
                                    <span class="experience-card-cta">Explorar</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="experience-card-wrap">
                        <a href="<?php echo esc_url(home_url('/tours/?tipo_tour=ceremonias-y-retiros')); ?>" class="experience-card experience-card--two">
                            <div class="experience-card-media" aria-hidden="true">
                                <div class="experience-card-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cat-mistico.webp'); background-position: top center;"></div>
                                <div class="experience-card-overlay"></div>
                            </div>
                            <div class="experience-card-content p-4 p-xl-4">
                                <span class="experience-card-chip">02</span>
                                <div class="experience-card-copy">
                                    <h3 class="text-white fw-bold mb-3">Rituales Místicos</h3>
                                    <p class="mb-0 fs-6">Conéctate con la Pachamama a través de ceremonias auténticas conducidas por chamanes nativos.</p>
                                    <span class="experience-card-cta">Explorar</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="experience-card-wrap">
                        <a href="<?php echo esc_url(home_url('/aventura-en-cuatrimotos')); ?>" class="experience-card experience-card--three">
                            <div class="experience-card-media" aria-hidden="true">
                                <div class="experience-card-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cat-atv.webp');"></div>
                                <div class="experience-card-overlay"></div>
                            </div>
                            <div class="experience-card-content p-4 p-xl-4">
                                <span class="experience-card-chip">03</span>
                                <div class="experience-card-copy">
                                    <h3 class="text-white fw-bold mb-3">Aventura en Cuatrimotos</h3>
                                    <p class="mb-0 fs-6">Siente la adrenalina en rutas exclusivas hacia Maras, Moray o las lagunas de la región.</p>
                                    <span class="experience-card-cta">Explorar</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="experience-card-wrap">
                        <a href="<?php echo esc_url(home_url('/tours/?tipo_tour=naturaleza-y-trekking')); ?>" class="experience-card experience-card--four">
                            <div class="experience-card-media" aria-hidden="true">
                                <div class="experience-card-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cat-naturaleza.webp');"></div>
                                <div class="experience-card-overlay"></div>
                            </div>
                            <div class="experience-card-content p-4 p-xl-4">
                                <span class="experience-card-chip">04</span>
                                <div class="experience-card-copy">
                                    <h3 class="text-white fw-bold mb-3">Naturaleza y Trekking</h3>
                                    <p class="mb-0 fs-6">Aventúrate hacia la Montaña de 7 Colores y las espectaculares lagunas turquesas de los Andes.</p>
                                    <span class="experience-card-cta">Explorar</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .trust-section {
            position: relative;
            padding: clamp(4.5rem, 7vw, 6rem) 0;
            background: linear-gradient(180deg, #ffffff 0%, rgba(var(--bs-info-rgb), 0.42) 100%);
        }
        .trust-intro {
            max-width: 640px;
            margin: 0 auto 3rem;
        }
        .trust-intro h2 {
            color: #143a52;
            letter-spacing: -0.03em;
        }
        .trust-card {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100%;
            padding: 2rem 1.75rem;
            text-align: center;
            background: transparent;
           box-shadow: none;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }
        .trust-card::before {
            content: "";
            width: 52px;
            height: 3px;
            margin-bottom: 1.5rem;
            background: var(--bs-warning);
        }
        .trust-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 24px 48px rgba(20, 58, 82, 0.14);
        }
        .trust-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 72px;
            height: 72px;
            margin-bottom: 1.25rem;
            border: 1px solid rgba(var(--bs-primary-rgb), 0.16);
            background: rgba(var(--bs-primary-rgb), 0.06);
            color: var(--bs-primary);
            font-size: 1.85rem;
            transition: background 0.35s ease, color 0.35s ease, border-color 0.35s ease;
        }
        .trust-card:hover .trust-icon {
            background: var(--bs-primary);
            border-color: var(--bs-primary);
            color: #ffffff;
        }
        .trust-card h4 {
            color: #143a52;
            line-height: 1;
            letter-spacing: -0.02em;
        }
        .trust-card p {
            max-width: 29ch;
            margin: 0 auto;
            color: #5e6d79;
            line-height: 1.7;
            font-size: 0.98rem;
        }
        @media (max-width: 767.98px) {
            .trust-card {
                padding: 1.75rem 1.5rem;
            }
            .trust-card p {
                max-width: none;
            }
        }
    </style>

    <section class="trust-section">
        <div class="container">
            <div class="trust-intro text-center" data-aos="fade-up">
                <h2 class="display-6 fw-bold text-primary mb-3">¿Por qué viajar con nosotros?</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="trust-card">
                        <div class="trust-icon"><i class="bi bi-headset"></i></div>
                        <h4 class="fw-bold mb-3 fs-5">Asistencia 24 Horas</h4>
                        <p class="mb-0">Viaje sin preocupaciones con nuestro equipo a su disposición, garantizando su seguridad y comodidad en todo momento.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="trust-card">
                        <div class="trust-icon"><i class="bi bi-person-hearts"></i></div>
                        <h4 class="fw-bold mb-3 fs-5">Atención Personalizada</h4>
                        <p class="mb-0">Organizamos juntos el viaje de sus sueños, de acuerdo con su disponibilidad de fechas y preferencias.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="trust-card">
                        <div class="trust-icon"><i class="bi bi-building-check"></i></div>
                        <h4 class="fw-bold mb-3 fs-5">Practicidad y Comodidad</h4>
                        <p class="mb-0">Contamos con oficinas y equipo propio en Machu Picchu y Cusco. Salidas diarias disponibles para todos nuestros itinerarios.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="trust-card">
                        <div class="trust-icon"><i class="bi bi-globe-americas"></i></div>
                        <h4 class="fw-bold mb-3 fs-5">Dominio Cultural</h4>
                        <p class="mb-0">Nuestro equipo comprende profundamente el perfil del turista brasileño e hispanohablante. Ofrecemos una experiencia auténtica y de alto nivel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .tour-card {
            transition: box-shadow 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .tour-card:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2) !important;
        }

        .tour-card-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: transform 0.6s ease;
            z-index: 1;
        }

        .tour-card:hover .tour-card-bg {
            transform: scale(1.08);
        }

        .tour-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.4) 40%, rgba(0, 0, 0, 0.1) 100%);
            transition: background 0.4s ease;
            z-index: 2;
        }

        .tour-card:hover .tour-card-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.6) 60%, rgba(0, 0, 0, 0.2) 100%);
        }

        .tour-card-content {
            z-index: 3;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .tour-info-wrapper {
            transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            transform: translateY(45px);
        }

        .tour-description {
            opacity: 1;
            transition: opacity 0.4s ease, transform 0.4s ease;
            transform: translateY(20px);
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.85);
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .tour-card:hover .tour-info-wrapper {
            transform: translateY(0);
        }

        .tour-card:hover .tour-description {
            opacity: 1;
            transform: translateY(0);
        }

        @media (hover: none) {
            .tour-info-wrapper {
                transform: translateY(0);
            }

            .tour-description {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <section class="py-5 bg-white">
        <div class="container py-lg-5">

            <div class="d-flex flex-wrap justify-content-between align-items-end mb-5" data-aos="fade-up">
                <div>
                    <h2 class="display-6 fw-bold text-primary mb-2">Paquetes Más Populares</h2>
                    <p class="lead text-secondary mb-0">Itinerarios diseñados para vivir la verdadera esencia andina.</p>
                </div>
                <div class="mt-3 mt-md-0">
                    <a href="<?php echo esc_url(home_url('/tours')); ?>" class="btn btn-outline-primary rounded-0 px-4 fw-bold border-2">Ver todos los tours <i class="bi bi-arrow-right ms-1"></i></a>
                </div>
            </div>

            <div class="row g-4">
                <?php
                $args_tours = array(
                    'post_type'      => 'tour',
                    'posts_per_page' => 4,
                    'post_status'    => 'publish',
                );

                $tours_query = new WP_Query($args_tours);
                $aos_delay = 100; // Variable para crear el efecto cascada

                if ($tours_query->have_posts()) :
                    while ($tours_query->have_posts()) : $tours_query->the_post();

                        $days       = get_field('tour_days');
                        $nights     = get_field('tour_nights');
                        $difficulty = get_field('tour_difficulty');

                        $bg_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        if (! $bg_image) {
                            $bg_image = get_template_directory_uri() . '/assets/images/default-tour.jpg';
                        }

                        $excerpt = get_the_excerpt();
                        if (empty($excerpt)) {
                            $excerpt = wp_trim_words(get_the_content(), 15, '...');
                        }
                ?>

                        <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo $aos_delay; ?>">
                            <a href="<?php the_permalink(); ?>" class="tour-card d-block rounded-0 shadow-sm text-decoration-none" style="min-height: 420px;">

                                <div class="tour-card-bg" style="background-image: url('<?php echo esc_url($bg_image); ?>');"></div>
                                <div class="tour-card-overlay"></div>

                                <div class="tour-card-content p-4">

                                    <div class="d-flex justify-content-between align-items-start">
                                        <?php if ($days) : ?>
                                            <span class="badge bg-primary rounded-0 text-white shadow-sm px-2 py-2" style="font-size: 0.8rem;">
                                                <i class="bi bi-clock-fill me-1 text-warning"></i>
                                                <?php echo esc_html($days); ?> Días <?php echo $nights ? ' / ' . esc_html($nights) . ' Noches' : ''; ?>
                                            </span>
                                        <?php endif; ?>

                                        <?php if ($difficulty) : ?>
                                            <span class="badge bg-dark rounded-0 text-white border border-secondary shadow-sm px-2 py-2" style="font-size: 0.8rem;">
                                                <?php echo esc_html($difficulty); ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="tour-info-wrapper mt-auto">
                                        <h3 class="text-white fw-bold fs-4 mb-2 lh-sm"><?php the_title(); ?></h3>

                                        <p class="tour-description m-0">
                                            <?php echo esc_html($excerpt); ?>
                                        </p>

                                        <div class="d-flex align-items-center text-white mt-2" style="font-size: 0.85rem;">
                                            <span class="fw-bold text-warning me-2 text-uppercase" style="letter-spacing: 1px;">Explorar Tour</span>
                                            <i class="bi bi-arrow-right text-warning fs-5"></i>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>

                <?php
                        $aos_delay += 100; // Aumentamos el retraso para el siguiente elemento
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="col-12 text-center py-5" data-aos="fade-in">
                        <div class="p-5 bg-light rounded-0 border">
                            <i class="bi bi-journal-x text-secondary fs-1 mb-3"></i>
                            <h4 class="fw-bold text-secondary">Aún no hay paquetes disponibles</h4>
                            <p class="text-muted">Ve a tu panel de WordPress y crea tu primer Tour para que aparezca aquí mágicamente.</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <section class="py-4 bg-light border-top border-bottom" data-aos="fade-in" data-aos-duration="1000">
        <div class="container text-center">
            <p class="text-uppercase fw-bold text-muted mb-4" style="letter-spacing: 2px; font-size: 0.8rem;">Nuestros Aliados Estratégicos</p>

            <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 gap-lg-5">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-mincetur.png" alt="Mincetur" style="height: 45px; width: auto; object-fit: contain;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-dircetur.png" alt="Dircetur" style="height: 45px; width: auto; object-fit: contain;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-gercetur.png" alt="Gercetur" style="height: 45px; width: auto; object-fit: contain;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-peru.png" alt="Marca Perú" style="height: 40px; width: auto; object-fit: contain;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-perurail.png" alt="PeruRail" style="height: 35px; width: auto; object-fit: contain;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-incarail.png" alt="IncaRail" style="height: 35px; width: auto; object-fit: contain;">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-consettur.png" alt="Consettur" style="height: 55px; width: auto; object-fit: contain;">
            </div>

        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-6 fw-bold text-primary mb-2">Lo que dicen nuestros viajeros</h2>
                <div class="d-flex justify-content-center gap-1 text-warning mb-2 fs-4">
                    <i class="bi bi-circle-fill"></i><i class="bi bi-circle-fill"></i><i class="bi bi-circle-fill"></i><i class="bi bi-circle-fill"></i><i class="bi bi-circle-fill"></i>
                </div>
                <p class="text-secondary">Excelencia y confianza avalada en TripAdvisor</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 bg-light rounded-0 h-100 border-top border-warning border-4 shadow-sm">
                        <p class="fst-italic text-secondary mb-4">"Una experiencia sagrada de principio a fin. Los guías hablan un portugués perfecto y nos hicieron sentir la verdadera energía de Machu Picchu. ¡Recomendado al 100%!"</p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center fw-bold" style="width: 45px; height: 45px;">CM</div>
                            <div>
                                <h6 class="fw-bold mb-0">Carlos M.</h6>
                                <span class="text-muted" style="font-size: 0.8rem;">São Paulo, Brasil</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 bg-light rounded-0 h-100 border-top border-warning border-4 shadow-sm">
                        <p class="fst-italic text-secondary mb-4">"Tomamos el tour místico con el chamán andino y fue transformador. La logística fue impecable, no tuvimos que preocuparnos por nada, solo disfrutar."</p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center fw-bold" style="width: 45px; height: 45px;">AR</div>
                            <div>
                                <h6 class="fw-bold mb-0">Ana y Roberto</h6>
                                <span class="text-muted" style="font-size: 0.8rem;">Bogotá, Colombia</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 bg-light rounded-0 h-100 border-top border-warning border-4 shadow-sm">
                        <p class="fst-italic text-secondary mb-4">"El equipo de Viagens Machupicchu Brasil cuidó cada detalle. Desde que llegamos a Cusco nos sentimos en casa. Las cuatrimotos en Maras fueron lo mejor."</p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center fw-bold" style="width: 45px; height: 45px;">JL</div>
                            <div>
                                <h6 class="fw-bold mb-0">Juliana L.</h6>
                                <span class="text-muted" style="font-size: 0.8rem;">Río de Janeiro, Brasil</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="circuitos-machupicchu" class="py-5 bg-light" style="scroll-margin-top: 100px;">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="badge bg-primary rounded-0 px-3 py-2 mb-3 text-uppercase">Información Útil</span>
                    <h2 class="display-6 fw-bold text-dark mb-4">Conoce los Circuitos de la Ciudadela</h2>
                    <p class="text-secondary mb-4">Para proteger la maravilla del mundo, el Ministerio de Cultura ha establecido circuitos específicos. Como operadores locales, te asesoramos para elegir el ideal para ti.</p>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex gap-3 align-items-start">
                            <i class="bi bi-check-circle-fill text-primary fs-5 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Circuito 1 y 2 (Panorámicos y Clásicos)</h6>
                                <p class="text-secondary mb-0" style="font-size: 0.9rem;">Ideales para la clásica foto de postal desde la Casa del Guardián y un recorrido completo por la zona urbana.</p>
                            </div>
                        </li>
                        <li class="d-flex gap-3 align-items-start">
                            <i class="bi bi-check-circle-fill text-primary fs-5 mt-1"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Circuito 3 (Realeza y Huayna Picchu)</h6>
                                <p class="text-secondary mb-0" style="font-size: 0.9rem;">Recorre la parte baja, el Templo del Sol y conecta con las montañas sagradas si tienes el ticket adicional.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <video autoplay loop muted playsinline class="w-100 shadow rounded-0" style="object-fit: cover;">
                        <source src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/video/circuitos.mp4" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-primary text-center text-white" data-aos="zoom-in" data-aos-duration="800">
        <div class="container py-3">
            <h2 class="fw-bold mb-3 display-6">¿Listo para vivir la mejor Experiencia?</h2>
            <p class="lead mb-4" style="opacity: 0.9;">Habla directamente con nuestros expertos locales en Cusco y personaliza tu itinerario hoy mismo.</p>
            <a href="https://wa.me/51990725647" target="_blank" class="btn btn-light btn-lg rounded-0 px-5 fw-bold text-primary shadow-sm">
                <i class="bi bi-whatsapp me-2 text-success"></i> Escríbenos por WhatsApp
            </a>
        </div>
    </section>

</main>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Inicializamos la librería
    AOS.init({
        once: true, // Que la animación solo ocurra una vez al bajar
        offset: 80, // Distancia desde el borde inferior de la pantalla para que inicie
        duration: 800, // Duración por defecto
    });

    const heroCarousel = document.getElementById('heroCarousel');
    const heroProgressFill = document.querySelector('.hero-progress-fill');

    if (heroCarousel && heroProgressFill) {
        heroCarousel.addEventListener('slide.bs.carousel', function() {
            heroProgressFill.style.animation = 'none';
            heroProgressFill.offsetHeight;
            heroProgressFill.style.animation = '';
        });
    }
</script>

<?php get_footer(); ?>
