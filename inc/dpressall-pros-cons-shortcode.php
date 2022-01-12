<?php
function dpressall_pros_cons_shortcode($attr){
    $default = array(
        'pros_title'            => 'Pros',
        'cons_title'            => 'Cons',
        'pros_text'             => '',
        'cons_text'             => '',
        'pros_head_color'       => '#231F20',
        'cons_head_color'       => '#231F20',
        'pros_icon_bg_color'    => '#F3F3F3',
        'cons_icon_bg_color'    => '#F3F3F3',
        'pros_icon_txt_color'   => '#2F9697',
        'cons_icon_txt_color'   => '#ED542F',
    );

    $dpressall_pros_cons_params = shortcode_atts($default, $attr);

    ob_start(); ?>
    <style type="text/css">
        .dpressall-pros-cons .dpressall-pros li::before{
            background: <?php echo esc_attr($dpressall_pros_cons_params['pros_icon_bg_color']); ?>;
            color: <?php echo esc_attr($dpressall_pros_cons_params['pros_icon_txt_color']); ?>;
        }
        .dpressall-pros-cons .dpressall-cons li::before{
            background: <?php echo esc_attr($dpressall_pros_cons_params['cons_icon_bg_color']); ?>;
            color: <?php echo esc_attr($dpressall_pros_cons_params['cons_icon_txt_color']); ?>;
        }
    </style>
    <div class="dpressall-pros-cons">
        <div class="dpressall-pros">
            <div class="dpressall-pros-title" style="color:<?php echo esc_attr($dpressall_pros_cons_params['pros_head_color']); ?>">
                <?php echo esc_html($dpressall_pros_cons_params['pros_title']); ?>
            </div>
            <ul>
                <?php echo $dpressall_pros_cons_params['pros_text']; ?>
            </ul>
        </div>
        <div class="dpressall-line"></div>
        <div class="dpressall-cons">
            <div class="dpressall-cons-title" style="color:<?php echo esc_attr($dpressall_pros_cons_params['cons_head_color']); ?>">
                <?php echo esc_html($dpressall_pros_cons_params['cons_title']); ?>
            </div>
            <ul>
                <?php echo $dpressall_pros_cons_params['cons_text']; ?>
            </ul>
        </div>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('dpressall_pros_cons', 'dpressall_pros_cons_shortcode');
?>