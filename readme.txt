=== Default to GD ===
Contributors: dh-shredder
Tags: image gd
Requires at least: 3.5
Tested up to: 3.5
Stable tag: 1.0

Sets GD as default WP_Image_Editor class.

== Description ==

As of WordPress 3.5, GD has been abstracted out into WP_Image_Editor, and Imagick has been made the default image manipulation engine.

In most cases, this is what you want.  However, if you're having issues with Imagick, or just prefer the way that GD handles your images, this plugin sets GD as the default WP_Image_Editor class for WordPress.

== Installation ==

1. Upload the folder `default-to-gd` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0 (2012-12-12) =
* First version