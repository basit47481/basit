<?php namespace Elementor;

class rezilla_line_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_line';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Line', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-section';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_line_options',
            [
                'label' => esc_html__( 'Rezilla line', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_line_width',
            [
                'label' => esc_html__( 'Width', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 5000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-line-bg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_line_height',
            [
                'label' => esc_html__( 'Height', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 5000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-line-bg' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_line_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .rezilla-line-bg',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_line_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-line-bg',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_line_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-line-bg',
            ]
        );
        $this->add_responsive_control(
            'rezilla_line_radius',
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
                    '{{WRAPPER}} .rezilla-line-bg' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_line_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-line-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_line_pading',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-line-bg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_line_position',
            [
                'label' => esc_html__( 'Select Position', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'absolute',
                'options' => [
                    'absolute'  => esc_html__( 'Absolute', 'rezillacore' ),
                    'relative' => esc_html__( 'Relative', 'rezillacore' ),
                    'unset' => esc_html__( 'unset', 'rezillacore' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-line-bg' => 'position: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_line_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -800,
                        'max' => 500,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-line-bg' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_line_left',
            [
                'label' => esc_html__( 'Left To Right', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -800,
                        'max' => 500,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-line-bg' => 'left: {{SIZE}}{{UNIT}};',
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
        <div class="rezilla-line-bg-wrapper">
            <div class="rezilla-line-bg"></div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new rezilla_line_Widget );