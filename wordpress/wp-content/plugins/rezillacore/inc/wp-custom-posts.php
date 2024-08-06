<?php 

if ( !function_exists( 'rezilla_options' ) ) {
    function rezilla_options( $option = '', $default = null ) {
        $defaults = rezilla_default_theme_options();
        $options = get_option( 'rezilla_Theme_Option' );
        $default = ( !isset( $default ) && isset( $defaults[$option] ) ) ? $defaults[$option] : $default;
        return ( isset( $options[$option] ) ) ? $options[$option] : $default;
    }
}
add_action( 'init', 'rezilla_custom_post_type' );
function rezilla_custom_post_type() {
    register_post_type( 'rezilla_team',
        array(
            'labels' => array(
                'name' => esc_html__('Team','rezillacore'),
                'singular_name' => esc_html__('Team','rezillacore'),
            ),
            'show_in_rest'  => true,
            'supports'      => array('title','thumbnail', 'page-attributes','editor','excerpt'),
            'menu_icon'     => esc_attr__('dashicons-admin-users','rezillacore'),
            'public'        => true,
            'rewrite'               => array(
                'slug'              => rezilla_options('rezilla_team_custom_slug'), 
                'with_front'        => true 
            )
        )
    );
}