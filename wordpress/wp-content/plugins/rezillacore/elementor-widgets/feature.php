<?php namespace Elementor;

class rezilla_feature_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_feature';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Feature', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-icon-box';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {
        //Content tab start
        $this->start_controls_section(
            'rezilla_feature_options',
            [
                'label' => esc_html__( 'Rezilla Feature', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_responsive_control(
            'rezilla_feature_style',
            [
                'label' => esc_html__( 'Border Style', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style-one',
                'options' => [
                    'style-one'  => esc_html__( 'Style One', 'rezillacore' ),
                    'style-two'  => esc_html__( 'Style Two', 'rezillacore' ),
                    'style-three'  => esc_html__( 'Style Three', 'rezillacore' ),
                ],
            ]
        );
        $this->add_control(
            'rezilla_feature_icon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'rezilla_feature_title',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Privacy Protected', 'rezillacore' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
            'rezilla_feature_title_link',
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
            'rezilla_feature_title_tag',
            [
                'label' => esc_html__( 'HTML Tag', 'rezillacore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h2',
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
            'rezilla_feature_dec',
            [
                'label' => esc_html__( 'Description', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( 'Its is a long athl
                reader is will be distrl the best', 'rezillacore' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
            'rezilla_feature_btn_show',
            [
                'label' => esc_html__( 'Display Button', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'rezilla_feature_btn_link',
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
                    'rezilla_feature_btn_show' => 'yes',
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
            'rezilla_feature_btn_icon',
            [
                'label' => esc_html__( 'Button Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-arrow-right',
                    'library' => 'solid',
                ],
                'condition' => [
                    'rezilla_feature_btn_show' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_feature_box_css',
            [
                'label' => esc_html__( 'Box', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_feature_box_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_feature_box_tab_normal',
                    [
                        'label' => __( 'Normal', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_feature_box_bg',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .feature-wrapper .feature-inner',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_box_align',
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
                            '{{WRAPPER}} .feature-wrapper .feature-inner' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_feature_box_border',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-wrapper .feature-inner',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_box_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-wrapper .feature-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_feature_box_shadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-wrapper .feature-inner',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_box_after_color',
                    [
                        'label' => esc_html__( 'After Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .feature-wrapper.style-one:after' => 'background-color: {{VALUE}}',
                        ],
                        'condition' => [
                            'rezilla_feature_style' => 'style-one',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_box_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-wrapper .feature-inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_box_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-wrapper .feature-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_feature_box_tab_hover',
                    [
                        'label' => __( 'Hover', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_feature_box_hbg',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .feature-wrapper .feature-inner:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_feature_box_hborder',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-wrapper .feature-inner:hover',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_box_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-wrapper .feature-inner:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_feature_box_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-wrapper .feature-inner:hover',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        
        $this->start_controls_section(
            'rezilla_feature_icon_css',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_feature_icon_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_feature_icon_tab_normal',
                    [
                        'label' => __( 'Normal', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_feature_icon_bg',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .feature-icon',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_feature_icon_size',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-icon',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_icon_width',
                    [
                        'label' => esc_html__( 'Width', 'rezillacore' ),
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
                            '{{WRAPPER}} .feature-icon' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_icon_height',
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
                            '{{WRAPPER}} .feature-icon' => 'height: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_feature_icon_border',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-icon',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_icon_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_feature_icon_shadow',
                        'label' => esc_html__( 'icon Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-icon',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_icon_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_icon_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_feature_icon_tab_hover',
                    [
                        'label' => __( 'Hover', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_feature_icon_hbg',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .feature-wrapper .feature-inner:hover .feature-icon',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_feature_icon_hborder',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-wrapper .feature-inner:hover .feature-icon',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_icon_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-wrapper .feature-inner:hover .feature-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_feature_icon_hshadow',
                        'label' => esc_html__( 'icon Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-wrapper .feature-inner:hover .feature-icon',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_feature_content_css',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_feature_content_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_feature_tab_title',
                    [
                        'label' => __( 'Title', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_feature_title_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-title',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_title_color',
                    [
                        'label' => esc_html__( 'Title Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .feature-title a' => 'color: {{VALUE}}',
                            '{{WRAPPER}} .feature-title' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_title_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .feature-wrapper .feature-inner:hover .feature-title a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_title_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_title_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_feature_tab_dec',
                    [
                        'label' => __( 'Content', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_feature_dec_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-title',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_dec_color',
                    [
                        'label' => esc_html__( 'Title Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .feature-dec' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_dec_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .feature-wrapper .feature-inner:hover .feature-dec' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_dec_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_dec_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'rezilla_feature_tab_btn',
                    [
                        'label' => __( 'Button Icon', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_feature_tab_btn_size',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .feature-btns a',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_tab_btn_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .feature-btns a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_tab_btn_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .feature-wrapper .feature-inner:hover .feature-btns a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_tab_btn_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_feature_tab_btn_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .feature-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        if ( ! empty( $settings['rezilla_feature_title_link']['url'] ) ) {
			$this->add_link_attributes( 'rezilla_feature_title_link', $settings['rezilla_feature_title_link'] );
		}
        if ( $settings['rezilla_feature_btn_show'] == 'yes' && ! empty( $settings['rezilla_feature_btn_link']['url'] ) ) {
			$this->add_link_attributes( 'rezilla_feature_btn_link', $settings['rezilla_feature_btn_link'] );
		}
        ob_start();
        ?>
        <div class="feature-wrapper tran-04 <?php echo esc_attr($settings['rezilla_feature_style']); ?>">
            <div class="feature-inner tran-04">
                <div class="feature-icon-area">
                    <div class="feature-icon tran-04">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['rezilla_feature_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    </div>
                </div>
                <div class="feature-contents">
                    <?php if(!empty($settings['rezilla_feature_title'])){
                        echo '<'.esc_attr($settings['rezilla_feature_title_tag']).' class="feature-title"><a '.$this->get_render_attribute_string( 'rezilla_feature_title_link').'>'.esc_html($settings['rezilla_feature_title']).'</a></'.esc_attr($settings['rezilla_feature_title_tag']).'>';
                    }?>
                    <?php if(!empty($settings['rezilla_feature_dec'])){
                        echo '<div class="feature-dec">'. wp_kses_post($settings['rezilla_feature_dec']) .'</div>' ;
                    } ?>
                    <?php if($settings['rezilla_feature_btn_show'] == 'yes' ) : ?>
                    <div class="feature-btns">
                        <a <?php echo $this->get_render_attribute_string( 'rezilla_feature_btn_link' ); ?> class="feature-btn"><?php \Elementor\Icons_Manager::render_icon( $settings['rezilla_feature_btn_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_feature_Widget );