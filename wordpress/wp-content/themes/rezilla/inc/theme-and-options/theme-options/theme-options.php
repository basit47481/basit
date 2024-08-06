<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
//
// Set a unique slug-like ID
//
$rezillaThemeOption = 'rezilla_Theme_Option';

//
// Create options
//
CSF::createOptions( $rezillaThemeOption, array(
    'framework_title' => wp_kses(
		sprintf(__("Rezilla Options <small>Version %s</small>", 'rezilla'), $rezilla_theme_data->get('Version')),
		array('small' => array())
	),
    'menu_title'      => esc_html__('Theme Options','rezilla'),
    'menu_slug'       => 'theme-options',
    'menu_type'       => 'submenu',
    'menu_parent'     => 'themes.php',
    'class'           => 'rezilla-theme-option-wrapper',
    'defaults'        => rezilla_default_theme_options(),
    'footer_credit'      => wp_kses(
		__( 'Developed by: <a target="_blank" href="https://themepul.com">ThemePul</a>', 'rezilla' ),
		array(
			'a'      => array(
				'href'   => array(),
				'target' => array()
			),
		)
	),
) );

require_once 'general-options.php';
require_once 'typography-options.php';
require_once 'header-options.php';
// Create layout and options section
CSF::createSection( $rezillaThemeOption, array(
    'title' => esc_html__( 'Layout & Options', 'rezilla' ),
    'id'    => 'rezilla_page_options',
    'icon'  => 'fa fa-calculator',
) );
require_once 'banner-options.php';
require_once 'blog-page-options.php';
require_once 'single-post-options.php';
require_once 'archive-page-options.php';
require_once 'author-page-options.php';
require_once 'search-page-options.php';
require_once 'error-page-options.php';
CSF::createSection( $rezillaThemeOption, array(
    'title' => esc_html__( 'Shop Options', 'rezilla' ),
    'id'    => 'rezilla_shop_options',
    'icon'  => 'fa fa-shopping-cart',
) );
require_once 'shop-options.php';
require_once 'single-shop-page.php';
require_once 'portfolio-options.php';
require_once 'team-options.php';
require_once 'footer-options.php';
require_once 'widgets-options.php';
CSF::createSection( $rezillaThemeOption, array(
    'title' => esc_html__( 'Code Editor', 'rezilla' ),
    'id'    => 'rezilla_code_editor_options',
    'icon'  => 'fa fa-code',
) );
CSF::createSection( $rezillaThemeOption, array(
    'parent' => 'rezilla_code_editor_options',
    'title'  => esc_html__( 'CSS Editor', 'rezilla' ),
    'icon'   => 'fa fa-pencil-square-o',
    'fields' => array(
        array(
            'id'       => 'rezilla_css_editor',
            'type'     => 'code_editor',
            'title'    => esc_html__( 'CSS Editor', 'rezilla' ),
            'settings' => array(
                'theme' => 'mbo',
                'mode'  => 'css',
            ),
        ),
    ),
) );

// Field: backup
//
CSF::createSection( $rezillaThemeOption, array(
    'title'       => esc_html__( 'Backup', 'rezilla' ),
    'icon'        => 'fas fa-shield-alt',
    'description' => esc_html__( 'Backup Theme Options all Data', 'rezilla' ),
    'fields'      => array(
        array(
            'type' => 'backup',
        ),
    ),
) );
