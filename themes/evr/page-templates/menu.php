<?php
/**
 * Template Name: Menu
 *
 * @package EVR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="hero-banner menu-hero-banner container-full">
        <div class="hero-content-container container-padding">
          <div class="hero-content container-max1080">
            <h1 class="hero-content-title">menu</h1>
            <a class="hero-button" href="#menu-content">Learn More <i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></a>
          </div>
        </div>
      </section>

			<section class="menu-content-container container-full" id="menu-content scroll-to">
				<div class="menu-content container-full">

					<section class="menu-coffee-container container-full">
						<div class="menu-coffee-content">
							<h2>From the Coffee Bar</h2>
							<div class="menu-line"></div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/chocolate-bar.svg" alt="A Coffer Bar icon">
							<p>Our single-origin drinking chocolates and espresso drinks are made in house with our freshly roasted beans. All espresso bar drinks are made with organic dairy, almond or soy milk.</p>
							
							<!-- Below is coffee bar menu -->
							<div class="menu-evr-menu-container">
								<h3 class="menu-section-title"><?php echo CFS()->get('chocolate'); ?></h2>
							</div>

						</div>
						
						
					</section><!-- end of .menu-coffee-container -->

					<section class="menu-chocolate-container">
						<div class="menu-chocolate-content">
							<h2>From the Chocolate Lab</h2><div class="menu-line"></div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu/chocolate-bar.svg" alt="A Chocolate Bar icon">
							<p>We source and use organic fair-trade and direct-trade cacao beans , processing and handcrafting them in-house to produce finished bars that boast regional flavours from the Dominican Republic, Madagascar and Peru. 
								Learn more about our bean to <span><a href="#">bar chocolate making process.</a></span></p>
						</div>

						<!-- Below is the chocolate lab items -->
						<div class="menu-chocolate-grid">
							<?php
								$args = array( 
									'post_type' => 'chocolate', 
									'posts_per_page' => 4, 
									'orderby' => 'date',
									'order' => 'ASC'
									);
								$chocolate_items = get_posts( $args ); // returns an array of posts
							?>

							<?php foreach ( $chocolate_items as $post ) : setup_postdata( $post ); ?>
							<article class="chocolate-items-wrapper">
								<img class="chocolate-items-image" src="<?php echo CFS()->get( 'chocolate_image' ); ?>">
								<p class="chocolate-name"><?php echo CFS()->get('chocolate_name'); ?></p>
								<p class="chocolate-price"><?php echo CFS()->get('chocolate_price'); ?></p>
								</article>
							<?php endforeach; wp_reset_postdata(); ?>

						</div>
					</section><!-- end of .menu-chocolate-container -->

				</div>
			</section><!-- end of .menu-content-container -->

			<section class="menu-location">
				<p>Our chocolate and coffee beans can also be found at a select few <span><a href="#">locations</a></span> in Vancouver.</p>
			</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
