<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rezilla
 */

get_header();
$rezilla_error_page_banner = rezilla_options( 'rezilla_error_page_banner', true );
$rezilla_error_page_title = rezilla_options( 'rezilla_error_page_title' );
$rezilla_breadcrumb_select_html = rezilla_options( 'rezilla_breadcrumb_select_html', 'h2' );
$rezilla_error_image = rezilla_options( 'rezilla_error_image' );
$rezilla_not_found_text = rezilla_options( 'rezilla_not_found_text' );
$rezilla_go_back_home = rezilla_options( 'rezilla_go_back_home', true );
$rezilla_error_page_button_text = rezilla_options( 'rezilla_error_page_button_text', esc_html('Go Back','rezilla') );
$rezilla_breadcrumb_align = rezilla_options( 'rezilla_breadcrumb_align','rezilla-left' );
?>
<?php if($rezilla_error_page_banner == true ) : ?>
	<div class="breadcroumb-area">
		<div class="container">
			<div class="breadcroumn-contnt <?php echo esc_attr($rezilla_breadcrumb_align); ?>">
				<<?php echo esc_attr($rezilla_breadcrumb_select_html); ?> class="brea-title">
				<?php 
				if(!empty($rezilla_error_page_title)){
					echo esc_html($rezilla_error_page_title);
				}
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
	<main id="primary" class="site-main">
		<div class="container error-404 not-found">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-12 col-md-10 col-xl-8 col-lg-8">
					<div class="page-content">
						<?php if(!empty($rezilla_error_image['url'])) : ?>
						<div class="error-image">
							<img src="<?php echo esc_url($rezilla_error_image['url']); ?>" alt="<?php echo esc_attr($rezilla_error_image['alt']) ?>">
						</div>
						<?php endif; ?>
						<div class="error-dec">
							<?php echo wp_kses($rezilla_not_found_text,'rezilla_allowed_html'); ?>
						</div>
						<?php if( $rezilla_go_back_home == true ) : ?>
							<div class="error-button">
							<a class="theme-btns" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($rezilla_error_page_button_text); ?></a>
							</div>
						<?php endif; ?>
					</div><!-- .page-content -->
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
