<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
CSF::createSection( $rezillaThemeOption, array(
    'title'  => esc_html__( 'General', 'rezilla' ),
    'icon'   => 'fa fa-cogs',
    'fields' => array(
        array(
            'type'    => 'notice',
            'style'   => 'success',
            'content' => esc_html__( 'Preloader Options', 'rezilla' ),
        ),
        array(
            'id'       => 'rezilla_enable_preloader',
            'type'     => 'switcher',
            'default'  => true,
            'title'    => esc_html__( 'Preloader', 'rezilla' ),
            'subtitle' => esc_html__( 'Select Site Preloader. Default Enable', 'rezilla' ),
        ),
        array(
            'id'          => 'rezilla_preloader_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Preloader color', 'rezilla' ),
            'default'     => '#1B153B',
            'dependency'  => array( 'rezilla_enable_preloader', '==', 'true' ),
            'output'      => '.theme-loader div',
            'output_mode' => 'border-color', // Supports css properties like ( border-color, color, background-color etc )
        ),
        array(
            'id'          => 'rezilla_preloader3_color',
            'type'        => 'color',
            'title'       => esc_html__( 'Preloader Full Width Background', 'rezilla' ),
            'default'     => '#ffffff',
            'dependency'  => array( 'rezilla_enable_preloader', '==', 'true' ),
            'output'      => '.preloader-area',
            'output_mode' => 'background-color', // Supports css properties like ( border-color, color, background-color etc )
        ),
        array(
            'type'    => 'notice',
            'style'   => 'success',
            'content' => esc_html__( 'Comment Options', 'rezilla' ),
        ),
        array(
            'id'       => 'rezilla_enable_page_cmt',
            'type'     => 'switcher',
            'default'  => true,
            'title'    => esc_html__( 'Enable Comment for page', 'rezilla' ),
            'subtitle' => esc_html__( 'Enable Comment section on Page', 'rezilla' ),
        ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Top To Bottom Button Settings', 'rezilla' ),
        ),
        array(
            'id'       => 'rezilla_enable_top_to_bottom',
            'type'     => 'switcher',
            'default'  => true,
            'title'    => esc_html__( 'Enable Top To Bottom Icon', 'rezilla' ),
            'subtitle' => esc_html__( 'Enable Top To Bottom Icon', 'rezilla' ),
        ),
        array(
            'id'      => 'rezilla_enable_ttb_icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Select Icon', 'rezilla' ),
            'default' => 'fa fa-angle-up',
            'dependency'  => array( 'rezilla_enable_top_to_bottom', '==', 'true' ),
        ),
        array(
            'id'          => 'rezilla_enable_ttb_bgi',
            'type'        => 'color',
            'title'       => esc_html__( 'Icon Color', 'rezilla' ),
            'subtitle'       => esc_html__( 'Add Color for Top To bottom icon', 'rezilla' ),
            'default'     => '#ffffff',
            'dependency'  => array( 'rezilla_enable_top_to_bottom', '==', 'true' ),
            'output'      => '.to-top',
            'output_mode' => 'color',
        ),
        array(
            'id'          => 'rezilla_enable_ttb_bg',
            'type'        => 'color',
            'title'       => esc_html__( 'Background Color', 'rezilla' ),
            'subtitle'       => esc_html__( 'Add Background Color for Top To bottom icon', 'rezilla' ),
            'default'     => '#1769FE',
            'dependency'  => array( 'rezilla_enable_top_to_bottom', '==', 'true' ),
            'output'      => '.to-top',
            'output_mode' => 'background-color',
        ),
    ),
) );