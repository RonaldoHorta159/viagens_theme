<?php
/*
Template Name: Página Términos y Condiciones
*/
get_header(); 
?>

<style>
    /* Estilos para la página de Términos y Condiciones */
    .page-terminos-wrapper {
        max-width: 800px; /* Más estrecho para facilitar la lectura */
        margin: 60px auto;
        padding: 0 20px;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        color: #333;
        line-height: 1.8;
    }

    .terminos-hero {
        text-align: center;
        margin-bottom: 50px;
        border-bottom: 2px solid #eaeaea;
        padding-bottom: 30px;
    }

    .terminos-hero h1 {
        font-size: 2.5rem;
        color: #2c3e50;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .terminos-hero p {
        font-size: 1.1rem;
        color: #666;
    }

    .terminos-content {
        background: #fff;
        padding: 40px;
        border-radius: 0;
        border: 1px solid #eaeaea;
        box-shadow: 0 4px 6px rgba(0,0,0,0.02);
    }

    .terminos-content h3 {
        font-size: 1.3rem;
        color: #2c3e50;
        margin-top: 30px;
        margin-bottom: 15px;
        border-left: 0px solid #2c3e50;
        padding-left: 10px;
    }

    .terminos-content h3:first-child {
        margin-top: 0;
    }

    .terminos-content p {
        font-size: 1rem;
        color: #555;
        margin-bottom: 15px;
    }

    .terminos-content ul {
        margin-bottom: 20px;
        padding-left: 20px;
    }

    .terminos-content li {
        font-size: 1rem;
        color: #555;
        margin-bottom: 8px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-terminos-wrapper {
            margin: 40px auto;
        }
        .terminos-content {
            padding: 25px;
        }
        .terminos-hero h1 {
            font-size: 2rem;
        }
    }
</style>

<div class="page-terminos-wrapper">

    <section class="terminos-hero">
        <h1>Términos y Condiciones</h1>
        <p>Políticas oficiales de reserva, operación y responsabilidades de Viagens Machupicchu Brasil.</p>
    </section>

    <div class="terminos-content">

        <h3>1. Aceptación del servicio</h3>
        <p>Al realizar una reserva y/o pago a través de nuestra pasarela de pagos, el cliente declara haber leído, comprendido y aceptado los presentes Términos de Servicio y Políticas Comerciales.</p>

        <h3>2. Servicios ofrecidos</h3>
        <p>Ofrecemos la comercialización y operación de tours y servicios turísticos en Cusco, Machu Picchu y otros destinos del Perú, en modalidad privada o grupal, sujetos a disponibilidad.</p>

        <h3>3. Reservas, depósitos y pagos</h3>
        <p>Para confirmar cualquier reserva se requiere un depósito mínimo del 30% del valor total del paquete o servicio, el cual deberá realizarse mediante nuestra pasarela de pagos autorizada.</p>
        <p>Los costos de comisión de la pasarela de pago son asumidos por el pasajero.</p>
        <p>El saldo restante deberá pagarse en efectivo a su arribo a la ciudad del Cusco, hasta 24 horas antes del inicio de los servicios.</p>

        <h3>4. Políticas de cancelación y reembolsos</h3>
        <p>Cancelaciones con más de 7 días de anticipación: reembolso parcial sujeto a gastos administrativos y penalidades de proveedores.</p>
        <p>Cancelaciones dentro de 7 días: no reembolsables.</p>
        <p>Servicios iniciados o no presentaciones (no-show): no reembolsables.</p>
        <p>Para servicios de Machu Picchu y trenes aplican penalidades de hasta el 100% según políticas de los operadores.</p>

        <h3>5. Cambios de fecha</h3>
        <p>Sujetos a disponibilidad y posibles penalidades. Deben solicitarse con mínimo 7 días de anticipación.</p>

        <h3>6. Seguros de viaje</h3>
        <p>Nuestros servicios no incluyen seguros de viaje.</p>

        <h3>7. Responsabilidad del cliente</h3>
        <p>El cliente es responsable de:</p>
        <ul>
            <li>Portar documentos vigentes.</li>
            <li>Cumplir horarios establecidos.</li>
            <li>Informar condiciones médicas relevantes.</li>
        </ul>

        <h3>8. Responsabilidad de la empresa</h3>
        <p>Actuamos como intermediarios y/u operadores de servicios turísticos. No somos responsables por retrasos, cancelaciones o eventos de fuerza mayor (clima, huelgas, desastres naturales, disposiciones gubernamentales u otros).</p>

        <h3>9. Fuerza mayor</h3>
        <p>En caso de eventos externos que impidan la operación del tour, se ofrecerán alternativas o reprogramaciones sin responsabilidad económica adicional para la empresa.</p>

        <h3>10. Uso de la pasarela de pago</h3>
        <p>La información financiera es procesada mediante plataformas seguras. No almacenamos datos de tarjetas. El cliente acepta las políticas antifraude y de validación de pagos.</p>

        <h3>11. Contacto</h3>
        <p>Toda solicitud de cambio, cancelación o consulta deberá realizarse mediante nuestros canales oficiales informados en la página web.</p>

    </div>

</div>

<?php get_footer(); ?>
