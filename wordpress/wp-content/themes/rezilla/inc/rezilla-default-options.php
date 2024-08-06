<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
function rezilla_default_theme_options() {
    return array(
        'rezilla_copyright_text'   => wp_kses(
            __( '&copy; Copyright 2023 rezilla All Rights Reserved', 'rezilla' ),
            array(
                'a'      => array(
                    'href' => array(),
                ),
                'strong' => array(),
                'small'  => array(),
                'span'   => array(),
            )
        ),

        'rezilla_not_found_text'   => wp_kses(
            __( '<h2> Oops! page not found.</h2><p>The page you are looking for is not available or doesn’t belong to this website!</p>', 'rezilla' ),
            array(
                'a'      => array(
                    'href' => array(),
                ),
                'strong' => array(),
                'small'  => array(),
                'span'   => array(),
                'p'      => array(),
                'h1'     => array(),
                'h2'     => array(),
                'h3'     => array(),
                'h4'     => array(),
                'h5'     => array(),
                'h6'     => array(),
            )
        ),
        'rezilla_blog_title'       => esc_html__( 'Blog Standard', 'rezilla' ),
        'rezilla_error_page_title' => esc_html__( 'Page not found.', 'rezilla' ),
    );
}

if ( !function_exists( 'rezilla_options' ) ) {
    function rezilla_options( $option = '', $default = null ) {
        $defaults = rezilla_default_theme_options();
        $options = get_option( 'rezilla_Theme_Option' );
        $default = ( !isset( $default ) && isset( $defaults[$option] ) ) ? $defaults[$option] : $default;
        return ( isset( $options[$option] ) ) ? $options[$option] : $default;
    }
}
add_filter( 'csf_welcome_page', '__return_false' );

if(rezilla_options('rezilla_classic_widget_enable') == true ){
    add_filter( 'use_widgets_block_editor', '__return_false' );
}