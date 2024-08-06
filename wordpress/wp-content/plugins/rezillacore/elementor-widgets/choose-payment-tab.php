<?php namespace Elementor;
class rezilla_choose_payment_Widget extends Widget_Base {
    public function get_name() {

        return 'rezilla_choose_payment';
    }
    public function get_title() {
        return esc_html__( 'Rezilla Choose Payment', 'rezillacore' );
    }
    public function get_icon() {

        return 'eicon-paypal-button';
    }
    public function get_categories() {
        return ['rezilla'];
    }
    protected function register_controls() {
        //Content tab start
        $this->start_controls_section(
            'rezilla_choose_payment_options',
            [
                'label' => esc_html__( 'Rezilla Choose Payment', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'rezilla_cp_active',
            [
                'label' => esc_html__( 'Active', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
		$repeater->add_control(
			'rezilla_cp_title', [
				'label' => esc_html__( 'Title', 'rezillacore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Master Card' , 'rezillacore' ),
				'label_block' => true,
                'dynamic' => [
					'active' => true,
				],
			]
		);
        $repeater->add_control(
            'rezilla_cp_icon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'rezilla_cp_url',
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
		$repeater->add_control(
			'rezilla_cp_url_text', [
				'label' => esc_html__( 'Button Text', 'rezillacore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Choose payment' , 'rezillacore' ),
				'label_block' => true,
                'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'rezilla_cp_list',
			[
				'label' => esc_html__( 'Payment List', 'rezillacore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'rezilla_cp_title' => esc_html__( 'Master Card', 'rezillacore' ),
						'rezilla_cp_url_text' => esc_html__( 'Choose payment', 'rezillacore' ),
					],
				],
				'title_field' => '{{{ rezilla_cp_title }}}',
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_payment_css_BOX',
            [
                'label' => esc_html__( 'Box', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_payment_css_BOX_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .choose-payment-wrapper',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_payment_css_BOX_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .choose-payment-wrapper',
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_BOX_radius',
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
                    '{{WRAPPER}} .choose-payment-wrapper' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_payment_css_BOX_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .choose-payment-wrapper',
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_BOX_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_BOX_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_payment_css_item',
            [
                'label' => esc_html__( 'Item', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_item_align',
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
                    '{{WRAPPER}} .choose-payment-wrapper ul.nav li button' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_item_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper ul.nav li button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_item_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper ul.nav li button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
            $this->start_controls_tabs(
                'rezilla_payment_item_tabs'
            );
            $this->start_controls_tab(
                'rezilla_payment_item_tabs_normal',
                [
                    'label' => __( 'Normal', 'rezillacore' ),
                ]
            );
            $this->add_responsive_control(
                'rezilla_payment_css_item_color',
                [
                    'label' => esc_html__( 'Color', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .choose-payment-wrapper ul.nav li button' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'rezilla_payment_css_item_typo',
                    'label' => esc_html__( 'Typography', 'rezillacore' ),
                    'selector' => '{{WRAPPER}} .choose-payment-wrapper ul.nav li button',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'rezilla_payment_css_item_bg',
                    'label' => esc_html__( 'Background', 'rezillacore' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .choose-payment-wrapper ul.nav li button',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'rezilla_payment_css_item_border',
                    'label' => esc_html__( 'Border', 'rezillacore' ),
                    'selector' => '{{WRAPPER}} .choose-payment-wrapper ul.nav li button',
                ]
            );
            $this->add_responsive_control(
                'rezilla_payment_css_item_radius',
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
                        '{{WRAPPER}} .choose-payment-wrapper ul.nav li button' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'rezilla_payment_css_item_shadow',
                    'label' => esc_html__( 'Shadow', 'rezillacore' ),
                    'selector' => '{{WRAPPER}} .choose-payment-wrapper ul.nav li button',
                ]
            );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'rezilla_payment_item_tabs_hover',
                [
                    'label' => __( 'Hover', 'rezillacore' ),
                ]
            );
            $this->add_responsive_control(
                'rezilla_payment_css_item_hcolor',
                [
                    'label' => esc_html__( 'Color', 'rezillacore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .choose-payment-wrapper ul.nav li button:hover' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'rezilla_payment_css_item_hbg',
                    'label' => esc_html__( 'Background', 'rezillacore' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .choose-payment-wrapper ul.nav li button:hover',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'rezilla_payment_css_item_hborder',
                    'label' => esc_html__( 'Border', 'rezillacore' ),
                    'selector' => '{{WRAPPER}} .choose-payment-wrapper ul.nav li button:hover',
                ]
            );
            $this->add_responsive_control(
                'rezilla_payment_css_item_hradius',
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
                        '{{WRAPPER}} .choose-payment-wrapper ul.nav li button:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'rezilla_payment_css_item_hshadow',
                    'label' => esc_html__( 'Shadow', 'rezillacore' ),
                    'selector' => '{{WRAPPER}} .choose-payment-wrapper ul.nav li button:hover',
                ]
            );
            $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'rezilla_payment_css_dot',
            [
                'label' => esc_html__( 'Dot', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_dot_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper ul.nav li button:after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_dot_acolor',
            [
                'label' => esc_html__( 'Active Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper ul.nav li button.active:after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_dot_border_c',
            [
                'label' => esc_html__( 'Border Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper ul.nav li button:after' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_dot_aborder',
            [
                'label' => esc_html__( 'Active Border', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper ul.nav li button.active:after' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_css_dot_align',
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
                'default' => 'right',
                'toggle' => true,
                'selectors_dictionary' => [
                    'left' => 'right: auto;left:35px',
                    'right' => 'right: 35px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper ul.nav li button:after' => '{{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_payment_btn_CSS_options',
            [
                'label' => esc_html__( 'Button CSS', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
               
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_btn_CSS_aligment',
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
                    '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_btn_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_btn_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'rezilla_payment_btn_tabs'
        );
        $this->start_controls_tab(
            'rezilla_payment_btn_tabs_normal',
            [
                'label' => __( 'Normal', 'rezillacore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_payment_btn_Css_typos',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_btn_Css_ncolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_btn_Css_nbg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_payment_btn_Css_nborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_btn_Css_nradisu',
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
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_payment_btn_Css_nshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_payment_btn_tabs_hover',
            [
                'label' => __( 'Hover', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_btn_Css_hcolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_btn_Css_hbg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_payment_btn_Css_hborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'rezilla_payment_btn_Css_hradisu',
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
                    '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_payment_btn_Css_hshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .choose-payment-wrapper .button .theme-btns:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $id = rand(3524, 5415);
        ob_start();
        ?>
        <div class="choose-payment-wrapper">
            <ul class="nav nav-pills" role="tablist">
                <?php $count = 0; foreach($settings['rezilla_cp_list'] as $choos ) : $count++;
                ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php echo esc_attr($choos['rezilla_cp_active'] == 'yes' ? 'active' : ''); ?>" id="pills-list-tab-<?php echo esc_attr($count.$id); ?>" data-bs-toggle="pill" data-bs-target="#pills-content-<?php echo esc_attr($count.$id); ?>" type="button" role="tab" aria-controls="pills-content-<?php echo esc_attr($count.$id); ?>" aria-selected="true"><span><?php \Elementor\Icons_Manager::render_icon( $choos['rezilla_cp_icon'], [ 'aria-hidden' => 'true' ] ); ?></span><?php echo esc_html($choos['rezilla_cp_title']); ?></button>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="tab-content">
                <?php $count = 0; foreach($settings['rezilla_cp_list'] as $choos ) : $count++;
                if ( ! empty( $choos['rezilla_cp_url']['url'] ) ) {
                    $this->add_link_attributes( 'rezilla_cp_url', $choos['rezilla_cp_url'] );
                }
                ?>
                <div class="tab-pane fade show <?php echo esc_attr($choos['rezilla_cp_active'] == 'yes' ? 'active' : ''); ?>" id="pills-content-<?php echo esc_attr($count.$id); ?>" role="tabpanel" aria-labelledby="pills-list-tab-<?php echo esc_attr($count.$id); ?>">
                    <div class="button">
                        <a <?php echo $this->get_render_attribute_string( 'rezilla_cp_url' ); ?> class="theme-btns"><?php echo esc_html($choos['rezilla_cp_url_text']) ?></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_choose_payment_Widget );