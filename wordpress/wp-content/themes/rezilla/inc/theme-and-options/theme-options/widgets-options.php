<?php
//Team Page Options
CSF::createSection($rezillaThemeOption, array(
    'title'  => esc_html__('Widgets Generator', 'rezilla'),
    'icon'   => 'fa fa-compress',
    'fields' => array(
        array(
            'id'       => 'rezilla_classic_widget_enable',
            'type'     => 'switcher',
            'title'    => esc_html__('Classic Mode', 'rezilla'),
            'subtitle'    => esc_html__('if you see any issue on Widget Block editor then enable Classic Mode', 'rezilla'),
            'default'  => false,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
        ),
        array(
            'type'    => 'submessage',
            'style'   => 'success',
            'content' => esc_html__('Now you can Create Unlimited Widgets for your Wordpress Site. [Note: this is not Elementor Widgets Options only Wordpress Widget]', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_Gwidget_enable',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Generator Widget', 'rezilla'),
            'subtitle'    => esc_html__('Enable Generator Widget options if you need extra widget for your website', 'rezilla'),
            'default'  => false,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
        ),
        array(
            'id'     => 'rezilla_Gwidget_grups',
            'type'   => 'group',
            'title'  => esc_html__('Generator Widget', 'rezilla'),
            'dependency' => array( 'rezilla_Gwidget_enable', '==', 'true' ),
            'fields' => array(
                array(
                    'id'    => 'rezilla_Gwidget_name',
                    'type'  => 'text',
                    'default'  => esc_html__('Extra Widget One', 'rezilla'),
                    'title' => esc_html__('Widget Name', 'rezilla'),
                    'subtitle' => esc_html__('Add Widget Name Hare', 'rezilla'),
                ),
                array(
                    'id'    => 'rezilla_Gwidget_ids',
                    'type'  => 'text',
                    'title' => esc_html__('Widget ID', 'rezilla'),
                    'default'  => esc_html__('extra-widget-one', 'rezilla'),
                    'subtitle' => esc_html__('Add Widget Id Hare. This is very importent', 'rezilla'),
                ),
                array(
                    'id'    => 'rezilla_Gwidget_dec',
                    'type'  => 'textarea',
                    'title' => esc_html__('Widget Description', 'rezilla'),
                    'default'  => esc_html__('Add widgets here', 'rezilla'),
                    'subtitle' => esc_html__('Add Widget Description Here', 'rezilla'),
                ),
                array(
                    'id'    => 'rezilla_Gwidget_before',
                    'type'  => 'text',
                    'title' => esc_html__('Widget Before', 'rezilla'),
                    'default'  => '<section id="%1$s" class="widget %2$s">',
                    'subtitle' => esc_html__('Add Widget Before HTML Code', 'rezilla'),
                ),
                array(
                    'id'    => 'rezilla_Gwidget_after',
                    'type'  => 'text',
                    'title' => esc_html__('Widget After', 'rezilla'),
                    'default'  => '</section>',
                    'subtitle' => esc_html__('Add Widget After HTML Code', 'rezilla'),
                ),
                array(
                    'id'    => 'rezilla_Gwidget_title_before',
                    'type'  => 'text',
                    'title' => esc_html__('Widget Title Before', 'rezilla'),
                    'default'  => '<h2 class="widget-title">',
                    'subtitle' => esc_html__('Add Widget Title Before HTML Code', 'rezilla'),
                ),
                array(
                    'id'    => 'rezilla_Gwidget_title_after',
                    'type'  => 'text',
                    'title' => esc_html__('Widget Title After', 'rezilla'),
                    'default'  => '</h2>',
                    'subtitle' => esc_html__('Add Widget Title After HTML Code', 'rezilla'),
                ),
            ),
        ),
    )
));