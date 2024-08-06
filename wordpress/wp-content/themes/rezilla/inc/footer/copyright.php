<?php 
$rezilla_copyright_text = rezilla_options('rezilla_copyright_text');
$rezilla_footer_menu = rezilla_options('rezilla_footer_menu');
$rezilla_footer_menu_show = rezilla_options('rezilla_footer_menu_show', false );
if($rezilla_footer_menu_show == true ){
    $class = 'col-lg-6 col-md-6 col-sm-12 col-12';
}else{
    $class = 'col-lg-12 col-md-12 col-sm-12 col-12 text-center';
}
?>
<div class="copyright-area">
    <div class="container">
        <div class="copyright-inner">
        <div class="row">
            <div class="<?php echo esc_attr($class); ?>">
                <div class="site-info">
                    <?php echo wp_kses($rezilla_copyright_text,'rezilla_allowed_html'); ?>
                </div><!-- .site-info -->
            </div>
           <?php if( $rezilla_footer_menu_show == true ) : ?>
            <div class="<?php echo esc_attr($class); ?>">
               <div class="footer-menu">
               <?php 
                    wp_nav_menu(
                        array(
                            'container' 		=> false,
                            'menu' 				=> $rezilla_footer_menu,
                            'theme_location' 	=> $rezilla_footer_menu,
                            'menu_id'        	=> 'footer-menu',
                            'menu_class'		=> 'footer-menu',
                            'echo'              => true,
                        )
                    );
                ?>
               </div>
            </div>
            <?php endif; ?>
        </div>
        </div>
    </div>
</div>