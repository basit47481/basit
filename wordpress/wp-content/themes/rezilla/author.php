<?php
/**
 * The template for displaying authors pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rezilla
 */

get_header();
$rezilla_authors_banner = rezilla_options('rezilla_authors_banner', true);
$rezilla_breadcrumb_select_html = rezilla_options('rezilla_breadcrumb_select_html', 'h2');
$rezilla_authorsLayout = rezilla_options('rezilla_authors_layout', 'list');
$rezilla_breadcrumb_align = rezilla_options( 'rezilla_breadcrumb_align','rezilla-left' );
?>
	<?php if($rezilla_authors_banner == true ) : ?>
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
	<main id="primary" class="site-main content-area">
		<div class="container page-layout <?php echo esc_attr($rezilla_authorsLayout); ?>">
			<?php
			get_template_part( 'template-parts/blog/post-sidebar-author' );
			?>
		</div>
	</main><!-- #main -->
<?php get_footer();
