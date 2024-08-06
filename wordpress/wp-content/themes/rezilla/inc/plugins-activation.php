<?php

require_once get_theme_file_path('/inc/class-tgm-plugin-activation.php');
add_action( 'tgmpa_register', 'rezilla_register_required_plugins' );

function rezilla_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => esc_html__('Rezilla Core','rezilla'), 
			'slug'               => 'rezillacore',
			'source'             => get_template_directory() . '/inc/plugins/rezillacore.zip', 
			'required'           => true,
			'version'            => '1.0.0',
		),
		array(
			'name'               => esc_html__('Codestar Framework','rezilla'), 
			'slug'               => 'codestar-framework',
			'source'             => get_template_directory() . '/inc/plugins/codestar-framework.zip', 
			'required'           => true,
			'version'            => '2.2.9',
		),
		array(
			'name'      => esc_html__('Elementor','rezilla'),
			'slug'      => 'elementor',
			'required'  => true,
		),
		array(
			'name'      => esc_html__('One Click Demo Import','rezilla'),
			'slug'      => 'one-click-demo-import',
			'required'  => true,
		),
		array(
			'name'      => esc_html__('Breadcrumb Navxt','rezilla'),
			'slug'      => 'breadcrumb-navxt',
			'required'  => '',
		),
		array(
			'name'      => esc_html__('Contact Form 7','rezilla'),
			'slug'      => 'contact-form-7',
			'required'  => '',
		),
		array(
			'name'      => esc_html__('Mailchimp','rezilla'),
			'slug'      => 'mailchimp-for-wp',
			'required'  => '',
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'rezilla',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
