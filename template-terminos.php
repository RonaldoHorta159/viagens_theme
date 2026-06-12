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
        <h1><?php if (function_exists('pll_e')) { pll_e('Términos y Condiciones'); } else { echo 'Términos y Condiciones'; } ?></h1>
        <p><?php if (function_exists('pll_e')) { pll_e('Políticas oficiales de reserva, operación y responsabilidades de Viagens Machupicchu Brasil.'); } else { echo 'Políticas oficiales de reserva, operación y responsabilidades de Viagens Machupicchu Brasil.'; } ?></p>
    </section>

    <div class="terminos-content">

        <h3><?php if (function_exists('pll_e')) { pll_e('1. Aceptación del servicio'); } else { echo '1. Aceptación del servicio'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('Al realizar una reserva y/o pago a través de nuestra pasarela de pagos, el cliente declara haber leído, comprendido y aceptado los presentes Términos de Servicio y Políticas Comerciales.'); } else { echo 'Al realizar una reserva y/o pago a través de nuestra pasarela de pagos, el cliente declara haber leído, comprendido y aceptado los presentes Términos de Servicio y Políticas Comerciales.'; } ?></p>

        <h3><?php if (function_exists('pll_e')) { pll_e('2. Servicios ofrecidos'); } else { echo '2. Servicios ofrecidos'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('Ofrecemos la comercialización y operación de tours y servicios turísticos en Cusco, Machu Picchu y otros destinos del Perú, en modalidad privada o grupal, sujetos a disponibilidad.'); } else { echo 'Ofrecemos la comercialización y operación de tours y servicios turísticos en Cusco, Machu Picchu y otros destinos del Perú, en modalidad privada o grupal, sujetos a disponibilidad.'; } ?></p>

        <h3><?php if (function_exists('pll_e')) { pll_e('3. Reservas, depósitos y pagos'); } else { echo '3. Reservas, depósitos y pagos'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('Para confirmar cualquier reserva se requiere un depósito mínimo del 30% del valor total del paquete o servicio, el cual deberá realizarse mediante nuestra pasarela de pagos autorizada.'); } else { echo 'Para confirmar cualquier reserva se requiere un depósito mínimo del 30% del valor total del paquete o servicio, el cual deberá realizarse mediante nuestra pasarela de pagos autorizada.'; } ?></p>
        <p><?php if (function_exists('pll_e')) { pll_e('Los costos de comisión de la pasarela de pago son asumidos por el pasajero.'); } else { echo 'Los costos de comisión de la pasarela de pago son asumidos por el pasajero.'; } ?></p>
        <p><?php if (function_exists('pll_e')) { pll_e('El saldo restante deberá pagarse en efectivo a su arribo a la ciudad del Cusco, hasta 24 horas antes del inicio de los servicios.'); } else { echo 'El saldo restante deberá pagarse en efectivo a su arribo a la ciudad del Cusco, hasta 24 horas antes del inicio de los servicios.'; } ?></p>

        <h3><?php if (function_exists('pll_e')) { pll_e('4. Políticas de cancelación y reembolsos'); } else { echo '4. Políticas de cancelación y reembolsos'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('Cancelaciones con más de 7 días de anticipación: reembolso parcial sujeto a gastos administrativos y penalidades de proveedores.'); } else { echo 'Cancelaciones con más de 7 días de anticipación: reembolso parcial sujeto a gastos administrativos y penalidades de proveedores.'; } ?></p>
        <p><?php if (function_exists('pll_e')) { pll_e('Cancelaciones dentro de 7 días: no reembolsables.'); } else { echo 'Cancelaciones dentro de 7 días: no reembolsables.'; } ?></p>
        <p><?php if (function_exists('pll_e')) { pll_e('Servicios iniciados o no presentaciones (no-show): no reembolsables.'); } else { echo 'Servicios iniciados o no presentaciones (no-show): no reembolsables.'; } ?></p>
        <p><?php if (function_exists('pll_e')) { pll_e('Para servicios de Machu Picchu y trenes aplican penalidades de hasta el 100% según políticas de los operadores.'); } else { echo 'Para servicios de Machu Picchu y trenes aplican penalidades de hasta el 100% según políticas de los operadores.'; } ?></p>

        <h3><?php if (function_exists('pll_e')) { pll_e('5. Cambios de fecha'); } else { echo '5. Cambios de fecha'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('Sujetos a disponibilidad y posibles penalidades. Deben solicitarse con mínimo 7 días de anticipación.'); } else { echo 'Sujetos a disponibilidad y posibles penalidades. Deben solicitarse con mínimo 7 días de anticipación.'; } ?></p>

        <h3><?php if (function_exists('pll_e')) { pll_e('6. Seguros de viaje'); } else { echo '6. Seguros de viaje'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('Nuestros servicios no incluyen seguros de viaje.'); } else { echo 'Nuestros servicios no incluyen seguros de viaje.'; } ?></p>

        <h3><?php if (function_exists('pll_e')) { pll_e('7. Responsabilidad del cliente'); } else { echo '7. Responsabilidad del cliente'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('El cliente es responsable de:'); } else { echo 'El cliente es responsable de:'; } ?></p>
        <ul>
            <li><?php if (function_exists('pll_e')) { pll_e('Portar documentos vigentes.'); } else { echo 'Portar documentos vigentes.'; } ?></li>
            <li><?php if (function_exists('pll_e')) { pll_e('Cumplir horarios establecidos.'); } else { echo 'Cumplir horarios establecidos.'; } ?></li>
            <li><?php if (function_exists('pll_e')) { pll_e('Informar condiciones médicas relevantes.'); } else { echo 'Informar condiciones médicas relevantes.'; } ?></li>
        </ul>

        <h3><?php if (function_exists('pll_e')) { pll_e('8. Responsabilidad de la empresa'); } else { echo '8. Responsabilidad de la empresa'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('Actuamos como intermediarios y/u operadores de servicios turísticos. No somos responsables por retrasos, cancelaciones o eventos de fuerza mayor (clima, huelgas, desastres naturales, disposiciones gubernamentales u otros).'); } else { echo 'Actuamos como intermediarios y/u operadores de servicios turísticos. No somos responsables por retrasos, cancelaciones o eventos de fuerza mayor (clima, huelgas, desastres naturales, disposiciones gubernamentales u otros).'; } ?></p>

        <h3><?php if (function_exists('pll_e')) { pll_e('9. Fuerza mayor'); } else { echo '9. Fuerza mayor'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('En caso de eventos externos que impidan la operación del tour, se ofrecerán alternativas o reprogramaciones sin responsabilidad económica adicional para la empresa.'); } else { echo 'En caso de eventos externos que impidan la operación del tour, se ofrecerán alternativas o reprogramaciones sin responsabilidad económica adicional para la empresa.'; } ?></p>

        <h3><?php if (function_exists('pll_e')) { pll_e('10. Uso de la pasarela de pago'); } else { echo '10. Uso de la pasarela de pago'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('La información financiera es procesada mediante plataformas seguras. No almacenamos datos de tarjetas. El cliente acepta las políticas antifraude y de validación de pagos.'); } else { echo 'La información financiera es procesada mediante plataformas seguras. No almacenamos datos de tarjetas. El cliente acepta las políticas antifraude y de validación de pagos.'; } ?></p>

        <h3><?php if (function_exists('pll_e')) { pll_e('11. Contacto'); } else { echo '11. Contacto'; } ?></h3>
        <p><?php if (function_exists('pll_e')) { pll_e('Toda solicitud de cambio, cancelación o consulta deberá realizarse mediante nuestros canales oficiales informados en la página web.'); } else { echo 'Toda solicitud de cambio, cancelación o consulta deberá realizarse mediante nuestros canales oficiales informados en la página web.'; } ?></p>

    </div>

</div>

<?php get_footer(); ?>
