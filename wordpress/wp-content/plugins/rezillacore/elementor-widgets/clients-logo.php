<?php namespace Elementor;

class rezilla_client_logo_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_client_logo';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Client Logo', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-logo';
    }

    public function get_categories() {
        return ['rezilla'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_client_logo_options',
            [
                'label' => esc_html__( 'Client Logo', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'rezilla_client_logo_img',
            [
                'label'   => __( 'Choose Logo', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'rezilla_client_logo_enable_link',
            [
                'label'        => esc_html__( 'Enable URL', 'rezillacore' ),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Show', 'rezillacore' ),
                'label_off'    => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $repeater->add_control(
            'rezilla_client_logo_url',
            [
                'label'     => esc_html__( 'URL', 'rezillacore' ),
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => esc_html__( '#', 'rezillacore' ),
                'condition' => [
                    'rezilla_client_logo_enable_link' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_client_logos',
            [
                'label'   => esc_html__( 'Logo List', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'rezilla_client_logo_img' => '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_client_logo_slide_option',
            [
                'label' => esc_html__( 'Slide Options', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'rezilla_client_logo_slide_enable',
            [
                'label'        => esc_html__( 'Enable Slide', 'rezillacore' ),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Show', 'rezillacore' ),
                'label_off'    => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );
        $this->add_control(
            'rezilla_clsl_loop',
            [
                'label'        => esc_html__( 'Enable Loop ', 'rezillacore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'rezillacore' ),
                'label_off'    => esc_html__( 'Off', 'rezillacore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'rezilla_client_logo_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_clsl_speed',
            [
                'label'     => esc_html__( 'Slide Speed', 'rezillacore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 10,
                'default'   => 4000,
                'condition' => array(
                    'rezilla_client_logo_slide_enable' => 'yes',
                    'rezilla_clsl_loop'                => 'yes',

                ),
            ]
        );
        $this->add_control(
            'rezilla_clsl_aloop',
            [
                'label'        => esc_html__( 'Enable Auto Loop ', 'rezillacore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'rezillacore' ),
                'label_off'    => esc_html__( 'Off', 'rezillacore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'rezilla_client_logo_slide_enable' => 'yes',
                    'rezilla_clsl_loop' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'rezilla_clsl_aspeed',
            [
                'label'     => esc_html__( 'Slide auto Speed', 'rezillacore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 50,
                'default'   => 3000,
                'condition' => array(
                    'rezilla_clsl_aloop'               => 'yes',
                    'rezilla_clsl_loop'                => 'yes',
                    'rezilla_client_logo_slide_enable' => 'yes',
                ),
            ]
        );
        $this->add_control(
            'rezilla_clsl_dot',
            [
                'label'        => esc_html__( 'Enable Dots ', 'rezillacore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'rezillacore' ),
                'label_off'    => esc_html__( 'Off', 'rezillacore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'rezilla_client_logo_slide_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_clientlogo_CSS_options',
            [
                'label' => esc_html__( 'Item', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_clientlogo_item_bg',
            [
                'label' => esc_html__( 'Background Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-client-logo-wrapper.enable-slide img,.no-slide .rezilla-client-logo-items img' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_clientlogo_item_hbg',
            [
                'label' => esc_html__( 'Background Hover Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-client-logo-wrapper.enable-slide img:hover,.no-slide .rezilla-client-logo-items img:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_clientlogo_CSS_item_shadow',
                'label' => esc_html__( 'Box Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-client-logo-wrapper.enable-slide img,.no-slide .rezilla-client-logo-items img',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_clientlogo_CSS_item_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-client-logo-wrapper.enable-slide img,.no-slide .rezilla-client-logo-items img',
            ]
        );
        $this->add_responsive_control(
            'rezilla_clientlogo_CSS_item_radius',
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
                    '{{WRAPPER}} .rezilla-client-logo-wrapper.enable-slide img,.no-slide .rezilla-client-logo-items img' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_clientlogo_CSS_item_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-client-logo-wrapper.enable-slide img,.no-slide .rezilla-client-logo-items img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_clientlogo_CSS_item_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-client-logo-wrapper.enable-slide img,.no-slide .rezilla-client-logo-items img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $dynamic_id = rand(1241, 3256);
        if($settings['rezilla_client_logo_slide_enable'] == 'yes' ){
            if($settings['rezilla_clsl_dot'] == 'yes' ){
				$dots = 'true';
			}else{
				$dots = 'false';
			}
			if($settings['rezilla_clsl_aloop'] == 'yes' ){
				$aloop = 'true';
			}else{
				$aloop = 'false';
			}
			if($settings['rezilla_clsl_loop'] == 'yes' ){
				$loop = 'true';
			}else{
				$loop = 'false';
			}
            $noslide = 'enable-slide';
            if(is_rtl()){
                $rtl = 'true';
            }else{
                $rtl = 'false';
            }
            echo '
			<script>
			jQuery(document).ready(function($) {
				"use strict";
				$(".logo-slide-'.esc_attr($dynamic_id).'").slick({
					slidesToShow: 5,
					slidesToScroll: 3,
                    arrows: false,
                    rtl: '.esc_attr($rtl).',
					dots: '.esc_attr($dots).',
					infinite: '.esc_attr($loop).',
					autoplay: '.esc_attr($aloop).',';
					if($aloop == 'true'){
					echo 'speed: '.esc_attr($settings['rezilla_clsl_speed']).',';
					}
					if($aloop == 'true'){
					echo 'autoplaySpeed: '.esc_attr($settings['rezilla_clsl_aspeed']).',';
					}
					echo '
					responsive: [
						{
						breakpoint: 1024,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 3,
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 2,
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
            $noslide = 'no-slide';
        }
        ob_start();
        ?>
        <div class="rezilla-client-logo-wrapper <?php echo esc_attr($noslide); ?>">
            <div class="rezilla-client-logo-items logo-slide-<?php echo esc_attr($dynamic_id); ?>">
                <?php foreach($settings['rezilla_client_logos'] as $client_logo) : ?>
                    <?php if($client_logo['rezilla_client_logo_enable_link'] == 'yes') {
                        echo '<a href="'.esc_url($client_logo['rezilla_client_logo_url']).'">';
                    } 
                    echo wp_get_attachment_image( $client_logo['rezilla_client_logo_img']['id'], 'full' ); 
                    if($client_logo['rezilla_client_logo_enable_link'] == 'yes') {
                        echo '</a>';
                    } ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_client_logo_Widget );