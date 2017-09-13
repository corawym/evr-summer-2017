<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package EVR_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function evr_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'evr_body_classes' );

// Add extra options on WP Admin menu
function evr_linked_url() {
		add_menu_page( 'Edit Menu', 'Menu', 'manage_options', 'post.php?post=17&action=edit', '', 'dashicons-book', 7 );
}
add_action( 'admin_menu', 'evr_linked_url' );

