<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rezilla
 */
$rezilla_single_post_author = rezilla_options('rezilla_single_post_author', true);
$rezilla_single_post_date = rezilla_options('rezilla_single_post_date', true);
$rezilla_single_post_cmnt = rezilla_options('rezilla_single_post_cmnt', true);
$rezilla_single_post_cat = rezilla_options('rezilla_single_post_cat');
$rezilla_single_post_tag = rezilla_options('rezilla_single_post_tag', true);
$rezilla_post_share = rezilla_options('rezilla_post_share', false);
$rezilla_post_top_share = rezilla_options('rezilla_post_top_share', false);
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

<article id="post-<?php the_ID(); ?>" <?php post_class('post-details'); ?>>
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
			<div class="vendor post-img">
				<<?php echo esc_attr($code); ?> width="100%" height="500" src="<?php echo esc_url($rezilla_postvideo['rezilla_post_video']); ?>" frameborder="0" allowfullscreen="false"></<?php echo esc_attr($code); ?>>
			</div>
			<?php 
		}elseif(has_post_format( 'audio' , get_the_ID() ) && !empty($rezilla_postaudio['rezilla_post_audio'])){
			?>
			<div class="vendor post-img">
				<<?php echo esc_attr($code); ?> width="100%" height="400" src="<?php echo esc_url($rezilla_postaudio['rezilla_post_audio']); ?>" frameborder="0" allowfullscreen="false"></<?php echo esc_attr($code); ?>>
			</div>
			<?php 
		}elseif(has_post_format( 'gallery' , get_the_ID() ) && !empty($rezilla_gallery_ids)){
			?>
				<div class="post-gallerys post-img">
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
				<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
			</div>
			<?php 
		}
	?>
	<div class="<?php echo esc_attr($rezilla_thum_class); ?> post-contents entry-content">
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="post-meta-box d-flex">
			<div class="post-meta-item flex-grow-1">
				<ul>
					<?php if($rezilla_single_post_author == true ) : ?>
					<li class="p-author"><i class="fas fa-user-alt"></i><?php rezilla_posted_by(); ?></li>
					<?php endif; ?>
					<?php if($rezilla_single_post_date == true) : ?>
					<li class="p-date"><i class="fas fa-calendar-alt"></i><?php rezilla_posted_on(); ?></li>
					<?php endif; ?>
					<?php if($rezilla_single_post_cmnt == true && get_comments_number() != 0) : ?>
                    <li class="comment-number"><i class="fas fa-comment"></i><?php comments_number( 'no responses', 'one Comment', '% Comments' ); ?>.</li>
                    <?php endif; ?>
					<?php if($rezilla_single_post_cat == true ) : ?>
					<?php the_category(); ?>
					<?php endif; ?>
				</ul>
			</div>
			<?php if($rezilla_post_top_share == true ) : ?>
			<div class="post-share d-flex align-content-center flex-wrap">
				<label><?php esc_html_e('Share Now','rezilla'); ?></label>
				<?php if(function_exists('rezilla_post_share')){
					rezilla_post_share();
				} ?>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<div class="post-content">
		<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					esc_html__( 'Continue reading %s', 'rezilla' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				)
			);
			?>
		</div>
		
		<?php if( has_tag() or function_exists( 'rezilla_post_share' ) ) : ?>
		<div class="post-tag-social d-flex">
		<?php if($rezilla_single_post_tag == true ) : ?>
			<div class="post-tag flex-grow-1">
			<?php if(has_tag()) : ?>
				<label><?php esc_html_e('Tags :','rezilla'); ?></label>	<?php rezilla_post_tag(); ?>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if($rezilla_post_share == true ) : ?>
			<div class="post-share">
				<label><?php esc_html_e('Share','rezilla'); ?></label>
				<?php if(function_exists('rezilla_post_share')){
					rezilla_post_share();
				} ?>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
</article>
