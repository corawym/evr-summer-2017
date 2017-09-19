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
		add_menu_page( 'Edit Process', 'Process', 'manage_options', 'post.php?post=21&action=edit', '', 'dashicons-layout', 8 );
		add_menu_page( 'Edit Location', 'Location', 'manage_options', 'post.php?post=23&action=edit', '', 'dashicons-location', 9 );
}
add_action( 'admin_menu', 'evr_linked_url' );

// change login logo ------------------
function evr_login_logo() { ?>
	<style type="text/css">
	.login {
		background: #333;
	} 
    
	#login h1 a, .login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evr-logo.svg);
		height:150px;
		width:300px;
		background-size: 300px 150px;
		background-repeat: no-repeat;
  }
	#login .button.button-primary {
			background-color: #ff3440;
			border: none;
	}
	
	.wp-core-ui .button-primary {
		text-shadow: none;
		box-shadow: 0 1px 0 black;
	}

	.login #login_error, .login .message {
		border-left: 4px solid #ff3440;
	}

	.login #backtoblog a, .login #nav a, .login h1 a {
		color: white;
	}
	.login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
		color: red;
	}
    </style>
<?php }
add_action('login_head', 'evr_login_logo');

// hover on login logo title
function evr_login_title() {
	return 'East Van Roasters';
}
add_filter('login_headertitle', 'evr_login_title');


// link login logo to homepage
function evr_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'evr_login_logo_url' );