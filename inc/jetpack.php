<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Green Lake
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function greenlake_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'greenlake_jetpack_setup' );
