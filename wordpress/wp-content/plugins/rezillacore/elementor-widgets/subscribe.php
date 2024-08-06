<?php namespace Elementor;

class rezilla_subscribe_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_subscribe';
    }

    public function get_title() {
        return esc_html__( 'rezilla Subscribe', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-mail';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_subscribe_options',
            [
                'label' => esc_html__( 'rezilla Subscribe', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_subscribe_shortcode',
            [
                'label' => esc_html__( 'Shortcode', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '#', 'rezillacore' ),
                'show_label' => true,
                'description' => __('Go To MailChimp Form and Copy Shortcode <a target="_blank" href="'.esc_url(home_url( '/wp-admin/admin.php?page=mailchimp-for-wp-forms' )).'">Click here</a>'),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_subscribe_input_CSS_options',
            [
                'label' => esc_html__( 'Input CSS', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_input_CSS_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email],.mc4wp-form-fields input[type=email]::placeholder' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_input_CSS_bg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email]' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_subscribe_CSS_input_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .mc4wp-form-fields input[type=email]',
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_CSS_input_radius',
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
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email]' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_CSS_input_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_CSS_input_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_subscribe_btn_CSS_options',
            [
                'label' => esc_html__( 'Button CSS', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_btn_CSS_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type="submit"]' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_btn_CSS_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type="submit"]:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_btn_CSS_bg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type="submit"]' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_btn_CSS_hbg',
            [
                'label' => esc_html__( 'Hover Background', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type="submit"]:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_subscribe_btn_CSS_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .mc4wp-form-fields input[type="submit"]',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_subscribe_btn_CSS_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .mc4wp-form-fields input[type="submit"]',
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_btn_CSS__radius',
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
                    '{{WRAPPER}} .mc4wp-form-fields input[type="submit"]' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_btn_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type="submit"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_subscribe_btn_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type="submit"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        ob_start();
        ?>
        <div class="rezilla-subscribe-wrapper">
            <div class="rezilla-subscribe-innter">
                <?php  echo do_shortcode($settings['rezilla_subscribe_shortcode']); ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_subscribe_Widget );