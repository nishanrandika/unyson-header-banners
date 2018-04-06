<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');

wp_enqueue_style(
	'e25-shortcode-banner-slick',
	$shortcodes_extension->get_uri( '/shortcodes/e25-banners/static/css/slick.css' )
);

wp_enqueue_style(
	'e25-shortcode-banner-slick-theme',
	$shortcodes_extension->get_uri( '/shortcodes/e25-banners/static/css/slick-theme.css' )
);

wp_enqueue_script(
	'e25-shortcode-banner-js',
	$shortcodes_extension->get_uri( '/shortcodes/e25-banners/static/js/jquery-1.11.0.min.js' ),
	array( 'jquery' ),
	false,
	true
);

wp_enqueue_script(
	'e25-shortcode-banner-slick',
	$shortcodes_extension->get_uri( '/shortcodes/e25-banners/static/js/slick.min.js' ),
	array( 'jquery' ),
	false,
	true
);

wp_enqueue_script(
	'e25-shortcode-banner',
	$shortcodes_extension->get_uri( '/shortcodes/e25-banners/static/js/scripts.js' ),
	array( 'jquery' ),
	false,
	true
);

wp_enqueue_style(
	'e25-shortcode-banner',
	$shortcodes_extension->get_declared_URI('/shortcodes/e25-banners/static/css/styles.css')
);