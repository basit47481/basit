<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$rezilla_banner_enable    = rezilla_options( 'rezilla_single_shop_banner_enable', true );
$rezilla_single_shop_layout      = rezilla_options( 'rezilla_single_shop_layout', 'right-sidebar' );
if($rezilla_single_shop_layout == 'left-sidebar' || $rezilla_single_shop_layout == 'right-sidebar'){
    $rezilla_single_shopColumn = 'col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8';
}else{
    $rezilla_single_shopColumn = 'col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12';
}
$rezilla_breadcrumb_select_html = rezilla_options('rezilla_breadcrumb_select_html', 'h2');
get_header( 'single_shop' ); 
if($rezilla_banner_enable == true ) : ?>
	<div class="breadcroumb-area">
		<div class="container">
			<div class="breadcroumn-contnt">
				<<?php echo esc_attr($rezilla_breadcrumb_select_html); ?> class="brea-title"><?php woocommerce_page_title(); ?> </<?php echo esc_attr($rezilla_breadcrumb_select_html); ?>>
				<div class="bre-sub">
				<?php if(function_exists('bcn_display')){
					bcn_display();
				}?>
				</div>
			</div>
		</div>
	</div>
<?php endif;
?>
	<?php
		do_action( 'woocommerce_before_main_content' );
	?>
	<div class="page-layout woo-layout-single <?php echo esc_attr($rezilla_single_shop_layout); ?>">
		<div class="row">
			<?php
			if($rezilla_single_shop_layout == 'left-sidebar' && is_active_sidebar('rezilla-shop')){
			?>
			<div id="secondary" class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 sidebar-widget-area woo-widget-area">
			<?php dynamic_sidebar('rezilla-shop'); ?>
			</div>
			<?php 
			}
			?>
			<div class="<?php echo esc_attr($rezilla_single_shopColumn); ?>">
				<div class="all-posts-wrapper woo-single-post">
				<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<?php wc_get_template_part( 'content', 'single-product' ); ?>
				<?php endwhile; // end of the loop. ?>
				</div>
			</div>
			<?php
			if($rezilla_single_shop_layout == 'right-sidebar' && is_active_sidebar('rezilla-shop')){
			?>
			<div id="secondary" class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 sidebar-widget-area woo-widget-area">
			<?php dynamic_sidebar('rezilla-shop'); ?>
			</div>
			<?php 
			}?>
		</div>
	</div>
	<?php
		do_action( 'woocommerce_after_main_content' );
	?>
<?php
get_footer( 'single_shop' );
