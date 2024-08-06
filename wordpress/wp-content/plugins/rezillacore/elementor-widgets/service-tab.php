<?php namespace Elementor;

class rezilla_service_tab_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_service_tab';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Service Tab', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-kit-details';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_service_tab_options',
            [
                'label' => esc_html__( 'Rezilla Service Tab', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'service_tab_enable',
            [
                'label' => esc_html__( 'Active Tab', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
		$repeater->add_control(
			'service_tab_title', [
				'label' => esc_html__( 'Title', 'rezillacore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Saas Development' , 'rezillacore' ),
				'label_block' => true,
                'dynamic' => [
					'active' => true,
				],
			]
		);
        $repeater->add_control(
            'service_tab_title_icon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'service_tab_content_img',
            [
                'label' => __( 'Upload Image', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'dynamic' => [
					'active' => true,
				],
            ]
        );
		$repeater->add_control(
			'service_tab_content', [
				'label' => esc_html__( 'Content', 'rezillacore' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'It is a long established fact that a reader will be distracted by the readabl content of page
                when looking at its layout. The point of using Lorem Ipis is that it has a more-or-lesis nors
                dsistribution of letters, as opposed to sing Content here, content here editors now use as
                Ipsum as their default model text' , 'rezillacore' ),
				'show_label' => false,
                'dynamic' => [
					'active' => true,
				],
			]
		);
        $repeater->add_control(
            'servie_tab_btn_show',
            [
                'label' => esc_html__( 'Enable Button', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
            'servie_tab_btn_link',
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
                'condition' => [
                    'servie_tab_btn_show' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'servie_tab_btn_text',
            [
                'label' => esc_html__( 'Button Text', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Read More', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
                'condition' => [
                    'servie_tab_btn_show' => 'yes',
                ],
            ]
        );
		$this->add_control(
			'service_tabs',
			[
				'label' => esc_html__( 'Service Items', 'rezillacore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'service_tab_title' => esc_html__( 'Saas Development', 'rezillacore' ),
						'service_tab_content' => esc_html__( 'It is a long established fact that a reader will be distracted by the readabl content of page
                        when looking at its layout. The point of using Lorem Ipis is that it has a more-or-lesis nors
                        dsistribution of letters, as opposed to sing Content here, content here editors now use as
                        Ipsum as their default model text', 'rezillacore' ),
					]
				],
				'title_field' => '{{{ service_tab_title }}}',
			]
		);
        $this->add_control(
            'servie_tab_position',
            [
                'label' => esc_html__( 'Position', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'vertical',
                'options' => [
                    'horizontal'  => esc_html__( 'Horizontal', 'rezillacore' ),
                    'vertical'  => esc_html__( 'Vertical', 'rezillacore' ),
                ],
            ]
        );
        $this->add_responsive_control(
            'servie_tab_alignment',
            [
                'label' => __( 'Alignment', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'flex-start' => [
                        'title' => __( 'Left', 'rezillacore' ),
                        'icon' => 'eicon-align-start-h',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'rezillacore' ),
                        'icon' => 'eicon-justify-center-h',
                    ],
                    'space-between' => [
                        'title' => __( 'justify space between', 'rezillacore' ),
                        'icon' => 'eicon-justify-space-between-h',
                    ],
                    'space-around' => [
                        'title' => __( 'justify space between', 'rezillacore' ),
                        'icon' => 'eicon-justify-space-around-h',
                    ],
                    'space-evenly' => [
                        'title' => __( 'justify space evenly', 'rezillacore' ),
                        'icon' => 'eicon-justify-space-evenly-h',
                    ],
                    'flex-end' => [
                        'title' => __( 'Right', 'rezillacore' ),
                        'icon' => 'eicon-align-end-h',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .horizontal.nav.service-tab_titles' => 'justify-content: {{VALUE}}',
                ],
                'condition' => [
                    'servie_tab_position' => 'horizontal',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_service_tabs_css',
            [
                'label' => esc_html__( 'Tab Menu', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_menu_box_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-tab_titles' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_menu_box_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-tab_titles' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'rezilla_service_menu_tabs'
        );
            $this->start_controls_tab(
                'rezilla_servie_tabs_normal',
                [
                    'label' => __( 'Normal', 'rezillacore' ),
                ]
            );
            $this->add_responsive_control(
                'rezilla_service_menu_color',
                [
                    'label' => esc_html__( 'Color', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service-tab-title.nav-link' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'rezilla_service_menu_bg',
                    'label' => esc_html__( 'Background', 'rezillacore' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .service-tab-title.nav-link',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'rezilla_service_menu_typo',
                    'label' => esc_html__( 'Typography', 'rezillacore' ),
                    'selector' => '{{WRAPPER}} .service-tab-title.nav-link',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'rezilla_service_menu_border',
                    'label' => esc_html__( 'Border', 'rezillacore' ),
                    'selector' => '{{WRAPPER}} .service-tab-title.nav-link',
                ]
            );
            $this->add_responsive_control(
                'rezilla_service_menu_raidus',
                [
                    'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .service-tab-title.nav-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'rezilla_service_menu_shadow',
                    'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                    'selector' => '{{WRAPPER}} .service-tab-title.nav-link',
                ]
            );
            $this->add_responsive_control(
                'rezilla_service_menu_margin',
                [
                    'label' => esc_html__( 'Margin', 'rezillacore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .service-tab-title.nav-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'rezilla_service_menu_padding',
                [
                    'label' => esc_html__( 'Padding', 'rezillacore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .service-tab-title.nav-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'rezilla_service_tabs_active',
                [
                    'label' => __( 'Active', 'rezillacore' ),
                ]
            );
            $this->add_responsive_control(
                'rezilla_service_menu_acolor',
                [
                    'label' => esc_html__( 'Color', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .service-tab-title.nav-link.active' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'rezilla_service_menu_abg',
                    'label' => esc_html__( 'Background', 'rezillacore' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .service-tab-title.nav-link.active',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'rezilla_service_menu_aborder',
                    'label' => esc_html__( 'Border', 'rezillacore' ),
                    'selector' => '{{WRAPPER}} .service-tab-title.nav-link.active',
                ]
            );
            $this->add_responsive_control(
                'rezilla_service_menu_araidus',
                [
                    'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .service-tab-title.nav-link.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'rezilla_service_menu_ashadow',
                    'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                    'selector' => '{{WRAPPER}} .service-tab-title.nav-link.active',
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_service_menu_tabs_content',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_menu_content_box_align',
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
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .service-tabs .tab-content' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_service_menu_content_box_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .service-tabs .tab-content',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_service_menu_content_box_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .service-tabs .tab-content',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_menu_content_box_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-tabs .tab-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_service_menu_content_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .service-tabs .tab-content',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_menu_content_box_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-tabs .tab-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_menu_content_box_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-tabs .tab-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
            $this->start_controls_tabs(
                'rezilla_service_menu_contents_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_service_menu_content_tabs_img',
                    [
                        'label' => __( 'Image', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_service_menu_img_bg',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .service-tab-img img',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_service_menu_img_border',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-tab-img img',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_menu_img_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'default' => [
                            'top' => '5',
                            'right' => '5',
                            'bottom' => '5',
                            'left' => '5',
                            'isLinked' => true
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .service-tab-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_service_menu_img_shadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-tab-img img',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_menu_img_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-tab-img img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_menu_img_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-tab-img img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_service_menu_content_tabs_content',
                    [
                        'label' => __( 'Hover', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_menu_content_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .service-tabs .service-content' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_service_menu_content_typography',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-tabs .service-content',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_menu_content_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-tabs .service-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_menu_content_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-tabs .service-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_service_tab_button_CSS_options',
            [
                'label' => esc_html__( 'Button', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
               
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_button_CSS_aligment',
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
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .service-buttons' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_button_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-buttons a.theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_button_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-buttons a.theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'rezilla_service_tab_button_tabs'
        );
        $this->start_controls_tab(
            'rezilla_service_tab_button_tabs_normal',
            [
                'label' => __( 'Normal', 'rezillacore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_service_tab_button_Css_typos',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .service-buttons a.theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_button_Css_ncolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-buttons a.theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_button_Css_nbg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-buttons a.theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_service_tab_button_Css_nborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .service-buttons a.theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_button_Css_nradisu',
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
                    '{{WRAPPER}} .service-buttons a.theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_service_tab_button_Css_nshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .service-buttons a.theme-btns',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_service_tab_button_tabs_hover',
            [
                'label' => __( 'Hover', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_button_Css_hcolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-buttons a.theme-btns:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_button_Css_hbg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-buttons a.theme-btns:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_service_tab_button_Css_hborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .service-buttons a.theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_tab_button_Css_hradisu',
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
                    '{{WRAPPER}} .service-buttons a.theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_service_tab_button_Css_hshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .service-buttons a.theme-btns:hover',
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
        if($settings['servie_tab_position'] === 'vertical'){
            $class = 'd-flex align-items-start';
            $nav = 'flex-column';
        }else{
            $class = 'horizontal-area';
            $nav = 'horizontal';
        }
        ob_start();
        ?>
        <div class="service-varticl-tab-wrapper">
            <div class="service-tabs">
                <div class="<?php echo esc_attr($class); ?>">
                    <div class="<?php echo esc_attr($nav); ?> nav nav-pills service-tab_titles" role="tablist" aria-orientation="vertical">
                        <?php $count = 0; foreach($settings['service_tabs'] as $item ) : $count++; ?>
                        <button class="service-tab-title nav-link <?php echo esc_attr($item['service_tab_enable'] == 'yes' ? 'active' : ''); ?>" id="service_tab_id-<?php echo esc_attr($_id) . $count; ?>" data-bs-toggle="pill" data-bs-target="#service_content_id-<?php echo esc_attr($_id) . $count; ?>" type="button" role="tab" aria-controls="service_content_id-<?php echo esc_attr($_id) . $count; ?>" aria-selected="true"><div class="icon"><?php \Elementor\Icons_Manager::render_icon( $item['service_tab_title_icon'], [ 'aria-hidden' => 'true' ] ); ?></div> <?php echo esc_html($item['service_tab_title']); ?></button>
                        <?php endforeach; ?>
                    </div>
                    <div class="tab-content">
                        <?php $count = 0; foreach($settings['service_tabs'] as $item ) : $count++; ?>
                        <div class="tab-pane fade show <?php echo esc_attr($item['service_tab_enable'] == 'yes' ? 'active' : ''); ?>" id="service_content_id-<?php echo esc_attr($_id) . $count; ?>" role="tabpanel" aria-labelledby="service_tab_id-<?php echo esc_attr($_id) . $count; ?>">
                            <div class="service-tab-img">
                                <?php 
                                    $this->add_render_attribute( 'service_tab_content_img', 'src', $item['service_tab_content_img']['url'] );
                                    $this->add_render_attribute( 'service_tab_content_img', 'alt', \Elementor\Control_Media::get_image_alt( $item['service_tab_content_img'] ) );
                                    $this->add_render_attribute( 'service_tab_content_img', 'title', \Elementor\Control_Media::get_image_title( $item['service_tab_content_img'] ) );
                                    $this->add_render_attribute( 'service_tab_content_img', 'class', 'service-tab-image' );
                                    echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $item, 'full', 'service_tab_content_img' );
                                ?>
                            </div>
                            <div class="service-content">
                                <?php echo wp_kses_post($item['service_tab_content']); ?>
                            </div>
                            <?php if($item['servie_tab_btn_show'] == 'yes') : 
                            if ( ! empty( $item['servie_tab_btn_link']['url'] ) ) {
                                $this->add_link_attributes( 'servie_tab_btn_link', $item['servie_tab_btn_link'] );
                            }
                            ?>
                            <div class="service-buttons">
                                <a class="theme-btns" <?php echo $this->get_render_attribute_string( 'servie_tab_btn_link' ); ?>><?php echo esc_html($item['servie_tab_btn_text']); ?></a>
                            </div>
                            <?php endif; ?>
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
Plugin::instance()->widgets_manager->register( new rezilla_service_tab_Widget );