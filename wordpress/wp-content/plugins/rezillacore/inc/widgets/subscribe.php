<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access directly.

CSF::createWidget( 'rezilla_newsletter_widget', array(
    'title'       => esc_html__( 'Rezilla Newletter Widget', 'rezillacore' ),
    'description' => esc_html__( 'Add Newsletter Info', 'rezillacore' ),
    'fields'      => array(
        array(
            'id'      => 'title',
            'type'    => 'text',
            'default' => esc_html__( 'Newsletter', 'rezillacore' ),
            'title'   => esc_html__( 'Title', 'rezillacore' ),
        ),
        array(
            'id'      => 'newsletter_dec',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Sort Description', 'rezillacore' ),
            'desc'    => esc_html__( 'Add Sort Description', 'rezillacore' ),
            'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing', 'rezillacore' ),
        ),
        array(
            'id'          => 'select_newsletter',
            'type'        => 'select',
            'title'       => esc_html__( 'Select Type', 'rezillacore' ),
            'placeholder' => esc_html__( 'Select an option', 'rezillacore' ),
            'options'     => array(
                '1' => esc_html__( 'Shortcode form Plugin', 'rezillacore' ),
                '2' => esc_html__( 'Add Link', 'rezillacore' ),
            ),
            'default'     => '2',
        ),
        array(
            'id'         => 'newsletter_shortcode',
            'type'       => 'textarea',
            'title'      => esc_html__( 'Add Shortcode', 'rezillacore' ),
            'desc'       => esc_html__( 'Add Shortcode from Mailchip wordpress Plugin', 'rezillacore' ),
            'dependency' => array( 'select_newsletter', '==', '1' ),
        ),
        array(
            'id'         => 'newsletter_link',
            'type'       => 'textarea',
            'title'      => esc_html__( 'Add Link', 'rezillacore' ),
            'desc'       => esc_html__( 'Add Newsletter Link from your Account', 'rezillacore' ),
            'dependency' => array( 'select_newsletter', '==', '2' ),
        ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'CSS Options', 'rezillacore' ),
        ),
        array(
            'id'          => 'newsletter_bg',
            'type'        => 'color',
            'title'       =>esc_html__( 'Background', 'rezillacore' ),
            'output_mode' => 'background-color'
        ),
    ),
) );

// OutPut
if ( !function_exists( 'rezilla_newsletter_widget' ) ) {
    function rezilla_newsletter_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        echo '<div class="subscribe-widget" style="background:'.$instance['newsletter_bg'].'">';
        if ( !empty( $instance['title'] ) ) {
            echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
        }
        ?>
        <div class="company-subscribe-widget">
            <?php if ( !empty( $instance['newsletter_dec'] ) ): ?>
                <p>
                    <?php echo esc_html( $instance['newsletter_dec'] ); ?>
                </p>
            <?php endif;?>
            <?php
                if ( $instance['select_newsletter'] == '1' ) {
            ?>
                <div class="subscribe-form">
                    <?php echo do_shortcode( $instance['newsletter_shortcode'] ); ?>
                </div>
            <?php
            } else {
            ?>
            <div class="subscribe-form">
                <form action="<?php echo esc_url( $instance['newsletter_link'] ) ?>" method="post">
                    <div class="mc4wp-form-fields">
                        <input type="email" name="EMAIL" placeholder="<?php esc_attr_e('Your Email Address','rezillacore'); ?>" required="" />
                        <button value="submit"><i class="fa fa-location-arrow"></i></button>
                    </div>
                </form>
            </div>
            <?php
            }
            ?>
        </div>
        <?php
        echo '</div>';
        echo wp_kses_post( $args['after_widget'] );
    }
}