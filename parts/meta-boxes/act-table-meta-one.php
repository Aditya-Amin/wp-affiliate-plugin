<?php
/**
 * Title: Table Single Value Metaboxes
 * Post Type: acttable
 * Order: 1
 */
$dpress_table_id = get_the_ID();
$dpress_table_shortocde = "[acttable acttable_post_id='{$dpress_table_id}']";
piklist('field', array(
    'type'          => 'hidden',
    'field'         => 'dpresstable_shortcode_id',
    'label'         => __('Copy This Shortcode', 'dpresstable'),
    'value'         => $dpress_table_shortocde,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_tbl_heading_bg_color',
    'label'         => __('Table Heading Background Color', 'dpresstable'),
    'value'         => '#5C8D22',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_tbl_heading_text_color',
    'label'         => __('Table Heading Background Color', 'dpresstable'),
    'value'         => '#FFFFFF',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_tbl_product_title_color',
    'label'         => __('Product Title Color', 'dpresstable'),
    'value'         => '#5C8D22',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_tbl_heading_text_one',
    'label'         => __('Table Heading Text One', 'dpresstable'),
    'value'         => __('Image', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_tbl_heading_text_two',
    'label'         => __('Table Heading Text Two', 'dpresstable'),
    'value'         => __('Model', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_tbl_heading_text_three',
    'label'         => __('Table Heading Text Three', 'dpresstable'),
    'value'         => __('Features', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_tbl_heading_text_four',
    'label'         => __('Table Heading Text Four', 'dpresstable'),
    'value'         => __('Price', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_tbl_button_bg_color',
    'label'         => __('Table Button Backgorund Color', 'dpresstable'),
    'value'         => '#EF5323',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_tbl_button_text_color',
    'label'         => __('Table Button Text Color', 'dpresstable'),
    'value'         => '#FFFFFF',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_tbl_button_text',
    'label'         => __('Button Title', 'dpresstable'),
    'value'         => __('Check Price', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_tbl_tag_bg_color',
    'label'         => __('Tag Background Color', 'dpresstable'),
    'value'         => '#00B894',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_tbl_tag_text_color',
    'label'         => __('Tag Text Color', 'dpresstable'),
    'value'         => '#FFFFFF',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_tbl_txt_color',
    'label'         => __('Table Text Color', 'dpresstable'),
    'value'         => '#3C3C3C',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_tbl_tag_color',
    'label'         => __('Table Tag Color', 'dpresstable'),
    'value'         => '#00B894',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_tbl_feature_color',
    'label'         => __('Table Feature Icon COlor', 'dpresstable'),
    'value'         => '#00B894',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_tbl_font_size',
    'label'         => __('Table Text Size', 'dpresstable'),
    'value'         => 18,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));