<?php
/**
 * The template for displaying archive pages.
 *
 * @package EVR_Theme
 */

get_header('archive'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<section class="hero-banner workshops-hero-banner container-full">
				<div class="hero-content-container container-padding">
					<div class="hero-content container-max800">
						<h1 class="hero-content-title">Workshops</h1>
						<a class="hero-button" href="#workshops-content">Learn More <i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></a>
					</div>
				</div>
			</section>

			<section class="workshops-content">

				<h2>Upcoming Events</h2>
				<div class="menu-line"></div>

				<?php
					$args = array( 
						'post_type' => 'workshop', 
						'posts_per_page' => 8, 
						'orderby' => 'date',
						'order' => 'ASC'
						);
					$workshops = get_posts( $args );
				?>
				
				<ul class="workshop-list">
					<?php foreach ( $workshops as $workshop ) : setup_postdata( $workshop ); ?>
					<a href="<?php esc_url(  the_permalink() )?>">
					<li class="single-workshop">
						<img class="workshop-image" src="<?php echo CFS()->get( 'workshop_image' ); ?>">
						<h3 class="workshop-title"><?php the_title() ?></h3>
							<p class="workshop-date"><?php echo CFS()->get('workshop_date'); ?></p>
							<p class="workshop-time"><?php echo CFS()->get('workshop_time'); ?></p>
						</a>
					</li>
					</a>
					<?php endforeach; wp_reset_postdata(); ?>
				</ul>

			<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
