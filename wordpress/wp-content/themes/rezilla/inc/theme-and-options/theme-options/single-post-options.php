<?php
//Single Post
CSF::createSection($rezillaThemeOption, array(
    'parent' => 'rezilla_page_options',
    'title'  => esc_html__('Single Post / Post Details', 'rezilla'),
    'icon'   => 'fa fa-pencil',
    'fields' => array(
        array(
            'id'       => 'rezilla_single_post_author',
            'type'     => 'switcher',
            'title'    => esc_html__('Post Author Name', 'rezilla'),
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide or show author name on post details page.', 'rezilla'),
            'default'  => true
        ),
        array(
            'id'       => 'rezilla_single_post_date',
            'type'     => 'switcher',
            'title'    => esc_html__('Post Date', 'rezilla'),
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide or show date on post details page.', 'rezilla'),
            'default'  => true
        ),

        array(
            'id'       => 'rezilla_single_post_cmnt',
            'type'     => 'switcher',
            'title'    => esc_html__('Post Comments Number', 'rezilla'),
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide or show comments number on post details page.', 'rezilla'),
            'default'  => true
        ),

        array(
            'id'       => 'rezilla_single_post_cat',
            'type'     => 'switcher',
            'title'    => esc_html__('Post Categories', 'rezilla'),
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide or show categories on post details page.', 'rezilla'),
            'default'  => false
        ),

        array(
            'id'       => 'rezilla_single_post_tag',
            'type'     => 'switcher',
            'title'    => esc_html__('Post Tags', 'rezilla'),
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide or show tags on post details page.', 'rezilla'),
            'default'  => true
        ),
        array(
            'id'       => 'rezilla_post_top_share',
            'type'     => 'switcher',
            'title'    => esc_html__('Top Social Share icons', 'rezilla'),
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide or show social share icons on post details page.', 'rezilla'),
            'default'  => false
        ),
        array(
            'id'       => 'rezilla_post_share',
            'type'     => 'switcher',
            'title'    => esc_html__('Social Share icons', 'rezilla'),
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide or show social share icons on post details page.', 'rezilla'),
            'default'  => false
        ),
        array(
            'id'       => 'rezilla_author_profile',
            'type'     => 'switcher',
            'title'    => esc_html__('Author Profile', 'rezilla'),
            'text_on'  => esc_html__('Yes', 'rezilla'),
            'text_off' => esc_html__('No', 'rezilla'),
            'desc'     => esc_html__('Hide or show Author Profile Box on post details page.', 'rezilla'),
            'default'  => false
        ),
    ),
));