<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access directly.

CSF::createWidget( 'rezilla_contact_info_widget', array(
    'title'       => esc_html__( 'Rezilla Contact Info', 'rezillacore' ),
    'classname'   => 'contact-widget',
    'description' => esc_html__( 'Add Your Contact Info', 'rezillacore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'rezillacore' ),
        ),
        array(
            'id'      => 'rezilla_contact_info_group',
            'type'    => 'group',
            'title'   => esc_html__( 'Add Information', 'rezillacore' ),
            'fields'  => array(
                array(
                    'id'    => 'rezilla_contact_info_editor',
                    'type'  => 'wp_editor',
                    'title' => esc_html__( 'Content', 'rezillacore' ),
                ),
                array(
                    'id'    => 'rezilla_contact_info_icons',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Icon', 'rezillacore' ),
                ),
            ),
            'default' => array(
                array(
                    'rezilla_contact_info_editor'  => esc_html__( '1791 Yorkshire Circle Kitty Hawk, NC 27949', 'rezillacore' ),
                    'rezilla_contact_info_icons' => 'fas fa-map-marker-alt',
                ), 
                array(
                    'rezilla_contact_info_editor'  => esc_html__( 'Mon-Sat 9:00 - 7:00', 'rezillacore' ),
                    'rezilla_contact_info_icons' => 'fas fa-clock',
                ),
                array(
                    'rezilla_contact_info_editor'  => esc_html__( '+012-345-6789', 'rezillacore' ),
                    'rezilla_contact_info_icons' => 'fas fa-phone-alt',
                ), 
                array(
                    'rezilla_contact_info_editor'  => esc_html__( 'info@example.com', 'rezillacore' ),
                    'rezilla_contact_info_icons' => 'fas fa-envelope',
                ),
            ),
        ),
    ),
) );
// OutPut

if ( !function_exists( 'rezilla_contact_info_widget' ) ) {
    function rezilla_contact_info_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        ?>
        <?php
        if ( !empty( $instance['title'] ) ) {
            echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
        }
        ?>
        <div class="company-contact-widget">
            <ul>
            <?php foreach( $instance['rezilla_contact_info_group'] as $rezilla_contact_info ) : ?>
                <li><i class="<?php echo esc_attr($rezilla_contact_info['rezilla_contact_info_icons']); ?>"></i><?php echo wp_kses_post($rezilla_contact_info['rezilla_contact_info_editor']); ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <?php
    echo wp_kses_post( $args['after_widget'] );
    }
}