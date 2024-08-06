<?php namespace Elementor;

class rezilla_pricing_tab_v1_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_pricing_tab_v1';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Pricing Tab V1', 'rezillacore' );
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
            'rezilla_pricing_tab_v1_options',
            [
                'label' => esc_html__( 'Rezilla Pricing', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $price_tab = new \Elementor\Repeater();
        $price_tab->add_control(
            'rezilla_prcing_tav_v1_active',
            [
                'label' => esc_html__( 'Active', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
		$price_tab->start_controls_tabs(
            'rezilla_pricing_tab_v1_tabs'
        );
            $price_tab->start_controls_tab(
                'rezilla_pricing_tab_v1_tabs_menu',
                [
                    'label' => __( 'Menu', 'rezillacore' ),
                ]
            );
            $price_tab->add_control(
                'rezilla_pricing_tab_v1_title',
                [
                    'label' => esc_html__( 'Title', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Best Plan', 'rezillacore' ),
                    'dynamic' => [
                        'active' => true,
                    ],
                    'label_block' => true,
                ]
            );
            $price_tab->add_control(
                'rezilla_pricing_tab_v1_discount',
                [
                    'label' => esc_html__( 'Discount', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( '20% Save', 'rezillacore' ),
                    'dynamic' => [
                        'active' => true,
                    ],
                    'label_block' => true,
                ]
            );
            $price_tab->add_control(
                'price-note',
                [
                    'label' => __( 'Price Options', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $price_tab->add_control(
                'rezilla_pricing_tab_v1_courncy',
                [
                    'label' => esc_html__( 'Currency', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-dollar-sign',
                        'library' => 'solid',
                    ],
                    'recommended' => [
                        'fa-solid' => [
                            'dollar-sign',
                            'euro-sign',
                            'hryvnia',
                            'lira-sign',
                            'money-bill',
                            'money-bill-alt',
                            'pound-sign',
                            'ruble-sign',
                            'rupee-sign',
                            'shekel-sign',
                            'won-sign',
                            'yen-sign',
                        ],
                        'fa-brands' => [
                            'btc',
                            'bitcoin',
                            'ethereum',
                            'gg',
                            'gg-circle',
                        ],
                    ],
                ]
            );
            $price_tab->add_control(
                'rezilla_pricing_tab_v1_amount',
                [
                    'label' => esc_html__( 'Price', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::NUMBER,
                    'min' => 0,
                    'max' => 10000,
                    'step' => 0.5,
                    'default' => 25.99,
                ],
            );
            $price_tab->add_control(
                'rezilla_pricing_tab_v1_month',
                [
                    'label' => esc_html__( 'Package Type', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Month', 'rezillacore' ),
                    'dynamic' => [
                        'active' => true,
                    ],
                    'label_block' => true,
                ]
            );
            $price_tab->end_controls_tab();
            
            $price_tab->start_controls_tab(
                'rezilla_pricing_tab_v1_tabs_content',
                [
                    'label' => __( 'Content', 'rezillacore' ),
                ]
            );
            $price_v1_items = new \Elementor\Repeater();
            $price_v1_items->add_control(
                'rezilla_prcing_tabv1_item',
                [
                    'label' => esc_html__( 'Item', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'All Limited Links', 'rezillacore' ),
                    'label_block' => true,
                ]
            );
            $price_v1_items->add_control(
                'rezilla_prcing_tabv1_item_icon',
                [
                    'label' => esc_html__( 'Icon', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'far fa-check-circle',
                        'library' => 'regular',
                    ],
                ]
            );
            $price_v1_items->add_responsive_control(
                'rezilla_prcing_tabv1_item_icon_color',
                [
                    'label' => esc_html__( 'icon Color', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                ]
            );
            
            $price_tab->add_control(
                'rezilla_prcing_tab_v1_tabs',
                [
                    'label' => esc_html__( 'Item List', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $price_v1_items->get_controls(),
                    'default' => [
                        [
                            'rezilla_prcing_tabv1_item' => esc_html__( 'All Limited Links', 'rezillacore' ),
                        ]
                    ],
                    'title_field' => '{{{ rezilla_prcing_tabv1_item }}}',
                ]
            );
            $price_tab->end_controls_tab();
        $price_tab->end_controls_tabs();
        $price_tab->add_control(
            'rezilla_pricing_v1_btn',
            [
                'label' => __( 'Button Link', 'rezillacore' ),
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
        $price_tab->add_control(
            'rezilla_pricing_v1_btn_text',
            [
                'label' => esc_html__( 'Button Text', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Buy Now', 'rezillacore' ),
                'dynamic' => [
                    'active' => true,
                ],
                'label_block' => true,
            ]
        );
        
		$this->add_control(
			'rezilla_prcing_tab_v1_tabs',
			[
				'label' => esc_html__( 'Pricing Tabs', 'rezillacore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $price_tab->get_controls(),
				'default' => [
					[
						'rezilla_pricing_tab_v1_title' => esc_html__( 'Best Pricing', 'rezillacore' ),
					],
				],
				'title_field' => '{{{ rezilla_pricing_tab_v1_title }}}',
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_pricing_tab_v1_menu_css',
            [
                'label' => esc_html__( 'Menu', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_box_margin',
            [
                'label' => esc_html__( 'Box Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-wrapper .nav' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_box_padding',
            [
                'label' => esc_html__( 'Box Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-wrapper .nav' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'rezilla_service_tab_v1_tabs'
        );
        $this->start_controls_tab(
            'rezilla_service_tab_v1_tabs_normal',
            [
                'label' => __( 'Normal', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_align',
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
                    'justify' => [
                        'title' => __( 'Justify', 'rezillacore' ),
                        'icon' => 'eicon-text-align-justify',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'rezillacore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-items' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-items' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .pricing-tab-v1-menu-left h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .pricing-tab-v1-wrapper .nav-link',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-wrapper .nav-link',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-wrapper .nav-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu__shadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-wrapper .nav-link',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-wrapper .nav-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-wrapper .nav-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'pricing-Tab-css-note',
            [
                'label' => __( 'Title Options', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_title_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-menu-left h2',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_title_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-left h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_title_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-left h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'pricing-Tab-css-note2',
            [
                'label' => __( 'Discount Options', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_discount_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-menu-left span',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_discount_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .pricing-tab-v1-menu-left span',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_discount_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-left span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_discount_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-left span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_discount_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-left span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'pricing-Tab-css-note3',
            [
                'label' => __( 'Courrency Options', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_courrency_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-menu-right sup.amount-icon',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_courrency_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-right sup.amount-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_courrency_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-right sup.amount-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'pricing-Tab-css-note4',
            [
                'label' => __( 'Price Options', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_price_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-menu-right span',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_price_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-right span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_price_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-right span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'pricing-Tab-css-note5',
            [
                'label' => __( 'Month Options', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_month_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-menu-right sub.month',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_month_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-right sub.month' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_month_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-menu-right sub.month' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_service_tab_v1_tabs_active',
            [
                'label' => __( 'Active', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_acolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .active .pricing-tab-v1-menu-items' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .active .pricing-tab-v1-menu-left h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_abg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .pricing-tab-v1-wrapper .nav-link.active',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_aborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-wrapper .nav-link.active',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_menu_aradius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-wrapper .nav-link.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_menu_ashadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-wrapper .nav-link.active',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_pricing_tab_v1_item_css',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_pricing_tab_v1_item_css_typography',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-content-list ul li',
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab_v1_item_css_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-content' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_pricing_tab_v1_item_css_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .pricing-tab-v1-content',
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab_v1_item_css_aligment',
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
                    'justify' => [
                        'title' => __( 'Justify', 'rezillacore' ),
                        'icon' => 'eicon-text-align-justify',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'rezillacore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-content' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_pricing_tab_v1_item_css_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-content',
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab_v1_item_css_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_pricing_tab_v1_item_css_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-content',
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab_v1_item_css_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab_v1_item_css_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'rezilla_pricing_tab_v1_item_css_note',
            [
                'label' => __( 'Content Icon Options', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab_v1_item_css_icon',
            [
                'label' => esc_html__( 'Icon Size', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-content-list ul li .icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab_v1_item_css_icon_align',
            [
                'label' => __( 'Alignment', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'rezillacore' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'rezillacore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors_dictionary' => [
					'left' => 'right: auto;left:0',
					'right' => 'left: auto;right:0',
				],
				'selectors' => [
					'{{WRAPPER}} .pricing-content-list ul li .icon' => '{{VALUE}}',
				],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab_v1_item_css_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-content-list ul li .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'marezilla_pricing_tab_v1_item_css_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-content-list ul li .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'rezilla_service_tab_v1_buttons_CSS_options',
            [
                'label' => esc_html__( 'Button CSS', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
               
            ]
        );
        
        $this->add_responsive_control(
            'rezilla_service_tab_v1_buttons_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_buttons_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'rezilla_service_tab_v1_buttons_tabs'
        );
        $this->start_controls_tab(
            'rezilla_service_tab_v1_buttons_tabs_normal',
            [
                'label' => __( 'Normal', 'rezillacore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_buttons_Css_typos',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_buttons_Css_ncolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_buttons_Css_nbg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_buttons_Css_nborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_buttons_Css_nradisu',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_buttons_Css_nshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_service_tab_v1_buttons_tabs_hover',
            [
                'label' => __( 'Hover', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_buttons_Css_hcolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_buttons_Css_hbg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_buttons_Css_hborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_v1_buttons_Css_hradisu',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_service_tab_v1_buttons_Css_hshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .pricing-tab-v1-btn .theme-btns:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $_id = rand(1241, 3256);
        ob_start();
        ?>
        <div class="pricing-tab-v1-wrapper">
            <div class="pricing-tab-inner">
                <div class="row">
                    <div class="nav nav-pills col-12 col-md-6" role="tablist" aria-orientation="vertical">
                        <?php $count = 0; foreach($settings['rezilla_prcing_tab_v1_tabs'] as $list ) : $count++; ?>
                        <div class="nav-link <?php echo esc_attr($list['rezilla_prcing_tav_v1_active'] == 'yes' ? 'active' : ''); ?>" id="pricing-tab-list-<?php echo esc_attr($_id.$count); ?>" data-bs-toggle="pill" data-bs-target="#pricing-tab-dec-<?php echo esc_attr($_id.$count); ?>" role="tab" aria-controls="pricing-tab-dec-<?php echo esc_attr($_id.$count); ?>" aria-selected="true">
                            <div class="pricing-tab-v1-menu-items">
                                <div class="pricng-tab-v1-menu d-flex align-items-center justify-content-between">
                                    <div class="pricing-tab-v1-menu-left">
                                        <h2><?php echo esc_html($list['rezilla_pricing_tab_v1_title']); ?></h2>
                                        <?php if(!empty($list['rezilla_pricing_tab_v1_discount'])){
                                            echo '<span>'.esc_html($list['rezilla_pricing_tab_v1_discount']).'</span>';
                                        } ?>
                                    </div>
                                    <div class="pricing-tab-v1-menu-right">
                                        <div class="price">
                                            <sup class="amount-icon"><?php \Elementor\Icons_Manager::render_icon( $list['rezilla_pricing_tab_v1_courncy'], [ 'aria-hidden' => 'true' ] ); ?></sup>
                                            <span><?php echo esc_html($list['rezilla_pricing_tab_v1_amount']); ?></span>
                                            <sub class="month"><?php echo esc_html($list['rezilla_pricing_tab_v1_month']); ?></sub>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="tab-content col-12 col-md-6">
                        <?php $count = 0; foreach($settings['rezilla_prcing_tab_v1_tabs'] as $list2 ) : $count++; 
                        if ( ! empty( $list2['rezilla_pricing_v1_btn']['url'] ) ) {
                            $this->add_link_attributes( 'rezilla_pricing_v1_btn', $list2['rezilla_pricing_v1_btn'] );
                        }
                        ?>
                        <div class="tab-pane fade show <?php echo esc_attr($list2['rezilla_prcing_tav_v1_active'] == 'yes' ? 'active' : ''); ?>" id="pricing-tab-dec-<?php echo esc_attr($_id.$count); ?>" role="tabpanel" aria-labelledby="pricing-tab-list-<?php echo esc_attr($_id.$count); ?>">
                            <div class="pricing-tab-v1-content">
                                <div class="pricing-content-list">
                                    <ul>
                                        <?php foreach($list2['rezilla_prcing_tab_v1_tabs'] as $item ) : ?>
                                        <li><?php echo wp_kses_post($item['rezilla_prcing_tabv1_item']); ?><div class="icon" style="color:<?php echo esc_attr( $item['rezilla_prcing_tabv1_item_icon_color'] ); ?>"><?php \Elementor\Icons_Manager::render_icon( $item['rezilla_prcing_tabv1_item_icon'], [ 'aria-hidden' => 'true' ] ); ?></div></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="pricing-tab-v1-btn">
                                    <a class="theme-btns" <?php echo $this->get_render_attribute_string( 'rezilla_pricing_v1_btn' ); ?>><?php echo esc_html($list2['rezilla_pricing_v1_btn_text']); ?></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new rezilla_pricing_tab_v1_Widget );