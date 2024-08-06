<?php namespace Elementor;

class rezilla_about_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_about';
    }

    public function get_title() {
        return esc_html__( 'Rezilla About', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-site-identity';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_about_options',
            [
                'label' => esc_html__( 'Rezilla About', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_about_stitle',
            [
                'label' => esc_html__( 'Small Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'dynamic' => [
					'active' => true,
				],
                'default' => esc_html__( 'It Support For Business', 'rezillacore' ),
            ]
        );
        $this->add_control(
            'rezilla_about_stitle_tag',
            [
                'label' => esc_html__( 'HTML Tag', 'rezillacore' ),
                'description' => esc_html__( 'Add HTML Tag For Small Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h6',
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
            'rezilla_about_title',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'dynamic' => [
					'active' => true,
				],
                'default' => esc_html__( 'Preparing for your success trusted source in IT services.', 'rezillacore' ),
            ]
        );
        $this->add_control(
            'rezilla_about_title_tag',
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
            'rezilla_about_dec',
            [
                'label' => esc_html__( 'Description', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam nostrud</p>
                <ul>
                     <li>Custom shortcodes</li>
                     <li>Data Analytics</li>
                     <li>IT Consultancy</li>
                     <li>Data security</li>
                </ul> ', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_box_aligment',
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
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-content' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        // start css
        $this->start_controls_section(
            'rezilla_about_css_options',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'rezilla_about_CSS_title_tabs'
        );
        $this->start_controls_tab(
            'rezilla_about_CSS_title_tabs_samll',
            [
                'label' => __( 'Small Title', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_stitle',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-stitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_about_CSS_stypo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-about-stitle',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_about_CSS_stitle_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .rezilla-about-stitle span',
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_stitle_radius',
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
                    '{{WRAPPER}} .rezilla-about-stitle span' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_smargin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-stitle span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_spadding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-stitle span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_about_CSS_title_tabs_big',
            [
                'label' => __( 'Title', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_title_color',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-content .rezilla-about-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_about_CSS_title_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-about-content .rezilla-about-title',
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_title_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-content .rezilla-about-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_title_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-content .rezilla-about-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_about_css_dec',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_dec_color',
            [
                'label' => esc_html__( 'Content Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_dec_opcity',
            [
                'label' => esc_html__( 'Opacity', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['%'],
                'range' => [
                    '%' => [
                        'min' => 0.1,
                        'max' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec p' => 'opacity: {{SIZE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_about_CSS_dec_typo',
                'label' => esc_html__( 'Content Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-about-dec p',
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_dec_margin',
            [
                'label' => esc_html__( 'Content Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_dec_padding',
            [
                'label' => esc_html__( 'Content Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'rezilla_about_note',
            [
                'label' => __( 'Content List Item CSS Options', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_about_list_typo',
                'label' => esc_html__( 'list Item Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-about-dec ul li',
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_list_color',
            [
                'label' => esc_html__( 'List item Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_list_width',
            [
                'label' => esc_html__( 'item Width', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec ul li' => 'width: {{SIZE}}%;',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_list_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_list_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_list_icon_color',
            [
                'label' => esc_html__( 'icon Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec ul li:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_CSS_list_icon_bgcolor',
            [
                'label' => esc_html__( 'icon Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec ul li:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_css_list_ion_size',
            [
                'label' => esc_html__( 'Icon Size', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 30,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec ul li:before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_css_list_ion_position',
            [
                'label' => esc_html__( 'Icon Position', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec ul li:before' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_css_list_ion_bposition',
            [
                'label' => esc_html__( 'Icon Box Position', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-about-dec ul li:before' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_css_list_ion_width',
            [
                'label' => esc_html__( 'Width', 'rezillacore' ),
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
                    '{{WRAPPER}} .rezilla-about-dec ul li:before' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_about_css_list_ion_height',
            [
                'label' => esc_html__( 'Height', 'rezillacore' ),
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
                    '{{WRAPPER}} .rezilla-about-dec ul li:before' => 'height: {{SIZE}}{{UNIT}};',
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
        <div class="rezilla-about-wrapper">
            <div class='rezilla-about-content text-<?php echo esc_attr($settings["rezilla_about_box_aligment"]) ?>' >
                <?php if(!empty($settings['rezilla_about_stitle_tag'])) : ?>
                <<?php echo esc_attr($settings['rezilla_about_title_tag']); ?> class="rezilla-about-stitle"><span><?php echo wp_kses($settings['rezilla_about_stitle'],'rezilla_allowed_html'); ?></span></<?php echo esc_attr($settings['rezilla_about_stitle_tag']); ?>>
                <?php endif; ?>
                <<?php echo esc_attr($settings['rezilla_about_title_tag']); ?> class="rezilla-about-title"><?php echo wp_kses($settings['rezilla_about_title'],'rezilla_allowed_html'); ?></<?php echo esc_attr($settings['rezilla_about_title_tag']); ?>>
                <div class="rezilla-about-dec">
                    <?php echo wp_kses($settings['rezilla_about_dec'],'rezilla_allowed_html'); ?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new rezilla_about_Widget );