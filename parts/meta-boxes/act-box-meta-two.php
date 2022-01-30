<?php
/**
 * Title: ACT Three Products
 * Post Type: productbox
 * Order: 2
 */


piklist('field', array(
    'type'          => 'group',
    'field'         => 'acttable_product_field',
    'label'         => __('Product Row', 'acttable'),
    'add_more'      => true,
    'fields'        => array(
        array(
            'type'          => 'text',
            'field'         => 'act_pro_title',
            'label'         => __('Product Title', 'acttable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'file',
            'field'         => 'act_pro_image',
            'label'         => __('Product Image', 'acttable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'act_pro_image_source_url',
            'label'         => __('Product SiteStripe URL', 'acttable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'act_pro_url',
            'label'         => __('Affiliate URL', 'acttable'),
            'value'         => '#',
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'act_pro_tag_text',
            'label'         => __('Product Tag Text', 'acttable'),
            'value'         => '',
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'act_pro_ratings',
            'label'         => __('Product Ratings 1-5', 'acttable'),
            'value'         => 5,
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'checkbox',
            'field'         => 'product_badges',
            'label'         => __('Product Tag Icon', 'acttable'),
            'value'         => 'first',
            'choices' => array(
                'first'     => 'Icon 1',
                'second'    => 'Icon 2',
                'third'     => 'Icon 3',
            )
        ),
    ),
));