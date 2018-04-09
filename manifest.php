<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']         = __('Header Banners', 'fw');
$manifest['description']  = __('This extension lets you add image, slider or video banner.', 'fw');
$manifest['author']       = 'Nishan';

/**
 * @type bool Display on the Extensions page or it's a hidden extension
 */
$manifest['display'] = true;