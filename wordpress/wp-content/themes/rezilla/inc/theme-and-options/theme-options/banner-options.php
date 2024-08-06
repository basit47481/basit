<?php

//Banner Options
CSF::createSection($rezillaThemeOption, array(
    'parent' => 'rezilla_page_options',
    'title'  => esc_html__('Banner / Breadcrumb Area', 'rezilla'),
    'icon'   => 'fa fa-flag',
    'fields' => array(
        array(
            'id'                    => 'rezilla_banner_default_options',
            'type'                  => 'background',
            'title'                 => esc_html__('Banner Background', 'rezilla'),
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
            'output'                => '.breadcroumb-area',
            'subtitle'              => esc_html__('Select banner default properties for all page / post. You can override this settings on individual page / post.', 'rezilla'),
            'desc'                  => esc_html__('If you use gradient background color (Second Color) then background image will not working. Gradient background priority is higher then background image', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_breadcrumb_normal_color',
            'type'     => 'color',
            'title'    => esc_html__('Breadcrumb Text Color', 'rezilla'),
            'output'   => '.breadcroumn-contnt .brea-title',
            'subtitle' => esc_html__('Breadcrumb Text Color', 'rezilla'),
            'desc'     => esc_html__('Select breadcrumb text color.', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_breadcrumb_link_color',
            'type'     => 'link_color',
            'title'    => esc_html__('Breadcrumb Link Color', 'rezilla'),
            'output'   => array('.bre-sub span a span'),
            'subtitle' => esc_html__('Breadcrumb Link color', 'rezilla'),
            'desc'     => esc_html__('Select breadcrumb link and link hover color.', 'rezilla'),
        ),
        array(
            'id'          => 'rezilla_breadcrumb_spacing',
            'type'        => 'spacing',
            'title'       => esc_html__('Breadcrumb Spacing', 'rezilla'),
            'subtitle'       => esc_html__('Add Breadcrumb Content Spacing', 'rezilla'),
            'output'      => '.breadcroumb-area',
            'output_mode' => 'padding', // or margin, relative
        ),
        array(
            'id'          => 'rezilla_breadcrumb_select_html',
            'type'        => 'select',
            'title'       => esc_html__('HTML Tag', 'rezilla'),
            'subtitle'    => esc_html__( 'Select Title HTML Tag', 'rezilla'),
            'placeholder' => esc_html__( 'Select an option','rezilla'),
            'options'     => array(
              'h1'  => esc_html__( 'H1','rezilla'),
              'h2'  => esc_html__( 'H2','rezilla'),
              'h3'  => esc_html__( 'H3','rezilla'),
              'h4'  => esc_html__( 'H4','rezilla'),
              'h5'  => esc_html__( 'H5','rezilla'),
              'h6'  => esc_html__( 'H6','rezilla'),
            ),
            'default'     => 'h2'
        ),
		array(
		  'id'         => 'rezilla_breadcrumb_align',
		  'type'       => 'button_set',
		  'title'      => esc_html__('Alignment', 'rezilla'),
		   'subtitle'       => esc_html__('Select Your Page Title Content Alignment', 'rezilla'),
		  'options'    => array(
			'rezilla-left'  => esc_html__('Left', 'rezilla'),
			'rezilla-center' => esc_html__('Center', 'rezilla'),
			'rezilla-right' => esc_html__('Right', 'rezilla'),
		  ),
		  'default'    => 'rezilla-left'
		),
    )
));