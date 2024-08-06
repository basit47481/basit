<?php 
$rezilla_show_cta = rezilla_options('rezilla_show_cta');
$rezilla_enable_sticky_menu = rezilla_options('rezilla_enable_sticky_menu');
if($rezilla_enable_sticky_menu == true ){
	$sticky = 'sticky-header';
}else{
	$sticky = 'no-sticky';
}

if(is_page() || is_singular('post') || is_singular('rezilla_team') && get_post_meta(get_the_ID(), 'rezilla_metabox', true)) {
	$rezillaMeta = get_post_meta(get_the_ID(), 'rezilla_metabox', true);
} else {
	$rezillaMeta = array();
}
?>
<header id="masthead" class="site-header header-one">
	<div class="main-header" id="<?php echo esc_attr($sticky); ?>">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light main-navigation">
				<div class="logo-area">
					<div class="site-branding">
						<?php
						if(!empty(is_array($rezillaMeta) && array_key_exists('rezilla_meta_select_logo', $rezillaMeta)) && $rezillaMeta['rezilla_meta_select_logo'] == true && !empty($rezillaMeta['rezilla_meta_logo']['url'])){
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo esc_url($rezillaMeta['rezilla_meta_logo']['url']); ?>" alt="<?php esc_attr(bloginfo( 'name' )); ?>">
							</a>
							<?php 
						}elseif(has_custom_logo()){
							the_custom_logo();
						}else{
							$rezilla_ShowLogo = rezilla_options('rezilla_show_hlogo1');
							$rezilla_logo = rezilla_options('rezilla_logo1');
							if( $rezilla_ShowLogo == true && !empty($rezilla_logo['url'])){
								$rezilla_logoUrl = $rezilla_logo['url'];?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img src="<?php echo esc_url($rezilla_logoUrl); ?>" alt="<?php esc_attr(bloginfo( 'name' )); ?>">
								</a>
							<?php }else{ ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php }
						}
						?>
					</div><!-- .site-branding -->
				</div>
				<div class="navbar-collapse nav-menu stellarnav">
					<?php
					if (!empty(is_array($rezillaMeta) && array_key_exists('rezilla_meta_select_menu', $rezillaMeta) &&  $rezillaMeta['rezilla_meta_enable_header_menu'] == true) ) {
						$selectedmenu = $rezillaMeta['rezilla_meta_select_menu'];
					}else{
						$selectedmenu = '';
					}
					wp_nav_menu(
						array(
							'container' 		=> false,
							'theme_location' 	=> 'mainmenu',
							'menu' 				=> $selectedmenu,
							'menu_id'        	=> 'mainmenu',
							'menu_class'		=>'ms-0 me-auto',
							'echo'              => true,
							'fallback_cb'       => 'rezilla_Nav_Walker::fallback',
							'walker'            => new rezilla_Nav_Walker
						)
					);
					?>
					<?php if( '1' == rezilla_options('rezilla_header_enable_search') ){
						get_template_part('inc/header/search','button'); 
					} ?>
					<?php if( '1' == rezilla_options('rezilla_header_enable_cta') ){
						get_template_part('inc/header/cta','button'); 
					} ?>
					
				</div>
			</nav>
		</div>
	</div>
</header><!-- #masthead -->