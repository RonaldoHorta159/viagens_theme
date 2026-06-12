<?php
get_header(); 
$filtro_destino = isset($_GET['destino']) ? sanitize_text_field(wp_unslash($_GET['destino'])) : '';
$filtro_tipo    = isset($_GET['tipo_tour']) ? sanitize_text_field(wp_unslash($_GET['tipo_tour'])) : '';
$filtro_dif     = isset($_GET['dificultad']) ? sanitize_text_field(wp_unslash($_GET['dificultad'])) : '';

$search_term    = isset($_GET['s']) ? sanitize_text_field(wp_unslash($_GET['s'])) : '';
$sort           = isset($_GET['sort']) ? sanitize_key(wp_unslash($_GET['sort'])) : 'latest';
$view           = isset($_GET['view']) ? sanitize_key(wp_unslash($_GET['view'])) : 'grid';
$view           = in_array($view, array('grid', 'list'), true) ? $view : 'grid';

$paged = max(1, (int) get_query_var('paged'), (int) get_query_var('page'));

$args = array(
    'post_type'           => 'tour',
    'posts_per_page'      => 12,
    'paged'               => $paged,
    'ignore_sticky_posts' => true,
);

if ($search_term !== '') {
    $args['s'] = $search_term;
}

$tax_query = array('relation' => 'AND');

if ($filtro_destino) {
    $tax_query[] = array('taxonomy' => 'destino', 'field' => 'slug', 'terms' => $filtro_destino);
}
if ($filtro_tipo) {
    $tax_query[] = array('taxonomy' => 'tipo_tour', 'field' => 'slug', 'terms' => $filtro_tipo);
}
if ($filtro_dif) {
    $tax_query[] = array('taxonomy' => 'dificultad', 'field' => 'slug', 'terms' => $filtro_dif);
}

if (count($tax_query) > 1) {
    $args['tax_query'] = $tax_query;
}

switch ($sort) {
    case 'oldest':
        $args['orderby'] = 'date';
        $args['order']   = 'ASC';
        break;
    case 'title_asc':
        $args['orderby'] = 'title';
        $args['order']   = 'ASC';
        break;
    case 'title_desc':
        $args['orderby'] = 'title';
        $args['order']   = 'DESC';
        break;
    case 'duration_asc':
        $args['meta_key'] = 'tour_days';
        $args['orderby']  = 'meta_value_num';
        $args['order']    = 'ASC';
        break;
    case 'duration_desc':
        $args['meta_key'] = 'tour_days';
        $args['orderby']  = 'meta_value_num';
        $args['order']    = 'DESC';
        break;
    case 'latest':
    default:
        $sort            = 'latest';
        $args['orderby'] = 'date';
        $args['order']   = 'DESC';
        break;
}

$tours_query = new WP_Query($args);

$current_args = array();
$current_args['destino']    = $filtro_destino;
$current_args['tipo_tour']  = $filtro_tipo;
$current_args['dificultad'] = $filtro_dif;
$current_args['s']          = $search_term;
$current_args['sort']       = $sort;
$current_args['view']       = $view;
$current_args = array_filter(
    $current_args,
    static function ($value) {
        return $value !== null && $value !== '';
    }
);

$base_archive_link = get_post_type_archive_link('tour');
?>

