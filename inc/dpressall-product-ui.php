<?php
function dpressall_product_shortcdoe_ui(){
	$fields = array(
        array(
			'label'         => __('Product Image Upload', 'dpressall'),
			'attr'          => 'product_image',
			'type'          => 'attachment'
        ),
        array(
			'label'         => __('Or, Product Image From Amazon', 'dpressall'),
			'attr'          => 'product_image_url',
			'type'          => 'url'
        ),
        array(
			'label'         => __('Amazon Affiliate Link', 'dpressall'),
			'attr'          => 'pro_affiliate_url',
			'type'          => 'url'
        ),
        array(
			'label'         => __('Feature Title', 'dpressall'),
			'attr'          => 'feature_title',
			'type'          => 'text'
        ),
        array(
			'label'         => __('Feature Text', 'dpressall'),
			'attr'          => 'features_text',
			'type'          => 'textarea'
        ),
        array(
			'label'         => __('Button Title', 'dpressall'),
			'attr'          => 'button_title',
			'type'          => 'text'
        ),
        array(
			'label'         => __('Button BG', 'dpressall'),
			'attr'          => 'button_bg',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Button Hover Color', 'dpressall'),
			'attr'          => 'button_hover_color',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Button Text Color', 'dpressall'),
			'attr'          => 'button_color',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Top Border Color', 'dpressall'),
			'attr'          => 'top_border_color',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Title Text Color', 'dpressall'),
			'attr'          => 'title_color',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Feature Text Color', 'dpressall'),
			'attr'          => 'feature_color',
			'type'          => 'color'
		),
		array(
			'label'         => __('Feature Icon Color', 'dpressall'),
			'attr'          => 'pro_feature_icon_color',
			'type'          => 'color'
		),
	);

	$settings = array(
		'label'             => __('Product Box', 'dpressall'),
		'listItemImage'     => 'dashicons-format-aside',
		'post_type'         => array('post', 'page'),
		'attrs'             => $fields
	);
	shortcode_ui_register_for_shortcode('dpressall_product', $settings);
}
add_action('register_shortcode_ui', 'dpressall_product_shortcdoe_ui');