<?php
/**
 * Title: ACT Three Products
 * Post Type: productbox
 * Order: 2
 */


piklist('field', array(
    'type'          => 'group',
    'field'         => 'dprsstable_product_field',
    'label'         => __('Product Row', 'dpresstable'),
    'add_more'      => true,
    'fields'        => array(
        array(
            'type'          => 'text',
            'field'         => 'dpress_pro_title',
            'label'         => __('Product Title', 'dpresstable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'file',
            'field'         => 'dpress_pro_image',
            'label'         => __('Product Image', 'dpresstable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'dpress_pro_image_source_url',
            'label'         => __('Product SiteStripe URL', 'dpresstable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'dpress_pro_url',
            'label'         => __('Affiliate URL', 'dpresstable'),
            'value'         => '#',
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'dpress_pro_tag_text',
            'label'         => __('Product Tag Text', 'dpresstable'),
            'value'         => '',
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'dpress_pro_ratings',
            'label'         => __('Product Ratings 1-5', 'dpresstable'),
            'value'         => 5,
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'checkbox',
            'field'         => 'product_badges',
            'label'         => __('Product Tag Icon', 'dpresstable'),
            'value'         => 'first',
            'choices' => array(
                'first'     => 'Icon 1',
                'second'    => 'Icon 2',
                'third'     => 'Icon 3',
            )
        ),
    ),
));