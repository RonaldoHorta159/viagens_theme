<?php
get_header(); 

// 1. CAPTURAR VARIABLES DE LA URL (Para los filtros)
$filtro_destino = isset($_GET['destino']) ? $_GET['destino'] : '';
$filtro_tipo    = isset($_GET['tipo_tour']) ? $_GET['tipo_tour'] : '';
$filtro_dif     = isset($_GET['dificultad']) ? $_GET['dificultad'] : '';

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
        <h3>Filtrar Experiencias</h3>
        <form action="<?php echo get_post_type_archive_link('tour'); ?>" method="GET" class="tours-filter-form">
            
            <div class="filter-group">
                <label>Destino</label>
                <select name="destino">
                    <option value="">Todos los destinos</option>
                    <?php 
                    $destinos = get_terms(array('taxonomy' => 'destino', 'hide_empty' => true));
                    foreach($destinos as $dest) {
                        $selected = ($filtro_destino == $dest->slug) ? 'selected' : '';
                        echo "<option value='{$dest->slug}' {$selected}>{$dest->name}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="filter-group">
                <label>Tipo de Viaje</label>
                <select name="tipo_tour">
                    <option value="">Todos los tipos</option>
                    <?php 
                    $tipos = get_terms(array('taxonomy' => 'tipo_tour', 'hide_empty' => true));
                    foreach($tipos as $tipo) {
                        $selected = ($filtro_tipo == $tipo->slug) ? 'selected' : '';
                        echo "<option value='{$tipo->slug}' {$selected}>{$tipo->name}</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn-filter">Aplicar Filtros</button>
            <a href="<?php echo get_post_type_archive_link('tour'); ?>" class="btn-clear">Limpiar</a>
        </form>
    </aside>

    <main class="tours-grid-content">
        <?php if ( $tours_query->have_posts() ) : ?>
            <div class="tours-grid">
                <?php while ( $tours_query->have_posts() ) : $tours_query->the_post(); 
                    // Recuperar datos ACF
                    $dias = get_field('dias');
                    $dificultad_acf = get_field('dificultad');
                ?>
                    
                    <article class="tour-card">
                        <div class="tour-card-img">
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()) { the_post_thumbnail('medium_large'); } ?>
                            </a>
                        </div>
                        <div class="tour-card-info">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="tour-meta">
                                <span>⏱️ <?php echo esc_html($dias); ?></span>
                                <span>🏔️ <?php echo esc_html($dificultad_acf); ?></span>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn-ver-mas">Ver Detalles</a>
                        </div>
                    </article>

                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            
            <div class="tours-pagination">
                <?php 
                echo paginate_links(array(
                    'total' => $tours_query->max_num_pages
                )); 
                ?>
            </div>

        <?php else : ?>
            <p>No se encontraron tours con esos filtros. ¡Prueba otra combinación!</p>
        <?php endif; ?>
    </main>

</div>

<?php get_footer(); ?>