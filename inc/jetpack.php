<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package _k
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function _k_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => '_k_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function _s_jetpack_setup
add_action( 'after_setup_theme', '_k_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function _k_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function _s_infinite_scroll_render
