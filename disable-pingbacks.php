<?php
/**
 * Plugin Name: Disable Pingbacks
 * Plugin URI: http://www.glenscott.co.uk/disable-pingbacks/
 * Description: This plugin disables the Pingback functionality in your blog.
 * Version: 1.0
 * Author: Glen Scott
 * Author URI: http://www.glenscott.co.uk
 * License: GPL2
 */

add_filter( 'xmlrpc_methods', function( $methods ) {
	unset( $methods['pingback.ping'] );
	return $methods;
} );
