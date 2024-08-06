<?php namespace Elementor;

class rezilla_contact_list_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_contact_list';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Contact List', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-site-identity';
    }

    public function get_categories() {
        return ['rezillahf'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_contact_list_options',
            [
                'label' => esc_html__( 'Rezilla Contact Info', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_contact_list_align',
            [
                'label' => __( 'Alignment', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'rezillacore' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'rezillacore' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'rezillacore' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list' => 'text-align: {{VALUE}}',
                ],
            ]
        );
		$this->add_control(
			'rezilla_contact_title',
			[
				'label' => esc_html__( 'Title', 'rezillacore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Contact Info', 'rezillacore' ),
			]
		);
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'rezilla_contact_list_icon',
            [
                'label' => esc_html__( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'rezilla_contact_list_text',
            [
                'label' => esc_html__( 'Textarea', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__( '1791 Yorkshire Circle Kitty Hawk, NC 27949', 'rezillacore' ),
                'show_label' => true,
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $this->add_control(
            'rezilla_contact_lists',
            [
                'label' => esc_html__( 'Info List', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'rezilla_contact_list_icon' => '',
                        'rezilla_contact_list_text' => esc_html__( '1791 Yorkshire Circle Kitty Hawk, NC 27949', 'rezillacore' ),
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'rezilla_contact_list__box_CSS_options',
            [
                'label' => esc_html__( 'Box Style', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_contact_list_box_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_contact_list_box_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'rezilla_contact_list_CSS_options',
            [
                'label' => esc_html__( 'Contact List', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		
        $this->add_responsive_control(
            'rezilla_contact_list_CSS_tabs_list_c',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list ul li' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .contact-info-list ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_contact_list_CSS_tabs_list_hc',
            [
                'label' => esc_html__( 'Hover Color', 'rezillacore' ),
                'description' => esc_html__( 'This color only for Hover Link', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list ul li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'rezilla_contact_list_CSS_tabs_list_typo',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .contact-info-list ul li',
            ]
        );
        $this->add_responsive_control(
            'rezilla_contact_list_CSS_tabs_list_m',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_contact_list_CSS_tabs_list_p',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_control(
            'contect_info_ttile_note',
            [
                'label' => __( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .contact-info-list h2',
            ]
        );
        $this->add_responsive_control(
            'color',
            [
                'label' => esc_html__( 'Title Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'hcolor',
            [
                'label' => esc_html__( 'Title Hover Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list:hover h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_control(
            'contect_info_icon_note',
            [
                'label' => __( 'Icon', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'icon_typography',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .contact-info-list ul li .icon',
            ]
        );
        $this->add_responsive_control(
            'icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list ul li .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_hcolor',
            [
                'label' => esc_html__( 'Icon Hover Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list:hover ul li .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list ul li .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .contact-info-list ul li .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        <div class="rezilla-contact-info-wrapper">
            <div class="contact-info-list">
				<?php if(!empty($settings['rezilla_contact_title'])){
					echo '<h2> '.esc_html($settings['rezilla_contact_title']).' </h2>';
				} ?>
                <ul> 
                <?php foreach( $settings['rezilla_contact_lists'] as $info ) : ?>
                    <li>
                        <?php if(!empty( $info['rezilla_contact_list_icon'])) { ?>
                        <div class="icon">
                            <?php \Elementor\Icons_Manager::render_icon( $info['rezilla_contact_list_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        </div>
                        <?php } ?>
                        <?php echo wp_kses_post($info['rezilla_contact_list_text']); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_contact_list_Widget );