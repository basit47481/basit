<?php

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//
// Metabox of the PAGE
// Set a unique slug-like ID
//
$rezillametabox = 'rezilla_metabox';

//
// Create a metabox
//
CSF::createMetabox( $rezillametabox, array(
    'title'        => 'Metabox Options',
    'post_type'    => array( 'page', 'post', 'rezilla_portfolio', 'rezilla_team' ),
    'show_restore' => true,
) );

//
// Create a section
//
CSF::createSection( $rezillametabox, array(
    'title'  => esc_html__( 'Header', 'rezilla' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'       => 'rezilla_meta_enable_header',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Header', 'rezilla' ),
            'subtitle' => esc_html__( 'Enable this Options if you need', 'rezilla' ),
        ),
        array(
            'id'          => 'rezilla_meta_select_header',
            'type'        => 'select',
            'title'       => esc_html__( 'Select Header Style', 'rezilla' ),
            'placeholder' => esc_html__( 'Select an option', 'rezilla' ),
            'options'     => array(
                'one'   => esc_html__( 'Header One', 'rezilla' ),
                'two'   => esc_html__( 'Header Two', 'rezilla' ),
                'three' => esc_html__( 'Header Three', 'rezilla' ),
                'four' => esc_html__( 'Header Four', 'rezilla' ),
            ),
            'dependency'  => array( 'rezilla_meta_enable_header', '==', 'true' ),
        ),
        array(
            'id'       => 'rezilla_meta_enable_header_menu',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Header Menus', 'rezilla' ),
            'subtitle' => esc_html__( 'Enable this Options if you need', 'rezilla' ),
        ),
        array(
            'id'          => 'rezilla_meta_select_menu',
            'type'        => 'select',
            'title'       => esc_html__( 'Select Menu', 'rezilla' ),
            'placeholder' => esc_html__( 'Select an option', 'rezilla' ),
            'options'     => 'menus',
            'dependency'  => array( 'rezilla_meta_enable_header_menu', '==', 'true' ),
        ),
        array(
            'id'          => 'rezilla_meta_select_logo',
            'type'        => 'switcher',
            'title'       => esc_html__( 'Specific Logo', 'rezilla' ),
            'subtitle'       => esc_html__( 'Enable Specific Logo Options', 'rezilla' ),
        ),
        array(
            'id'         => 'rezilla_meta_logo',
            'type'       => 'media',
            'title'      => esc_html__( 'Specific Logo', 'rezilla' ),
            'subtitle'   => esc_html__( '  Upload Specific Logo for page, post, Custom Post', 'rezilla' ),
            'library'    => 'image',
            'dependency' => array( 'rezilla_meta_select_logo', '==', 'true' ),
        ),
      
    ),
) );

// Create layout section
CSF::createSection( $rezillametabox, array(
    'title'  => esc_html__( 'Layout', 'rezilla' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'          => 'rezilla_layout_meta',
            'type'        => 'select',
            'title'       => esc_html__( 'Layout', 'rezilla' ),
            'placeholder' => esc_html__( 'Select an option', 'rezilla' ),
            'options'     => array(
                'full-width'    => esc_html__( 'Full Width', 'rezilla' ),
                'left-sidebar'  => esc_html__( 'Left Sidebar', 'rezilla' ),
                'right-sidebar' => esc_html__( 'Right Sidebar', 'rezilla' ),
            ),
            'desc'        => esc_html__( 'Select layout', 'rezilla' ),
        ),
        array(
            'id'         => 'rezilla_sidebar_meta',
            'type'       => 'select',
            'title'      => esc_html__( 'Sidebar', 'rezilla' ),
            'options'    => 'rezilla_sidebars',
            'dependency' => array( 'rezilla_layout_meta', 'any', 'left-sidebar,right-sidebar' ),
            'desc'       => esc_html__( 'Select sidebar you want to show with this page.', 'rezilla' ),
        ),
        array(
            'id'       => 'rezilla_meta_page_navbar',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Pagination', 'rezilla' ),
            'subtitle' => esc_html__( 'This Options only for Default page', 'rezilla' ),
            'default'  => true,
        ),
        array(
            'id'          => 'rezilla_meta_page_spacing',
            'type'        => 'spacing',
            'title'       => esc_html__( 'Padding', 'rezilla' ),
            'subtitle'    => esc_html__( 'Add Page Padding If you need', 'rezilla' ),
            'output'      => '.site-main.content-area',
            'output_mode' => 'padding',
        ),
    ),
) );

