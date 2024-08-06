<?php
/**
 * The template for displaying all team single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rezilla
 */

get_header();
if(get_post_meta( get_the_ID(), 'rezilla_metabox', true)) {
    $rezilla_commonMeta = get_post_meta( get_the_ID(), 'rezilla_metabox', true );
} else {
    $rezilla_commonMeta = array();
}
$rezilla_team_title = rezilla_options('rezilla_team_title');
$rezilla_breadcrumb_select_html = rezilla_options('rezilla_breadcrumb_select_html', 'h2');
$rezilla_team_banner_enable = rezilla_options('rezilla_team_banner_enable');
if(array_key_exists('rezilla_layout_meta', $rezilla_commonMeta) && !empty($rezilla_commonMeta['rezilla_layout_meta'])){
    $rezilla_team_Layout = $rezilla_commonMeta['rezilla_layout_meta'];
}else{
    $rezilla_team_Layout = 'full-width';
}
if(is_array($rezilla_commonMeta) && array_key_exists('rezilla_sidebar_meta', $rezilla_commonMeta)){
    $rezilla_selectedSidebar = $rezilla_commonMeta['rezilla_sidebar_meta'];
}else{
    $rezilla_selectedSidebar = 'sidebar';
}

if($rezilla_team_Layout == 'left-sidebar' && is_active_sidebar($rezilla_selectedSidebar) || $rezilla_team_Layout == 'right-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
    $rezilla_teamColumnClass = 'col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8';
}else{
    $rezilla_teamColumnClass = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
}

if($rezilla_team_banner_enable == false ){
    $rezilla_team_post_Banner = false;
}elseif(array_key_exists('rezilla_meta_enable_banner', $rezilla_commonMeta)){
    $rezilla_team_post_Banner = $rezilla_commonMeta['rezilla_meta_enable_banner'];
}else{
    $rezilla_team_post_Banner = true;
}
if($rezilla_team_Layout == 'full-width'){
	$rezilla_sidebar_bg = 'sidebar-no-bg-main';
}else{
	$rezilla_sidebar_bg = 'sidebar-bg-main';
}
$rezilla_breadcrumb_align = rezilla_options( 'rezilla_breadcrumb_align','rezilla-left' );
?>
	<?php if($rezilla_team_post_Banner == true ) : ?>
	<div class="breadcroumb-area">
		<div class="container">
			<div class="breadcroumn-contnt <?php echo esc_attr($rezilla_breadcrumb_align); ?>">
			<<?php echo esc_attr($rezilla_breadcrumb_select_html); ?> class="brea-title"><?php if(!empty($rezilla_team_title)){
					echo esc_html($rezilla_team_title);
				}else{
					echo esc_html('Team Details','rezilla');
				}?></<?php echo esc_attr($rezilla_breadcrumb_select_html); ?>>
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
		<div class="container">
			<div class="page-layout <?php echo esc_attr($rezilla_team_Layout); ?>">
				<div class="row">
					<?php
					if($rezilla_team_Layout == 'left-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
						get_sidebar();
					}
					?>
					<div class="<?php echo esc_attr($rezilla_teamColumnClass); ?>">
						<div class="all-posts-wrapper">
						<?php
							while ( have_posts() ) :
								the_post();
								the_content();
							endwhile; // End of the loop.
							?>
						</div>
					</div>
					<?php
                    if($rezilla_team_Layout == 'right-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
                        get_sidebar();
                    }?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
<?php
get_footer();