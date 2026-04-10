<?php
/**
 * Plantilla del Pie de Página (Footer)
 *
 * @package viagens-theme
 */
?>

<style>
    .site-footer {
        background-image: linear-gradient(rgba(10, 15, 25, 0.3), rgba(10, 15, 25, 0.5)), url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/footer-bg.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>

<footer class="site-footer text-white pt-5 pb-3">
    <div class="container py-lg-5 mt-3">
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6">
                <?php
                if (has_custom_logo()) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    echo '<img src="' . esc_url($logo[0]) . '" alt="Viagens Machupicchu" style="max-height: 60px; width: auto;" class="mb-4">';
                } else {
                    echo '<h3 class="fw-bold text-white mb-4">Viagens Machupicchu</h3>';
                }
                ?>
                <p class="text-white-50" style="font-size: 0.9rem; line-height: 1.6;">
                    Operadores 100% locales en los Andes. Especialistas en el público brasilero e hispanohablante. Garantizamos experiencias inolvidables, auténticas y profundamente transformadoras.
                </p>
                <div class="d-flex gap-3 mt-4">
                    <a href="javascript:void(0);" target="_blank" class="text-white-50 text-decoration-none fs-5 custom-hover"><i class="bi bi-facebook"></i></a>
                    <a href="javascript:void(0);" target="_blank" class="text-white-50 text-decoration-none fs-5 custom-hover"><i class="bi bi-instagram"></i></a>
                    <a href="javascript:void(0);" target="_blank" class="text-white-50 text-decoration-none fs-5 custom-hover"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold text-uppercase mb-4" style="letter-spacing: 1px; font-size: 1rem;">Enlaces Rápidos</h5>
                <ul class="list-unstyled d-flex flex-column gap-3 text-white-50">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white-50 text-decoration-none custom-hover"><i class="bi bi-chevron-right me-1" style="font-size: 0.7rem;"></i> Inicio</a></li>
                    <li><a href="<?php echo esc_url(home_url('/nosotros')); ?>" class="text-white-50 text-decoration-none custom-hover"><i class="bi bi-chevron-right me-1" style="font-size: 0.7rem;"></i> Quiénes Somos</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#circuitos-machupicchu')); ?>" class="text-white-50 text-decoration-none custom-hover"><i class="bi bi-chevron-right me-1" style="font-size: 0.7rem;"></i> Circuitos Machu Picchu</a></li>
                    <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones')); ?>" class="text-white-50 text-decoration-none custom-hover"><i class="bi bi-chevron-right me-1" style="font-size: 0.7rem;"></i> Políticas y Reservas</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contacto')); ?>" class="text-white-50 text-decoration-none custom-hover"><i class="bi bi-chevron-right me-1" style="font-size: 0.7rem;"></i> Contacto</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold text-uppercase mb-4" style="letter-spacing: 1px; font-size: 1rem;">Contáctanos</h5>
                <ul class="list-unstyled d-flex flex-column gap-4 text-white-50">
                    <li class="d-flex align-items-start gap-3">
                        <i class="bi bi-geo-alt-fill text-primary fs-5"></i>
                        <span style="font-size: 0.9rem;">Calle Inka Simpa-L1<br>Machupicchu Pueblo, Cusco - Perú</span>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <i class="bi bi-whatsapp text-success fs-5"></i>
                        <span style="font-size: 0.9rem;">+51 990725647 <br> +51 982682774</span>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <i class="bi bi-envelope-fill text-primary fs-5"></i>
                        <span style="font-size: 0.9rem;">info@viagensmachupicchubrasil.com</span>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold text-uppercase mb-4" style="letter-spacing: 1px; font-size: 1rem;">Nuestra Ubicación</h5>
                <div class="rounded-0 overflow-hidden shadow-sm" style="height: 200px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15533.858064508493!2d-72.5332766!3d-13.1557929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d9a5f89555555%3A0x3a10370ea4a01a27!2sAguas%20Calientes%2C%20Per%C3%BA!5e0!3m2!1ses-419!2sbr!4v1700000000000!5m2!1ses-419!2sbr" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <div class="row border-top border-secondary pt-4 pb-2 mt-4">
            <div class="col-md-6 text-center text-md-start text-white-50" style="font-size: 0.85rem;">
                © <?php echo date('Y'); ?> Viagens Machupicchu Brasil. Todos los derechos reservados.
            </div>
            <div class="col-md-6 text-center text-md-end text-white-50 mt-3 mt-md-0" style="font-size: 0.85rem;">
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>