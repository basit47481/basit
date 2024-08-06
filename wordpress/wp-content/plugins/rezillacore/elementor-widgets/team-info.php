<?php namespace Elementor;

class rezilla_team_info_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_team_info';
    }
    public function get_title() {
        return esc_html__( 'Rezilla Team Info', 'rezillacore' );
    }
    public function get_icon() {

        return 'eicon-person';
    }
    public function get_categories() {
        return ['rezilla'];
    }
    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_team_infooptions',
            [
                'label' => esc_html__( 'Rezilla Team Info', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_team_enable_img',
            [
                'label' => esc_html__( 'Enable Image', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'rezilla_team_enable_title',
            [
                'label' => esc_html__( 'Enable Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'rezilla_team_enable_stitle',
            [
                'label' => esc_html__( 'Enable Designation', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'rezilla_team_enable_info',
            [
                'label' => esc_html__( 'Enable Info', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'rezilla_team_enable_social',
            [
                'label' => esc_html__( 'Enable Social', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_team_info_img_css',
            [
                'label' => esc_html__( 'Image', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_team_info_img_css_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .team-featured-img img',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_team_info_img_css_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .team-featured-img img',
            ]
        );
        $this->add_responsive_control(
            'rezilla_team_info_img_css_radius',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
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
                    '{{WRAPPER}} .team-featured-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .team-featured-img:after' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_team_info_img_css_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team-featured-img img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_team_info_img_css_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team-featured-img img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_team_info_titles_css',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_team_info_title_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_team_info_tabs_title',
                    [
                        'label' => __( 'Title', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_title_color',
                    [
                        'label' => esc_html__( 'Title', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .team-title' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_team_info_title_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-title',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_title_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_title_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_team_info_tabs_stitle',
                    [
                        'label' => __( 'Designation', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_stitle_color',
                    [
                        'label' => esc_html__( 'Title', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} span.team-stitle' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_team_info_stitle_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} span.team-stitle',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_stitle_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} span.team-stitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_stitle_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} span.team-stitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_team_info_dec_css',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_team_info_label_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_team_info_tabs_label',
                    [
                        'label' => __( 'Label', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_label_color',
                    [
                        'label' => esc_html__( 'Title', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .team-info-list ul li>span' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_team_info_label_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-info-list ul li>span',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_label_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-info-list ul li>span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_label_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-info-list ul li>span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_team_info_tabs_content',
                    [
                        'label' => __( 'Content', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_content_color',
                    [
                        'label' => esc_html__( 'color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .team-info-list ul li' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_team_info_content_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-info-list ul li',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_content_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-info-list ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_content_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-info-list ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_team_info_social_css',
            [
                'label' => esc_html__( 'Social', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_team_info_social_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_team_info_social_normal',
                    [
                        'label' => __( 'Normal', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_social_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .team-social-info ul li a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_team_info_social_bg',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .team-social-info ul li a',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_team_info_social_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-social-info ul li a',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_team_info_social_border',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-social-info ul li a',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_social_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-social-info ul li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_team_info_social_shadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-social-info ul li a',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_social_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-social-info ul li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_social_padidng',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-social-info ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_team_info_social_hover',
                    [
                        'label' => __( 'Hover', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_social_hcolor',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .team-social-info ul li a:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'rezilla_team_info_social_hbg',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .team-social-info ul li a:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_team_info_social_hborder',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-social-info ul li a:hover',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_info_social_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-social-info ul li a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'rezilla_team_info_social_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-social-info ul li a:hover',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $rezilla_idd = get_the_ID();
        $team_meta = get_post_meta($rezilla_idd, 'rezilla_teammeta', true);
        if($settings['rezilla_team_enable_img'] == 'yes' ){
            $col1 = 'col-lg-5';
            $col2 = 'col-lg-7';
        }else{
            $col1 = '';
            $col2 = 'col-lg-12';
        }
        ob_start();
        ?>
        <div class="team-info-wrapper">
            <div class="team-wrapper-inner">
                <div class="row">
                    <?php if($settings['rezilla_team_enable_img'] == 'yes' ) : ?>
                    <div class="col-12 <?php echo esc_attr($col1); ?>">
                        <div class="team-featured-img">
                        <?php the_post_thumbnail( 'full' ); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-12 <?php echo esc_attr($col2); ?> d-flex align-items-center">
                        <div class="team-single-info-area">
                            <div class="team-title-area">
                                <?php if($settings['rezilla_team_enable_title'] == 'yes' ){
                                    ?><h2 class="team-title"><?php the_title(); ?></h2><?php
                                }?>
                                <?php if($settings['rezilla_team_enable_stitle'] == 'yes' ){
                                    echo '<span class="team-stitle">'.esc_html($team_meta['rezilla_team_stitle']).'</span>';
                                }?>
                            </div>
                            <?php if($settings['rezilla_team_enable_info'] == 'yes' ) : ?>
                            <div class="team-info-list">
                                <ul>
                                    <?php foreach($team_meta['rezilla_team_info'] as $info ) : ?>
                                    <li><span><?php echo esc_html($info['rezilla_team_info_label']); ?></span><?php echo wp_kses_post($info['rezilla_team_info_text']); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; if($settings['rezilla_team_enable_social'] == 'yes' ) : ?>
                            <div class="team-social-info">
                                <ul>
                                    <?php foreach($team_meta['rezilla_team_socials'] as $social ) : ?>
                                    <li><a href="<?php echo esc_url($social['rezilla_team_social_link']); ?>"><i class="<?php echo esc_attr($social['rezilla_teams_socials_icon']); ?>"></i></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_team_info_Widget );