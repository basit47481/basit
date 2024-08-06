<?php namespace Elementor;

class rezilla_pricing_tab2_Widget extends Widget_Base {

    public function get_name() {

        return 'rezilla_pricing_tab2';
    }

    public function get_title() {
        return esc_html__( 'Rezilla Pricing Tab V2', 'rezillacore' );
    }

    public function get_icon() {

        return 'eicon-tabs';
    }

    public function get_categories() {
        return ['rezilla'];
    }
    /**
     * Elementor Templates List
     * return array
     */
    public function rezilla_elementor_template() {
        $templates = Plugin::instance()->templates_manager->get_source( 'local' )->get_items();
        $types     = array();
        if ( empty( $templates ) ) {
            $template_lists = [ '0' => __( 'Do not Saved Templates.', 'rezillacore' ) ];
        } else {
            $template_lists = [ '0' => __( 'Select Template', 'rezillacore' ) ];
            foreach ( $templates as $template ) {
                $template_lists[ $template['template_id'] ] = $template['title'] . ' (' . $template['type'] . ')';
            }
        }
        return $template_lists;
    }
    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'rezilla_pricing_tab2_options',
            [
                'label' => esc_html__( 'Restly Tabs', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'rezilla_pricing_tab2_active',
            [
                'label' => esc_html__( 'Active', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'rezillacore' ),
                'label_off' => esc_html__( 'Hide', 'rezillacore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
            'rezilla_pricing_tab2_title',
            [
                'label' => esc_html__( 'Title', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Data Center', 'rezillacore' ),
                'placeholder' => esc_html__( 'Type your title here', 'rezillacore' ),
                'dynamic' => [
					'active' => true,
				],
            ]
        );
        $repeater->add_responsive_control(
            'rezilla_pricing_tab2_content_source',
            [
                'label' => esc_html__( 'Content Source', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'custom',
                'options' => [
                    'custom'  => esc_html__( 'Content', 'rezillacore' ),
                    'elementor' => esc_html__( 'Template', 'rezillacore' ),
                ],
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'template_id2',
            [
                'label'     => __( 'Content', 'rezillacore' ),
                'type'      => Controls_Manager::SELECT,
                'default'   => '0',
                'options'   => $this->rezilla_elementor_template(),
                'condition' => [
                    'rezilla_pricing_tab2_content_source' => "elementor"
                ],
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'rezilla_pricing_tab2_content_custom',
            [
                'label'      => __( 'Content', 'rezillacore' ),
                'type'       => Controls_Manager::WYSIWYG,
                'title'      => __( 'Content', 'rezillacore' ),
                'show_label' => false,
                'condition'  => [
                    'rezilla_pricing_tab2_content_source' => 'custom',
                ],
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'rezilla_pricing_tab2_list',
            [
                'label'   => esc_html__( 'Tabs', 'rezillacore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'rezilla_pricing_tab2_title' => '',
                        'rezilla_pricing_tab2_content_source' => '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'rezilla_pricing_static_CSS',
            [
                'label' => esc_html__( 'TAB Style', 'rezillacore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab2_box',
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
                    '{{WRAPPER}} .pricing-top-area' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'content_typography',
                'label' => esc_html__( 'Typography', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-pricing-tabs-wrapper .pricing-tab.nav button',
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab2_ac',
            [
                'label' => esc_html__( 'Active Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-pricing-tabs-wrapper .pricing-tab.nav button.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab2_c',
            [
                'label' => esc_html__( 'Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-pricing-tabs-wrapper .pricing-tab.nav button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab2_list_abg',
            [
                'label' => esc_html__( 'Icon active BG', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-pricing-tabs-wrapper.pricing-tab-v2-wrapper .nav:after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab2_bg',
            [
                'label' => esc_html__( 'Icon BG Color', 'rezillacore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rezilla-pricing-tabs-wrapper.pricing-tab-v2-wrapper .nav:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab2_margin',
            [
                'label' => esc_html__( 'Margin', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-pricing-tabs-wrapper.pricing-tab-v2-wrapper .nav' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab2_padding',
            [
                'label' => esc_html__( 'Padding', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-tab-v2-wrapper .pricing-tab .nav-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'rezilla_pricing_tab2_bg',
                'label' => esc_html__( 'Background', 'rezillacore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .rezilla-pricing-tabs-wrapper.pricing-tab-v2-wrapper .pricing-tab',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'rezilla_pricing_tab2_border',
                'label' => esc_html__( 'Border', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-pricing-tabs-wrapper.pricing-tab-v2-wrapper .pricing-tab',
            ]
        );
        $this->add_responsive_control(
            'rezilla_pricing_tab2_radius',
            [
                'label' => esc_html__( 'Border Radius', 'rezillacore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .rezilla-pricing-tabs-wrapper.pricing-tab-v2-wrapper .pricing-tab' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'rezilla_pricing_tab2_shadow',
                'label' => esc_html__( 'Shadow', 'rezillacore' ),
                'selector' => '{{WRAPPER}} .rezilla-pricing-tabs-wrapper.pricing-tab-v2-wrapper .pricing-tab',
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $unique = rand(350, 540);
        ob_start();
        echo '
			<script>
			jQuery(document).ready(function($) {
				"use strict";
				if ($(".pricing-tab").length) {
                    $(".pricing-tab button:first-child").click(function () {
                        $(this).parent(".pricing-tab").addClass("for-yearly");
                    });
                    $(".pricing-tab button:last-child").click(function () {
                        $(this).parent(".pricing-tab").removeClass("for-yearly");
                    });
                }
			});
			</script>';
        ?>
        <div class="rezilla-pricing-tabs-wrapper pricing-tab-v2-wrapper">
            <div class="pricing-top-area">
                <div class="pricing-tab nav nav-pills" id="v-pills-tab-<?php echo esc_attr($unique); ?>" role="tablist" aria-orientation="vertical">
                    <?php $count = 0; foreach($settings['rezilla_pricing_tab2_list'] as $tabist) : $count++;
                    if($tabist['rezilla_pricing_tab2_active'] == 'yes'){
                        $active = 'active';
                    }else{
                        $active = '';
                    }
                    ?>
                    <button class="nav-link <?php echo esc_attr($active); ?>" id="pricing-<?php echo esc_attr($count); ?>-tab2" data-bs-toggle="pill" data-bs-target="#pricing-item2-<?php echo esc_attr($count); ?>" type="button" role="tab" aria-controls="pricing-item2-<?php echo esc_attr($count); ?>" aria-selected="true"><?php echo esc_html($tabist['rezilla_pricing_tab2_title']); ?></button>
                    <?php endforeach; ?>
                </div>
                
            </div>
            <div class="tab-content pricing-content-areas" id="v-pills-tabContent-<?php echo esc_attr($unique); ?>">
                <?php $count = 0; foreach($settings['rezilla_pricing_tab2_list'] as $tabist) : $count++;
            if($tabist['rezilla_pricing_tab2_active'] == 'yes'){
                $active = 'show active';
            }else{
                $active = '';
            } 
            ?>
            <div class="tab-pane fade show <?php echo esc_attr($active); ?>" id="pricing-item2-<?php echo esc_attr($count); ?>" role="tabpanel" aria-labelledby="pricing-<?php echo esc_attr($count); ?>-tab2">
                <?php 
                if($tabist['rezilla_pricing_tab2_content_source'] == 'elementor' && !empty( $tabist['template_id2'] )){
                echo Plugin::instance()->frontend->get_builder_content_for_display( $tabist['template_id2'] );
                }else{
                    echo wp_kses_post( $tabist['rezilla_pricing_tab2_content_custom'] );
                }
                ?>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new rezilla_pricing_tab2_Widget );