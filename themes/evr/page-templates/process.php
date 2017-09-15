<?php
/**
 * The template for displaying all pages.
 *
 * @package EVR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area page-process">
		<main id="main" class="main-process" role="main">

			<section class="hero-banner process-hero-banner container-full">
        <div class="hero-content-container ">
          <div class="hero-content container-max1080 container-padding">
            <h1 class="hero-content-title">process</h1>
            <p class="hero-content-description">Do you want to know what product we made so far? go find out our deceliouse chocolate and coffee products.</p> 
            <a class="hero-button" href="#process-content">Learn More <i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></a>
          </div>
        </div>
      </section>
			
			<section id="process-content">
				<div class="process-information container-max1080">
					<h2 class="who-we-are-title"><?php echo CFS()->get( esc_html('who_we_are_title') ) ?></h2>
					<p class="who-we-are"><?php echo CFS()->get( esc_html('who_we_are') ) ?></p>

					<img class="process-chocolate" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/process/gray-icon.svg" alt="Chocolate process graphic">

					<h2 class="what-we-do-title"><?php echo CFS()->get( esc_html('what_we_do_title') ) ?></h2>
					<p class="what-we-do"><?php echo CFS()->get( esc_html('what_we_do') ) ?></p>
				</div>

				<div class="cacao-pods-image"></div>

				<div class="process-text">
					<h2>Our Beans</h2>
					<ul>
						<li>
							<img class="bean-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/process/bean-dr.svg" alt="Cacao pod with Peruvian flag">
							<div class="bean-info">
								<h3>Dominican Republic OKO Caribe</h3>
								<h4>Region:</h4>
								<p>San Francisco de Macoris</p>
								<h4>Tasting Notes:</h4>
								<p>leathery winey with a bit of nuttiness</p>
								<a id="more-details-1" class="more-details">More details</a>
								<div id="hidden-bean-info" class="hidden-bean-info">
									<p>
										OKO Caribe has perfected the art of working with smallholder farmers in the San Francisco
										de Macoris region of the Dominican Republic. Business owners Gualberto and Adriano consistently
										deliver this high quality cacao with deep chocolate and red fruit notes.
									</p>
								</div>
							</div>
						</li>
						<li>
							<img class="bean-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/process/bean-guat.svg" alt="Cacao pod with Peruvian flag">
							<div class="bean-info">
								<h3>Lachua, Guatemala</h3>
								<h4>Region:</h4>
								<p>Alta Verapaz</p>
								<h4>Tasting Notes:</h4>
								<p>bright fruit flavour with light acidity and a brown fruit finish</p>
								<a id="more-details" class="more-details">More details</a>
								<div id="hidden-bean-info" class="hidden-bean-info">
									<p>
										Many farmers still live entirely off the grid, in areas without electrcity or phone signal. 
										Clonal varieties include a mix of trinitarios, upper Amazon forasteros and amelonados with some
										presence of Nacional. With technical and market support from Cacao Verapaz, the cacao from this 
										region has quickly become renowned in the craft chocolate market.
									</p>
								</div>
							</div>
						</li>
						<li>
							<img class="bean-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/process/bean-mad.svg" alt="Cacao pod with Peruvian flag">
							<div class="bean-info">
								<h3>Madagascar</h3>
								<h4>Region:</h4>
								<p>Ambanja, Diana Region</p>
								<h4>Tasting notes:</h4>
								<p>red berries, lemon and nuts with a bright acidity</p>
								<a id="more-details" class="more-details">More details</a>
								<div id="hidden-bean-info" class="hidden-bean-info">
									<h4>Climate:</h4>
									<p>hot and dry</p>
									<p>
										Grown and fermented on the farm this Madagascar cacao is organic and fairly traded and 
										direct from the SOMIA farm, certified organic by ECOCERT,SA.
									</p>
								</div>
							</div>
						</li>
						<li>
							<img class="bean-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/process/bean-peru.svg" alt="Cacao pod with Peruvian flag">
							<div class="bean-info">
								<h3>Peru</h3>
								<h4>Region:</h4>
								<p>Río Ene</p>
								<h4>Tasting notes:</h4>
								<p>delicate aroma of banana, black olives, red wine and aged balsamic</p>
								<a id="more-details" class="more-details">More details</a>
								<div id="hidden-bean-info" class="hidden-bean-info">
									<p>
										We have been sourcing this criollo cacao directly from the Pangoa coop in central Peru
										since we first opened our doors in 2012.
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
