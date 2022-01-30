<?php
/**
 * Title: Table Products
 * Post Type: acttable
 * Order: 2
 */


piklist('field', array(
    'type'          => 'group',
    'field'         => 'acttable_table_field',
    'label'         => __('Table Row', 'acttable'),
    'add_more'      => true,
    'fields'        => array(
        array(
            'type'          => 'text',
            'field'         => 'product_name',
            'label'         => __('Product Name', 'acttable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),

        array(
            'type'          => 'file',
            'field'         => 'product_image',
            'label'         => __('Product Image', 'acttable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'product_image_source_url',
            'label'         => __('Product SiteStripe URL', 'acttable'),
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),

        array(
            'type'          => 'text',
            'field'         => 'product_url',
            'label'         => __('Affiliate URL', 'acttable'),
            'value'         => '#',
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'product_tag_text',
            'label'         => __('Product Tag Text', 'acttable'),
            'value'         => '',
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        array(
            'type'          => 'text',
            'field'         => 'product_ratings',
            'label'         => __('Product Ratings (Ex. 4.5/5)', 'acttable'),
            'value'         => '',
            'attributes'    => array(
                'class'     => 'widefat'
            ),
        ),
        // array(
        //     'type'          => 'text',
        //     'field'         => 'product_price',
        //     'label'         => __('Product Price (Ex. $100)', 'acttable'),
        //     'value'         => '',
        //     'attributes'    => array(
        //         'class'     => 'widefat'
        //     ),
        // ),
        // array(
        //     'type'          => 'editor',
        //     'field'         => 'product_description',
        //     'label'         => __('Product Description', 'acttable'),
        //     'attributes'    => array(
        //         'class'     => 'widefat'
        //     ),
        // ),
        array(
            'type' => 'textarea',
            'field' => 'product_description',
            'label' => 'Product Description',
            'attributes' => array(
              'rows' => 10,
              'cols' => 50,
              'class' => 'large-text'
            )
        )

    ),
));
