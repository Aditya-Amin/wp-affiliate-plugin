<?php
function act_three_product_shortcdoe_ui(){
	$fields = array(
        array(
			'label'         => __('Product 1 Tag', 'act'),
			'attr'          => 'product_1_tag',
			'type'          => 'text'
        ),
        array(
			'label'         => __('Product 1 Image Upload', 'act'),
			'attr'          => 'product_1_image',
			'type'          => 'attachment'
        ),

        array(
			'label'         => __('Or, Product 1 Image From Amazon', 'act'),
			'attr'          => 'product_1_image_url',
			'type'          => 'url'
        ),

        array(
			'label'         => __('Product 1 Title', 'act'),
			'attr'          => 'product_1_title',
			'type'          => 'text'
        ),

       
        array(
			'label'         => __('Product 1 Amazon Affiliate Link', 'act'),
			'attr'          => 'product_1_affiliate_url',
			'type'          => 'url'
        ),

        array(
			'label'         => __('Product 1 Raitings', 'act'),
			'attr'          => 'product_1_ratings',
			'type'          => 'number'
        ),

        array(
			'label'         => __('Product 2 Tag', 'act'),
			'attr'          => 'product_2_tag',
			'type'          => 'text'
        ),
        array(
			'label'         => __('Product 2 Image Upload', 'act'),
			'attr'          => 'product_2_image',
			'type'          => 'attachment'
        ),

        array(
			'label'         => __('Or, Product 2 Image From Amazon', 'act'),
			'attr'          => 'product_2_image_url',
			'type'          => 'url'
        ),

        array(
			'label'         => __('Product 2 Title', 'act'),
			'attr'          => 'product_2_title',
			'type'          => 'text'
        ),

       
        array(
			'label'         => __('Product 2 Amazon Affiliate Link', 'act'),
			'attr'          => 'product_2_affiliate_url',
			'type'          => 'url'
        ),

        array(
			'label'         => __('Product 2 Raitings', 'act'),
			'attr'          => 'product_2_ratings',
			'type'          => 'number'
        ),

        array(
			'label'         => __('Product 3 Tag', 'act'),
			'attr'          => 'product_3_tag',
			'type'          => 'text'
        ),
        array(
			'label'         => __('Product 3 Image Upload', 'act'),
			'attr'          => 'product_3_image',
			'type'          => 'attachment'
        ),

        array(
			'label'         => __('Or, Product 3 Image From Amazon', 'act'),
			'attr'          => 'product_3_image_url',
			'type'          => 'url'
        ),

        array(
			'label'         => __('Product 3 Title', 'act'),
			'attr'          => 'product_3_title',
			'type'          => 'text'
        ),

       
        array(
			'label'         => __('Product 3 Amazon Affiliate Link', 'act'),
			'attr'          => 'product_3_affiliate_url',
			'type'          => 'url'
        ),

        array(
			'label'         => __('Product 3 Raitings', 'act'),
			'attr'          => 'product_3_ratings',
			'type'          => 'number'
        ),

		
        array(
			'label'         => __('Products Buttons Text', 'act'),
			'attr'          => 'product_button_text',
			'type'          => 'text'
        ),

        array(
			'label'         => __('Products Mobile Buttons Text', 'act'),
			'attr'          => 'product_mobile_button_text',
			'type'          => 'text'
        ),

        array(
			'label'         => __('Tag Color', 'act'),
			'attr'          => 'tag_color',
			'type'          => 'color'
        ),

        array(
			'label'         => __('Product Title Color', 'act'),
			'attr'          => 'product_title_color',
			'type'          => 'color'
        ),

        array(
			'label'         => __('Ratings Color', 'act'),
			'attr'          => 'ratings_color',
			'type'          => 'color'
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
       
	
	);

	$settings = array(
		'label'             => __('Three Product Box', 'act'),
		'listItemImage'     => 'dashicons-format-aside',
		'post_type'         => array('post', 'page'),
		'attrs'             => $fields
	);
	shortcode_ui_register_for_shortcode('actproduct', $settings);
}
add_action('register_shortcode_ui', 'act_three_product_shortcdoe_ui');