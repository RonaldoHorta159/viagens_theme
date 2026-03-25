<?php

/**
 * Bootstrap 5 Nav Walker para WordPress
 * Transforma el HTML nativo del menú de WP en la estructura requerida por Bootstrap 5.
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Bootstrap_5_WP_Nav_Menu_Walker extends Walker_Nav_Menu
{

    // Comienza el submenú (el <ul> desplegable)
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        // Bootstrap 5 usa la clase 'dropdown-menu'
        $output .= "\n$indent<ul class=\"dropdown-menu border-0 shadow-sm\">\n";
    }

    // Comienza cada elemento (el <li> y el <a>)
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        // Si el elemento tiene hijos (submenú), añadimos la clase 'dropdown' de Bootstrap
        if (in_array('menu-item-has-children', $classes)) {
            $classes[] = 'dropdown';
        }

        // Si es el elemento actual, añadimos 'active'
        if (in_array('current-menu-item', $classes) || in_array('current-menu-parent', $classes)) {
            $classes[] = 'active';
        }

        // Limpiar las clases nativas de WP y dejar solo las necesarias
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        // Imprimir el <li>
        $output .= $indent . '<li' . $class_names . '>';

        // Preparar los atributos del enlace <a>
        $atts = array();
        $atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = ! empty($item->target)     ? $item->target     : '';
        $atts['rel']    = ! empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = ! empty($item->url)        ? $item->url        : '';

        // Clases del enlace: 'nav-link' para el primer nivel, 'dropdown-item' para submenús
        if ($depth === 0) {
            $atts['class'] = 'nav-link';
        } else {
            $atts['class'] = 'dropdown-item';
        }

        // Si tiene hijos y estamos en el primer nivel, lo convertimos en un toggle de dropdown
        if (in_array('menu-item-has-children', $item->classes) && $depth === 0) {
            $atts['class']       .= ' dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded']  = 'false';
            $atts['role']           = 'button';
        }

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (! empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        // Construir la salida del enlace
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
