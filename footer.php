<?php
/**
 * Plantilla del Pie de Página (Footer)
 *
 * @package viagens-theme
 */
?>

<footer class="site-footer" role="contentinfo">
    <div class="container footer-main">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-3 col-md-6">
                <div class="footer-brand">
                    <?php if (has_custom_logo()) : ?>
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        ?>
                        <a class="footer-brand__logo" href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                        </a>
                    <?php else : ?>
                        <a class="footer-brand__text" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php echo esc_html(get_bloginfo('name')); ?>
                        </a>
                    <?php endif; ?>

                    <p class="footer-text">
                        <?php if (function_exists('pll_e')) { pll_e('Operadores 100% locales en los Andes. Especialistas en el público brasilero e hispanohablante. Garantizamos experiencias inolvidables, auténticas y profundamente transformadoras.'); } else { echo 'Operadores 100% locales en los Andes. Especialistas en el público brasilero e hispanohablante. Garantizamos experiencias inolvidables, auténticas y profundamente transformadoras.'; } ?>
                    </p>

                    <div class="footer-social" aria-label="Redes sociales">
                        <a class="footer-social__link" href="#" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a class="footer-social__link" href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a class="footer-social__link" href="#" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title"><?php if (function_exists('pll_e')) { pll_e('Enlaces Rápidos'); } else { echo 'Enlaces Rápidos'; } ?></h5>
                <ul class="footer-links" aria-label="Enlaces rápidos">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php if (function_exists('pll_e')) { pll_e('Inicio'); } else { echo 'Inicio'; } ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/nosotros')); ?>"><?php if (function_exists('pll_e')) { pll_e('Quiénes Somos'); } else { echo 'Quiénes Somos'; } ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/#circuitos-machupicchu')); ?>"><?php if (function_exists('pll_e')) { pll_e('Circuitos Machu Picchu'); } else { echo 'Circuitos Machu Picchu'; } ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/terminos-y-condiciones')); ?>"><?php if (function_exists('pll_e')) { pll_e('Políticas y Reservas'); } else { echo 'Políticas y Reservas'; } ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/contacto')); ?>"><?php if (function_exists('pll_e')) { pll_e('Contacto'); } else { echo 'Contacto'; } ?></a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title"><?php if (function_exists('pll_e')) { pll_e('Contáctanos'); } else { echo 'Contáctanos'; } ?></h5>
                <ul class="footer-contact" aria-label="Información de contacto">
                    <li>
                        <i class="bi bi-geo-alt-fill"></i>
                        <span><?php if (function_exists('pll_e')) { pll_e('Calle Inka Simpa-L1'); } else { echo 'Calle Inka Simpa-L1'; } ?><br><?php if (function_exists('pll_e')) { pll_e('Machupicchu Pueblo, Cusco - Perú'); } else { echo 'Machupicchu Pueblo, Cusco - Perú'; } ?></span>
                    </li>
                    <li>
                        <i class="bi bi-telephone-fill"></i>
                        <span>
                            <a href="tel:+51990725647">+51 990 725 647</a><br>
                            <a href="tel:+51982682774">+51 982 682 774</a>
                        </span>
                    </li>
                    <li>
                        <i class="bi bi-envelope-fill"></i>
                        <span>
                            <a href="mailto:info@viagensmachupicchubrasil.com">info@viagensmachupicchubrasil.com</a>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title"><?php if (function_exists('pll_e')) { pll_e('Suscríbete'); } else { echo 'Suscríbete'; } ?></h5>
                <p class="footer-text footer-text--compact">
                    <?php if (function_exists('pll_e')) { pll_e('Suscríbete a nuestro boletín para recibir actualizaciones rápidas y ofertas exclusivas.'); } else { echo 'Suscríbete a nuestro boletín para recibir actualizaciones rápidas y ofertas exclusivas.'; } ?>
                </p>

                <form class="footer-newsletter" action="#" method="post">
                    <label class="visually-hidden" for="footer-newsletter-email"><?php if (function_exists('pll_e')) { pll_e('Tu Correo Electrónico'); } else { echo 'Tu Correo Electrónico'; } ?></label>
                    <div class="footer-newsletter__group">
                        <input
                            id="footer-newsletter-email"
                            name="email"
                            type="email"
                            inputmode="email"
                            autocomplete="email"
                            placeholder="<?php if (function_exists('pll_e')) { pll_e('Tu Correo Electrónico'); } else { echo 'Tu Correo Electrónico'; } ?>"
                            required
                        >
                        <button type="submit">
                            <?php if (function_exists('pll_e')) { pll_e('SUSCRIBIRSE'); } else { echo 'SUSCRIBIRSE'; } ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer-bar">
        <div class="container">
            <div class="row align-items-center g-2">
                <div class="col-md-6 text-center text-md-start">
                    <span class="footer-bar__text"><?php if (function_exists('pll_e')) { pll_e('© 2026 Viagens Machu Picchu Brasil. Todos los derechos reservados.'); } else { echo '© 2026 Viagens Machu Picchu Brasil. Todos los derechos reservados.'; } ?></span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-bar__links">
                        <a href="<?php echo esc_url(home_url('/politica-de-privacidad')); ?>"><?php if (function_exists('pll_e')) { pll_e('Privacidad'); } else { echo 'Privacidad'; } ?></a>
                        <span class="footer-bar__sep" aria-hidden="true">•</span>
                        <a href="<?php echo esc_url(home_url('/terminos-y-condiciones')); ?>"><?php if (function_exists('pll_e')) { pll_e('Términos y Condiciones'); } else { echo 'Términos y Condiciones'; } ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
