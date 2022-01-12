<?php
/**
 * Title: dPress Notification For Text Bar
 * Post Type: dpressnoti
 * Order: 2
 */
$dpress_bar_id = get_the_ID();
$dpress_bar_shortocde = "<?php echo do_shortcode('[dpressbars dpressnoti_post_id='{$dpress_bar_id}']'); ?>";
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpressall_bar_shortcode_id',
    'label'         => __('Copy This Bar Shortcode', 'dpresstable'),
    'value'         => $dpress_bar_shortocde,
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
 piklist('field', array(
    'type'          => 'textarea',
    'field'         => 'dpress_bar_text',
    'label'         => __('Notification Bar Text', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_bar_button_title',
    'label'         => __('Notification Bar Button Title', 'dpresstable'),
    'value'         => 'Get Started',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_bar_button_url',
    'label'         => __('Notification Bar Button URL', 'dpresstable'),
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_bar_background',
    'label'         => __('Bar Background', 'dpresstable'),
    'value'         => '#be2edd',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_bar_text_color',
    'label'         => __('Bar Text Color', 'dpresstable'),
    'value'         => '#ffffff',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_bar_button_bg',
    'label'         => __('Bar Button BG', 'dpresstable'),
    'value'         => '#4834d4',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'colorpicker',
    'field'         => 'dpress_bar_button_text_color',
    'label'         => __('Bar Button Text Color', 'dpresstable'),
    'value'         => '#ffffff',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_bar_text_size',
    'label'         => __('Notification Bar Text Size', 'dpresstable'),
    'value'         => '16',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));
piklist('field', array(
    'type'          => 'text',
    'field'         => 'dpress_bar_btn_text_size',
    'label'         => __('Notification Bar Button Text Size', 'dpresstable'),
    'value'         => '16',
    'attributes'    => array(
        'class'     => 'widefat'
    ),
));