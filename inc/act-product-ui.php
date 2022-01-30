<?php
function act_product_shortcdoe_ui(){
	$fields = array(
        array(
			'label'         => __('Product Image Upload', 'act'),
			'attr'          => 'product_image',
			'type'          => 'attachment'
        ),
        array(
			'label'         => __('Or, Product Image From Amazon', 'act'),
			'attr'          => 'product_image_url',
			'type'          => 'url'
        ),
        array(
			'label'         => __('Amazon Affiliate Link', 'act'),
			'attr'          => 'pro_affiliate_url',
			'type'          => 'url'
        ),

		array(
			'label'         => __('Product Title', 'act'),
			'attr'          => 'product_title',
			'type'          => 'text'
        ),
        array(
			'label'         => __('Product Descriptions', 'act'),
			'attr'          => 'products_text',
			'type'          => 'textarea'
        ),
        array(
			'label'         => __('Button Title', 'act'),
			'attr'          => 'button_title',
			'type'          => 'text'
        ),
        array(
			'label'         => __('Button BG', 'act'),
			'attr'          => 'button_bg',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Button Hover Color', 'act'),
			'attr'          => 'button_hover_color',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Button Text Color', 'act'),
			'attr'          => 'button_color',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Product Title Color', 'act'),
			'attr'          => 'product_title_color',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Product Descriptions Color', 'act'),
			'attr'          => 'product_description_color',
			'type'          => 'color'
		),
		array(
			'label'         => __('List Bullets Color', 'act'),
			'attr'          => 'list_bullet_color',
			'type'          => 'color'
		),
	);

	$settings = array(
		'label'             => __('Product Box', 'act'),
		'listItemImage'     => 'dashicons-format-aside',
		'post_type'         => array('post', 'page'),
		'attrs'             => $fields
	);
	shortcode_ui_register_for_shortcode('act_product', $settings);
}
add_action('register_shortcode_ui', 'act_product_shortcdoe_ui');