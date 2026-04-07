<?php
error_reporting(E_ERROR | E_PARSE); // Evita que Warnings ensucien el diseño
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post();
        // 1. Extraer datos básicos
        $days       = get_field('tour_days') ? get_field('tour_days') : '1';
        $nights     = get_field('tour_nights') ? get_field('tour_nights') : '0';
        $difficulty = get_field('tour_difficulty') ? get_field('tour_difficulty') : 'Moderada';

        // 2. Extraer Itinerario y Detalles (Asegúrate que los slugs coincidan con ACF)
        $itinerary    = get_field('tour_itinerary');
        if (empty($itinerary)) {
            $itinerary = get_post_meta(get_the_ID(), '_tour_itinerary', true);
            if (is_string($itinerary)) {
                $decoded = json_decode($itinerary, true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    $itinerary = $decoded;
                }
            }
        }
        $includes     = get_field('tour_includes');
        $not_includes = get_field('tour_not_includes');
?>

        <main class="tour-detail bg-light pb-5">

            <section class="tour-header text-white pt-5 pb-4" style="background: linear-gradient(135deg, #1a1a1a 0%, #2c3e50 100%); mt-0">
                <div class="container pt-4 pb-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3">
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white-50 text-decoration-none">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/tours')); ?>" class="text-white-50 text-decoration-none">Tours</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                    
                    <h1 class="display-4 fw-bold text-uppercase mb-4"><?php the_title(); ?></h1>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <span class="badge bg-primary rounded-0 px-3 py-2 fw-bold" style="font-size: 0.9rem;">
                            <i class="bi bi-clock me-1 text-warning"></i> <?php echo esc_html($days); ?> Días / <?php echo esc_html($nights); ?> Noches
                        </span>
                        <span class="badge bg-transparent border border-light rounded-0 px-3 py-2 fw-bold" style="font-size: 0.9rem;">
                            <i class="bi bi-graph-up me-1 text-warning"></i> Dificultad: <?php echo esc_html($difficulty); ?>
                        </span>
                    </div>
                </div>
            </section>

            <div class="container mt-4">
                <div class="row g-5">

                    <div class="col-lg-8">

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="mb-4 shadow-sm">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" alt="<?php the_title(); ?>" class="img-fluid w-100 rounded-0" style="max-height: 500px; object-fit: cover;">
                            </div>
                        <?php endif; ?>

                        <div class="bg-white p-4 mb-4 shadow-sm border-0 rounded-0">
                            <h4 class="fw-bold text-primary border-bottom pb-2 mb-3 text-uppercase" style="font-size: 1.1rem;">Descripción del Viaje</h4>
                            <div class="text-secondary lh-lg">
                                <?php the_content(); // Esto jala el contenido del editor que acabamos de habilitar ?>
                            </div>
                        </div>

                        <?php if ($includes || $not_includes): ?>
                            <div class="row mb-4 g-3">
                                <?php if ($includes): ?>
                                    <div class="col-md-6">
                                        <div class="bg-white p-4 h-100 shadow-sm border-0 rounded-0 border-start border-success border-4">
                                            <h5 class="fw-bold text-success mb-3 small text-uppercase"><i class="bi bi-check-circle-fill me-2"></i>¿Qué incluye?</h5>
                                            <div class="text-secondary small">
                                                <?php echo $includes; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if ($not_includes): ?>
                                    <div class="col-md-6">
                                        <div class="bg-white p-4 h-100 shadow-sm border-0 rounded-0 border-start border-danger border-4">
                                            <h5 class="fw-bold text-danger mb-3 small text-uppercase"><i class="bi bi-x-circle-fill me-2"></i>¿Qué NO incluye?</h5>
                                            <div class="text-secondary small">
                                                <?php echo $not_includes; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (is_array($itinerary) && !empty($itinerary)): ?>
                            <div class="itinerary-section mb-4">
                                <h4 class="fw-bold text-primary mb-3 text-uppercase" style="font-size: 1.1rem;">Itinerario Detallado</h4>
                                <div class="accordion accordion-flush shadow-sm border" id="itineraryAccordion">
                                    <?php $i = 0;
                                    foreach ($itinerary as $step):
                                        if (!is_array($step)) {
                                            continue;
                                        }
                                        $day_num = isset($step['day_number']) ? $step['day_number'] : null;
                                        $title   = isset($step['day_title']) ? $step['day_title'] : '';
                                        $desc    = isset($step['day_description']) ? $step['day_description'] : '';
                                        $meals   = isset($step['meals']) ? $step['meals'] : array();
                                        $accom   = isset($step['accommodation']) ? $step['accommodation'] : '';
                                        if ($title || $desc || $day_num): $i++;
                                    ?>
                                            <div class="accordion-item rounded-0">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button <?php echo ($i > 1) ? 'collapsed' : ''; ?> fw-bold rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#day-<?php echo $i; ?>">
                                                        <span class="text-primary me-2 text-uppercase">Día <?php echo esc_html($day_num ? $day_num : $i); ?>:</span> <?php echo esc_html($title); ?>
                                                    </button>
                                                </h2>
                                                <div id="day-<?php echo $i; ?>" class="accordion-collapse collapse <?php echo ($i == 1) ? 'show' : ''; ?>" data-bs-parent="#itineraryAccordion">
                                                    <div class="accordion-body text-secondary lh-lg">
                                                        <?php echo wp_kses_post(wpautop($desc)); ?>

                                                        <?php if (!empty($meals) || $accom): ?>
                                                            <div class="row g-2 mt-3">
                                                                <?php if (!empty($meals) && is_array($meals)): ?>
                                                                    <div class="col-sm-6">
                                                                        <small class="d-block fw-bold text-dark">Comidas:</small>
                                                                        <small class="text-muted"><?php echo esc_html(implode(', ', $meals)); ?></small>
                                                                    </div>
                                                                <?php endif; ?>

                                                                <?php if ($accom): ?>
                                                                    <div class="col-sm-6">
                                                                        <small class="d-block fw-bold text-dark">Alojamiento:</small>
                                                                        <small class="text-muted"><?php echo esc_html($accom); ?></small>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php endif;
                                    endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="gallery-section mt-5">
                            <h4 class="fw-bold text-primary mb-3 text-uppercase" style="font-size: 1.1rem;">Galería de Imágenes</h4>
                            <style>
                                .tour-gallery-item {
                                    cursor: zoom-in;
                                }

                                .tour-gallery-thumb {
                                    height: 200px;
                                    width: 100%;
                                    object-fit: cover;
                                    transition: transform 0.25s ease;
                                }

                                .tour-gallery-item:hover .tour-gallery-thumb {
                                    transform: scale(1.04);
                                }
                            </style>

                            <div class="row g-2" id="tour-lightgallery">
                                <?php
                                for ($g = 1; $g <= 9; $g++):
                                    $img_data = get_field('tour_gallery_' . $g);
                                    if (!empty($img_data)):
                                        if (is_numeric($img_data)) {
                                            $img_url = wp_get_attachment_image_url($img_data, 'large');
                                            $img_full_url = wp_get_attachment_image_url($img_data, 'full');
                                            $img_alt = get_post_meta($img_data, '_wp_attachment_image_alt', true);
                                        } elseif (is_array($img_data)) {
                                            $img_url = isset($img_data['sizes']['large']) ? $img_data['sizes']['large'] : $img_data['url'];
                                            $img_full_url = $img_data['url'];
                                            $img_alt = $img_data['alt'];
                                        } else {
                                            $img_url = $img_data;
                                            $img_full_url = $img_data;
                                            $img_alt = get_the_title();
                                        }
                                        if ($img_url):
                                            if (empty($img_full_url)) {
                                                $img_full_url = $img_url;
                                            }
                                        ?>
                                            <div class="col-md-4">
                                                <a
                                                    href="<?php echo esc_url($img_full_url); ?>"
                                                    class="tour-gallery-item d-block overflow-hidden"
                                                    data-src="<?php echo esc_url($img_full_url); ?>"
                                                >
                                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>" class="img-fluid rounded-0 shadow-sm tour-gallery-thumb">
                                                </a>
                                            </div>
                                <?php endif;
                                    endif;
                                endfor; ?>
                            </div>
                        </div>

                        <?php
                        $tour_map_iframe = get_field('tour_map_iframe');
                        $tour_map_iframe = is_string($tour_map_iframe) ? trim($tour_map_iframe) : '';
                        if ($tour_map_iframe):
                            $allowed_iframe = array(
                                'iframe' => array(
                                    'src'            => true,
                                    'width'          => true,
                                    'height'         => true,
                                    'style'          => true,
                                    'title'          => true,
                                    'loading'        => true,
                                    'referrerpolicy' => true,
                                    'allowfullscreen' => true,
                                    'allow'          => true,
                                    'frameborder'    => true,
                                    'class'          => true,
                                ),
                            );
                        ?>
                            <div class="bg-white p-4 mt-5 shadow-sm border-0 rounded-0">
                                <h4 class="fw-bold text-primary border-bottom pb-2 mb-3 text-uppercase" style="font-size: 1.1rem;">Mapa</h4>
                                <div class="ratio ratio-16x9">
                                    <?php echo wp_kses($tour_map_iframe, $allowed_iframe); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>

                    <div class="col-lg-4">
                        <div class="sticky-top" style="top: 100px; z-index: 10;">
                            <div class="bg-white p-4 shadow-sm border-top border-primary border-4 rounded-0">
                                <h5 class="fw-bold mb-3 text-uppercase" style="font-size: 1rem;">Reservar este Tour</h5>
                                <p class="text-muted small">Consulta disponibilidad y precios personalizados vía WhatsApp.</p>
                                <ul class="list-unstyled mb-4 small">
                                    <li class="mb-2"><i class="bi bi-check2 text-success me-2 fw-bold"></i> Operador 100% Local</li>
                                    <li class="mb-2"><i class="bi bi-check2 text-success me-2 fw-bold"></i> Guías Certificados</li>
                                    <li class="mb-2"><i class="bi bi-check2 text-success me-2 fw-bold"></i> Soporte 24/7 en Cusco</li>
                                </ul>
                                <a href="https://wa.me/51990725647?text=Hola! Quiero información sobre: <?php echo urlencode(get_the_title()); ?>" target="_blank" class="btn btn-success w-100 rounded-0 py-3 fw-bold">
                                    <i class="bi bi-whatsapp me-2 text-white"></i> Consultar por WhatsApp
                                </a>
                            </div>

                            <div class="bg-primary text-white p-4 mt-4 rounded-0 shadow-sm">
                                <h6 class="fw-bold mb-2 text-uppercase">¿Necesitas Ayuda?</h6>
                                <p class="small mb-0 opacity-75">Contáctanos directamente para dudas sobre el clima o circuitos.</p>
                                <hr class="border-light opacity-50">
                                <div class="fw-bold fs-5"><i class="bi bi-telephone-fill me-2"></i>+51 990725647</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    var galleryContainer = document.getElementById('tour-lightgallery');

                    if (galleryContainer) {
                        if (typeof lightGallery !== 'function') {
                            return;
                        }

                        var plugins = [];
                        if (typeof lgThumbnail !== 'undefined') {
                            plugins.push(lgThumbnail);
                        }

                        lightGallery(galleryContainer, {
                            selector: 'a.tour-gallery-item',
                            plugins: plugins,
                            speed: 500,
                            thumbnail: true,
                            download: false,
                            mode: 'lg-fade'
                        });
                    }
                });
            </script>
        </main>

<?php endwhile;
endif; ?>
<?php get_footer(); ?>