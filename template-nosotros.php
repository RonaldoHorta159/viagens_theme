<?php
/*
Template Name: Página Nosotros
*/
get_header(); 
?>

<style>
    /* Estilos minimalistas para la página Nosotros */
    .page-nosotros-wrapper {
        max-width: 1100px;
        margin: 60px auto;
        padding: 0 20px;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        color: #333;
    }

    .nosotros-hero {
        text-align: center;
        margin-bottom: 60px;
    }

    .nosotros-hero h1 {
        font-size: 2.5rem;
        color: #2c3e50;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .nosotros-hero h2 {
        font-size: 1.2rem;
        color: #7f8c8d;
        font-weight: 300;
        margin-bottom: 40px;
    }

    .quienes-somos-content {
        background: #fdfdfd;
        padding: 40px;
        border-radius: 8px;
        border: 1px solid #eaeaea;
        margin-bottom: 60px;
        line-height: 1.8;
        font-size: 1.1rem;
        color: #555;
    }

    .quienes-somos-content p {
        margin-bottom: 20px;
    }

    .quienes-somos-content p:last-child {
        margin-bottom: 0;
    }

    .por-que-elegirnos-title {
        text-align: center;
        font-size: 2rem;
        color: #2c3e50;
        margin-bottom: 40px;
    }

    .razones-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .razon-card {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        border: 1px solid #eaeaea;
        box-shadow: 0 4px 6px rgba(0,0,0,0.02);
        transition: transform 0.3s ease;
    }

    .razon-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.06);
    }

    .razon-icon {
        font-size: 2.5rem;
        margin-bottom: 20px;
        text-align: center;
    }

    .razon-card h3 {
        font-size: 1.25rem;
        color: #2c3e50;
        margin-bottom: 15px;
        text-align: center;
    }

    .razon-card p {
        font-size: 1rem;
        line-height: 1.6;
        color: #666;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-nosotros-wrapper {
            margin: 40px auto;
        }
        .nosotros-hero h1 {
            font-size: 2rem;
        }
        .quienes-somos-content {
            padding: 25px;
        }
    }
</style>

<div class="page-nosotros-wrapper">

    <section class="nosotros-hero">
        <h1>Viagens Machupicchu Brasil</h1>
        <h2>Sacred Experience</h2>
    </section>

    <section class="quienes-somos-content">
        <h3 style="text-align: center; color: #2c3e50; margin-bottom: 25px; font-size: 1.8rem;">¿Quiénes Somos?</h3>
        <p>Somos operadores 100% locales, de Machupicchu para el mundo, sin intermediarios, especialistas en el público brasilero e hispanohablante, garantizando que usted viva una experiencia inolvidable, auténtica y profundamente transformadora.</p>
        <p>Además de nuestros servicios culturales tradicionales, ofrecemos experiencias espirituales cuidadosamente organizadas, inspiradas en la sabiduría ancestral andina y realizadas con respeto, responsabilidad y autenticidad.</p>
        <p>Nuestro equipo está formado por guías y servidores locales en Machu Picchu, Cusco y todo el Perú, con largos años de experiencia, para brindar vivencias conscientes, seguras y significativas en los Andes.</p>
    </section>

    <section class="por-que-elegirnos">
        <h2 class="por-que-elegirnos-title">¿Por Qué Elegirnos?</h2>
        
        <div class="razones-grid">
            <div class="razon-card">
                <div class="razon-icon">🌎</div>
                <h3>Conexión Cultural</h3>
                <p>Nos especializamos en entender la cultura y perfil del público hispanohablante y Brasileño, asegurando una atención cercana y personalizada en cada etapa de su viaje.</p>
            </div>

            <div class="razon-card">
                <div class="razon-icon">🗣️</div>
                <h3>Guías Nativos y Bilingües</h3>
                <p>Nuestros guías nativos, tienen como lengua materna el Quechua (lengua oficial de los incas) con dominio amplio del idioma Portugués y Español, para brindar experiencias únicas y memorables.</p>
            </div>

            <div class="razon-card">
                <div class="razon-icon">✨</div>
                <h3>Experiencias a Medida</h3>
                <p>¡Vaya más allá de las fotos! Con itinerarios 100% pensados para usted, ofrecemos tours personalizados para garantizar la mejor experiencia y que disfrute al máximo su estadía en el Perú.</p>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>