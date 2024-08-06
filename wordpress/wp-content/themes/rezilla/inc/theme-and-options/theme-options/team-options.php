<?php
//Team Page Options
CSF::createSection($rezillaThemeOption, array(
    'title'  => esc_html__('Team Page', 'rezilla'),
    'icon'   => 'fa fa-users',
    'fields' => array(
        array(
            'id'       => 'rezilla_team_banner_enable',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Banner', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide / Show Banner.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_team_title',
            'type'       => 'text',
            'title'      => esc_html__('Banner Title', 'rezilla'),
            'default'    => esc_html('Team Details','rezilla'),
            'dependency' => array( 'rezilla_team_banner_enable', '==', 'true' ),
            'desc'       => esc_html__('Type team banner title here.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_team_custom_slug',
            'type'       => 'text',
            'title'      => esc_html__('Custom Slug', 'rezilla'),
            'default'    => esc_html('rezilla-team','rezilla'),
        ),
    )
));