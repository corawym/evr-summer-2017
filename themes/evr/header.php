<?php
/**
 * The header for our theme.
 *
 * @package EVR_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description screen-reader-text"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-nav-bg-color main-navigation" role="navigation">
					<div class="main-nav-container">
						<div class="logo-title-hamburger">
							<div class="header-logo">
								<a href="<?php echo home_url() ?>">
									<img class="header-logo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/evr-round-logo.svg" alt="East Van Roasters's round logo">
								</a>
							</div>
							<?php the_title( '<h1 id="mobile-header" class="mobile-header-title mobile-header-title-hidden">', '</h1>' ) ?>
							<button id="hamburger" class="menu-toggle hamburger" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						</div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'menu hide-menu' ) ); ?>
					</div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">