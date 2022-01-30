<?php


//table Shortcode
function act_table_main_shortcode($attr){
    $default = array(
        'acttable_post_id'                   => '',
    );
    $acttable_main_table_params   = shortcode_atts($default, $attr);
    $act_table_ids = $acttable_main_table_params['acttable_post_id'];

    ob_start(); ?>
    <div class="wpstrom-product-table">
        <div class="strom-table-box">
            <div class="row">
                <div class="col-md-12">
                    <div class="wpstrom-product-table-inner">
                        <?php
                        $acttable_table_args = new WP_Query(array(
                            'posts_per_page'        => 1,
                            'post__in'              => array($act_table_ids),
                            'post_type'             => 'acttable',
                            'ignore_sticky_posts'   => 1,
                            'post_status'           => 'publish'
                        ));
                        while ($acttable_table_args->have_posts()) : $acttable_table_args->the_post();
                        $act_tbl_heading_bg_color    = get_post_meta(get_the_ID(), 'act_tbl_heading_bg_color', true);
                        $act_tbl_heading_text_color  = get_post_meta(get_the_ID(), 'act_tbl_heading_text_color', true);
                        $act_tbl_button_bg_color     = get_post_meta(get_the_ID(), 'act_tbl_button_bg_color', true);
                        $act_tbl_button_text_color   = get_post_meta(get_the_ID(), 'act_tbl_button_text_color', true);
                        $act_tbl_btn_text            = get_post_meta(get_the_ID(), 'act_tbl_button_text', true);
                        $act_tbl_tag_bg_color        = get_post_meta(get_the_ID(), 'act_tbl_tag_bg_color', true);
                        $act_tbl_tag_text_color      = get_post_meta(get_the_ID(), 'act_tbl_tag_text_color', true);
                        $act_tbl_txt_color           = get_post_meta(get_the_ID(), 'act_tbl_txt_color', true);
                        $act_tbl_font_size           = get_post_meta(get_the_ID(), 'act_tbl_font_size', true);
                        $act_tbl_heading_text_one    = get_post_meta(get_the_ID(), 'act_tbl_heading_text_one', true);
                        $act_tbl_heading_text_two    = get_post_meta(get_the_ID(), 'act_tbl_heading_text_two', true);
                        $act_tbl_heading_text_three    = get_post_meta(get_the_ID(), 'act_tbl_heading_text_three', true);
                        $act_tbl_heading_text_four    = get_post_meta(get_the_ID(), 'act_tbl_heading_text_four', true);
                        $act_tbl_product_title_color    = get_post_meta(get_the_ID(), 'act_tbl_product_title_color', true);
                        $act_tbl_tag_color    = get_post_meta(get_the_ID(), 'act_tbl_tag_color', true);
                        $act_tbl_feature_icon_color    = get_post_meta(get_the_ID(), 'act_tbl_feature_color', true);
                     ?>
                    
                    <style type="text/css">
                        .act-table-tag, .act-table-tag-mobile{
                            border: 2px solid <?php echo esc_attr($act_tbl_tag_color); ?>;
                        }
                        .act-table-tag::before, .act-table-tag-mobile::before{
                            border-right: 9px solid <?php echo esc_attr($act_tbl_tag_color); ?>;
                        }
                        .wpstrom-table-pro-feture ul li::before {
                            background: <?php echo esc_attr($act_tbl_feature_icon_color); ?>;
                        }
                    </style>

                    <table class="table actall-table">
                        <thead class="actall-tbl-head" style="background: <?php echo esc_attr($act_tbl_heading_bg_color); ?>; color: <?php echo esc_attr($act_tbl_heading_text_color); ?>">
                            <tr>
                                <th class="actall-tbl-img" style="color:<?php echo esc_attr($act_tbl_heading_text_color) ?>"><?php echo esc_html($act_tbl_heading_text_one); ?></th>
                                <th class="actall-tbl-model" style="color:<?php echo esc_attr($act_tbl_heading_text_color) ?>"><?php echo esc_html($act_tbl_heading_text_two); ?></th>
                                <th class="actall-tbl-feature" style="color:<?php echo esc_attr($act_tbl_heading_text_color) ?>"><?php echo esc_html($act_tbl_heading_text_three); ?></th>
                                <th class="actall-tbl-price" style="color:<?php echo esc_attr($act_tbl_heading_text_color) ?>"><?php echo esc_html($act_tbl_heading_text_four); ?></th>
                            </tr>
                        </thead>
                        
                        <tbody class="actall-tbl-body">
                        <?php
                            $acttable_meta_values = get_post_meta(get_the_ID(), 'acttable_table_field', true);
                            //print_r($acttable_meta_values);
                            foreach($acttable_meta_values as $table_meta_value){
                        ?>

                        <tr>
                            <td class="actall-tbl-colum-one">
                            <?php if($table_meta_value['product_tag_text']): ?>
                            <div class="act-table-tag" style="background:<?php echo esc_attr($act_tbl_tag_bg_color); ?>">
                                <span>
                                <?php echo esc_html($table_meta_value['product_tag_text']); ?>
                                </span>
                            </div>
                            <?php endif; ?>
                            <div class="actall-pro-img-boxx">
                                <?php
                                    if($table_meta_value['product_image_source_url']):
                                ?>
                                <img src="<?php echo esc_url($table_meta_value['product_image_source_url']); ?>" alt="<?php echo esc_html($table_meta_value['product_name']); ?>">
                                <?php endif; ?>
                                <?php if($table_meta_value['product_image']): ?>
                                <?php echo wp_get_attachment_image($table_meta_value['product_image']['0'],'large'); ?>
                                <?php endif; ?>
                            </div>
                            </td>
                            <?php if($table_meta_value['product_tag_text']): ?>
                            <td class="act-table-tag-mobile-label">
                                <div class="act-table-tag-mobile" style="background:<?php echo esc_attr($act_tbl_tag_bg_color); ?>">
                                    <span><?php echo esc_html($table_meta_value['product_tag_text']); ?></span>
                                </div>
                            </td>
                            <?php endif; ?>
                            <td class="actall-tbl-colum-two">
                                <a href="<?php echo esc_url($table_meta_value['product_url']); ?>" target="_blank" rel="nofollow" class="actall-tbl-pro-title" style="color:<?php echo esc_attr($act_tbl_product_title_color); ?>">
                                <?php echo esc_html($table_meta_value['product_name']); ?>
                                </a>
                            </td>
                            <td class="actall-tbl-colum-three">
                                <div class="actall-table-features">
                                    <?php
                                    if($table_meta_value['product_description']):
                                        ?>
                                        <div class="wpstrom-table-pro-feture">
                                            <?php echo apply_filters('the_content', $table_meta_value['product_description']); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="actall-tbl-colum-four">
                                <!-- <?php if($table_meta_value['product_price']): ?>
                                <span class="act-price-small">
                                    <?php echo esc_html($table_meta_value['product_price']); ?>
                                </span>
                                <?php endif; ?> -->
                                <a href="<?php echo esc_url($table_meta_value['product_url']); ?>" target="_blank" rel="nofollow" class="btn btn-act-tbl-price" style="background: <?php echo esc_attr($act_tbl_button_bg_color); ?>; color: <?php echo esc_attr($act_tbl_button_text_color); ?>">
                                <!-- <span class="btn-content-icon">
                                    <i class="fab fa-amazon"></i>
                                </span> -->
                                <span class="btn-content-text">
                                    <?php echo esc_html($act_tbl_btn_text); ?>
                                </span>
                                </a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>

                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('acttable', 'act_table_main_shortcode');