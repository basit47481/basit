<?php

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//
// Metabox of the PAGE
// Set a unique slug-like ID
//
$postgallery = 'rezilla_postmeta_gallery';

//
// Create a metabox
//
CSF::createMetabox( $postgallery, array(
    'title'        => esc_html('Post Format image Gallery','rezilla'),
    'post_type'    => array( 'post' ),
    'post_formats' => 'gallery',
) );

//
// Create a section
//
CSF::createSection( $postgallery, array(
    'title'  => esc_html__( 'Add Gallery Image', 'rezilla' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'          => 'rezilla_post_gallery',
            'type'        => 'gallery',
            'title'       => esc_html('Gallery','rezilla'),
            'add_title'   => esc_html('Add Image','rezilla'),
            'edit_title'  => esc_html('Edit Image','rezilla'),
            'clear_title' => esc_html('Remove Image','rezilla'),
        ),
    ),
) );