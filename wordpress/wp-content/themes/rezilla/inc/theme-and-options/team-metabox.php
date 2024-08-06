<?php

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//
// Metabox of the PAGE
// Set a unique slug-like ID
//
$teammeta = 'rezilla_teammeta';

//
// Create a metabox
//
CSF::createMetabox( $teammeta, array(
    'title'        => esc_html__( 'Team Options', 'rezilla' ),
    'post_type'    => array( 'rezilla_team' ),
    'show_restore' => true,
) );

//
// Create a section
//
CSF::createSection( $teammeta, array(
    'title'  => esc_html__( 'Information', 'rezilla' ),
    'icon'  => 'fa fa-long-arrow-right',
    'fields' => array(
        array(
            'id'       => 'rezilla_team_stitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Designation', 'rezilla' ),
            'subtitle' => esc_html__( 'Add Team Designation here', 'rezilla' ),
            'default'  => esc_html__( 'Software Engineer', 'rezilla' ),
        ),
        array(
            'id'       => 'rezilla_team_info',
            'type'     => 'group',
            'title'    => esc_html__( 'Team Info', 'rezilla' ),
            'subtitle' => esc_html__( 'Add Member Info', 'rezilla' ),
            'fields'   => array(
                array(
                    'id'       => 'rezilla_team_info_label',
                    'type'     => 'text',
                    'title'    => esc_html__( 'label', 'rezilla' ),
                    'subtitle' => esc_html__( 'Add Info label Name', 'rezilla' ),
                ),
                array(
                    'id'       => 'rezilla_team_info_text',
                    'type'     => 'wp_editor',
                    'title'    => esc_html__( 'Add Info', 'rezilla' ),
                    'subtitle' => esc_html__( 'Add Info Here', 'rezilla' ),
                ),
            ),
            'default'   => array(
              array(
                'rezilla_team_info_label'  => esc_html__('Position:','rezilla'),
                'rezilla_team_info_text'   => esc_html__('Claims President','rezilla'),
              ),
              array(
                'rezilla_team_info_label'  => esc_html__('Department:','rezilla'),
                'rezilla_team_info_text'   => esc_html__('Personal Products','rezilla'),
              ),
              array(
                'rezilla_team_info_label'  => esc_html__('Experience:','rezilla'),
                'rezilla_team_info_text'   => esc_html__('10 Years','rezilla'),
              ),
              array(
                'rezilla_team_info_label'  => esc_html__('Email:','rezilla'),
                'rezilla_team_info_text'   => esc_html__('example@example.com','rezilla'),
              ),
              array(
                'rezilla_team_info_label'  => esc_html__('Phone:','rezilla'),
                'rezilla_team_info_text'   => esc_html__('+1 800 127 86 54','rezilla'),
              ),
              array(
                'rezilla_team_info_label'  => esc_html__('Fax:','rezilla'),
                'rezilla_team_info_text'   => esc_html__('+1 800 445 99 12','rezilla'),
              ),
            ),
        ),
        array(
            'id'          => 'rezilla_team_after_color',
            'type'        => 'color',
            'title'       => esc_html__( 'After Color', 'rezilla' ),
            'subtitle'    => esc_html__( 'Add After Color for Team Image', 'rezilla' ),
            'output'      => '.team-featured-img:after',
            'output_mode' => 'background-color',
        ),
    ),
) );

CSF::createSection( $teammeta, array(
    'title'  => esc_html__( 'Social Info', 'rezilla' ),
    'icon'  => 'fa fa-long-arrow-right',
    'fields' => array(
        array(
            'id'       => 'rezilla_team_socials',
            'type'     => 'group',
            'title'    => esc_html__( 'Team Socials link', 'rezilla' ),
            'subtitle' => esc_html__( 'Add Social Info', 'rezilla' ),
            'fields'   => array(
                array(
                    'id'       => 'rezilla_team_social_label',
                    'type'     => 'text',
                    'title'    => esc_html__( 'label', 'rezilla' ),
                    'subtitle' => esc_html__( 'Add Social label Name', 'rezilla' ),
                ),
                array(
                    'id'       => 'rezilla_teams_socials_icon',
                    'type'     => 'icon',
                    'title'    => esc_html__( 'Icon', 'rezilla' ),
                    'subtitle' => esc_html__( 'Add Social Icon', 'rezilla' ),
                    'default'  => 'fa fa-facebook',
                ),
                array(
                    'id'       => 'rezilla_team_social_link',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Link', 'rezilla' ),
                    'subtitle' => esc_html__( 'Add Social Link', 'rezilla' ),
                ),
            ),
            'default'   => array(
              array(
                'rezilla_team_social_label'  => esc_html__('Facebook','rezilla'),
                'rezilla_teams_socials_icon' => 'fab fa-facebook-f',
                'rezilla_team_social_link'   => 'facebook.com',
              ),
              array(
                'rezilla_team_social_label'  => esc_html__('Twitter','rezilla'),
                'rezilla_teams_socials_icon' => 'fab fa-twitter',
                'rezilla_team_social_link'   => 'twitter.com',
              ),
              array(
                'rezilla_team_social_label'  => esc_html__('Linkedin','rezilla'),
                'rezilla_teams_socials_icon' => 'fab fa-linkedin-in',
                'rezilla_team_social_link'   => 'linkedin.com',
              ),
              array(
                'rezilla_team_social_label'  => esc_html__('Instagram','rezilla'),
                'rezilla_teams_socials_icon' => 'fab fa-instagram',
                'rezilla_team_social_link'   => 'instagram.com',
              ),
            ),
        ),
    ),
) );