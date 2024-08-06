<?php

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//
// Metabox of the PAGE
// Set a unique slug-like ID
//
$postaudio = 'rezilla_postmeta_audio';

//
// Create a metabox
//
CSF::createMetabox( $postaudio, array(
    'title'        => esc_html('Post Format Audio','rezilla'),
    'post_type'    => array( 'post' ),
    'post_formats' => 'audio',
) );

//
// Create a section
//
CSF::createSection( $postaudio, array(
    'title'  => esc_html__( 'Add Audio Link ', 'rezilla' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'       => 'rezilla_post_audio',
            'type'     => 'text',
            'title'    => esc_html__( 'Audio Link', 'rezilla' ),
            'subtitle' => esc_html__( 'Add Post Audio Link here', 'rezilla' ),
            'default'  => 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/816955441&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true'
        ),
    ),
) );