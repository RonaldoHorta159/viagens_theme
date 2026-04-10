<?php
/*
Template Name: Página Contacto
*/
get_header(); 
?>

<style>
    /* Estilos minimalistas para la página Contacto */
    .page-contacto-wrapper {
        max-width: 1100px;
        margin: 60px auto;
        padding: 0 20px;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        color: #333;
    }

    .contacto-hero {
        text-align: center;
        margin-bottom: 50px;
    }

    .contacto-hero h1 {
        font-size: 2.5rem;
        color: #2c3e50;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .contacto-hero p {
        font-size: 1.1rem;
        color: #666;
    }

    .contacto-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        background: #fff;
        padding: 40px;
        border-radius: 0;
        border: 1px solid #eaeaea;
        box-shadow: 0 4px 6px rgba(0,0,0,0.02);
    }

    /* Columna de Información */
    .contacto-info h3 {
        font-size: 1.5rem;
        color: #2c3e50;
        margin-bottom: 25px;
    }

    .info-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }

    .info-icon {
        font-size: 1.5rem;
        margin-right: 15px;
        color: var(--bs-primary);
        line-height: 1;
    }

    .info-text h4 {
        margin: 0 0 5px 0;
        font-size: 1.1rem;
        color: #333;
    }

    .info-text p, .info-text a {
        margin: 0;
        font-size: 1rem;
        color: #666;
        text-decoration: none;
        line-height: 1.5;
    }

    .info-text a:hover {
        color: #2c3e50;
        text-decoration: underline;
    }

    /* Columna del Formulario */
    .contacto-form h3 {
        font-size: 1.5rem;
        color: #2c3e50;
        margin-bottom: 25px;
    }

    /* Estilos para adaptar el WPForms al diseño de la página */
    .wpforms-container .wpforms-field-label {
        font-weight: 500 !important;
        color: #333 !important;
        margin-bottom: 8px !important;
        display: block !important;
    }
    
    .wpforms-container input[type=text], 
    .wpforms-container input[type=email], 
    .wpforms-container textarea {
        width: 100% !important;
        padding: 12px !important;
        border: 1px solid #ccc !important;
        border-radius: 0 !important;
        font-family: inherit !important;
        font-size: 1rem !important;
    }

    .wpforms-container input:focus, 
    .wpforms-container textarea:focus {
        outline: none !important;
        border-color: #2c3e50 !important;
    }

    .wpforms-container button[type=submit] {
        background: #2c3e50 !important;
        color: #fff !important;
        border: none !important;
        padding: 12px 25px !important;
        font-size: 1rem !important;
        border-radius: 0 !important;
        cursor: pointer !important;
        width: 100% !important;
        transition: background 0.3s ease !important;
    }

    .wpforms-container button[type=submit]:hover {
        background: #1a252f !important;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .contacto-grid {
            grid-template-columns: 1fr;
            padding: 25px;
            gap: 40px;
        }
    }
</style>

<div class="page-contacto-wrapper">

    <section class="contacto-hero">
        <h1>Contáctanos</h1>
        <p>Estamos aquí para ayudarte a planificar tu próxima gran aventura.</p>
    </section>

    <div class="contacto-grid">
        
        <div class="contacto-info">
            <h3>Información de Contacto</h3>
            
            <div class="info-item">
                <div class="info-icon"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i></div>
                <div class="info-text">
                    <h4>Dirección</h4>
                    <p>Calle Inka Simpa-L1, Machupicchu</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon"><i class="bi bi-envelope-fill" aria-hidden="true"></i></div>
                <div class="info-text">
                    <h4>Email</h4>
                    <a href="mailto:info@viagensmachupicchubrasil.com">info@viagensmachupicchubrasil.com</a>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon"><i class="bi bi-whatsapp" aria-hidden="true"></i></div>
                <div class="info-text">
                    <h4>Teléfonos / WhatsApp</h4>
                    <p><a href="tel:+51990725647">+51 990 725 647</a></p>
                    <p><a href="tel:+51982682774">+51 982 682 774</a></p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon"><i class="bi bi-globe2" aria-hidden="true"></i></div>
                <div class="info-text">
                    <h4>Sitio Web</h4>
                    <a href="https://www.viagensmachupicchubrasil.com" target="_blank" rel="noopener noreferrer">www.viagensmachupicchubrasil.com</a>
                </div>
            </div>
        </div>

        <div class="contacto-form">
            <h3>Envíanos un Mensaje</h3>
            
            <?php echo do_shortcode('[wpforms id="1307" title="false"]'); ?>
            
        </div>

    </div>

</div>

<?php get_footer(); ?>
