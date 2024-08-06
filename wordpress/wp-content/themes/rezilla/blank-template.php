<?php
/**
*Template Name: Blank Template 
*/

get_header();
if(get_post_meta( get_the_ID(), 'rezilla_metabox', true)) {
    $rezilla_commonMeta = get_post_meta( get_the_ID(), 'rezilla_metabox', true );
} else {
    $rezilla_commonMeta = array();
}
if(array_key_exists('rezilla_meta_enable_banner', $rezilla_commonMeta)){
    $rezilla_postBanner = $rezilla_commonMeta['rezilla_meta_enable_banner'];
}else{
    $rezilla_postBanner = true;
}

if(array_key_exists('rezilla_meta_custom_title', $rezilla_commonMeta)){
    $rezilla_customTitle = $rezilla_commonMeta['rezilla_meta_custom_title'];
}else{
    $rezilla_customTitle = '';
}
$rezilla_breadcrumb_select_html = rezilla_options('rezilla_breadcrumb_select_html', 'h2');
$rezilla_breadcrumb_align = rezilla_options( 'rezilla_breadcrumb_align','rezilla-left' );
?>
<?php if($rezilla_postBanner == true ) : ?>
	<div class="breadcroumb-area">
		<div class="container">
			<div class="breadcroumn-contnt <?php echo esc_attr($rezilla_breadcrumb_align); ?>">
				<<?php echo esc_attr($rezilla_breadcrumb_select_html); ?> class="brea-title">
				<?php 
				if(!empty($rezilla_customTitle)){
					echo esc_html($rezilla_customTitle);
				}else{
					the_title();
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
	<main id="primary" class="site-main content-area">
		<?php the_content(); ?>
	</main><!-- #main -->
<?php get_footer();
