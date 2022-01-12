<?php
function dpressall_title_shortcode($attr){
    $default = array(
        'title_number'              => '',
        'title_text'                => '',
        'number_sub_text'           => '',
        'number_color'              => '#DE2229',
        'heading_font_size'         => '25',
        'heading_tag_opt'           => 'h2',
    );

    $dpressall_title_params = shortcode_atts($default, $attr);

    ob_start(); ?>
    <div class="dpressall-title-box">
        <div class="dpress-list-number">
            <div class="content-list-number">
                <div class="item-number" style="color: <?php echo esc_attr($dpressall_title_params['number_color']); ?>"><?php echo esc_html($dpressall_title_params['title_number']); ?></div>
                <div class="total"><?php echo esc_html($dpressall_title_params['number_sub_text']); ?></div>
            </div>
        </div>

        <<?php echo esc_attr($dpressall_title_params['heading_tag_opt']); ?> class="dpress-no-title" style="font-size:<?php echo esc_attr($dpressall_title_params['heading_font_size']); ?>px"><span class="dpress-no-title-two"><?php echo esc_html($dpressall_title_params['title_text']); ?></span></<?php echo esc_attr($dpressall_title_params['heading_tag_opt']); ?>>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('dpressall_title', 'dpressall_title_shortcode');
?>