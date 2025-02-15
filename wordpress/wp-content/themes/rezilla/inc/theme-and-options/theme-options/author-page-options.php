<?php
//authors Options
CSF::createSection($rezillaThemeOption, array(
    'parent' => 'rezilla_page_options',
    'title'  => esc_html__('Author Page', 'rezilla'),
    'icon'   => 'fa fa-user',
    'fields' => array(
        array(
            'id'      => 'rezilla_authors_layout',
            'type'    => 'select',
            'title'   => esc_html__('authors Layout', 'rezilla'),
            'options' => array(
                'grid'          => esc_html__('Grid View', 'rezilla'),
                'list'          => esc_html__('List View', 'rezilla'),
            ),
            'default' => 'list',
            'desc'    => esc_html__('Select blog page layout.', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_authors_banner',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable authors Banner', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable authors page banner.', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_authors_pagination',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable authors Pagination', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable authors Pagination.', 'rezilla'),
        ),
        array(
            'id'     => 'rezilla_authors_banner_title_static_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Banner Static Title Color', 'rezilla' ),
            'output' => '.page-header .container h2.authors-title',
            'dependency' => array('rezilla_authors_banner', '==', true),
            'desc'        => esc_html__('Select banner Static title color.', 'rezilla'),
        ),
        array(
            'id'     => 'rezilla_authors_banner_title_color',
            'type'   => 'color',
            'title'  => esc_html__( 'Banner Title Color', 'rezilla' ),
            'output' => '.authors-title span',
            'dependency' => array('rezilla_authors_banner', '==', true),
            'desc'        => esc_html__('Select banner title color.', 'rezilla'),
        ),
        array(
            'type'    => 'notice',
            'style'   => 'success',
            'content' => esc_html__( 'Author Info Section for Author Page', 'rezilla' ),
        ),
        array(
            'id'      => 'rezilla_authors_info_text',
            'type'    => 'text',
            'title'   => esc_html__('Total Post Text', 'rezilla'),
            'subtitle'   => esc_html__('Add Author Info Text', 'rezilla'),
            'default' => esc_html__('Author Info', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_authors_image',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Author Image', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable Author Image.', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_authors_name',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Author Name', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable Author Name.', 'rezilla'),
        ),
        array(
            'id'      => 'rezilla_authors_namet',
            'type'    => 'text',
            'title'   => esc_html__('Name Text', 'rezilla'),
            'subtitle'   => esc_html__('Add Author Name Text', 'rezilla'),
            'default' => esc_html__('Name:', 'rezilla'),
            'dependency' => array('rezilla_authors_name', '==', true),
        ),
        array(
            'id'       => 'rezilla_authors_dname',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Author Dispaly Name', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable Author Dispaly Name.', 'rezilla'),
        ),
        array(
            'id'      => 'rezilla_authors_dnamet',
            'type'    => 'text',
            'title'   => esc_html__('Dispaly Name Text', 'rezilla'),
            'subtitle'   => esc_html__('Add Author Dispaly Name Text', 'rezilla'),
            'default' => esc_html__('Display:', 'rezilla'),
            'dependency' => array('rezilla_authors_dname', '==', true),
        ),

        array(
            'id'       => 'rezilla_authors_email',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Author Email', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable Author Email.', 'rezilla'),
        ),
        array(
            'id'      => 'rezilla_authors_emailt',
            'type'    => 'text',
            'title'   => esc_html__('Email Name Text', 'rezilla'),
            'subtitle'   => esc_html__('Add Author Email Name Text', 'rezilla'),
            'default' => esc_html__('Email:', 'rezilla'),
            'dependency' => array('rezilla_authors_email', '==', true),
        ),
        array(
            'id'       => 'rezilla_authors_website',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Author Website', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable Author Website.', 'rezilla'),
        ),
        array(
            'id'      => 'rezilla_authors_websitet',
            'type'    => 'text',
            'title'   => esc_html__('Website Text', 'rezilla'),
            'subtitle'   => esc_html__('Add Author Website Text', 'rezilla'),
            'default' => esc_html__('Website:', 'rezilla'),
            'dependency' => array('rezilla_authors_website', '==', true),
        ),
        array(
            'id'       => 'rezilla_authors_total_post',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Author Total Post', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable Author Total Post.', 'rezilla'),
        ),
        array(
            'id'      => 'rezilla_authors_total_postt',
            'type'    => 'text',
            'title'   => esc_html__('Total Post Text', 'rezilla'),
            'subtitle'   => esc_html__('Add Author Total Post Text', 'rezilla'),
            'default' => esc_html__('Total Post:', 'rezilla'),
            'dependency' => array('rezilla_authors_total_post', '==', true),
        ),
        array(
            'id'       => 'rezilla_authors_dec',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Author Description', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable Author Description.', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_authors_social',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Author Social', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Enable or disable Author Social.', 'rezilla'),
        ),
    )
));