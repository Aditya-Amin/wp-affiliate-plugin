<?php
function dpressall_product_shortcode($attr){
    $default = array(
        'product_image'             => '',
        'product_image_url'         => '',
        'pro_affiliate_url'         => '',
        'feature_title'             => 'Features',
        'features_text'             => '',
        'button_title'              => 'Get The Price',
        'button_bg'                 => '#EF5323',
        'button_color'              => '#fff',
        'button_hover_color'        => '#23958A',
        'top_border_color'          => '#EF5323',
        'title_color'               => '#231F20',
        'feature_color'             => '#231F20',
        'pro_feature_icon_color'    => '#EF5323',
    );

    $dpressall_product_params = shortcode_atts($default, $attr);

    ob_start(); ?>
    <style type="text/css">
        .btn.btn-por-price:hover{
            background: <?php echo esc_attr($dpressall_product_params['button_hover_color']); ?>;
        }
        .dpressall-feature-text li::before {
            background: <?php echo esc_attr($dpressall_product_params['pro_feature_icon_color']); ?>;
        }
    </style>
    <div class="dpressall-pro-box">
        <div class="dpressall-pro-box-inner" style="border-top: 5px solid <?php echo $dpressall_product_params['top_border_color']; ?>">
            
            <div class="dpressall-pro-box-new">
                <table class="dpressall-pro-new-table">
                    <tr>
                        <td>
                            <div class="dpressall-pro-image-new">
                                <a href="<?php echo esc_url($dpressall_product_params['pro_affiliate_url']); ?>" target="_blank" rel="nofollow">
                                <?php
                                    if($dpressall_product_params['product_image']){
                                ?>
                                <?php echo wp_get_attachment_image($dpressall_product_params['product_image'], 'full'); ?>
                                <?php
                                    }else{
                                ?>
                                <img src="<?php echo esc_url($dpressall_product_params['product_image_url']); ?>">
                                <?php
                                    }
                                ?>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="dpress-all-pro-info-new">
                                <span class="dpressall-feature-title">
                                    <?php echo esc_html($dpressall_product_params['feature_title']); ?>
                                </span>
                                <ul class="dpressall-feature-text" style="color: <?php echo esc_attr($dpressall_product_params['feature_color']); ?>">
                                <?php echo $dpressall_product_params['features_text']; ?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="dpress-single-pro-btn-box">
                                <a href="<?php echo esc_url($dpressall_product_params['pro_affiliate_url']); ?>" class="byb2-btn" target="_blank" rel="nofollow" style="background:<?php echo esc_attr($dpressall_product_params['button_bg']); ?>; color:<?php echo esc_attr($dpressall_product_params['button_color']); ?>;">
                                    <span class="byb2-btn-content"><?php echo esc_html($dpressall_product_params['button_title']); ?></span>
                                    <span class="icon">
                                        <i class="demo-icon icon-right-big" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('dpressall_product', 'dpressall_product_shortcode');
?>