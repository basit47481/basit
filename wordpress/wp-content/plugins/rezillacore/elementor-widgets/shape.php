<?php
namespace Elementor;

class rezilla_Animation_shape_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_Animation_shape';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Shape Animation', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-handle';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_Animation_shape_options',
            [
                'label' => esc_html__( 'Rezilla Animation Shape 1', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_shape1_enable',
            [
                'label' => esc_html__( 'Enable Shape', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'rezilla_shape_select',
            [
                'label'   => esc_html__( 'Select Animation', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'shapeMover',
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
                'condition' => [
                    'rezilla_shape1_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_shape_img',
            [
                'label'   => __( 'Choose Image', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'rezilla_shape1_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'rezilla_Animation_shape2_options',
            [
                'label' => esc_html__( 'Rezilla Animation Shape 2', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                
            ]
        );
        $this->add_control(
            'rezilla_shape2_enable',
            [
                'label' => esc_html__( 'Enable Shape', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'rezilla_shape2_select',
            [
                'label'   => esc_html__( 'Select Animation', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'shapeMover',
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
                'condition' => [
                    'rezilla_shape2_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_shape_img2',
            [
                'label'   => __( 'Choose Image', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'rezilla_shape2_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'rezilla_Animation_shape3_options',
            [
                'label' => esc_html__( 'Rezilla Animation Shape 3', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                
            ]
        );
        $this->add_control(
            'rezilla_shape3_enable',
            [
                'label' => esc_html__( 'Enable Shape', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'rezilla_shape3_select',
            [
                'label'   => esc_html__( 'Select Animation', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'shapeMover',
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
                'condition' => [
                    'rezilla_shape3_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_shape_img3',
            [
                'label'   => __( 'Choose Image', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'rezilla_shape3_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'rezilla_Animation_shape_css_options',
            [
                'label' => esc_html__( 'CSS Shape 1', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'rezilla_shape1_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_shape_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape1' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_shape_left',
            [
                'label' => esc_html__( 'Left To Right', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape1' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_shape_duration',
            [
                'label' => esc_html__( 'Animation Duration', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 's' ],
                'range' => [
                    's' => [
                        'min' => 0.1,
                        'max' => 100,
                        'step' => 0.1,
                    ]
                ],
                'default' => [
                    'unit' => 's',
                    'size' => 9,
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'rezilla_Animation_shape2_css_options',
            [
                'label' => esc_html__( 'CSS Shape 2', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'rezilla_shape2_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_shape2_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape2' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_shape2_left',
            [
                'label' => esc_html__( 'Left To Right', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape2' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_shape2_duration',
            [
                'label' => esc_html__( 'Animation Duration', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 's' ],
                'range' => [
                    's' => [
                        'min' => 0.1,
                        'max' => 100,
                        'step' => 0.1,
                    ]
                ],
                'default' => [
                    'unit' => 's',
                    'size' => 9,
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'rezilla_Animation_shape3_css_options',
            [
                'label' => esc_html__( 'CSS Shape 3', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'rezilla_shape3_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_shape3_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape3' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_shape3_left',
            [
                'label' => esc_html__( 'Left To Right', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape3' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_shape3_duration',
            [
                'label' => esc_html__( 'Animation Duration', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 's' ],
                'range' => [
                    's' => [
                        'min' => 0.1,
                        'max' => 100,
                        'step' => 0.1,
                    ]
                ],
                'default' => [
                    'unit' => 's',
                    'size' => 9,
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <?php 
        ob_start();
        if($settings['rezilla_shape1_enable'] == 'yes'){
            echo '<img src="'.esc_url($settings['rezilla_shape_img']['url']).'" alt="'.esc_attr('rezilla Shape','rezillacore').'" class="bubbleMover shapeanimation shape1" style="-webkit-animation-name:'.esc_attr($settings['rezilla_shape_select']).';
            animation-name: '.esc_attr($settings['rezilla_shape_select']).'; animation-duration:'.esc_attr($settings['rezilla_shape_duration']['size']).'s;-webkit-animation-duration:'.esc_attr($settings['rezilla_shape_duration']['size']).'s">';
        }
        if($settings['rezilla_shape2_enable'] == 'yes'){
            echo '<img src="'.esc_url($settings['rezilla_shape_img2']['url']).'" alt="'.esc_attr('rezilla Shape','rezillacore').'" class="bubbleMover shapeanimation shape2" style="-webkit-animation-name:'.esc_attr($settings['rezilla_shape2_select']).';
            animation-name: '.esc_attr($settings['rezilla_shape2_select']).'; animation-duration:'.esc_attr($settings['rezilla_shape2_duration']['size']).'s;-webkit-animation-duration:'.esc_attr($settings['rezilla_shape2_duration']['size']).'s">';
        }
        if($settings['rezilla_shape3_enable'] == 'yes'){
            echo '<img src="'.esc_url($settings['rezilla_shape_img3']['url']).'" alt="'.esc_attr('rezilla Shape','rezillacore').'" class="bubbleMover shapeanimation shape3" style="-webkit-animation-name:'.esc_attr($settings['rezilla_shape3_select']).';
            animation-name: '.esc_attr($settings['rezilla_shape3_select']).'; animation-duration:'.esc_attr($settings['rezilla_shape3_duration']['size']).'s;-webkit-animation-duration:'.esc_attr($settings['rezilla_shape3_duration']['size']).'s">';
        }
       
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_Animation_shape_Widget );