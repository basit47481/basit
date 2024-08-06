<?php namespace Elementor;

class rezilla_counter_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_counter';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Counter', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-counter';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_counter_options',
            [
                'label' => esc_html__( 'Rezilla Counter', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_counter_ficon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'rezilla_counter_title',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Projects Done', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_counter_title_tag',
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
            'rezilla_counter_number',
            [
                'label' => esc_html__( 'Number', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '520', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_counter_icon',
            [
                'label' => esc_html__( 'Symble', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '+', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->end_controls_section();
        // START CSS
        $this->start_controls_section(
            'rezilla_counter_CSS_box_options',
            [
                'label' => esc_html__( 'Counter Box', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_counter_CSS_box_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .rezilla-counter',
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-counter' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-counter' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		 $this->add_responsive_control(
            'rezilla_counter_CSS_box_alignments',
            [
                'label'                => __( 'Box Alignment', 'rezillacore' ),
                'type'                 => \Elementor\Controls_Manager::CHOOSE,
                'options'              => [
                    'left'   => [
                        'title' => __( 'Left', 'rezillacore' ),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'rezillacore' ),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right'  => [
                        'title' => __( 'Right', 'rezillacore' ),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'default'              => 'center',
                'toggle'               => true,
                'selectors_dictionary' => [
                    'left'   => 'justify-content: flex-start',
                    'center' => 'justify-content: center',
                    'right'  => 'justify-content: flex-end',
                ],
                'selectors'            => [
                    '{{WRAPPER}} .rezilla-counter-wrapper' => '{{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_counter_CSS_dec_options',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_responsive_control(
            'rezilla_counter_CSS_box_alignment',
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
                        'icon' => 'eicon-text-align-left',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-counter' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_CSS_number_c',
            [
                'label' => esc_html__( 'Number Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-nmber' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_counter_CSS_number_typo',
                'label' => esc_html__( 'Number Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .counter-nmber',
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_CSS_number_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .counter-nmber' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_CSS_number_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .counter-nmber' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'rezilla_counter_note',
            [
                'label' => __( 'Start CSS for Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_CSS_title_c',
            [
                'label' => esc_html__( 'Title Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .resty-counter-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_counter_CSS_title_typo',
                'label' => esc_html__( 'Title Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .resty-counter-title',
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_CSS_title_margin',
            [
                'label' => esc_html__( 'Title Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .resty-counter-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_CSS_title_padding',
            [
                'label' => esc_html__( 'Title Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .resty-counter-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_counter_CSS_icon_options',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_size',
            [
                'label' => esc_html__( 'Icon Size', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .counter-icons' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_counter_background',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .counter-icons',
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-icons' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_width',
            [
                'label' => esc_html__( 'Width', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .counter-icons' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_height',
            [
                'label' => esc_html__( 'Height', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .counter-icons' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_border_radius',
            [
                'label' => esc_html__( 'Border_radius', 'rezillacore' ),
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
                    '{{WRAPPER}} .counter-icons' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_counter_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .counter-icons',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_counter_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .counter-icons',
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .counter-icons' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_counter_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .counter-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $unique = rand(35245545, 541541745);
        ob_start();
        echo '
        <script>
			jQuery(document).ready(function($) {
				 "use strict";
				$(".timer-'.esc_attr($unique).'").countTo();
				$(".count-process-'.esc_attr($unique).'").appear(function() {
				    $(".timer-'.esc_attr($unique).'").countTo();
				}, {
				    accY: -200
				});
			});
		</script>
        ';
        ?>
        <div class="rezilla-counter-wrapper d-flex">
            <div class="rezilla-counter">
                <?php if(!empty($settings['rezilla_counter_ficon'])) : ?>
                <div class="counter-icons">
                    <?php \Elementor\Icons_Manager::render_icon( $settings['rezilla_counter_ficon'], [ 'aria-hidden' => 'true' ] ); ?>
                </div>
                <?php endif; ?>
                <div class="counter-content">
                    <div class="counter-numbers count-process-<?php echo esc_attr($unique); ?>">
                        <div class="counter-nmber timer-<?php echo esc_attr($unique); ?>" data-to="<?php echo esc_attr($settings['rezilla_counter_number']); ?>" data-speed="5000"><?php echo esc_html($settings['rezilla_counter_number']); ?></div>
                        <span class="counter-nmber"><?php echo esc_html($settings['rezilla_counter_icon']); ?></span>
                    </div>
                    <<?php echo esc_attr($settings['rezilla_counter_title_tag']); ?> class="resty-counter-title"><?php echo esc_html($settings['rezilla_counter_title']); ?></<?php echo esc_attr($settings['rezilla_counter_title_tag']); ?>>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_counter_Widget );
