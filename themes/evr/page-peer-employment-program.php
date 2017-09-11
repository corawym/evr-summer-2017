<?php
/**
 * The template for display peer employment page.
 *
 * @package EVR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section class="hero-banner pep-hero-banner container-full">
        <div class="hero-content-container container-padding">
          <div class="hero-content container-max800">
            <h1 class="hero-content-title">peer employment</h1>
            <p class="hero-content-description">East Van Roasters is a 16-seat specialty cafe and social enterprise of the PHS Community Services Society.  Designed to provide pre-employment training and work opportunity for the women residents of the Rainier Hotel.</p> 
            <a class="hero-button" href="#pep-content">Learn More <i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></a>
          </div>
        </div>
      </section>

      <section id="pep-content">
        <div class="container-white-bg-content container-separator-top-bottom">
          <h3>East Van Roasters is a non-profit initiative benefiting the women residents of the Rainier Hotel.</h3>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pep/peer-employment-program.png" alt="A picture of several women attend peer employment program">
          <p>Since East Van Roasters opened in 2013, roughly 25 women have come through the program. 
            A lot of the women have expressed that having the opportunity to work here has boosted their confidence. They feel comfortable doing other things in their lives they maybe wouldn’t have. Hearing stories of people moving onto full-time employment elsewhere, and going back to school, and moving on and living forward feels like the peer emplyment program is really fulfilling the purpose that it was meant to.</p>
          <p>We are a fully registered charity and would love to have your support!
            Learn how you can donate.</p>
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
