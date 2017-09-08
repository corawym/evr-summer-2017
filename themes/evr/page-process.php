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

					<img class="process-chocolate" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gray-icon.png" alt="Chocolate process graphic">

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
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bean-peru.png" alt="Cacao pod with Peruvian flag">
							<div class="bean-info">
								<h3>Dominican Republic OKO Caribe</h3>
								<p>Tasting notes: leathery winey with a bit of nuttiness</p>
								<span>> More details</span>
								<div id="hidden-bean-info-dr">
									<p>Region: Ambanja, Diana Region</p>
									<p>Climate: hot and dry</p>
									<p>
										Producer: Grown and fermented on the farm this Madagascar cacao is organic and 
										fairly traded and direct from the SOMIA farm, certified organic by ECOCERT, SA.
									</p>
								</div>
							</div>
						</li>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bean-peru.png" alt="Cacao pod with Peruvian flag">
							<div class="bean-info">
								<h3>Lachua, Guatemala</h3>
								<p>Tasting Notes: bright fruit flavour with light acidity and a brown fruit finish</p>
								<span>> More details</span>
								<div id="hidden-bean-info-guat">
									<p>Region: Ambanja, Diana Region</p>
									<p>Climate: hot and dry</p>
									<p>
										Producer: Grown and fermented on the farm this Madagascar cacao is organic and 
										fairly traded and direct from the SOMIA farm, certified organic by ECOCERT, SA.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="bean-info">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bean-peru.png" alt="Cacao pod with Peruvian flag">
								<h3>Madagascar</h3>
								<p>Tasting notes: red berries, lemon and nuts with a bright acidity</p>
								<span>> More details</span>
								<div id="hidden-bean-info-mad">
									<p>Region: Ambanja, Diana Region</p>
									<p>Climate: hot and dry</p>
									<p>
										Producer: Grown and fermented on the farm this Madagascar cacao is organic and 
										fairly traded and direct from the SOMIA farm, certified organic by ECOCERT, SA.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="bean-info">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bean-peru.png" alt="Cacao pod with Peruvian flag">
								<h3>Peru</h3>
								<p>Tasting notes: delicate aroma of banana, black olives, red wine and aged balsamic</p>
								<span>> More details</span>
								<div id="hidden-bean-info-peru">
									<p>Region: Ambanja, Diana Region</p>
									<p>Climate: hot and dry</p>
									<p>
										Producer: Grown and fermented on the farm this Madagascar cacao is organic and 
										fairly traded and direct from the SOMIA farm, certified organic by ECOCERT, SA.
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
