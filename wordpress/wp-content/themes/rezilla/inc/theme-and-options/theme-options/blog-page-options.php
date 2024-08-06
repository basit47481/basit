<?php
//Blog Page Options
CSF::createSection($rezillaThemeOption, array(
    'parent' => 'rezilla_page_options',
    'title'  => esc_html__('Blog Page', 'rezilla'),
    'icon'   => 'fa fa-pencil-square-o',
    'fields' => array(
        array(
            'id'      => 'rezilla_blog_layout',
            'type'    => 'select',
            'title'   => esc_html__('Blog Layout', 'rezilla'),
            'options' => array(
                'grid'          => esc_html__('Grid Full', 'rezilla'),
                'grid-ls'       => esc_html__('Grid With Left Sidebar', 'rezilla'),
                'grid-rs'       => esc_html__('Grid With Right Sidebar', 'rezilla'),
                'left-sidebar'  => esc_html__('Left Sidebar', 'rezilla'),
                'right-sidebar' => esc_html__('Right Sidebar', 'rezilla'),
            ),
            'default' => 'right-sidebar',
            'desc'    => esc_html__('Select blog page layout.', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_blog_banner_enable',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Banner', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide / Show Banner.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_blog_title',
            'type'       => 'text',
            'title'      => esc_html__('Banner Title', 'rezilla'),
            'dependency' => array( 'rezilla_blog_banner_enable', '==', 'true' ),
            'desc'       => esc_html__('Type blog banner title here.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_blog_home_title',
            'type'       => 'text',
            'default'   => esc_html__('Rezilla', 'rezilla'),
            'title'      => esc_html__('Banner Home Text', 'rezilla'),
            'dependency' => array( 'rezilla_blog_banner_enable', '==', 'true' ),
            'desc'       => esc_html__('Type blog banner Home Text here.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_blog_home_stitle',
            'type'       => 'text',
            'title'      => esc_html__('Banner Home Sub Text', 'rezilla'),
            'dependency' => array( 'rezilla_blog_banner_enable', '==', 'true' ),
            'default'   => esc_html__('Blog Standard', 'rezilla'),
            'desc'       => esc_html__('Type blog banner Home Sub Text here.', 'rezilla'),
        ),
        array(
            'id'       => 'rezilla_post_author',
            'type'     => 'switcher',
            'title'    => esc_html__('Show Author Name', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide / Show post author name.', 'rezilla'),
        ),

        array(
            'id'       => 'rezilla_post_date',
            'type'     => 'switcher',
            'title'    => esc_html__('Show Post Date', 'rezilla'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide / Show post date.', 'rezilla'),
        ),

        array(
            'id'         => 'rezilla_cmnt_number',
            'type'       => 'switcher',
            'title'      => esc_html__('Show Comment Number', 'rezilla'),
            'default'    => true,
            'text_on'    => esc_html__('Yes', 'rezilla'),
            'text_off'   => esc_html__('No', 'rezilla'),
            'desc'       => esc_html__('Hide / Show post comment number.', 'rezilla'),
        ),

        array(
            'id'         => 'rezilla_show_category',
            'type'       => 'switcher',
            'title'      => esc_html__('Show Category Name', 'rezilla'),
            'default'    => false,
            'text_on'    => esc_html__('Yes', 'rezilla'),
            'text_off'   => esc_html__('No', 'rezilla'),
            'desc'       => esc_html__('Hide / Show post category name.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_share_blog',
            'type'       => 'switcher',
            'title'      => esc_html__('Show Share Icon', 'rezilla'),
            'default'    => false,
            'text_on'    => esc_html__('Yes', 'rezilla'),
            'text_off'   => esc_html__('No', 'rezilla'),
            'desc'       => esc_html__('Hide / Show post category name.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_show_pagination',
            'type'       => 'switcher',
            'title'      => esc_html__('Show Pagination', 'rezilla'),
            'default'    => true,
            'text_on'    => esc_html__('Yes', 'rezilla'),
            'text_off'   => esc_html__('No', 'rezilla'),
            'desc'       => esc_html__('Hide / Show post category name.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_show_readmore',
            'type'       => 'switcher',
            'title'      => esc_html__('Show Readmore Button', 'rezilla'),
            'default'    => false,
            'text_on'    => esc_html__('Yes', 'rezilla'),
            'text_off'   => esc_html__('No', 'rezilla'),
            'desc'       => esc_html__('Hide / Show post category name.', 'rezilla'),
        ),
        array(
            'id'         => 'rezilla_blog_read_text',
            'type'       => 'text',
            'default'   => esc_html__('Read More', 'rezilla'),
            'title'      => esc_html__('Read More Text', 'rezilla'),
            'dependency' => array( 'rezilla_show_readmore', '==', 'true' ),
            'desc'       => esc_html__('Add ReadMore Text here.', 'rezilla'),
        ),
    )
));