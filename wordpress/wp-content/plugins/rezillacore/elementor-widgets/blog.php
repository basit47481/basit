<?php namespace Elementor;

class rezilla_blog_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_blog';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Blog V1', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {
        $options = array();
        $args = array(
            'hide_empty' => false,
        );
        $categories = get_categories($args);
        
        foreach ( $categories as $key => $category ) {
            $options[$category->term_id] = $category->name;
        }
        //Content tab start
        $this->start_controls_section(
            'rezilla_blog_options',
            [
                'label' => esc_html__( 'Rezilla Blog', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_responsive_control(
            'rezilla_blog_style',
            [
                'label' => esc_html__( 'Border Style', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style-one',
                'options' => [
                    'style-one'  => esc_html__( 'Blog One', 'rezillacore' ),
                    'style-two' => esc_html__( 'Blog Two', 'rezillacore' ),
                ],
            ]
        );
        
        $this->add_control(
            'rezilla_blog_item_show',
            [
                'label' => esc_html__( 'Display Item', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 100,
                'step' => 1,
                'default' => 3,
            ]
        );
        $this->add_control(
            'rezilla_blog_v1_enable_cat',
            [
                'label' => esc_html__( 'Post By Category', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'rezilla_blog_v1_post_cat',
            [
                'label' => __( 'Select Categoris', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $options,
                'condition' => [
                    'rezilla_blog_v1_enable_cat' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_blog_item_order',
            [
                'label' => esc_html__( 'Order By', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'ASC',
                'options' => [
                    'ASC'  => esc_html__( 'ASC', 'rezillacore' ),
                    'DESE' => esc_html__( 'DESE', 'rezillacore' ),
                ],
            ]
        );
        $this->add_control(
            'rezilla_blog_item_column',
            [
                'label' => esc_html__( 'Select Item Column', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '4',
                'options' => [
                    '12'  => esc_html__( '1', 'rezillacore' ),
                    '6'  => esc_html__( '2', 'rezillacore' ),
                    '4'  => esc_html__( '3', 'rezillacore' ),
                    '3'  => esc_html__( '4', 'rezillacore' ),
                ],
            ]
        );
        $this->add_control(
            'rezilla_blog_item_navication',
            [
                'label' => esc_html__( 'Show Navication', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'rezilla_blog_item_title_lanth',
            [
                'label' => esc_html__( 'Title Lanth ', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 5,
                'max' => 20,
                'step' => 1,
                'default' => 7,
            ]
        );
        $this->add_control(
            'rezilla_blog_item_dec_lanth',
            [
                'label' => esc_html__( 'Content Lanth ', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 5,
                'max' => 50,
                'step' => 1,
                'default' => 10,
            ]
        );
        $this->add_control(
            'rezilla_blog_dec_enable',
            [
                'label' => esc_html__( 'Display Content', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
                
            ]
        );
        $this->add_control(
            'rezilla_blog_btn_enable',
            [
                'label' => esc_html__( 'Display Button', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
                'condition' => [
                    'rezilla_blog_style' => 'style-one',
                ],
            ]
        );
        $this->add_control(
            'rezilla_blog_btn2_enable',
            [
                'label' => esc_html__( 'Display Button', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'rezilla_blog_style' => 'style-two',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_blog_CSS_box_options',
            [
                'label' => esc_html__( 'Box', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_box_aligment',
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
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-blog-post-item' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_blog_CSS_box_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .rezilla-blog-post-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_blog_CSS_box_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-blog-post-item',
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_box_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-blog-post-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_blog_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-blog-post-item',
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-blog-post-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-blog-post-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_blog_CSS_img_options',
            [
                'label' => esc_html__( 'Image', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_image_height',
            [
                'label' => esc_html__( 'Height', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-blog-post-img img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'rezilla_blog_CSS_image_mini_height',
            [
                'label' => esc_html__( 'Mini Image Height', 'rezillacore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-blog-post-wrapper.style-two .first-no .rezilla-blog-post-img img' => 'height: {{SIZE}}{{UNIT}};',
                ],
				'condition' => [
                    'rezilla_blog_style' => 'style-two',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_image_object',
            [
                'label' => esc_html__( 'Opject Fit', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'fill'  => esc_html__( 'Fill', 'rezillacore' ),
                    'contain' => esc_html__( 'Contain', 'rezillacore' ),
                    'cover' => esc_html__( 'Cover', 'rezillacore' ),
                    'none' => esc_html__( 'None', 'rezillacore' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-blog-post-img img' => 'object-fit: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_blog_CSS_image_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .rezilla-blog-post-img img',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_blog_CSS_image_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-blog-post-img img',
            ]
        );
        
        $this->add_responsive_control(
            'rezilla_blog_CSS_image_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '5',
                    'right' => '5',
                    'bottom' => '5',
                    'left' => '5',
                    'isLinked' => true
                ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-blog-post-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_blog_CSS_image_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-blog-post-img img',
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_image_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-blog-post-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_image_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-blog-post-img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_blog_CSS_meta_options',
            [
                'label' => esc_html__( 'Meta', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_meta_icon_color',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .post-meta-item ul li' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .post-meta-item ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_meta_icon_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .post-meta-item ul li a:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .post-meta-item ul li i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .post-meta-item ul li a,.post-meta-item ul li',
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_meta_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .post-meta-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_CSS_meta_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .post-meta-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_blog_CSS_dec_options',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
            );
            $this->start_controls_tabs(
                'rezilla_blog_CSS_dec_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_blog_CSS_dec_tabs_title',
                    [
                        'label' => __( 'Title', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_blog_CSS_dec_typography',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .rezilla-blog-post-title a',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_blog_CSS_dec_color',
                    [
                        'label' => esc_html__( 'Title Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-blog-post-title a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_blog_CSS_dec_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-blog-post-title a:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_blog_CSS_dec_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-blog-post-title a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_blog_CSS_dec_padidng',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-blog-post-title a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_blog_CSS_dec_tabs_contnet',
                    [
                        'label' => __( 'Contnt', 'rezillacore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_blog_CSS_ddec_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .rezilla-post-dec',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_blog_CSS_ddec_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-post-dec' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_blog_CSS_ddec_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-post-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_blog_CSS_ddec_padidng',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .rezilla-post-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_blog_button_CSS_options',
            [
                'label' => esc_html__( 'Button CSS', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
               
            ]
        );
        
        $this->add_responsive_control(
            'rezilla_blog_button_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .blog-buttons .theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_button_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .blog-buttons .theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'rezilla_blog_buttons_tabs'
        );
        $this->start_controls_tab(
            'rezilla_blog_buttons_tabs_normal',
            [
                'label' => __( 'Normal', 'rezillacore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_blog_buttons_Css_typos',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .blog-buttons .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_buttons_Css_ncolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-buttons .theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_buttons_Css_nbg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-buttons .theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_blog_buttons_Css_nborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .blog-buttons .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_buttons_Css_nradisu',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
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
                    '{{WRAPPER}} .blog-buttons .theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_blog_buttons_Css_nshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .blog-buttons .theme-btns',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'rezilla_blog_buttons_tabs_hover',
            [
                'label' => __( 'Hover', 'rezillacore' ),
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_buttons_Css_hcolor',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-buttons .theme-btns:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_buttons_Css_hbg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-buttons .theme-btns:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_blog_buttons_Css_hborder',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .blog-buttons .theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'rezilla_blog_buttons_Css_hradisu',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
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
                    '{{WRAPPER}} .blog-buttons .theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_blog_buttons_Css_hshadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .blog-buttons .theme-btns:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        global $post;
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        if($settings['rezilla_blog_v1_enable_cat'] == 'yes' && !empty($settings['rezilla_blog_v1_post_cat'])){
            $p = new \WP_Query( array( 
                'posts_per_page' => esc_attr($settings['rezilla_blog_item_show'] ),
                'post_type' => 'post',
                'paged' => $paged,
                'order' => esc_attr($settings['rezilla_blog_item_order']), 
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $settings['rezilla_blog_v1_post_cat'],
                    )
                ),
            ));
        }else{
            $p = new \WP_Query( array( 
                'posts_per_page' => esc_attr($settings['rezilla_blog_item_show'] ),
                'post_type' => 'post',
                'paged' => $paged,
                'order' => esc_attr($settings['rezilla_blog_item_order']), 
            ));
        }
        ob_start();
        ?>
        <div class="rezilla-blog-post-wrapper <?php echo esc_attr($settings['rezilla_blog_style']); ?>">
            <div class="rezilla-blog-post-box">
                <div class="row ">
                    <?php
                    if($settings['rezilla_blog_style'] == 'style-one') :
                    while ( $p->have_posts() ): $p->the_post(); ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-<?php echo esc_attr($settings['rezilla_blog_item_column']); ?>">
                        <div class="rezilla-blog-post-item">
                            <?php if(has_post_thumbnail()) { ?>
                            <div class="rezilla-blog-post-img">
                                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                            </div>
                            <?php } ?>
                            <div class="rezilla-blog-post-content">
                                <div class="rezilla-blog-top-area">
                                    <div class="post-meta-item">
                                        <ul>
                                            <li class="postby"><i class="bi bi-person"></i><?php esc_html_e('By','rezillacore'); rezilla_posted_by(); ?></li>
                                            <li><i class="bi bi-calendar-date"></i><?php rezilla_posted_on(); ?></li>
                                            <?php if( get_comments_number() != 0) : ?>
                                            <li class="comment-number"><i class="bi bi-chat-dots"></i><?php comments_number( 'no responses', '1', '%' ); ?></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="rezilla-blog-post-title">
                                        <a href="<?php echo the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $settings['rezilla_blog_item_title_lanth'] ); ?></a>
                                    </div>
                                    <?php if($settings['rezilla_blog_dec_enable'] == 'yes') : ?>
                                    <div class="rezilla-post-dec">
                                        <P><?php echo wp_trim_words( get_the_content(), $settings['rezilla_blog_item_dec_lanth'] ); ?></P>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($settings['rezilla_blog_btn_enable'] == 'yes' || $settings['rezilla_blog_btn2_enable'] == 'yes') : ?>
                                    <div class="blog-buttons">
                                        <a href="<?php echo the_permalink(); ?>" class="theme-btns">Read More</a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_query(); endif;
                    if($settings['rezilla_blog_style'] == 'style-two') :
                    ?>
                    <?php $count = 0; while ( $p->have_posts() ): $p->the_post(); $count++; if($count == 1) : ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 first-item">
                        <div class="rezilla-blog-post-item">
                            <?php if(has_post_thumbnail()) { ?>
                            <div class="rezilla-blog-post-img">
                                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                            </div>
                            <?php } ?>
                            <div class="rezilla-blog-post-content">
                                <div class="rezilla-blog-top-area">
                                    <div class="post-meta-item">
                                        <ul>
                                            <li class="postby"><i class="bi bi-person"></i><?php esc_html_e('By','rezillacore'); rezilla_posted_by(); ?></li>
                                            <li><i class="bi bi-calendar-date"></i><?php rezilla_posted_on(); ?></li>
                                            <?php if( get_comments_number() != 0) : ?>
                                            <li class="comment-number"><i class="bi bi-chat-dots"></i><?php comments_number( 'no responses', '1', '%' ); ?></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="rezilla-blog-post-title">
                                        <a href="<?php echo the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $settings['rezilla_blog_item_title_lanth'] ); ?></a>
                                    </div>
                                    <?php if($settings['rezilla_blog_dec_enable'] == 'yes') : ?>
                                    <div class="rezilla-post-dec">
                                        <P><?php echo wp_trim_words( get_the_content(), $settings['rezilla_blog_item_dec_lanth'] ); ?></P>
                                    </div>
                                    <?php endif; ?>
                                    <?php if($settings['rezilla_blog_btn_enable'] == 'yes' || $settings['rezilla_blog_btn2_enable'] == 'yes') : ?>
                                    <div class="blog-buttons">
                                        <a href="<?php echo the_permalink(); ?>" class="theme-btns">Read More</a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; endwhile; wp_reset_query();?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <?php $count = 0; while ( $p->have_posts() ): $p->the_post(); $count++;if($count == 2 or $count == 3) : 
                        if(has_post_thumbnail()){
                            $thum = 'with-thum';
                        }else{
                            $thum = 'no-thum';
                        } 
                        ?>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 first-no <?php echo esc_attr($thum); ?>">
                            <div class="rezilla-blog-post-item">
                                <?php if(has_post_thumbnail()) { ?>
                                <div class="rezilla-blog-post-img">
                                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                </div>
                                <?php } ?>
                                <div class="rezilla-blog-post-content">
                                    <div class="rezilla-blog-top-area">
                                        <div class="post-meta-item">
                                            <ul>
                                                <li class="postby"><i class="bi bi-person"></i><?php esc_html_e('By','rezillacore'); rezilla_posted_by(); ?></li>
                                                <li><i class="bi bi-calendar-date"></i><?php rezilla_posted_on(); ?></li>
                                                <?php if( get_comments_number() != 0) : ?>
                                                <li class="comment-number"><i class="bi bi-chat-dots"></i><?php comments_number( 'no responses', '1', '%' ); ?></li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                        <div class="rezilla-blog-post-title">
                                            <a href="<?php echo the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $settings['rezilla_blog_item_title_lanth'] ); ?></a>
                                        </div>
                                        <?php if($settings['rezilla_blog_dec_enable'] == 'yes') : ?>
                                        <div class="rezilla-post-dec">
                                            <P><?php echo wp_trim_words( get_the_content(), $settings['rezilla_blog_item_dec_lanth'] ); ?></P>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($settings['rezilla_blog_btn_enable'] == 'yes' || $settings['rezilla_blog_btn2_enable'] == 'yes') : ?>
                                        <div class="blog-buttons">
                                            <a href="<?php echo the_permalink(); ?>" class="theme-btns">Read More</a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; endwhile; wp_reset_query();?>
                    </div>
                    <?php endif; if($settings['rezilla_blog_item_navication'] == 'yes' ) { ?>
                        <?php rezilla_paginate_nav($p); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_blog_Widget );