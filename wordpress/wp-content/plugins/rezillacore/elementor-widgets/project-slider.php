<?php namespace Elementor;

class rezilla_project_slider_Widget extends Widget_Base {
    public function get_name() {

        return 'rezilla_project_slider';
    }

    public function get_title() {
        return esc_html__( 'Rezilla project Slide', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-slider-album';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_project_slider_options',
            [
                'label' => esc_html__( 'Gallery', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'rezilla_project_screen',
			[
				'label' => esc_html__( 'Add Images', 'rezillacore' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'default' => [],
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_project_slider_settings',
            [
                'label' => esc_html__( 'Settings', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_project_slider_dot',
            [
                'label' => esc_html__( 'Enable Dots', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'rezilla_project_slider_item',
            [
                'label' => esc_html__( 'Display Item', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 30,
                'step' => 1,
                'default' => 5,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_project_slider_active_css',
            [
                'label' => esc_html__( 'active', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_project_slider_active_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .project-imgs .slick-active.slick-center img',
            ]
        );
        $this->add_responsive_control(
            'rezilla_project_slider_active_radius',
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
                    '{{WRAPPER}} .project-imgs .slick-active.slick-center img' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_project_slider_active_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .project-imgs .slick-active.slick-center img',
            ]
        );
        $this->add_responsive_control(
            'rezilla_project_slider_active_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .project-imgs .slick-active.slick-center img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_project_slider_active_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .project-imgs .slick-active.slick-center img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_project_slider_dot_css',
            [
                'label' => esc_html__( 'Dot', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'rezilla_project_slider_dot' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_project_slider_dot_align',
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
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_project_slider_dot_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots li button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_project_slider_dot_acolor',
            [
                'label' => esc_html__( 'Active Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_project_slider_dot_marign',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_project_slider_dot_padidng',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        <script>
			jQuery(document).ready(function($) {
				"use strict";
				$('.project-imgs').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: <?php echo json_decode($settings['rezilla_project_slider_item']); ?>,
                arrows: false,
				slidesToScroll: 3,
                dots: <?php echo esc_attr($settings['rezilla_project_slider_dot'] == 'yes' ? 'true' : 'false') ?>,
                responsive: [
                    {
                    breakpoint: 1366,
                        settings: {
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3,
							slidesToScroll: 3, 
                        }
                    },
                    {
                    breakpoint: 480,
                        settings: {
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
                });
			});
			</script>
        <div class="rezilla-project-screen-wrapper">
            <div class="project-imgs">
                <?php foreach($settings['rezilla_project_screen'] as $img ) : ?>
                <div class="items">
                    <img src="<?php echo esc_url($img['url']); ?>" alt="">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new rezilla_project_slider_Widget );