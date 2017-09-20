<?php
/**
 * Template part for displaying single workshop posts.
 *
 * @package EVR_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="single-page-header container-max800 container-padding">
		<div class="single-page-hero-banner">
			<img class="content-image" src="<?php echo CFS()->get( 'workshop_image' ) ?>">
		</div>
		<div class="banner-title">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
	
	<section class="single-page-content container-max800 container-padding">
		
		<p class="workshop-description"><?php echo CFS()->get( esc_html('workshop_description') ) ?></p>
		<p class="single-item-price">$<?php echo CFS()->get( esc_html('workshop_price') ) ?></p>

		<div class="workshop-details container-separator-top-bottom dashed-line">
			<div class="workshop-info">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/workshop/mbri-info.svg" alt="Icon of information">
				<p class="workshop-details-info">Capacity: <?php echo CFS()->get( esc_html('maximum_capacity') ) ?></p>
			</div>
			<div class="workshop-info">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/workshop/mbri-info.svg" alt="Icon of information">
				<p class="workshop-details-info">Date: <?php echo date( 'F j, Y', strtotime( CFS()->get( esc_html('workshop_date') ) ) )  ?></p>
			</div>
			<div class="workshop-info">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/workshop/mbri-info.svg" alt="Icon of information">
				<p class="workshop-details-info">Time: <?php echo CFS()->get( esc_html('workshop_time') ) ?></p>
			</div>
			<div class="workshop-info">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/workshop/mbri-info.svg" alt="Icon of information">
				<p class="workshop-details-info">Instructor: <?php echo CFS()->get( esc_html('instructor_name') ) ?></p>
			</div>		
		</div><!-- end of workshop-details -->

		<div class="button-border-orange">
			<a href="https://www.eventbrite.ca/o/east-van-roasters-6189065301">
				<div class="border1">
					<div class="border2">Register</div>
				</div>
			</a>   
		</div>
		
	</section>
</article><!-- #post-## -->
