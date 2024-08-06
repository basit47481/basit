<?php 
$rezilla_postItemLayout = rezilla_options('rezilla_blog_layout', 'right-sidebar');
if($rezilla_postItemLayout == 'grid-ls' || $rezilla_postItemLayout == 'grid-rs'){
    $rezilla_postColumn = 'col-lg-6';
}else{
    $rezilla_postColumn = 'col-lg-12';
}
?>
<div class="<?php echo esc_attr($rezilla_postColumn); ?> col-md-12 mb-30 single-post-item">
    <div id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
       <div class="post-contents">
            <div class="post-title">
                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            </div>
       </div>
    </div>
</div>
