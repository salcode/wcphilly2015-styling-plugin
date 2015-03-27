<?php
/*
 * Plugin Name: WordCamp Philly 2015 Styles
 * Description: Test styles for the WordCamp Philly 2015 Website
 * Version: 1.0.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
add_action( 'wp_enqueue_scripts', 'wcphilly2015_enqueue_css', 15 );
add_action( 'wp_footer', 'wcphilly2015_add_livereload' );

function wcphilly2015_enqueue_css() {
	$css_url = plugins_url( 'assets/wcphilly2015.min.css', __FILE__ );
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	wp_enqueue_style( 'wcphilly2015', $css_url, array(), $version );
}

function wcphilly2015_add_livereload() {
?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<?php
}
