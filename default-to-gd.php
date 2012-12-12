<?php
/*
Plugin Name: Default to GD
Plugin URI: http://wordpress.org/extend/plugins/default-to-gd
Description: Sets GD as default WP_Image_Editor class.
Author: Mike Schroder
Version: 1.0
Author URI: http://www.getsource.net/
*/

function ms_image_editor_default_to_gd( $editors ) {
	$gd_editor = 'WP_Image_Editor_GD';

	$editors = array_diff( $editors, array( $gd_editor ) );
	array_unshift( $editors, $gd_editor );

	return $editors;
}
add_filter( 'wp_image_editors', 'ms_image_editor_default_to_gd' );