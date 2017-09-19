<?php
/**
 * Template part for displaying single workshop posts.
 *
 * @package EVR_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single-workshop-header container-max800 container-padding">
		<div class="single-workshop-hero-banner">
			<img class="content-image" src="<?php echo CFS()->get( 'workshop_image' ) ?>">
		</div>
		<div class="banner-title">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
	
	<section class="single-workshop-content container-max800 container-padding">
		
		<p class="workshop-description"><?php echo CFS()->get( esc_html('workshop_description') ) ?></p>
		<p class="workshop-price">$<?php echo CFS()->get( esc_html('workshop_price') ) ?></p>

		<div class="workshop-details">
			<p class="workshop-instructor">Capacity: <?php echo CFS()->get( esc_html('maximum_capacity') ) ?></p>
			<p class="workshop-date">Date: <?php echo CFS()->get( esc_html('workshop_date') ) ?></p>
			<p class="workshop-time">Time: <?php echo CFS()->get( esc_html('workshop_time') ) ?></p>
			<p class="workshop-instructor">Instructor: <?php echo CFS()->get( esc_html('instructor_name') ) ?></p>
		</div>

		<div class="button-border-orange">
			<a href="https://www.eventbrite.ca/o/east-van-roasters-6189065301">
				<div class="border1">
					<div class="border2">Register</div>
				</div>
			</a>   
		</div>
		
	</section>
</article><!-- #post-## -->
