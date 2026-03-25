<?php

/**
 * Plantilla de la página de inicio (Front Page)
 *
 * @package viagens-theme
 */

get_header(); ?>

<main id="primary" class="site-main">

    <section class="hero-section d-flex align-items-center justify-content-center text-center overflow-hidden position-relative" style="min-height: 85vh;">

        <div class="hero-fallback w-100 h-100 position-absolute top-0 start-0 bg-cover" style="z-index: -3; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-fallback.jpg');"></div>

        <video autoplay loop muted playsinline class="w-100 h-100 position-absolute top-0 start-0" style="object-fit: cover; z-index: -2;">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/hero-video.mp4" type="video/mp4">
        </video>

        <div class="overlay w-100 h-100 position-absolute top-0 start-0" style="background-color: rgba(0, 0, 0, 0.55); z-index: -1;"></div>

        <div class="container position-relative" style="z-index: 1;">
            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <span class="badge bg-primary text-white mb-3 px-3 py-2 text-uppercase" style="letter-spacing: 2px; font-weight: 600;">
                        Viagens Machupicchu Brasil
                    </span>

                    <h1 class="display-3 fw-bold text-white mb-4 text-shadow-dark text-uppercase">
                        Sacred Experience
                    </h1>

                    <p class="lead text-white mb-5 text-shadow-dark fs-5" style="font-weight: 400; line-height: 1.6;">
                        Somos operadores 100% locales, de Machupicchu para el mundo. Garantizamos que usted viva una experiencia inolvidable, auténtica y profundamente transformadora en los Andes.
                    </p>

                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="#mejores-experiencias" class="btn btn-primary btn-lg rounded-pill px-5 fw-bold shadow-sm">
                            Descubrir Tours
                        </a>
                        <a href="https://wa.me/51990725647" target="_blank" class="btn btn-outline-light btn-lg rounded-pill px-4 fw-bold shadow-sm">
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
            /* Crucial para que la imagen no se salga al hacer zoom */
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-height: 350px;
            text-decoration: none;
            /* Quitamos el transition de elevación que tenías antes */
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
            /* Transición suave para el zoom */
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
            /* Transición para oscurecer */
            z-index: 2;
        }

        /* El contenido (Texto) */
        .experience-card-content {
            position: relative;
            z-index: 3;
        }

        /* EFECTOS HOVER */
        /* 1. Zoom a la imagen (escala a 1.1) */
        .experience-card:hover .experience-card-bg {
            transform: scale(1.1);
        }

        /* 2. Oscurecer la sombra (hace el fondo más negro) */
        .experience-card:hover .experience-card-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.4) 100%);
        }
    </style>

    <section id="mejores-experiencias" class="py-5 bg-light">
        <div class="container py-lg-5">

            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary mb-3">Nuestras Mejores Experiencias</h2>
                <p class="lead text-secondary">Descubre la magia de los Andes con nuestros tours especializados.</p>
            </div>

            <div class="row g-4 justify-content-center">

                <div class="col-lg-10">
                    <div class="row g-4">

                        <div class="col-md-6">
                            <a href="#" class="experience-card shadow-sm rounded-0">
                                <div class="experience-card-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/cat-cultural.webp');"></div>
                                <div class="experience-card-overlay"></div>
                                <div class="experience-card-content p-4 p-lg-5">
                                    <h3 class="text-white fw-bold fs-3 mb-2">Culturales y Clásicos</h3>
                                    <p class="text-white mb-0 fs-6" style="opacity: 0.9;">Descubre la Capital Arqueológica de América y el Valle Sagrado.</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a href="#" class="experience-card shadow-sm rounded-0">
                                <div class="experience-card-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/cat-mistico.webp'); background-position: top center;"></div>
                                <div class="experience-card-overlay"></div>
                                <div class="experience-card-content p-4 p-lg-5">
                                    <h3 class="text-white fw-bold fs-3 mb-2">Rituales Místicos</h3>
                                    <p class="text-white mb-0 fs-6" style="opacity: 0.9;">Conéctate con la Pachamama a través de ceremonias auténticas conducidas por chamanes nativos.</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a href="#" class="experience-card shadow-sm rounded-0">
                                <div class="experience-card-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/cat-atv.webp');"></div>
                                <div class="experience-card-overlay"></div>
                                <div class="experience-card-content p-4 p-lg-5">
                                    <h3 class="text-white fw-bold fs-3 mb-2">Aventura en Cuatrimotos</h3>
                                    <p class="text-white mb-0 fs-6" style="opacity: 0.9;">Siente la adrenalina en rutas exclusivas hacia Maras, Moray o las lagunas de la región.</p>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a href="#" class="experience-card shadow-sm rounded-0">
                                <div class="experience-card-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/cat-naturaleza.webp');"></div>
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
        /* El truco de magia CSS para el Iframe */
        .map-container {
            border-radius: 1rem;
            overflow: hidden;
            /* Para que los bordes redondeados corten el mapa */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .styled-map {
            width: 100%;
            height: 450px;
            border: 0;
            /* Filtro premium: Escala de grises, un poco más de contraste y ligeramente transparente */
            filter: grayscale(100%) contrast(1.1) opacity(0.85);
            transition: filter 0.5s ease;
        }

        /* Al pasar el mouse, el mapa cobra vida y recupera sus colores originales */
        .styled-map:hover {
            filter: grayscale(0%) contrast(1) opacity(1);
        }
    </style>

    <section class="py-5 bg-white">
        <div class="container py-lg-4">

            <div class="row align-items-center g-5">

                <div class="col-lg-4">
                    <h2 class="fw-bold text-primary mb-4">Encuéntranos en Machupicchu</h2>
                    <p class="text-secondary mb-5">Nuestra oficina principal se encuentra estratégicamente ubicada en Machupicchu Pueblo (Aguas Calientes), listos para asistirte en el inicio de tu aventura.</p>

                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-light text-primary p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-geo-alt-fill fs-5"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Dirección</h5>
                                <p class="text-secondary mb-0">Calle Inka Simpa-L1<br>Machupicchu Pueblo, Cusco</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-light text-success p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-whatsapp fs-5"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">WhatsApp 24/7</h5>
                                <p class="text-secondary mb-0">+51 990725647<br>+51 982682774</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-light text-primary p-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-envelope-fill fs-5"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Correo Electrónico</h5>
                                <p class="text-secondary mb-0">info@viagensmachupicchubrasil.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="map-container">
                        <iframe
                            class="styled-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3882.2644265778235!2d-72.52623312384976!3d-13.159267987173264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d9a5f89555555%3A0x3a10370ea4a01a27!2sMachupicchu%20Pueblo!5e0!3m2!1ses-419!2spe!4v1716400000000!5m2!1ses-419!2spe"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
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
            /* Crucial para ocultar la descripción que está "abajo" */
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
            /* Ligero zoom in a la imagen de fondo */
        }

        .tour-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* Un gradiente que empieza transparente arriba y se oscurece abajo para leer el texto */
            background: linear-gradient(to top, rgba(0, 0, 0, 0.95) 0%, rgba(0, 0, 0, 0.4) 40%, rgba(0, 0, 0, 0.1) 100%);
            transition: background 0.4s ease;
            z-index: 2;
        }

        .tour-card:hover .tour-card-overlay {
            /* Se oscurece un poco más al hacer hover para leer la descripción */
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

        /* ---------------------------------------------------
           EFECTO DESLIZANTE DE LA DESCRIPCIÓN (El "Magia")
           --------------------------------------------------- */
        .tour-info-wrapper {
            transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            /* Transición suave */
            /* Empujamos este bloque ligeramente hacia abajo en estado normal */
            transform: translateY(45px);
        }

        .tour-description {
            opacity: 1;
            transition: opacity 0.4s ease, transform 0.4s ease;
            /* Empujamos la descripción hacia abajo para que quede oculta */
            transform: translateY(20px);
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.85);
            /* Truncar el texto a 3 líneas por seguridad */
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin-bottom: 15px;
        }

        /* Al hacer HOVER sobre la tarjeta */
        .tour-card:hover .tour-info-wrapper {
            /* El bloque entero (Título + Descripción + Botón) sube a su posición original */
            transform: translateY(0);
        }

        .tour-card:hover .tour-description {
            opacity: 1;
            /* La descripción aparece */
            transform: translateY(0);
            /* Se acomoda en su lugar */
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

            <div class="d-flex flex-wrap justify-content-between align-items-end mb-5">
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

                if ($tours_query->have_posts()) :
                    while ($tours_query->have_posts()) : $tours_query->the_post();

                        $days       = get_field('tour_days');
                        $nights     = get_field('tour_nights');
                        $difficulty = get_field('tour_difficulty');

                        $bg_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        if (! $bg_image) {
                            $bg_image = get_template_directory_uri() . '/assets/images/default-tour.jpg';
                        }

                        // Obtenemos un pequeño extracto del contenido
                        $excerpt = get_the_excerpt();
                        if (empty($excerpt)) {
                            $excerpt = wp_trim_words(get_the_content(), 15, '...');
                        }
                ?>

                        <div class="col-12 col-md-6 col-lg-3">
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
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="col-12 text-center py-5">
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
    <section class="py-4 bg-light border-top border-bottom">
        <div class="container text-center">
            <p class="text-uppercase fw-bold text-muted mb-4" style="letter-spacing: 2px; font-size: 0.8rem;">Nuestros Aliados Estratégicos</p>

            <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 gap-lg-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-mincetur.png" alt="Mincetur" style="height: 45px; width: auto; object-fit: contain;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dircetur.png" alt="Dircetur" style="height: 45px; width: auto; object-fit: contain;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-gercetur.png" alt="Gercetur" style="height: 45px; width: auto; object-fit: contain;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-peru.png" alt="Marca Perú" style="height: 40px; width: auto; object-fit: contain;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-perurail.png" alt="PeruRail" style="height: 35px; width: auto; object-fit: contain;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-incarail.png" alt="IncaRail" style="height: 35px; width: auto; object-fit: contain;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-consettur.png" alt="Consettur" style="height: 55px; width: auto; object-fit: contain;">
            </div>

        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-lg-5">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold text-primary mb-2">Lo que dicen nuestros viajeros</h2>
                <div class="d-flex justify-content-center gap-1 text-warning mb-2 fs-4">
                    <i class="bi bi-circle-fill"></i><i class="bi bi-circle-fill"></i><i class="bi bi-circle-fill"></i><i class="bi bi-circle-fill"></i><i class="bi bi-circle-fill"></i>
                </div>
                <p class="text-secondary">Excelencia y confianza avalada en TripAdvisor</p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
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
                <div class="col-md-4">
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
                <div class="col-md-4">
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

    <section class="py-5 bg-light">
        <div class="container py-lg-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
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
                <div class="col-lg-6">
                    <video autoplay loop muted playsinline class="w-100 shadow rounded-0" style="object-fit: cover;">
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/circuitos.mp4" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-primary text-center text-white">
        <div class="container py-3">
            <h2 class="fw-bold mb-3 display-6">¿Listo para vivir la Sacred Experience?</h2>
            <p class="lead mb-4" style="opacity: 0.9;">Habla directamente con nuestros expertos locales en Cusco y personaliza tu itinerario hoy mismo.</p>
            <a href="https://wa.me/51990725647" target="_blank" class="btn btn-light btn-lg rounded-0 px-5 fw-bold text-primary shadow-sm">
                <i class="bi bi-whatsapp me-2 text-success"></i> Escríbenos por WhatsApp
            </a>
        </div>
    </section>

</main> <?php get_footer(); ?>
</main>

<?php get_footer(); // Aunque aún no lo hemos creado, dejamos la función lista 
?>
