<?php
namespace Elementor;

class rezilla_dot_shape_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_dot_shape';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Dot Shape', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-apps';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_dots_shape_options',
            [
                'label' => esc_html__( 'Animation', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_dots_animation_enable',
            [
                'label'     => esc_html__( 'Enable Animation', 'rezillacore' ),
                'type'      => \Elementor\Controls_Manager::SWITCHER,
                'label_on'  => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
            ]
        );
        $this->add_control(
            'rezilla_dots_shape_select',
            [
                'label'     => esc_html__( 'Select Animation', 'rezillacore' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'default'   => 'shapeMover',
                'options'   => [
                    'shapeMover'        => esc_html__( 'Shape Mover', 'rezillacore' ),
                    'bubbleMover'       => esc_html__( 'Bubble Mover', 'rezillacore' ),
                    'bounce'            => esc_html__( 'Bounce', 'rezillacore' ),
                    'zoomIn'            => esc_html__( 'ZoomIn', 'rezillacore' ),
                    'flash'             => esc_html__( 'Flash', 'rezillacore' ),
                    'pulse'             => esc_html__( 'Pulse', 'rezillacore' ),
                    'rubberBand'        => esc_html__( 'Rubber Band', 'rezillacore' ),
                    'shake'             => esc_html__( 'ShakeX', 'rezillacore' ),
                    'fadeIn'            => esc_html__( 'FadeIn', 'rezillacore' ),
                    'fadeInDown'        => esc_html__( 'FadeIn Down', 'rezillacore' ),
                    'fadeInLeft'        => esc_html__( 'FadeIn Left', 'rezillacore' ),
                    'fadeInRight'       => esc_html__( 'FadeIn Right', 'rezillacore' ),
                    'fadeInUp'          => esc_html__( 'FadeIn Up', 'rezillacore' ),
                    'fadeOut'           => esc_html__( 'FadeOut', 'rezillacore' ),
                    'fadeOutDown'       => esc_html__( 'FadeOut Down', 'rezillacore' ),
                    'fadeOutLeft'       => esc_html__( 'FadeOut Left', 'rezillacore' ),
                    'fadeOutRight'      => esc_html__( 'FadeOut Right', 'rezillacore' ),
                    'fadeOutUp'         => esc_html__( 'FadeOut Up', 'rezillacore' ),
                    'flip'              => esc_html__( 'Flip', 'rezillacore' ),
                    'flipInX'           => esc_html__( 'FlipInX', 'rezillacore' ),
                    'flipInY'           => esc_html__( 'FlipInY', 'rezillacore' ),
                    'rotateIn'          => esc_html__( 'RotateIn', 'rezillacore' ),
                    'rotateInDownLeft'  => esc_html__( 'RotateIn Down Left', 'rezillacore' ),
                    'rotateInDownRight' => esc_html__( 'RotateIn Down Right', 'rezillacore' ),
                    'rotateInUpLeft'    => esc_html__( 'RotateIn Up Left', 'rezillacore' ),
                    'rotateInUpRight'   => esc_html__( 'RotateIn Up Right', 'rezillacore' ),
                    'rotateOut'         => esc_html__( 'Rotate Out', 'rezillacore' ),
                    'hinge'             => esc_html__( 'Hinge', 'rezillacore' ),
                    'slideInDown'       => esc_html__( 'SlideIn Down', 'rezillacore' ),
                    'slideInLeft'       => esc_html__( 'SlideIn Left', 'rezillacore' ),
                    'slideInRight'      => esc_html__( 'SlideIn Right', 'rezillacore' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .shapeanimation' => 'animation-name: {{VALUE}};',
                ],
                'condition' => [
                    'rezilla_dots_animation_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_dots_shape_duration',
            [
                'label'      => esc_html__( 'Animation Duration', 'rezillacore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['s'],
                'range'      => [
                    's' => [
                        'min'  => 0.1,
                        'max'  => 100,
                        'step' => 0.1,
                    ],
                ],
                'default'    => [
                    'unit' => 's',
                    'size' => 9,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation' => '-webkit-animation-duration: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .shapeanimation' => 'animation-duration: {{SIZE}}{{UNIT}};',
                ],
                'condition'  => [
                    'rezilla_dots_animation_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_dot_shape_CSS',
            [
                'label' => esc_html__( 'Dot Shape', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_dot_shape_width',
            [
                'label'      => esc_html__( 'Width', 'rezillacore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['em', 'px'],
                'range'      => [
                    'em' => [
                        'min'  => 2,
                        'max'  => 200,
                        'step' => 1,
                    ],
                    'px' => [
                        'min'  => 10,
                        'max'  => 800,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'em',
                    'size' => 20,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .dot-shapes' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_dot_shape_height',
            [
                'label'      => esc_html__( 'Height', 'rezillacore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['em', 'px'],
                'range'      => [
                    'em' => [
                        'min'  => 2,
                        'max'  => 200,
                        'step' => 1,
                    ],
                    'px' => [
                        'min'  => 10,
                        'max'  => 800,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'em',
                    'size' => 20,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .dot-shapes' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_dot_shape_top',
            [
                'label'      => esc_html__( 'Position Top To Bottom', 'rezillacore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => -1000,
                        'max'  => 1000,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .dot-shapes.shape_dots' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_dot_shape_left',
            [
                'label'      => esc_html__( 'Position Left To Right', 'rezillacore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => -1000,
                        'max'  => 1000,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .dot-shapes.shape_dots' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'rezilla_dot_shape_size',
            [
                'label'      => esc_html__( 'Dot Size', 'rezillacore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 10,
                        'max'  => 40,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'px',
                    'size' => 18,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .dot-shapes.shape_dots' => '-webkit-mask-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_dot_shape_color',
            [
                'label'     => esc_html__( 'Color', 'rezillacore' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dot-shapes.shape_dots' => 'background: {{VALUE}}',
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
        <div class="dot-shapes shape_dots dot-animate shapeanimation"></div>
        <?php
echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new rezilla_dot_shape_Widget );