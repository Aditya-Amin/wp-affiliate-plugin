<?php
//product Shortcode
function dpressall_product_box_shortcode($attr){
    $default = array(
        'actproduct_post_id'   => '',
    );
    $dpresstable_product_params   = shortcode_atts($default, $attr);
    $dpress_pro_ids = $dpresstable_product_params['actproduct_post_id'];
    //var_dump($dpresstable_product_params);

    ob_start(); ?>
    <div class="dpress-three-box-before" style="overflow: hidden;">
    <div class="dpressall-three-pro-box">
        <?php
            $dpresstable_pro_args = new WP_Query(array(
                'posts_per_page'        => 1,
                'post__in'              => array($dpress_pro_ids),
                'post_type'             => 'productbox',
                'ignore_sticky_posts'   => 1,
                'post_status'           => 'publish'
            ));
            
            while ($dpresstable_pro_args->have_posts()) : $dpresstable_pro_args->the_post();
            $dpress_pro_tag_bg = get_post_meta(get_the_ID(), 'dpressall_pro_tag_bg', true);
            $dpress_pro_title_color = get_post_meta(get_the_ID(), 'dpressall_pro_title_color', true);
            $dpress_pro_btn_bg = get_post_meta(get_the_ID(), 'dpressall_pro_button_bg', true);
            $dpress_pro_btn_text_color = get_post_meta(get_the_ID(), 'dpressall_pro_button_text_color', true);
            $dpress_pro_btn_hover_bg = get_post_meta(get_the_ID(), 'dpressall_pro_button_hover_bg', true);
            $dpress_pro_star_bg = get_post_meta(get_the_ID(), 'dpressall_pro_star_bg', true);
            $dpress_pro_box_hover = get_post_meta(get_the_ID(), 'dpressall_pro_box_hover', true);
            $dpress_pro_title_size = get_post_meta(get_the_ID(), 'dpressall_pro_title_size', true);
            $dpress_pro_btn_font_size = get_post_meta(get_the_ID(), 'dpressall_pro_button_font_size', true);
            $dpress_pro_tag_font_size = get_post_meta(get_the_ID(), 'dpressall_pro_tag_font_size', true);
            $dpress_pro_btn_txt = get_post_meta(get_the_ID(), 'dpress_pro_button_text', true);
            $dpress_pro_btn_txt_mobile = get_post_meta(get_the_ID(), 'dpress_pro_button_mobile_text', true);
            $dpress_porduct_line_bg = get_post_meta(get_the_ID(), 'dpress_porduct_line_bg', true);
        ?>
        <?php
            $dpress_pro_meta_values = get_post_meta(get_the_ID(), 'dprsstable_product_field', true);
            foreach($dpress_pro_meta_values as $pro_meta_value){
        ?>
        <div class="dpressall-single-pro-box dpress-box-one">
            <div class="dpressall-best-pro-img-box">
                <div class="dpress-pro-img-box-height">
                    <?php
                        if($pro_meta_value['dpress_pro_image_source_url']):
                    ?>
                    <img src="<?php echo esc_url($pro_meta_value['dpress_pro_image_source_url']); ?>" alt="<?php echo esc_html($pro_meta_value['dpress_pro_title']); ?>">
                    <?php endif; ?>
                    <?php if($pro_meta_value['dpress_pro_image']): ?>
                    <?php echo wp_get_attachment_image($pro_meta_value['dpress_pro_image']['0'],'large'); ?>
                    <?php endif; ?>
                </div>
                <div class="dpress-three-pro-box-line" style="background: <?php echo esc_attr($dpress_porduct_line_bg); ?>;"></div>
                <span class="dpressall-best-pro-title">
                    <?php
                        echo esc_html($pro_meta_value['dpress_pro_title']);
                    ?>
                </span>
                <?php
                    if($pro_meta_value['dpress_pro_ratings']):
                ?>
                <div class="dpressall-best-pro-rating">
                    <?php if($pro_meta_value['dpress_pro_ratings'] == 1): ?>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <?php endif; ?>
                    <?php if($pro_meta_value['dpress_pro_ratings'] == 2): ?>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <?php endif; ?>
                    <?php if($pro_meta_value['dpress_pro_ratings'] == 3): ?>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <?php endif; ?>
                    <?php if($pro_meta_value['dpress_pro_ratings'] == 4): ?>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <?php endif; ?>
                    <?php if($pro_meta_value['dpress_pro_ratings'] == 5): ?>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <span class="d-pro-rating rating-1"><i class="demo-icon icon-star"></i></span>
                    <?php endif; ?>
                </div>
                <?php
                    endif;
                ?>
            </div>
            <div class="dpressall-best-pro-footer">
                <a href="<?php echo esc_url($pro_meta_value['dpress_pro_url']); ?>" target="_blank" rel="nofollow" class="btn btn-dpress-tbl-price" style="background: <?php echo esc_attr($dpress_pro_btn_bg); ?>; color: <?php echo esc_attr($dpress_pro_btn_text_color); ?>">
                    <!-- <span class="btn-content-icon">
                        <i class="fab fa-amazon"></i>
                    </span> -->
                    <span class="btn-desktop-text btn-content-text">
                        <?php echo esc_html($dpress_pro_btn_txt); ?>
                    </span>
                    <span class="btn-mobile-text btn-content-text">
                        <?php echo esc_html($dpress_pro_btn_txt_mobile); ?>
                    </span>
                </a>
            </div>
            <!-- <div class="dpressall-best-pro-tag" style="background: <?php echo esc_attr($dpress_pro_tag_bg); ?>">
                <span class="dpress-pro-tag-inner">
                <span class="best-pro-tag-text"><?php echo esc_html($pro_meta_value['dpress_pro_tag_text']); ?></span>
                <span class="best-pro-tag-icon">
                    <?php
                        if($pro_meta_value['product_badges'][0] == 'first'){
                    ?>
                    <i class="demo-icon icon-star"></i>
                    <?php
                        }elseif($pro_meta_value['product_badges'][0] == 'second'){
                    ?>
                    <i class="demo-icon icon-dollar"></i>
                    <?php
                        }elseif($pro_meta_value['product_badges'][0] == 'third'){
                    ?>
                    <i class="demo-icon icon-crown"></i>
                    <?php
                        }else{
                    ?>
                    <i class="demo-icon icon-star"></i>
                    <?php
                        }
                    ?>
                </span>
                </span>
            </div> -->
            <style>
                .product_award span:before, .product_award span:after {
                    background: <?php echo esc_attr($dpress_pro_tag_bg); ?>;
                }

                .product_award:after {
                    border-top: 10px solid #<?php echo esc_attr($dpress_pro_tag_bg); ?>;
                }
            </style>
            <div class="product_award">
                <span style="background: <?php echo esc_attr($dpress_pro_tag_bg); ?>"><?php echo esc_html($pro_meta_value['dpress_pro_tag_text']); ?></span>
            </div>
            <a href="<?php echo esc_url($pro_meta_value['dpress_pro_url']); ?>" class="best-pro-link" rel="nofollow" target="blank"></a>
        </div>
        <?php
            }
            endwhile;
            wp_reset_query();
        ?>
    </div>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('actproduct', 'dpressall_product_box_shortcode');