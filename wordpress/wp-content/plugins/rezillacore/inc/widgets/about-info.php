<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access directly.

CSF::createWidget( 'rezilla_about_info_widget', array(
    'title'       => esc_html__( 'Rezilla About Widget', 'rezillacore' ),
    'classname'   => 'rezilla-banner-widgets',
    'description' => esc_html__( 'Add Your About Info', 'rezillacore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'rezillacore' ),
            'default' => __('Thomah William','rezillacore'),
        ),
        array(
            'id'           => 'rezilla_about_widget_img',
            'type'         => 'upload',
            'title'        => esc_html__( 'Author Image', 'rezillacore' ),
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => esc_html__( 'Add Image', 'rezillacore' ),
            'remove_title' => esc_html__( 'Remove Image', 'rezillacore' ),
        ),
        array(
            'id'    => 'rezilla_about_widget_dec',
            'type'  => 'textarea',
            'title' => esc_html__( 'Content', 'rezillacore' ),
            'default' => __('It is a long establshed fact that a reader be distracted by the readable content page when looking at its layout.','rezillacore'),
        ),
        array(
            'id'        => 'rezilla_about_socials',
            'type'      => 'group',
            'title'     => esc_html__( 'Social Info', 'rezillacore' ),
            'fields'    => array(
              array(
                'id'    => 'rezilla_about_social_label',
                'type'  => 'text',
                'title' => esc_html__( 'label', 'rezillacore' ),
              ),
              array(
                'id'      => 'rezilla_about_social_icon',
                'type'    => 'icon',
                'title'   => esc_html__( 'Icon', 'rezillacore' ),
                'default' => 'fab fa-facebook-f'
              ),
              array(
                'id'       => 'rezilla_about_social_link',
                'type'     => 'link',
                'title'    => esc_html__( 'Link', 'rezillacore' ),
                'default'  => array(
                  'url'    => 'http://facebook.com',
                  'target' => '_blank'
                ),
              ),
            ),
        ),
    ),
) );

// OutPut
if ( !function_exists( 'rezilla_about_info_widget' ) ) {
    function rezilla_about_info_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        ?>
            <div class="rezilla-widget-about-wrapper">
                <div class="rezilla-about-widget-info">
                    <?php if(!empty($instance['rezilla_about_widget_img'])){
                        echo '<div class="rezilla-about-widget-img"><img src="'.esc_url( $instance['rezilla_about_widget_img'] ) .'"></div>';
                    } ?>
                    <?php if ( !empty( $instance['title'] ) ) {
                        echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
                    } ?>
                    <div class="rezilla-about-widget-doc">
                        <?php echo wp_kses_post($instance['rezilla_about_widget_dec']); ?>
                    </div>
                    <div class="rezilla-about-widget-social">
                        <ul>
                            <?php foreach($instance['rezilla_about_socials'] as $social ) : ?>
                            <li><a target="<?php echo esc_attr($social['rezilla_about_social_link']['target']); ?>" href="<?php echo esc_url($social['rezilla_about_social_link']['url']); ?>" title="<?php echo esc_attr($social['rezilla_about_social_label']) ?>"><i class="<?php echo esc_attr($social['rezilla_about_social_icon']); ?>"></i></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
        echo wp_kses_post( $args['after_widget'] );
    }
}

