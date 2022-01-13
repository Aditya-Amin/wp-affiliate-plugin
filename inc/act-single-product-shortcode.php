<?php
//Single product Shortcode
function single_product_shortcode($attr){
    $default = array(
        'actsingleproduct_post_id'   => '',
    );
    $act_single_product_params   = shortcode_atts($default, $attr);
    $act_single_product_ids = $act_single_product_params['actsingleproduct_post_id'];
    var_dump($act_single_product_ids);

    ob_start(); ?>
    <div class="act-single-product-container">
        <div class="act-single-product">
            <?php
                $dpresstable_pro_args = new WP_Query(array(
                    'posts_per_page'        => 1,
                    'post__in'              => array($act_single_product_ids),
                    'post_type'             => 'actproduct',
                    'ignore_sticky_posts'   => 1,
                    'post_status'           => 'publish'
                ));
                
                while ($dpresstable_pro_args->have_posts()) : $dpresstable_pro_args->the_post();
            ?>
            
            <?php
                endwhile;
                wp_reset_query();
            ?>
        </div>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('actsingleproduct', 'single_product_shortcode');