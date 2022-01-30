<?php
//Single product Shortcode
function single_product_shortcode($attr){
    $default = array(
        'actsingleproduct_post_id'   => '',
    );
    $act_single_product_params   = shortcode_atts($default, $attr);
    $act_single_product_ids = $act_single_product_params['actsingleproduct_post_id'];
    ob_start(); ?>
    <div class="act-single-product-container">
        <div class="act-single-product">
            <?php
                $acttable_pro_args = new WP_Query(array(
                    'posts_per_page'        => 1,
                    'post__in'              => array($act_single_product_ids),
                    'post_type'             => 'actproduct',
                    'ignore_sticky_posts'   => 1,
                    'post_status'           => 'publish'
                ));
                
                while ($acttable_pro_args->have_posts()) : $acttable_pro_args->the_post();

                $product_order = get_post_meta(get_the_ID(), 'act_single_product_order', true);
                $affiliate_url = get_post_meta(get_the_ID(), 'act_single_pro_url', true);
                $title_text_color = get_post_meta(get_the_ID(), 'actall_pro_title_color', true);
                $title_text_size = get_post_meta(get_the_ID(), 'actall_pro_title_size', true);
                $button_text = get_post_meta(get_the_ID(), 'act_pro_button_text', true);
                $button_bg = get_post_meta(get_the_ID(), 'actall_pro_button_bg', true);
                $button_hover_bg = get_post_meta(get_the_ID(), 'actall_pro_button_hover_bg', true);
                $button_text_size = get_post_meta(get_the_ID(), 'actall_pro_button_font_size', true);
            ?>
            <div class="act-row single-product-body">
                <div class="act-product-img">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>">
                </div>
                <div class="act-product-contents">
                    <h3 class="act-single-product-title"><a href="<?php echo $affiliate_url; ?>" target="_blank" rel="nofollow noopener"><?php echo the_title(); ?></a></h3>
                    <div class="act-product-descriptions">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="act-row single-product-button">
                <a href="<?php echo $affiliate_url; ?>" rel="nofollow noopener" class="btn btn-act-tbl-price">
                    <span class="btn-content-icon"><i class="fab fa-amazon"></i></span>
                    <span><?php echo $button_text; ?></span>
                </a>
            </div>
            <?php
                endwhile;
                wp_reset_query();
            ?>
        </div>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('actsingleproduct', 'single_product_shortcode');