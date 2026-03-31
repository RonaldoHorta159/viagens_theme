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
        color: #f1c40f; /* Tono aventura/dorado */
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
    
    /* CSS Grid para la Galería */
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
    
    /* Hacer algunas fotos más grandes para romper la monotonía */
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
        <div class="atv-item large"><img src="/wp-content/uploads/cuatri-1.jpg" alt="Cuatrimotos Cusco"></div>
        <div class="atv-item"><img src="/wp-content/uploads/cuatri-2.jpg" alt="Aventura Valle Sagrado"></div>
        <div class="atv-item"><img src="/wp-content/uploads/cuatri-3.jpg" alt="Ruta Maras Moray"></div>
        <div class="atv-item"><img src="/wp-content/uploads/cuatri-4.jpg" alt="Montaña de Colores ATV"></div>
        <div class="atv-item"><img src="/wp-content/uploads/cuatri-5.jpg" alt="Laguna Piuray"></div>
        <div class="atv-item large"><img src="/wp-content/uploads/cuatri-6.jpg" alt="Turistas en Cuatrimoto"></div>
        <div class="atv-item"><img src="/wp-content/uploads/cuatri-7.jpg" alt="Adrenalina Cusco"></div>
        <div class="atv-item"><img src="/wp-content/uploads/cuatri-8.jpg" alt="Guías Cuatrimotos"></div>
    </div>
    
    <div class="atv-cta">
        <a href="/tours/?tipo_tour=cuatrimotos">Ver Todos los Tours de Cuatrimotos</a>
    </div>
</div>

<?php get_footer(); ?>