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
        border-radius: 0;
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

    .razones-carousel {
        position: relative;
        overflow: hidden;
        padding: 4px 4px 18px;
        user-select: none;
        touch-action: pan-y;
        cursor: grab;
    }

    .razones-carousel.is-dragging {
        cursor: grabbing;
    }

    .razones-carousel::before,
    .razones-carousel::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 60px;
        z-index: 2;
        pointer-events: none;
    }

    .razones-carousel::before {
        left: 0;
        background: linear-gradient(90deg, rgba(246, 248, 251, 1), rgba(246, 248, 251, 0));
    }

    .razones-carousel::after {
        right: 0;
        background: linear-gradient(270deg, rgba(246, 248, 251, 1), rgba(246, 248, 251, 0));
    }

    .razones-track {
        display: flex;
        gap: 18px;
        will-change: transform;
        transform: translate3d(0, 0, 0);
    }

    .razon-card {
        flex: 0 0 clamp(260px, 34vw, 340px);
        background: #fff;
        padding: 28px;
        border-radius: 18px;
        border: 1px solid #eaeaea;
        box-shadow: 0 4px 6px rgba(0,0,0,0.02);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        scroll-snap-align: start;
        position: relative;
    }

    .razon-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.06);
    }

    .razon-icon {
        font-size: 2.25rem;
        margin-bottom: 16px;
        text-align: left;
        color: var(--bs-primary);
    }

    .razon-step {
        position: absolute;
        top: 14px;
        right: 14px;
        width: 38px;
        height: 38px;
        display: grid;
        place-items: center;
        border-radius: 999px;
        background: rgba(37, 115, 78, 0.12);
        color: var(--bs-primary);
        font-weight: 800;
        letter-spacing: 0.5px;
        font-size: 0.95rem;
    }

    .razon-card h3 {
        font-size: 1.25rem;
        color: #2c3e50;
        margin-bottom: 15px;
        text-align: left;
    }

    .razon-card p {
        font-size: 1rem;
        line-height: 1.6;
        color: #666;
        margin: 0;
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
        .razones-carousel::before,
        .razones-carousel::after {
            width: 34px;
        }
    }
</style>

