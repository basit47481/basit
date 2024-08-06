<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access directly.
// Contact info

CSF::createWidget( 'rezilla_company_info_widget', array(
    'title'       => esc_html__( 'Rezilla Company Info', 'rezillacore' ),
    'classname'   => 'rezilla_company_info_widget',
    'description' => esc_html__( 'Add Your Company Info', 'rezillacore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'rezillacore' ),
        ),
        array(
            'id'      => 'cinfo_img_enable',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Logo', 'rezillacore' ),
            'default' => true,
        ),

        array(
            'id'          => 'cinfo_img',
            'type'        => 'media',
            'title'       => esc_html__( 'Upload Logo', 'rezillacore' ),
            'library'     => 'image',
            'preview'     => true,
            'placeholder' => 'http://',
            'dependency'  => array( 'cinfo_img_enable', '==', 'true' ), // check for true/false by field id
        ),
        array(
            'id'      => 'rezilla_conpany_info_dec',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Content', 'rezillacore' ),
            'default' => esc_html__( 'Lorem ipsum dolor sit amet elit consectetur adipisicing sed do eiusmod tempor incididunt et dolore elit labore', 'rezillacore' ),
        ),
        array(
            'id'      => 'rezilla_company_social_group',
            'type'    => 'group',
            'title'   => esc_html__( 'Add Social Information', 'rezillacore' ),
            'fields'  => array(
                array(
                    'id'    => 'rezilla_cosocial_link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Link', 'rezillacore' ),
                ),
                array(
                    'id'    => 'rezilla_coinfo_gicon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Icon', 'rezillacore' ),
                ),
            ),
            'default' => array(
                array(
                    'rezilla_cosocial_link' => 'facebook.com',
                    'rezilla_coinfo_gicon'  => 'fab fa-facebook',
                ),
                array(
                    'rezilla_cosocial_link' => 'twitter.com',
                    'rezilla_coinfo_gicon'  => 'fab fa-twitter',
                ),
                array(
                    'rezilla_cosocial_link' => 'linkedin.com',
                    'rezilla_coinfo_gicon'  => 'fab fa-linkedin',
                ),
                array(
                    'rezilla_cosocial_link' => 'instagram.com',
                    'rezilla_coinfo_gicon'  => 'fab fa-instagram',
                ),
            ),
        ),
    ),
) );

// OutPut

if ( !function_exists( 'rezilla_company_info_widget' ) ) {
    function rezilla_company_info_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        ?>
        <?php
        if ( !empty( $instance['title'] ) ) {
            echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
        }?>
        <div class="company-info-widget">
            <?php if ( $instance['cinfo_img_enable'] == true ):  $logo = $instance['cinfo_img']; ?>
	            <div class="conpany-info-img">
	                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php esc_html_e( 'rezilla by Themepul', 'rezillacore' );?>">
	            </div>
	            <?php endif;?>
            <p><?php echo esc_html( $instance['rezilla_conpany_info_dec'] ); ?></p>
            <?php if ( !empty( $instance['rezilla_company_social_group'] ) ): ?>
            <div class="company-social-links">
                <ul>
                <?php foreach ( $instance['rezilla_company_social_group'] as $socials ): ?>
                    <li><a href="<?php echo esc_url( $socials['rezilla_cosocial_link']['url'] ); ?>"><i class="<?php echo esc_attr( $socials['rezilla_coinfo_gicon'] ); ?>"></i></a></li>
                <?php endforeach;?>
                </ul>
            </div>
            <?php endif;?>
        </div>
        <?php
        echo wp_kses_post( $args['after_widget'] );
    }
}