<?php
/**
 * Clase adaptadora de Bootstrap 5 para menus nativos de WordPress.
 *
 * @package viagens-theme
 */

if (! defined('ABSPATH')) {
    exit;
}

class Viagens_Bootstrap_Navwalker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "\n<ul class=\"dropdown-menu border-0 shadow-sm rounded-0 mt-0\">\n";
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        if (in_array('menu-item-has-children', $classes, true)) {
            $classes[] = 'dropdown';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="nav-item ' . esc_attr($class_names) . '"' : ' class="nav-item"';

        $output .= '<li' . $class_names . '>';

        $atts = array();
        $atts['title'] = ! empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = ! empty($item->target) ? $item->target : '';
        $atts['rel'] = ! empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = ! empty($item->url) ? $item->url : '';

        if (in_array('menu-item-has-children', $item->classes, true)) {
            $atts['class'] = 'nav-link dropdown-toggle text-dark py-lg-3';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded'] = 'false';
            $atts['role'] = 'button';
        } else {
            $atts['class'] = $depth > 0 ? 'dropdown-item text-uppercase fw-semibold' : 'nav-link text-dark py-lg-3';
        }

        if ($depth > 0) {
            $inline_style = ' style="font-size: 0.75rem;"';
        } else {
            $inline_style = ' style="font-size: 0.8rem; letter-spacing: 0.5px;"';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (! empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . $inline_style . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
