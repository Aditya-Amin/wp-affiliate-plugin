<?php
/**
 * Title: Table Products
 * Post Type: acttable
 * Order: 2
 */


piklist('field', array(
    'type'          => 'group',
    'field'         => 'dprsstable_table_field',
    'label'         => __('Table Row', 'dpresstable'),
    'add_more'      => true,
    'fields'        => array(
        array(
            'type'          => 'text',
            'field'         => 'product_name',
            'label'         => __('Product Name', 'dpresstable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),

        array(
            'type'          => 'file',
            'field'         => 'product_image',
            'label'         => __('Product Image', 'dpresstable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'product_image_source_url',
            'label'         => __('Product SiteStripe URL', 'dpresstable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),

        array(
            'type'          => 'text',
            'field'         => 'product_url',
            'label'         => __('Affiliate URL', 'dpresstable'),
            'value'         => '#',
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'product_tag_text',
            'label'         => __('Product Tag Text', 'dpresstable'),
            'value'         => '',
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'product_ratings',
            'label'         => __('Product Ratings (Ex. 4.5/5)', 'dpresstable'),
            'value'         => '',
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        // array(
        //     'type'          => 'text',
        //     'field'         => 'product_price',
        //     'label'         => __('Product Price (Ex. $100)', 'dpresstable'),
        //     'value'         => '',
        //     'attributes'    => array(
        //         'class'     => 'widefat'
        //     ),
        // ),
        array(
            'type'          => 'editor',
            'field'         => 'product_description',
            'label'         => __('Product Description', 'dpresstable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
    ),
));