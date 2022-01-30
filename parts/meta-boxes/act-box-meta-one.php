<?php
/**
 * Title: ACT Three Product Meta
 * Post Type: productbox
 * Order: 1
 */
$act_pro_id = get_the_ID();
$act_pro_shortocde = "[actproduct actproduct_post_id='{$act_pro_id}']";
piklist('field', array(
    'type'          => 'text',
    'field'         => 'actpro_shortcode_id',
    'label'         => __('Copy This Shortcode', 'actall'),
    'value'         => $act_pro_shortocde,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'actall_pro_tag_bg',
    'label'         => __('Tag Background Color', 'acttable'),
    'value'         => '#E9393B',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'actall_pro_title_color',
    'label'         => __('Title Text Color', 'acttable'),
    'value'         => '#333333',
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
    'type'          => 'colorpicker',
    'field'         => 'actall_pro_star_bg',
    'label'         => __('Star Background Color', 'acttable'),
    'value'         => '#EBC30B',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'actall_pro_box_hover',
    'label'         => __('Product Box Hover Color', 'acttable'),
    'value'         => '#E9393B',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'act_porduct_line_bg',
    'label'         => __('Product After Image Line Background', 'acttable'),
    'value'         => '#5C8D23',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'actall_pro_title_size',
    'label'         => __('Title Font Size', 'acttable'),
    'value'         => 18,
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
piklist('field', array(
    'type'          => 'text',
    'field'         => 'actall_pro_tag_font_size',
    'label'         => __('Tag Font Size', 'acttable'),
    'value'         => 14,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_pro_button_text',
    'label'         => __('Button Title', 'acttable'),
    'value'         => __('Check Latest Price', 'acttable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_pro_button_mobile_text',
    'label'         => __('Button Mobile Title', 'acttable'),
    'value'         => __('Buy Now', 'acttable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));