<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rezilla
 */

get_header();
if(get_post_meta( get_the_ID(), 'rezilla_metabox', true)) {
    $rezilla_commonMeta = get_post_meta( get_the_ID(), 'rezilla_metabox', true );
}else{
    $rezilla_commonMeta = array();
}
if(array_key_exists('rezilla_layout_meta', $rezilla_commonMeta) && !empty($rezilla_commonMeta['rezilla_layout_meta'])){
    $rezilla_postLayout = $rezilla_commonMeta['rezilla_layout_meta'];
}else{
    $rezilla_postLayout = 'right-sidebar';
}
if(is_array($rezilla_commonMeta) && array_key_exists('rezilla_sidebar_meta', $rezilla_commonMeta)){
    $rezilla_selectedSidebar = $rezilla_commonMeta['rezilla_sidebar_meta'];
}else{
    $rezilla_selectedSidebar = 'sidebar';
}
if($rezilla_postLayout == 'left-sidebar' && is_active_sidebar($rezilla_selectedSidebar) || $rezilla_postLayout == 'right-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
    $rezilla_pageColumnClass = 'col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8';
}else{
    $rezilla_pageColumnClass = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
}
if(array_key_exists('rezilla_meta_enable_banner', $rezilla_commonMeta)){
    $rezilla_postBanner = $rezilla_commonMeta['rezilla_meta_enable_banner'];
}else{
    $rezilla_postBanner = true;
}
$rezilla_breadcrumb_select_html = rezilla_options('rezilla_breadcrumb_select_html', 'h2');
$rezilla_author_profile = rezilla_options('rezilla_author_profile');
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
	<main id="primary" class="site-main content-area single-content-area">
		<div class="container">
			<div class="page-layout  <?php echo esc_attr($rezilla_postLayout); ?>">
				<div class="row">
					<?php
					if($rezilla_postLayout == 'left-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
						get_sidebar();
					}
					?>
					<div class="<?php echo esc_attr($rezilla_pageColumnClass); ?>">
						<div class="all-posts-wrapper">
						<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', get_post_type() );
								if($rezilla_author_profile == true){
									get_template_part( 'inc/author','info');
								}
								rezilla_next_prev_post_link();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							endwhile; // End of the loop.
							?>
						</div>
					</div>
					<?php
			if($rezilla_postLayout == 'right-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
				get_sidebar();
			}?>
				</div>
			
			</div>
		</div>
	</main><!-- #main -->
<?php
get_footer();
