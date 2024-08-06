<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access directly.

// Blog Post

CSF::createWidget( 'rezilla_blog_post_widget', array(
    'title'       => esc_html__( 'Rezilla Post With Thumbnail', 'rezillacore' ),
    'classname'   => 'footer-widget-post-with-thum',
    'description' => esc_html__( 'Add your Contact Info', 'rezillacore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'rezillacore' ),
        ),
        array(
            'id'          => 'rezilla_widget_blog_position',
            'type'        => 'select',
            'title'       => esc_html__( 'Select Options', 'rezillacore' ),
            'options'     => array(
              'ASC'  => esc_html__( 'ASC', 'rezillacore' ),
              'DESC'  => esc_html__( 'DESC', 'rezillacore' ),
            ),
            'default'     => 'ASC'
        ),
        array(
            'id'      => 'rezilla_widget_blog_number',
            'type'    => 'number',
            'title'   => esc_html__( 'Show Post', 'rezillacore' ),
            'default' => 2,
        ),
        array(
            'id'      => 'rezilla_widget_blog_show_meta',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Meta', 'rezillacore' ),
            'default' => true,
        ),
        array(
            'id'      => 'rezilla_widget_blog_show_image',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Image', 'rezillacore' ),
            'default' => true,
        ),
        array(
            'id'      => 'rezilla_widget_blog_text_limit',
            'type'    => 'number',
            'title'   => esc_html__( 'Title Text Limit', 'rezillacore' ),
            'default' => 6,
        ),
    ),
) );

// OutPut

if ( !function_exists( 'rezilla_blog_post_widget' ) ) {
    function rezilla_blog_post_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        if ( !empty( $instance['title'] ) ) {
            echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
        }
        ?>
        <ul class="rezilla-widget-post-thum">
            <?php
            $post_q = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => $instance['rezilla_widget_blog_number'],
            'order'          => $instance['rezilla_widget_blog_position'],
             ) );
            if ( $post_q->have_posts() ):
            while ( $post_q->have_posts() ):
                $post_q->the_post();
                ?>
		        <li>
                    <?php if ( !empty( $instance['rezilla_widget_blog_show_image'] == true ) ) {
                        the_post_thumbnail( 'thumbnail' );
                    }?>

                    <div class="rezilla-widget-post-thum-content">
                        <h6><a class="recent-post-title" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo wp_trim_words( get_the_title(), $instance['rezilla_widget_blog_text_limit'] ); ?></a></h6>
                        <?php if ( !empty( $instance['rezilla_widget_blog_show_meta'] == true ) ) : ?>
                        <div class="recent-widget-date">
                            <?php echo get_the_date() ?>
                        </div>
                        <?php endif; ?>
                    </div><!-- /.footer-widget__post-content -->
		        </li>
			<?php endwhile;endif;?>
        </ul>
        <?php
echo wp_kses_post( $args['after_widget'] );
    }
}
