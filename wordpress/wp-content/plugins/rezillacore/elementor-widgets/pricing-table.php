<?php namespace Elementor;

class rezilla_pricing_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_pricing';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Pricing', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-price-table';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {
        //Content tab start
        $this->start_controls_section(
            'rezilla_pricing_options',
            [
                'label' => esc_html__( 'Header', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_responsive_control(
            'rezilla_pricing_style',
            [
                'label' => esc_html__( 'Border Style', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style-one',
                'options' => [
                    'style-one'  => esc_html__( 'Style One', 'rezillacore' ),
                    'style-two'  => esc_html__( 'Style Two', 'rezillacore' ),
                ],
            ]
        );
        $this->add_control(
            'rezilla_pricing_title',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Basic Plan', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_pricing_title_tag',
            [
                'label' => esc_html__( 'Title HTML Tag', 'rezillacore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h4',
                'options' => [
                    'h1'  => esc_html__( 'H1', 'rezillacore' ),
                    'h2'  => esc_html__( 'H2', 'rezillacore' ),
                    'h3'  => esc_html__( 'H3', 'rezillacore' ),
                    'h4'  => esc_html__( 'H4', 'rezillacore' ),
                    'h5'  => esc_html__( 'H5', 'rezillacore' ),
                    'h6'  => esc_html__( 'H6', 'rezillacore' ),
                    'p'  => esc_html__( 'P', 'rezillacore' ),
                    'span'  => esc_html__( 'span', 'rezillacore' ),
                    'div'  => esc_html__( 'Div', 'rezillacore' ),
                ],
            ]
        );
        $this->add_control(
            'rezilla_pricing_month',
            [
                'label' => esc_html__( 'Month', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Month', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_pricing_amount',
            [
                'label' => esc_html__( 'Amount', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '15.99', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_pricing_dicon',
            [
                'label' => esc_html__( 'Currency', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '$', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_pricing_content_options',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_pricing_contents',
            [
                'label' => esc_html__( 'Description', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul>
                <li>Customers Charts</li>
                <li>5 Mailboxes 10 GB Storage</li>
                <li>Limitless Free Dashboards</li>
                <li>Admittance to All APLS</li>
                <li>24/7 Priority Support</li>
                </ul>', 'rezillacore' ),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_pricing_footer_options',
            [
                'label' => esc_html__( 'Footer', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_pricing_btn_text',
            [
                'label' => esc_html__( 'Button Text', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Buy Now', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_pricing_btn_link',
            [
                'label' => __( 'Link', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'rezillacore' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_pricing_CSS_box_options',
            [
                'label' => esc_html__( ' Box', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_pricing_CSS_box_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .pricing-items',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_pricing_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-items',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_pricing_CSS_box_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-items',
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_CSS_box_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-items' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_pricing_CSS_header_options',
            [
                'label' => esc_html__( 'Header', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_CSS_header_align',
            [
                'label' => __( 'Alignment', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'rezillacore' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'rezillacore' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'rezillacore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .pricing-header' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_pricing_header_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .pricing-header',
            ]
        );
        $this->add_control(
            'rezilla_pricing_note',
            [
                'label' => __( 'Hover Background', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_pricing_header_hbg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .pricing-items:hover .pricing-header',
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_CSS_header_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-header' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_CSS_header_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_CSS_header_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                
                'selectors' => [
                    '{{WRAPPER}} .pricing-header' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
            $this->start_controls_tabs(
                'rezilla_pricing_header_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_pricing_header_tabs_title',
                    [
                        'label' => __( 'Title', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_pv3_h_title_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .pricing-title',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pv3_h_title_color',
                    [
                        'label' => esc_html__( 'Title Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .pricing-title' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pv3_h_title_hcolor',
                    [
                        'label' => esc_html__( 'hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .pricing-items:hover .pricing-title' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pv3_h_title_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .pricing-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pv3_h_title_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .pricing-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_pricing_header_tabs_currency',
                    [
                        'label' => __( 'Courrency', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_pricng_currency_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .pricing-prices sup.amount-icon',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricng_currency_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .pricing-prices sup.amount-icon' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricng_currency_hcolor',
                    [
                        'label' => esc_html__( 'hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .pricing-items:hover .pricing-prices sup.amount-icon' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricng_currency_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .pricing-prices sup.amount-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricng_currency_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .pricing-prices sup.amount-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'rezilla_pricing_header_tabs_price',
                    [
                        'label' => __( 'Price', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_pricing_price_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .pricing-prices span',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricing_price_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .pricing-prices span' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricing_price_hcolor',
                    [
                        'label' => esc_html__( 'hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .pricing-items:hover .pricing-prices span' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricing_price_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .pricing-prices span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricing_price_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .pricing-prices span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'rezilla_pricing_month_tabs',
                    [
                        'label' => __( 'Month', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_pricing_month_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .pricing-prices sub.month',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricing_month_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .pricing-prices sub.month' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricing_month_hcolor',
                    [
                        'label' => esc_html__( 'hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .pricing-items:hover .pricing-prices sub.month' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricing_month_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .pricing-prices sub.month' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_pricing_month_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .pricing-prices sub.month' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_pricing_CSS_dec_options',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_price_dec_css_aligment',
            [
                'label' => __( 'Alignment', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'rezillacore' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'rezillacore' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'rezillacore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .pricing-contnet' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_pricing_dec_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-contnet ul li',
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_dec_c',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-contnet ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_dec_hc',
            [
                'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-items:hover .pricing-contnet ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-contnet' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-contnet' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_price_btn_css_options',
            [
                'label' => esc_html__( 'Button CSS', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_price_btn_css_aligment',
            [
                'label' => __( 'Alignment', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'rezillacore' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'rezillacore' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'rezillacore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .pricing-button.buttons' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_price_btn_css_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-button.buttons' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_price_btn_css_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-button.buttons .theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'rezilla_price_btn_css_tabs'
        );
        $this->start_controls_tab(
            'rezilla_price_btn_css_tabs_normal',
            [
                'label' => __( 'Normal', 'rezillacore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_price_btn_css_typos',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-button.buttons .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_price_btn_css_ncolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-button.buttons .theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_price_btn_css_nbg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-button.buttons .theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_price_btn_css_nborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-button.buttons .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_price_btn_css_nradisu',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-button.buttons .theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_price_btn_css_nshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-button.buttons .theme-btns',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_price_btn_css_tabs_hover',
            [
                'label' => __( 'Hover', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_price_btn_css_hcolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-items:hover .pricing-button.buttons .theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_price_btn_css_hbg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-items:hover .pricing-button.buttons .theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_price_btn_css_hborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-items:hover .pricing-button.buttons .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_price_btn_css_hradisu',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-items:hover .pricing-button.buttons .theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_price_btn_css_hshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-items:hover .pricing-button.buttons .theme-btns',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        if ( ! empty( $settings['rezilla_pricing_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'rezilla_pricing_btn_link', $settings['rezilla_pricing_btn_link'] );
		}
        ob_start();
        ?>
        <div class="rezilla-pricing-wrapper <?php echo esc_attr($settings['rezilla_pricing_style']); ?>">
            <div class="pricing-items">
                <div class="pricing-header">
                    <<?php echo esc_html($settings['rezilla_pricing_title_tag']); ?> class="pricing-title"><?php echo esc_html($settings['rezilla_pricing_title']); ?></<?php echo esc_html($settings['rezilla_pricing_title_tag']); ?>>
                    <div class="pricing-prices">
                        <div class="price">
                            <sup class="amount-icon"><?php echo esc_html($settings['rezilla_pricing_dicon']); ?></sup>
                            <span><?php echo esc_html($settings['rezilla_pricing_amount']); ?></span>
                            <sub class="month"><?php echo esc_html($settings['rezilla_pricing_month']); ?></sub>
                        </div>
                    </div>
                </div>
                <div class="pricing-contnet">
                    <?php echo wp_kses_post($settings['rezilla_pricing_contents']) ?>
                </div>
                <div class="pricing-button buttons">
                    <a <?php echo $this->get_render_attribute_string( 'rezilla_pricing_btn_link' ); ?> class="theme-btns"><?php echo esc_html($settings['rezilla_pricing_btn_text']); ?></a>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_pricing_Widget );