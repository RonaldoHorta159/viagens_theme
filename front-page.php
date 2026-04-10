<?php

/**
 * Plantilla de la página de inicio (Front Page)
 *
 * @package viagens-theme
 */

get_header(); ?>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<main id="primary" class="site-main">

    <section class="hero-section d-flex align-items-center justify-content-center text-center overflow-hidden position-relative" style="min-height: 85vh;">

        <div class="hero-fallback w-100 h-100 position-absolute top-0 start-0 bg-cover" style="z-index: -3; background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-fallback.jpg');"></div>

        <video autoplay loop muted playsinline class="w-100 h-100 position-absolute top-0 start-0" style="object-fit: cover; z-index: -2;">
            <source src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/video/hero-video.mp4" type="video/mp4">
        </video>

        <div class="overlay w-100 h-100 position-absolute top-0 start-0" style="background-color: rgba(0, 0, 0, 0.55); z-index: -1;"></div>

        <div class="container position-relative" style="z-index: 1;" data-aos="zoom-in" data-aos-duration="1200">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <span class="badge bg-primary rounded-0 text-white mb-3 px-3 py-2 text-uppercase" style="letter-spacing: 2px; font-weight: 600;">
                Viagens Machupicchu Brasil
            </span>

            <h1 class="display-3 fw-bold text-white mb-4 text-shadow-dark text-uppercase">
                EXPERIENCIA SAGRADA
            </h1>

            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="https://wa.me/51990725647" target="_blank" class="btn btn-outline-light btn-lg rounded-0 px-4 fw-bold shadow-sm">
                    <i class="bi bi-whatsapp me-2"></i> Asesoría Gratis
                </a>
            </div>

        </div>
    </div>
