<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access directly.

CSF::createWidget( 'rezilla_nabber_widget', array(
    'title'       => esc_html__( 'Rezilla Banner Widget', 'rezillacore' ),
    'classname'   => 'rezilla-banner-widgets',
    'description' => esc_html__( 'Add Your Banner Info', 'rezillacore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'default' => __('Work  Together','rezillacore'),
            'title' => esc_html__( 'Title', 'rezillacore' ),
        ),
        array(
            'id'    => 'rezilla_banner_dec',
            'type'  => 'textarea',
            'title' => esc_html__( 'Content', 'rezillacore' ),
            'default' => __('Bur wemust ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut labore','rezillacore'),
        ),
        array(
            'id'    => 'rezilla_banner_link',
            'type'  => 'link',
            'title' => esc_html__( 'Link', 'rezillacore' ),
        ),
        array(
            'id'    => 'rezilla_banner_link_text',
            'type'  => 'text',
            'title' => esc_html__( 'Link Text', 'rezillacore' ),
            'default' => __('Contact Now','rezillacore'),
        ),
        array(
            'id'           => 'rezilla_banner_widget_bg',
            'type'         => 'upload',
            'title'        => esc_html__( 'Background/Image', 'rezillacore' ),
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => esc_html__( 'Add Image', 'rezillacore' ),
            'remove_title' => esc_html__( 'Remove Image', 'rezillacore' ),
        ),
    ),
) );

// OutPut
if ( !function_exists( 'rezilla_nabber_widget' ) ) {
    function rezilla_nabber_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        ?>
            <div class="rezilla-widget-banner-wrapper" style="background-image:url(<?php echo esc_url($instance['rezilla_banner_widget_bg']); ?>)">
                <?php if ( !empty( $instance['title'] ) ) {
                    echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
                } ?>
                <div class="rezilla-banner-dec">
                    <p><?php echo esc_html($instance['rezilla_banner_dec']); ?></p>
                </div>
                <div class="rezilla-banner-btn">
                    <a href="<?php echo esc_url($instance['rezilla_banner_link']['url']); ?>"><?php echo esc_html($instance['rezilla_banner_link_text']); ?><i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        <?php
        echo wp_kses_post( $args['after_widget'] );
    }
}