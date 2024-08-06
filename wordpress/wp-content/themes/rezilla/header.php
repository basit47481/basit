<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rezilla
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php 
	if(is_page() || is_singular('post') || is_singular('rezilla_team') && get_post_meta($post->ID, 'rezilla_metabox', true)) {
        $rezillaMeta = get_post_meta($post->ID, 'rezilla_metabox', true);
    } else {
        $rezillaMeta = array();
    }
    $rezilla_enable_preloader = rezilla_options('rezilla_enable_preloader', true);
    $rezilla_header_styles = rezilla_options('rezilla_header_styles');
    if (is_array($rezillaMeta) && array_key_exists('rezilla_meta_select_header', $rezillaMeta) && $rezillaMeta['rezilla_meta_select_header'] != 'default' && $rezillaMeta['rezilla_meta_enable_header'] == true ) {
        $selectedHeader = $rezillaMeta['rezilla_meta_select_header'];
    } else if (!empty($rezilla_header_styles) && class_exists( 'CSF' )) {
        $selectedHeader = rezilla_options('rezilla_header_styles');
    } else {
        $selectedHeader = 'default';
    }
	wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <?php if($rezilla_enable_preloader == true ) { ?>
    <div class="preloader-area">
        <div class="preloader-inner">
            <div class="theme-loader"><div></div><div></div></div>
        </div>
    </div>
    <?php } ?>
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rezilla' ); ?></a>
	<?php get_template_part( 'inc/header/header-'.$selectedHeader.'' ); ?>