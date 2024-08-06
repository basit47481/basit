<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rezilla
 */

get_header();
$rezilla_archiveLayout = rezilla_options('rezilla_archive_layout', 'right-sidebar');
$rezilla_archive_banner = rezilla_options('rezilla_archive_banner', true);
$rezilla_breadcrumb_select_html = rezilla_options('rezilla_breadcrumb_select_html', 'h2');
$rezilla_archive_pagination = rezilla_options('rezilla_archive_pagination', true);
$rezilla_breadcrumb_align = rezilla_options( 'rezilla_breadcrumb_align','rezilla-left' );
if($rezilla_archiveLayout == 'grid'){
	$rezilla_sidebar_bg = 'sidebar-no-bg-main';
}else{
	$rezilla_sidebar_bg = 'sidebar-bg-main';
}
?>
	<?php if($rezilla_archive_banner == true ) : ?>
	<div class="breadcroumb-area">
		<div class="container">
			<div class="breadcroumn-contnt <?php echo esc_attr($rezilla_breadcrumb_align); ?>">
				<?php the_archive_title( '<'.esc_attr($rezilla_breadcrumb_select_html).' class="archive-title brea-title">', '</'.esc_attr($rezilla_breadcrumb_select_html).'>' ); ?>
				<div class="bre-sub">
				<?php if(function_exists('bcn_display')){
					bcn_display();
				}?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<main id="primary" class="site-main content-area <?php echo esc_attr($rezilla_sidebar_bg); ?>">
		<div class="container page-layout <?php echo esc_attr($rezilla_archiveLayout); ?>">
			<?php
				if ( $rezilla_archiveLayout == 'grid' ) {
					get_template_part( 'template-parts/blog/post-grid' );
				} else {
					get_template_part( 'template-parts/blog/post-sidebar' );
				}?>
				
		</div>
	</main><!-- #main -->
<?php get_footer();
