<?php
get_header(); 

// 1. CAPTURAR VARIABLES DE LA URL (Para los filtros)
$filtro_destino = isset($_GET['destino']) ? sanitize_text_field(wp_unslash($_GET['destino'])) : '';
$filtro_tipo    = isset($_GET['tipo_tour']) ? sanitize_text_field(wp_unslash($_GET['tipo_tour'])) : '';
$filtro_dif     = isset($_GET['dificultad']) ? sanitize_text_field(wp_unslash($_GET['dificultad'])) : '';

// 2. PREPARAR LA CONSULTA (WP_Query)
$args = array(
    'post_type'      => 'tour',
    'posts_per_page' => 12, // Tours por página
    'tax_query'      => array('relation' => 'AND')
);

if ($filtro_destino) {
    $args['tax_query'][] = array('taxonomy' => 'destino', 'field' => 'slug', 'terms' => $filtro_destino);
}
if ($filtro_tipo) {
    $args['tax_query'][] = array('taxonomy' => 'tipo_tour', 'field' => 'slug', 'terms' => $filtro_tipo);
}
if ($filtro_dif) {
    $args['tax_query'][] = array('taxonomy' => 'dificultad', 'field' => 'slug', 'terms' => $filtro_dif);
}

$tours_query = new WP_Query($args);
?>

<div class="tours-archive-container">
    
    <aside class="tours-sidebar">
        <h3 class="mb-4 fw-bold"><i class="bi bi-funnel-fill text-primary me-2"></i>Filtrar tours</h3>
        <form action="<?php echo esc_url(get_post_type_archive_link('tour')); ?>" method="GET" class="tours-filter-form">
            
            <div class="filter-group">
                <label><i class="bi bi-geo-alt-fill text-secondary me-1"></i> Destino</label>
                <select name="destino" class="rounded-0 form-select">
                    <option value="">Todos los destinos</option>
                    <?php 
                    $destinos = get_terms(array('taxonomy' => 'destino', 'hide_empty' => true));
                    foreach($destinos as $dest) {
                        $selected = ($filtro_destino === $dest->slug) ? 'selected' : '';
                        echo "<option value='" . esc_attr($dest->slug) . "' {$selected}>" . esc_html($dest->name) . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="bi bi-backpack-fill text-secondary me-1"></i> Tipo de Viaje</label>
                <select name="tipo_tour" class="rounded-0 form-select">
                    <option value="">Todos los tipos</option>
                    <?php 
                    $tipos = get_terms(array('taxonomy' => 'tipo_tour', 'hide_empty' => true));
                    foreach($tipos as $tipo) {
                        $selected = ($filtro_tipo === $tipo->slug) ? 'selected' : '';
                        echo "<option value='" . esc_attr($tipo->slug) . "' {$selected}>" . esc_html($tipo->name) . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="bi bi-graph-up text-secondary me-1"></i> Dificultad</label>
                <select name="dificultad" class="rounded-0 form-select">
                    <option value="">Cualquier dificultad</option>
                    <?php 
                    $dificultades = get_terms(array('taxonomy' => 'dificultad', 'hide_empty' => true));
                    foreach($dificultades as $dif) {
                        $selected = ($filtro_dif === $dif->slug) ? 'selected' : '';
                        echo "<option value='" . esc_attr($dif->slug) . "' {$selected}>" . esc_html($dif->name) . "</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn-filter rounded-0 w-100 fw-bold mt-3"><i class="bi bi-search me-1"></i> Aplicar Filtros</button>
            <a href="<?php echo esc_url(get_post_type_archive_link('tour')); ?>" class="btn-clear rounded-0 w-100 mt-2"><i class="bi bi-x-circle me-1"></i> Limpiar</a>
        </form>
    </aside>

    <main class="tours-grid-content">
        <?php if ( $tours_query->have_posts() ) : ?>
            <div class="tours-grid">
                <?php while ( $tours_query->have_posts() ) : $tours_query->the_post(); 
                    
                    // Recuperamos los campos de ACF correctos que tienes en tu backend
                    $dias = get_field('tour_days') ? get_field('tour_days') : '1';
                    $noches = get_field('tour_nights') ? get_field('tour_nights') : '0';
                    $dificultad_acf = get_field('tour_difficulty') ? get_field('tour_difficulty') : 'Moderada';
                ?>
                    
                    <article class="tour-card rounded-0">
                        <div class="tour-card-img rounded-0">
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()) { 
                                    the_post_thumbnail('medium_large', ['class' => 'img-fluid w-100 rounded-0', 'style' => 'height: 220px; object-fit: cover;']); 
                                } else {
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/default-tour.jpg" alt="Tour" class="img-fluid w-100 rounded-0" style="height: 220px; object-fit: cover;">';
                                }?>
                            </a>
                        </div>
                        <div class="tour-card-info p-4">
                            <h4 class="fw-bold mb-3" style="font-size: 1.1rem;"><a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a></h4>
                            <div class="tour-meta d-flex justify-content-between mb-4 pb-3 border-bottom text-secondary" style="font-size: 0.9rem;">
                                <span><i class="bi bi-clock-fill text-primary me-1"></i> <?php echo esc_html($dias); ?> D / <?php echo esc_html($noches); ?> N</span>
                                <span><i class="bi bi-bar-chart-fill text-primary me-1"></i> <?php echo esc_html($dificultad_acf); ?></span>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn-ver-mas btn btn-outline-primary rounded-0 w-100 fw-bold border-2">Ver Detalles <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </article>

                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            
            <div class="tours-pagination mt-5 text-center">
                <?php 
                echo paginate_links(array(
                    'total' => $tours_query->max_num_pages,
                    'prev_text' => '<i class="bi bi-chevron-left"></i> Anterior',
                    'next_text' => 'Siguiente <i class="bi bi-chevron-right"></i>',
                    'type' => 'list'
                )); 
                ?>
            </div>

        <?php else : ?>
            <div class="text-center py-5 bg-white border">
                <i class="bi bi-emoji-frown text-secondary display-1 mb-3"></i>
                <h4 class="fw-bold text-secondary">No se encontraron tours</h4>
                <p class="text-muted">Intenta buscar con otros filtros o explora todos nuestros paquetes.</p>
                <a href="<?php echo esc_url(get_post_type_archive_link('tour')); ?>" class="btn btn-primary rounded-0 mt-3">Ver todos los tours</a>
            </div>
        <?php endif; ?>
    </main>

</div>

<?php get_footer(); ?>