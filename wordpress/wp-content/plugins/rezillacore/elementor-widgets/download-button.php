<?php namespace Elementor;

class rezilla_download_button_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_download_button';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Download Button', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-download-kit';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_download_button_options',
            [
                'label' => esc_html__( 'Rezilla Download Button', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_download_title',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Brochure Download', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_download_title_tag',
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
            'rezilla_download_dec',
            [
                'label' => esc_html__( 'Description', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( 'On the other hand we denounces with
                air-reghteous charms andre', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_download_link',
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
            'rezilla_download_link_text',
            [
                'label' => esc_html__( 'Button Text', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Download PDF', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_download_link_icon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'far fa-file-pdf',
                    'library' => 'regular',
                ],
            ]
        );
        $this->add_control(
            'rezilla_download_icon_position',
            [
                'label' => __( 'Icon Position', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'rezillacore' ),
                        'icon' => 'eicon-order-start',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'rezillacore' ),
                        'icon' => 'eicon-order-end',
                    ],
                ],
                'default' => 'right',
                'toggle' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_download_button_css_box',
            [
                'label' => esc_html__( 'Box', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_download_button_box_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_download_button_box_tabs_normal',
                    [
                        'label' => __( 'Normal', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_box_align',
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
                            '{{WRAPPER}} .rezilla-download-buttons' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_download_button_box_bg',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .rezilla-download-buttons',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_download_button_box_border',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .rezilla-download-buttons',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_box_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-download-buttons' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_download_button_box_shadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .rezilla-download-buttons',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_box_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-download-buttons' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_box_padidng',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-download-buttons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_download_button_box_tabs_hover',
                    [
                        'label' => __( 'Hover', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_download_button_box_hbg',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .rezilla-download-buttons:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_download_button_box_hborder',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .rezilla-download-buttons:hover',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_box_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-download-buttons:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_download_button_box_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .rezilla-download-buttons:hover',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_download_button_css_dec',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_download_button_css_dec_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_download_button_css_title',
                    [
                        'label' => __( 'Title', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_css_title_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .download-ttile' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_css_title_hcolor',
                    [
                        'label' => esc_html__( 'HOver Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}}  .rezilla-download-buttons:hover .download-ttile' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_download_button_css_title_typography',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .download-ttile',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_css_title_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .download-ttile' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_css_title_padidng',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .download-ttile' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_download_button_css_dec_tabs_content',
                    [
                        'label' => __( 'Content', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_css_content_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .download-btn-dec' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_css_content_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}}  .rezilla-download-buttons:hover .download-btn-dec' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_download_button_css_content_typography',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .download-btn-dec',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_css_content_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .download-btn-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_css_content_padidng',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .download-btn-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_download_button_CSS_options',
            [
                'label' => esc_html__( 'Button', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
               
            ]
        );
        $this->add_responsive_control(
            'rezilla_download_button_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} a.download-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_download_button_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} a.download-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
            $this->start_controls_tabs(
                'rezilla_download_button_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_download_button_tabs_normal',
                    [
                        'label' => __( 'Normal', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_download_button_Css_typos',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} a.download-button',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_Css_ncolor',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} a.download-button' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_Css_nbg',
                    [
                        'label' => esc_html__( 'Background Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} a.download-button' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_download_button_Css_nborder',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} a.download-button',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_Css_nradisu',
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
                            '{{WRAPPER}} a.download-button' => 'border-radius: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_download_button_Css_nshadow',
                        'label' => esc_html__( 'Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} a.download-button',
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_download_button_tabs_hover',
                    [
                        'label' => __( 'Hover', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_Css_hcolor',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} a.download-button:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_Css_hbg',
                    [
                        'label' => esc_html__( 'Background Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} a.download-button:hover' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_download_button_Css_hborder',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} a.download-button:hover',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_download_button_Css_hradisu',
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
                            '{{WRAPPER}} a.download-button:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_download_button_Css_hshadow',
                        'label' => esc_html__( 'Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} a.download-button:hover',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        if ( ! empty( $settings['rezilla_download_link']['url'] ) ) {
			$this->add_link_attributes( 'rezilla_download_link', $settings['rezilla_download_link'] );
		}
        ob_start();
        ?>
        <div class="rezilla-download-button-wrapper">
            <div class="rezilla-download-buttons">
                <?php if(!empty($settings['rezilla_download_title'])){
                    echo '<'.esc_attr($settings['rezilla_download_title_tag']).' class="download-ttile">'.esc_html($settings['rezilla_download_title']).'</'.esc_attr($settings['rezilla_download_title_tag']).'>';
                } ?>
                <?php if(!empty($settings['rezilla_download_dec'])){
                    echo '<div class="download-btn-dec">'.wp_kses_post($settings['rezilla_download_dec']).'</div>';
                } ?>
                <div class="download-btn">
                    <a <?php echo $this->get_render_attribute_string( 'rezilla_download_link' ); ?> class="download-button">
                    <?php if($settings['rezilla_download_icon_position'] == 'left') : ?>
                    <div class="icon"><?php \Elementor\Icons_Manager::render_icon( $settings['rezilla_download_link_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                    <?php endif; ?>
                    <?php echo esc_html($settings['rezilla_download_link_text']); ?>
                    <?php if($settings['rezilla_download_icon_position'] == 'right') : ?>
                        <div class="icon"><?php \Elementor\Icons_Manager::render_icon( $settings['rezilla_download_link_icon'], [ 'aria-hidden' => 'true' ] ); ?></div>
                    <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new rezilla_download_button_Widget );