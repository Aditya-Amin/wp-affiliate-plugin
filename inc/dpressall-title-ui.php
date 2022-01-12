<?php
function dpressall_title_shortcdoe_ui(){
	$fields = array(
		array(
			'label'         => __('Number', 'dpressall'),
			'attr'          => 'title_number',
			'type'          => 'text'
		),
		array(
			'label'         => __('Title Text', 'dpressall'),
			'attr'          => 'title_text',
			'type'          => 'text'
		),
		array(
			'label'         => __('Number Sub Text', 'dpressall'),
			'attr'          => 'number_sub_text',
			'type'          => 'text'
		),
		array(
			'label'         => __('Number Color', 'dpressall'),
			'attr'          => 'number_color',
			'type'          => 'color'
		),
		array(
			'label'         => __('Heading Font Size', 'dpressall'),
			'attr'          => 'heading_font_size',
			'type'          => 'text'
		),
		array(
			'label'         => __('Heading Tag', 'dpressall'),
			'attr'          => 'heading_tag_opt',
			'type'          => 'text'
		),
	);

	$settings = array(
		'label'             => __('Title', 'wpstrom'),
		'listItemImage'     => 'dashicons-format-aside',
		'post_type'         => array('post', 'page'),
		'attrs'             => $fields
	);
	shortcode_ui_register_for_shortcode('dpressall_title', $settings);
}
add_action('register_shortcode_ui', 'dpressall_title_shortcdoe_ui');