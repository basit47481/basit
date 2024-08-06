<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access directly.

// Social Links
CSF::createWidget( 'rezilla_social_widget', array(
    'title'       => esc_html__( 'Rezilla Social Widget', 'rezillacore' ),
    'classname'   => 'rezilla-social-widgets',
    'description' => esc_html__( 'Add Your Social Info', 'rezillacore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'rezillacore' ),
        ),
        array(
            'id'      => 'rezilla_socials_widget',
            'type'    => 'group',
            'title'   => esc_html__( 'Add Social Links', 'rezillacore' ),
            'fields'  => array(
                array(
                    'id'    => 'rezilla_social_label',
                    'type'  => 'text',
                    'title' => esc_html__( 'Name', 'rezillacore' ),
                ),
                array(
                    'id'    => 'rezilla_social_link',
                    'type'  => 'text',
                    'title' => esc_html__( 'Site Link', 'rezillacore' ),
                ),
                array(
                    'id'    => 'rezilla_social_icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Site Icon', 'rezillacore' ),
                ),
            ),
            'default' => array(
                array(
                    'rezilla_social_label' => esc_html__( 'Facebook', 'rezillacore' ),
                    'rezilla_social_link'  => '#',
                    'rezilla_social_icon'  => 'fab fa-facebook',
                ),
                array(
                    'rezilla_social_label' => esc_html__( 'Twitter', 'rezillacore' ),
                    'rezilla_social_link'  => '#',
                    'rezilla_social_icon'  => 'fab fa-twitter',
                ),
                array(
                    'rezilla_social_label' => esc_html__( 'Linkedin', 'rezillacore' ),
                    'rezilla_social_link'  => '#',
                    'rezilla_social_icon'  => 'fab fa-linkedin',
                ),
                array(
                    'rezilla_social_label' => esc_html__( 'Instagram', 'rezillacore' ),
                    'rezilla_social_link'  => '#',
                    'rezilla_social_icon'  => 'fab fa-instagram',
                ),
            ),
        ),
    ),
) );

// OutPut
if ( !function_exists( 'rezilla_social_widget' ) ) {
    function rezilla_social_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        if ( !empty( $instance['title'] ) ) {
            echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
        }
        ?>
            <ul>
            <?php foreach ( $instance['rezilla_socials_widget'] as $social ) {
                echo ' <li><a href="' . esc_url( $social['rezilla_social_link'] ) . '" data-toggle="tooltip" data-placement="top" title="' . esc_attr( $social['rezilla_social_label'] ) . '"><i class="' . esc_attr( $social['rezilla_social_icon'] ) . '"></i></a></li>';
            }
            ?>
            </ul>
        <?php
echo wp_kses_post( $args['after_widget'] );
    }
}