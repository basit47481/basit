<?php
//shop Page Options
CSF::createSection($rezillaThemeOption, array(
    'parent' => 'rezilla_shop_options',
    'title'  => esc_html__('Shop Page', 'rezilla'),
    'icon'   => 'fa fa-long-arrow-right',
    'fields' => array(
        array(
            'id'      => 'rezilla_shop_layout',
            'type'    => 'select',
            'title'   => esc_html__('Shop Layout', 'rezilla'),
            'subtitle'   => esc_html__('Select Your Shop Page Layout', 'rezilla'),
            'options' => array(
                'grid'          => esc_html__('Grid Full', 'rezilla'),
                'left-sidebar'  => esc_html__('Left Sidebar', 'rezilla'),
                'right-sidebar' => esc_html__('Right Sidebar', 'rezilla'),
            ),
            'default' => 'right-sidebar',
        ),
        array(
            'id'       => 'rezilla_shop_banner_enable',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Banner', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide / Show Banner.', 'rezilla'),
        ),
        array(
            'id'                    => 'rezilla_shop_banner_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Banner Background', 'rezilla'),
            'background_gradient'   => true,
            'background_origin'     => false,
            'background_clip'       => false,
            'background_blend-mode' => false,
            'default'               => array(
                'background-color'              => '',
                'background-gradient-color'     => '',
                'background-gradient-direction' => 'to right',
                'background-size'               => 'cover',
                'background-position'           => 'center center',
                'background-repeat'             => 'no-repeat',
            ),
            'dependency' => array( 'rezilla_shop_banner_enable', '==', 'true' ),
            'output'                => '.breadcroumb-area.shop',
            'subtitle'              => esc_html__('Select banner default properties for all page / post. You can override this settings on individual page / post.', 'rezilla'),
            'desc'                  => esc_html__('If you use gradient background color (Second Color) then background image will not working. Gradient background priority is higher then background image', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_shop_breadcrumb_normal_color',
            'type'     => 'color',
            'title'    => esc_html__('Breadcrumb Text Color', 'rezilla'),
            'dependency' => array( 'rezilla_shop_banner_enable', '==', 'true' ),
            'output'   => '.breadcroumb-area.shop .breadcroumn-contnt .brea-title',
            'subtitle' => esc_html__('Breadcrumb Text Color', 'rezilla'),
            'desc'     => esc_html__('Select breadcrumb text color.', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_shop_breadcrumb_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Breadcrumb Link Color', 'rezilla'),
            'output'   => array('.breadcroumb-area.shop .bre-sub span a span'),
            'subtitle' => esc_html__('Breadcrumb Link color', 'rezilla'),
            'dependency' => array( 'rezilla_shop_banner_enable', '==', 'true' ),
            'desc'     => esc_html__('Select breadcrumb link and link hover color.', 'rezilla'),
        ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__('Shop Page Color Options', 'rezilla'),
        ),
        array(
            'id'                    => 'rezilla_shop_body_bg',
            'type'                  => 'background',
            'title'                 => esc_html__('Shop Page Background', 'rezilla'),
            'background_gradient'   => true,
            'background_origin'     => false,
            'background_clip'       => false,
            'background_blend-mode' => false,
            'default'               => array(
                'background-color'              => '',
                'background-gradient-color'     => '',
                'background-gradient-direction' => 'to right',
                'background-size'               => 'cover',
                'background-position'           => 'center center',
                'background-repeat'             => 'no-repeat',
            ),
            'output'     => '.woocommerce-shop',
            'subtitle'   => esc_html__('Select The Background color for Shop Page', 'rezilla'),
        ),
        array(
            'id'     => 'rezilla_shop_item_content_color',
            'type'   => 'color',
            'title'  => esc_html__('Content Color', 'rezilla'),
            'subtitle'  => esc_html__('Add Product Item Content Color', 'rezilla'),
            'output' => '.rezilla-product-list-view .product-list-dec' 
        ),
        array(
            'id'      => 'rezilla_shop_item_ctitle',
            'type'    => 'link_color',
            'title'   => esc_html__('Items Link Color', 'rezilla'),
            'subtitle'   => esc_html__('Add Color for Shop Items Title', 'rezilla'),
            'output'  => array('.woo-single-item-warpper .product-item .product-info .product-holder .woocommerce-loop-product__title','.woocommerce-shop ul.product_list_widget li a'),
        ),
        array(
            'id'     => 'rezilla_shop_item_color',
            'type'   => 'color',
            'title'  => esc_html__('Price & Rating Color', 'rezilla'),
            'subtitle'  => esc_html__('Add Product Item Price & Rating Color', 'rezilla'),
            'desc'  => esc_html__('This color for -> Price and rating', 'rezilla'),
            'output' => array( '.woocommerce ul.products li.product .price','.woocommerce .star-rating::before','.woocommerce .star-rating span::before','.woocommerce-shop ul.product_list_widget li ins','.woocommerce-shop ul.product_list_widget li del','.woocommerce-shop span.woocommerce-Price-amount.amount' ) 
        ),
        array(
            'id'     => 'rezilla_shop_item_btns_grup',
            'type'   => 'fieldset',
            'title'  => esc_html__('Button Color Options', 'rezilla'),
            'subtitle'  => esc_html__('Add Color For Shop Page Button', 'rezilla'),
            'fields' => array(
              array(
                'id'    => 'rezilla_shop_item_btns_color',
                'type'  => 'color',
                'title' => esc_html__('Button Color', 'rezilla'),
                'output'  => array('.product-info .product-content a.button','.woo-single-item-warpper .product-item .product-img .product-overlay .product-content a'),
              ),
              array(
                'id'                              => 'rezilla_shop_item_btns_bgcolor',
                'type'                            => 'background',
                'title'                           => esc_html__('Button Background', 'rezilla'),
                'background_gradient'             => true,
                'background_origin'               => true,
                'background_clip'                 => true,
                'background_blend_mode'           => true,
                'output'  => array('.product-info .product-content a.button','.woo-single-item-warpper .product-item .product-img .product-overlay .product-content a'),
              ),
              array(
                'id'    => 'rezilla_shop_item_btns_hcolor',
                'type'  => 'color',
                'title' => esc_html__('Hover Button', 'rezilla'),
                'output'  => array('.product-info .product-content a.button:hover','.woo-single-item-warpper .product-item .product-img .product-overlay .product-content a:hover'),
              ),
              array(
                'id'                              => 'rezilla_shop_item_btns_hbgcolor',
                'type'                            => 'background',
                'title'                           => esc_html__('Button Hover Background', 'rezilla'),
                'background_gradient'             => true,
                'background_origin'               => true,
                'background_clip'                 => true,
                'background_blend_mode'           => true,
                'output'  => array('.product-info .product-content a.button:hover','.woo-single-item-warpper .product-item .product-img .product-overlay .product-content a:hover'),
              ),
            ),
        ),
        array(
            'id'     => 'rezilla_shop_item_sidebr_grup',
            'type'   => 'fieldset',
            'title'  => esc_html__('Shop Page Sidebar Options', 'rezilla'),
            'subtitle'  => esc_html__('Add Color for Shop Page sidebar', 'rezilla'),
            'fields' => array(
              array(
                'id'    => 'rezilla_shop_sidebar_hading_color',
                'type'  => 'color',
                'title' => esc_html__('Hading Color Color', 'rezilla'),
                'output'  => '.rezilla-woocommerce-page .sidebar-widget-area h2.widget-title',
              ),
              array(
                'id'     => 'rezilla_shop_item_sidebar_bg',
                'type'   => 'color',
                'title'  => esc_html__('Sidebar Background', 'rezilla'),
                'subtitle'  => esc_html__('Add Sidebar Background Color', 'rezilla'),
                'output_mode' => 'background-color' , // Supports css properties like ( border-color, color, background-color etc )
                'output' => '.rezilla-woocommerce-page .sidebar-widget-area .widget'
              ),
              array(
                'id'    => 'rezilla_shop_item_sidebar_line',
                'type'  => 'color',
                'title' => esc_html__('Line Color', 'rezilla'),
                'output_mode' => 'background-color',
                'output'  => array('.rezilla-woocommerce-page .sidebar-widget-area h2.widget-title:before','.rezilla-woocommerce-page .sidebar-widget-area h2.widget-title:after'),
              ),
              
            ),
        ),
        
        array(
            'type'    => 'subheading',
            'content' => esc_html__('Shop Navication Color Options', 'rezilla'),
        ),
        array(
            'id'     => 'rezilla_shop_item_navication_color',
            'type'   => 'color',
            'title'  => esc_html__('Navication Color', 'rezilla'),
            'subtitle'  => esc_html__('Add Product Navication Color', 'rezilla'),
            'output_mode' => 'color' , // Supports css properties like ( border-color, color, background-color etc )
            'output' => array( '.woocommerce-pagination ul li a' ) 
        ),
        array(
            'id'     => 'rezilla_shop_item_navication_borcolor',
            'type'   => 'color',
            'title'  => esc_html__('Navication Border Color', 'rezilla'),
            'subtitle'  => esc_html__('Add Product Navication Color', 'rezilla'),
            'output_mode' => 'border-color' , // Supports css properties like ( border-color, color, background-color etc )
            'output' => array( '.woocommerce-pagination ul li a' ) 
        ),

        array(
            'id'     => 'rezilla_shop_item_navication_hcolor',
            'type'   => 'color',
            'title'  => esc_html__('Hover Color', 'rezilla'),
            'subtitle'  => esc_html__('Add Product Navication Hover Color', 'rezilla'),
            'output_mode' => 'color' , // Supports css properties like ( border-color, color, background-color etc )
            'output' => array( '.woocommerce nav.woocommerce-pagination ul li a:focus','.woocommerce nav.woocommerce-pagination ul li a:hover', '.woocommerce nav.woocommerce-pagination ul li span.current','.woocommerce ul.products li.product .onsale' ) 
        ),
        array(
            'id'     => 'rezilla_shop_item_navication_hbgborcolor',
            'type'   => 'color',
            'title'  => esc_html__('Hover Background Color', 'rezilla'),
            'subtitle'  => esc_html__('Add Product Navication Background Hover Color', 'rezilla'),
            'output_mode' => 'background-color' , // Supports css properties like ( border-color, color, background-color etc )
            'output' => array( '.woocommerce nav.woocommerce-pagination ul li a:focus','.woocommerce nav.woocommerce-pagination ul li a:hover', '.woocommerce nav.woocommerce-pagination ul li span.current','.woocommerce ul.products li.product .onsale' ) 
        ),
        array(
            'id'     => 'rezilla_shop_item_navication_hborcolor',
            'type'   => 'color',
            'title'  => esc_html__('Navication Border Hover Color', 'rezilla'),
            'subtitle'  => esc_html__('Add Product Navication Border Hover Color', 'rezilla'),
            'output_mode' => 'border-color' , // Supports css properties like ( border-color, color, background-color etc )
            'output' => array( '.woocommerce nav.woocommerce-pagination ul li a:focus','.woocommerce nav.woocommerce-pagination ul li a:hover', '.woocommerce nav.woocommerce-pagination ul li span.current' ) 
        ),
    )
));