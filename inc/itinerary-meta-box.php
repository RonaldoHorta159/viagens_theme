<?php
if (! defined('ABSPATH')) exit;

// 1. Registrar el Meta Box nativo para el Itinerario
function viagens_add_itinerary_meta_box() {
    add_meta_box(
        'viagens_tour_itinerary',
        'Itinerario Diario del Tour',
        'viagens_render_itinerary_meta_box',
        'tour', // Se asigna al CPT "Tours"
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'viagens_add_itinerary_meta_box');

// 2. Renderizar el HTML en el panel de administración
function viagens_render_itinerary_meta_box($post) {
    wp_nonce_field('viagens_save_itinerary_data', 'viagens_itinerary_meta_box_nonce');

    // Obtener datos guardados
    $itinerary = get_post_meta($post->ID, '_tour_itinerary', true);
    if (! is_array($itinerary)) { $itinerary = array(); }
?>
    <div id="viagens-itinerary-wrapper">
        <div id="viagens-itinerary-rows">
            <?php
            if (! empty($itinerary)) {
                foreach ($itinerary as $index => $day) {
                    viagens_render_itinerary_row($index, $day);
                }
            }
            ?>
        </div>
        <button type="button" class="button button-primary" id="viagens-add-day" style="margin-top: 15px;">+ Añadir Día al Itinerario</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let rowCount = <?php echo count($itinerary); ?>;
            const addButton = document.getElementById('viagens-add-day');
            const wrapper = document.getElementById('viagens-itinerary-rows');

            if(addButton) {
                addButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    let html = `
                    <div class="viagens-itinerary-row" style="background:#f9f9f9; padding:15px; margin-top:15px; border:1px solid #ccd0d4;">
                        <div style="float:right;"><button type="button" class="button激 viagens-remove-day" style="color:#b32d2e; border-color:#b32d2e;">Eliminar Día</button></div>
                        <p><label><b>Día N°:</b></label><br><input type="text" name="tour_itinerary[${rowCount}][day_number]" style="width:100%;"></p>
                        <p><label><b>Título del Día:</b></label><br><input type="text" name="tour_itinerary[${rowCount}][day_title]" style="width:100%;"></p>
                        <p><label><b>Descripción:</b></label><br><textarea name="tour_itinerary[${rowCount}][day_description]" rows="4" style="width:100%;"></textarea></p>
                        <p><label><b>Comidas:</b></label><br>
                           <input type="checkbox" name="tour_itinerary[${rowCount}][meals][]" value="Desayuno"> Desayuno &nbsp;
                           <input type="checkbox" name="tour_itinerary[${rowCount}][meals][]" value="Almuerzo"> Almuerzo &nbsp;
                           <input type="checkbox" name="tour_itinerary[${rowCount}][meals][]" value="Cena"> Cena
                        </p>
                        <p><label><b>Alojamiento:</b></label><br><input type="text" name="tour_itinerary[${rowCount}][accommodation]" style="width:100%;"></p>
                    </div>`;
                    wrapper.insertAdjacentHTML('beforeend', html);
                    rowCount++;
                });
            }

            wrapper.addEventListener('click', function(e) {
                if (e.target.classList.contains('viagens-remove-day')) {
                    e.preventDefault();
                    if (confirm('¿Eliminar este día?')) { e.target.closest('.viagens-itinerary-row').remove(); }
                }
            });
        });
    </script>
<?php
}

function viagens_render_itinerary_row($index, $day) {
    $day_number = isset($day['day_number']) ? esc_attr($day['day_number']) : '';
    $day_title  = isset($day['day_title']) ? esc_attr($day['day_title']) : '';
    $day_desc   = isset($day['day_description']) ? esc_textarea($day['day_description']) : '';
    $meals      = isset($day['meals']) && is_array($day['meals']) ? $day['meals'] : array();
    $accom      = isset($day['accommodation']) ? esc_attr($day['accommodation']) : '';
?>
    <div class="viagens-itinerary-row" style="background:#f9f9f9; padding:15px; margin-top:15px; border:1px solid #ccd0d4;">
        <div style="float:right;"><button type="button" class="button激激 viagens-remove-day" style="color:#b32d2e; border-color:#b32d2e;">Eliminar Día</button></div>
        <p><label><b>Día N°:</b></label><br><input type="text" name="tour_itinerary[<?php echo $index; ?>][day_number]" value="<?php echo $day_number; ?>" style="width:100%;"></p>
        <p><label><b>Título del Día:</b></label><br><input type="text" name="tour_itinerary[<?php echo $index; ?>][day_title]" value="<?php echo $day_title; ?>" style="width:100%;"></p>
        <p><label><b>Descripción:</b></label><br><textarea name="tour_itinerary[<?php echo $index; ?>][day_description]" rows="4" style="width:100%;"><?php echo $day_desc; ?></textarea></p>
        <p><label><b>Comidas:</b></label><br>
            <input type="checkbox" name="tour_itinerary[<?php echo $index; ?>][meals][]" value="Desayuno" <?php checked(in_array('Desayuno', $meals)); ?>> Desayuno &nbsp;
            <input type="checkbox" name="tour_itinerary[<?php echo $index; ?>][meals][]" value="Almuerzo" <?php checked(in_array('Almuerzo', $meals)); ?>> Almuerzo &nbsp;
            <input type="checkbox" name="tour_itinerary[<?php echo $index; ?>][meals][]" value="Cena" <?php checked(in_array('Cena', $meals)); ?>> Cena
        </p>
        <p><label><b>Alojamiento:</b></label><br><input type="text" name="tour_itinerary[<?php echo $index; ?>][accommodation]" value="<?php echo $accom; ?>" style="width:100%;"></p>
    </div>
<?php
}

function viagens_save_itinerary_data($post_id) {
    if (! isset($_POST['viagens_itinerary_meta_box_nonce']) || ! wp_verify_nonce($_POST['viagens_itinerary_meta_box_nonce'], 'viagens_save_itinerary_data')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (! current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['tour_itinerary']) && is_array($_POST['tour_itinerary'])) {
        $sanitized = array();
        foreach ($_POST['tour_itinerary'] as $day) {
            $sanitized[] = array(
                'day_number'      => sanitize_text_field($day['day_number']),
                'day_title'       => sanitize_text_field($day['day_title']),
                'day_description' => wp_kses_post($day['day_description']),
                'meals'           => isset($day['meals']) ? array_map('sanitize_text_field', $day['meals']) : array(),
                'accommodation'   => sanitize_text_field($day['accommodation']),
            );
        }
        update_post_meta($post_id, '_tour_itinerary', $sanitized);
    } else {
        delete_post_meta($post_id, '_tour_itinerary');
    }
}
add_action('save_post', 'viagens_save_itinerary_data');