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
        <div class="hero-content-container container-padding">
          <div class="hero-content container-max800">
            <h1 class="hero-content-title">process</h1>
            <p class="hero-content-description">Do you want to know what product we made so far? go find out our deceliouse chocolate and coffee products.</p> 
            <a class="hero-button" href="#process-content">Learn More <i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></a>
          </div>
        </div>
      </section>
			
			<section id="process-content">
				<div class="process-text">
					<h2>We are a bean to bar chocolate maker</h2>
					<p>
						We love making chocolate and having a direct connection to the farmers 
						that grow and harvest the raw cacao that we use.
					</p>
					<p>
						Chocolate making is a multi-step, multi-location process that we jump 
						into once the dried beans arrive at our shop.
					</p> 
					<p>
						We sort the beans, roast and winnow (remove the shells), grind and conche 
						(refine) small batches of chocolate which we temper and make into chocolate 
						bars or confections.
					</p>

					<img class="process-chocolate" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/process/gray-icon.svg" alt="Chocolate process graphic">

					<h2>We use organic fair-trade beans</h2>
					<p>
						Working with philanthropic suppliers is very important to us. 
					</p>
					<p>
						Direct trade is ideal because it means that the farmers are getting more for 
						their product. 
					</p>
					<p>
						Organic means that the farmers are working in a healthier environment and 
						fairly traded is great if it doesn't prove too costly for the farmer.
					</p>
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
								<div id="hidden-bean-info-1" class="hidden-bean-info">
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
								<a id="more-details-2" class="more-details">More details</a>
								<div id="hidden-bean-info-2" class="hidden-bean-info">
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
								<a id="more-details-3" class="more-details">More details</a>
								<div id="hidden-bean-info-3" class="hidden-bean-info">
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
								<a id="more-details-4" class="more-details">More details</a>
								<div id="hidden-bean-info-4" class="hidden-bean-info">
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
