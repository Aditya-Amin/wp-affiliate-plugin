<?php
//product Shortcode
function actall_product_box_shortcode($attr){
    $default = array(
        'product_1_tag'             => '',
        'product_1_image'           => '',
        'product_1_image_url'       => '',
        'product_1_title'           => '',
        'product_1_affiliate_url'   => '',
        'product_1_ratings'         => 5,

        'product_2_tag'             => '',
        'product_2_image'           => '',
        'product_2_image_url'       => '',
        'product_2_title'           => '',
        'product_2_affiliate_url'   => '',
        'product_2_ratings'         => 5,

        'product_3_tag'             => '',
        'product_3_image'           => '',
        'product_3_image_url'       => '',
        'product_3_title'           => '',
        'product_3_affiliate_url'   => '',
        'product_3_ratings'         => 5,


        'tag_color'                 => '#000',
        'product_title_color'       => '#231F20',
        'product_button_text'       => 'Check Price',
        'product_mobile_button_text' => 'Buy Now',
        'ratings_color'             => '#dd9933',
        'button_bg'                 => '#EF5323',
        'button_color'              => '#fff',
        'button_hover_color'        => '#23958A'
    );
    $act_three_product_box_params   = shortcode_atts($default, $attr);
    //var_dump($acttable_product_params);

    ob_start(); ?>
    <style>
        /*Product Box*/
        .actall-best-pro-img-box img {
            max-height: 150px;
            display: block;
            text-align: center;
            margin: 0 auto;
            width: auto;
            height: auto;
        }

        .actall-three-pro-box {
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
            background: #fff;
            float: left;
        }

        .act-three-box-before {
            padding-left: 20px;
            padding-right: 20px;
            width: 100%;
        }

        .actall-single-pro-box {
            position: relative;
            float: left;
            width: 33.33333333%;
            cursor: pointer;
            transition: all .15s;
            text-align: center;
        }

        .actall-single-pro-box::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0px;
            right: 0px;
            border: 1px solid #dfdfdf;
            z-index: 1;
            transition: 0.5s;
        }

        .actall-best-pro-tag {
            position: absolute;
            top: -3px;
            left: 50%;
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
            text-align: center;
            color: #fff;
            display: block;
            border-radius: 4px;
            clip-path: polygon(50% 0%, 100% 0, 91% 32%, 48% 47%, 48% 47%, 10% 33%, 0 0);
            padding: 27px 10px;
            width: 100px;
            z-index: 999;
        }

        .act-pro-tag-inner {
            display: block;
            position: relative;
            top: -23px;
            line-height: 12px;
        }

        .best-pro-tag-text {
            display: block;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 1px;
            line-height: 13px;
        }

        .best-pro-tag-icon i {
            font-size: 11px;
            line-height: 0;
        }

        .best-pro-tag-icon {
            display: block;
            line-height: 1.3;
        }

        .actall-best-pro-img-box {
            max-height: 297px;
            border-bottom: 0px solid #dfdfdf;
            background: #fff;
            padding: 45px 15px 15px 15px;
            min-height: 297px;
            margin-top: 25px;
        }

        .act-pro-img-box-height {
            overflow: hidden;
            margin-bottom: 10px;
            max-height: 120px;
            align-items: center !important;
            display: flex;
        }

        .actall-best-pro-title {
            display: block;
            width: 100%;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.2;
            min-height: 50px;
            margin-bottom: 2px;
        }

        .actall-best-pro-rating .d-pro-rating {
            display: inline-block;
            font-size: 15px;
            color: #EBC30B;
            margin: 0;
            padding: 0;
            margin-left: -4px;
        }

        .btn.btn-best-pro-price {
            letter-spacing: 0em;
            font-size: 12px !important;
            border-radius: 0px;
            background: #1FCD8D;
            color: white !important;
            display: inline-block;
            margin: 0 .25em;
            overflow: hidden;
            padding: 12px 7px;
            position: relative;
            text-decoration: none !important;
            line-height: 1.2;
            width: max-content;
            text-transform: uppercase;
            border-radius: 4px;
            font-weight: 600;
            z-index: 999;
            display: inline-block;
        }

        .btn.btn-best-pro-price:hover {
            opacity: 0.8;
            transition: 0.5s;
        }

        .actall-best-pro-footer {
            padding-top: 4px;
        }

        .best-pro-link {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 99;
        }

        .actall-single-pro-box:hover::before {
            border-color: #1FCD8D;
            box-shadow: 0 5px 10px 0 rgba(29, 28, 28, .15);
        }

        .btn-desktop-text {
            display: inline-block;
        }

        .btn-mobile-text {
            display: none !important;
        }

        .actall-feature-text li {
            position: relative;
            list-style: none !important;
        }

        .actall-feature-text li::before {
            position: absolute;
            left: -16px;
            top: 11px;
            width: 5px;
            height: 5px;
            content: "";
            font-size: 8px;
        }

        ul.actall-feature-text {
            margin-left: 20px !important;
        }

        .table.actall-table {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5)!important;
            border-collapse: separate !important;
            border-spacing: 0;
        }

        .wpstrom-product-table-inner,
        .actall-pros-cons,
        .actall-pro-box-new,
        .actall-button,
        .actall-three-pro-box {
            font-family: 'Open Sans', Arial, Helvetica, sans-serif;
        }

        .act-table-tag {
            margin: 0px 0px 5px -9px;
            position: relative;
            text-transform: uppercase;
            background: #fff;
            box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
            border: 2px solid #00B894;
            padding: 3px 10px;
            max-width: max-content;
            max-width: moz-max-content;
            clear: both;
            float: left;
            font-weight: 700;
            font-size: 12px !important;
            word-break: keep-all;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            line-height: 1;
        }

        .act-table-tag {
            text-transform: uppercase;
            font-weight: 700;
            font-size: 11px !important;
            word-break: keep-all;
            line-height: 1;
        }

        .act-table-tag::before {
            display: block;
            width: 10px;
            height: 0;
            position: absolute;
            bottom: -25px;
            left: -3px;
            content: "";
            border-bottom: 23px solid transparent;
            border-right: 9px solid #00B894;
        }

        .act-table-tag-mobile-label {
            display: none;
        }

        .act-table-tag-mobile {
            margin: auto 0 0px -18px;
            position: relative;
            text-transform: uppercase;
            background: #fff;
            box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
            border: 2px solid #00B894;
            padding: 4px 10px;
            max-width: max-content;
            max-width: moz-max-content;
            clear: both;
            color: #000;
            float: left;
            font-weight: 700;
            font-size: 11px !important;
            word-break: keep-all;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            line-height: 1;
        }

        .act-table-tag-mobile::before {
            display: block;
            width: 10px;
            height: 0;
            position: absolute;
            bottom: -15px;
            left: -3px;
            content: "";
            border-bottom: 13px solid transparent;
            border-right: 9px solid #00B894;
        }

        .act-table-tag-mobile-label {
            width: 100%;
        }

        .btn.btn-act-tbl-price {
            letter-spacing: .09em;
            font-size: 13px !important;
            display: inline-block;
            margin: 0 .25em;
            overflow: hidden;
            padding: 12px 10px 12px 10px;
            position: relative;
            text-decoration: none !important;
            line-height: 1;
            width: max-content;
            font-weight: 600;
        }

        .btn.btn-act-tbl-price:hover {
            opacity: 0.8;
            transition: 0.5s;
        }

        thead.actall-tbl-head {
            background: #fafafa;
        }

        .table.actall-table tr th {
            padding: 7px 10px;
            border: none;
            font-weight: 600;
            text-align: left;
            font-size: 15px;
            /* text-transform: uppercase; */
            color: #495e73;
        }

        .wpstrom-table-pro-feture ul li::before {
            position: absolute;
            left: 0;
            top: 10px;
            height: 4px;
            width: 4px;
            content: "";
            line-height: 4;
            margin-right: 10px;
            margin-left: -13px;
        }

        .wpstrom-table-pro-feture ul li {
            list-style: none !important;
            position: relative;
        }

        .wpstrom-table-pro-feture ul {
            padding-left: 15px;
        }

        .act-no-title,
        .act-no-title-two {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font-weight: 400;
            vertical-align: baseline;
            background: 0 0;
        }

        .act-no-title {
            width: calc(100% - 55px);
            margin-bottom: .75rem;
            padding-left: 15px;
            border-left: 2px solid #E9E9E9;
            min-height: 41px;
        }

        .act-no-title {
            display: inline-block;
            margin-top: -.25rem !important;
            margin-bottom: .25rem !important;
            margin-left: 50px !important;
        }

        .act-no-title {
            font-size: 1.5rem;
            font-weight: 900;
            line-height: 1.2;
            margin: 0;
            word-wrap: break-word;
            text-align: left;
        }

        .actall-title-box {
            position: relative;
            margin: 1.25rem 0;
            overflow: visible;
            display: block;
            clear: none;
            margin-bottom: 2px;
        }

        .act-list-number {
            width: 45px;
            position: absolute;
            top: -2px;
            left: 0;
            margin-bottom: .5rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding-top: 0px;
        }

        .act-list-number::before {
            content: "";
            height: 90px;
            margin-top: -90px;
            display: block;
        }

        .content-list-number {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            font-weight: 900;
            text-align: center;
            line-height: 1.2;
            margin-top: -2px;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
        }

        .content-list-number .item-number {
            color: #DE2229;
            font-size: 1.625rem;
            white-space: nowrap;
            line-height: 1.2;
            text-align: center;
            font-weight: 600;
        }

        .content-list-number .total {
            font-size: 11px;
            white-space: nowrap;
            text-align: center;
            font-weight: 600;
        }

        /*3 product buy button*/

        /*Single Pro box button*/
        .byb2-btn {
            letter-spacing: .09em;
            font-size: 14px !important;
            border-radius: 4px;
            background: #F45511;
            color: white !important;
            display: inline-block;
            margin: 0 .25em;
            overflow: hidden;
            padding: 10px 35px 10px 5px;
            position: relative;
            text-decoration: none !important;
            line-height: 1;
            width: max-content;
            vertical-align: baseline;
            cursor: pointer;
            transition: color .1s ease-in-out, background-color .1s ease-in-out;
            letter-spacing: .09em;
        }

        .byb2-btn::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background-color: #F45511;
            opacity: 0;
            transition: opacity 300ms ease;
        }

        .byb2-btn .byb2-btn-content {
            text-transform: uppercase;
        }

        .byb2-btn .byb2-btn-content {
            font-weight: bold;
            font-size: 1em;
            line-height: 1.2;
            padding: 0 10px;
            position: relative;
            right: 0;
            transition: right 300ms ease;
            display: block;
            text-align: left;
        }

        .byb2-btn .icon {
            border-left: 2px solid white;
            position: absolute;
            right: 0;
            text-align: center;
            top: 50%;
            transition: all 300ms ease;
            transform: translateY(-50%);
        }

        .icon {
            width: 38px;
        }

        .byb2-btn .icon i {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .byb2-btn:hover {
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -o-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -ms-transition: 0.5s all;
        }

        .byb2-btn:hover::after {
            opacity: 0;
        }

        .byb2-btn:hover .byb2-btn-content {
            right: 100%;
        }

        .byb2-btn:hover .icon {
            border-left: 0;
            font-size: 1.8em;
            width: 100%;
        }

        .act-single-pro-btn-box {
            text-align: center;
        }

        .product_cell_alt .product_award:after {
            border-top-color: #f8463f;
        }

        .product_award:after {
            border-left: 60px solid transparent;
            border-right: 60px solid transparent;
            border-top: 10px solid #000;
            content: "";
            left: 0;
            position: absolute;
            height: 0;
            width: 0;
        }

        .product_award span {
            background: #000;
            /* border-top-right-radius: 8px; */
            display: block;
            font-size: 9px;
            font-weight: 700;
            line-height: 1.2;
            padding: 12px 8px 10px;
            position: relative;
            text-align: center;
            width: 106px;
        }

        .product_award {
            color: #fff;
            position: absolute;
            text-transform: uppercase;
            top: 0;
            left: 50%;
            z-index: 99!important;
            transform: translate(-50%, 0%);
        }

        @media only screen and (max-width: 768px) {
            .actall-best-pro-img-box {
                min-height: 170px;
            }

            .actall-best-pro-title {
                margin-bottom: 10px;
            }

            .actall-best-pro-img-box {
                padding: 35px 15px 5px 15px;
            }
        }

        /*3 product buy button*/
        @media(min-width:100px) and (max-width:640px) {
            .actall-pros-cons .actall-pros {
                float: none;
                padding: 20px;
                width: 100%;
            }

            .actall-pros-cons .actall-cons {
                float: none;
                border-top: 1px solid #e7e4df;
                padding: 20px;
                width: 100%;
            }

            .actall-pros-cons {
                margin-top: 30px;
                padding: 0;
            }

            .actall-pros-cons .actall-line {
                display: none;
            }

            .actall-pro-box {
                width: 100%;
                padding: 0;
                margin-bottom: 0px;
                box-shadow: 0 0 5px #999;
            }

            .actall-pro-image {
                float: none;
                width: 100%;
                margin-bottom: 10px;
            }

            .act-all-pro-info {
                float: none;
                width: 100%;
            }

            .actall-pro-box .actall-pro-box-inner .actall-product-title {
                padding: 10px 0 15px 0px;
            }

            .actall-pro-box .actall-pro-box-inner {
                box-shadow: 0 0 0px #999;
            }

            .actall-tbl-colum-two {
                width: 100% !important;
                order: 1 !important;
                border-bottom: none !important;
                text-align: center !important;
                border-left: 1px solid #DCDCDC !important;
                border-right: 1px solid #DCDCDC !important;
                padding-top: 5px !important;
                padding-bottom: 5px !important;
                padding-left: 5px !important;
                padding-right: 5px !important;
            }

            .actall-tbl-colum-one {
                width: 30% !important;
                order: 2 !important;
                margin: 0 !important;
                box-sizing: border-box !important;
                border-bottom: none !important;
                display: flex !important;
                justify-content: center !important;
                align-items: center !important;
                border-top: none;
            }

            .actall-tbl-colum-three {
                order: 3 !important;
                width: 70% !important;
                border-right: 1px solid #DCDCDC !important;
                box-sizing: border-box !important;
                border-bottom: none !important;
                align-items: center !important;
                margin: 0px 0px;
                display: flex !important;
                text-decoration: none !important;
                line-height: 1.5;
                list-style: none !important;
                padding: 5px 5px 5px 20px;
                text-align: center;
                border-top: none;
                border-left: none;
            }

            .actall-tbl-colum-four {
                width: 100% !important;
                order: 4 !important;
                display: flex !important;
                justify-content: center !important;
                align-items: center !important;
                border-left: 1px solid #DCDCDC !important;
                padding-bottom: 20px !important;
            }

            .table.actall-table tbody tr {
                display: flex !important;
                flex-wrap: wrap !important;
                padding: 0px !important;
            }

            .table.actall-table tbody {
                display: block !important;
                flex-direction: column !important;
                width: 100% !important;
            }

            .actall-tbl-img,
            .actall-tbl-feature,
            .actall-tbl-price {
                display: none !important;
            }

            .actall-tbl-pro-title {
                text-align: center !important;
                padding: 0 10px !important;
            }

            .table.actall-table tr th {
                text-align: center;
            }

            .act-price-small {
                display: none;
            }

            .actall-tags {
                display: none;
            }

            .actall-tbl-colum-one img {
                display: inline;
            }

            .actall-tbl-colum-three {
                padding-right: 5px !important;
                padding-left: 0px !important;
            }

            .actall-tbl-colum-one {
                padding-top: 0px !important;
                padding-bottom: 0px !important;
            }

            .actall-three-pro-box {
                margin-left: 0px;
                margin-right: 0px;
            }

            .act-pro-img-box-height {
                min-height: 60px;
                max-height: 90px;
            }

            .actall-best-pro-img-box {
                padding: 25px 8px 8px 8px;
                min-height: 120px;
                display: inline-block;
            }

            .actall-best-pro-title {
                font-size: 11px;
                line-height: 1.2;
                margin-bottom: 8px;
                font-weight: 600;
            }

            .actall-best-pro-rating .d-pro-rating {
                font-size: 12px;
                margin-left: -7px;
            }

            .btn-desktop-text {
                display: none;
            }

            .btn-mobile-text {
                display: inline-block;
            }

            .actall-best-pro-img-box img {
                max-height: 70px;
                width: 100px;
            }

            .act-three-box-before {
                padding-left: 0px;
                padding-right: 0px;
            }

            .actall-best-pro-title {
                min-height: 45px;
                margin: 0px;
                padding: 0px;
            }

            .act-table-tag-mobile-label {
                display: block;
            }

            .act-table-tag {
                display: none;
            }

            .btn.btn-best-pro-price {
                letter-spacing: 0;
                font-size: 9px !important;
                padding: 9px 4px;
            }

            .act-pro-tag-inner {
                line-height: 9px;
            }

            .actall-best-pro-tag {
                width: 90px;
            }

            .best-pro-tag-text {
                font-size: 8px;
                line-height: 8px;
            }

            .best-pro-tag-icon i {
                font-size: 10px;
            }

            .act-table-tag-mobile-label {
                padding-top: 18px !important;
            }

            .btn-desktop-text {
                display: none !important;
            }

            .btn-mobile-text {
                display: block !important;
            }

            .actall-best-pro-footer .act-three-pro-btn {
                min-width: auto;
            }

            .act-three-pro-btn {
                padding: 8px 9px;
                font-size: 11px;
            }

            .actall-best-pro-footer {
                padding-top: 8px;
            }

            .act-table-tag-mobile::before {
                left: -3px;
            }

            .act-table-tag-mobile {
                margin: auto 0 0px -9px;
            }

            .actall-pro-new-table td {
                display: block;
                width: 100% !important;
                padding: 9px 4px;
            }

            .actall-pro-box .actall-pro-box-inner {
                padding: 15px 8px;
            }
        }

        @media (min-width: 100px) and (max-width: 640px) {
            .actall-best-pro-title {
                min-height: auto !important;
                margin: 0;
                padding: 0;
            }

            .actall-tbl-colum-one img {
                max-height: 105px !important;
                height: auto;
                top:0
            }
        }

        @media (min-width: 993px) {
            .act-three-box-before {
                width: 85% !important;
                margin: 0 auto !important;
            }

            .actall-best-pro-img-box {
                padding: 40px 18px 0px !important;
                min-height: 190px !important;
            }
        }


    </style>
    <div class="act-three-box-before" style="overflow: hidden;">
    <div class="actall-three-pro-box">
        <div class="actall-single-pro-box act-box-one">
            <div class="actall-best-pro-img-box">
                <div class="act-pro-img-box-height">
                    <?php
                        if($act_three_product_box_params['product_1_image']){
                    ?>
                    <?php echo wp_get_attachment_image($act_three_product_box_params['product_1_image'], 'full'); ?>
                    <?php
                        }else{
                    ?>
                    <img src="<?php echo esc_url($act_three_product_box_params['product_1_image_url']); ?>">
                    <?php
                        }
                    ?>
                </div>
                <div class="act-three-pro-box-line"></div>
                <span class="actall-best-pro-title">
                    <?php
                        echo esc_html($act_three_product_box_params['product_1_title']);
                    ?>
                </span>
                <?php
                    if($act_three_product_box_params['product_1_ratings']):
                ?>
                <div class="actall-best-pro-rating">
                    <?php if($act_three_product_box_params['product_1_ratings'] == 1): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_1_ratings'] == 2): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_1_ratings'] == 3): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_1_ratings'] == 4): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_1_ratings'] == 5): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                </div>
                <?php
                    endif;
                ?>
            </div>
            <div class="actall-best-pro-footer">
                <a href="<?php echo esc_url($act_three_product_box_params['product_1_affiliate_url']); ?>" target="_blank" rel="nofollow noopener" class="btn btn-act-tbl-price" color: <?php echo esc_attr($act_three_product_box_params['product_title_color']); ?>">
                    <!-- <span class="btn-content-icon">
                        <i class="fab fa-amazon"></i>
                    </span> -->
                    <span class="btn-desktop-text btn-content-text">
                        <?php echo esc_html($act_three_product_box_params['product_button_text']); ?>
                    </span>
                    <span class="btn-mobile-text btn-content-text">
                        <?php echo esc_html($act_three_product_box_params['product_mobile_button_text']); ?>
                    </span>
                </a>
            </div>
            <style>
                .product_award span:before, .product_award span:after {
                    background: <?php echo esc_attr($act_three_product_box_params['tag_color']); ?>;
                }

                .product_award:after {
                    border-top: 10px solid #<?php echo esc_attr($act_three_product_box_params['tag_color']); ?>;
                }
            </style>
            <div class="product_award">
                <span style="background: <?php echo esc_attr($act_three_product_box_params['tag_color']); ?>"><?php echo esc_html($act_three_product_box_params['product_1_tag']); ?></span>
            </div>
            <a href="<?php echo esc_url($act_three_product_box_params['product_1_affiliate_url']); ?>" class="best-pro-link" rel="nofollow noopener" target="blank"></a>
        </div>

        <div class="actall-single-pro-box act-box-one">
            <div class="actall-best-pro-img-box">
                <div class="act-pro-img-box-height">
                    <?php
                        if($act_three_product_box_params['product_2_image']){
                    ?>
                    <?php echo wp_get_attachment_image($act_three_product_box_params['product_2_image'], 'full'); ?>
                    <?php
                        }else{
                    ?>
                    <img src="<?php echo esc_url($act_three_product_box_params['product_2_image_url']); ?>">
                    <?php
                        }
                    ?>
                </div>
                <div class="act-three-pro-box-line"></div>
                <span class="actall-best-pro-title">
                    <?php
                        echo esc_html($act_three_product_box_params['product_2_title']);
                    ?>
                </span>
                <?php
                    if($act_three_product_box_params['product_2_ratings']):
                ?>
                <div class="actall-best-pro-rating">
                    <?php if($act_three_product_box_params['product_2_ratings'] == 1): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_2_ratings'] == 2): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_2_ratings'] == 3): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_2_ratings'] == 4): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_2_ratings'] == 5): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                </div>
                <?php
                    endif;
                ?>
            </div>
            <div class="actall-best-pro-footer">
                <a href="<?php echo esc_url($act_three_product_box_params['product_2_affiliate_url']); ?>" target="_blank" rel="nofollow noopener" class="btn btn-act-tbl-price" color: <?php echo esc_attr($act_three_product_box_params['product_title_color']); ?>">
                    <!-- <span class="btn-content-icon">
                        <i class="fab fa-amazon"></i>
                    </span> -->
                    <span class="btn-desktop-text btn-content-text">
                        <?php echo esc_html($act_three_product_box_params['product_button_text']); ?>
                    </span>
                    <span class="btn-mobile-text btn-content-text">
                        <?php echo esc_html($act_three_product_box_params['product_mobile_button_text']); ?>
                    </span>
                </a>
            </div>
            <style>
                .product_award span:before, .product_award span:after {
                    background: <?php echo esc_attr($act_three_product_box_params['tag_color']); ?>;
                }

                .product_award:after {
                    border-top: 10px solid #<?php echo esc_attr($act_three_product_box_params['tag_color']); ?>;
                }
            </style>
            <div class="product_award">
                <span style="background: <?php echo esc_attr($act_three_product_box_params['tag_color']); ?>"><?php echo esc_html($act_three_product_box_params['product_2_tag']); ?></span>
            </div>
            <a href="<?php echo esc_url($act_three_product_box_params['product_2_affiliate_url']); ?>" class="best-pro-link" rel="nofollow noopener" target="blank"></a>
        </div>


        <div class="actall-single-pro-box act-box-one">
            <div class="actall-best-pro-img-box">
                <div class="act-pro-img-box-height">
                    <?php
                        if($act_three_product_box_params['product_3_image']){
                    ?>
                    <?php echo wp_get_attachment_image($act_three_product_box_params['product_3_image'], 'full'); ?>
                    <?php
                        }else{
                    ?>
                    <img src="<?php echo esc_url($act_three_product_box_params['product_3_image_url']); ?>">
                    <?php
                        }
                    ?>
                </div>
                <div class="act-three-pro-box-line"></div>
                <span class="actall-best-pro-title">
                    <?php
                        echo esc_html($act_three_product_box_params['product_3_title']);
                    ?>
                </span>
                <?php
                    if($act_three_product_box_params['product_3_ratings']):
                ?>
                <div class="actall-best-pro-rating">
                    <?php if($act_three_product_box_params['product_3_ratings'] == 1): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_3_ratings'] == 2): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_3_ratings'] == 3): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_3_ratings'] == 4): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                    <?php if($act_three_product_box_params['product_3_ratings'] == 5): ?>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <span class="dashicons dashicons-star-filled" style="color:<?php echo esc_html($act_three_product_box_params['ratings_color']); ?>"></span>
                    <?php endif; ?>
                </div>
                <?php
                    endif;
                ?>
            </div>
            <div class="actall-best-pro-footer">
                <a href="<?php echo esc_url($act_three_product_box_params['product_3_affiliate_url']); ?>" target="_blank" rel="nofollow noopener" class="btn btn-act-tbl-price" color: <?php echo esc_attr($act_three_product_box_params['product_title_color']); ?>">
                    <!-- <span class="btn-content-icon">
                        <i class="fab fa-amazon"></i>
                    </span> -->
                    <span class="btn-desktop-text btn-content-text">
                        <?php echo esc_html($act_three_product_box_params['product_button_text']); ?>
                    </span>
                    <span class="btn-mobile-text btn-content-text">
                        <?php echo esc_html($act_three_product_box_params['product_mobile_button_text']); ?>
                    </span>
                </a>
            </div>
            <style>
                .product_award span:before, .product_award span:after {
                    background: <?php echo esc_attr($act_three_product_box_params['tag_color']); ?>;
                }

                .product_award:after {
                    border-top: 10px solid #<?php echo esc_attr($act_three_product_box_params['tag_color']); ?>;
                }
            </style>
            <div class="product_award">
                <span style="background: <?php echo esc_attr($act_three_product_box_params['tag_color']); ?>"><?php echo esc_html($act_three_product_box_params['product_3_tag']); ?></span>
            </div>
            <a href="<?php echo esc_url($act_three_product_box_params['product_3_affiliate_url']); ?>" class="best-pro-link" rel="nofollow noopener" target="blank"></a>
        </div>
    </div>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('actproduct', 'actall_product_box_shortcode');