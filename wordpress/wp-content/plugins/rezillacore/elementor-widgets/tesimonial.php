<?php namespace Elementor;

class rezilla_testimonial_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_testimonial';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Testimonial V1', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-testimonial';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_testimonial_options',
            [
                'label' => esc_html__( 'Rezilla Testimonial', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_testimonial_style',
            [
                'label' => esc_html__( 'Select Style', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style-one',
                'options' => [
                    'style-one'  => esc_html__( 'Style One', 'rezillacore' ),
                    'style-two'  => esc_html__( 'Style One', 'rezillacore' ),
                    'style-three'  => esc_html__( 'Style One', 'rezillacore' ),
                ],
            ]
        );
        $this->add_control(
            'rezilla_testimonial_quote',
            [
                'label' => esc_html__( 'Quote Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'rezilla_testimonial_title_tag',
            [
                'label' => esc_html__( 'HTML Title Tag', 'rezillacore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h3',
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
            'rezilla_testimonial_stitle_tag',
            [
                'label' => esc_html__( 'Small Title Tag', 'rezillacore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'rezillacore' ),
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
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'rezilla_testimonial_img',
            [
                'label' => __( 'Choose Image', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'rezilla_testimonial_title',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Rodney J. Sabo', 'rezillacore' ),
                'placeholder' => esc_html__( 'Type your title here', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $repeater->add_control(
            'rezilla_testimonial_stitle',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Design Lead', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
                'placeholder' => esc_html__( 'Type your title here', 'rezillacore' ),
            ]
        );
        $repeater->add_control(
            'rezilla_testimonial_description',
            [
                'label' => esc_html__( 'Description', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'dynamic' => [
					'active' => true,
				],
                'default' => __('There are many varisations of Lorem our Ipsum available but themepul is a majoritis suffered the alteration in so me form, by injected','rezillacore')
            ]
        );
        $repeater->add_control(
            'rezilla_testimonial_rating_show',
            [
                'label' => esc_html__( 'Dispaly Rating', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater->add_control(
            'rezilla_testimonial_rating',
            [
                'label' => __('Rating', 'rezillacore'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 5,
                        'step' => .5,
                    ],
                ],
                'default' => [
                    'size' => 5,
                ],
                'condition' => [
                    'rezilla_testimonial_rating_show' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_testimonials',
            [
                'label'   => esc_html__( 'Testimonial Lists', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'rezilla_testimonial_title' => __('Rodney J. Sabo','rezillacore'),
                        'rezilla_testimonial_rating' => 5,
                        'rezilla_testimonial_stitle' => __('Design Lead','rezillacore'),
                        'rezilla_testimonial_description' => __('There are many varisations of Lorem our Ipsum available but themepul is a majoritis suffered the alteration in so me form, by injected','rezillacore')
                    ],
                ],
            ]
        );
        
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_testimonial_slide_options',
            [
                'label' => esc_html__( 'Testimonial Slide Options', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'rezilla_testimonial_slide_enable',
            [
                'label' => esc_html__( 'Enable Slide', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'rezilla_testimonial_loop',
            [
                'label'        => esc_html__( 'Enable Loop ', 'rezillacore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'rezillacore' ),
                'label_off'    => esc_html__( 'Off', 'rezillacore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'rezilla_testimonial_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_testimonial_speed',
            [
                'label'     => esc_html__( 'Slide Speed', 'rezillacore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 10,
                'default'   => 4000,
                'condition' => array(
                    'rezilla_testimonial_slide_enable' => 'yes',
                    'rezilla_testimonial_loop'                => 'yes',

                ),
            ]
        );
        $this->add_control(
            'rezilla_testimonial_aloop',
            [
                'label'        => esc_html__( 'Enable Auto Loop ', 'rezillacore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'rezillacore' ),
                'label_off'    => esc_html__( 'Off', 'rezillacore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'rezilla_testimonial_slide_enable' => 'yes',
                    'rezilla_testimonial_loop' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_testimonial_aspeed',
            [
                'label'     => esc_html__( 'Slide auto Speed', 'rezillacore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 50,
                'default'   => 3000,
                'condition' => array(
                    'rezilla_testimonial_aloop'               => 'yes',
                    'rezilla_testimonial_loop'                => 'yes',
                    'rezilla_testimonial_slide_enable' => 'yes',
                ),
            ]
        );
        $this->add_control(
            'rezilla_testimonial_dot',
            [
                'label'        => esc_html__( 'Enable Dots ', 'rezillacore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'rezillacore' ),
                'label_off'    => esc_html__( 'Off', 'rezillacore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'rezilla_testimonial_slide_enable' => 'yes',
                    'rezilla_testimonial_style' => 'style-one',
                ],
            ]
        );
        $this->add_control(
            'rezilla_testimonial_nav',
            [
                'label'        => esc_html__( 'Enable Nav ', 'rezillacore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'rezillacore' ),
                'label_off'    => esc_html__( 'Off', 'rezillacore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'rezilla_testimonial_slide_enable' => 'yes',
                    'rezilla_testimonial_style!' => 'style-one',
                ],
            ]
        );
        $this->add_control(
            'rezilla_testimonial_desktop',
            [
                'label' => esc_html__( 'Desktop Column', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '6',
                'options' => [
                    '12'  => esc_html__('one Column', 'rezillacore' ),
                    '6' => esc_html__( 'Two Column', 'rezillacore' ),
                    '4' => esc_html__( 'Three Column', 'rezillacore' ),
                    '3' => esc_html__( 'Four Column', 'rezillacore' ),
                ],
                'condition' => [
                    'rezilla_testimonial_slide_enable!' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_testimonial_tablat',
            [
                'label' => esc_html__( 'Tablat Column', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '6',
                'options' => [
                    '12'  => esc_html__( 'one Column', 'rezillacore' ),
                    '6' => esc_html__( 'Two Column', 'rezillacore' ),
                    '4' => esc_html__( 'Three Column', 'rezillacore' ),
                    '3' => esc_html__( 'Four Column', 'rezillacore' ),
                ],
                'condition' => [
                    'rezilla_testimonial_slide_enable!' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_testimonial_box_CSS_options',
            [
                'label' => esc_html__( 'Box', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        ); 
        $this->add_control(
            'rezilla_testimonial_box_CSS__align',
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
                    '{{WRAPPER}} .rezilla-testimonial-item' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_testimonial_box_CSS_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .rezilla-testimonial-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_testimonial_box_CSS_shadwo',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-testimonial-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_testimonial_box_CSS_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-testimonial-item',
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_box_CSS_radius',
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
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-item' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_box_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_box_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_testimonial_image_CSS_options',
            [
                'label' => esc_html__( 'Image', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_responsive_control(
            'rezilla_testimonial_image_height',
            [
                'label' => esc_html__( 'Height', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 800,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-img img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'rezilla_testi_note',
            [
                'label' => __( 'Background Shape One', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'rezilla_testimonial_style' => 'style-three',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_testimonial_image_shapge_bg1',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .tesi-shape1',
                'condition' => [
                    'rezilla_testimonial_style' => 'style-three',
                ],
            ]
        );
        $this->add_control(
            'rezilla_testi_note2',
            [
                'label' => __( 'Background Shape Two', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'rezilla_testimonial_style' => 'style-three',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_testimonial_image_shapge_bg2',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .tesi-shape2',
                'condition' => [
                    'rezilla_testimonial_style' => 'style-three',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_testimonial_image_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .rezilla-testimonial-img img',
                'condition' => [
                    'rezilla_testimonial_style!' => 'style-three',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_image_bg_shape',
            [
                'label' => esc_html__( 'Shape Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-wrapper.style-one .rezilla-testimonial-img:before' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'rezilla_testimonial_style' => 'style-one',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_testimonial_image_CSS_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-testimonial-img img',
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_image_CSS_radius',
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
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-img img' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_image_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_image_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_testimonial_content_CSS_options',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'rezilla_testimonial_content_tabs'
        );
        $this->start_controls_tab(
            'rezilla_testimonial_content_tabs_title',
            [
                'label' => __( 'Title', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_content_title_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_testimonial_content_title_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .testimonial-title',
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_content_title_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_content_title_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_testimonial_content_tabs_subtitle',
            [
                'label' => __( 'Sub Title', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_content_stitle_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-stitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_testimonial_content_stitle_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .testimonial-stitle',
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_content_stitle_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-stitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_content_stitle_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-stitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_testimonial_content_tabs_dec',
            [
                'label' => __( 'Description', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_content_dec_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-dec' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_testimonial_content_dec_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-testimonial-dec',
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_content_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_content_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_testimonial_quote_CSS_options',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_quote_CSS_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tesimonial-icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_testimonial_quote_CSS_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .tesimonial-icon',
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_quote_position',
            [
                'label' => esc_html__( 'Icon Position', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -50,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'condition' => [
                    'rezilla_testimonial_style' => 'style-three',
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-testimonial-wrapper.style-three .rezilla-tesimonial-top' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_testimonial_rating_CSS_options',
            [
                'label' => esc_html__( 'Rating', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_rating_CSS_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .tesimonial-rating' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_testimonial_rating_CSS_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .tesimonial-rating',
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_rating_marign',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .tesimonial-rating' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_testimonial_rating_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .tesimonial-rating' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_testimonial_arrow_CSS_options',
            [
                'label' => esc_html__( 'Arrow', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_testimonial_arrow_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_testimonial_arrow_tabs_dot',
                    [
                        'label' => __( 'Dot', 'rezillacore' ),
                        'condition' => [
                            'rezilla_testimonial_style' => 'style-one',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_testimonial_dot_aligns',
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
                            '{{WRAPPER}} ul.slick-dots' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_testimonial_dot_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-testimonial-wrapper ul.slick-dots li button' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_testimonial_dot_acolor',
                    [
                        'label' => esc_html__( 'Active Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-testimonial-wrapper ul.slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_testimonial_dot_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-testimonial-wrapper ul.slick-dots' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_testimonial_dot_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-testimonial-wrapper ul.slick-dots' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_testimonial_arrow_tabs_arrow',
                    [
                        'label' => __( 'Arrow', 'rezillacore' ),
                        'condition' => [
                            'rezilla_testimonial_style!' => 'style-one',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_testimonial_nav_align',
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
                            '{{WRAPPER}} .testimonila-two-arrow' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_testimonial_nav_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonila-two-arrow button.slick-arrow' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_testimonial_nav_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testimonila-two-arrow' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_testimonial_nav_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testimonila-two-arrow' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
    }
    protected function rating_render($value = '') {
        $ratefull = '<i class="bi bi-star-fill"></i>';
        $ratehalf = '<i class="bi bi-star-half"></i>';
        $rateO = '<i class="bi bi-star"></i>';

        if ($value > 4.75) {
            return $ratefull . $ratefull . $ratefull . $ratefull . $ratefull;
        } elseif ($value <= 4.75 && $value > 4.25) {
            return $ratefull . $ratefull . $ratefull . $ratefull . $ratehalf;
        } elseif ($value <= 4.25 && $value > 3.75) {
            return $ratefull . $ratefull . $ratefull . $ratefull . $rateO;
        } elseif ($value <= 3.75 && $value > 3.25) {
            return $ratefull . $ratefull . $ratefull . $ratehalf . $rateO;
        } elseif ($value <= 3.25 && $value > 2.75) {
            return $ratefull . $ratefull . $ratefull . $rateO . $rateO;
        } elseif ($value <= 2.75 && $value > 2.25) {
            return $ratefull . $ratefull . $ratehalf . $rateO . $rateO;
        } elseif ($value <= 2.25 && $value > 1.75) {
            return $ratefull . $ratefull . $rateO . $rateO . $rateO;
        } elseif ($value <= 1.75 && $value > 1.25) {
            return $ratefull . $ratehalf . $rateO . $rateO . $rateO;
        } elseif ($value <= 1.25) {
            return $ratefull . $rateO . $rateO . $rateO . $rateO;
        }
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $dynamic_id = rand(1241, 3256);
        if($settings['rezilla_testimonial_slide_enable'] == 'yes'){
            $rezilla_rowClass = 'testi-slide-row';
            $rezilla_tClass = 'rezilla-single-testimonial';
            if($settings['rezilla_testimonial_dot'] == 'yes' && $settings['rezilla_testimonial_style'] == 'style-one' ){
				$dots = 'true';
			}else{
				$dots = 'false';
			}
            if($settings['rezilla_testimonial_nav'] == 'yes' && $settings['rezilla_testimonial_style'] != 'style-one' ){
				$nav = 'true';
			}else{
				$nav = 'false';
			}
			if($settings['rezilla_testimonial_aloop'] == 'yes' ){
				$aloop = 'true';
			}else{
				$aloop = 'false';
			}
			if($settings['rezilla_testimonial_loop'] == 'yes' ){
				$loop = 'true';
			}else{
				$loop = 'false';
			}
            if(is_rtl()){
                $rtl = 'true';
            }else{
                $rtl = 'false';
            }
            if($settings['rezilla_testimonial_style'] == 'style-one'){
                $show = '2';
            }else{
                $show = '1';
            }
            echo '
			<script>
			jQuery(document).ready(function($) {
				"use strict";
				$("#testimonial-slide-'.esc_attr($dynamic_id).'").slick({
					slidesToShow: '.$show.',
					slidesToScroll: 1,
                    rtl: '.esc_attr($rtl).',
					dots: '.esc_attr($dots).',
					arrows: '.esc_attr($nav).',
                    prevArrow: $(".testi2-prev"),
                    nextArrow: $(".testi2-next"),
					infinite: '.esc_attr($loop).',
					autoplay: '.esc_attr($aloop).',';
					if($aloop == 'true'){
					echo 'speed: '.esc_attr($settings['rezilla_testimonial_speed']).',';
					}
					if($aloop == 'true'){
					echo 'autoplaySpeed: '.esc_attr($settings['rezilla_testimonial_aspeed']).',';
					}
					echo '
					responsive: [
						{
						breakpoint: 1024,
							settings: {
								slidesToShow: '.$show.',
								slidesToScroll: 1,
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 480,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
					]
				});
			});
			</script>';
        }else{
            $rezilla_rowClass = 'row with-slide';
            $rezilla_tClass = 'col-12 col-sm-6 col-md-'.$settings['rezilla_testimonial_tablat'].' col-lg-'.$settings['rezilla_testimonial_desktop'].'';
        }
        if($settings['rezilla_testimonial_style'] == 'style-two'){
            $imgcol = 'col-md-4 col-lg-3';
            $imgcol2 = 'col-md-8 col-lg-9';
			$center = 'align-items-start';
        }elseif($settings['rezilla_testimonial_style'] == 'style-one'){
            $imgcol = 'col-md-12 col-lg-5';
            $imgcol2 = 'col-md-12 col-lg-7';
			$center = 'align-items-center';
        }else{
			 $imgcol = 'col-md-4 col-lg-5';
            $imgcol2 = 'col-md-8 col-lg-7';
			$center = 'align-items-center';
		}
        ob_start();
        ?>
        <div class="rezilla-testimonial-wrapper <?php echo esc_attr($settings['rezilla_testimonial_style']); ?>">
            <div class="rezilla-testimonial-inner">
                <div class="rezilla-testimonial-items <?php echo esc_attr($rezilla_rowClass); ?>" id="testimonial-slide-<?php echo esc_attr($dynamic_id); ?>">
                    <?php foreach($settings['rezilla_testimonials'] as $rezilla_testi ) : ?>
                    <div class="<?php echo esc_attr($rezilla_tClass); ?>">
                        <div class="rezilla-testimonial-item row <?php echo esc_attr($center); ?>">
                            <div class="col-12 col-sm-12 <?php echo esc_attr($imgcol); ?>">
                                <div class="rezilla-testimonial-img">
                                    <?php if($settings['rezilla_testimonial_style'] == 'style-three') : ?>
                                    <div class="tesi-shape1"></div>
                                    <div class="tesi-shape2"></div>
                                    <?php endif; ?>
                                    <?php if($settings['rezilla_testimonial_style'] == 'style-two'){ 
                                        echo wp_get_attachment_image( $rezilla_testi['rezilla_testimonial_img']['id'], 'medium' );
                                    }else{
                                        echo wp_get_attachment_image( $rezilla_testi['rezilla_testimonial_img']['id'], 'full' );
                                    }?>
                                </div>
                            </div>
                            <div class="rezilla-testimonial-contents col-12 col-sm-12 <?php echo esc_attr($imgcol2); ?>">
                                <div class="rezilla-tesimonial-top">
                                    <div class="tesimonial-icon">
                                        <?php \Elementor\Icons_Manager::render_icon( $settings['rezilla_testimonial_quote'], [ 'aria-hidden' => 'true' ] ); ?>
                                    </div>
                                    <?php if($rezilla_testi['rezilla_testimonial_rating_show']== 'yes' && $settings['rezilla_testimonial_style'] != 'style-three') : ?>
                                    <div class="tesimonial-rating">
                                        <?php echo $this->rating_render($rezilla_testi['rezilla_testimonial_rating']['size']); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="tesimonial-content">
                                    <div class="rezilla-testimonial-dec">
                                        <?php echo wp_kses_post($rezilla_testi['rezilla_testimonial_description'],'rezilla_allowed_html'); ?>
                                    </div>
                                    <?php if($rezilla_testi['rezilla_testimonial_rating_show']== 'yes' && $settings['rezilla_testimonial_style'] == 'style-three') : ?>
                                    <div class="tesimonial-rating">
                                        <?php echo $this->rating_render($rezilla_testi['rezilla_testimonial_rating']['size']); ?>
                                    </div>
                                    <?php endif; ?>
                                    <div class="tesimonial-title-area">
                                        <<?php echo esc_attr($settings['rezilla_testimonial_title_tag']); ?> class="testimonial-title"><?php echo wp_kses($rezilla_testi['rezilla_testimonial_title'],'rezilla_allowed_html'); ?></<?php echo esc_attr($settings['rezilla_testimonial_title_tag']); ?>>
                                        <<?php echo esc_attr($settings['rezilla_testimonial_stitle_tag']); ?> class="testimonial-stitle"><?php echo wp_kses($rezilla_testi['rezilla_testimonial_stitle'],'rezilla_allowed_html'); ?></<?php echo esc_attr($settings['rezilla_testimonial_stitle_tag']); ?>>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php if($settings['rezilla_testimonial_style'] != 'style-one' && $settings['rezilla_testimonial_slide_enable'] == 'yes' ) : ?>
                <div class="testimonila-two-arrow">
                    <button class="testi2-prev slick-arrow"><i class="bi bi-arrow-left"></i></button>
                    <button class="testi2-next slick-arrow"><i class="bi bi-arrow-right"></i></button>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_testimonial_Widget );