<?php
/**
 * Template Name: Process
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
			
			<section class="header-offset" id="process-content">
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
						<?php $beans = CFS()->get( 'bean' ); 
						foreach ( $beans as $bean ) : ?>
						<li>
							<img class="bean-img" src="<?php echo $bean['bean_image']?>" alt="<?php $bean['title'] ?>">
							<div class="bean-info">
								<h3><?php echo $bean['title']?></h3>
								<h4>Region:</h4>
								<p><?php echo $bean['region']?></p>
								<h4>Tasting Notes:</h4>
								<p><?php echo $bean['tasting_notes']?></p>
								<a id="more-details-1" class="more-details show-more-details">details</a>
								<div id="hidden-bean-info" class="hidden-bean-info">
									<p>
										<?php echo $bean['description']?>
									</p>
								</div>
							</div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
