<?php
/**
 * Title: ACT Single Product Meta Two
 * Post Type: actproduct
 * Order: 10
 */
$act_single_pro_id = get_the_ID();
$act_single_pro_shortcode = "[actsingleproduct actsingleproduct_post_id='{$act_single_pro_id}']";
piklist('field', array(
    'type'          => 'text',
    'field'         => 'actsingleproduct_post_id',
    'label'         => __('Copy This Shortcode', 'actall'),
    'value'         => $act_single_pro_shortcode,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));

piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'actall_pro_title_color',
    'label'         => __('Product Title Color', 'acttable'),
    'value'         => '#333333',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'actall_pro_title_size',
    'label'         => __('Product Title Font Size', 'acttable'),
    'value'         => 18,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'actall_pro_button_bg',
    'label'         => __('Button Background Color', 'acttable'),
    'value'         => '#f45511',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'actall_pro_button_text_color',
    'label'         => __('Button Text Color', 'acttable'),
    'value'         => '#fff',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'actall_pro_button_hover_bg',
    'label'         => __('Button Hover Color', 'acttable'),
    'value'         => '#333333',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));


piklist('field', array(
    'type'          => 'text',
    'field'         => 'actall_pro_button_font_size',
    'label'         => __('Button Font Size', 'acttable'),
    'value'         => 15,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));

