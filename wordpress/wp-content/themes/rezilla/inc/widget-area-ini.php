<?php 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rezilla_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'rezilla' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'rezilla' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);
	if ( class_exists( 'WooCommerce' ) ) {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Shop Sidebar', 'rezilla' ),
			'id'            => 'rezilla-shop',
			'description'   => esc_html__( 'Add widgets here.', 'rezilla' ),
			'before_widget' => '<section id="%1$s" class="woo-widgets widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		),
	);}
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer One', 'rezilla' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'rezilla' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widtet %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		),
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Two', 'rezilla' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'rezilla' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widtet %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		),
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Three', 'rezilla' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'rezilla' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widtet %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		),
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Four', 'rezilla' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'rezilla' ),
			'before_widget' => '<section id="%1$s" class="widget footer-widtet %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	
	$Gwidgets = rezilla_options('rezilla_Gwidget_grups');
	if( rezilla_options('rezilla_Gwidget_enable') == true && !empty($Gwidgets) ){
		foreach($Gwidgets as $Gwidget){
			$unique = rand(1241, 3256);
			register_sidebar(
				array(
					'name'          => esc_html($Gwidget['rezilla_Gwidget_name']),
					'id'            => $Gwidget['rezilla_Gwidget_ids'],
					'description'   => esc_html($Gwidget['rezilla_Gwidget_dec']),
					'before_widget' => wp_kses_post($Gwidget['rezilla_Gwidget_before']),
					'after_widget'  => wp_kses_post($Gwidget['rezilla_Gwidget_after']),
					'before_title'  => wp_kses_post($Gwidget['rezilla_Gwidget_title_before']),
					'after_title'   => wp_kses_post($Gwidget['rezilla_Gwidget_title_after']),
				),
			);
		}
	}

}
add_action( 'widgets_init', 'rezilla_widgets_init' );
?>