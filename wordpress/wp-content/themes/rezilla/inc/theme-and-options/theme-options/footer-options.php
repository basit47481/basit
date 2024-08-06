<?php
if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
// Header Style
CSF::createSection( $rezillaThemeOption, array(
    'title' => esc_html__( 'Footer Settings', 'rezilla' ),
    'id'    => 'rezilla_footer_options',
    'icon'  => 'fa fa-sort-amount-asc',
    'fields' => array(
        // A Subheading
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Footer Style Options', 'rezilla' ),
        ),
        array(
            'id'          => 'rezilla_footer_styles',
            'type'        => 'select',
            'title'       => esc_html__( 'Select', 'rezilla' ),
            'placeholder' => esc_html__( 'Select an option', 'rezilla' ),
            'options'     => array(
                'one'   => esc_html__( 'Footer One', 'rezilla' ),
                'two'   => esc_html__( 'Footer Two', 'rezilla' ),
                'three' => esc_html__( 'Footer Three', 'rezilla' ),
                'four' => esc_html__( 'Footer Four', 'rezilla' ),
            ),
            'default'     => 'one',
            'subtitle'    => esc_html__( 'Select Your Footer', 'rezilla' ),
        ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Footer Widgets layout Options', 'rezilla' ),
        ),
        array(
            'id'      => 'footer_column_layout',
            'type'    => 'image_select',
            'title'   => esc_attr__( 'Footer Widget Columns', 'rezilla' ),
            'options' => array(
                '12'      => get_template_directory_uri() . '/assets/image/widgets/footer_col_12.png',
                '6_6'     => get_template_directory_uri() . '/assets/image/widgets/footer_col_6_6.png',
                '4_4_4'   => get_template_directory_uri() . '/assets/image/widgets/footer_col_4_4_4.png',
                '3_3_3_3' => get_template_directory_uri() . '/assets/image/widgets/footer_col_3_3_3_3.png',
                '3_2_3_4' => get_template_directory_uri() . '/assets/image/widgets/footer_col_3_2_3_4.png',
                '8_4'     => get_template_directory_uri() . '/assets/image/widgets/footer_col_8_4.png',
                '4_8'     => get_template_directory_uri() . '/assets/image/widgets/footer_col_4_8.png',
                '6_3_3'   => get_template_directory_uri() . '/assets/image/widgets/footer_col_6_3_3.png',
                '3_3_6'   => get_template_directory_uri() . '/assets/image/widgets/footer_col_3_3_6.png',
                '8_2_2'   => get_template_directory_uri() . '/assets/image/widgets/footer_col_8_2_2.png',
                '2_2_8'   => get_template_directory_uri() . '/assets/image/widgets/footer_col_2_2_8.png',
                '6_2_2_2' => get_template_directory_uri() . '/assets/image/widgets/footer_col_6_2_2_2.png',
                '2_2_2_6' => get_template_directory_uri() . '/assets/image/widgets/footer_col_2_2_2_6.png',
            ),
            'default' => '3_3_3_3',
            'after'   => esc_attr__( 'Select Footer Column layout View for widgets.', 'rezilla' ),
        ),
        array(
            'type'    => 'subheading',
            'style'   => 'info',
            'content' => esc_html__( 'Copyright options', 'rezilla' ),
        ),
        array(
            'id'            => 'rezilla_copyright_text',
            'type'          => 'wp_editor',
            'title'         => esc_html__( 'Copyright Text', 'rezilla' ),
            'subtitle'      => esc_html__( 'Site copyright text', 'rezilla' ),
            'desc'          => esc_html__( 'Type site copyright text here.', 'rezilla' ),
            'tinymce'       => true,
            'quicktags'     => true,
            'media_buttons' => false,
            'height'        => '100px',
        ),
        array(
            'type'    => 'subheading',
            'style'   => 'info',
            'content' => esc_html__( 'Footer Menu Options', 'rezilla' ),
        ),
        array(
              'id'    => 'rezilla_footer_menu_show',
              'type'  => 'switcher',
              'title' => esc_html__( 'Enable Footer Menu', 'rezilla' ),
              'subtitle' => esc_html__( 'Enable Footer Menu if you need', 'rezilla' ),
              'default' => false,
        ),
        array(
            'id'          => 'rezilla_footer_menu',
            'type'        => 'select',
            'title'       => esc_html__( 'Select Footer Menu', 'rezilla' ),
            'subtitle'       => esc_html__( 'Select Menu for Footer', 'rezilla' ),
            'placeholder' => esc_html__( 'Select an Menu', 'rezilla' ),
            'options'     => 'menus',
            'dependency' => array( 'rezilla_footer_menu_show', '==', 'true' )
        ),
        //////////////////////////////////
        ///////// FOOTER CSS ONE ////////////
        ////////////////////////////////
        array(
            'type'    => 'subheading',
            'style'   => 'info',
            'content' => esc_html__( 'Footer CSS', 'rezilla' ),
        ),
        array(
            'id'     => 'rezilla_footer_css_grups1',
            'type'   => 'fieldset',
            'title'  =>  esc_html__( 'Footer CSS Options', 'rezilla' ),
            'subtitle'  =>  esc_html__( 'Add your Color for Footer Here', 'rezilla' ),
            'dependency' => array( 'rezilla_footer_styles', '==', 'one', 'all' ),
            'fields' => array(
                array(
                    'id'         => 'rezilla_footer_bg1',
                    'type'       => 'background',
                    'title'      => esc_html__( 'Background', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Footer area Background Color', 'rezilla' ),
                    'output'     => '.site-footer.footer-one .footer-widgets-area',
                ),
                array(
                    'id'         => 'rezilla_footer_title_css1',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Title Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Widget Title', 'rezilla' ),
                    'output'     => array( '.footer-one h4.widget-title','.footer-one h2.widget-title' ),
                ),
                array(
                    'id'         => 'rezilla_footer_content_css1',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Content Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Widget Content', 'rezilla' ),
                    'output'     =>  array('.footer-one .rssSummary','.footer-one cite','.footer-one .footer-widtet.widget_text strong','.footer-one .widget p','footer.footer-one .widget.widget_rss .rss-date','.footer-one .widget.widget_rss cite','footer.footer-one table th','footer.footer-one table td','footer.footer-one .widget.widget_rss .rss-date',' footer.footer-one .widget.widget_rss cite',' footer.footer-one .widget table caption','footer.footer-one .rssSummary','footer.footer-one .widget li.recentcomments','.footer-one .footer-widtet.widget_text strong' ),
                   
                ),
                array(
                    'id'         => 'rezilla_footer_link_css1',
                    'type'       => 'link_color',
                    'title'      => esc_html__( 'Link Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Link Color', 'rezilla' ),
                    'output'     => array('.footer-one a','.footer-one .widget ul li a','footer.footer-one .wp-calendar-table tr td a','footer.footer-one span.wp-calendar-nav-prev a'),
                ),
                array(
                    'type'       => 'submessage',
                    'style'      => 'info',
                    'content'    => esc_html__( 'CopyRight Section CSS', 'rezilla' ),
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_bg1',
                    'type'       => 'background',
                    'title'      => esc_html__( 'Background', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add CopyRight Background Color if you need', 'rezilla' ),
                    'output'     => '.footer-one .copyright-area',
                   
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_border',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Copyright Border Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Copyright Border', 'rezilla' ),
                    'output'     => '.footer-one .copyright-inner',
                    'output_mode' => 'border-color'
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_color',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Copyright Text Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Copyright Text', 'rezilla' ),
                    'output'     => '.footer-one .copyright-area p',
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_link_color',
                    'type'       => 'link_color',
                    'title'      => esc_html__( 'Link Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Copyrihgt Link Color', 'rezilla' ),
                    'output'     => '.footer-one .copyright-area a',
                ),
            ),
        ),
        /// FOOTER STYLE TWO
        array(
            'id'     => 'rezilla_footer_css_grups2',
            'type'   => 'fieldset',
            'title'  =>  esc_html__( 'Footer CSS Options', 'rezilla' ),
            'subtitle'  =>  esc_html__( 'Add your Color for Footer Here', 'rezilla' ),
            'dependency' => array( 'rezilla_footer_styles', '==', 'two', 'all' ),
            'fields' => array(
                array(
                    'id'         => 'rezilla_footer_bg2',
                    'type'       => 'background',
                    'title'      => esc_html__( 'Background', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Footer area Background Color', 'rezilla' ),
                    'output'     => '.site-footer.footer-two .footer-widgets-area',
                ),
                array(
                    'id'         => 'rezilla_footer_title_css2',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Title Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Widget Title', 'rezilla' ),
                    'output'     => array( '.footer-two h4.widget-title', '.footer-two h2.widget-title' ),
                ),
                array(
                    'id'         => 'rezilla_footer_content_css2',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Content Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Widget Content', 'rezilla' ),
                    'output'     =>  array('.footer-two .rssSummary','.footer-two cite','.footer-two .footer-widtet.widget_text strong','.footer-two .widget p','footer.footer-two .widget.widget_rss .rss-date','.footer-two .widget.widget_rss cite','footer.footer-two table th','footer.footer-two table td','footer.footer-two .widget.widget_rss .rss-date',' footer.footer-two .widget.widget_rss cite',' footer.footer-two .widget table caption','footer.footer-two .rssSummary','footer.footer-two .widget li.recentcomments','.footer-two .footer-widtet.widget_text strong' ),
                   
                ),
                array(
                    'id'         => 'rezilla_footer_link_css2',
                    'type'       => 'link_color',
                    'title'      => esc_html__( 'Link Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Link Color', 'rezilla' ),
                    'output'     => array('.footer-two a','.footer-two .widget ul li a','footer.footer-two .wp-calendar-table tr td a','footer.footer-two span.wp-calendar-nav-prev a'),
                ),
                array(
                    'type'       => 'submessage',
                    'style'      => 'info',
                    'content'    => esc_html__( 'CopyRight Section CSS', 'rezilla' ),
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_bg2',
                    'type'       => 'background',
                    'title'      => esc_html__( 'Background', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add CopyRight Background Color if you need', 'rezilla' ),
                    'output'     => '.footer-two .copyright-area',
                   
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_border2',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Copyright Border Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Copyright Border', 'rezilla' ),
                    'output'     => '.footer-two .copyright-area',
                    'output_mode' => 'border-color'
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_color2',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Copyright Text Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Copyright Text', 'rezilla' ),
                    'output'     => '.footer-two .copyright-area p',
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_link_color2',
                    'type'       => 'link_color',
                    'title'      => esc_html__( 'Link Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Copyrihgt Link Color', 'rezilla' ),
                    'output'     => '.footer-two .copyright-area a',
                ),
            ),
        ),
        //// FOOTER STYLE THREE
        array(
            'id'     => 'rezilla_footer_css_grups3',
            'type'   => 'fieldset',
            'title'  =>  esc_html__( 'Footer CSS Options', 'rezilla' ),
            'subtitle'  =>  esc_html__( 'Add your Color for Footer Here', 'rezilla' ),
            'dependency' => array( 'rezilla_footer_styles', '==', 'three', 'all' ),
            'fields' => array(
                array(
                    'id'         => 'rezilla_footer_bg3',
                    'type'       => 'background',
                    'title'      => esc_html__( 'Background', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Footer area Background Color', 'rezilla' ),
                    'output'     => '.site-footer.footer-three .footer-widgets-area',
                ),
                array(
                    'id'         => 'rezilla_footer_title_css3',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Title Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Widget Title', 'rezilla' ),
                    'output'     => array( '.footer-three h4.widget-title', '.footer-three h2.widget-title' ),
                ),
                array(
                    'id'         => 'rezilla_footer_content_css3',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Content Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Widget Content', 'rezilla' ),
                    'output'     =>  array('.footer-three .rssSummary','.footer-three cite','.footer-three .footer-widtet.widget_text strong','.footer-three .widget p','footer.footer-three .widget.widget_rss .rss-date','.footer-three .widget.widget_rss cite','footer.footer-three table th','footer.footer-three table td','footer.footer-three .widget.widget_rss .rss-date',' footer.footer-three .widget.widget_rss cite',' footer.footer-three .widget table caption','footer.footer-three .rssSummary','footer.footer-three .widget li.recentcomments','.footer-three .footer-widtet.widget_text strong' ),
                   
                ),
                array(
                    'id'         => 'rezilla_footer_link_css3',
                    'type'       => 'link_color',
                    'title'      => esc_html__( 'Link Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Link Color', 'rezilla' ),
                    'output'     => array('.footer-three a','.footer-three .widget ul li a','footer.footer-three .wp-calendar-table tr td a','footer.footer-three span.wp-calendar-nav-prev a'),
                ),
                array(
                    'type'       => 'submessage',
                    'style'      => 'info',
                    'content'    => esc_html__( 'CopyRight Section CSS', 'rezilla' ),
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_bg3',
                    'type'       => 'background',
                    'title'      => esc_html__( 'Background', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add CopyRight Background Color if you need', 'rezilla' ),
                    'output'     => '.footer-three .copyright-area',
                   
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_border3',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Copyright Border Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Copyright Border', 'rezilla' ),
                    'output'     => '.footer-three .copyright-inner',
                    'output_mode' => 'border-color'
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_color3',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Copyright Text Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Copyright Text', 'rezilla' ),
                    'output'     => '.footer-three .copyright-area p',
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_link_color3',
                    'type'       => 'link_color',
                    'title'      => esc_html__( 'Link Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Copyrihgt Link Color', 'rezilla' ),
                    'output'     => '.footer-three .copyright-area a',
                ),
            ),
        ),

        /////// FOOTER STYLE FOUR
        array(
            'id'     => 'rezilla_footer_css_grups4',
            'type'   => 'fieldset',
            'title'  =>  esc_html__( 'Footer CSS Options', 'rezilla' ),
            'subtitle'  =>  esc_html__( 'Add your Color for Footer Here', 'rezilla' ),
            'dependency' => array( 'rezilla_footer_styles', '==', 'four', 'all' ),
            'fields' => array(
                array(
                    'id'         => 'rezilla_footer_bg4',
                    'type'       => 'background',
                    'title'      => esc_html__( 'Background', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Footer area Background Color', 'rezilla' ),
                    'output'     => '.site-footer.footer-four .footer-widgets-area',
                ),
                array(
                    'id'         => 'rezilla_footer_title_css4',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Title Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Widget Title', 'rezilla' ),
                    'output'     => array( '.footer-four h4.widget-title', '.footer-four h2.widget-title' ),
                ),
                array(
                    'id'         => 'rezilla_footer_content_css4',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Content Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Widget Content', 'rezilla' ),
                    'output'     =>  array('.footer-four .rssSummary','.footer-four cite','.footer-four .footer-widtet.widget_text strong','.footer-four .widget p','footer.footer-four .widget.widget_rss .rss-date','.footer-four .widget.widget_rss cite','footer.footer-four table th','footer.footer-four table td','footer.footer-four .widget.widget_rss .rss-date',' footer.footer-four .widget.widget_rss cite',' footer.footer-four .widget table caption','footer.footer-four .rssSummary','footer.footer-four .widget li.recentcomments','.footer-four .footer-widtet.widget_text strong' ),
                   
                ),
                array(
                    'id'         => 'rezilla_footer_link_css4',
                    'type'       => 'link_color',
                    'title'      => esc_html__( 'Link Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Link Color', 'rezilla' ),
                    'output'     => array('.footer-four a','.footer-four .widget ul li a','footer.footer-four .wp-calendar-table tr td a','footer.footer-four span.wp-calendar-nav-prev a'),
                ),
                array(
                    'type'       => 'submessage',
                    'style'      => 'info',
                    'content'    => esc_html__( 'CopyRight Section CSS', 'rezilla' ),
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_bg4',
                    'type'       => 'background',
                    'title'      => esc_html__( 'Background', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add CopyRight Background Color if you need', 'rezilla' ),
                    'output'     => '.footer-four .copyright-area',
                   
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_border4',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Copyright Border Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Copyright Border', 'rezilla' ),
                    'output'     => '.footer-four .copyright-inner',
                    'output_mode' => 'border-color'
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_color4',
                    'type'       => 'color',
                    'title'      => esc_html__( 'Copyright Text Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Color for Copyright Text', 'rezilla' ),
                    'output'     => '.footer-four .copyright-area p',
                ),
                array(
                    'id'         => 'rezilla_footer_copyright_link_color4',
                    'type'       => 'link_color',
                    'title'      => esc_html__( 'Link Color', 'rezilla' ),
                    'subtitle'   => esc_html__( 'Add Copyrihgt Link Color', 'rezilla' ),
                    'output'     => '.footer-four .copyright-area a',
                ),
            ),
        ),
    ),
) );
// End Header Style