<?php
/**
 * Keep this file as is. 
 * You can optionally add array() values to allow to customize theme design
 * See themes/customize.php as reference
 */

return array(
    array(
        'label' => esc_html__('Arrows', 'ml-slider'),
        'name' => 'arrows',
        'type' => 'section',
        'default' => 'on',
        'settings' => array(
            array(
                'label' => esc_html__('Background', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'arrows_color',
                        'type' => 'color',
                        'default' => 'rgba(255,255,255,0.43)',
                        'css' => '[ms_id] .flexslider ul.flex-direction-nav li a { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'arrows_color_hover',
                        'type' => 'color',
                        'default' => 'rgba(255,255,255,0.43)',
                        'css' => '[ms_id] .flexslider ul.flex-direction-nav li a:hover { background: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Icon Colors', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'arrows_icon',
                        'type' => 'color',
                        'default' => '#000000',
                        'css' => '[ms_id] .flexslider ul.flex-direction-nav li a { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'arrows_icon_hover',
                        'type' => 'color',
                        'default' => '#000000',
                        'css' => '[ms_id] .flexslider ul.flex-direction-nav li a:hover { color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Distance from Edge', 'ml-slider'),
                'name' => 'arrows_distance_edge',
                'type' => 'range',
                'default' => 0,
                'metric' => 'px',
                'min' => -100,
                'max' => 100,
                'css' => array(
                    '[ms_id] .flexslider ul.flex-direction-nav li a.flex-prev { left: [ms_value]px }',
                    '[ms_id] .flexslider ul.flex-direction-nav li a.flex-next { right: [ms_value]px }'
                )
            ),
            array(
                'label' => esc_html__('Position', 'ml-slider'),
                'name' => 'arrows_vertical_position',
                'type' => 'select',
                'default' => 'top',
                'options' => array(
                    array(
                        'label' => esc_html__('Top', 'ml-slider'),
                        'value' => 'top'
                    ),
                    array(
                        'label' => esc_html__('Bottom', 'ml-slider'),
                        'value' => 'bottom'
                    )
                ),
                'css' => 'css_rules',
                'css_rules' => array(
                    'top' => '[ms_id] .flexslider .flex-direction-nav li a { bottom: unset; top: calc([ms_field_value]% + 20px); transform: translateY(-[ms_field_value]%); }', // Take [ms_field_value] from arrows_vertical_position_offset
                    'bottom' => '[ms_id] .flexslider .flex-direction-nav li a { top: unset; bottom: [ms_field_value]%; transform: translateY([ms_field_value]%); }' // Take [ms_field_value] from arrows_vertical_position_offset
                )
            ),
            array(
                'label' => esc_html__('Position Offset', 'ml-slider'),
                'info' => esc_html__('Based on "Position".', 'ml-slider'),
                'name' => 'arrows_vertical_position_offset',
                'type' => 'range',
                'default' => 50,
                'metric' => '%',
                'min' => 0,
                'max' => 100,
                'css' => 'css_field', // Use the CSS from another field defined at 'css_field'
                'css_field' => 'arrows_vertical_position'
            ),
            array(
                'label' => esc_html__('Border Radius', 'ml-slider'),
                'name' => 'arrows_border_radius',
                'type' => 'range',
                'default' => 0,
                'metric' => '%',
                'min' => 0,
                'max' => 50,
                'css' => '[ms_id] .flexslider .flex-direction-nav li a { border-radius: [ms_value]% }'
            )
        )
    ),
    array(
        'label' => esc_html__('Navigation', 'ml-slider'),
        'name' => 'navigation',
        'type' => 'section',
        'default' => 'on',
        'settings' => array(
            array(
                'label' => esc_html__('Colors', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Default', 'ml-slider'),
                        'name' => 'navigation_color',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,0.5)',
                        'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Hover', 'ml-slider'),
                        'name' => 'navigation_color_hover',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,1)',
                        'css' =>  '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a:hover { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Active', 'ml-slider'),
                        'name' => 'navigation_color_active',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,1)',
                        'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a.flex-active { background: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Position', 'ml-slider'),
                'name' => 'navigation_vertical_position',
                'type' => 'select',
                'default' => 'bottom',
                'options' => array(
                    array(
                        'label' => esc_html__('Top', 'ml-slider'),
                        'value' => 'top'
                    ),
                    array(
                        'label' => esc_html__('Bottom', 'ml-slider'),
                        'value' => 'bottom'
                    )
                ),
                'css' => 'css_rules',
                'css_rules' => array(
                    'top' => '[ms_id] .flexslider .flex-control-nav { bottom: unset; top: [ms_field_value]px }', // Take [ms_field_value] from navigation_vertical_position_offset
                    'bottom' => '[ms_id] .flexslider .flex-control-nav { top: unset; bottom: [ms_field_value]px }' // Take [ms_field_value] from navigation_vertical_position_offset
                )
            ),
            array(
                'label' => esc_html__('Position Offset', 'ml-slider'),
                'info' => esc_html__('Based on "Position".', 'ml-slider'),
                'name' => 'navigation_vertical_position_offset',
                'type' => 'range',
                'default' => -27,
                'metric' => 'px',
                'min' => -100,
                'max' => 300,
                'css' => 'css_field', // Use the CSS from another field defined at 'css_field'
                'css_field' => 'navigation_vertical_position'
            ),
            array(
                'label' => esc_html__('Dots Border Radius', 'ml-slider'),
                'name' => 'navigation_border_radius',
                'type' => 'range',
                'default' => 10,
                'metric' => 'px',
                'min' => 0,
                'max' => 30,
                'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a { border-radius: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Dots Width', 'ml-slider'),
                'name' => 'navigation_width',
                'type' => 'range',
                'default' => 15,
                'metric' => 'px',
                'min' => 5,
                'max' => 30,
                'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a { width: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Dots Height', 'ml-slider'),
                'name' => 'navigation_height',
                'type' => 'range',
                'default' => 15,
                'metric' => 'px',
                'min' => 5,
                'max' => 30,
                'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a { height: [ms_value]px }'
            ),
            array(
                'label' => esc_html__('Distance Between Dots', 'ml-slider'),
                'name' => 'navigation_between',
                'type' => 'range',
                'default' => 5,
                'metric' => 'px',
                'min' => 0,
                'max' => 20,
                'css' => '[ms_id] .flexslider ol.flex-control-nav:not(.flex-control-thumbs) li a { margin-left: [ms_value]px }'
            )
        )
    ),
    array(
        'label' => esc_html__('Caption', 'ml-slider'),
        'name' => 'caption',
        'type' => 'section',
        'default' => 'on',
        'settings' => array(
            array(
                'label' => esc_html__('Colors', 'ml-slider'),
                'type' => 'fields',
                'fields' => array(
                    array(
                        'label' => esc_html__('Background', 'ml-slider'),
                        'name' => 'caption_background',
                        'type' => 'color',
                        'default' => 'rgba(0,0,0,0.7)',
                        'css' =>  '[ms_id] .flexslider ul.slides .caption-wrap { background: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Text', 'ml-slider' ),
                        'name' => 'caption_text_color',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider ul.slides .caption-wrap .caption > * { color: [ms_value] }'
                    ),
                    array(
                        'label' => esc_html__('Links', 'ml-slider'),
                        'name' => 'caption_links_color',
                        'type' => 'color',
                        'default' => '#ffffff',
                        'css' => '[ms_id] .flexslider ul.slides .caption-wrap .caption a { color: [ms_value] }'
                    )
                )
            ),
            array(
                'label' => esc_html__('Font Size', 'ml-slider'),
                'name' => 'caption_font_size',
                'type' => 'range',
                'default' => 1,
                'metric' => 'em',
                'min' => 0.5,
                'max' => 3,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { font-size: [ms_value]em }'
            ),
            array(
                'label' => esc_html__('Line Height', 'ml-slider'),
                'name' => 'caption_line_height',
                'type' => 'range',
                'default' => 1.4,
                'metric' => 'em',
                'min' => 0.5,
                'max' => 3,
                'step' => 0.1,
                'css' => '[ms_id] .flexslider .caption-wrap .caption { line-height: [ms_value]em }'
            ),
            array(
                'label' => esc_html__('Text Align', 'ml-slider'),
                'name' => 'caption_text_align',
                'type' => 'select',
                'default' => 'left',
                'options' => array(
                    array(
                        'label' => esc_html__('Left', 'ml-slider'),
                        'value' => 'left'
                    ),
                    array(
                        'label' => esc_html__('Right', 'ml-slider'),
                        'value' => 'right'
                    ),
                    array(
                        'label' => esc_html__('Center', 'ml-slider'),
                        'value' => 'center'
                    )
                ),
                'css' => '[ms_id] .flexslider .caption-wrap .caption { text-align: [ms_value] }'
            )
        )
    )
);