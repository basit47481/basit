<?php 
$rezilla_cta_text = rezilla_options('rezilla_header_cta_text');
$rezilla_cta_link = rezilla_options('rezilla_header_cta_link');
$rezilla_header_styles = rezilla_options('rezilla_header_styles');
?>
<div class="button header-btn">
    <a href="<?php echo esc_url($rezilla_cta_link['url']); ?>" title="<?php the_title_attribute($rezilla_cta_link['text']); ?>" target="<?php echo esc_attr($rezilla_cta_link['target']); ?>" class="theme-btns"><?php echo esc_html($rezilla_cta_text); ?></a>
</div>