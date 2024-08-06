
<?php 
if(is_page() || is_singular('post') || is_singular('rezilla_team') && get_post_meta( $post->ID, 'rezilla_metabox', true)) {
    $rezillaMeta = get_post_meta($post->ID, 'rezilla_metabox', true);
} else {
    $rezillaMeta = array();
}
if (is_array($rezillaMeta) && array_key_exists('rezilla_meta_ft_widgets', $rezillaMeta) && get_post_meta($post->ID, 'rezilla_metabox', true) && array_key_exists('rezilla_meta_ft_widgets_show', $rezillaMeta) && $rezillaMeta['rezilla_meta_ft_widgets_show'] == true ) {
    $footer_meta_widgets = $rezillaMeta['rezilla_meta_ft_widgets'];
}
?>
<div class="footer-widget-section widget-form-metabox">
    <div class="rezilla-footer-widgets">
        <div class="container">
            <div class="row rezilla-ftw-box">
                <?php foreach($footer_meta_widgets as $ft_mwidget ) : ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-<?php echo esc_attr($ft_mwidget['rezilla_meta_ft_widget_col']); ?>">
                    <?php 
                        if ( is_active_sidebar( $ft_mwidget['rezilla_meta_ft_widget'] ) ) : ?>
                            <div class="widget-area footer">
                                <?php dynamic_sidebar( $ft_mwidget['rezilla_meta_ft_widget'] ); ?>
                            </div><!-- .widget-area -->
                        <?php endif;
                    ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
