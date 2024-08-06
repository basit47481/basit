<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$navmeta = 'rezilla_navmeta';

//
// Create menu options
//
CSF::createNavMenuOptions( $navmeta, array(
  'data_type' => 'serialize'
) );

CSF::createSection( $navmeta, array(
  'fields' => array(

    array(
      'id'    => 'rezilla_nav_megamenu_show',
      'type'  => 'switcher',
      'title' => esc_html__('Enable Mega menu', 'rezilla'),
      'label' => esc_html__('Enable this options if you need Mega Menu', 'rezilla'),
    ),

    array(
      'id'          => 'rezilla_nav_mmenu_column',
      'type'        => 'select',
      'title'       => esc_html__( 'Select Column', 'rezilla'),
      'subtitle'       => esc_html__( 'Select your Sub Menu Column Section', 'rezilla'),
      'placeholder' => esc_html__( 'Select an option', 'rezilla'),
      'default'     => '4',
      'options'     => array(
          'column_2'   => esc_html__( 'Column 2', 'rezilla'),
          'column_3'   => esc_html__( 'Column 3', 'rezilla'),
          'column_4'   => esc_html__( 'Column 4', 'rezilla'),
          'column_5'   => esc_html__( 'Column 5', 'rezilla'),
          'column_6'   => esc_html__( 'Column 6', 'rezilla'),
        ),
        'dependency' => array( 'rezilla_nav_megamenu_show', '==', 'true' ),
      ),
    )
) );
