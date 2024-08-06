<?php namespace Elementor;

class rezilla_Video_button2_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_Video_button2';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Video Button Two', 'rezillacore' );
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
            'rezilla_Video_button2_options',
            [
                'label' => esc_html__( 'Rezilla Video Button', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_Video_btn2_link',
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
            'rezilla_Video_btn2_icon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas caret-right',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_Video_button2_css_box',
            [
                'label' => esc_html__( 'Box', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_class_box_aligment',
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
                    '{{WRAPPER}} .video-button-wrapper' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_video_button2_box_margin',
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
            'rezilla_video_button2_box_padding',
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
            'rezilla_Video_button2_css_all',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'rezilla_Video_button2_css_tabs'
        );
        $this->start_controls_tab(
            'rezilla_Video_button2_css_tabs_normal',
            [
                'label' => __( 'Normal', 'rezillacore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_Video_button2_icon_size',
                'label' => esc_html__( 'Size', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .video-button-two .icon',
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button2_icon_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-button-two .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_Video_button2_icon_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .video-button-two:after',
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button2_icon_effect',
            [
                'label' => esc_html__( 'Effect Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-button-two:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_Video_button2_icon_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .video-button-two:after',
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button2_icon_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .video-button-two:after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button2_icon_eradius',
            [
                'label' => esc_html__( 'Effect Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .video-button-two:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_Video_button2_icon_shadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .video-button-two:after',
            ]
        );

        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_Video_button2_css_tabs_hover',
            [
                'label' => __( 'Hover', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button2_icon_hcolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-button-two:hover .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_Video_button2_icon_hbg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .video-button-two:hover:after',
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button2_icon_heffect',
            [
                'label' => esc_html__( 'Effect Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .video-button-two:hover:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_Video_button2_icon_hborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .video-button-two:hover:after',
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button2_icon_hradius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .video-button-two:hover:after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_Video_button2_icon_heradius',
            [
                'label' => esc_html__( 'Effect Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .video-button-two:hover:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_Video_button2_hicon_shadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .video-button-two:after:hover',
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
            <a href="<?php echo esc_url($settings['rezilla_Video_btn2_link']); ?>" class="tran-04 video-button-two" id="video-btn-<?php echo esc_attr($unique); ?>"><div class="icon"><?php \Elementor\Icons_Manager::render_icon( $settings['rezilla_Video_btn2_icon'], [ 'aria-hidden' => 'true' ] ); ?></div></a>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_Video_button2_Widget );