<section class="tours-archive">
    <div class="container py-5">

        <header class="tours-archive__header mb-4">
            <h1 class="tours-archive__title m-0"><?php post_type_archive_title(); ?></h1>
            <p class="tours-archive__subtitle text-muted mt-2 mb-0">Encuentra el tour ideal filtrando por destino, tipo y dificultad.</p>
        </header>

        <form action="<?php echo esc_url($base_archive_link); ?>" method="get" class="tours-archive__form" id="toursArchiveForm">

            <div class="tours-toolbar">
                <div class="tours-toolbar__left">
                    <button
                        class="btn btn-outline-secondary d-lg-none tours-toolbar__filters-btn"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#tourFilters"
                        aria-controls="tourFilters"
                    >
                        <i class="bi bi-funnel me-2"></i>Filtros
                    </button>

                    <div class="tours-toolbar__search">
                        <label class="visually-hidden" for="tourSearch">Buscar tours</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                            <input
                                type="search"
                                id="tourSearch"
                                name="s"
                                class="form-control"
                                placeholder="Search"
                                value="<?php echo esc_attr($search_term); ?>"
                            />
                        </div>
                    </div>
                </div>

                <div class="tours-toolbar__right">
                    <div class="tours-toolbar__count text-muted d-none d-md-block">
                        <?php
                        $total_posts   = (int) $tours_query->found_posts;
                        $per_page      = (int) $tours_query->get('posts_per_page');
                        $current_page  = max(1, (int) $tours_query->get('paged'));
                        $start_index   = ($total_posts > 0) ? (($current_page - 1) * $per_page + 1) : 0;
                        $end_index     = min($total_posts, $current_page * $per_page);
                        if ($total_posts > 0) {
                            echo esc_html(sprintf('Mostrando %1$d–%2$d de %3$d', $start_index, $end_index, $total_posts));
                        } else {
                            echo esc_html('Sin resultados');
                        }
                        ?>
                    </div>

                    <div class="tours-toolbar__sort">
                        <label class="visually-hidden" for="tourSort">Ordenar</label>
                        <select name="sort" id="tourSort" class="form-select" onchange="document.getElementById('toursArchiveForm').submit();">
                            <option value="latest" <?php selected($sort, 'latest'); ?>>Más recientes</option>
                            <option value="oldest" <?php selected($sort, 'oldest'); ?>>Más antiguos</option>
                            <option value="title_asc" <?php selected($sort, 'title_asc'); ?>>Nombre: A–Z</option>
                            <option value="title_desc" <?php selected($sort, 'title_desc'); ?>>Nombre: Z–A</option>
                            <option value="duration_asc" <?php selected($sort, 'duration_asc'); ?>>Duración: menor a mayor</option>
                            <option value="duration_desc" <?php selected($sort, 'duration_desc'); ?>>Duración: mayor a menor</option>
                        </select>
                    </div>

                    <?php
                    $view_grid_url = add_query_arg(array_merge($current_args, array('view' => 'grid')), $base_archive_link);
                    $view_list_url = add_query_arg(array_merge($current_args, array('view' => 'list')), $base_archive_link);
                    ?>
                    <div class="tours-toolbar__view btn-group" role="group" aria-label="Vista">
                        <a href="<?php echo esc_url($view_grid_url); ?>" class="btn btn-outline-secondary <?php echo $view === 'grid' ? 'active' : ''; ?>">
                            <i class="bi bi-grid-3x3-gap"></i><span class="visually-hidden">Vista grid</span>
                        </a>
                        <a href="<?php echo esc_url($view_list_url); ?>" class="btn btn-outline-secondary <?php echo $view === 'list' ? 'active' : ''; ?>">
                            <i class="bi bi-list"></i><span class="visually-hidden">Vista lista</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="tours-archive__layout">

                <aside class="offcanvas-lg offcanvas-start tours-filters" tabindex="-1" id="tourFilters" aria-labelledby="tourFiltersLabel">
                    <div class="offcanvas-header d-lg-none">
                        <h5 class="offcanvas-title" id="tourFiltersLabel"><i class="bi bi-funnel me-2"></i>Filtrar</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
                    </div>

                    <div class="offcanvas-body p-0">
                        <div class="tours-filters__card">
                            <h3 class="tours-filters__title">Filter By</h3>

                            <div class="accordion tours-filters__accordion" id="tourFiltersAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="filtersDestinoHeading">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#filtersDestino" aria-expanded="true" aria-controls="filtersDestino">
                                            Destino
                                        </button>
                                    </h2>
                                    <div id="filtersDestino" class="accordion-collapse collapse show" aria-labelledby="filtersDestinoHeading" data-bs-parent="#tourFiltersAccordion">
                                        <div class="accordion-body">
                                            <div class="tours-filter-list">
                                                <label class="form-check">
                                                    <input class="form-check-input" type="radio" name="destino" value="" <?php checked($filtro_destino, ''); ?>>
                                                    <span class="form-check-label">Todos</span>
                                                </label>
                                                <?php
                                                $destinos = get_terms(array('taxonomy' => 'destino', 'hide_empty' => true));
                                                foreach ($destinos as $dest) :
                                                    $input_id = 'destino-' . $dest->term_id;
                                                ?>
                                                    <label class="form-check" for="<?php echo esc_attr($input_id); ?>">
                                                        <input class="form-check-input" id="<?php echo esc_attr($input_id); ?>" type="radio" name="destino" value="<?php echo esc_attr($dest->slug); ?>" <?php checked($filtro_destino, $dest->slug); ?>>
                                                        <span class="form-check-label"><?php echo esc_html($dest->name); ?></span>
                                                    </label>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="filtersTipoHeading">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filtersTipo" aria-expanded="false" aria-controls="filtersTipo">
                                            Tipo de Viaje / Actividades
                                        </button>
                                    </h2>
                                    <div id="filtersTipo" class="accordion-collapse collapse" aria-labelledby="filtersTipoHeading" data-bs-parent="#tourFiltersAccordion">
                                        <div class="accordion-body">
                                            <div class="tours-filter-list">
                                                <label class="form-check">
                                                    <input class="form-check-input" type="radio" name="tipo_tour" value="" <?php checked($filtro_tipo, ''); ?>>
                                                    <span class="form-check-label">Todos</span>
                                                </label>
                                                <?php
                                                $tipos = get_terms(array('taxonomy' => 'tipo_tour', 'hide_empty' => true));
                                                foreach ($tipos as $tipo) :
                                                    $input_id = 'tipo-' . $tipo->term_id;
                                                ?>
                                                    <label class="form-check" for="<?php echo esc_attr($input_id); ?>">
                                                        <input class="form-check-input" id="<?php echo esc_attr($input_id); ?>" type="radio" name="tipo_tour" value="<?php echo esc_attr($tipo->slug); ?>" <?php checked($filtro_tipo, $tipo->slug); ?>>
                                                        <span class="form-check-label"><?php echo esc_html($tipo->name); ?></span>
                                                    </label>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="filtersDifHeading">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#filtersDif" aria-expanded="false" aria-controls="filtersDif">
                                            Dificultad
                                        </button>
                                    </h2>
                                    <div id="filtersDif" class="accordion-collapse collapse" aria-labelledby="filtersDifHeading" data-bs-parent="#tourFiltersAccordion">
                                        <div class="accordion-body">
                                            <div class="tours-filter-list">
                                                <label class="form-check">
                                                    <input class="form-check-input" type="radio" name="dificultad" value="" <?php checked($filtro_dif, ''); ?>>
                                                    <span class="form-check-label">Cualquiera</span>
                                                </label>
                                                <?php
                                                $dificultades = get_terms(array('taxonomy' => 'dificultad', 'hide_empty' => true));
                                                foreach ($dificultades as $dif) :
                                                    $input_id = 'dif-' . $dif->term_id;
                                                ?>
                                                    <label class="form-check" for="<?php echo esc_attr($input_id); ?>">
                                                        <input class="form-check-input" id="<?php echo esc_attr($input_id); ?>" type="radio" name="dificultad" value="<?php echo esc_attr($dif->slug); ?>" <?php checked($filtro_dif, $dif->slug); ?>>
                                                        <span class="form-check-label"><?php echo esc_html($dif->name); ?></span>
                                                    </label>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="view" value="<?php echo esc_attr($view); ?>">

                            <div class="tours-filters__actions">
                                <button type="submit" class="btn btn-primary w-100 fw-semibold">
                                    Aplicar Filtros
                                </button>
                                <a href="<?php echo esc_url($base_archive_link); ?>" class="btn btn-outline-secondary w-100 mt-2">
                                    Limpiar
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>

                <main class="tours-results">
                    <?php if ($tours_query->have_posts()) : ?>

                        <div class="tours-results__grid <?php echo $view === 'list' ? 'tours-results__grid--list' : ''; ?>">
                            <?php
                            while ($tours_query->have_posts()) :
                                $tours_query->the_post();

                                $dias           = get_field('tour_days') ? get_field('tour_days') : '1';
                                $noches         = get_field('tour_nights') ? get_field('tour_nights') : '0';
                                $dificultad_acf = get_field('tour_difficulty') ? get_field('tour_difficulty') : '';
                                $dias_int       = (int) $dias;
                                $noches_int     = (int) $noches;
                                $duration_text  = $noches_int > 0
                                    ? sprintf('%1$d Días / %2$d Noches', $dias_int, $noches_int)
                                    : sprintf('%1$d Día%2$s', $dias_int, $dias_int === 1 ? '' : 's');
                            ?>

                                <article class="tour-archive-card <?php echo $view === 'list' ? 'tour-archive-card--list' : ''; ?>">
                                    <div class="tour-archive-card__media">
                                        <a class="tour-archive-card__media-link" href="<?php the_permalink(); ?>">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium_large', array('class' => 'tour-archive-card__img', 'loading' => 'lazy'));
                                            } else {
                                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/default-tour.jpg" alt="' . esc_attr(get_the_title()) . '" class="tour-archive-card__img" loading="lazy">';
                                            }
                                            ?>
                                        </a>

                                        <span class="tour-archive-card__badge">
                                            <i class="bi bi-clock me-1"></i><?php echo esc_html($duration_text); ?>
                                        </span>

                                        <button class="tour-archive-card__fav" type="button" aria-label="Agregar a favoritos">
                                            <i class="bi bi-heart"></i>
                                        </button>
                                    </div>

                                    <div class="tour-archive-card__body">
                                        <h3 class="tour-archive-card__title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>

                                        <div class="tour-archive-card__facts" aria-label="Duración y dificultad">
                                            <span><?php echo esc_html($duration_text); ?></span>
                                            <?php if ($dificultad_acf) : ?>
                                                <span class="tour-archive-card__dot" aria-hidden="true">•</span>
                                                <span><?php echo esc_html($dificultad_acf); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <div class="tour-archive-card__footer">
                                            <a href="<?php the_permalink(); ?>" class="btn btn-primary fw-semibold w-100 tour-archive-card__cta">
                                                Ver Detalles
                                            </a>
                                        </div>
                                    </div>
                                </article>

                            <?php endwhile; ?>
                        </div>

                        <?php
                        wp_reset_postdata();

                        $paginate_args = $current_args;
                        unset($paginate_args['paged']);

                        $pagination = paginate_links(array(
                            'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                            'format'    => '',
                            'current'   => $paged,
                            'total'     => (int) $tours_query->max_num_pages,
                            'prev_text' => '<i class="bi bi-chevron-left"></i>',
                            'next_text' => '<i class="bi bi-chevron-right"></i>',
                            'type'      => 'list',
                            'add_args'  => $paginate_args,
                        ));
                        ?>

                        <?php if ($pagination) : ?>
                            <nav class="tours-pagination" aria-label="Paginación">
                                <?php echo wp_kses_post($pagination); ?>
                            </nav>
                        <?php endif; ?>

                    <?php else : ?>

                        <div class="tours-empty">
                            <div class="tours-empty__icon"><i class="bi bi-search"></i></div>
                            <h2 class="tours-empty__title">No se encontraron tours</h2>
                            <p class="tours-empty__text">Prueba ajustando filtros, cambiando la búsqueda o limpiando la selección.</p>
                            <a href="<?php echo esc_url($base_archive_link); ?>" class="btn btn-primary fw-semibold">Ver todos los tours</a>
                        </div>

                    <?php endif; ?>
                </main>
            </div>
        </form>
    </div>
</section>

<?php get_footer(); ?>
