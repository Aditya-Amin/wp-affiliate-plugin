<?php
//Single product list Shortcode
function single_product_list_shortcode($attr){
    ob_start(); ?>
    <div class="act-single-product-list-container">
        <?php
            $acttable_pro_args = new WP_Query(array(
                'post_type'             => 'actproduct',
                'ignore_sticky_posts'   => 1,
                'orderby' => array( 
                    'act_single_product_order' => 'ASC',
                ),
                'post_status'           => 'publish'
            ));
            if($acttable_pro_args->have_posts()):
            
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
        <div class="act-product-list-item">
            <div class="single-product-header">
                <span class="order"><?php echo $product_order; ?></span>
                <h3 class="act-single-product-title"><a href="<?php echo $affiliate_url; ?>" target="_blank" rel="nofollow noopener"><?php echo the_title(); ?></a></h3>
            </div>
            <div class="single-product-body">
                <div class="act-product-img" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>); background-position:center; background-size:cover; background-repeat:no-repeat"></div>
                <div class="buttons" style="text-align: center; margin-top: 30px;">
                <a href="<?php echo $affiliate_url; ?>" rel="nofollow noopener" class="btn btn-act-tbl-price" style="text-align:center;">
                    <span class="btn-content-icon"><i class="fab fa-amazon"></i></span>
                    <span><?php echo $button_text; ?></span>
                </a>
                </div>
                <div class="act-product-contents">
                    <div class="act-product-descriptions">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
            endwhile;
            wp_reset_query();
        else:
        ?>
            <p><strong>No product found!</strong></p>
        <?php endif; ?>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('actsingleproductlists', 'single_product_list_shortcode');