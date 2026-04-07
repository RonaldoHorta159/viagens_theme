<?php
/*
Template Name: Galería Cuatrimotos
*/
get_header(); 
?>

<style>
    .atv-hero {
        text-align: center;
        padding: 60px 20px;
        background: #1a1a1a;
        color: #fff;
    }
    .atv-hero h1 {
        font-size: 3rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 15px;
        color: #f1c40f; 
    }
    .atv-hero p {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto;
        color: #ddd;
    }
    
    .atv-gallery-wrapper {
        max-width: 1200px;
        margin: 50px auto;
        padding: 0 20px;
    }
    
    .atv-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 15px;
        grid-auto-flow: dense;
    }
    
    .atv-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        height: 250px;
    }
    
    .atv-item.large {
        grid-column: span 2;
        grid-row: span 2;
        height: 515px;
    }
    
    .atv-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .atv-item:hover img {
        transform: scale(1.1);
    }
    
    .atv-cta {
        text-align: center;
        margin: 60px 0;
    }
    
    .atv-cta a {
        background: #2c3e50;
        color: #fff;
        padding: 15px 30px;
        font-size: 1.2rem;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }
    
    @media (max-width: 768px) {
        .atv-item.large {
            grid-column: span 1;
            grid-row: span 1;
            height: 250px;
        }
    }
</style>

<section class="atv-hero">
    <h1>Aventura en Cuatrimotos</h1>
    <p>Siente la adrenalina recorriendo los paisajes más espectaculares del Valle Sagrado. Únete a los cientos de viajeros que ya vivieron la experiencia sobre ruedas.</p>
</section>

<div class="atv-gallery-wrapper">
    <div class="atv-grid">
        
        <?php 
        $hay_imagenes = false;
        $contador_diseno = 1; 

        // Hacemos un bucle del 1 al 20 (Si creaste más de 20 campos, cambia este número)
        for ( $i = 1; $i <= 20; $i++ ) {
            
            // Construimos el nombre del campo (foto_1, foto_2, etc.)
            $nombre_campo = 'foto_' . $i;
            $imagen = get_field($nombre_campo);
            
            // Si el campo tiene una imagen subida, la mostramos
            if ( $imagen ) {
                $hay_imagenes = true;
                
                // Lógica de diseño: la foto 1 y la 6 son grandes
                $clase_extra = ($contador_diseno == 1 || $contador_diseno == 6) ? 'large' : '';
                ?>
                
                <div class="atv-item <?php echo esc_attr($clase_extra); ?>">
                    <img src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
                </div>
                
                <?php
                $contador_diseno++;
                // Reiniciamos el patrón de diseño cada 8 fotos
                if ( $contador_diseno > 8 ) {
                    $contador_diseno = 1;
                }
            }
        }

        // Si el bucle terminó y no encontró ni una sola imagen, mostramos este mensaje
        if ( ! $hay_imagenes ) : ?>
            <p style="text-align:center; grid-column: 1 / -1; padding: 40px; background: #f9f9f9; border-radius: 8px;">
                Aún no se han subido fotos a la galería. Añádelas desde el panel de edición de la página.
            </p>
        <?php endif; ?>

    </div>
    
    <div class="atv-cta">
        <a href="<?php echo esc_url(home_url('/tours/?tipo_tour=cuatrimotos')); ?>">Ver Todos los Tours de Cuatrimotos</a>
    </div>
</div>

<?php get_footer(); ?>