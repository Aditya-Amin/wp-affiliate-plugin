<?php
/**
 * Title: Table Single Value Metaboxes
 * Post Type: acttable
 * Order: 1
 */
$act_table_id = get_the_ID();
$act_table_shortocde = "[acttable acttable_post_id='{$act_table_id}']";
piklist('field', array(
    'type'          => 'text',
    'field'         => 'acttable_shortcode_id',
    'label'         => __('Copy This Shortcode', 'acttable'),
    'value'         => $act_table_shortocde,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'act_tbl_heading_bg_color',
    'label'         => __('Table Heading Background Color', 'acttable'),
    'value'         => '#5C8D22',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'act_tbl_heading_text_color',
    'label'         => __('Table Heading Color', 'acttable'),
    'value'         => '#FFFFFF',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'act_tbl_product_title_color',
    'label'         => __('Table Product Title Color', 'acttable'),
    'value'         => '#5C8D22',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_tbl_heading_text_one',
    'label'         => __('Table Heading Text One', 'acttable'),
    'value'         => __('Image', 'acttable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_tbl_heading_text_two',
    'label'         => __('Table Heading Text Two', 'acttable'),
    'value'         => __('Model', 'acttable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_tbl_heading_text_three',
    'label'         => __('Table Heading Text Three', 'acttable'),
    'value'         => __('Features', 'acttable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_tbl_heading_text_four',
    'label'         => __('Table Heading Text Four', 'acttable'),
    'value'         => __('Price', 'acttable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'act_tbl_button_bg_color',
    'label'         => __('Table Button Backgorund Color', 'acttable'),
    'value'         => '#EF5323',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'act_tbl_button_text_color',
    'label'         => __('Table Button Text Color', 'acttable'),
    'value'         => '#FFFFFF',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_tbl_button_text',
    'label'         => __('Table Button Title', 'acttable'),
    'value'         => __('Check Price', 'acttable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'act_tbl_tag_bg_color',
    'label'         => __('Tag Background Color', 'acttable'),
    'value'         => '#00B894',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'act_tbl_tag_text_color',
    'label'         => __('Tag Text Color', 'acttable'),
    'value'         => '#FFFFFF',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'act_tbl_txt_color',
    'label'         => __('Table Feature Color', 'acttable'),
    'value'         => '#3C3C3C',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'act_tbl_feature_color',
    'label'         => __('Table Feature Icon COlor', 'acttable'),
    'value'         => '#00B894',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_tbl_font_size',
    'label'         => __('Table Feature Text Size', 'acttable'),
    'value'         => 18,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));


