<?php namespace Elementor;

class rezilla_team_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_team';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Team', 'rezillacore' );
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
            'rezilla_team_options',
            [
                'label' => esc_html__( 'Rezilla Team', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_team_item_show',
            [
                'label' => esc_html__( 'Display Item', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 100,
                'step' => 1,
                'default' => 4,
            ]
        );
        $this->add_control(
            'rezilla_team_orderby',
            [
                'label' => esc_html__( 'Order by', 'rezillacore' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'          => esc_html__('None','rezillacore'),
                    'ID'            => esc_html__('ID','rezillacore'),
                    'date'          => esc_html__('Date','rezillacore'),
                    'name'          => esc_html__('Name','rezillacore'),
                    'title'         => esc_html__('Title','rezillacore'),
                    'comment_count' => esc_html__('Comment count','rezillacore'),
                    'rand'          => esc_html__('Random','rezillacore'),
                ],
            ]
        );
        $this->add_control(
            'rezilla_team_order',
            [
                'label'   => esc_html__( 'Order', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'DESE',
                'options' => [
                    'ASC'  => esc_html__( 'ASC', 'rezillacore' ),
                    'DESE' => esc_html__( 'DESE', 'rezillacore' ),
                ],
            ]
        );
        $this->add_control(
            'rezilla_team_social_enalbe',
            [
                'label' => esc_html__( 'Display Social', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'rezilla_team_column',
            [
                'label' => esc_html__( 'Column', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '3',
                'options' => [
                    '12'  => esc_html__( 'Col 1', 'rezillacore' ),
                    '6'  => esc_html__( 'Col 2', 'rezillacore' ),
                    '4'  => esc_html__( 'Col 3', 'rezillacore' ),
                    '3'  => esc_html__( 'Col 4', 'rezillacore' ),
                    '2'  => esc_html__( 'Col 6', 'rezillacore' ),
                ],
            ]
        );
        $this->add_control(
            'rezilla_team_title_tag',
            [
                'label' => esc_html__( 'HTML Title Tag', 'rezillacore' ),
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
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_team_box_css',
            [
                'label' => esc_html__( 'Box', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_team_box_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_team_box_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_team_img_css',
            [
                'label' => esc_html__( 'Image', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_team_img_css_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .team-item-box img',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_team_img_css_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .team-item-box img',
            ]
        );
        $this->add_responsive_control(
            'rezilla_team_img_css_radius',
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
                    '{{WRAPPER}} .team-item-box img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .team-item span.teambg' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_team_img_css_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team-item-box img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_team_img_css_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team-item-box img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_team_titles_css',
            [
                'label' => esc_html__( 'Content', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_team_titles_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .team-content',
            ]
        );
        $this->add_responsive_control(
            'rezilla_team_titles_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
                    '{{WRAPPER}} .team-content' => 'text-align: {{VALUE}}',
                ],
            ]
        );
            $this->start_controls_tabs(
                'rezilla_team_title_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_team_tabs_title',
                    [
                        'label' => __( 'Title', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_title_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .team-addons-title a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_title_hcolor',
                    [
                        'label' => esc_html__( 'Hover Title', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .team-addons-title a:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_team_title_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-addons-title',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_title_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-addons-title a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_title_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-addons-title a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'rezilla_team_tabs_stitle',
                    [
                        'label' => __( 'Designation', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_stitle_color',
                    [
                        'label' => esc_html__( 'Title', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .team-titles span' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_team_stitle_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}}.team-titles span',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_stitle_margin',
                    [
                        'label' => esc_html__( 'Margin', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-titles span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_stitle_padding',
                    [
                        'label' => esc_html__( 'Padding', 'rezillacore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .team-titles span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_team_social_css',
            [
                'label' => esc_html__( 'Social', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'rezilla_team_social_tabs'
            );
                $this->start_controls_tab(
                    'rezilla_team_social_normal',
                    [
                        'label' => __( 'Normal', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_social_color',
                    [
                        'label' => esc_html__( 'Color', 'rezillacore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .team-social-info ul li a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'rezilla_team_social_typo',
                        'label' => esc_html__( 'Typography', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-social-info ul li a',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_social_margin',
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
                    'rezilla_team_social_padidng',
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
                    'rezilla_team_social_hover',
                    [
                        'label' => __( 'Hover', 'rezillacore' ),
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_social_hcolor',
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
                        'name' => 'rezilla_team_social_hbg',
                        'label' => esc_html__( 'Background', 'rezillacore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .team-social-info ul li a:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'rezilla_team_social_hborder',
                        'label' => esc_html__( 'Border', 'rezillacore' ),
                        'selector' => '{{WRAPPER}} .team-social-info ul li a:hover',
                    ]
                );
                $this->add_responsive_control(
                    'rezilla_team_social_hradius',
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
                        'name' => 'rezilla_team_social_hshadow',
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
        global $post;
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $p = new \WP_Query( array( 
            'posts_per_page' => $settings['rezilla_team_item_show'],
            'post_type' => 'rezilla_team',
            'paged' => $paged,
            'orderby'   => $settings['rezilla_team_orderby'],
            'order'     => $settings['rezilla_team_order']
        ));
        ob_start();
        ?>
        <div class="team-members-wrapper">
            <div class="team-member-inner">
                <div class="row">
                    <?php while ( $p->have_posts() ): $p->the_post(); 
                    $rezilla_idd = get_the_ID();
                    $team_meta = get_post_meta($rezilla_idd, 'rezilla_teammeta', true);
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-<?php echo esc_attr($settings['rezilla_team_column']); ?>">
                        <div class="team-item">
                            <div class="team-boxs">
                                <div class="team-item-box">
                                    <?php the_post_thumbnail( 'full' ); ?>
                                    <div class="team-content">
                                        <div class="team-titles">
                                            <<?php echo esc_attr($settings['rezilla_team_title_tag']); ?> class="team-addons-title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</<?php echo esc_attr($settings['rezilla_team_title_tag']); ?>>
                                            <span><?php echo esc_html($team_meta['rezilla_team_stitle']); ?></span>
                                        </div>
                                        <?php if($settings['rezilla_team_social_enalbe'] === 'yes') : ?>
                                        <div class="team-sociala">
                                            <div class="team-social-info">
                                                <ul>
                                                    <?php foreach($team_meta['rezilla_team_socials'] as $social ) : ?>
                                                    <li>
														<a href="<?php echo esc_url($social['rezilla_team_social_link']); ?>">
															<i class="<?php echo esc_attr($social['rezilla_teams_socials_icon']); ?>"></i>
														</a>
													</li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <span class="teambg" style="background-color:<?php echo esc_attr($team_meta['rezilla_team_after_color']); ?>;"></span>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_query();?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_team_Widget );