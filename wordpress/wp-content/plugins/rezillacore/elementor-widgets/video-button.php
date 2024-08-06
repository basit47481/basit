<?php namespace Elementor;

class rezilla_Video_button_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_Video_button';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Video Button', 'rezillacore' );
    }

    public function get_icon() {

        return ' eicon-instagram-video';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_Video_button_options',
            [
                'label' => esc_html__( 'Rezilla Video Button', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_Video_btn_link',
            [
                'label' => esc_html__( 'Video Link', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'https://www.youtube.com/watch?v=f3NWvUV8MD8',
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_Video_btn_icon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas caret-right',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'rezilla_Video_btn_text',
            [
                'label' => esc_html__( 'Text', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic' => [
					'active' => true,
				],
                'default' => esc_html__( 'Watch Video', 'rezillacore' ),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_Video_button_css_box',
            [
                'label' => esc_html__( 'Button Box', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_css_box_align',
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
                    '{{WRAPPER}} .video-button-wrapper' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_css_box_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .video-button-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_css_box_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .video-button-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_Video_button_css_all',
            [
                'label' => esc_html__( 'Button CSS', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'rezilla_Video_button_css_tabs'
        );
        $this->start_controls_tab(
            'rezilla_Video_button_css_tabs_normal',
            [
                'label' => __( 'Normal', 'rezillacore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_Video_button_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .video-icons',
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_color',
            [
                'label' => esc_html__( 'Icon Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-icons' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_size',
            [
                'label' => esc_html__( 'Icon Size', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .video-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_ssize',
            [
                'label' => esc_html__( 'Icon SVG Size', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .video-icons svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_widht',
            [
                'label' => esc_html__( 'Width', 'rezillacore' ),
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
                    '{{WRAPPER}} .video-icons' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_height',
            [
                'label' => esc_html__( 'Height', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .video-icons' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_radius',
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
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .video-icons' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_Video_button_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .video-icons',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_Video_button_shadow',
                'label' => esc_html__( 'Icon Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .video-icons',
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .video-icons' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .video-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'rezilla_vbtn_text_n',
            [
                'label' => __( 'Text CSS', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'rezilla_vbtn_text_c',
            [
                'label' => esc_html__( 'Text Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-button-wrapper a span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_vbtn_text_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .video-button-wrapper a span',
            ]
        );
        $this->add_responsive_control(
            'rezilla_vbtn_text_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .video-button-wrapper a span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_vbtn_text_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .video-button-wrapper a span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_Video_button_css_tabs_hover',
            [
                'label' => __( 'Hover', 'rezillacore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_Video_button_hbg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .video-button-wrapper a .video-icons:hover',
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_hcolor',
            [
                'label' => esc_html__( 'Icon Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-button-wrapper a .video-icons:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button_sradius',
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
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .video-button-wrapper a .video-icons:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_Video_button_sborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .video-button-wrapper a .video-icons:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_Video_button_sshadow',
                'label' => esc_html__( 'Icon Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .video-button-wrapper a .video-icons:hover',
            ]
        );
        $this->add_control(
            'rezilla_vbtn_text_hn',
            [
                'label' => __( 'Text CSS', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'rezilla_vbtn_text_hc',
            [
                'label' => esc_html__( 'Text Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-button-wrapper a:hover span' => 'color: {{VALUE}}',
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
        $unique = rand(1241, 3256);
        echo '
        <script>
        jQuery(document).ready(function($) {
            "use strict";
            $("#video-btn-'.$unique.'").magnificPopup({
                disableOn: 700,
                type: "iframe",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
        </script>';
        ob_start();
        ?>
        <div class="video-button-wrapper">
            <a href="<?php echo esc_url($settings['rezilla_Video_btn_link']); ?>" class="video-btn" id="video-btn-<?php echo esc_attr($unique); ?>"><div class="video-icons"><?php \Elementor\Icons_Manager::render_icon( $settings['rezilla_Video_btn_icon'], [ 'aria-hidden' => 'true' ] ) ?></div><span><?php echo esc_html($settings['rezilla_Video_btn_text']); ?></span></a>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_Video_button_Widget );