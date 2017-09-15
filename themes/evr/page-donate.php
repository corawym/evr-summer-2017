<?php
/**
 * The template for displaying donate page.
 *
 * @package EVR_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <section class="hero-banner donate-hero-banner container-full">
        <div class="hero-content-container">
          <div class="hero-content container-max1080 container-padding">
            <h1 class="hero-content-title">donate</h1>
            <p class="hero-content-description">East Van Roasters is a non-profit initiative benefiting the women residents of the Rainier Hotel.</p> 
            <a class="hero-button" href="#donate-content">Learn More <i class="fa fa-fw fa-arrow-circle-down" aria-hidden="true"></i></a>
          </div>
        </div>
      </section>

      <section id="donate-content">
        <div class="container-white-bg-content container-separator-top-bottom">
          <h3>East Van Roasters is a non-profit initiative benefiting the women residents of the Rainier Hotel.</h3>
          <p>We are a fully registered charity and would love to have your support!</p>
          
          <div class="container-separator-top-bottom">
            <h3 class="text-center">You can choose the proceeds to go to:</h3>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/donate/donation-icon-1.svg" alt="A icon of donation box">
            <p class="text-center">Suport the women in the program. The proceeds will be given as honorarium to our peers.</p>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/donate/donation-icon-2.svg" alt="A icon of cooking tools">
            <p class="text-center">Help us raise funds to hire more staff and purchase equiments needed to increase our production capacity.</p>
          </div>

          <div>
            <h3 class="text-center">Three ways you can support:</h3>
            <ol class="donation-way-list">
              <li>Send a cheque (payable to East Van Roasters) to 319 Carrall Street, Vancouver, BC, V6B 2J4. 
                If your donation exceeds $50.00 we are happy to provide a charitable tax receipt - 
                we ask that you include your name and return address, as well as a self-addressed stamped envelope if possible.</li>
              <li>Stop by the shop and donate by cash, debit or credit card.</li>
              <li>Purchase our products.</li>
            </ol>
            <div class="text-center">
              <div class="button-border">
                <a href="#">
                  <div class="border1">
                    <div class="border2 text-center">Donate Now</div>
                  </div>
                </a>   
              </div>
            </div>
          </div>

        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
