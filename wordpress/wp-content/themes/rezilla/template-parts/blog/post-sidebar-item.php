<?php 
if(is_archive()){
	$rezilla_postItemLayout = rezilla_options('rezilla_archive_layout', 'right-sidebar');
}else if(is_search()){
	$rezilla_postItemLayout = rezilla_options('rezilla_search_layout', 'right-sidebar');
}else{
	$rezilla_postItemLayout = rezilla_options('rezilla_blog_layout', 'right-sidebar');
}

if($rezilla_postItemLayout == 'grid-ls' || $rezilla_postItemLayout == 'grid-rs'){
    $rezilla_postColumn = 'col-lg-6';
}else{
    $rezilla_postColumn = 'col-lg-12';
}

$rezilla_post_date = rezilla_options('rezilla_post_date', true);
$rezilla_post_author = rezilla_options('rezilla_post_author', true );
$rezilla_cmnt_number = rezilla_options('rezilla_cmnt_number', true );
$rezilla_show_category = rezilla_options('rezilla_show_category');
$rezilla_share_blog = rezilla_options('rezilla_share_blog');
$rezilla_show_readmore = rezilla_options('rezilla_show_readmore');
$rezilla_blog_read_text = rezilla_options('rezilla_blog_read_text','Read More');
if( has_post_thumbnail() or has_post_format( 'video' ,get_the_ID()) or has_post_format( 'audio' ,get_the_ID())){
    $rezilla_thum_class = 'with-thum-img';
}else{
    $rezilla_thum_class = 'no-thum-img';
}
$code = 'iframe';
if(get_post_meta( get_the_ID(), 'rezilla_postmeta_video', true)) {
	$rezilla_postvideo = get_post_meta( get_the_ID(), 'rezilla_postmeta_video', true );
}else {
  $rezilla_postvideo = array();
}
if(get_post_meta( get_the_ID(), 'rezilla_postmeta_audio', true)) {
	$rezilla_postaudio = get_post_meta( get_the_ID(), 'rezilla_postmeta_audio', true );
}else {
  $rezilla_postaudio = array();
}
if(get_post_meta( get_the_ID(), 'rezilla_postmeta_gallery', true)) {
	$rezilla_postgallery = get_post_meta( get_the_ID(), 'rezilla_postmeta_gallery', true );
    $rezilla_postgallerys = $rezilla_postgallery['rezilla_post_gallery']; // for eg. 15,50,70,125
    $rezilla_gallery_ids = explode( ',', $rezilla_postgallerys );
}else {
  $rezilla_postgallery = array();
}
?>

<div class="<?php echo esc_attr($rezilla_postColumn); ?> col-md-12 mb-30 single-post-item">
    <div id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
        <?php 
            if(has_post_format( 'video' ,get_the_ID()) && has_post_thumbnail() ){
                ?>
                <div class="post-img">
                    <?php the_post_thumbnail('rezilla-blog-full', array('class' => 'img-responsive')); ?>
                    <a href="<?php echo esc_url($rezilla_postvideo['rezilla_post_video']); ?>" class="post-video video-popup"><i class="fas fa-play"></i></a>
                </div>
                <?php
            }elseif(has_post_format( 'video' , get_the_ID() ) && !empty($rezilla_postvideo['rezilla_post_video'])){
                ?>
                <div class="vendor">
                    <<?php echo esc_attr($code); ?> width="100" height="500" src="<?php echo esc_url($rezilla_postvideo['rezilla_post_video']); ?>"></<?php echo esc_attr($code); ?>>
                </div>
                <?php 
            }elseif(has_post_format( 'audio' , get_the_ID() ) && !empty($rezilla_postaudio['rezilla_post_audio'])){
                ?>
                <div class="vendor">
                    <<?php echo esc_attr($code); ?> width="100" height="400" src="<?php echo esc_url($rezilla_postaudio['rezilla_post_audio']); ?>"></<?php echo esc_attr($code); ?>>
                </div>
                <?php 
            }elseif(has_post_format( 'gallery' , get_the_ID() ) && !empty($rezilla_gallery_ids)){
                if ( is_rtl() ) {
                    $rezilla_rtl = 'true';
                }else{
                    $rezilla_rtl = 'false';
                }
                ?>
                    <div class="post-gallerys" data-slick='{"rtl":<?php echo esc_attr($rezilla_rtl); ?>}'>
                    <?php 
                    foreach( $rezilla_gallery_ids as $gallery_id ){
                        echo wp_get_attachment_image( $gallery_id, 'rezilla-blog-full' );
                    }
                    ?>
                    </div>
                <?php 
            }elseif(has_post_thumbnail()){
                ?>
                <div class="post-img">
                <?php the_post_thumbnail('rezilla-blog-full', array('class' => 'img-responsive')); ?>
                </div>
                <?php 
            }
        ?>
       <div class="post-contents <?php echo esc_attr($rezilla_thum_class); ?>">
            <div class="post-meta-box d-flex">
                <div class="post-meta-item flex-grow-1">
                    <ul>
                        <?php if($rezilla_post_author == true ) : ?>
                        <li class="p-author"><i class="fas fa-user-alt"></i><?php rezilla_posted_by(); ?></li>
                        <?php endif; ?>
                        <?php if($rezilla_post_date == true && $rezilla_postItemLayout == 'right-sidebar' || $rezilla_postItemLayout == 'left-sidebar' ) : ?>
                        <li class="p-date"><i class="fas fa-calendar-alt"></i><?php rezilla_posted_on(); ?></li>
                        <?php endif; ?>
                        <?php if($rezilla_cmnt_number == true && get_comments_number() != 0) : ?>
                        <li class="comment-number"><i class="fas fa-comment"></i><?php comments_number( 'no responses', 'one Comment', '% Comments' ); ?></li>
                        <?php endif; ?>
                        <?php if($rezilla_show_category == true ) : ?>
                        <?php the_category(); ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php if($rezilla_share_blog == true ) : ?>
                <div class="post-share d-flex align-content-center flex-wrap">
                    <label><?php esc_html_e('Share Now','rezilla'); ?></label>
                    <?php if(function_exists('rezilla_post_share')){
                        rezilla_post_share();
                    } ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="post-title">
                <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
            </div>
            <div class="post-content">
            <p><?php echo wp_trim_words( get_the_content(), 40 ); ?></p>
            </div>
            <?php if($rezilla_show_readmore == true ) : ?>
            <div class="post-button">
                <a href="<?php echo esc_url( get_permalink() ); ?>" class="theme-btns"><?php echo esc_html($rezilla_blog_read_text); ?></a>
            </div>
            <?php endif; ?>
       </div>
    </div>
</div>
