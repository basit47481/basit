<?php
/**
 * rezilla functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rezilla
 */

$rezilla_theme_data = wp_get_theme();
/*
 * Define theme version
 */
define('REZILLA_VERSION', (WP_DEBUG) ? time() : $rezilla_theme_data->get('Version'));
// Inc folder directory
define('REZILLA_INC_DIR', get_template_directory() . '/inc/');

// Theme Default Setup
require_once REZILLA_INC_DIR . 'theme-setup.php';

//  Register widget area
require_once REZILLA_INC_DIR . 'widget-area-ini.php';
//  Comments Template
require_once REZILLA_INC_DIR . 'comments-template.php';
/**
 * TGM Plugin 
 */
require_once REZILLA_INC_DIR . 'plugins-activation.php';
//  Script and Css Load
require_once REZILLA_INC_DIR . 'css-and-js.php';

/** Implement the Custom Header feature.*/
require_once REZILLA_INC_DIR . 'custom-header.php';

/** Custom template tags for this theme. */
require_once REZILLA_INC_DIR . 'template-tags.php';

/** Functions which enhance the theme by hooking into WordPress */
require_once REZILLA_INC_DIR . 'template-functions.php';
require_once REZILLA_INC_DIR . 'rezilla-default-options.php';
require_once REZILLA_INC_DIR . 'nav-menu-walker.php';

/** Customizer additions. */
require_once REZILLA_INC_DIR . 'customizer.php';

if( class_exists( 'CSF' ) ) {
	require_once REZILLA_INC_DIR . 'theme-and-options/metabox-and-options.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

add_filter('nav_menu_css_class' , 'rezilla_megamenu_class' , 10 , 2);
function rezilla_megamenu_class($classes, $item){
	$navmega = get_post_meta( $item->ID, 'rezilla_navmeta', true );
    if( in_array('menu-item-has-children', $classes) && !empty($navmega) ){
		if(!empty($navmega['rezilla_nav_megamenu_show'] == true )){
			$megamenu = 'mega ';
		}else{
			$megamenu = 'no-mega ';
		}
        $classes[] = $megamenu. $navmega['rezilla_nav_mmenu_column'];
    }
    return $classes;
}