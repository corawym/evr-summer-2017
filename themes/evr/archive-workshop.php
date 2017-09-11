<?php
/**
 * The template for displaying archive pages.
 *
 * @package EVR_Theme
 */

get_header('archive'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="hero-banner workshops-hero-banner container-full">
			<div class="hero-content-container container-padding">
				<div class="hero-content container-max800">
					<h1 class="hero-content-title">Workshops</h1>
					<a class="hero-button" href="#workshops-content">Learn More <i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></a>
				</div>
			</div>
		</section>

		<section id="workshops-content" class="workshops-content">

			<h2>Upcoming Events</h2>
			<div class="h2-line"></div>

			<?php
				$args = array( 
					'post_type' => 'workshop', 
					'posts_per_page' => 8, 
					'orderby' => 'date',
					'order' => 'ASC'
				);
				$workshops = new WP_Query( $args );
			?>
			
			<ul class="workshop-list">
				<?php if ( $workshops->have_posts() ) : ?>
				<?php while ( $workshops->have_posts() ) : $workshops->the_post(); ?>
				<li class="single-workshop">
					<a href="<?php esc_url(  the_permalink() )?>">
						<div class="workshop-container">
							<div class="workshop-image-wrapper">
								<img class="workshop-image" src="<?php echo CFS()->get( 'workshop_image' ) ?>">
							</div>
							<h3 class="workshop-title"><?php esc_html( the_title() ) ?></h3>
							<p class="workshop-date"><?php echo CFS()->get( esc_html('workshop_date') ) ?></p>
							<p class="workshop-time"><?php echo CFS()->get( esc_html('workshop_time') ) ?></p>
						</div>
					</a>
				</li>
				<?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <h2>No workshops at this time!</h2>
        <?php endif; ?>
			</ul>

			<section class="interested">
				<p>Interested in doing a team building event at East Van Roasters?</p>
				<p>Interested in helping us facilitate a workshop? </p>
				<div class="button-border">
					<a href="#">
						<div class="border1">
							<div class="border2">Contact Us</div>
						</div>
					</a>   
				</div>
			</section>

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
