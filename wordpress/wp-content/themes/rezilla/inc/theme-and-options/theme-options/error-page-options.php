<?php
CSF::createSection( $rezillaThemeOption, array(
    'parent' => 'rezilla_page_options',
    'title'  => esc_html__( 'Error 404', 'rezilla' ),
    'icon'   => 'fa fa-exclamation-triangle',
    'fields' => array(

        array(
            'id'       => 'rezilla_error_page_banner',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Error Banner', 'rezilla' ),
            'default'  => true,
            'text_on'  => esc_html__( 'Yes', 'rezilla' ),
            'text_off' => esc_html__( 'No', 'rezilla' ),
            'desc'     => esc_html__( 'Enable or disable search page banner.', 'rezilla' ),
        ),
        array(
            'id'         => 'rezilla_error_page_title',
            'type'       => 'text',
            'title'      => esc_html__( 'Banner Title', 'rezilla' ),
            'desc'       => esc_html__( 'Type Banner Title Here.', 'rezilla' ),
            'dependency' => array( 'rezilla_error_page_banner', '==', 'true' ),
        ),
        array(
            'id'           => 'rezilla_error_image',
            'type'         => 'media',
            'title'        => esc_html__( 'Error Image', 'rezilla' ),
            'library'      => 'image',
            'button_title' => esc_html__( 'Upload Image', 'rezilla' ),
            'desc'         => esc_html__( 'Upload error page image', 'rezilla' ),
        ),
        array(
            'id'            => 'rezilla_not_found_text',
            'type'          => 'wp_editor',
            'title'         => esc_html__( 'Not Found Text', 'rezilla' ),
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '150px',
            'desc'          => esc_html__( 'Type not found text here.', 'rezilla' ),
        ),

        array(
            'id'       => 'rezilla_go_back_home',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Go Back Home Button', 'rezilla' ),
            'text_on'  => esc_html__( 'Yes', 'rezilla' ),
            'text_off' => esc_html__( 'No', 'rezilla' ),
            'desc'     => esc_html__( 'Enable or disable go back home button.', 'rezilla' ),
            'default'  => true,
        ),
        array(
            'id'         => 'rezilla_error_page_button_text',
            'type'       => 'text',
            'dependency' => array( 'rezilla_go_back_home', '==', 'true' ),
            'title'      => esc_html__( 'Bottom Text', 'rezilla' ),
            'desc'       => esc_html__( 'Type Banner Title Here.', 'rezilla' ),
            'default'    => esc_html__( 'Go Back', 'rezilla' ),
        ),

    ),
) );