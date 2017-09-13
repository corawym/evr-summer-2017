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
			<p class="chocolate-price">$<?php echo CFS()->get( esc_html('chocolate_price') ) ?></p>
			<p class="bean-origin"><?php echo CFS()->get( esc_html('bean_origin') ) ?>
				<span class="availability"><?php echo CFS()->get( esc_html('availability') ) ?></span>
			</p>

			<p class="chocolate-type"><?php echo CFS()->get( esc_html('chocolate_type') ) ?></p>
		</div>

		<div class="button-border-orange">
			<a href="#">
				<div class="border1">
					<div class="border2">Register</div>
				</div>
			</a>   
		</div>

		
	</section>

</article><!-- #post-## -->
