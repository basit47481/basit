<?php 

/*------------------------------
    COMMENT FORM FIELD
-------------------------------*/
if( ! function_exists('rezilla_comment_form_default_fields') ){

    function rezilla_comment_form_default_fields($fields){
        global $aria_req;
        $commenter     = wp_get_current_commenter();
        $req           = get_option( 'require_name_email' );
        $aria_req      = ($req ? " aria-required='true' " : '');
        $required_text = ' ';    
        $fields        =  array(
            'author'   => '<div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 cform-input name">
                                <input type="text" name="author" value="'.esc_attr( $commenter['comment_author'] ).'" '.$aria_req.' placeholder="'.esc_attr__( 'Your Name *', 'rezilla' ).'">
                            </div>',
            'email'    => '<div class="col-sm-6 cform-input email">
                                <input type="email" name="email" value="'.esc_attr( $commenter['comment_author_email'] ).'" '.$aria_req.' placeholder="'.esc_attr__( 'Your Email *', 'rezilla' ).'">
                            </div>
                        </div>
                    </div>',
            'url'      => '<div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12 cform-input website">
                                        <input type="url" name="url" value="'.esc_url( $commenter['comment_author_url'] ).'" '.$aria_req.' placeholder="'.esc_attr__( 'Your Website', 'rezilla' ).'">
                                    </div>
                                </div>
                            </div>'
        );
        return $fields;
    }
}
add_filter('comment_form_default_fields', 'rezilla_comment_form_default_fields');


/*-----------------------------------------
    OVERWRITE COMMENT FORM DEFAULT
-------------------------------------------*/
if( ! function_exists('rezilla_comment_form_defaults') ){

    function rezilla_comment_form_defaults( $defaults ) {
        global $aria_req;
        $defaults = array(
            'class_form'    => 'comment-form',
            'title_reply'   => esc_html__( 'Leave A Comment', 'rezilla' ),
            'comment_field' => '<div class="form-group cform-input message">
                                    <textarea name="comment" placeholder="'.esc_attr__( 'Your Comment', 'rezilla' ).'" '.$aria_req.' rows="10"></textarea>
                                </div>',
            'comment_notes_before'  => '',
            'label_submit'  => esc_html__( 'Post Comment', 'rezilla' ),
        );
        return $defaults;
    }    
}
add_filter( 'comment_form_defaults', 'rezilla_comment_form_defaults' );


/*------------------------------
    CUSTOM COMMENT
--------------------------------*/
if ( !function_exists('rezilla_comment') ) {
    function rezilla_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>

            <?php if( get_comment_type() == 'pingback' || get_comment_type() == 'trackback' ): ?>
        <li id="comment-<?php comment_ID() ?>" class="single-comment pingback-comment">

            <div class="comment-details">
                <div class="comment-meta">
                    <h4><?php comment_author_link(); ?></h4>
                    <a class="comment-date" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                        <?php printf( esc_html__('%1s','rezilla'), get_comment_date() ); ?>
                    </a>
                </div>
                <div class="comment-content">
                    <?php wpautop( comment_text() ); ?>
                </div>
                <div class="comment-edit">
                    <?php  edit_comment_link( esc_html__( 'Edit Comment', 'rezilla' ) ); ?>
                </div>
            </div>

            <?php endif; ?>

            <?php if( get_comment_type() == 'comment' ) : ?>
        <li id="comment-<?php comment_ID() ?>" class="single-comment">
            <div class="comment-details">
                <div class="comment-author">
                    <?php
                        $avatar_size = 100;
                        if ( $comment->comment_parent != '0' ) {
                            $avatar_size = 80; 
                        } 
                        echo get_avatar( $comment->comment_author_email,$avatar_size );
                    ?>
                </div>
                <div class="comment-meta">
                    <div class="comment-left-meta">
                        <h4 class="author-name"><?php comment_author_link(); ?></h4>
                        <a class="comment-date" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                            <?php printf( esc_html__('%1s','rezilla'), get_comment_date() ); ?>
                        </a>
                    </div>
                </div>
                <div class="comment-content">
                    <?php wpautop( comment_text() ); ?>
                </div>
                <div class="comment-reply">
                    <?php
                        comment_reply_link( 
                            array_merge(
                                $args,
                                array(
                                    'depth'      => $depth, 
                                    'max_depth'  => $args['max_depth'],
                                    'reply_text' => '<i class="fa fa-reply"></i>'.esc_html__( 'Reply', 'rezilla' ), 
                                )
                            )
                        );
                    ?>
                </div>
                <?php  if ( $comment->comment_approved == '0' ) : ?>
                <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.','rezilla' ); ?></em><br/>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        <?php
    }
}