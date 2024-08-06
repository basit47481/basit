<?php
// Create typography section
CSF::createSection( $rezillaThemeOption, array(
    'title'  => esc_html__( 'Typography', 'rezilla' ),
    'id'     => 'rezilla_typography_options',
    'icon'   => 'fa fa-text-width',
    'fields' => array(

        array(
            'id'           => 'rezilla_body_typo',
            'type'         => 'typography',
            'title'        => esc_html__( 'Body', 'rezilla' ),
            'output'       => 'body',
            'default'      => array(
                'font-family'  => 'Inter',
                'font-size'    => '16',
                'unit'         => 'px',
                'font-weight'  => '400',
                'extra-styles' => array( '300', '400', '500', '600', '700', '800', '900', '300i', '400i', '500i', '600i', '700i', '800i', '900i' ),
            ),
            'extra_styles' => true,
            'subtitle'     => esc_html__( 'Set body typography.', 'rezilla' ),
        ),

        array(
            'id'           => 'rezilla_h1_typo',
            'type'         => 'typography',
            'title'        => esc_html__( 'Heading One', 'rezilla' ),
            'output'       => 'h1',
            'extra_styles' => true,
            'default'      => array(
                'font-family' => 'Rubik',
                'unit'        => 'px',
            ),
            'subtitle'     => esc_html__( 'Set heading one typography.', 'rezilla' ),
        ),

        array(
            'id'           => 'rezilla_h2_typo',
            'type'         => 'typography',
            'title'        => esc_html__( 'Heading Two', 'rezilla' ),
            'output'       => 'h2',
            'extra_styles' => true,
            'default'      => array(
                'font-family' => 'Rubik',
                'unit'        => 'px',
            ),
            'subtitle'     => esc_html__( 'Set heading two typography.', 'rezilla' ),
        ),

        array(
            'id'           => 'rezilla_h3_typo',
            'type'         => 'typography',
            'title'        => esc_html__( 'Heading Three', 'rezilla' ),
            'output'       => 'h3',
            'default'      => array(
                'font-family' => 'Rubik',
                'unit'        => 'px',
            ),
            'extra_styles' => true,
            'subtitle'     => esc_html__( 'Set heading three typography.', 'rezilla' ),
        ),

        array(
            'id'           => 'rezilla_h4_typo',
            'type'         => 'typography',
            'title'        => esc_html__( 'Heading Four', 'rezilla' ),
            'output'       => 'h4',
            'default'      => array(
                'font-family' => 'Rubik',
                'unit'        => 'px',
            ),
            'extra_styles' => true,
            'subtitle'     => esc_html__( 'Set heading four typography.', 'rezilla' ),
        ),

        array(
            'id'           => 'rezilla_h5_typo',
            'type'         => 'typography',
            'title'        => esc_html__( 'Heading Five', 'rezilla' ),
            'output'       => 'h5',
            'default'      => array(
                'font-family' => 'Rubik',
                'unit'        => 'px',
            ),
            'extra_styles' => true,
            'subtitle'     => esc_html__( 'Set heading five typography.', 'rezilla' ),
        ),

        array(
            'id'           => 'rezilla_h6_typo',
            'type'         => 'typography',
            'title'        => esc_html__( 'Heading Six', 'rezilla' ),
            'output'       => 'h6',
            'default'      => array(
                'font-family' => 'Rubik',
                'unit'        => 'px',
            ),
            'extra_styles' => true,
            'subtitle'     => esc_html__( 'Set heading six typography.', 'rezilla' ),
        ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Header Menu Typography', 'rezilla' ),
        ),
        array(
            'id'           => 'rezilla_header_menu_typo',
            'type'         => 'typography',
            'title'        => esc_html__( 'Header Menu', 'rezilla' ),
            'output'       => '.main-navigation ul li a',
            'extra_styles' => true,
            'color' => false,
            'subtitle'     => esc_html__( 'Set Header Nav Menu typography.', 'rezilla' ),
        ),
        array(
            'id'           => 'rezilla_header_smenu_typo',
            'type'         => 'typography',
            'title'        => esc_html__( 'Header Sub Menu', 'rezilla' ),
            'output'       => '.main-navigation ul li ul li a',
            'extra_styles' => true,
            'color' => false,
            'subtitle'     => esc_html__( 'Set Header Nav Sub Menu typography.', 'rezilla' ),
        ),
        array(
            'id'           => 'rezilla_header_megamenu_typo',
            'type'         => 'typography',
            'title'        => esc_html__( 'Header Mega Menu', 'rezilla' ),
            'output'       => '.stellarnav.desktop li.mega li li a',
            'extra_styles' => true,
            'color' => false,
            'subtitle'     => esc_html__( 'Set Header Nav Mega Menu typography.', 'rezilla' ),
        ),
    ),
) );
// End typography section