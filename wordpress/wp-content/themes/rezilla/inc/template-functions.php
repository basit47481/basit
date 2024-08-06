<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package rezilla
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rezilla_body_classes( $classes ) {
    // Adds a class of hfeed to non-singular pages.
    if ( !is_singular() ) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if ( !is_active_sidebar( 'sidebar' ) ) {
        $classes[] = 'no-sidebar';
    }
    //Check Elementor Page Builder Used or not
    $elementor_active = get_post_meta( get_the_ID(), '_elementor_edit_mode', true );

    if ( is_archive() ) {
        $classes[] = !!$elementor_active ? 'page-builder-not-used' : 'page-builder-not-used';
    } else {
        $classes[] = !!$elementor_active ? 'page-builder-used' : 'page-builder-not-used';
    }
    return $classes;
}
add_filter( 'body_class', 'rezilla_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function rezilla_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'rezilla_pingback_header' );

//Get excluded sidebar list
if ( !function_exists( 'rezilla_sidebars' ) ) {
    function rezilla_sidebars() {

        $options = array();
        // set ids of the registered sidebars for exclude
        $exclude = array( 'footer-1', 'footer-2', 'footer-3', 'footer-4' );

        global $wp_registered_sidebars;

        if ( !empty( $wp_registered_sidebars ) ) {
            foreach ( $wp_registered_sidebars as $sidebar ) {
                if ( !in_array( $sidebar['id'], $exclude ) ) {
                    $options[$sidebar['id']] = $sidebar['name'];
                }
            }
        }
        return $options;

    }
}

if ( !function_exists( 'rezilla_next_prev_post_link' ) ) {
    function rezilla_next_prev_post_link() {?>
        <div class="navigation rezilla-post-pagination">
            <?php
            the_post_navigation(
            array(
                    'prev_text' => '<span class="rezilla-nav-title">%title</span>',
                    'next_text' => '<span class="rezilla-nav-title">%title</span>',
                )
            );?>
        </div>
    <?php
    }
}

/*--------------------------------
GET COMMENT COUNT TEXT
----------------------------------*/
if ( !function_exists( 'rezilla_comment_count_text' ) ) {
    function rezilla_comment_count_text( $post_id ) {
        $comments_number = get_comments_number( $post_id );
        if ( $comments_number == 0 ) {
            $comment_text = esc_html__( 'No comment', 'rezilla' );
        } elseif ( $comments_number == 1 ) {
            $comment_text = esc_html__( 'One comment', 'rezilla' );
        } elseif ( $comments_number > 1 ) {
            $comment_text = $comments_number . esc_html__( ' Comments', 'rezilla' );
        }
        echo esc_html( $comment_text );
    }
}
/**
 * rezilla_move_comment_field_to_bottom() Remove cookie field and move comment field bottom.
 * @param  $fields array()
 * @return return comment form fields
 */
function rezilla_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    unset( $fields['cookies'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'rezilla_move_comment_field_to_bottom' );

if ( !function_exists( 'rezilla_comments_pagination' ) ) {
    function rezilla_comments_pagination() {
        the_comments_pagination( array(
            'screen_reader_text' => ' ',
            'prev_text'          => '<i class="fa fa-angle-left"></i>',
            'next_text'          => '<i class="fa fa-angle-right"></i>',
            'type'               => 'list',
            'mid_size'           => 1,
        ) );
    }
}

function rezilla_kses_allowed_html( $tags, $context ) {
    switch ( $context ) {
    case 'rezilla_allowed_html':
        $tags = array(
            'a'  => array(
                'class'  => array(),
                'href'   => array(),
                'rel'    => array(),
                'title'  => array(),
                'target' => array(),
            ),
            'abbr'  => array(
                'title' => array(),
            ),
            'b'  => array(),
            'blockquote'  => array(
                'cite' => array(),
            ),
            'cite'  => array(
                'title' => array(),
            ),
            'code'  => array(),
            'del'  => array(
                'datetime' => array(),
                'title'    => array(),
            ),
            'dd'  => array(),
            'div' => array(
                'class' => array(),
                'title' => array(),
                'style' => array(),
            ),
            'dl'  => array(),
            'dt'  => array(),
            'em'  => array(),
            'h1'  => array(),
            'h2'  => array(),
            'h3'  => array(),
            'h4'  => array(),
            'h5'  => array(),
            'h6'  => array(),
            'i'  => array(
                'class' => array(),
            ),
            'img'  => array(
                'alt'    => array(),
                'class'  => array(),
                'height' => array(),
                'src'    => array(),
                'width'  => array(),
            ),
            'li'  => array(
                'class' => array(),
            ),
            'ol'  => array(
                'class' => array(),
            ),
            'p'  => array(
                'class' => array(),
            ),
            'q'  => array(
                'cite'  => array(),
                'title' => array(),
            ),
            'span'  => array(
                'class' => array(),
                'title' => array(),
                'style' => array(),
            ),
            'iframe' => array(
                'width'       => array(),
                'height'      => array(),
                'scrolling'   => array(),
                'frameborder' => array(),
                'allow'       => array(),
                'src'         => array(),
            ),
            'strike'  => array(),
            'br'  => array(),
            'small'  => array(),
            'strong'  => array(),
            'ul' => array(
                'class' => array(),
            ),
        );
        return $tags;
    default:
        return $tags;
    }
}
add_filter( 'wp_kses_allowed_html', 'rezilla_kses_allowed_html', 10, 2 );
