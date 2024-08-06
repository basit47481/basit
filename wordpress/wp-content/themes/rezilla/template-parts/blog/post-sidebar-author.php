<?php
/**
 * Template part for displaying posts sidebar layout
 *
 * @package rezilla
 */
$rezilla_authors_pagination = rezilla_options('rezilla_authors_pagination', true);
$rezilla_authorsLayout = rezilla_options('rezilla_authors_layout', 'list');
$rezilla_author_social_enable = rezilla_options('rezilla_author_social_enable', true );
$rezilla_authors_image = rezilla_options('rezilla_authors_image', true );
$rezilla_authors_name = rezilla_options('rezilla_authors_name', true );
$rezilla_authors_namet = rezilla_options('rezilla_authors_namet' );
$rezilla_authors_dname = rezilla_options('rezilla_authors_dname', true );
$rezilla_authors_dnamet = rezilla_options('rezilla_authors_dnamet' );
$rezilla_authors_email = rezilla_options('rezilla_authors_email', true );
$rezilla_authors_emailt = rezilla_options('rezilla_authors_emailt' );
$rezilla_authors_website = rezilla_options('rezilla_authors_website', true );
$rezilla_authors_websitet = rezilla_options('rezilla_authors_websitet' );
$rezilla_authors_total_post = rezilla_options('rezilla_authors_total_post', true );
$rezilla_authors_total_postt = rezilla_options('rezilla_authors_total_postt' );
$rezilla_authors_dec = rezilla_options('rezilla_authors_dec', true );
$rezilla_authors_social = rezilla_options('rezilla_authors_social', true );
$rezilla_authors_info_text = rezilla_options('rezilla_authors_info_text' );

?>
<div class="row blog-page-with-sidebar authors-page-info">
	<div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-8 author-post-items">
        <div class="row all-posts-wrapper">
            <?php
            if ( have_posts() ) :

                if ( is_home() && ! is_front_page() ) :
                    ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php
                endif;
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post(); ?>
                        <?php if ( $rezilla_authorsLayout == 'grid' ) {
                            get_template_part( 'template-parts/blog/grid-author-item', get_post_format() );
                        }else{
                            get_template_part( 'template-parts/blog/post-sidebar-item', get_post_format() );
                        } ?>
                <?php
                endwhile;
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
        </div>
        <?php 
            if($rezilla_authors_pagination == true ){
                rezilla_pagination();
            };
        ?>
	</div>
	<div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 sidebar-widget-area author-info-area">
        <div class="widget author-info-item">
            <h2 class="author-single-title"><?php echo esc_html($rezilla_authors_info_text); ?></h2>
            <?php if($rezilla_authors_image == true ) : ?>
            <div class="author-img">
                <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
            </div>
            <?php endif; ?>
            <ul>
                <?php if($rezilla_authors_name == true ) : ?>
                <li class="aname"><span><?php echo esc_html($rezilla_authors_namet); ?></span><?php the_author_meta( 'first_name'); ?> <?php the_author_meta( 'last_name'); ?></li>
                <?php endif; ?>
                <?php if($rezilla_authors_dname == true ) : ?>
                <li class="adname"><span><?php echo esc_html($rezilla_authors_dnamet); ?></span><?php the_author_meta( 'display_name'); ?></li>
                <?php endif; ?>
                <?php if($rezilla_authors_email == true ) : ?>
                <li><span><?php echo esc_html($rezilla_authors_emailt); ?></span><?php the_author_meta( 'user_email'); ?></li>
                <?php endif; ?>
                <?php if($rezilla_authors_website == true ) : ?>
                <li><span><?php echo esc_html($rezilla_authors_websitet); ?></span><a href="<?php echo esc_url(the_author_meta( 'user_url')); ?>"><?php the_author_meta( 'user_url'); ?></a></li>
                <?php endif; ?>
                <?php if($rezilla_authors_total_post == true ) : ?>
                <li><?php printf( '<span>'.esc_html($rezilla_authors_total_postt).'</span> %d', count_user_posts( get_the_author_meta('ID') ) ); ?></li>
                <?php endif; ?>
            </ul>
            <?php if($rezilla_authors_dec == true ) : ?>
            <div class="author-dec">
                <?php echo nl2br(get_the_author_meta('description')); ?>
            </div>
            <?php endif; ?>
            <?php if($rezilla_authors_social == true ) : ?>
            <div class="author-social-info">
                <ul>
                    <?php
                        $rezilla_user_cm = wp_get_user_contact_methods();
						foreach ($rezilla_user_cm as $rezilla_ucm_key => $rezilla_ucm_value) :
							$rezilla_cm_link = get_user_meta(get_the_author_meta('ID'), $rezilla_ucm_key, true);
						?>
						<?php if($rezilla_cm_link) : ?>
						<li>
							<a data-toggle="tooltip" data-placement="top" data-original-title="<?php echo esc_attr($rezilla_ucm_key) ?>" href="<?php echo esc_url($rezilla_cm_link); ?>"><span class="fab fa-<?php echo esc_attr($rezilla_ucm_key) ?>"></span>
							</a>
						</li>
						<?php endif; ?>
						<?php
						endforeach;	
					?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>