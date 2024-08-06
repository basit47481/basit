<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rezilla
 */

get_header();
$rezilla_blogc_title      = rezilla_options( 'rezilla_blog_title' );
$rezilla_blog_home_title      = rezilla_options( 'rezilla_blog_home_title' );
$rezilla_blog_home_stitle      = rezilla_options( 'rezilla_blog_home_stitle' );
$rezilla_breadcrumb_select_html = rezilla_options('rezilla_breadcrumb_select_html', 'h2');
$rezilla_banner_enable    = rezilla_options( 'rezilla_blog_banner_enable', true );
$rezilla_blog_layout      = rezilla_options( 'rezilla_blog_layout', 'right-sidebar' );
$rezilla_breadcrumb_align = rezilla_options( 'rezilla_breadcrumb_align','rezilla-left' );
?>
<?php if ( $rezilla_banner_enable == true ) : ?>
<div class="breadcroumb-area">
	<div class="container">
		<div class="breadcroumn-contnt <?php echo esc_attr($rezilla_breadcrumb_align); ?>">
		<<?php echo esc_attr($rezilla_breadcrumb_select_html); ?> class="brea-title"><?php echo esc_html( $rezilla_blogc_title ); ?></<?php echo esc_attr($rezilla_breadcrumb_select_html); ?>>
			<div class="bre-sub">
				<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html($rezilla_blog_home_title); ?></a> <i class="fas fa-minus"></i></span>
				<span><span><?php echo esc_html($rezilla_blog_home_stitle); ?></span></span>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<main id="primary" class="site-main content-area">
	<div class="container page-layout <?php echo esc_attr($rezilla_blog_layout); ?>">
		<?php
            if ( $rezilla_blog_layout == 'grid' ) {
                get_template_part( 'template-parts/blog/post-grid' );
            } else {
                get_template_part( 'template-parts/blog/post-sidebar' );
            }?>
	</div>
</main>
<?php
get_footer();
