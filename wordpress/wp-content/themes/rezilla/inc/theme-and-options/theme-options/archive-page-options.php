<?php
//Archive Options
CSF::createSection($rezillaThemeOption, array(
    'parent' => 'rezilla_page_options',
    'title'  => esc_html__('Archive Page', 'rezilla'),
    'icon'   => 'fa fa-archive',
    'fields' => array(
        array(
            'id'      => 'rezilla_archive_layout',
            'type'    => 'select',
            'title'   => esc_html__('Archive Layout', 'rezilla'),
            'options' => array(
                'grid'          => esc_html__('Grid Full', 'rezilla'),
                'grid-ls'       => esc_html__('Grid With Left Sidebar', 'rezilla'),
                'grid-rs'       => esc_html__('Grid With Right Sidebar', 'rezilla'),
                'left-sidebar'  => esc_html__('Left Sidebar', 'rezilla'),
                'right-sidebar' => esc_html__('Right Sidebar', 'rezilla'),
            ),
            'default' => 'right-sidebar',
            'desc'    => esc_html__('Select blog page layout.', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_archive_banner',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Archive Banner', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable archive page banner.', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_archive_pagination',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Archive Pagination', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable archive Pagination.', 'rezilla'),
        ),
        array(
            'id'     => 'rezilla_archive_banner_title_static_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Banner Static Title Color', 'rezilla' ),
            'output' => '.page-header .container h2.archive-title',
            'dependency' => array('rezilla_archive_banner', '==', true),
            'desc'        => esc_html__('Select banner Static title color.', 'rezilla'),
        ),
        array(
            'id'     => 'rezilla_archive_banner_title_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Banner Title Color', 'rezilla' ),
            'output' => '.archive-title span',
            'dependency' => array('rezilla_archive_banner', '==', true),
            'desc'        => esc_html__('Select banner title color.', 'rezilla'),
        ),
    )
));