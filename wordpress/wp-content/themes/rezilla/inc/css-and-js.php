<?php 
/**
 * Enqueue scripts and styles.
 */
function rezilla_scripts() {
	global $wp_query;
	wp_enqueue_style('bootstrap', get_theme_file_uri('assets/bootstrap/bootstrap-min.css'), array(),  REZILLA_VERSION, 'all');
	wp_enqueue_style('bootstrap-rtl', get_theme_file_uri('assets/bootstrap/bootstrap-rtl-min.css'), array(),  REZILLA_VERSION, 'all');
	wp_enqueue_style('bootstrap-icons', get_theme_file_uri('assets/bootstrap/bootstrap-icons.css'), array(),  REZILLA_VERSION, 'all');
	wp_enqueue_style('magnific-popup', get_theme_file_uri('assets/popup/magnific-popup.css'), array(), REZILLA_VERSION , 'all');
	wp_enqueue_style('slick', get_theme_file_uri('assets/slick/slick.css'), array(), REZILLA_VERSION , 'all');
	wp_enqueue_style('rezilla-unitest', get_theme_file_uri('assets/css/unitest.css'), array(), REZILLA_VERSION , 'all');
	wp_enqueue_style('rezilla-theme', get_theme_file_uri('assets/css/theme.css'), array(), REZILLA_VERSION , 'all');
	wp_enqueue_style('stellarnav-min', get_theme_file_uri('assets/menu/stellarnav-min.css'), array(), REZILLA_VERSION , 'all');
	wp_enqueue_style('fontawesome-all', get_theme_file_uri('assets/css/fontawesome-all.css'), array(),  REZILLA_VERSION , 'all');
	wp_enqueue_style('rezilla-style', get_stylesheet_uri(), array(), REZILLA_VERSION, 'all');
	wp_style_add_data( 'rezilla-style', 'rtl', 'replace' );
	if( !class_exists( 'CSF' ) ) {
		wp_enqueue_style( 'rezilla-default-fonts', '//fonts.googleapis.com/css?family=Inter:wght@100;200;300;400;500;600;700;800;900|Rubik:300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,500;1,600', '', '1.0.0', 'screen' );
	}
	//Enqueue scripts.
	wp_enqueue_script('popper', get_theme_file_uri('assets/bootstrap/popper-min.js'), array(),  REZILLA_VERSION, true);
	wp_enqueue_script('bootstrap', get_theme_file_uri('assets/bootstrap/bootstrap-min.js'), array(), REZILLA_VERSION, true);
	wp_enqueue_script('jquery-magnific-popup', get_theme_file_uri('assets/popup/jquery-magnific-popup-min.js'), array('jquery'), REZILLA_VERSION , true);
	wp_enqueue_script('stellarnav-min', get_theme_file_uri('assets/menu/stellarnav-min.js'), array('jquery'), REZILLA_VERSION , true);
	wp_enqueue_script('slick-min', get_theme_file_uri('assets/slick/slick-min.js'), array(), REZILLA_VERSION , true);
	wp_enqueue_script('rezilla-theme', get_theme_file_uri('assets/js/theme.js'), array('jquery'), REZILLA_VERSION , true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rezilla_scripts' );
?>