<div class="page-nosotros-wrapper">

    <section class="nosotros-hero">
        <h1>Viagens Machupicchu Brasil</h1>
    </section>

    <section class="quienes-somos-content">
        <h3 style="text-align: center; color: #2c3e50; margin-bottom: 25px; font-size: 1.8rem;">¿Quiénes Somos?</h3>
        <p>Somos operadores de viajes y turismo 100% locales, originarios de Machupicchu, especializados en crear itinerarios personalizados, en los mejores destinos turísticos de Perú con la mejor relación calidad precio.</p>
        <p>Nuestra propuesta combina turismo cultural, aventura y experiencias espirituales y místicas, inspiradas en la sabiduría ancestral andina. Creando vivencias transformadoras, que permiten conectar con la tradición local y consigo mismo.</p>
        <p>Nuestro equipo lo conforman guías y servidores locales en Machu Picchu, Cusco y todo el Perú, con largos años de experiencia, comprometidos en brindar experiencias transformadoras auténticas y profundamente memorables.</p>
    </section>

    <section class="por-que-elegirnos">
        <h2 class="por-que-elegirnos-title">¿POR QUÉ VIAJAR CON NOSOTROS?</h2>
        
        <div class="razones-carousel" data-infinite-carousel>
            <div class="razones-track">
                <div class="razon-card">
                    <span class="razon-step" aria-hidden="true">01</span>
                    <div class="razon-icon"><i class="bi bi-headset" aria-hidden="true"></i></div>
                    <h3>ASISTENCIA 24/7</h3>
                    <p>Estaremos a su disposición en todo momento para absolver sus dudas e inquietudes.</p>
                </div>

                <div class="razon-card">
                    <span class="razon-step" aria-hidden="true">02</span>
                    <div class="razon-icon"><i class="bi bi-person-check" aria-hidden="true"></i></div>
                    <h3>ATENCIÓN PERSONALIZADA</h3>
                    <p>Juntos organizaremos el viaje de sus sueños, de acuerdo a sus preferencias y disponibilidad de tiempo.</p>
                </div>

                <div class="razon-card">
                    <span class="razon-step" aria-hidden="true">03</span>
                    <div class="razon-icon"><i class="bi bi-bag-check" aria-hidden="true"></i></div>
                    <h3>COMODIDAD Y PRACTICIDAD</h3>
                    <p>Itinerarios flexibles, transportes y hoteles confortables.</p>
                </div>

                <div class="razon-card">
                    <span class="razon-step" aria-hidden="true">04</span>
                    <div class="razon-icon"><i class="bi bi-cash-coin" aria-hidden="true"></i></div>
                    <h3>PRECIOS ASEQUIBLES</h3>
                    <p>Ofrecemos excursiones de un día o largas travesías donde priorizamos que los precios sean accesibles para la mayoría de los viajeros del mundo.</p>
                </div>

                <div class="razon-card">
                    <span class="razon-step" aria-hidden="true">05</span>
                    <div class="razon-icon"><i class="bi bi-award" aria-hidden="true"></i></div>
                    <h3>NUESTRO DIFERENCIAL</h3>
                    <p>Conocemos bastante bien todos los principales destinos turísticos del país y nuestro equipo está conformado por un staff de gente local altamente capacitada en Inglés, Portugués y Español.</p>
                </div>

                <div class="razon-card" aria-hidden="true">
                    <span class="razon-step" aria-hidden="true">01</span>
                    <div class="razon-icon"><i class="bi bi-headset" aria-hidden="true"></i></div>
                    <h3>ASISTENCIA 24/7</h3>
                    <p>Estaremos a su disposición en todo momento para absolver sus dudas e inquietudes.</p>
                </div>

                <div class="razon-card" aria-hidden="true">
                    <span class="razon-step" aria-hidden="true">02</span>
                    <div class="razon-icon"><i class="bi bi-person-check" aria-hidden="true"></i></div>
                    <h3>ATENCIÓN PERSONALIZADA</h3>
                    <p>Juntos organizaremos el viaje de sus sueños, de acuerdo a sus preferencias y disponibilidad de tiempo.</p>
                </div>

                <div class="razon-card" aria-hidden="true">
                    <span class="razon-step" aria-hidden="true">03</span>
                    <div class="razon-icon"><i class="bi bi-bag-check" aria-hidden="true"></i></div>
                    <h3>COMODIDAD Y PRACTICIDAD</h3>
                    <p>Itinerarios flexibles, transportes y hoteles confortables.</p>
                </div>

                <div class="razon-card" aria-hidden="true">
                    <span class="razon-step" aria-hidden="true">04</span>
                    <div class="razon-icon"><i class="bi bi-cash-coin" aria-hidden="true"></i></div>
                    <h3>PRECIOS ASEQUIBLES</h3>
                    <p>Ofrecemos excursiones de un día o largas travesías donde priorizamos que los precios sean accesibles para la mayoría de los viajeros del mundo.</p>
                </div>

                <div class="razon-card" aria-hidden="true">
                    <span class="razon-step" aria-hidden="true">05</span>
                    <div class="razon-icon"><i class="bi bi-award" aria-hidden="true"></i></div>
                    <h3>NUESTRO DIFERENCIAL</h3>
                    <p>Conocemos bastante bien todos los principales destinos turísticos del país y nuestro equipo está conformado por un staff de gente local altamente capacitada en Inglés, Portugués y Español.</p>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
(() => {
    const carousels = document.querySelectorAll('[data-infinite-carousel]');
    carousels.forEach((carousel) => {
        const track = carousel.querySelector('.razones-track');
        if (!track) return;

        let x = 0;
        let halfWidth = 0;
        let rafId = 0;
        let isDragging = false;
        let startClientX = 0;
        let startX = 0;

        const measure = () => {
            halfWidth = track.scrollWidth / 2;
        };

        const setTranslate = (value) => {
            x = value;
            if (halfWidth > 0) {
                while (x <= -halfWidth) x += halfWidth;
                while (x > 0) x -= halfWidth;
            }
            track.style.transform = `translate3d(${x}px, 0, 0)`;
        };

        measure();
        setTranslate(0);

        window.addEventListener('resize', () => {
            measure();
            setTranslate(x);
        }, { passive: true });

        const speed = 0.35;
        const tick = () => {
            if (!isDragging && !carousel.matches(':hover')) {
                setTranslate(x - speed);
            }
            rafId = window.requestAnimationFrame(tick);
        };
        rafId = window.requestAnimationFrame(tick);

        carousel.addEventListener('pointerdown', (e) => {
            isDragging = true;
            carousel.classList.add('is-dragging');
            startClientX = e.clientX;
            startX = x;
            try {
                carousel.setPointerCapture(e.pointerId);
            } catch (err) {}
        });

        carousel.addEventListener('pointermove', (e) => {
            if (!isDragging) return;
            const delta = e.clientX - startClientX;
            setTranslate(startX + delta);
        });

        const endDrag = (e) => {
            if (!isDragging) return;
            isDragging = false;
            carousel.classList.remove('is-dragging');
            try {
                carousel.releasePointerCapture(e.pointerId);
            } catch (err) {}
        };

        carousel.addEventListener('pointerup', endDrag);
        carousel.addEventListener('pointercancel', endDrag);
        carousel.addEventListener('mouseleave', () => {
            carousel.classList.remove('is-dragging');
            isDragging = false;
        });
    });
})();
</script>

<?php get_footer(); ?>
