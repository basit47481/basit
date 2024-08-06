<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package rezilla
 */

get_header();
$rezilla_searchLayout = rezilla_options('rezilla_search_layout', 'right-sidebar');
$rezilla_search_banner = rezilla_options('rezilla_search_banner', true);
$rezilla_search_pagination = rezilla_options('rezilla_search_pagination', true);
$rezilla_breadcrumb_select_html = rezilla_options('rezilla_breadcrumb_select_html', 'h2');
if($rezilla_searchLayout == 'grid'){
	$rezilla_sidebar_bg = 'sidebar-no-bg-main';
}else{
	$rezilla_sidebar_bg = 'sidebar-bg-main';
}
$rezilla_breadcrumb_align = rezilla_options( 'rezilla_breadcrumb_align','rezilla-left' );
?>
	<?php if($rezilla_search_banner == true ) : ?>
	<div class="breadcroumb-area">
		<div class="container">
			<div class="breadcroumn-contnt <?php echo esc_attr($rezilla_breadcrumb_align); ?>">
			<<?php echo esc_attr($rezilla_breadcrumb_select_html); ?> class="brea-title">
					<?php 
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'rezilla' ), '<span>' . get_search_query() . '</span>' );
					?>
				</<?php echo esc_attr($rezilla_breadcrumb_select_html); ?>>
				<div class="bre-sub">
				<?php if(function_exists('bcn_display')){
					bcn_display();
				}?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<main id="primary" class="site-main content-area sidebar-bg-main <?php echo esc_attr($rezilla_sidebar_bg); ?>">
		<div class="container page-layout <?php echo esc_attr($rezilla_searchLayout); ?>">
			<?php
				if ( $rezilla_searchLayout == 'grid' ) {
					get_template_part( 'template-parts/blog/post-grid' );
				} else {
					get_template_part( 'template-parts/blog/post-sidebar' );
				}?>
				
		</div>
	</main><!-- #main -->
<?php get_footer();
