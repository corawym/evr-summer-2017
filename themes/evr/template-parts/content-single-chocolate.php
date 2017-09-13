<?php
/**
 * Template part for displaying single posts.
 *
 * @package EVR_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single-chocolate-header">
		<div class="single-chocolate-hero-banner">
			<img class="chocolate-image content-image" src="<?php echo CFS()->get( 'chocolate_image' ) ?>">
		</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
	</header><!-- .entry-header -->
	
	<section class="single-chocolate-content">
		
		<p class="chocolate-description"><?php echo CFS()->get( esc_html('chocolate_description') ) ?></p>
		
		<div class="chocolate-details">
			<p class="chocolate-price"><?php echo CFS()->get( esc_html('chocolate_price') ) ?></p>
			<div class="chocolate-info bean-origin">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/green-bean.svg" alt="">
				<p class="chocolate-inline">Bean / <?php echo CFS()->get( esc_html('bean_origin') ) ?></p>
			</div>
			<div class="chocolate-info availability">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/spring-icon.svg" alt="">
				<p class="chocolate-inline"><?php echo CFS()->get( esc_html('availability') ) ?></p>
			</div>

			<div class="chocolate-info chocolate-type">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/mbri-info.svg" alt="">
				<p class="chocolate-inline"><?php echo CFS()->get( esc_html('chocolate_type') ) ?></p>
		</div>
		
	</section>

</article><!-- #post-## -->