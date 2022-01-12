<?php
function dpressall_button_shortcdoe_ui(){
	$fields = array(
		array(
			'label'         => __('Button Title', 'dpressall'),
			'attr'          => 'button_title',
			'type'          => 'text'
		),
		array(
			'label'         => __('Button Background', 'dpressall'),
			'attr'          => 'button_bg',
			'type'          => 'color'
		),
		array(
			'label'         => __('Button Text Color', 'dpressall'),
			'attr'          => 'button_color',
			'type'          => 'color'
		),
		array(
			'label'         => __('Button URL', 'dpressall'),
			'attr'          => 'button_url',
			'type'          => 'url'
		),
	);

	$settings = array(
		'label'             => __('Affiliate Button', 'wpstrom'),
		'listItemImage'     => 'dashicons-format-aside',
		'post_type'         => array('post', 'page'),
		'attrs'             => $fields
	);
	shortcode_ui_register_for_shortcode('dpressall_aff_button', $settings);
}
add_action('register_shortcode_ui', 'dpressall_button_shortcdoe_ui');