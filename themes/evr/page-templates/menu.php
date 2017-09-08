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

			<section class="menu-content-container container-full" id="menu-content">
				<div class="menu-content container-max1080">

					<section class="menu-content-coffee">
						<h2>From the Coffee Bar</h2>
						<p>Our single-origin drinking chocolates and espresso drinks are made in house with our freshly roasted beans. All espresso bar drinks are made with organic dairy, almond or soy milk.</p>
						<!-- Below is coffee bar menu -->
					</section>

					<section class="menu-content-chocolate">
						<h2>From the Chocolate Lab</h2>
						<p>We source and use organic fair-trade and direct-trade cacao beans , processing and handcrafting them in-house to produce finished bars that boast regional flavours from the Dominican Republic, Madagascar and Peru. 
							Learn more about our bean to bar chocolate making process.</p>
						<!-- Below is the chocolate lab menu -->
					</section>
				</div>
			</section><!-- end of .menu-content-container-->
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
