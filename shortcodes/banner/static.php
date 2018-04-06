<?php if (!defined('FW')) die('Forbidden');

// base urls
$base_statics = '/shortcodes/banner/static/';
$base_nodemodules = '/shortcodes/banner/node_modules/';

$shortcodes_extension = fw_ext('shortcodes');

wp_enqueue_style(
    'fw-slick',
    $shortcodes_extension->get_uri( $base_nodemodules . 'slick-carousel/slick/slick.css' )
);

wp_enqueue_style(
    'fw-shortcode-icon-slider-slick-theme',
    $shortcodes_extension->get_uri( $base_nodemodules . 'slick-carousel/slick/slick-theme.css' )
);

wp_enqueue_script(
    'fw-slick',
    $shortcodes_extension->get_uri( $base_nodemodules . 'slick-carousel/slick/slick.js' )
);

/*wp_enqueue_style(
	'e25-shortcode-banner-slick',
	$shortcodes_extension->get_uri( '/shortcodes/e25-banners/static/css/slick.css' )
);

wp_enqueue_style(
	'e25-shortcode-banner-slick-theme',
	$shortcodes_extension->get_uri( '/shortcodes/e25-banners/static/css/slick-theme.css' )
);*/

wp_enqueue_script(
	'e25-shortcode-banner-js',
	$shortcodes_extension->get_uri( $base_nodemodules . 'js/jquery-1.11.0.min.js' ),
	array( 'jquery' ),
	false,
	true
);

/*wp_enqueue_script(
	'e25-shortcode-banner-slick',
	$shortcodes_extension->get_uri( '/shortcodes/e25-banners/static/js/slick.min.js' ),
	array( 'jquery' ),
	false,
	true
);*/

wp_enqueue_script(
	'e25-shortcode-banner',
	$shortcodes_extension->get_uri( $base_nodemodules . 'js/scripts.js' ),
	array( 'jquery' ),
	false,
	true
);

wp_enqueue_style(
	'e25-shortcode-banner',
	$shortcodes_extension->get_declared_URI( $base_nodemodules . 'css/styles.css' )
);