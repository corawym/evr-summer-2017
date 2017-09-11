<?php
/**
 * Template part for displaying single posts.
 *
 * @package EVR_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single-workshop-header">
		<div class="single-workshop-hero-banner">
			<img class="workshop-image content-image" src="<?php echo CFS()->get( 'workshop_image' ) ?>">
		</div>

		
	</header><!-- .entry-header -->
	
	<section class="single-workshop-content">
		
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<p class="workshop-description"><?php echo CFS()->get( esc_html('workshop_description') ) ?></p>
		
		<div class="workshop-details">
			<p class="workshop-price">$<?php echo CFS()->get( esc_html('workshop_price') ) ?></p>
			<p class="workshop-date"><?php echo CFS()->get( esc_html('workshop_date') ) ?>
				<span class="workshop-time"><?php echo CFS()->get( esc_html('workshop_time') ) ?></span>
			</p>

			<p class="workshop-instructor">Instructor: <?php echo CFS()->get( esc_html('instructor_name') ) ?></p>
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
