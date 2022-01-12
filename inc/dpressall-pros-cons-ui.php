<?php
function dpressall_pros_cons_shortcdoe_ui(){
	$fields = array(
		array(
			'label'         => __('Pros Title', 'dpressall'),
			'attr'          => 'pros_title',
			'type'          => 'text'
		),
		array(
			'label'         => __('Cons Title', 'dpressall'),
			'attr'          => 'cons_title',
			'type'          => 'text'
		),
		array(
			'label'         => __('Pros Text', 'dpressall'),
			'attr'          => 'pros_text',
			'type'          => 'textarea'
		),
		array(
			'label'         => __('Cons Text', 'dpressall'),
			'attr'          => 'cons_text',
			'type'          => 'textarea'
        ),
        array(
			'label'         => __('Pros Heading Text Color', 'dpressall'),
			'attr'          => 'pros_head_color',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Cons Heading Text Color', 'dpressall'),
			'attr'          => 'cons_head_color',
			'type'          => 'color'
		),
		array(
			'label'         => __('Pros Icon BG', 'dpressall'),
			'attr'          => 'pros_icon_bg_color',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Cons Icon BG', 'dpressall'),
			'attr'          => 'cons_icon_bg_color',
			'type'          => 'color'
		),
		array(
			'label'         => __('Pros Icon Text Color', 'dpressall'),
			'attr'          => 'pros_icon_txt_color',
			'type'          => 'color'
        ),
        array(
			'label'         => __('Cons Icon Text Color', 'dpressall'),
			'attr'          => 'cons_icon_txt_color',
			'type'          => 'color'
        ),
	);

	$settings = array(
		'label'             => __('Pros Cons New', 'wpstrom'),
		'listItemImage'     => 'dashicons-format-aside',
		'post_type'         => array('post', 'page'),
		'attrs'             => $fields
	);
	shortcode_ui_register_for_shortcode('dpressall_pros_cons', $settings);
}
add_action('register_shortcode_ui', 'dpressall_pros_cons_shortcdoe_ui');