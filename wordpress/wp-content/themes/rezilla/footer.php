<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rezilla
 */
if(is_page() || is_singular('post') || is_singular('rezilla_team') && get_post_meta( $post->ID, 'rezilla_metabox', true)) {
	$rezillaMeta = get_post_meta($post->ID, 'rezilla_metabox', true);
} else {
	$rezillaMeta = array();
}
$rezilla_footer_styles = rezilla_options('rezilla_footer_styles');
$rezilla_enable_top_to_bottom = rezilla_options('rezilla_enable_top_to_bottom', true);
$rezilla_enable_ttb_icon = rezilla_options('rezilla_enable_ttb_icon','fa fa-angle-up');
if (is_array($rezillaMeta) && array_key_exists('rezilla_meta_footer_styles', $rezillaMeta) && array_key_exists('rezilla_meta_footer_style_shwo', $rezillaMeta) && $rezillaMeta['rezilla_meta_footer_style_shwo'] == true && get_post_meta($post->ID, 'rezilla_metabox', true) ) {
	$selectedFooter = $rezillaMeta['rezilla_meta_footer_styles'];
}elseif (!empty($rezilla_footer_styles) && class_exists( 'CSF' )) {
	$selectedFooter = rezilla_options('rezilla_footer_styles');
}else {
	$selectedFooter = 'one';
} 
if ( is_active_sidebar( 'footer-1') || class_exists( 'CSF' ) ){
	$active_widgets = 'widget-yes';
}else{
	$active_widgets ='widget-no';
}


if (is_array($rezillaMeta) && array_key_exists('rezilla_meta_ft_widgets', $rezillaMeta) && get_post_meta($post->ID, 'rezilla_metabox', true) && array_key_exists('rezilla_meta_ft_widgets_show', $rezillaMeta) && $rezillaMeta['rezilla_meta_ft_widgets_show'] == true ) {
	$footer_meta_widgets = $rezillaMeta['rezilla_meta_ft_widgets'];
	$ft_wshow = $rezillaMeta['rezilla_meta_ft_widgets_show'];
}else{
	$footer_meta_widgets = '';
	$ft_wshow = '';
}

?>
	<footer id="colophon" class="site-footer footer-<?php echo esc_attr($selectedFooter); ?>">
		<div class="footer-widgets-area <?php echo esc_attr($active_widgets); ?>">
			<?php 
			if($ft_wshow == true && !empty($footer_meta_widgets)){
				get_template_part('inc/footer/ftpage','widgets');
			}else{
				get_template_part('inc/footer/footer','widgets');
			}
			get_template_part('inc/footer/copyright');
			?>
		</div>
	</footer><!-- #colophon -->
	<?php if($rezilla_enable_top_to_bottom == true  && $selectedFooter != 'six' ) : ?>
		<div class="to-top" id="back-top"><i class="<?php echo esc_attr($rezilla_enable_ttb_icon); ?>"></i></div>
	<?php endif; ?>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>