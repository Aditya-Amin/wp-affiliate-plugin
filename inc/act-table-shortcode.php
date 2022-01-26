<?php


//table Shortcode
function act_table_main_shortcode($attr){
    $default = array(
        'acttable_post_id'                   => '',
    );
    $dpresstable_main_table_params   = shortcode_atts($default, $attr);
    $dpress_table_ids = $dpresstable_main_table_params['acttable_post_id'];

    ob_start(); ?>
    <div class="wpstrom-product-table">
        <div class="strom-table-box">
            <div class="row">
                <div class="col-md-12">
                    <div class="wpstrom-product-table-inner">
                        <?php
                        $dpresstable_table_args = new WP_Query(array(
                            'posts_per_page'        => 1,
                            'post__in'              => array($dpress_table_ids),
                            'post_type'             => 'acttable',
                            'ignore_sticky_posts'   => 1,
                            'post_status'           => 'publish'
                        ));
                        while ($dpresstable_table_args->have_posts()) : $dpresstable_table_args->the_post();
                        $dpress_tbl_heading_bg_color    = get_post_meta(get_the_ID(), 'dpress_tbl_heading_bg_color', true);
                        $dpress_tbl_heading_text_color  = get_post_meta(get_the_ID(), 'dpress_tbl_heading_text_color', true);
                        $dpress_tbl_button_bg_color     = get_post_meta(get_the_ID(), 'dpress_tbl_button_bg_color', true);
                        $dpress_tbl_button_text_color   = get_post_meta(get_the_ID(), 'dpress_tbl_button_text_color', true);
                        $dpress_tbl_btn_text            = get_post_meta(get_the_ID(), 'dpress_tbl_button_text', true);
                        $dpress_tbl_tag_bg_color        = get_post_meta(get_the_ID(), 'dpress_tbl_tag_bg_color', true);
                        $dpress_tbl_tag_text_color      = get_post_meta(get_the_ID(), 'dpress_tbl_tag_text_color', true);
                        $dpress_tbl_txt_color           = get_post_meta(get_the_ID(), 'dpress_tbl_txt_color', true);
                        $dpress_tbl_font_size           = get_post_meta(get_the_ID(), 'dpress_tbl_font_size', true);
                        $dpress_tbl_heading_text_one    = get_post_meta(get_the_ID(), 'dpress_tbl_heading_text_one', true);
                        $dpress_tbl_heading_text_two    = get_post_meta(get_the_ID(), 'dpress_tbl_heading_text_two', true);
                        $dpress_tbl_heading_text_three    = get_post_meta(get_the_ID(), 'dpress_tbl_heading_text_three', true);
                        $dpress_tbl_heading_text_four    = get_post_meta(get_the_ID(), 'dpress_tbl_heading_text_four', true);
                        $dpress_tbl_product_title_color    = get_post_meta(get_the_ID(), 'dpress_tbl_product_title_color', true);
                        $dpress_tbl_tag_color    = get_post_meta(get_the_ID(), 'dpress_tbl_tag_color', true);
                        $dpress_tbl_feature_icon_color    = get_post_meta(get_the_ID(), 'dpress_tbl_feature_color', true);
                     ?>
                    
                    <style type="text/css">
                        .dpress-table-tag, .dpress-table-tag-mobile{
                            border: 2px solid <?php echo esc_attr($dpress_tbl_tag_color); ?>;
                        }
                        .dpress-table-tag::before, .dpress-table-tag-mobile::before{
                            border-right: 9px solid <?php echo esc_attr($dpress_tbl_tag_color); ?>;
                        }
                        .wpstrom-table-pro-feture ul li::before {
                            background: <?php echo esc_attr($dpress_tbl_feature_icon_color); ?>;
                        }
                    </style>

                    <table class="table dpressall-table">
                        <thead class="dpressall-tbl-head" style="background: <?php echo esc_attr($dpress_tbl_heading_bg_color); ?>; color: <?php echo esc_attr($dpress_tbl_heading_text_color); ?>">
                            <tr>
                                <th class="dpressall-tbl-img"><?php echo esc_html($dpress_tbl_heading_text_one); ?></th>
                                <th class="dpressall-tbl-model"><?php echo esc_html($dpress_tbl_heading_text_two); ?></th>
                                <th class="dpressall-tbl-feature"><?php echo esc_html($dpress_tbl_heading_text_three); ?></th>
                                <th class="dpressall-tbl-price"><?php echo esc_html($dpress_tbl_heading_text_four); ?></th>
                            </tr>
                        </thead>
                        
                        <tbody class="dpressall-tbl-body">
                        <?php
                            $dpresstable_meta_values = get_post_meta(get_the_ID(), 'dprsstable_table_field', true);
                            //print_r($dpresstable_meta_values);
                            foreach($dpresstable_meta_values as $table_meta_value){
                        ?>

                        <tr>
                            <td class="dpressall-tbl-colum-one">
                            <?php if($table_meta_value['product_tag_text']): ?>
                            <div class="dpress-table-tag" style="background:<?php echo esc_attr($dpress_tbl_tag_bg_color); ?>">
                                <span>
                                <?php echo esc_html($table_meta_value['product_tag_text']); ?>
                                </span>
                            </div>
                            <?php endif; ?>
                            <div class="dpressall-pro-img-boxx">
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
                            <td class="dpress-table-tag-mobile-label">
                                <div class="dpress-table-tag-mobile" style="background:<?php echo esc_attr($dpress_tbl_tag_bg_color); ?>">
                                    <span><?php echo esc_html($table_meta_value['product_tag_text']); ?></span>
                                </div>
                            </td>
                            <?php endif; ?>
                            <td class="dpressall-tbl-colum-two">
                                <a href="<?php echo esc_url($table_meta_value['product_url']); ?>" target="_blank" rel="nofollow" class="dpressall-tbl-pro-title" style="color:<?php echo esc_attr($dpress_tbl_product_title_color); ?>">
                                <?php echo esc_html($table_meta_value['product_name']); ?>
                                </a>
                            </td>
                            <td class="dpressall-tbl-colum-three">
                                <div class="dpressall-table-features">
                                    <?php
                                    if($table_meta_value['product_description']):
                                        ?>
                                        <div class="wpstrom-table-pro-feture">
                                            <?php echo apply_filters('the_content', $table_meta_value['product_description']); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </td>
                            <td class="dpressall-tbl-colum-four">
                                <!-- <?php if($table_meta_value['product_price']): ?>
                                <span class="dpress-price-small">
                                    <?php echo esc_html($table_meta_value['product_price']); ?>
                                </span>
                                <?php endif; ?> -->
                                <a href="<?php echo esc_url($table_meta_value['product_url']); ?>" target="_blank" rel="nofollow" class="btn btn-dpress-tbl-price" style="background: <?php echo esc_attr($dpress_tbl_button_bg_color); ?>; color: <?php echo esc_attr($dpress_tbl_button_text_color); ?>">
                                <!-- <span class="btn-content-icon">
                                    <i class="fab fa-amazon"></i>
                                </span> -->
                                <span class="btn-content-text">
                                    <?php echo esc_html($dpress_tbl_btn_text); ?>
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