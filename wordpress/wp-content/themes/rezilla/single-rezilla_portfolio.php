<?php
/**
 * The template for displaying all portfolio single posts
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
$rezilla_portfolio_nav = rezilla_options('rezilla_portfolio_nav', true);
$rezilla_portfolio_related = rezilla_options('rezilla_portfolio_related', true);
$rezilla_portfolio_related_title = rezilla_options('rezilla_portfolio_related_title');
$rezilla_portfolio_banner_enable = rezilla_options('rezilla_portfolio_banner_enable');
$rezilla_breadcrumb_select_html = rezilla_options('rezilla_breadcrumb_select_html', 'h2');
if(array_key_exists('rezilla_layout_meta', $rezilla_commonMeta) && !empty($rezilla_commonMeta['rezilla_layout_meta'])){
    $rezilla_portfolio_Layout = $rezilla_commonMeta['rezilla_layout_meta'];
}else{
    $rezilla_portfolio_Layout = 'full-width';
}
if(is_array($rezilla_commonMeta) && array_key_exists('rezilla_sidebar_meta', $rezilla_commonMeta)){
    $rezilla_selectedSidebar = $rezilla_commonMeta['rezilla_sidebar_meta'];
}else{
    $rezilla_selectedSidebar = 'sidebar';
}

if($rezilla_portfolio_Layout == 'left-sidebar' && is_active_sidebar($rezilla_selectedSidebar) || $rezilla_portfolio_Layout == 'right-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
    $rezilla_portfolioColumnClass = 'col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8';
}else{
    $rezilla_portfolioColumnClass = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
}

if($rezilla_portfolio_banner_enable == false ){
    $rezilla_portfolio_post_Banner = false;
}elseif(array_key_exists('rezilla_meta_enable_banner', $rezilla_commonMeta)){
    $rezilla_portfolio_post_Banner = $rezilla_commonMeta['rezilla_meta_enable_banner'];
}else{
    $rezilla_portfolio_post_Banner = true;
}

if($rezilla_portfolio_Layout == 'full-width'){
	$rezilla_sidebar_bg = 'sidebar-no-bg-main';
}else{
	$rezilla_sidebar_bg = 'sidebar-bg-main';
}
$rezilla_breadcrumb_align = rezilla_options( 'rezilla_breadcrumb_align','rezilla-left' );
?>
	<?php if($rezilla_portfolio_post_Banner == true ) : ?>
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
		<div class="container">
			<div class="page-layout <?php echo esc_attr($rezilla_portfolio_Layout); ?>">
				<div class="row">
					<?php
					if($rezilla_portfolio_Layout == 'left-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
						get_sidebar();
					}
					?>
					<div class="<?php echo esc_attr($rezilla_portfolioColumnClass); ?>">
						<div class="all-posts-wrapper">
						<?php
							while ( have_posts() ) :
								the_post();
								the_content();
							endwhile; // End of the loop.
							?>
						</div>
						<?php if($rezilla_portfolio_related == true ) : ?>
						<div class="rezilla-portfolio-related-wrapper">
							<div class="rezilla-portfolios-wrapper">
								<div class="rezilla-portfolio-inner">
									<div class="rezilla-portfolio-three">
										<?php 
										$rezilla_related_texonomy = wp_get_object_terms( $post->ID, 'rezilla_portfolio_cat', array('fields' => 'ids') );
										//query arguments
										$args = array(
											'post_type' => 'rezilla_portfolio',
											'post_status' => 'publish',
											'posts_per_page' => 3,
											'orderby' => 'rand',
											'tax_query' => array(
												array(
													'taxonomy' => 'rezilla_portfolio_cat',
													'field' => 'id',
													'terms' => $rezilla_related_texonomy
												)
											),
											'post__not_in' => array ($post->ID),
										);
										//the query
										$rezilla_PrelatedPosts = new WP_Query( $args );
										?>
										<div class="rezilla-portfolio-three-content">
												<?php if($rezilla_PrelatedPosts->have_posts() && $rezilla_portfolio_related == true ){
												echo '<h2 class="rezilla-related-portfolio-title">'.esc_html($rezilla_portfolio_related_title).'</h2>';
											} ?>
											<div class="row clearfix" id="related-portfolio-slide">
												<?php 
												if($rezilla_PrelatedPosts->have_posts()) :
												while($rezilla_PrelatedPosts->have_posts()) : $rezilla_PrelatedPosts->the_post();
												?>
												<div class="item col-12 col-sm-6 col-md-6 col-lg-4">
													<div class="rezilla-portfolio-item">
														<?php the_post_thumbnail('rezilla-portfolio-medium', array('class' => 'img-responsive portfolio-three-image'), true); ?> 
														<div class="rezilla-portfolio-dec">
															<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
														</div>
													</div>
												</div>
												<?php endwhile; wp_reset_postdata(); endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endif; ?>
					</div>
					<?php
                    if($rezilla_portfolio_Layout == 'right-sidebar' && is_active_sidebar($rezilla_selectedSidebar)){
                        get_sidebar();
                    }?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
<?php
get_footer();