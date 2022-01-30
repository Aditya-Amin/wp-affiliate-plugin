<?php
/**
 * Title: ACT Single Product Meta
 * Post Type: actproduct
 * Order: 1
 */

piklist('field', array(
    'type'          => 'file',
    'field'         => 'act_single_pro_image',
    'label'         => __('Product Image', 'acttable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));

piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_single_pro_order',
    'label'         => __('Product Order', 'acttable'),
    'value'         => 0,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));

piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_single_pro_url',
    'label'         => __('Product Affiliate Url', 'acttable'),
    'value'         => '#',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));

piklist('field', array(
    'type'          => 'text',
    'field'         => 'act_single_pro_button_text',
    'label'         => __('Product Button Text', 'acttable'),
    'value'         => __('Check Latest Price', 'acttable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