</div>
    </section>

    <style>
        /* Contenedor principal de la tarjeta: bordes rectos y oculta el zoom interno */
        .experience-card {
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-height: 350px;
            text-decoration: none;
        }

        /* La capa de imagen al fondo */
        .experience-card-bg {
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

        /* Capa oscura (Gradiente) para leer el texto */
        .experience-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.1) 60%);
            transition: background 0.4s ease;
            z-index: 2;
        }

        .experience-card-content {
            position: relative;
            z-index: 3;
        }

        .experience-card:hover .experience-card-bg {
            transform: scale(1.1);
        }

        .experience-card:hover .experience-card-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.4) 100%);
        }
    </style>

    <section id="mejores-experiencias" class="py-5 bg-light" style="scroll-margin-top: 100px;">
        <div class="container py-lg-5">

            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-primary mb-3">Nuestras Mejores Experiencias</h2>
                <p class="lead text-secondary">Descubre la magia de los Andes con nuestros tours especializados.</p>
            </div>

            <div class="row g-4 justify-content-center">

                <div class="col-lg-10">
                    <div class="row g-4">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo esc_url(home_url('/tours/?tipo_tour=cultural-y-arqueologico')); ?>" class="experience-card shadow-sm rounded-0">
                                <div class="experience-card-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cat-cultural.webp');"></div>
                                <div class="experience-card-overlay"></div>
                                <div class="experience-card-content p-4 p-lg-5">
                                    <h3 class="text-white fw-bold fs-3 mb-2">Culturales y Clásicos</h3>
                                    <p class="text-white mb-0 fs-6" style="opacity: 0.9;">Descubre la Capital Arqueológica de América y el Valle Sagrado.</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <a href="<?php echo esc_url(home_url('/tours/?tipo_tour=ceremonias-y-retiros')); ?>" class="experience-card shadow-sm rounded-0">
                                <div class="experience-card-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cat-mistico.webp'); background-position: top center;"></div>
                                <div class="experience-card-overlay"></div>
                                <div class="experience-card-content p-4 p-lg-5">
                                    <h3 class="text-white fw-bold fs-3 mb-2">Rituales Místicos</h3>
                                    <p class="text-white mb-0 fs-6" style="opacity: 0.9;">Conéctate con la Pachamama a través de ceremonias auténticas conducidas por chamanes nativos.</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <a href="<?php echo esc_url(home_url('/aventura-en-cuatrimotos')); ?>" class="experience-card shadow-sm rounded-0">
                                <div class="experience-card-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cat-atv.webp');"></div>
                                <div class="experience-card-overlay"></div>
                                <div class="experience-card-content p-4 p-lg-5">
                                    <h3 class="text-white fw-bold fs-3 mb-2">Aventura en Cuatrimotos</h3>
                                    <p class="text-white mb-0 fs-6" style="opacity: 0.9;">Siente la adrenalina en rutas exclusivas hacia Maras, Moray o las lagunas de la región.</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <a href="<?php echo esc_url(home_url('/tours/?tipo_tour=naturaleza-y-trekking')); ?>" class="experience-card shadow-sm rounded-0">
                                <div class="experience-card-bg" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cat-naturaleza.webp');"></div>
                                <div class="experience-card-overlay"></div>
                                <div class="experience-card-content p-4 p-lg-5">
                                    <h3 class="text-white fw-bold fs-3 mb-2">Naturaleza y Trekking</h3>
                                    <p class="text-white mb-0 fs-6" style="opacity: 0.9;">Aventúrate hacia la Montaña de 7 Colores y las espectaculares lagunas turquesas de los Andes.</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        .trust-section {
            background-color: #f8f9fa;
            padding-top: 5rem;
            padding-bottom: 5rem;
        }
        .trust-card {
            background: #fff;
            padding: 2rem;
            height: 100%;
            border-top: 4px solid #2c3e50;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
            transition: transform 0.3s ease;
        }
        .trust-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }
        .trust-icon {
            font-size: 2rem;
            color: #198754;
            margin-bottom: 1rem;
        }
        .services-box {
            background-color: #2c3e50;
            color: #fff;
            padding: 3rem;
            border-radius: 8px;
            margin-top: 4rem;
        }
        .services-list-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            list-style: none;
            padding-left: 0;
            margin-bottom: 0;
        }
        .services-list-grid li {
            position: relative;
            padding-left: 1.5rem;
            font-size: 1.05rem;
        }
        .services-list-grid li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #f1c40f;
            font-weight: bold;
        }
    </style>

    <section class="trust-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-6 fw-bold text-primary mb-3">¿Por qué viajar con nosotros?</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="trust-card rounded-0">
                        <div class="trust-icon"><i class="bi bi-headset"></i></div>
                        <h4 class="fw-bold mb-3 fs-5 text-dark">Asistencia 24 Horas</h4>
                        <p class="text-secondary mb-0" style="font-size: 0.95rem;">Viaje sin preocupaciones con nuestro equipo a su disposición, garantizando su seguridad y comodidad en todo momento.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="trust-card rounded-0">
                        <div class="trust-icon"><i class="bi bi-person-hearts"></i></div>
                        <h4 class="fw-bold mb-3 fs-5 text-dark">Atención Personalizada</h4>
                        <p class="text-secondary mb-0" style="font-size: 0.95rem;">Organizamos juntos el viaje de sus sueños, de acuerdo con su disponibilidad de fechas y preferencias.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="trust-card rounded-0">
                        <div class="trust-icon"><i class="bi bi-building-check"></i></div>
                        <h4 class="fw-bold mb-3 fs-5 text-dark">Practicidad y Comodidad</h4>
                        <p class="text-secondary mb-0" style="font-size: 0.95rem;">Contamos con oficinas y equipo propio en Machu Picchu y Cusco. Salidas diarias disponibles para todos nuestros itinerarios.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="trust-card rounded-0">
                        <div class="trust-icon"><i class="bi bi-globe-americas"></i></div>
                        <h4 class="fw-bold mb-3 fs-5 text-dark">Dominio Cultural</h4>
                        <p class="text-secondary mb-0" style="font-size: 0.95rem;">Nuestro equipo comprende profundamente el perfil del turista brasileño e hispanohablante. Ofrecemos una experiencia auténtica y de alto nivel.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-10">
                    <div class="services-box shadow">
                        <h3 class="fw-bold mb-4 text-center">¿QUÉ OFRECEMOS?</h3>
                        <ul class="services-list-grid">
                            <li>Tours tradicionales</li>
                            <li>Tours de aventura</li>
                            <li>Experiencias místicas</li>
                            <li>Servicio de guías</li>
                            <li>Transporte turístico</li>
                            <li>Venta de entradas Machupicchu</li>
                            <li>Boletos turísticos</li>
                            <li>Tickets de Trenes</li>
                            <li>Hoteles y Restaurantes</li>
                        </ul>
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
</script>

<?php get_footer(); ?>