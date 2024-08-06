<?php
if (!defined('ABSPATH')) exit; // No access of directly access
class rezillaElementorWidget {
    private static $instance = null;
    public static function get_instance() {
        if (!self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    public function init() {
        add_action('elementor/widgets/register', array($this, 'rezilla_elementor_widgets'));
        require_once( __DIR__ . '/control/custom-control.php' );
        
    }
    public function rezilla_elementor_widgets() {
        // Check if the Elementor plugin has been installed / activated.
        if (defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')) {
            require_once('title.php');
            require_once('aboutus.php');
            require_once('counter.php');
            require_once('service-box.php');
            require_once('accordions.php');
            require_once('video-button-two.php');
            require_once('tesimonial.php');
            require_once('blog.php');
            require_once('subscribe.php');
            require_once('feature.php');
            require_once('choose-payment-tab.php');
            require_once('pricing-table.php');
            require_once('pricing-tab.php');
            require_once('pricing-tab-v2.php');
            require_once('team.php');
            require_once('team-info.php');
            require_once('progressbar.php');
            require_once('service-tab.php');
            require_once('project-slider.php');
            require_once('awards.php');
            require_once('download-button.php');
            require_once('theme-button.php');
            require_once('contact-list.php');
            require_once('clients-logo.php');
            require_once('dot-shape.php');
            require_once('shape.php');
            require_once('social-icons.php');
            require_once('line.php');
            require_once('contact-form7.php');
            require_once('video-button.php');
        }
    }
}
rezillaElementorWidget::get_instance()->init();
function rezilla_elementor_widget_categories($elements_manager) {
    $elements_manager->add_category(
        'rezilla',
        [
            'title' => __('Rezilla Elements', 'rezillacore'),
        ]
    );
}
add_action('elementor/elements/categories_registered', 'rezilla_elementor_widget_categories');

