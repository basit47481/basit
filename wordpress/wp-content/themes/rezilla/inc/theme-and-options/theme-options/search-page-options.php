<?php
//search Options
CSF::createSection($rezillaThemeOption, array(
    'parent' => 'rezilla_page_options',
    'title'  => esc_html__('Search Page', 'rezilla'),
    'icon'   => 'fa fa-search',
    'fields' => array(
        array(
            'id'      => 'rezilla_search_layout',
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
            'id'       => 'rezilla_search_banner',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable search Banner', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable search page banner.', 'rezilla'),
        ),
        
    )
));