<?php namespace Elementor;

class rezilla_awards_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_awards';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Awards', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-anchor';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_awards_options',
            [
                'label' => esc_html__( 'Rezilla Awards', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'rezilla_awards_choose',
			[
				'label' => esc_html__( 'Select Options', 'rezillacore' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'icon' => [
						'title' => esc_html__( 'Icon', 'rezillacore' ),
						'icon' => 'eicon-eyedropper',
					],
					'image' => [
						'title' => esc_html__( 'Image', 'rezillacore' ),
						'icon' => 'eicon-image',
					],
				],
				'default' => 'icon',
				'toggle' => true,
			]
		);
        $this->add_control(
            'rezilla_awards_icon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
                'condition' => [
                    'rezilla_awards_choose' => 'icon',
                ],
            ]
        );
        $this->add_control(
            'rezilla_awards_img',
            [
                'label' => __( 'Image Logo', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'rezilla_awards_choose' => 'image',
                ],
                
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_awards_css_icon_css',
            [
                'label' => esc_html__( 'CSS', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_css_icon_align',
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
                    '{{WRAPPER}} .award-wrapper' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_awards_css_icon_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .award-icon',
                'condition' => [
                    'rezilla_awards_choose' => 'icon',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_css_icon_img_size',
            [
                'label' => esc_html__( 'Icon Size', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 300,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .award-icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'rezilla_awards_choose' => 'image',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_css_icon_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .award-icon' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'rezilla_awards_choose' => 'icon',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_awards_css_icon_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .award-icon',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_awards_css_icon_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .award-icon',
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_css_icon_css_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .award-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_awards_css_icon_css_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .award-icon',
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_css_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .award-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_css_icon_css_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .award-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'rezilla_awards_svg_note',
            [
                'label' => __( 'SVG CSS Options', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_svg_size',
            [
                'label' => esc_html__( 'Icon Size', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .award-icon svg' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_svg_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .award-icon svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'rezilla_awards_after_note',
            [
                'label' => __( 'After CSS Options', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_after_color',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .award-item:after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_after_width',
            [
                'label' => esc_html__( 'Width', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .award-item:after' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_after_height',
            [
                'label' => esc_html__( 'Height', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .award-item:after' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_awards_after_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .award-item:after',
            ]
        );
        $this->add_responsive_control(
            'rezilla_awards_after_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .award-item:after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_awards_after_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .award-item:after',
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        ob_start();
        ?>
        <div class="award-wrapper">
            <div class="award-item">
                <?php if($settings['rezilla_awards_choose'] == 'icon') : ?>
                    <div class="award-icon">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['rezilla_awards_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    </div>
                <?php else : ?>
                    <div class="award-icon-img award-icon">
                        <?php
                        $this->add_render_attribute( 'rezilla_awards_img', 'src', $settings['rezilla_awards_img']['url'] );
                        $this->add_render_attribute( 'rezilla_awards_img', 'alt', \Elementor\Control_Media::get_image_alt( $settings['rezilla_awards_img'] ) );
                        $this->add_render_attribute( 'rezilla_awards_img', 'title', \Elementor\Control_Media::get_image_title( $settings['rezilla_awards_img'] ) );
                        $this->add_render_attribute( 'rezilla_awards_img', 'class', 'award-img' );
                        echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'rezilla_awards_img' );
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_awards_Widget );