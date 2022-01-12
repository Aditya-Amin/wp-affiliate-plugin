<?php
/**
 * Title: dPress Notification For Image Banner
 * Post Type: dpressnoti
 * Order: 3
 */
piklist('field', array(
    'type'          => 'file',
    'field'         => 'dpress_bar_img_banner',
    'label'         => __('Image Banner', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_bar_banner_url',
    'label'         => __('Banner URL', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_bar_banner_height',
    'label'         => __('Banner Height', 'dpresstable'),
    'value'         => '38',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_bar_img_height',
    'label'         => __('Banner Image height', 'dpresstable'),
    'value'         => '38',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_bar_banner_color',
    'label'         => __('Banner Background Color', 'dpresstable'),
    'value'         => '#F96520',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));