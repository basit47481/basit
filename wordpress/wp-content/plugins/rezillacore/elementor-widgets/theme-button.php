<?php namespace Elementor;

class rezilla_button_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_button';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Button', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-button';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {
        //Content tab start
        $this->start_controls_section(
            'rezilla_button_options',
            [
                'label' => esc_html__( 'Rezilla Button', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_theme_button_link',
            [
                'label' => __( 'Button Link', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'rezillacore' ),
                'show_external' => true,
                'label_block' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    'custom_attributes' => '',
                ],
                'dynamic' => [
					'active' => true,
				],
            ]
        );
		$this->add_control(
			'rezilla_buttons_text',
			[
				'label' => esc_html__( 'Button Text', 'rezillacore' ),
				'type' => Controls_Manager::TEXT,
                'dynamic' => [
					'active' => true,
				],
				'default'	=> esc_html__( 'Get Started', 'rezillacore' ),
				'label_block' => true,
			]
		);
        $this->end_controls_section();
        // Style One CSS
        $this->start_controls_section(
            'rezilla_button_CSS_options',
            [
                'label' => esc_html__( 'Button CSS', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
               
            ]
        );
        $this->add_responsive_control(
            'rezilla_button_CSS_aligment',
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
                    '{{WRAPPER}} .rezilla-button' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_button_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-button a.theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_button_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-button a.theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'rezilla_buttons_tabs'
        );
        $this->start_controls_tab(
            'rezilla_buttons_tabs_normal',
            [
                'label' => __( 'Normal', 'rezillacore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_buttons_Css_typos',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-button a.theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_buttons_Css_ncolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-button a.theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_buttons_Css_nbg',
                'label' => __( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .rezilla-button a.theme-btns',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_buttons_Css_nborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-button a.theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_buttons_Css_nradisu',
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
                    '{{WRAPPER}} .rezilla-button a.theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_buttons_Css_nshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-button a.theme-btns',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_buttons_tabs_hover',
            [
                'label' => __( 'Hover', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_buttons_Css_hcolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-button a.theme-btns:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_buttons_Css_hbg',
                'label' => __( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .rezilla-button a.theme-btns:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_buttons_Css_hborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-button a.theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'rezilla_buttons_Css_hradisu',
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
                    '{{WRAPPER}} .rezilla-button a.theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_buttons_Css_hshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-button a.theme-btns:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
       
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        if ( ! empty( $settings['rezilla_theme_button_link']['url'] ) ) {
			$this->add_link_attributes( 'rezilla_theme_button_link', $settings['rezilla_theme_button_link'] );
		}
        ob_start();
        ?>
        <div class="rezilla-button-wrapper">
            <div class="rezilla-button">
                <a <?php echo $this->get_render_attribute_string( 'rezilla_theme_button_link' ); ?> class="theme-btns"><?php echo esc_html($settings['rezilla_buttons_text']); ?></a>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_button_Widget );