<?php namespace Elementor;

class rezilla_service_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_service';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Service', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-info-box';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_service_options',
            [
                'label' => esc_html__( 'Rezilla Service', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_responsive_control(
            'rezilla_service_style',
            [
                'label' => esc_html__( 'Select Style', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'one',
                'options' => [
                    'one'  => esc_html__( 'One', 'rezillacore' ),
                    'two'  => esc_html__( 'Two', 'rezillacore' ),
                ],
            ]
        );
        $this->add_control(
            'rezilla_service_icon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'rezilla_service_title',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic' => [
					'active' => true,
				],
                'default' => esc_html__( 'Web Customization', 'rezillacore' ),
            ]
        );
        $this->add_control(
            'rezilla_service_title_link',
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
        $this->add_control(
            'rezilla_service_dec',
            [
                'label' => esc_html__( 'Description', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'dynamic' => [
					'active' => true,
				],
                'default' => esc_html__( 'There are many variations of passagei majority have suffered alteration in ais randomised words which', 'rezillacore' ),
            ]
        );
        $this->add_control(
            'rezilla_service_show_btn',
            [
                'label' => esc_html__( 'Show Button', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
                
            ]
        );
        $this->add_control(
            'rezilla_service_btn',
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
                'condition' => [
                    'rezilla_service_show_btn' => 'yes',
                ],
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_service_btn_text',
            [
                'label' => esc_html__( 'Button Text', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Read More', 'rezillacore' ),
                'condition' => [
                    'rezilla_service_show_btn' => 'yes',
                ],
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_service_img',
            [
                'label' => __( 'Choose Image', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'rezilla_service_style' => 'two',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_service_CSS_box',
            [
                'label' => esc_html__( 'Box Style', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_service_box_css_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_service_box_css_tabs_normal',
                    [
                        'label' => __( 'Normal', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_css_box__aligment',
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
                            '{{WRAPPER}} .service-wrapper' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_service_css_box_background',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .service-wrapper',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_service_css_box_border',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-wrapper',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_css_box_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_service_css_box_shadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-wrapper',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_css_box_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_css_box_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_service_box_css_tabs_hover',
                    [
                        'label' => __( 'Hover', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_service_css_box_hbackground',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .service-wrapper:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_service_css_box_hborder',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-wrapper:hover',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_css_box_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_service_css_box_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-wrapper:hover',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_service_CSS_icon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_service_icon_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_service_icon_tabs_normal',
                    [
                        'label' => __( 'Normal', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .service-icon' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_service_icon_background',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .service-icon',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_service_icon_typography',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-icon',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_width',
                    [
                        'label' => esc_html__( 'Width', 'rezillacore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 200,
                                'step' => 1,
                            ]
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .service-icon' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_height',
                    [
                        'label' => esc_html__( 'Height', 'rezillacore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 200,
                                'step' => 1,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .service-icon' => 'height: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_service_icon_border',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-icon',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_radius',
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
                            '{{WRAPPER}} .service-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_service_icon_shadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-icon',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_control(
                    'rezilla_service_icon_note',
                    [
                        'label' => __( 'SVG Options', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::HEADING,
                        'separator' => 'before',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_svg_size',
                    [
                        'label' => esc_html__( 'Icon Size', 'rezillacore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 100,
                                'step' => 1,
                            ]
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .service-icon svg' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_svg_color',
                    [
                        'label' => esc_html__( 'SVG Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .service-icon svg' => 'fill: {{VALUE}}',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_servie_icon_tabs_hover',
                    [
                        'label' => __( 'Hover', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_hcolor',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper:hover .service-icon' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_service_icon_hbackground',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .service-wrapper:hover .service-icon',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_service_icon_hborder',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-wrapper:hover .service-icon',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_hradius',
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
                            '{{WRAPPER}} .service-wrapper:hover .service-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_service_icon_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-wrapper:hover .service-icon',
                    ]
                );
                $this->add_control(
                    'rezilla_service_icon_hnote',
                    [
                        'label' => __( 'SVG Options', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::HEADING,
                        'separator' => 'before',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_icon_svg_hcolor',
                    [
                        'label' => esc_html__( 'SVG Hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper:hover .service-icon svg' => 'fill: {{VALUE}}',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_service_CSS_contents',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_service_contents_css_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_service_tabs_css_title',
                    [
                        'label' => __( 'Title', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_service_title_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .title2',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_title_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .title2 a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_title_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper:hover .title2 a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_title_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .title2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_title_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .title2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_service_tabs_css_dec',
                    [
                        'label' => __( 'dec', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_service_dec_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-dec',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_dec_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .service-dec' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_dec_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper:hover .service-dec' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_dec_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_dec_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'rezilla_service_tabs_css_button',
                    [
                        'label' => __( 'Button', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_service_btn_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-wrapper a.link-btn',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_btn_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper a.link-btn' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_btn_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper:hover a.link-btn' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_btn_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper a.link-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_btn_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper a.link-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'rezilla_service_tabs_css_img',
                    [
                        'label' => __( 'Button', 'rezillacore' ),
                        'condition' => [
                            'rezilla_service_style' => 'two',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_css_img_radius',
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
                            '{{WRAPPER}} .service-wrapper.style-two .service-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_service_css_img_shadow',
                        'label' => esc_html__( 'Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .service-wrapper.style-two .service-img img',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_css_img_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper.style-two .service-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_service_css_img_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-wrapper.style-two .service-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        if($settings['rezilla_service_style'] == 'two'){
            $service_style = 'style-two';
        }else{
            $service_style = 'style-one';
        }
        ob_start();
        ?>
        <div class="service-wrapper tran-04 <?php echo esc_attr($service_style); ?>">
            <?php if(!empty($settings['rezilla_service_icon'])) { ?>
            <div class="service-icon tran-04">
                <?php \Elementor\Icons_Manager::render_icon( $settings['rezilla_service_icon'], [ 'aria-hidden' => 'true' ] ); ?>
            </div>
            <?php } ?>
            <?php if($settings['rezilla_service_title']) { ?>
                <h2 class="title2">
                    <?php  if ( ! empty( $settings['rezilla_service_title_link']['url'] ) ){
                        $this->add_link_attributes( 'rezilla_service_title_link', $settings['rezilla_service_title_link'] );
                        echo '<a '.$this->get_render_attribute_string( 'rezilla_service_title_link' ).'>';
                    } ?>
                    <?php echo esc_html($settings['rezilla_service_title']); ?>
                    <?php if ( ! empty( $settings['rezilla_service_title_link']['url'] ) ){
                        echo '</a>';
                    } ?>
                </h2>
            <?php } ?>
            <?php if(!empty($settings['rezilla_service_dec'])){
                echo '<div class="service-dec">'.wp_kses_post($settings['rezilla_service_dec']).'</div>';
            } ?>
            <?php if($settings['rezilla_service_show_btn'] == 'yes') {
                if ( ! empty( $settings['rezilla_service_btn']['url'] ) ) {
                    $this->add_link_attributes( 'rezilla_service_btn', $settings['rezilla_service_btn'] );
                }
                echo '<a class="link-btn" '.$this->get_render_attribute_string( 'rezilla_service_btn' ).'>'.esc_html($settings['rezilla_service_btn_text']).'</a>';
            } ?>
            <?php if($settings['rezilla_service_style'] == 'two'){
                $this->add_render_attribute( 'rezilla_service_img', 'src', $settings['rezilla_service_img']['url'] );
                $this->add_render_attribute( 'rezilla_service_img', 'alt', \Elementor\Control_Media::get_image_alt( $settings['rezilla_service_img'] ) );
                $this->add_render_attribute( 'rezilla_service_img', 'title', \Elementor\Control_Media::get_image_title( $settings['rezilla_service_img'] ) );
                $this->add_render_attribute( 'rezilla_service_img', 'class', 'service-image' );
                echo '<div class="service-img tran-04">'.\Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'full', 'rezilla_service_img' ).'</div>';
            } ?>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_service_Widget );