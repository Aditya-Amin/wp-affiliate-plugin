<?php
/**
 * Title: ACT Single Product Meta
 * Post Type: actproduct
 * Order: 1
 */
$act_single_pro_id = get_the_ID();
$act_single_pro_shortcode = "[actsingleproduct actsingleproduct_post_id='{$act_single_pro_id}']";
piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_single_product_order',
    'label'         => __('Product Order', 'dpresstable'),
    'value'         => 0,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'hidden',
    'field'         => 'dpresspro_shortcode_id',
    'label'         => __('Copy This Shortcode', 'dpressall'),
    'value'         => $act_single_pro_shortcode,
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
    'field'         => 'dpress_pro_button_text',
    'label'         => __('Button Title', 'dpresstable'),
    'value'         => __('Check Latest Price', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
