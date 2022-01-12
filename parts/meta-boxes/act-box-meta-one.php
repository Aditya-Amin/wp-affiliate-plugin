<?php
/**
 * Title: ACT Three Product Meta
 * Post Type: productbox
 * Order: 1
 */
$dpress_pro_id = get_the_ID();
$dpress_pro_shortocde = "[actproduct actproduct_post_id='{$dpress_pro_id}']";
piklist('field', array(
    'type'          => 'hidden',
    'field'         => 'dpresspro_shortcode_id',
    'label'         => __('Copy This Shortcode', 'dpressall'),
    'value'         => $dpress_pro_shortocde,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpressall_pro_tag_bg',
    'label'         => __('Tag Background Color', 'dpresstable'),
    'value'         => '#E9393B',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpressall_pro_title_color',
    'label'         => __('Title Text Color', 'dpresstable'),
    'value'         => '#333333',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpressall_pro_button_bg',
    'label'         => __('Button Background Color', 'dpresstable'),
    'value'         => '#f45511',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpressall_pro_button_text_color',
    'label'         => __('Button Text Color', 'dpresstable'),
    'value'         => '#fff',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpressall_pro_button_hover_bg',
    'label'         => __('Button Hover Color', 'dpresstable'),
    'value'         => '#333333',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpressall_pro_star_bg',
    'label'         => __('Star Background Color', 'dpresstable'),
    'value'         => '#EBC30B',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpressall_pro_box_hover',
    'label'         => __('Product Box Hover Color', 'dpresstable'),
    'value'         => '#E9393B',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_porduct_line_bg',
    'label'         => __('Product After Image Line Background', 'dpresstable'),
    'value'         => '#5C8D23',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpressall_pro_title_size',
    'label'         => __('Title Font Size', 'dpresstable'),
    'value'         => 18,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpressall_pro_button_font_size',
    'label'         => __('Button Font Size', 'dpresstable'),
    'value'         => 15,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpressall_pro_tag_font_size',
    'label'         => __('Tag Font Size', 'dpresstable'),
    'value'         => 14,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_pro_button_text',
    'label'         => __('Button Title', 'dpresstable'),
    'value'         => __('Check Latest Price', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_pro_button_mobile_text',
    'label'         => __('Button Mobile Title', 'dpresstable'),
    'value'         => __('Buy Now', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));