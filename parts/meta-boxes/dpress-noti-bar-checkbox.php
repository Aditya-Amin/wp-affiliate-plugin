<?php
/**
 * Title: dPress Notification Bars
 * Post Type: dpressnoti
 * Order: 1
 */
piklist('field', array(
    'type'          => 'checkbox',
    'field'         => 'dpress_bar_or_img',
    'label'         => __('Notification Bar Or Banner', 'dpresstable'),
    'value'         => 'first',
    'choices' => array(
        'first'     => 'Text Notificatoin Bar',
        'second'    => 'Image Banner Bar',
    )
));