// Create a section
CSF::createSection( $rezillametabox, array(
    'title'  => esc_html__( 'Banner / Breadcrumb Area', 'rezilla' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'       => 'rezilla_meta_enable_banner',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Banner', 'rezilla' ),
            'text_on'  => esc_html__( 'Yes', 'rezilla' ),
            'text_off' => esc_html__( 'No', 'rezilla' ),
            'default'  => true,
            'desc'     => esc_html__( 'Enable or disable banner.', 'rezilla' ),
        ),
        array(
            'id'                    => 'rezilla_meta_banner_options',
            'type'                  => 'background',
            'title'                 => esc_html__( 'Banner Background', 'rezilla' ),
            'background_gradient'   => true,
            'background_origin'     => false,
            'background_clip'       => false,
            'background_blend-mode' => false,
            'default'               => array(
                'background-color'              => '',
                'background-gradient-color'     => '',
                'background-gradient-direction' => 'to right',
                'background-size'               => 'cover',
                'background-position'           => 'center center',
                'background-repeat'             => 'no-repeat',
            ),
            'dependency'            => array( 'rezilla_meta_enable_banner', '==', true ),
            'output'                => '.breadcroumb-area',
            'desc'                  => esc_html__( 'If you use gradient background color (Second Color) then background image will not working. Gradient background priority is higher then background image', 'rezilla' ),
        ),
        array(
            'id'         => 'rezilla_meta_banner_title_color',
            'type'       => 'color',
            'title'      => esc_html__( 'Banner Title Color', 'rezilla' ),
            'output'     => '.breadcroumn-contnt .brea-title',
            'dependency' => array( 'rezilla_meta_enable_banner', '==', true ),
            'desc'       => esc_html__( 'Select banner title color.', 'rezilla' ),
        ),

        array(
            'id'         => 'rezilla_meta_breadcrumb_normal_color',
            'type'       => 'color',
            'title'      => esc_html__( 'Breadcrumb Text Color', 'rezilla' ),
            'output'     => '.bre-sub span',
            'subtitle'   => esc_html__( 'Breadcrumb Text Color', 'rezilla' ),
            'dependency' => array( 'rezilla_meta_enable_banner', '==', true ),
            'desc'       => esc_html__( 'Select breadcrumb text color.', 'rezilla' ),
        ),

        array(
            'id'         => 'rezilla_meta_breadcrumb_link_color',
            'type'       => 'link_color',
            'title'      => esc_html__( 'Breadcrumb Link Color', 'rezilla' ),
            'output'     => array( '.bre-sub span a' ),
            'subtitle'   => esc_html__( 'Breadcrumb Link color', 'rezilla' ),
            'dependency' => array( 'rezilla_meta_enable_banner', '==', true ),
            'desc'       => esc_html__( 'Select breadcrumb link and link hover color.', 'rezilla' ),
        ),

    ),
) );
CSF::createSection( $rezillametabox, array(
    'title'  => esc_html__( 'Footer Settings', 'rezilla' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'       => 'rezilla_meta_footer_style_shwo',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Footer Style', 'rezilla' ),
            'subtitle'    => esc_html__('Enable Footer Style for Specific Page, post or Custom Post', 'rezilla' ),
            'text_on'  => esc_html__( 'Yes', 'rezilla' ),
            'text_off' => esc_html__( 'No', 'rezilla' ),
            'default'  => false,
            'desc'     => esc_html__( 'Enable or disable Footer Style.', 'rezilla' ),
        ),
        array(
            'id'          => 'rezilla_meta_footer_styles',
            'type'        => 'select',
            'title'       => esc_html__( 'Footer Styles', 'rezilla' ),
            'placeholder' => esc_html__( 'Select an option', 'rezilla' ),
            'options'     => array(
                'one'   => esc_html__( 'Footer One', 'rezilla' ),
                'two'   => esc_html__( 'Footer Two', 'rezilla' ),
                'three' => esc_html__( 'Footer Three', 'rezilla' ),
                'four' => esc_html__( 'Footer Four', 'rezilla' ),
            ),
            'dependency'  => array( 'rezilla_meta_footer_style_shwo', '==', true ),
            'subtitle'    => esc_html__( 'Select Your Footer', 'rezilla' ),
        ),
        array(
            'id'       => 'rezilla_meta_ft_widgets_show',
            'type'     => 'switcher',
            'title'    => esc_html__( 'Enable Footer Widget', 'rezilla' ),
            'subtitle'    => esc_html__('Enable Widgets Area Options for Specific Page', 'rezilla' ),
            'text_on'  => esc_html__( 'Yes', 'rezilla' ),
            'text_off' => esc_html__( 'No', 'rezilla' ),
            'default'  => false,
        ),
        array(
            'id'        => 'rezilla_meta_ft_widgets',
            'type'      => 'group',
            'title'     => esc_html__( 'Widgets Area', 'rezilla'),
            'subtitle'     => esc_html__( 'Add Your Widgets only for this page', 'rezilla'),
            'fields'    => array(
                array(
                    'id'          => 'rezilla_meta_ft_widget',
                    'type'        => 'select',
                    'title'       => esc_html__( 'Footer Widgets Area', 'rezilla'),
                    'subtitle'       => esc_html__( 'Select Your Footer Widget for This Page', 'rezilla'),
                    'options'     => 'sidebars'
                ),
                array(
                    'id'          => 'rezilla_meta_ft_widget_col',
                    'type'        => 'select',
                    'title'       => esc_html__( 'Select Column', 'rezilla'),
                    'subtitle'       => esc_html__( 'Select Column for this Widget', 'rezilla'),
                    'default'  => '3',
                    'options'     => array(
                        '3'   => esc_html__( 'Col 3 Default', 'rezilla' ),
                        '12'   => esc_html__( 'Col 12', 'rezilla' ),
                        '11'   => esc_html__( 'col 11', 'rezilla' ),
                        '10' => esc_html__( 'col 10', 'rezilla' ),
                        '9' => esc_html__( 'col 9', 'rezilla' ),
                        '8' => esc_html__( 'col 8', 'rezilla' ),
                        '7' => esc_html__( 'col 7', 'rezilla' ),
                        '6' => esc_html__( 'col 6', 'rezilla' ),
                        '5' => esc_html__( 'col 5', 'rezilla' ),
                        '4' => esc_html__( 'col 4', 'rezilla' ),
                        '2' => esc_html__( 'col 2', 'rezilla' ),
                    ),
                ),
            ),
            'dependency'  => array( 'rezilla_meta_ft_widgets_show', '==', true ),
        ),
    ),
) );
