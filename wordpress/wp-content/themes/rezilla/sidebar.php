<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rezilla
 */
if(is_page() || is_singular('post') || is_singular('rezilla_team') && get_post_meta($post->ID, 'rezilla_metabox', true)) {
    $rezilla_commonMeta = get_post_meta($post->ID, 'rezilla_metabox', true);
} else {
    $rezilla_commonMeta = array();
}


if(is_array($rezilla_commonMeta) && array_key_exists('rezilla_sidebar_meta', $rezilla_commonMeta)){
    $rezilla_selectedSidebar = $rezilla_commonMeta['rezilla_sidebar_meta'];
}else{
    $rezilla_selectedSidebar = 'sidebar';
}
?>
<div id="secondary" class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 sidebar-widget-area sidebar-bg">
    <div class="sidebar-sticky-area">
    <?php
        if( is_active_sidebar($rezilla_selectedSidebar) ) {
            dynamic_sidebar($rezilla_selectedSidebar);
        }
    ?>
    </div>
</div>
