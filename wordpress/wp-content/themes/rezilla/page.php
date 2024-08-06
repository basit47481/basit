<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rezilla
 */

get_header();
if(get_post_meta( get_the_ID(), 'rezilla_metabox', true)) {
    $rezilla_commonMeta = get_post_meta( get_the_ID(), 'rezilla_metabox', true );
} else {
    $rezilla_commonMeta = array();
}
if(array_key_exists('rezilla_meta_page_navbar', $rezilla_commonMeta)){
	$rezilla_meta_page_navbar = $rezilla_commonMeta['rezilla_meta_page_navbar'];
}else{
	$rezilla_meta_page_navbar = '';
}
if(array_key_exists('rezilla_layout_meta', $rezilla_commonMeta)){
    $rezilla_pageLayout = $rezilla_commonMeta['rezilla_layout_meta'];
}else{
    $rezilla_pageLayout = 'full-width';
}

if(array_key_exists('rezilla_sidebar_meta', $rezilla_commonMeta)){
    $rezilla_selectedSidebar = $rezilla_commonMeta['rezilla_sidebar_meta'];
}else{
    $rezilla_selectedSidebar = 'sidebar';
}

if($rezilla_pageLayout == 'left-sidebar' && is_active_sidebar($rezilla_selectedSidebar) || $rezilla_pageLayout == 'right-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
    $rezilla_pageColumnClass = 'col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8';
}else{
    $rezilla_pageColumnClass = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
}
if(array_key_exists('rezilla_meta_enable_banner', $rezilla_commonMeta)){
    $rezilla_postBanner = $rezilla_commonMeta['rezilla_meta_enable_banner'];
}else{
    $rezilla_postBanner = true;
}
$rezilla_enable_page_cmt = rezilla_options('rezilla_enable_page_cmt', true );

if($rezilla_pageLayout == 'full-width'){
	$rezilla_sidebar_bg = 'sidebar-no-bg-main';
}else{
	$rezilla_sidebar_bg = 'sidebar-bg-main';
}
$rezilla_breadcrumb_select_html = rezilla_options('rezilla_breadcrumb_select_html', 'h2');
$rezilla_breadcrumb_align = rezilla_options( 'rezilla_breadcrumb_align','rezilla-left' );
?>
<?php if($rezilla_postBanner == true ) : ?>
	<div class="breadcroumb-area">
		<div class="container">
			<div class="breadcroumn-contnt <?php echo esc_attr($rezilla_breadcrumb_align); ?>">
			<<?php echo esc_attr($rezilla_breadcrumb_select_html); ?> class="brea-title"> <?php the_title(); ?> </<?php echo esc_attr($rezilla_breadcrumb_select_html); ?>>
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
		<div class="container <?php echo esc_attr($rezilla_pageLayout); ?>">
			<div class="page-layout">
				<div class="row">
					<?php
					if($rezilla_pageLayout == 'left-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
						get_sidebar();
					}
					?>
					<div class="<?php echo esc_attr($rezilla_pageColumnClass); ?>">
						<div class="all-posts-wrapper">
						<?php
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', 'page' );
							endwhile; // End of the loop.
							if( $rezilla_enable_page_cmt == true) :
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							endif;
						?>
						</div>
					</div>
					<?php
					if($rezilla_pageLayout == 'right-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
						get_sidebar();
					}?>
				</div>
			
			</div>
		</div>
	</main><!-- #main -->
<?php get_footer();
