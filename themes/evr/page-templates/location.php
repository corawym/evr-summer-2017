<?php
/**
 * Template Name: Location
 *
 * @package EVR_Theme
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

			<section class="hero-banner location-hero-banner container-full">
        <div class="hero-content-container">
          <div class="hero-content container-max1080 container-padding">
            <h1 class="hero-content-title">location</h1>
            <p class="hero-content-description">East Van Roasters (319 Carrall Street in the Rainier Hotel) is 
              a 16-seat specialty cafe and social enterprise of the PHS Community Services Society.</p> 
            <a class="hero-button" href="#location-content">Learn More <i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></a>
          </div>
        </div>
      </section>

			<!-- Below is east van roaster basic information -->
			<section class="location-evr-info-container container-full"  id="location-content">

				<div class="container-white-bg-content container-separator-top-bottom">
					<?php the_title( '<h2 class="header-underline-black text-center">', '</h2>'); ?>
					<div class="location-evr-info-content display-flex-wrap">
						<p class="location-evr-title">Address</p>
						<p class="location-evr-detail"><?php echo CFS()->get( 'evr_address' ); ?></p>
						<p class="location-evr-title">Phone</p>
						<p class="location-evr-detail"><?php echo CFS()->get( 'evr_phone' ); ?></p>
						<p class="location-evr-title">Hours</p>
						<div class="location-evr-detail location-evr-business">
							<p>Monday</p>
							<p><?php echo CFS()->get( 'monday' ); ?></p>
						</div>
						<p class="location-evr-title">Email</p>
						<p class="location-evr-detail"><?php echo CFS()->get( 'evr_email' ); ?></p>
					</div>
				</div>
			</section>

			<!-- Below is other locations for the chocolates and coffee-->
			<section class="location-others-container container-full">

				<div class="location-section container-max800 display-flex-wrap container-separator-top-bottom">
					<h3 class="location-section-title">
						<?php $section_chocolate_bars_coffee_beans = CFS()->get_field_info( 'chocolate_bars_coffee_beans' );
							echo $section_chocolate_bars_coffee_beans['label']; ?>
					</h3>
					<div class="location-items-container display-flex-wrap">
						<?php	$chocolate_bars_coffee_beans = CFS()->get( 'chocolate_bars_coffee_beans' );
							foreach ( $chocolate_bars_coffee_beans as $chocolate_bars_coffee_beans_items ) { ?>
							<p><?php echo $chocolate_bars_coffee_beans_items['store_name']; ?></p>
							<p><?php echo $chocolate_bars_coffee_beans_items['address']; ?></p>
							<p><?php echo $chocolate_bars_coffee_beans_items['phone']; ?></p>
							<p><?php echo $chocolate_bars_coffee_beans_items['website']; ?></p>
						<?php } ?>
					</div>
				</div>



			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>