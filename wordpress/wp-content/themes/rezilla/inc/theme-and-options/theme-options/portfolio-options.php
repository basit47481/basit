<?php
//portfolio Page Options
CSF::createSection($rezillaThemeOption, array(
    'title'  => esc_html__('Portfolio Page', 'rezilla'),
    'icon'   => 'fa fa-th-large',
    'fields' => array(
        array(
            'id'       => 'rezilla_portfolio_banner_enable',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Banner', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide / Show Banner.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_portfolio_related',
            'type'       => 'switcher',
            'title'      => esc_html__('Show Related Project', 'rezilla'),
            'default'    => true,
            'text_on'    => esc_html__('Yes', 'rezilla'),
            'text_off'   => esc_html__('No', 'rezilla'),
            'desc'       => esc_html__('Hide / Show Related Project.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_portfolio_related_title',
            'type'       => 'text',
            'title'      => esc_html__('Related Title', 'rezilla'),
            'default'    => esc_html('Related Project','rezilla'),
            'dependency' => array( 'rezilla_portfolio_related', '==', 'true' ),
        ),
        array(
            'id'         => 'rezilla_portfolio_custom_slug',
            'type'       => 'text',
            'title'      => esc_html__('Custom Slug', 'rezilla'),
            'default'    => esc_html('rezilla-portfolio','rezilla'),
        ),
    )
));