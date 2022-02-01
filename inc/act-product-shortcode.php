<?php
function act_product_shortcode($attr){
    /*$default = array(
        'product_image'             => '',
        'product_image_url'         => '',
        'pro_affiliate_url'         => '',
        'product_title'             => 'Features',
        'products_text'             => '',
        'button_title'              => 'Get The Price',
        'button_bg'                 => '#EF5323',
        'button_color'              => '#fff',
        'button_hover_color'        => '#23958A',
        'top_border_color'          => '#EF5323',
        'title_color'               => '#231F20',
        'product_color'             => '#231F20',
        'pro_product_icon_color'    => '#EF5323',
    );

    $act_product_params = shortcode_atts($default, $attr);

    ob_start(); ?>
    <style type="text/css">
        .btn.btn-por-price:hover{
            background: <?php echo esc_attr($act_product_params['button_hover_color']); ?>;
        }
        .act-product-text li::before {
            background: <?php echo esc_attr($act_product_params['pro_product_icon_color']); ?>;
        }
    </style>
    <div class="act-pro-box">
        <div class="act-pro-box-inner" style="border-top: 5px solid <?php echo $act_product_params['top_border_color']; ?>">
            
            <div class="act-pro-box-new">
                <table class="act-pro-new-table">
                    <tr>
                        <td>
                            <div class="act-pro-image-new">
                                <a href="<?php echo esc_url($act_product_params['pro_affiliate_url']); ?>" target="_blank" rel="nofollow">
                                <?php
                                    if($act_product_params['product_image']){
                                ?>
                                <?php echo wp_get_attachment_image($act_product_params['product_image'], 'full'); ?>
                                <?php
                                    }else{
                                ?>
                                <img src="<?php echo esc_url($act_product_params['product_image_url']); ?>">
                                <?php
                                    }
                                ?>
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="dpress-all-pro-info-new">
                                <span class="act-product-title">
                                    <?php echo esc_html($act_product_params['product_title']); ?>
                                </span>
                                <ul class="act-product-text" style="color: <?php echo esc_attr($act_product_params['product_color']); ?>">
                                <?php echo $act_product_params['products_text']; ?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="dpress-single-pro-btn-box">
                                <a href="<?php echo esc_url($act_product_params['pro_affiliate_url']); ?>" class="byb2-btn" target="_blank" rel="nofollow" style="background:<?php echo esc_attr($act_product_params['button_bg']); ?>; color:<?php echo esc_attr($act_product_params['button_color']); ?>;">
                                    <span class="byb2-btn-content"><?php echo esc_html($act_product_params['button_title']); ?></span>
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
    <?php return ob_get_clean(); */

    $default = array(
        'product_image'             => '',
        'product_image_url'         => '',
        'pro_affiliate_url'         => '',
        'product_title'             => 'Features',
        'products_text'             => '',
        'button_title'              => 'Get The Price',
        'button_bg'                 => '#EF5323',
        'button_color'              => '#fff',
        'button_hover_color'        => '#23958A',
        'button_font_weight'        => 'normal',
        'product_title_color'               => '#231F20',
        'product_description_color'             => '#231F20',
        'list_bullet_color'    => '#EF5323',
    );

    $act_product_params = shortcode_atts($default, $attr);
    ob_start(); ?>
    <style type="text/css">
        /* act single product */
        .act-row {
            display: flex;
            justify-content: space-between;
        }

        .act-product-img {
            width: 30%;
            margin-right: 20px;
        }
        .act-product-img img{
            height:190px!important;
            max-width:100%!important;
        }

        h2.act-single-product-title a {
            font-size: 18px;
            font-weight: 600;
            display: block;
            color:<?php echo esc_attr($act_product_params['product_title_color']); ?>
        }

        .act-product-descriptions {
            font-size: 16px;
            color: #343434;
            line-height: 1.2em;
        }

        .act-single-product-container {
            width: 60%;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0px 0px 1px rgba(0,0,0,0.5);
        }

        .act-product-contents {
            width: 75%;
            margin-left: 25px;
        }

        h2.act-single-product-title {
            margin-top: 0;
            line-height: 1rem;
            margin-bottom:20px;
        }

        ul.act-product-text li {
            margin-bottom: 8px;
        }

        .act-row.single-product-button {
            justify-content: end;
        }

        .act-product-descriptions ul {
            padding-left: 14px;
            margin-left:4px;
        }


        .btn.btn-act-tbl-price {
            box-sizing: border-box;
            display: inline-block;
            margin: 0;
            padding: 7px 12px 6px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 400;
            line-height: 19px;
            text-align: center;
            text-decoration: none !important;
            background-color: #fff;
            border: 1px solid #ccc !important;
            color: #333 !important;
        }

        .btn.btn-act-tbl-price {
            border-color: #9c7e31 #90742d #786025 !important;
            border-radius: 3px;
            box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, .4);
            background: #f0c14b;
            background: linear-gradient(180deg, #f7dfa5, #f0c14b) repeat scroll 0 0 transparent;
            color: #111 !important;
        }

        @media only screen and (max-width:820px){
            .act-single-product-container {
                width: 100%;
            }

            .act-product-img {
                width: 30%;
                margin-right: 15px;
            }

            .act-product-contents {
                width: 75%;
                margin-left: 10px;
            }
        }

        @media only screen and (max-width:414px){
            .act-single-product-container {
                width: 90%;
            }

            .act-row.single-product-body {
                flex-wrap: wrap;
                justify-content: center;
            }

            .act-product-img {
                width: 100%;
                margin-right: 0;
            }
            .act-product-contents {
                width: 100%;
                margin-left: 0;
            }
            .product_award:after{
                top:98.5%;
                border-left: 52px solid transparent;
                border-right: 52px solid transparent;
            }

            h2.act-single-product-title a{
                font-size:16px;
            }

            h2.act-single-product-title {
                line-height: 1.9rem;
            }
        }

        .btn.btn-por-price:hover{
            background: <?php echo esc_attr($act_product_params['button_hover_color']); ?>;
        }
        .act-product-text li::marker {
            color: <?php echo esc_attr($act_product_params['list_bullet_color']); ?>!important;
        }

    </style>
    <div class="act-single-product-container">
        <div class="act-single-product">
            <div class="act-row single-product-body">
                <div class="act-product-img">
                    <?php
                        if($act_product_params['product_image']){
                    ?>
                    <?php echo wp_get_attachment_image($act_product_params['product_image'], 'full'); ?>
                    <?php
                        }else{
                    ?>
                    <img src="<?php echo esc_url($act_product_params['product_image_url']); ?>">
                    <?php
                        }
                    ?>
                </div>
                <div class="act-product-contents">
                    <h2 class="act-single-product-title"><a href="<?php echo esc_url($act_product_params['pro_affiliate_url']); ?>" target="_blank" rel="nofollow noopener"> <?php echo esc_html($act_product_params['product_title']); ?></a></h2>
                    <div class="act-product-descriptions">
                        <ul class="act-product-text" style="color: <?php echo esc_attr($act_product_params['product_description_color']); ?>">
                            <?php echo $act_product_params['products_text']; ?>
                        </ul>
                        <div class="act-row single-product-button">
                            <a style="background:<?php echo esc_attr($act_product_params['button_bg']); ?>; color:<?php echo esc_attr($act_product_params['button_color']); ?>" href="<?php echo esc_url($act_product_params['pro_affiliate_url']); ?>" rel="nofollow noopener" class="btn btn-act-tbl-price">
                                <span><?php echo esc_html($act_product_params['button_title']); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('act_product', 'act_product_shortcode');
?>