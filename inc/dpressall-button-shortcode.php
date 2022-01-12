<?php
function dpressall_button_shortcode($attr){
    $default = array(
        'button_title'          => 'Check Latest Price',
        'button_bg'             => '#EF5323',
        'button_color'          => '#fff',
        'button_url'            => '',
    );

    $dpressall_button_params = shortcode_atts($default, $attr);

    ob_start(); ?>
    <div class="dpressall-button">
        <a href="<?php echo esc_url($dpressall_button_params['button_url']); ?>" class="btn-btn-dpressall-default" target="_blank" rel="nofollow" style="background:<?php echo esc_attr($dpressall_button_params['button_bg']); ?>; color:<?php echo esc_attr($dpressall_button_params['button_color']); ?>;">
            <?php echo esc_html($dpressall_button_params['button_title']); ?> <i class="demo-icon icon-right"></i>
        </a>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('dpressall_aff_button', 'dpressall_button_shortcode');
?>