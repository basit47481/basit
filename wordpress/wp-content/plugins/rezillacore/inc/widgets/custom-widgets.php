<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
if ( !function_exists( 'rezilla_nabber_widget' ) ) {
    include_once('banner.php' );
}
if ( !function_exists( 'rezilla_blog_post_widget' ) ) {
    include_once('blog-post.php' );
}
if ( !function_exists( 'rezilla_company_info_widget' ) ) {
    include_once('company-info.php' );
}
if ( !function_exists( 'rezilla_contact_info_widget' ) ) {
    include_once('contact-info.php' );
}
if ( !function_exists( 'rezilla_social_widget' ) ) {
    include_once('social.php' );
}
if ( !function_exists( 'rezilla_newsletter_widget' ) ) {
    include_once('subscribe.php' );
}
if ( !function_exists( 'rezilla_about_info_widget' ) ) {
    include_once('about-info.php' );
}